<?php

namespace App;

use Brick\Money\Money as BrickMoney;
use App\Models\ExchangeRate;
use Brick\Money\Context\CustomContext;
use Symfony\Component\Intl\Currencies;

use function config;
use function today;
use function transform;

/**
 * Class Money
 * @package App
 * @mixin BrickMoney
 */
class Money
{
    public int $amount;
    public string $fromCurrency = 'DKK';
    public string $toCurrency = 'DKK';
    public ?ExchangeRate $exchangeRate = null;

    /**
     * Create a new Money instance
     *
     * @param integer $amount
     */
    private function __construct($amount)
    {
        $this->amount = (int)$amount;
    }

    public static function format()
    {
        return static::make(...func_get_args())
            ->formatTo(config('app.locale'));
    }

    public static function make($amount, string $toCurrency = 'DKK', string $fromCurrency = 'DKK', $exchangeRateDate = null)
    {
        return (new static($amount))
            ->from($fromCurrency)
            ->to($toCurrency, $exchangeRateDate)
            ->resolve();
    }

    /**
     * Proxy calls to the underlying money inside
     *
     * @param string $method
     * @param array $params
     * @return mixed
     */
    public function __call(string $method, array $params)
    {
        return $this->resolve()->$method(...$params);
    }

    public function from(string $currency)
    {
        $this->fromCurrency = $currency;

        return $this;
    }

    public function to(string $currency, $exchangeRateDate = null)
    {
        $this->toCurrency = $currency;

        if ($currency !== config('currency.default')) {
            if ($exchangeRateDate) {
                $this->loadHistoricalExchangeRate($currency, $exchangeRateDate);
            } else {
                $this->loadLatestExchangeRate($currency);
            }
        }

        return $this;
    }

    /**
     * Create an instance of Akaunting Money
     *
     * @return BrickMoney
     */
    public function resolve()
    {
        if ($this->exchangeRate) {
            return BrickMoney::of(
                $this->amount,
                $this->exchangeRate->from_currency,
                new CustomContext(
                    Currencies::getFractionDigits($this->exchangeRate->from_currency)
                )
            )->convertedTo(
                $this->exchangeRate->to_currency,
                $this->exchangeRate->value,
                new CustomContext(
                    Currencies::getFractionDigits($this->exchangeRate->to_currency)
                )
            );
        }

        return BrickMoney::of(
            $this->amount,
            $currency = ($this->toCurrency ?? $this->fromCurrency),
            new CustomContext(
                Currencies::getFractionDigits($currency)
            )
        );
    }

    /**
     * @param string $currency
     * @param string|null $exchangeRateDate
     */
    private function loadHistoricalExchangeRate($currency, $exchangeRateDate): void
    {
        $this->exchangeRate = transform($exchangeRateDate, function ($date) use ($currency) {
            if ($rate = ExchangeRate::toCurrency($currency, $date)->first()) {
                return $rate;
            }

            return ExchangeRate::latestToCurrency($currency)->firstOrFail();
        });
    }

    private function loadLatestExchangeRate($currency): void
    {
        $this->exchangeRate = transform($currency, function ($currency) {
            if ($rate = ExchangeRate::toCurrency($currency, today())->first()) {
                return $rate;
            }

            return ExchangeRate::latestToCurrency($currency)->firstOrFail();
        });
    }
}

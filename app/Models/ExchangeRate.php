<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\Date;
use function config;
use function floor;
use function is_numeric;
use function round;

class ExchangeRate extends Model
{
    protected $guarded = [];

    protected $casts = [
        'date' => 'date'
    ];

    /**
     * Find the latest exchange rate for converting to given currency
     *
     * @param string $currency
     * @return Builder<ExchangeRate>
     * @throws ModelNotFoundException
     */
    public static function latestToCurrency(string $currency)
    {
        return static::query()
            ->where('from_currency', config('currency.default'))
            ->where('to_currency', $currency)
            ->latest();
    }

    /**
     * Get the exchange rates to given currency at given date
     *
     * @param string $currency
     * @param string $date
     * @return Builder<ExchangeRate>
     * @throws ModelNotFoundException
     */
    public static function toCurrency(string $currency, $date)
    {
        return static::query()
            ->where('from_currency', config('currency.default'))
            ->where('to_currency', $currency)
            ->where('date', Date::make($date)->toDateString());
    }

    public function scopeSearch($query, $value)
    {
        if (is_numeric($value)) {
            return $query->where(function ($query) use ($value) {
                $query
                    ->where('value', '>=', (int)round($value))
                    ->where('value', '<=', (int)floor($value) + 1);
            });
        }

        $term = '%' . $value . '%';

        return $query->where(function ($query) use ($term) {
            $query->where('to_currency', 'like', $term);
        });
    }
}

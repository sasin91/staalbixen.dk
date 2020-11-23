<?php

namespace App\Enums;

use App\Casts\ProductStockCast;
use Illuminate\Contracts\Database\Eloquent\Castable;
use Illuminate\Contracts\Database\Eloquent\CastsAttributes;

final class ProductStock implements Castable
{
    const EMPTY = 0;
    const LOW = 10;
    const HIGH = 50;
    const FULL = 500;

    public int $value;

    public static array $types = [
        self::EMPTY => 'bg-red-500 shadow-solid text-red-900',
        self::LOW => 'bg-orange-500 shadow-solid text-orange-900',
        self::HIGH => 'bg-green-500 shadow-solid text-green-900'
    ];

    public static function map()
    {
        $map = [];

        for ($i = -50; $i <= 500; $i++) {
            $map[$i] = static::mappedValue($i);
        }

        return $map;
    }

    /**
     * ProductStock constructor.
     * @param int $value
     */
    public function __construct(int $value)
    {
        $this->value = $value;
    }

    public static function mappedValue($value)
    {
        if ($value <= self::EMPTY) {
            return self::EMPTY;
        }

        if ($value <= self::LOW) {
            return self::LOW;
        }

        return self::HIGH;
    }

    public function css()
    {
        return static::$types[static::mappedValue($this->value)];
    }

    public function any(): bool
    {
        return $this->value >= 1;
    }

    public function none(): bool
    {
        return !$this->any();
    }

    public static function castUsing(array $arguments): CastsAttributes
    {
        return new ProductStockCast;
    }
}

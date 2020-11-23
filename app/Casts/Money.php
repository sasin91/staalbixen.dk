<?php

namespace App\Casts;

use Illuminate\Contracts\Database\Eloquent\CastsAttributes;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use function config;

class Money implements CastsAttributes
{
    /**
     * Cast the given value to a Money object
     *
     * @param  \Illuminate\Database\Eloquent\Model  $model
     * @param  string  $key
     * @param  mixed  $value
     * @param  array  $attributes
     * @return \Brick\Money\Money
     */
    public function get($model, $key, $value, $attributes)
    {
        return \App\Money::make(
            (int)$value,
            Arr::get(
                $attributes,
                Str::before($key, '_') . '_currency',
                $attributes['currency'] ?? config('currency.default')
            )
        );
    }

    /**
     * Prepare the given value for storage.
     *
     * @param  \Illuminate\Database\Eloquent\Model  $model
     * @param  string  $key
     * @param  \Brick\Money\Money|float  $value
     * @param  array  $attributes
     * @return mixed
     */
    public function set($model, $key, $value, $attributes)
    {
        if ($value instanceof \Brick\Money\Money) {
            return $value->getAmount()->toFloat();
        }

        return $value;
    }
}

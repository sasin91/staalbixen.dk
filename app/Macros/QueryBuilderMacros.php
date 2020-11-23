<?php

namespace App\Macros;

use function data_get;
use BenSampo\Enum\Enum;

use function is_string;
use Illuminate\Support\Str;
use function class_basename;
use function is_subclass_of;
use Illuminate\Support\Facades\Date;
use Illuminate\Database\Query\Builder;

/**
 * Class BuilderMacros
 * 
 * @package App\Macros
 * @mixin Builder
 */
class QueryBuilderMacros
{
    public function enum()
    {
        return function ($enum, $column = null) {
            if (is_subclass_of($enum, Enum::class)) {
                return $this->where(
                    is_string($column) ? $column : Str::snake(class_basename($enum)),
                    $enum->value
                );
            }

            return $this->where($enum, data_get($column, 'enum', $column));
        };
    }

    public function createdAt()
    {
        return function ($date) {
            return $this
                ->where('created_at', '>=', Date::make($date)->startOfDay()->toDateTimeString())
                ->where('created_at', '<=', Date::make($date)->endOfDay()->toDateTimeString());
        };
    }
}

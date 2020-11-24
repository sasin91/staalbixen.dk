<?php

namespace App\Nova;

use App\Enums\PaymentCategory;
use App\Enums\PaymentType;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Laravel\Nova\Fields\Currency;
use Laravel\Nova\Fields\DateTime;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Http\Requests\NovaRequest;
use SimpleSquid\Nova\Fields\Enum\Enum;

class Payment extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Models\Payment::class;

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'status';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'id',
        'status',
        'gateway',
        'gateway_id'
    ];

    /**
     * Get the fields displayed by the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function fields(Request $request)
    {
        return [
            ID::make(__('ID'), 'id')
                ->sortable(),

            Enum::make(__('Status'), 'status')
                ->sortable(),

            Select::make(__('Gateway'), 'gateway')
                ->options(Arr::pluck(static::$model::GATEWAYS, 'name'))
                ->sortable(),

            Text::make(__('Gateway ID'), 'gateway_id')
                ->sortable(),

            Enum::make(__('Category'), 'category')
                ->attachEnum(PaymentCategory::class)
                ->sortable(),

            Enum::make(__('Type'), 'type')
                ->attachEnum(PaymentType::class)
                ->sortable(),

            Currency::make(__('Amount'), 'amount')
                ->sortable(),

            DateTime::make(__('Paid'), 'paid_at'),
            DateTime::make(__('Refunded'), 'refunded_at')
        ];
    }

    /**
     * Get the cards available for the request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function cards(Request $request)
    {
        return [];
    }

    /**
     * Get the filters available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function filters(Request $request)
    {
        return [];
    }

    /**
     * Get the lenses available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function lenses(Request $request)
    {
        return [];
    }

    /**
     * Get the actions available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function actions(Request $request)
    {
        return [];
    }
}

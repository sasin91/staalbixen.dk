<?php

namespace App\Nova;

use App\Enums\AddressType;
use App\Enums\Country;
use App\Enums\DeliveryStatus;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\DateTime;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Number;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Http\Requests\NovaRequest;
use SimpleSquid\Nova\Fields\Enum\Enum;

class Delivery extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Models\Delivery::class;

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'id';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'status',
        'customer_name',
        'customer_email',
        'customer_phone',
        'address',
        'postal_code',
        'city'
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
                ->attachEnum(DeliveryStatus::class)
                ->sortable(),

            BelongsTo::make(__('Provider'), 'provider', DeliveryProvider::class)
                ->sortable()
                ->showOnIndex(),

            Text::make(__('Token'), 'provider_token')
                ->onlyOnDetail(),

            Text::make(__('Customer Name'), 'customer_name')
                ->sortable(),

            Text::make(__('Customer Email'), 'customer_email')
                ->sortable(),

            Text::make(__('Customer Phone'), 'customer_phone')
                ->sortable(),

            Enum::make(__('Address Type'), 'address_type')
                ->attachEnum(AddressType::class)
                ->sortable(),

            Text::make(__('Address'), 'address')
                ->sortable(),

            Number::make(__('Postal Code'), 'postal_code')
                ->sortable(),

            Text::make(__('City'), 'city')
                ->sortable(),

            BelongsTo::make(__('Customer'), 'customer', User::class)
                ->sortable(),

            Enum::make(__('Country'), 'country')
                ->attachEnum(Country::class)
                ->sortable(),

            Text::make(__('Notes'), 'notes')
                ->onlyOnDetail(),

            DateTime::make(__('Delivered'), 'delivered_at'),
            DateTime::make(__('Created'), 'created_at'),
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

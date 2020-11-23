<?php

namespace App\Http\Livewire\Checkout;

use App\Enums\Country;
use App\Enums\AddressType;
use App\Enums\DeliveryStatus;
use Illuminate\Support\Fluent;
use App\Models\DeliveryProvider;
use App\Repositories\CityRepository;
use Illuminate\Support\Facades\Auth;
use \App\Models\Delivery as DeliveryModel;

trait Delivery
{
    /**
     * The delivery model we're filling
     *
     * @var \App\Models\Delivery
     */
    public $delivery;

    /**
     * Initialize gets called every request,
     * so here we'll assign the variables the user cannot change
     * aswell as instantiating the model
     *
     * @return void
     */
    public function initializeDelivery()
    {
        if (!$this->delivery) {
            $this->delivery = ($this->cart->delivery ?? new DeliveryModel);
        }

        $this->delivery->status = DeliveryStatus::INCOMPLETE;
        $this->delivery->country = Country::DNK;
        $this->delivery->customer()->associate(Auth::user());
    }

    /**
     * Mount gets called only once per lifecycle,
     * so here we'll assign the properties the user can change
     *
     * @return void
     */
    public function bootDelivery()
    {
        $this->delivery->provider()->associate($this->deliveryProviders->first());

        if ($this->delivery->customer) {
            $this->delivery->customer_name ??= $this->delivery->customer->name;
            $this->delivery->customer_email ??= $this->delivery->customer->email;
        }

        $this->delivery->address_type = AddressType::PRIVATE;
    }

    public function getCityRepositoryProperty()
    {
        return collect(
            app(CityRepository::class)->allWhereCountry(
                $this->delivery->country->value
            )
        )->mapInto(Fluent::class);
    }

    public function getCitiesProperty()
    {
        return $this->cityRepository->pluck('city')->all();
    }

    public function getPostalCodesProperty()
    {
        return $this->cityRepository->pluck('code')->all();
    }

    public function getDeliveryProvidersProperty()
    {
        return DeliveryProvider::all();
    }

    public function selectProvider($id)
    {
        if ($oldProvider = $this->delivery->provider ?: $this->delivery->provider()->first()) {
            $this->cart->total_cost -= $oldProvider->price;
        }

        if ($newProvider = $this->delivery->provider()->associate($id)->provider) {
            $this->cart->total_cost += $newProvider->price;
        }

        if ($this->cart->isDirty('total_cost')) {
            $this->cart->saveOrFail();

            $this->emit('Cart:updated');
        }

        if ($this->delivery->isDirty()) {
            $this->delivery->saveOrFail();
        }
    }
}

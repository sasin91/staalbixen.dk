<?php

namespace App\Http\Livewire;

use App\Enums\Country;
use Livewire\Component;
use App\Enums\AddressType;
use App\Enums\PaymentType;
use Illuminate\Support\Arr;
use App\Enums\PaymentStatus;
use BenSampo\Enum\Rules\Enum;
use App\Contracts\CurrentCart;
use App\Enums\PaymentCategory;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\URL;
use App\Http\Livewire\Checkout\Payment;
use App\Http\Livewire\Checkout\Delivery;
use App\Http\Livewire\Checkout\Purchase;

/**
 * @property-read \App\Models\Cart|\App\Contracts\CurrentCart $cart
 */
class Checkout extends Component
{
    use Delivery,
        Payment,
        Purchase;

    use InteractsWithCurrentCart;

    public function getCartProperty(CurrentCart $cart)
    {
        return $cart->load('items', 'payment', 'delivery', 'delivery.customer');
    }

    public function mount()
    {
        $this->bootDelivery();
        $this->bootPayment();
    }

    public function updated($field, $value)
    {
        switch ($field) {
            case 'delivery.postal_code':
                $this->delivery->city = optional(
                    $this->cityRepository->firstWhere('code', $value)
                )->city;
                break;

            case 'delivery.city':
                $this->delivery->postal_code = optional(
                    $this->cityRepository->firstWhere('city', $value)
                )->code;
                break;
        }

        $this->validateOnly($field);
    }

    public function rules()
    {
        return             [
            'conditionsAccepted' => 'required|in:true,1',

            'payment.status' => ['required', new Enum(PaymentStatus::class)],
            'payment.category' => ['required', new Enum(PaymentCategory::class)],
            'payment.type' => ['required', new Enum(PaymentType::class)],
            'payment.amount' => ['required', 'numeric'],

            'payment.gateway' => ['required', 'string', Rule::in(Arr::pluck($this->gateways, 'name'))],

            'delivery.provider_id' => ['required', Rule::exists('delivery_providers', 'id')],
            'delivery.customer_name' => ['required', 'string', 'min:3', 'max:254'],
            'delivery.customer_email' => ['required', 'email'],
            'delivery.customer_phone' => ['required', 'numeric'],
            'delivery.address_type' => ['required', new Enum(AddressType::class)],
            'delivery.address' => ['required', 'string', 'max:254'],
            'delivery.postal_code' => ['required', 'alpha_num', 'string', 'max:254'],
            'delivery.city' => ['required', 'string', 'max:254'],
            'delivery.country' => ['required', new Enum(Country::class)],
        ];
    }

    public function messages()
    {
        return [
            'conditionsAccepted.in' => __('Please accept the conditions'),
        ];
    }

    public function complete()
    {
        $this->validate();

        $this->cart->payment()->associate(
            $this->payment->saveOrFail()
        );

        $this->cart->delivery()->associate(
            $this->delivery->saveOrFail()
        );

        $this->cart->markAsPurchased();

        $this->redirect(
            URL::signedRoute('thanks', ['cart' => $this->cart])
        );
    }

    public function render()
    {
        return view('livewire.checkout')
            ->layout('layouts.guest')
            ->with(
                [
                    'addressTypes' => AddressType::asSelectArray(),
                    'countries' =>  Country::asSelectArray(),
                    'country' => Country::make($this->delivery->country),

                    'items' => $this->cart->items
                ]
            );
    }
}

<?php

namespace App\Http\Livewire\Checkout;

use App\Enums\PaymentType;
use App\Enums\PaymentStatus;
use App\Enums\PaymentCategory;
use App\Models\Payment as PaymentModel;

trait Payment
{
    /**
     * The payment for this checkout
     *
     * @var \App\Models\Payment
     */
    public $payment;

    public function initializePayment()
    {
        if (!$this->payment) {
            $this->payment = ($this->cart->payment ?? new PaymentModel);
        }

        $this->payment->status = PaymentStatus::PENDING();
        $this->payment->category = PaymentCategory::REVENUE();
        $this->payment->type = PaymentType::PRODUCT_SALE();
        $this->payment->gateway = $this->gateways[0]->name;
        $this->payment->amount = $this->cart->totalCost();
    }

    public function bootPayment()
    {
        $this->payment->gateway = $this->gateways[0]->name;
    }

    public function getGatewaysProperty()
    {
        return array_map(
            static fn (array $gateway) => (object)$gateway,
            PaymentModel::GATEWAYS
        );
    }
}

<?php

namespace App\Http\Livewire\Checkout;

trait Purchase
{
    /**
     * Whether the purchase conditions has been accepted
     *
     * @var bool
     */
    public bool $conditionsAccepted = false;

    public function getCanBePurchasedProperty(): bool
    {
        return $this->conditionsAccepted;
    }

    public function addProductToCart($productId)
    {
        $this->addToCart($productId);

        $this->cart->refresh();
    }

    public function removeProductFromCart($productId)
    {
        $this->removeFromCart($productId);

        $this->cart->refresh();
    }
}

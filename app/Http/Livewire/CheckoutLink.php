<?php

namespace App\Http\Livewire;

use App\Contracts\CurrentCart;
use App\Money;
use Livewire\Component;

class CheckoutLink extends Component
{
    protected $listeners = [
        'Cart:updated' => '$refresh',
    ];

    public function getTotalCostProperty(CurrentCart $cart)
    {
        return Money::format($cart->totalCost());
    }

    public function render()
    {
        return view('livewire.checkout-link');
    }
}

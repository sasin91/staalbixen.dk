<?php

namespace App\Http\Livewire;

use App\Models\Cart;
use Livewire\Component;

class Thanks extends Component
{
    public Cart $cart;

    public function render()
    {
        return view('livewire.thanks')
            ->with('items', $this->cart->items)
            ->layout('layouts.guest');
    }
}

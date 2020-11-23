<?php

namespace App\Http\Livewire;

use App\Contracts\CurrentCart;
use App\Models\Product;

trait InteractsWithCurrentCart
{
    public function getCartProperty(CurrentCart $currentCart)
    {
        return $currentCart;
    }

    public function removeFromCart($productId): Product
    {
        $product = Product::findOrFail($productId);

        $this->cart->removeProduct($product);

        $this->emit(
            'Cart:updated',
            $productId
        );

        return $product;
    }

    public function addToCart($productId): Product
    {
        $product = Product::purchasable()->findOrFail($productId);

        $this->cart->addProduct($product);

        $this->emit(
            'Cart:updated',
            $productId
        );

        return $product;
    }
}

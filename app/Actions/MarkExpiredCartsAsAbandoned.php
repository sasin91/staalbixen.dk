<?php

namespace App\Actions;

use App\Models\Cart;
use App\Models\Product;

class MarkExpiredCartsAsAbandoned
{
    public function execute()
    {
        Cart::expired()
            ->with('items')
            ->each(static function (Cart $cart) {
                $cart->markAsAbandoned();

                foreach ($cart->items as $item) {
                    Product::query()
                        ->where('id', $item->product_id)
                        ->increment('stock', $item->quantity);
                }
            });
    }
}

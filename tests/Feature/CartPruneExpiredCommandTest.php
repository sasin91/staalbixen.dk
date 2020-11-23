<?php

namespace Tests\Feature;

use App\Console\Commands\CartPruneExpiredCommand;
use App\Enums\CartStatus;
use App\Models\Cart;
use App\Models\Product;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Date;
use Tests\TestCase;

class CartPruneExpiredCommandTest extends TestCase
{
    use RefreshDatabase;

    public function testItMarksTheExpiredCartsAsAbandonedAndRestocksTheProducts()
    {
        Date::setTestNow('2020-11-17 08:44:21');

        $product = Product::factory()->create(['stock' => 99]);

        $cart = Cart::factory()->expired()->create();
        $cart->items()->create(
            [
                'quantity' => 1,
                'product_id' => $product->id,
                'cost' => 0,
            ]
        );

        $this->artisan(CartPruneExpiredCommand::class)
            //->expectsOutput("1 carts had expired.")
            ->run();

        $this->assertDatabaseHas('carts', [
            'id' => $cart->id,
            'status' => CartStatus::ABANDONED,
            'abandoned_at' => '2020-11-17 08:44:21'
        ]);

        $this->assertDatabaseHas('products', [
            'id' => $product->id,
            'stock' => 100
        ]);
    }
}

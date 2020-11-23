<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\Cart;
use App\Models\Product;
use Illuminate\Support\Str;
use App\Contracts\CurrentCart;
use App\Aggregates\CartAggregate;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CurrentCartTest extends TestCase
{
    use RefreshDatabase;

    protected Cart $cart;

    protected function setUp(): void
    {
        parent::setUp();

        $this->cart = Cart::factory()->create();
        session(['cart_id' => $this->cart->id]);
    }

    public function testItResolvesTheCurrentCartInSession()
    {
        $this->assertTrue(
            app(CurrentCart::class)->is($this->cart)
        );
    }

    public function testCanAddAProductToCart()
    {
        $product = Product::factory()->hasLatestPrice()->create(
            [
                'stock' => 10
            ]
        );

        $this->cart->addProduct($product);

        $this->assertTrue(
            $this->cart->containsProduct($product)
        );

        $this->assertDatabaseHas(
            'products',
            [
                'id' => $product->id,
                'stock' => 9
            ]
        );
    }

    public function testCanRemoveAProductFromTheCart()
    {
        $product = Product::factory()->hasLatestPrice()->create(
            [
                'stock' => 5
            ]
        );

        $this->cart->addProduct(
            $product
        );

        $this->cart->removeProduct(
            $product
        );

        $this->assertFalse(
            $this->cart->containsProduct($product)
        );

        $this->assertDatabaseHas(
            'products',
            [
                'id' => $product->id,
                'stock' => 5
            ]
        );
    }
}

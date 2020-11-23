<?php

namespace Tests\Feature;

use App\Contracts\CurrentCart;
use App\Http\Livewire\ProductList;
use App\Models\Product;
use Database\Seeders\ProductCategorySeeder;
use Database\Seeders\ProductSeeder;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class ProductListTest extends TestCase
{
    use RefreshDatabase;

    public function testCanSearchProducts()
    {
        $this->seed(
            [
                ProductCategorySeeder::class,
                ProductSeeder::class
            ]
        );

        Livewire::test(ProductList::class)
            ->set('search', 'Rullebord')
            ->assertSee('Rullebord til digital vægt');
    }

    public function testCanAddAProductToTheCurrentCart()
    {
        $product = Product::factory()
            ->hasLatestPrice()
            ->create();

        $cart = app(CurrentCart::class);

        Livewire::test(ProductList::class)
            ->call('addProductToCart', $product->id)
            ->assertSet('productWasAdded', true)
            ->assertSee(
                __(
                    ':productName was added to cart.',
                    [
                        'productName' => $product->name
                    ]
                )
            );

        $this->assertTrue(
            $cart->containsProduct($product)
        );
    }
}

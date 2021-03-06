<?php

namespace Database\Factories;

use App\Models\ProductPrice;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductPriceFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ProductPrice::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'product_id' => Product::factory(),
            'amount' => $this->faker->numberBetween(25, 2500)
        ];
    }
}

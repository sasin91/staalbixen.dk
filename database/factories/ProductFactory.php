<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Support\Str;
use App\Models\ProductCategory;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $name = $this->faker->bs,
            'slug' => Str::slug($name),
            'description' => $this->faker->paragraph,
            'product_category_id' => ProductCategory::factory(),
            'photo_url' => $this->faker->imageUrl(),
            'stock' => $this->faker->numberBetween(0, 100),
        ];
    }
}

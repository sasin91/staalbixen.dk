<?php

namespace Database\Factories;

use App\Enums\AddressType;
use App\Enums\DeliveryStatus;
use App\Models\Delivery;
use App\Models\DeliveryProvider;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class DeliveryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Delivery::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'status' => DeliveryStatus::INCOMPLETE,
            'provider_id' => DeliveryProvider::factory(),
            'provider_token' => null,
            'customer_id' => User::factory(),
            'customer_name' => null,
            'customer_phone' => null,
            'customer_email' => null,
            'address_type' => AddressType::getRandomInstance(),
            'address' => $this->faker->address,
            'postal_code' => $this->faker->postcode,
            'city' => $this->faker->city,
            'country' => $this->faker->country,
            'notes' => $this->faker->paragraph
        ];
    }
}

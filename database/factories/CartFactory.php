<?php

namespace Database\Factories;

use App\Enums\CartStatus;
use App\Models\Cart;
use App\Models\Delivery;
use App\Models\Payment;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Session;

class CartFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Cart::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'session_id' => Session::getId(),
            'delivery_id' => Delivery::factory(),
            'payment_id' => Payment::factory(),
            'status' => CartStatus::OPEN(),
            'total_cost' => 0,
            'abandoned_at' => null,
            'purchased_at' => null
        ];
    }

    public function expired()
    {
        $this->state(
            [
                'status' => CartStatus::OPEN,
                'created_at' => now()->subMinutes(Cart::EXPIRES_AFTER_MINUTES)
            ]
        );

        return $this;
    }

    public function abandoned()
    {
        $this->state(
            [
                'abandoned_at' => $this->faker->dateTime,
                'status' => CartStatus::ABANDONED()
            ]
        );

        return $this;
    }

    public function purchased()
    {
        $this->state(
            [
                'purchased_at' => $this->faker->dateTime,
                'status' => CartStatus::PURCHASED()
            ]
        );

        return $this;
    }
}

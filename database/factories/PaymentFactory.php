<?php

namespace Database\Factories;

use App\Enums\PaymentCategory;
use App\Enums\PaymentStatus;
use App\Enums\PaymentType;
use App\Models\Payment;
use Illuminate\Database\Eloquent\Factories\Factory;

class PaymentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Payment::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'status' => PaymentStatus::PENDING,
            'gateway' => collect(Payment::GATEWAYS)->pluck('name')->random(),
            'category' => PaymentCategory::getRandomInstance(),
            'type' => PaymentType::getRandomInstance(),
            'amount' => $this->faker->randomDigitNotNull
        ];
    }
}

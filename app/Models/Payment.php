<?php

namespace App\Models;

use App\Enums\PaymentStatus;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    const GATEWAYS = [
        [
            'name' => 'Credit card',
            'description' => 'Card fee: none',
            'icon' => 'heroicon-s-credit-card'
        ],
        [
            'name' => 'Cash',
            'description' => 'Cash on delivery',
            'icon' => 'heroicon-s-currency-dollar'
        ]
    ];

    protected $guarded = [];

    public function markAsRefunded()
    {
        $this->update(
            [
                'status' => PaymentStatus::REFUNDED(),
                'refunded_at' => now(),
            ]
        );

        return $this;
    }

    public function markAsPaid()
    {
        $this->update(
            [
                'status' => PaymentStatus::PAID,
                'paid_at' => now(),
            ]
        );

        return $this;
    }
}

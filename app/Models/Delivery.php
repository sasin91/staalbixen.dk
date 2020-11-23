<?php

namespace App\Models;

use App\Enums\AddressType;
use App\Enums\Country;
use App\Enums\DeliveryStatus;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Delivery extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $casts = [
        'status' => DeliveryStatus::class,
        'country' => Country::class,
        'address_type' => AddressType::class
    ];

    public function customer()
    {
        return $this->belongsTo(User::class, 'customer_id');
    }

    public function provider()
    {
        return $this->belongsTo(DeliveryProvider::class, 'provider_id');
    }
}

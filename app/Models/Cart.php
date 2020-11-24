<?php

namespace App\Models;

use App\Contracts\CurrentCart;
use App\Enums\CartStatus;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model implements CurrentCart
{
    const EXPIRES_AFTER_MINUTES = 120;

    use HasFactory;

    protected $guarded = [];

    protected $casts = [
        'status' => CartStatus::class,
        'abandoned_at' => 'datetime',
        'purchased_at' => 'datetime'
    ];

    public function scopeExpired($query)
    {
        $query
            ->where('status', CartStatus::OPEN)
            ->whereDate('created_at', '<=', now()->subMinutes(static::EXPIRES_AFTER_MINUTES));
    }

    public function customer()
    {
        return $this->belongsTo(User::class, 'customer_id');
    }

    public function items()
    {
        return $this->hasMany(CartItem::class);
    }

    public function delivery()
    {
        return $this->belongsTo(Delivery::class);
    }

    public function payment()
    {
        return $this->belongsTo(Payment::class);
    }

    public function markAsPurchased()
    {
        $this->update(
            [
                'purchased_at' => now(),
                'status' => CartStatus::PURCHASED()
            ]
        );

        return $this;
    }

    public function markAsAbandoned()
    {
        $this->update(
            [
                'abandoned_at' => now(),
                'status' => CartStatus::ABANDONED()
            ]
        );

        return $this;
    }

    public function totalCost(): float
    {
        return (float)$this->total_cost;
    }

    public function isEmpty(): bool
    {
        return $this->items()->count() === 0;
    }

    public function containsProduct(Product $product): bool
    {
        return $this
            ->items()
            ->firstWhere('product_id', $product->id) !== null;
    }

    public function addProduct(Product $product): CurrentCart
    {
        if ($item = $this->items()->firstWhere('product_id', $product->id)) {
            $item->increment('quantity', 1);
            $item->increment('cost', (int)$product->latestPrice->amount);
        } else {
            $this->items()->create(
                [
                    'quantity' => 1,
                    'product_id' => $product->id,
                    'cost' => $product->latestPrice->amount
                ]
            );
        }

        $this->update(
            [
                'total_cost' => $this->items()->sum('cost')
            ]
        );

        $product
            ->toBase()
            ->where('id', $product->id)
            ->decrement('stock');

        return $this;
    }

    public function removeProduct(Product $product): CurrentCart
    {
        if (is_null($item = $this->items()->firstWhere('product_id', $product->id))) {
            return null;
        }

        if ($item->quantity <= 1) {
            $item->delete();
        } else {
            $item->decrement('quantity', 1);
            $item->decrement('cost', (int)$product->latestPrice->amount);
        }


        $this->update(
            [
                'total_cost' => $this->items()->sum('cost')
            ]
        );

        $product
            ->toBase()
            ->where('id', $product->id)
            ->increment('stock');

        return $this;
    }
}

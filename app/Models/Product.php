<?php

namespace App\Models;

use App\Builders\ProductBuilder;
use App\Enums\ProductStock;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static static purchasable()
 * @property-read ProductPrice $latestPrice
 */
class Product extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $casts = [
        'stock' => ProductStock::class
    ];

    /**
     * Get the route key for the model.
     *
     * @return string
     */
    public function getRouteKeyName()
    {
        return 'slug';
    }


    public function scopePurchasable($query)
    {
        return $query->where('stock', '>=', 1);
    }

    public function category()
    {
        return $this->belongsTo(ProductCategory::class, 'product_category_id');
    }

    public function prices()
    {
        return $this->hasMany(ProductPrice::class);
    }

    public function latestPrice()
    {
        return $this->hasOne(ProductPrice::class)->latest();
    }

    public function photos()
    {
        return $this->morphMany(Photo::class, 'model');
    }

    public function newEloquentBuilder($query)
    {
        return new ProductBuilder($query);
    }
}

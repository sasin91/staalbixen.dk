<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EconomyReport extends Model
{
    protected $guarded = [];

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'day';

    /**
     * The "type" of the primary key ID.
     *
     * @var string
     */
    protected $keyType = 'string';

    public function scopeToday($query)
    {
        $query->whereDate('day', today());
    }
}

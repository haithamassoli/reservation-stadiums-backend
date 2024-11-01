<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tournament extends Model
{
    protected $fillable = [
        'title',
        'description',
        'period',
        'status',
        'images',
        'phone',
        'category',
        'age',
        'expire_at',
        'address',
        'location',
        'city_id',
    ];

    public function city()
    {
        return $this->belongsTo(City::class);
    }
}

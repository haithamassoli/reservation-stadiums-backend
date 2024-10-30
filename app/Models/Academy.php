<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Academy extends Model
{
    protected $fillable = [
        'city_id',
        'name',
        'address',
        'location',
        'images',
        'price',
        'status',
        'description',
        'phone',
        'period',
        'category',
        'age',
        'expire_at',
    ];

    public function city()
    {
        return $this->belongsTo(City::class);
    }
}

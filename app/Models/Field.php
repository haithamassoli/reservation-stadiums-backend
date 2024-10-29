<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Field extends Model
{
    protected $fillable = [
        'user_id',
        'city_id',
        'name',
        'address',
        'location',
        'terms',
        "rating",
        'images',
        'discount',
        'discount_description',
        'min_price',
        'status',
    ];

    public function city()
    {
        return $this->belongsTo(City::class);
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function fieldSizes()
    {
        return $this->hasMany(FieldSize::class);
    }

    public function fieldTimes()
    {
        return $this->hasMany(FieldTime::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Field extends Model
{
    protected $fillable = [
        'user_id',
        'city_id',
        'category_id',
        'name',
        'address',
        'location',
        'terms',
        "rating",
        'images',
        'discount',
        'min_price',
        'status',
        'order',
    ];

    public function city()
    {
        return $this->belongsTo(City::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function fieldSizes()
    {
        return $this->hasMany(FieldSize::class);
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    public function seeks()
    {
        return $this->hasMany(Seek::class);
    }

    public function availabilities()
    {
        return $this->hasMany(Availability::class);
    }
}

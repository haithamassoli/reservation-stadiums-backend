<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FieldSize extends Model
{
    protected $fillable = [
        'size',
        'field_id',
        'price_per_hour',
        'discount',
        'expires_at',
        'discount_type',
    ];

    public function field()
    {
        return $this->belongsTo(Field::class);
    }

    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }
}

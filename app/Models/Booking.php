<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $fillable = [
        'user_id',
        'field_id',
        'field_size_id',
        'date',
        'start_time',
        'end_time',
        'status',
        'total_price',
        'cancellation_time',
        'cancellation_fee',
        'notes',
        'discount',
        'payment_method'
    ];

    public function field()
    {
        return $this->belongsTo(Field::class);
    }

    public function fieldSize()
    {
        return $this->belongsTo(FieldSize::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

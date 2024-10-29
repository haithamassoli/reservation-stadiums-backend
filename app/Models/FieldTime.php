<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FieldTime extends Model
{
    protected $fillable = [
        'time',
        'field_id',
        'discount',
        'expires_at',
        'discount_type',
    ];

    public function field()
    {
        return $this->belongsTo(Field::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SpecialAvailability extends Model
{
    protected $fillable = [
        'field_size_id',
        'special_date',
        'start_time',
        'end_time',
        'is_closed',
    ];

    public function fieldSize()
    {
        return $this->belongsTo(FieldSize::class);
    }
}

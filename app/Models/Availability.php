<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Availability extends Model
{
    protected $fillable = [
        'field_size_id',
        'day_of_week',
        'times',
        'is_closed',
    ];

    public function fieldSize()
    {
        return $this->belongsTo(FieldSize::class);
    }
}

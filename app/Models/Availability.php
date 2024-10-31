<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Availability extends Model
{
    protected $fillable = [
        'field_id',
        'day_of_week',
        'open_time',
        'close_time',
        'is_closed',
    ];

    public function field()
    {
        return $this->belongsTo(Field::class);
    }
}

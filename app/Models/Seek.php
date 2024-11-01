<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Seek extends Model
{
    protected $fillable = [
        'city_id',
        'user_id',
        'field_id',
        'title',
        'description',
        'status',
        'expire_at',
        'phone',
        'period',
        'category',
        'age'
    ];

    public function city()
    {
        return $this->belongsTo(City::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function field()
    {
        return $this->belongsTo(Field::class);
    }
}

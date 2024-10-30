<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
  use HasFactory;

  protected $fillable = [
    'name',
  ];

  public $timestamps = false;

  public function fields()
  {
    return $this->hasMany(Field::class);
  }

  public function tournaments()
  {
    return $this->hasMany(Tournament::class);
  }
}

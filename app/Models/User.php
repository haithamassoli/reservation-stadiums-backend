<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'phone',
        'violations',
        'role',
        'uuid',
    ];
    
    public $timestamps = false;

    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }

    public function fields()
    {
        return $this->hasMany(Field::class);
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    public function seeks()
    {
        return $this->hasMany(Seek::class);
    }

    public function hasRole(string $role): bool
    {
        return $this->role === $role;
    }
}

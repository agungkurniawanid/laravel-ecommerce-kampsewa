<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $primaryKey = 'id_user';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    // todo kolom dalam table yang harus di isi manual
    protected $fillable = [
        'id_user',
        'fullname',
        'number_phone',
        'password',
        'date_of_birth',
        'gender',
        'photo',
        'level',
        'bio',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    // todo untuk custom id user
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($user) {
            // Generate a random number with 15 digits
            $randomNumber = mt_rand(1, 999999999999999);
            // Pad the random number with leading zeros to make it 15 digits long
            $paddedNumber = str_pad($randomNumber, 16, '0', STR_PAD_LEFT);
            // Set the id with the 'user' prefix and the padded random number
            $user->id_user = 'user' . $paddedNumber;
        });
    }

    // todo Implementasi metode getJWTIdentifier
    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    // todo Implementasi metode getJWTCustomClaims
    public function getJWTCustomClaims()
    {
        return [];
    }
}

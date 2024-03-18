<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RentalTransaction extends Model
{
    use HasFactory;

    // todo kolom yang harus di isi manual
    protected $fillable = [
        'id_renttrans',
        'id_user',
        'id_product',
        'date_transaction',
        'date_start',
        'date_end',
        'total_price',
        'amount_transaction',
        'payment_status',
    ];

    // todo generate otomatis id
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($renttrans) {
            // Generate a random number with 15 digits
            $randomNumber = mt_rand(1, 999999999999999);
            // Pad the random number with leading zeros to make it 15 digits long
            $paddedNumber = str_pad($randomNumber, 11, '0', STR_PAD_LEFT);
            // Set the id with the 'user' prefix and the padded random number
            $renttrans->id_renttrans = 'renttrans' . $paddedNumber;
        });
    }
}

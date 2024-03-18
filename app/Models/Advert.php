<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Advert extends Model
{
    use HasFactory;

    // todo kolom yang harus di isi manual
    protected $fillable = [
        'id_advert',
        'id_user',
        'heading_advert',
        'description_advert',
        'advertising_start_date',
        'advertising_end_date',
        'budget_advert',
        'payment_status',
        'advert_status',
        'date_created_advert',
    ];

    // todo membuat fungsi generate id iklan otomasis
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($advert) {
            // Generate a random number with 15 digits
            $randomNumber = mt_rand(1, 999999999999999);
            // Pad the random number with leading zeros to make it 15 digits long
            $paddedNumber = str_pad($randomNumber, 14, '0', STR_PAD_LEFT);
            // Set the id with the 'user' prefix and the padded random number
            $advert->id_advert = 'advert' . $paddedNumber;
        });
    }
}

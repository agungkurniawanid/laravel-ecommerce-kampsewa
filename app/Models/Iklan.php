<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Iklan extends Model
{
    use HasFactory;

    // todo kolom yang harus di isi manual
    protected $fillable = [
        'id_iklan',
        'id_user',
        'judul_iklan',
        'deskripsi_iklan',
        'nominal_iklan',
        'status_iklan',
        'tanggal_pembuatan_iklan',
    ];

    // todo membuat fungsi generate id iklan otomasis
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($iklan) {
            // Generate a random number with 15 digits
            $randomNumber = mt_rand(1, 999999999999999);
            // Pad the random number with leading zeros to make it 15 digits long
            $paddedNumber = str_pad($randomNumber, 15, '0', STR_PAD_LEFT);
            // Set the id with the 'user' prefix and the padded random number
            $iklan->id_iklan = 'iklan' . $paddedNumber;
        });
    }
}

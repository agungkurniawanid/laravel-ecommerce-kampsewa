<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KeuntunganKerugian extends Model
{
    use HasFactory;

    // todo kolom yang harus di isi manual
    protected $fillable = [
        'id_keuntungan_kerugian',
        'tanggal_keuntungan_kerugian',
        'total_pemasukan',
        'total_pengeluaran',
        'keuntungan',
        'kerugian',
    ];

    // todo generate otomatis id
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($keuntungan_kerugian) {
            // Generate a random number with 15 digits
            $randomNumber = mt_rand(1, 999999999999999);
            // Pad the random number with leading zeros to make it 15 digits long
            $paddedNumber = str_pad($randomNumber, 11, '0', STR_PAD_LEFT);
            // Set the id with the 'user' prefix and the padded random number
            $keuntungan_kerugian->id_keuntungan_kerugian = 'keuntungan_kerugian' . $paddedNumber;
        });
    }
}

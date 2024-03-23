<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemasukan extends Model
{
    use HasFactory;

    // todo kolom yang harus di isi manual
    protected $fillable = [
        'id_pemasukan',
        'sumber_pemasukan',
        'nominal_pemasukan',
        'tanggal_pemasukan',
        'deskripsi_pemasukan',
    ];

    // todo generate otomatis id
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($pemasukan) {
            // Generate a random number with 15 digits
            $randomNumber = mt_rand(1, 999999999999999);
            // Pad the random number with leading zeros to make it 15 digits long
            $paddedNumber = str_pad($randomNumber, 11, '0', STR_PAD_LEFT);
            // Set the id with the 'user' prefix and the padded random number
            $pemasukan->id_pemasukan = 'pemasukan' . $paddedNumber;
        });
    }
}

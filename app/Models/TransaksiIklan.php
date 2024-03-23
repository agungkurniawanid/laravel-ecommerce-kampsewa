<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransaksiIklan extends Model
{
    use HasFactory;

    // todo kolom yang harus di isi manual
    protected $fillable = [
        'id_transaksi_iklan',
        'id_user',
        'id_iklan',
        'tanggal_transaksi_iklan',
        'tanggal_mulai',
        'tanggal_selesai',
        'nominal_iklan',
        'status_pembayaran',
    ];

    // todo generate otomatis id
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($transaksi_iklan) {
            // Generate a random number with 15 digits
            $randomNumber = mt_rand(1, 999999999999999);
            // Pad the random number with leading zeros to make it 15 digits long
            $paddedNumber = str_pad($randomNumber, 5, '0', STR_PAD_LEFT);
            // Set the id with the 'user' prefix and the padded random number
            $transaksi_iklan->id_transaksi_iklan = 'transaksi_iklan' . $paddedNumber;
        });
    }
}

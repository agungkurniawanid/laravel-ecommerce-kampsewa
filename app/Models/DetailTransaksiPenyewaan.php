<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RentalTransDetail extends Model
{
    use HasFactory;

    // todo kolom yang harus di isi manual
    protected $fillable = [
        'id_detail_transaksi_penyewaan',
        'id_transaksi_penyewaan',
        'id_produk',
        'qty',
        'subtotal',
    ];

    // todo generate otomatis id
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($detail_transaksi_penyewaan) {
            // Generate a random number with 15 digits
            $randomNumber = mt_rand(4, 999999999999999);
            // Pad the random number with leading zeros to make it 15 digits long
            $paddedNumber = str_pad($randomNumber, 8, '0', STR_PAD_LEFT);
            // Set the id with the 'user' prefix and the padded random number
            $detail_transaksi_penyewaan->id_detail_transaksi_penyewaan = 'detail_transaksi_penyewaan' . $paddedNumber;
        });
    }
}

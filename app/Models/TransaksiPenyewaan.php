<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransaksiPenyewaan extends Model
{
    use HasFactory;

    // todo kolom yang harus di isi manual
    protected $fillable = [
        'id_transaksi_penyewaan',
        'id_user',
        'id_produk',
        'tanggal_transaksi_penyewaan',
        'tanggal_mulai',
        'tanggal_selesai',
        'total_harga_penyewaan',
        'status_pembayaran',
        'status_penyewaan',
    ];

    // todo generate otomatis id
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($transaksi_penyewaan) {
            // Generate a random number with 15 digits
            $randomNumber = mt_rand(1, 999999999999999);
            // Pad the random number with leading zeros to make it 15 digits long
            $paddedNumber = str_pad($randomNumber, 1, '0', STR_PAD_LEFT);
            // Set the id with the 'user' prefix and the padded random number
            $transaksi_penyewaan->id_transaksi_penyewaan = 'transaksi_penyewaan' . $paddedNumber;
        });
    }
}

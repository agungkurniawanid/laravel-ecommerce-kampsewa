<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransaksiKeuangan extends Model
{
    use HasFactory;

    // todo kolom yang harus di isi manual
    protected $fillable = [
        'id_transaksi_keuangan',
        'tipe_transaksi_keuangan',
        'nominal_transaksi_keuangan',
        'tanggal_transaksi_keuangan',
        'deskripsi_transaksi_keuangan',
    ];

    // todo generate otomatis id
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($transaksi_keuangan) {
            // Generate a random number with 15 digits
            $randomNumber = mt_rand(1, 999999999999999);
            // Pad the random number with leading zeros to make it 15 digits long
            $paddedNumber = str_pad($randomNumber, 12, '0', STR_PAD_LEFT);
            // Set the id with the 'user' prefix and the padded random number
            $transaksi_keuangan->id_transaksi_keuangan = 'transaksi_keuangan' . $paddedNumber;
        });
    }
}

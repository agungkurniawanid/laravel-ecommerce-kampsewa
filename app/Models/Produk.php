<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;

    // todo kolom yang harus di isi manual
    protected $fillable = [
        'id_produk',
        'id_user',
        'nama_produk',
        'deskripsi_produk',
        'harga_produk',
        'stok_produk',
        'status_produk',
        'gambar_depan',
        'gambar_kiri',
        'gambar_kanan',
        'gambar_belakang',
        'kategori_produk',
    ];

    // todo generate otomatis id
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($produk) {
            // Generate a random number with 15 digits
            $randomNumber = mt_rand(1, 999999999999999);
            // Pad the random number with leading zeros to make it 15 digits long
            $paddedNumber = str_pad($randomNumber, 14, '0', STR_PAD_LEFT);
            // Set the id with the 'user' prefix and the padded random number
            $produk->id_produk = 'produk' . $paddedNumber;
        });
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BeritaWisata extends Model
{
    use HasFactory;

    // todo kolom yang harus di isi manual
    protected $fillable = [
        'id_berita_wisata',
        'title_berita_wisata',
        'deskripsi_konten',
        'author_berita_wisata',
        'tanggal_publish',
        'kategori_berita_wisata',
        'gambar_berita_wisata',
    ];

    // todo generate otomatis id
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($berita_wisata) {
            // Generate a random number with 15 digits
            $randomNumber = mt_rand(1, 999999999999999);
            // Pad the random number with leading zeros to make it 15 digits long
            $paddedNumber = str_pad($randomNumber, 7, '0', STR_PAD_LEFT);
            // Set the id with the 'user' prefix and the padded random number
            $berita_wisata->id_berita_wisata = 'berita_wisata' . $paddedNumber;
        });
    }
}

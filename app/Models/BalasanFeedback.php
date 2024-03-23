<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BalasanFeedback extends Model
{
    use HasFactory;

    // todo kolom yang harus di isi manual
    protected $fillable = [
        'id_balasan_feedback',
        'id_feedback',
        'id_user',
        'tanggal_balasan_feedback',
        'deskripsi_balasan_feedback',
    ];

    // todo membuat fungsi generate id iklan otomasis
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($balasan_feedback) {
            // Generate a random number with 15 digits
            $randomNumber = mt_rand(1, 999999999999999);
            // Pad the random number with leading zeros to make it 15 digits long
            $paddedNumber = str_pad($randomNumber, 4, '0', STR_PAD_LEFT);
            // Set the id with the 'user' prefix and the padded random number
            $balasan_feedback->id_balasan_feedback = 'balasan_feedback' . $paddedNumber;
        });
    }
}

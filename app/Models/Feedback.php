<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    use HasFactory;

    // todo kolom yang harus di isi otomatis
    protected $fillable = [
        'id_feedback',
        'id_user',
        'tanggal_feedback',
        'deskripsi_feedback',
        'kriteria_feedback',
        'status_feedback',
    ];

    // todo membuat fungsi generate id iklan otomasis
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($feedback) {
            // Generate a random number with 15 digits
            $randomNumber = mt_rand(1, 999999999999999);
            // Pad the random number with leading zeros to make it 15 digits long
            $paddedNumber = str_pad($randomNumber, 12, '0', STR_PAD_LEFT);
            // Set the id with the 'user' prefix and the padded random number
            $feedback->id_feedback = 'feedback' . $paddedNumber;
        });
    }
}

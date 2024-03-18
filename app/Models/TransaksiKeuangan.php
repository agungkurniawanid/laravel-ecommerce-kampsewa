<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransaksiKeuangan extends Model
{
    use HasFactory;

    // todo kolom yang harus di isi manual
    protected $fillable = [
        'id_transactionfinance',
        'transaction_type',
        'amount_transactionfinance',
        'date_transactionfinance',
        'description_transactionfinance',
    ];

    // todo generate otomatis id
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($transactionfinance) {
            // Generate a random number with 15 digits
            $randomNumber = mt_rand(1, 999999999999999);
            // Pad the random number with leading zeros to make it 15 digits long
            $paddedNumber = str_pad($randomNumber, 10, '0', STR_PAD_LEFT);
            // Set the id with the 'user' prefix and the padded random number
            $transactionfinance->id_transactionfinance = 'trafinance' . $paddedNumber;
        });
    }
}

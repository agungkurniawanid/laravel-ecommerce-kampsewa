<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    // todo kolom yang harus di isi manual
    protected $fillable = [
        'id_product',
        'id_user',
        'product_name',
        'description_product',
        'price_product',
        'stock_product',
        'status_product',
        'category_product',
        'image-front',
        'image-left',
        'image-right',
        'image-back',
    ];

    // todo generate otomatis id
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($product) {
            // Generate a random number with 15 digits
            $randomNumber = mt_rand(1, 999999999999999);
            // Pad the random number with leading zeros to make it 15 digits long
            $paddedNumber = str_pad($randomNumber, 13, '0', STR_PAD_LEFT);
            // Set the id with the 'user' prefix and the padded random number
            $product->id_product = 'product' . $paddedNumber;
        });
    }
}

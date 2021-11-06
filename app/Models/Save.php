<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Save extends Model
{
    use HasFactory;
    protected $fillable = [
        'product_name',
        'product_code',
        'product_price',
        'sell_price',
        'product_quantity',
        'product_size',
        'image',
        'discount',
        'total_price',
    ];

    public static function getQuery()
    {
    }
}

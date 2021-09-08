<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sell extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_name',
        'product_code',
        'product_quantity',
        'product_price',
        'sell_price',
        'image',
        'product_Size',
    ];
}
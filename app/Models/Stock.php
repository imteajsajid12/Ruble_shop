<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stock extends Model
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
    ];
}
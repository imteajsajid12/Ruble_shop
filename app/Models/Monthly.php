<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Monthly extends Model
{
    use HasFactory;
    protected $fillable = [
        'due_price',
        'pay_price',
        'cost_price',
        'sell_quantity',
        'sell_total_price',
        'product_price',
    ];
}

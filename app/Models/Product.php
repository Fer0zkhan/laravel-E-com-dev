<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_name',
        'product_price',
        'product_sale_price',
        'product_catogery',
        'product_sub_catogery',
        'product_discription',
        'product_img',
        'product_action'
    ];
}

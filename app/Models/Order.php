<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'email',
        'phone',
        'address',
        'state'  ,
        'city'  ,
        'zip_code',
        'user_id',
        'product_id',
        'status'
    ];

    protected $casts = [
        'product_id' => 'array'
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderProduct extends Model
{
    use HasFactory;

    protected $table = 'order_product';

    protected $fillable = [
        'order_id',
        'product_id',
        'quantity',
        'billing_address',
        'billing_city',
        'billing_country',
        'billing_phone',
        'billing_total',
    ];

}

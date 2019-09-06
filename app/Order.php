<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'product_id',
        'shop_id',
        'user_id',
        'reseller_id',
        'quantity',
        'amount',
        'order_status',
        'payment_method',
        'payment_reference',
        'shipping_method',
        'shipping_status',
    ];
}

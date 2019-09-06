<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ShopProduct extends Model
{
    protected $fillable = [
        'user_id',
        'shop_id',
        'product_id',
        'agent_price',
        'profit',
    ];
}

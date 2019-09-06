<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Coupon extends Model
{
    protected $fillable = [
        'product_id',
        'title',
        'discount',
        'start_date',
        'end_date',
        'limit'
    ];
}

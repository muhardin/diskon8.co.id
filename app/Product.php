<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'brand',
        'sku',
        'category_id',
//        'agent_price',
        'seller_price',
        'profit',
        'profit_limit',
        'discount',
        'weight',
        'unit',
        'description',
        'main_image',
        'status',
    ];

    public function category(){
      return $this->belongsTo(Category::class);
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ResellerPackage extends Model
{
    protected $fillable = [
        'title',
        'price',
        'description_price',
        'maximum_product_sale',
        'minimum_price_sale',
        'other_rule',
        'benefit',
    ];

    public function productPrices()
    {
      return $this->hasMany(ProductPrice::class);
    }
}

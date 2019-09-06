<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductPrice extends Model
{
    protected $fillable = [
        'product_id',
        'reseller_package_id',
        'agent_price'
    ];

    public function resellerPackage()
    {
      return $this->belongsTo(ResellerPackage::class);
    }
}

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
    public function setPending()
    {
        $this->attributes['order_status'] = 'pending';
        self::save();
    }

    /**
     * Set status to Success
     *
     * @return void
     */
    public function setSuccess()
    {
        $this->attributes['order_status'] = 'success';
        self::save();
    }

    /**
     * Set status to Failed
     *
     * @return void
     */
    public function setFailed()
    {
        $this->attributes['order_status'] = 'failed';
        self::save();
    }

    /**
     * Set status to Expired
     *
     * @return void
     */
    public function setExpired()
    {
        $this->attributes['order_status'] = 'expired';
        self::save();
    }
}

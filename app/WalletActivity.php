<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WalletActivity extends Model
{
    protected $fillable = [
        'wallet_id',
        'wallet_in',
        'wallet_out',
        'title',
        'order_id',
    ];
}

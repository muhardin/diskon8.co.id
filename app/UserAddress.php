<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserAddress extends Model
{
    protected $fillable = [
        'user_id',
        'title',
        'address',
        'city',
        'province',
        'zip_code',
        'contact_person',
        'is_main_address'
    ];
}

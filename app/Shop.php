<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    protected $fillable = [
        'user_id',
        'domain',
        'company_name',
        'email',
        'phone',
        'reseller_package_id',
        'status',
        'no_rekening',
        'nama_pemilik',
        'nama_bank'
    ];
}

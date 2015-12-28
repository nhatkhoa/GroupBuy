<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = [
        'fullname',
        'email',
        'phone',
        'address',
        'noted'
    ];

    public function orders(){
        return $this->hasMany('App\Model\Order', 'customer_id');
    }
}

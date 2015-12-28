<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    protected $fillable = [
        'deal_id',
        'quantity',
        'price'
    ];

    public function order(){
        return $this->hasOne('App\Model\Order', 'order_id');
    }
}

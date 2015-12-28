<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'quantity',
        'total'
    ];

    public function customer(){
        return $this->belongsTo('customer_id');
    }

    public function details(){
        return $this->hasMany('App\Model\OrderDetail', 'order_id');
    }

}

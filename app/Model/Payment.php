<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $fillable = [
      'type',
        'sub_total',
        'fee',
        'total',
        'money_type'
    ];
}

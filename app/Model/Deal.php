<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Deal extends Model
{
    use SoftDeletes;

    protected $fillable = ['name','list_price','deal_amount','deal_price', 'time_expired', 'description', 'partner_id', 'location', 'noted' ];

}

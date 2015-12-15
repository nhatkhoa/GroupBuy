<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DealImage extends Model
{
    use SoftDeletes;

    protected $fillable = ['deal_id'];

    public function deal(){
        return $this->belongsTo('App\Mode\Deal');
    }

}

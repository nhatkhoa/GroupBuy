<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Deal extends Model
{
    use SoftDeletes;

    protected $fillable = ['name', 'short_description', 'list_price', 'deal_amount', 'stock', 'deal_price', 'time_expired', 'description', 'partner_id', 'location', 'noted', 'category_id' ];

    protected $dates = ['time_expired'];

    public function partner(){
        return $this->belongsTo('App\Model\Partner');
    }

    public function category(){
        return $this->belongsTo('App\Model\Category', 'category_id');
    }

    public function images(){
        $description = $this->getAttributeValue('description');
        preg_match_all( '@src="([^"]+)"@' , $description, $match );
        return array_pop($match);
    }

}

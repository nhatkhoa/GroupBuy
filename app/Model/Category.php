<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name', 'parent_id', 'publish'];

    public function parent(){
        return $this->hasOne('App\Model\Category', 'parent_id');
    }
}

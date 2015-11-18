<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use SoftDeletes;

    protected $fillable = ['name', 'parent_id', 'publish'];

    protected $dates = ['deleted_at'];

    public function parent(){
        return $this->hasOne('App\Model\Category', 'id', 'parent_id');
    }
}

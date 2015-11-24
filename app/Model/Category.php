<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use SoftDeletes;

    protected $fillable = ['name', 'parent_id', 'publish'];

    protected $dates = ['deleted_at'];

    protected $appends = ['childs'];

    protected $hidden = ['created_at', 'updated_at', 'publish', 'parent_id', 'deleted_at'];

    public function parent(){
        return $this->hasOne('App\Model\Category', 'id', 'parent_id');
    }

        public function childs(){
        return $this->hasMany('App\Model\Category', 'parent_id');
    }

    public function getChildsAttribute(){
        return $this->childs()->get();
    }

}

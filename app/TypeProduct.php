<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type_Product extends Model
{
    //
    protected $table = 'categories';
    public function product(){
        return $this->hasMany('App\Product', 'category_id', 'id');
    }
}

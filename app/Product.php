<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $table = "products";
     public function category()
        {
            return $this->belongsTo('App\Category', 'category_id', 'id');
        }
    public function bill_detail()
        {
            return $this->hasMany('App\Bill_details', 'product_id', 'id');
        }
}

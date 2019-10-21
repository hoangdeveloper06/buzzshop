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

    public function bill_details()
        {
            return $this->hasMany('App\BillDetails', 'product_id', 'id');
        }
    public function image()
        {
            return $this->hasMany('App\Image', 'product_id', 'id');
        }
}

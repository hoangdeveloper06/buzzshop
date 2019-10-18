<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $table = 'products';

    public function type_product()
    {
        return $this->belongTo('App\TypeProduct', 'category_id', 'id');
    }
    public function bill_detail()
        {
            return $this->hasMany('App\BillDetail', 'product_id', 'id');
        }
        
}


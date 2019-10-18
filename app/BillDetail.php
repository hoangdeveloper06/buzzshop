<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bill_Detail extends Model
{
    //
    protected $table = 'bill_detail';
    
    public function product()
    {
        return $this->belongsTo('App\Product', 'product_id', 'id');

    }
    
    public function bill()
    {
        return $this->belongsTo('App\Bill', 'bill_id', 'id');
    }
    
}

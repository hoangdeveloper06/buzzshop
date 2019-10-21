<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    //
    protected $table = "bills";
     public function bill_details()
        {
            return $this->hasMany('App\BillDetails', 'product_id', 'id');
        }
    public function customer()
        {
            return $this->belongsTo('App\cusromer', 'customer_id', 'id');
        }
    
   
}

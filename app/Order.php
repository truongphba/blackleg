<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function product(){
        return $this->belongsToMany('App/Product','order_details','order_id','product_id')->withPivot('quantity','unit_price');
    }
}

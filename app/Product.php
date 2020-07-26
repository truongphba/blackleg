<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function category(){
        return $this->belongsTo('App\Category');
    }

    public function collection(){
        return $this->belongsToMany('App\Collection','product_collection','product_id','collection_id');
    }

    public function size(){
        return $this->belongsToMany('App\Size','product_size','product_id','size_id')->withPivot('quantity');
    }

    public function image(){
        return $this->belongsToMany('\App\Image');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Collection extends Model
{
    public function product()
    {
        return $this->belongsToMany('App\Product', 'product_collection', 'collection_id', 'product_id');
    }
}

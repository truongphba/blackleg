<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Size extends Model
{
    public function size()
    {
        return $this->belongsToMany('App/Size');
    }
}

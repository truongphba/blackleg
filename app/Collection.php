<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Collection extends Model
{
    public static $cloudinary_link = 'https://res.cloudinary.com/truongph/image/upload/';
    public function product()
    {
        return $this->belongsToMany('App\Product', 'product_collection', 'collection_id', 'product_id');
    }

    public function getPhotoAttribute()
    {
        if (str_contains($this->thumbnail, 'https://')){
            return $this->thumbnail;
        }
        return self::$cloudinary_link . $this->thumbnail . '.jpg';
    }
}

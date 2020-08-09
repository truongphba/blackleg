<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public static $cloudinary_link = 'https://res.cloudinary.com/truongph/image/upload/';

    public function category(){
        return $this->belongsTo('App\Category');
    }

    public function collection(){
        return $this->belongsToMany('App\Collection','product_collection','product_id','collection_id');
    }

    public function size(){
        return $this->belongsToMany('App\Size','product_size','product_id','size_id')->withPivot('quantity');
    }

    public function images()
    {
        return $this->hasMany('App\Image');
    }

    public function getPhotosAttribute()
    {
        $images = $this->images->where('status', 1);
        $photos = $images->map(function ($image){
            if (str_contains($image->url, 'https://')){
                return $image->url;
            }
            return self::$cloudinary_link . $image->url . '.jpg';
        });
        return $photos;
    }
}

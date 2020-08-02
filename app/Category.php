<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public static $cloudinary_link = 'https://res.cloudinary.com/truongph/image/upload/';

    public function product()
    {
        return $this->hasMany('App\Product');
    }

    public function getPhotoAttribute()
    {
        if (str_contains($this->thumbnail, 'https://')){
            return $this->thumbnail;
        }
        return self::$cloudinary_link . $this->thumbnail . '.jpg';
    }
}

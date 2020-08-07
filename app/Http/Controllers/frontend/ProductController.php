<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Category;
use App\Collection;
use App\Image;
use App\Product;

class ProductController extends Controller
{
    public function productDetail($id){
        $categories = Category::all()->where('status','=',1);
        $collections = Collection::all()->where('status','=',1);
        $products = Product::all()->where('status','=',1);
        $image = Image::where('product_id', '=', $id)->where('status','=',1)->first();
        $product = Product::where('id', '=', $id)->where('status','=',1)->first();
        return view('frontend.product-detail')
            ->with('products', $products)
            ->with('product', $product)
            ->with('categories', $categories)
            ->with('collections', $collections)
            ->with('image', $image);
    }
}

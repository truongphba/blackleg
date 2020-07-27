<?php

namespace App\Http\Controllers\Frontend;

use App\Category;
use App\Collection;
use App\Http\Controllers\Controller;
use App\Product;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index(){
        $categories = Category::all()->where('status','=',1);
        $collections = Collection::all()->where('status','=',1);
        $products = Product::all()->where('status','=',1);
        return view('frontend.index',['categories'=>$categories,'collections'=>$collections,'products'=>$products]);
    }
}

<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Category;
use App\Collection;
use App\Product;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function category($id){
        $products = Product::all()->where('status','=',1);
        $collections = Collection::all()->where('status','=',1);
        $categories = Category::all()->where('status','=',1);
        $category = Category::where('id', '=', $id)->where('status','=',1)->first();
        $product = Product::where('category_id', '=', $id)->where('status','=',1)->paginate(9);

        return view('frontend.product')
            ->with('category', $category)
            ->with('categories', $categories)
            ->with('products', $products)
            ->with('collections', $collections)
            ->with('product', $product);
    }

}

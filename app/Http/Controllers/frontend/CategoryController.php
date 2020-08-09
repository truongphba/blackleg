<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Category;
use App\Collection;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public function category(Request $request,$id){
        $products = Product::all()->where('status','=',1);
        $collections = Collection::all()->where('status','=',1);
        $categories = Category::all()->where('status','=',1)->sortByDesc('price');
        $category = Category::where('id', '=', $id)->where('status','=',1)->first();
        $min_price = $request->get('min_price');
        $max_price = $request->get('max_price');
        $product = Product::where('category_id', '=', $id)->where(function ($query) use($min_price,$max_price){
            if (isset($min_price)){
                $query->where('price','>=',$min_price);
            }
            if (isset($max_price)){
                $query->where('price','<=',$max_price);
            }
        })->paginate(9)->appends($request->only('min_price'))->appends($request->only('max_price'));

        return view('frontend.product')
            ->with('category', $category)
            ->with('categories', $categories)
            ->with('products', $products)
            ->with('collections', $collections)
            ->with('product', $product);
    }

    public function sortProduct(Request $request){

    }

}

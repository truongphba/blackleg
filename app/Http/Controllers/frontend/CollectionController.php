<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Category;
use App\Collection;
use App\Product;
use Illuminate\Http\Request;

class CollectionController extends Controller
{
    public function collection($id){
        $products = Product::all()->where('status','=',1);
        $collections = Collection::all()->where('status','=',1);
        $categories = Category::all()->where('status','=',1);
        $collection = Collection::where('id', '=', $id)->where('status','=',1)->first();

        return view('frontend.collection')
            ->with('collection', $collection)
            ->with('categories', $categories)
            ->with('products', $products)
            ->with('collections', $collections);
    }
}

<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Category;
use App\Collection;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CollectionController extends Controller
{
    public function collection(Request $request, $id){
        $min_price = $request->get('min_price');
        $max_price = $request->get('max_price');
        $collections = Collection::all()->where('status','=',1);
        $categories = Category::all()->where('status','=',1);
        $collection = Collection::where('id', '=', $id)->where('status','=',1)->first();
        $collectionId = DB::table('product_collection')->where('collection_id', '=', $id)->get('product_id');

        $products = Product::all()->where('status','=',1);

        return view('frontend.collection')
            ->with('collection', $collection)
            ->with('categories', $categories)
            ->with('products', $products)
            ->with('collections', $collections)
            ->with('collectionId', $collectionId);
    }
}

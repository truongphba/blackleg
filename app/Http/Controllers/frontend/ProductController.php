<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Category;
use App\Collection;
use App\Image;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function productDetail($id){
        $categories = Category::all()->where('status','=',1);
        $collections = Collection::all()->where('status','=',1);
        $products = Product::all()->where('status','=',1);

        $product = Product::where('id', '=', $id)->where('status','=',1)->first();
        return view('frontend.product-detail')
            ->with('products', $products)
            ->with('product', $product)
            ->with('categories', $categories)
            ->with('collections', $collections);
    }

    public function allProduct(Request $request){
        $categories = Category::all()->where('status','=',1);
        $collections = Collection::all()->where('status','=',1);
        $products = Product::all()->where('status','=',1);
        $min_price = $request->get('min_price');
        $max_price = $request->get('max_price');
        $keyword = $request->get('keyword');

        $products_list = Product::query();
        $data = array();
        $data['category_id'] = 0;
        $data['collection_id'] = 0;

        if ($request->has('cate') && $request->get('cate') != 0) {
            $data['category_id'] = $request->get('cate');
            $products_list = $products_list->where('category_id', '=', $data['category_id']);
        }
        if ($request->has('collection') && $request->get('collection') != 0){
            $data['collection_id'] = $request->get('collection');
            $ids = DB::table('product_collection')->where('collection_id',$data['collection_id'])->get();
            $ids = $ids->map(function ($item){
                return $item->product_id;
            });
            $products_list = $products_list->whereIn('id', $ids);
        }
        if ($request->has('keyword')){
            $products_list = $products_list->orderBy('created_at', 'desc')->where('name', 'like', '%' . $keyword . '%');
        }
        if(isset($min_price)){
            $products_list = $products_list->where('price','>=',$min_price);
        }
        if(isset($max_price)){
            $products_list = $products_list->where('price','<=',$max_price);
        }

        $data['list'] = $products_list->paginate(9)
            ->appends($request->only('cate'))
            ->appends($request->only('collection'))
            ->appends($request->only('min_price'))
            ->appends($request->only('max_price'))
            ->appends($request->only('keyword'));
        $data['categories'] = $categories;
        $data['collections'] = $collections;

        return view('frontend.all-product')
            ->with('products', $products)
            ->with('min_price',$min_price)
            ->with('max_price',$max_price)
            ->with($data);
    }

}

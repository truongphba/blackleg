<?php

namespace App\Http\Controllers\Frontend;

use App\Category;
use App\Collection;
use App\Http\Controllers\Controller;
use App\Product;
use App\QA;
use Illuminate\Http\Request;
use mysql_xdevapi\Session;

class SiteController extends Controller
{
    public function index(){
        $categories = Category::all()->where('status','=',1);
        $collections = Collection::all()->where('status','=',1);
        $products = Product::all()->where('status','=',1);
        $qas= QA::all();
        foreach ($products as $i => $product){
            $product->priceSale = 1;// $product->price-($product->price*$product->sale/100);
        }
        return view('frontend.index',['categories'=>$categories,'collections'=>$collections,'products'=>$products,'qas'=>$qas]);
    }

    public function productDetail($id){
        $products = Product::all()->where('status','=',1);
        $product = Product::where('id', '=', $id)->where('status','=',1)->first();
        return view('frontend.product-detail')
            ->with('products', $products)
            ->with('product', $product);
    }

    public function category($id){
        $categories = Category::all()->where('status','=',1);
        $category = Category::where('id', '=', $id)->where('status','=',1)->first();
        return view('frontend.product')
            ->with('category', $category)
            ->with('categories', $categories);
    }
    public function cart(Request $r){
        $e=1;
        $cart=session()->get('cart', function () {
            return [];
        });
        if($r->productId){
            foreach ($cart as $i=>$c) if($c->productId==$r->productId){
                $c->size=$r->size?$r->size:$c->size;
                $c->quantity=$r->quantity?$r->quantity:$c->quantity;
                $e=0;
            }
            $e&&array_push($cart,(object)["productId"=>$r->productId,"size"=>$r->size,"quantity"=>$r->quantity]);
            session(['cart' => $cart]);
        }
        return $cart;
    }
    public function showCart(Request $r){
        $categories = Category::all()->where('status','=',1);
        $collections = Collection::all()->where('status','=',1);
        $products = Product::all()->where('status','=',1);
        $cart=session()->get('cart', function () {
            return [];
        });
        return ['categories'=>$categories,'collections'=>$collections,'products'=>$products,'cart'=>$cart];
    }
}

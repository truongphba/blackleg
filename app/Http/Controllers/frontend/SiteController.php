<?php

namespace App\Http\Controllers\Frontend;

use App\Category;
use App\Collection;
use App\Http\Controllers\Controller;
use App\Order;
use App\OrderDetail;
use App\Product;
use App\QA;
use App\Size;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use mysql_xdevapi\Session;
use Symfony\Component\Console\Input\Input;

class SiteController extends Controller
{
    public function index()
    {
        $categories = Category::all()->where('status', '=', 1);
        $collections = Collection::all()->where('status', '=', 1);
        $products = Product::all()->where('status', '=', 1);
        $qas = QA::all();
        foreach ($products as $i => $product) {
            $product->priceSale = 1;// $product->price-($product->price*$product->sale/100);
        }
        return view('frontend.index', ['categories' => $categories, 'collections' => $collections, 'products' => $products, 'qas' => $qas]);
    }

    public function cart(Request $r)
    {
        $e = 1;
        $cart = session()->get('cart', function () {
            return [];
        });
        $cart = $cart != null ? $cart : [];
        if ($r->productId) {
            foreach ($cart as $i => $c) if ($c->productId == $r->productId) {
                $e = 0;
            }
            $e && array_push($cart, (object)["productId" => $r->productId, "size" => $r->size, "quantity" => $r->quantity]);
            session(['cart' => $cart]);
        }
        return $e ? $cart : $e;
    }

    public function showCart(Request $r)
    {
        $categories = Category::all()->where('status', '=', 1);
        $collections = Collection::all()->where('status', '=', 1);
        $products = Product::all()->where('status', '=', 1);
        $cart = session()->get('cart', function () {
            return [];
        });
        return ['categories' => $categories, 'collections' => $collections, 'products' => $products, 'cart' => $cart];
    }

    public function removeProductInCart(Request $r)
    {
        $cart = session()->get('cart', function () {
            return [];
        });
        foreach ($cart as $i => $c) {
            if ($cart[$i]->productId == $r->cartIndex) {
                unset($cart[$i]);
            }
        }
        session(['cart' => $cart]);
        return 1;
    }

    public function checkout(Request $r)
    {
        $categories = Category::all()->where('status', '=', 1);
        $collections = Collection::all()->where('status', '=', 1);
        $products = Product::all()->where('status', '=', 1);
        $cart = session()->get('cart', function () {
            return [];
        });
        foreach ($cart as $i => $c) {
            $product = Product::find($c->productId);
            $c->product = $product;
        }
        return view('frontend.checkout', ['categories' => $categories, 'collections' => $collections, 'products' => $products, 'cart' => $cart]);
    }
    public function about(){
        $categories = Category::all()->where('status', '=', 1);
        $collections = Collection::all()->where('status', '=', 1);
        $products = Product::all()->where('status', '=', 1);
        $cart = session()->get('cart', function () {
            return [];
        });
        foreach ($cart as $i => $c) {
            $product = Product::find($c->productId);
            $c->product = $product;
        }
        return view('frontend.about',['categories' => $categories, 'collections' => $collections, 'products' => $products, 'cart' => $cart]);
    }
//    public function saveOrder(Request $r)
//    {
//        $order = new Order();
//        $order->created_by = $r->order->name;
//        $order->ship_date = Carbon::now()->addDays(3)->format('Y-m-d H:i:s');
//        $order->ship_address = $r->order->address;
//        $order->status = 1;
//        $order->total_price = $r->order->total;
//        foreach ($r->orderDetails as $i=>$o){
//            $orderDetail = new OrderDetail();
//            $orderDetail->product_id = $o->productId;
//            $orderDetail->order_id = $order->order_id;
//            $orderDetail->quantity = $o->quantityProduct;
//            $orderDetail->unit_price = $o->totalPrice;
//        }
//        return $r->order->name;
//    }
}

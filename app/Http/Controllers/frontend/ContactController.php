<?php

namespace App\Http\Controllers\Frontend;

use App\Category;
use App\Collection;
use App\Contact;
use App\Http\Controllers\Controller;
use App\Http\Requests\SaveContact;
use App\Product;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){
        $categories = Category::all()->where('status','=',1);
        $collections = Collection::all()->where('status','=',1);
        $products = Product::all()->where('status','=',1);
        return view('frontend.contact')
            ->with('categories', $categories)
            ->with('products', $products)
            ->with('collections', $collections);
    }

    public function createContact(SaveContact $request){
        $request->validated();
        $obj = new Contact();
        $obj->name = $request->get('name');
        $obj->email = $request->get('email');
        $obj->title = $request->get('title');
        $obj->phone = $request->get('phone');
        $obj->message = $request->get('message');
        $obj->save();
        return redirect('/contact');
    }
}

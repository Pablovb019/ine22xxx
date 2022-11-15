<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Database\Eloquent\Model;

class ProductController extends Controller
{
    public function welcome(){    
        $aProduct_offering = Product::Offerings();
        $aProduct_new = Product::NewProducts();
        return view('welcome',
            compact('aProduct_offering', 'aProduct_new'));
    }

    public function show(Product $product){
        return view('product.show', compact('product'));
    }

    public function addToCart(Product $product, Request $request){
        if($request->session()->has('cart')){
            $cart = new \App\Models\Cart($request->session()->get('cart'));
        } else {
            $cart = new \App\Models\Cart(null);
        }

        $cart->add($product);
        $request->session()->put('cart', $cart);
        // dd($cart);
        return redirect()->route('product.show', $product->id)->with('success', 'El producto ha sido añadido al carro');
    }
}

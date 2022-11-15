<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function show() {
        $cart = new \App\Models\Cart(session()->get('cart'));
        return view('cart.show', compact('cart'));
    }

    public function add(Product $product) {
        $cart = session()->has('cart') ? new \App\Models\Cart(session()->get('cart')) : new \App\Models\Cart();
        $cart->add($product);
        session()->put('cart', $cart);
        return redirect()->route('cart.show');
    }

    public function remove(Product $product) {
        $cart = session()->has('cart') ? new \App\Models\Cart(session()->get('cart')) : new \App\Models\Cart();
        $cart->remove($product);
        session()->put('cart', $cart);
        return redirect()->route('cart.show');
    }

    public function removeAll(Product $product) {
        $cart = session()->has('cart') ? new \App\Models\Cart(session()->get('cart')) : new \App\Models\Cart();
        $cart->removeAll($product);
        session()->put('cart', $cart);
        return redirect()->route('cart.show');
    }

    public function operation (String $sOperation, Product $product, Request $request) {
        switch ($sOperation) {
            case 'add':
                $this->add($product);
                break;
            case 'remove':
                $this->remove($product);
                break;
            case 'removeAll':
                $this->removeAll($product);
                break;
            default:
                return redirect()->route('cart.show');
        }
        return redirect()->route('cart.show');
    }
}

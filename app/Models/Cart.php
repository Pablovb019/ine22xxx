<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    
    public $htItem = [];
    public $iTotalItems;
    public $dTotalPrice;

    public function __construct(Cart $cart = null)
    {
        if ($cart) {
            $this->htItem = $cart->htItem;
            $this->iTotalItems = $cart->iTotalItems;
            $this->dTotalPrice = $cart->dTotalPrice;
        }
    }

    public function add(Product $product)
    {
        if (!array_key_exists($product->id, $this->htItem)) {
            $this->htItem[$product->id] = [
                'id' => $product->id,
                'name' => $product->name,
                'imgUrl' => $product->imgUrl,
                'price' => $product->price,
                'quantity' => 1
            ];
        } else {
            $this->htItem[$product->id]['quantity']++;
        }
        foreach ($this->htItem as $item) {
            $this->iTotalItems += $item['quantity'];
            $this->dTotalPrice += $item['price'] * $item['quantity'];
        }
    }

    public function remove(Product $product)
    {
        if (array_key_exists($product->id, $this->htItem) ) {
            if($this->htItem[$product->id]['quantity'] > 0) {
                $this->htItem[$product->id]['quantity']--;
                $this->iTotalItems--;
                $this->dTotalPrice = $this->htItem[$product->id]['quantity'] * $this->htItem[$product->id]['price'];

                if($this->htItem[$product->id]['quantity'] == 0) {
                    unset($this->htItem[$product->id]);
                }
            }   
        }
    }

    public function removeAll(Product $product)
    {
        if (array_key_exists($product->id, $this->htItem) ) {
            unset($this->htItem[$product->id]);
            $this->iTotalItems = 0;
            $this->dTotalPrice = 0;
        }
    }
}

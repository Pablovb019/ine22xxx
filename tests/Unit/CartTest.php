<?php

namespace Tests\Unit;

use Tests\TestCase;
//use PHPUnit\Framework\TestCase;

class CartTest extends TestCase
{
    public static $cart;

    public static function InitializeCart()
    {
        self::$cart = new \App\Models\Cart();
        self::$cart->add(\App\Models\Product::find(1));
        self::$cart->add(\App\Models\Product::find(1));
    }
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testConstructor()
    {
        self::$cart = new \App\Models\Cart();
        $this->assertTrue(self::$cart->htItem == []);
        $this->assertTrue(self::$cart->iTotalItems == 0);
        $this->assertTrue(self::$cart->dTotalPrice == 0);
    }

    public function testAdd()
    {
        self::InitializeCart();
        $this->assertTrue(self::$cart->htItem[1]['id'] == 1);
        $this->assertTrue(self::$cart->htItem[1]['name'] == 'Asus ROG Strix GeForce RTX 3090 Gaming OC 24GB GDDR6X');
        $this->assertTrue(self::$cart->htItem[1]['imgUrl'] == 'img/000001.png');
        $this->assertTrue(self::$cart->htItem[1]['price'] == 1199.00);
        $this->assertTrue(self::$cart->htItem[1]['quantity'] == 2);
        $this->assertTrue(self::$cart->iTotalItems == 2);
        $this->assertTrue(self::$cart->dTotalPrice == 2398.00);
    }

    public function testDelete()
    {
        self::InitializeCart();
        self::$cart->remove(\App\Models\Product::find(1));
        $this->assertTrue(self::$cart->htItem[1]['id'] == 1);
        $this->assertTrue(self::$cart->htItem[1]['name'] == 'Asus ROG Strix GeForce RTX 3090 Gaming OC 24GB GDDR6X');
        $this->assertTrue(self::$cart->htItem[1]['imgUrl'] == 'img/000001.png');
        $this->assertTrue(self::$cart->htItem[1]['price'] == 1199.00);
        $this->assertTrue(self::$cart->htItem[1]['quantity'] == 1);
        $this->assertTrue(self::$cart->iTotalItems == 1);
        $this->assertTrue(self::$cart->dTotalPrice == 1199.00);
    }

    public function testDeleteAll()
    {
        self::InitializeCart();
        self::$cart->removeAll(\App\Models\Product::find(1));
        $this->assertTrue(self::$cart->htItem == []);
        $this->assertTrue(self::$cart->iTotalItems == 0);
        $this->assertTrue(self::$cart->dTotalPrice == 0);
    }

}

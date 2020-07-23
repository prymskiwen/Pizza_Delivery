<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Product;
use App\Order;
use \Cart as Cart;

class OrderController extends Controller
{
    public function checkout() {
        return view('checkout');
    }

    public function order(Request $request) {
        $name = $request->get('firstname');
        $email = $request->get('email');
        $address = $request->get('address');
        $city = $request->get('city');
        $state = $request->get('state');
        $zip = $request->get('zip');
        $currency = $request->get('currency');
        $amount = $request->get('amount');

        $data = [
            'fname' => $name,
            'email' => $email,
            'address' => $address,
            'city' => $city,
            'state' => $state,
            'zip' => $zip,
            'currency' => $currency,
            'amount' => $amount
        ];

        $new_order = Order::create($data);
        
        Cart::destroy();
        Cart::instance('wishlist')->destroy();
        $products = Product::all();                
        return view('shop')->with('products', $products);
    }

    public function getOrders() {
        $orders = Order::all();
        return view('history')->with('orders', $orders);        
    }

}

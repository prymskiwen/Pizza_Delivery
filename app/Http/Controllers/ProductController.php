<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Product;
use App\Services\CurrencyService;
use App\Order;
use \Cart as Cart;
use GuzzleHttp\Client;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {        
        if(!session('currency') || !session('rate')) {         
            $client = new Client();
            $response = $client->get('https://free.currconv.com/api/v7/convert?apiKey=40fcfc36c8e39e7a0434&q=USD_EUR');
            $responseJson = $response->getBody()->getContents();
            $responseObj = json_decode($responseJson, true);
            $rate = $responseObj['results']['USD_EUR']['val'];

            session(['currency' => 'USD']);
            session(['rate' => $rate]);
        }
        
        $products = Product::all();
        return view('shop')->with('products', $products);
    }


    /**
     * Display the specified resource.
     *
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $product = Product::where('slug', $slug)->firstOrFail();
        $interested = Product::where('slug', '!=', $slug)->get()->random(4);

        return view('product')->with(['product' => $product, 'interested' => $interested]);
    }

    public function setCurrency(Request $request) {
        if($request->get('currency')) {
            session(['currency' => $request->get('currency')]);
            return response()->json([
                'result' => 'success',
                'message' => 'Successfully changed'
            ]);
        }
        return response()->json([
            'result' => 'fail',
            'message' => 'Error occurred'
        ]);    
    }

    public function checkout() {
        return view('checkout');
    }

    public function billCheckout(Request $request) {
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

}

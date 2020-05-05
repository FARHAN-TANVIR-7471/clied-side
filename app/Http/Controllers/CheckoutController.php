<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class CheckoutController extends Controller
{
    public function index()
    {
        $response = Http::get('http://127.0.0.1:8081/api/products/');
        $cart = Http::get('http://127.0.0.1:8081/api/cart/');
        $results = json_decode($response);
        $carts = json_decode($cart);

        $totalproduct = $results->data[0]->totalproduct;
        return view('checkout.index', compact('totalproduct', 'carts'));
    }

    public function store(Request $request)
    {
        $response = Http::post('http://127.0.0.1:8081/api/order', [
            'user_id' => $request->user_id,
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            'ip_address' =>  request()->ip(),
        ]);
        
        return redirect('/test');
    }
}
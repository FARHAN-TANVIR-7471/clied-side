<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class CartController extends Controller
{
    public function index()
    {
        $response = Http::get('http://127.0.0.1:8081/api/products/');
        $cart = Http::get('http://127.0.0.1:8081/api/cart/');
        $results = json_decode($response);
        $carts = json_decode($cart);

        $totalproduct = $results->data[0]->totalproduct;
        return view('cart.index', compact('totalproduct', 'carts'));
    }

    public function update(Request $request, $id)
    {
        $response = Http::post('http://127.0.0.1:8081/api/cart_item_update', [
            'id' => $id,
            'product_quantity' => $request->product_quantity,
        ]);
        
        return back();
    }

    public function destroy($id)
    {
        $response = Http::post('http://127.0.0.1:8081/api/cart_item_delete', [
			'id' => $id,
        ]);
        
        return back();
    }
}

<?php

namespace App\Http\Controllers;

use Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
//use Melihovv\ShoppingCart\Facades\ShoppingCart as Cart;


class ShoppingController extends Controller
{

	/*public function cart(){
    	return view('userInterface.checkout'); 
    	//return Cart::getCountent();
    }*/

    public function add_to_cart(Request $request){
		if(Auth::check())
            {
                $user_id = Auth::id();
            }else{
				$user_id = null;
			}
		
		$response = Http::post('http://127.0.0.1:8081/api/cart', [
			//'user_id' => $user_id,
			'ip_address' => request()->ip(),
			'user_id' => request()->userId,
			'product_id' => request()->pdtId,
			'product_quantity' => request()->qty,
		]);
		return redirect('/');
	}
	
	
}

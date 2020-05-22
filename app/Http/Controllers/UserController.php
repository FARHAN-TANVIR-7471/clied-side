<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Client\Response;

class UserController extends Controller
{
	/*user home page*/
    public function userHome(){

        $response = Http::get('http://127.0.0.1:8081/api/products/');
        $results = json_decode($response);

        $totalproduct = $results->data[0]->totalproduct;
        // dd($carts);
        // dd($results->data[0]);
    	return view('userInterface.index',compact('results','totalproduct'));
    }

    /*men*/
    public function men(){

        $response = Http::get('http://127.0.0.1:8081/api/products/');
        $results = json_decode($response);

        $totalproduct = $results->data[0]->totalproduct;

        //dd($results);

    	return view('userInterface.men',compact('results','totalproduct')); 
    } 

    /*menproduct*/
    public function menproduct($id){

        $data['product_type'] = $id;

        $response = Http::get('http://127.0.0.1:8081/api/products/');
        $results = json_decode($response);
        $totalproduct = $results->data[0]->totalproduct;
        //dd($results);

        return view('userInterface.manproduct',compact('results','totalproduct'),$data); 
    } 

    /*womenproduct*/
    public function womenproduct($id){
        //echo $id;

        $data['product_type'] = $id;

        $response = Http::get('http://127.0.0.1:8081/api/products/');
        $results = json_decode($response);
        $totalproduct = $results->data[0]->totalproduct;
        //dd($results);

        return view('userInterface.womanproduct',compact('results','totalproduct'),$data); 
    } 

    /*mens*/
    public function productDescription($id){

        $response = Http::get("http://127.0.0.1:8081/api/products/$id");
        $results = json_decode($response);
        $totalproduct = $results->totalproduct;
        // dd($totalproduct);

    	return view('userInterface.productDescription',compact('results','totalproduct')); 
    }

        /*Women*/
    public function women(){

        $response = Http::get('http://127.0.0.1:8081/api/products/');
        $results = json_decode($response);
        $totalproduct = $results->data[0]->totalproduct;

        return view('userInterface.women',compact('results','totalproduct')); 
    }

    /*custom Controller*/
    public function custom(){

        $response = Http::get('http://127.0.0.1:8081/api/products/');
        $results = json_decode($response);

        $totalproduct = $results->data[0]->totalproduct;

        return view('userInterface.customProduct',compact('results','totalproduct'));
    }

    /*man custom Controller*/
    public function mancustom(){

        $response = Http::get('http://127.0.0.1:8081/api/products/');
        $results = json_decode($response);

        $totalproduct = $results->data[0]->totalproduct;

        return view('userInterface.manCustomProduct',compact('results','totalproduct'));
    }

    /*women custom Controller*/
    public function womencustom(){

        $response = Http::get('http://127.0.0.1:8081/api/products/');
        $results = json_decode($response);

        $totalproduct = $results->data[0]->totalproduct;

        return view('userInterface.womenCustomProduct',compact('results','totalproduct'));
    }
    /*searchproduct*/
    public function searchproduct(Request $request){
        
        $product_type = $request->category;
        $data['product_type'] = $product_type;
        //dd($data);
        $response = Http::get('http://127.0.0.1:8081/api/products/');
        $results = json_decode($response);
        $totalproduct = $results->data[0]->totalproduct;

        return view('userInterface.search',compact('results','totalproduct'),$data); 
        //return redirect('/user/search')->with(compact('results','totalproduct'),$data);
    }
    /*searchpage*/
    public function searchpage(){
        /*$response = Http::get('http://127.0.0.1:8081/api/products/');
        $results = json_decode($response);
        $totalproduct = $results->data[0]->totalproduct;

        return view('userInterface.search',compact('results','totalproduct'));*/ 
        return view('userInterface.search'); 
    }
    /*about*/
    public function about(){
        $response = Http::get('http://127.0.0.1:8081/api/products/');
        $results = json_decode($response);
        $totalproduct = $results->data[0]->totalproduct;

        return view('userInterface.about',compact('totalproduct')); 
    }

    /*contact*/
    public function contact(){
        $response = Http::get('http://127.0.0.1:8081/api/products/');
        $results = json_decode($response);
        $totalproduct = $results->data[0]->totalproduct;

        return view('userInterface.contact',compact('totalproduct')); 
    }

    public function usercontact(Request $request){

        $contactusername = $request->input('contactusername');
        $contactemail = $request->input('contactemail');
        $contactnumber = $request->input('contactnumber');
        $contactcomment = $request->input('contactcomment');

        $response = Http::post('http://127.0.0.1:8081/api/contructinsert/',[
                      'name'=>$contactusername,
                      'email'=>$contactemail,
                      'phone'=>$contactnumber, 
                      'message'=>$contactcomment 
        ]);      
        
        return back();
    }
    
}

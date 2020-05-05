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

        //echo $id;

        $data['product_type'] = $id;

        //return view('userInterface.manproduct',$data);

        //dd($id);

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

        //return view('userInterface.manproduct',$data);

        //dd($id);

        $response = Http::get('http://127.0.0.1:8081/api/products/');
        $results = json_decode($response);
        $totalproduct = $results->data[0]->totalproduct;
        //dd($results);

        return view('userInterface.womanproduct',compact('results','totalproduct'),$data); 
    } 

    /*mens*/
    public function mens($id){

        $response = Http::get("http://127.0.0.1:8081/api/products/$id");
        $results = json_decode($response);
        $totalproduct = $results->data->totalproduct;
        //dd($results);

    	return view('userInterface.mens',compact('results','totalproduct')); 
    }

        /*Women*/
    public function women(){

        $response = Http::get('http://127.0.0.1:8081/api/products/');
        $results = json_decode($response);
        $totalproduct = $results->data[0]->totalproduct;

        //dd($results);

        return view('userInterface.women',compact('results','totalproduct')); 
    }

    /*about*/
    public function about(){

        return view('userInterface.about'); 
    }

    /*contact*/
    public function contact(){

        return view('userInterface.contact'); 
    }

    public function usercontact(Request $request){

        $contactusername = $request->input('contactusername');
        $contactemail = $request->input('contactemail');
        $contactcomment = $request->input('contactcomment');

        $data = array('name'=>$contactusername, 'email'=>$contactemail, 'message'=>$contactcomment);
        DB::table('contact')->insert($data);

        return redirect('/user/contact');
    }
    
}

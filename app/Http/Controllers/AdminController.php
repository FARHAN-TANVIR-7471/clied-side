<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Client\Response;
use Session;


class AdminController extends Controller
{
    /*login get request*/
    public function login(){
        return view('admin.login');
    }

    /*login post request*/
    public function adminLogin(Request $request){
        $user = $request->input('user');
        $password = $request->input('password');
        
        $response = Http::post('http://127.0.0.1:8081/api/login',[
                      'email'=>$user,
                      'password'=>$password
        ]); 
        
        $staCode = $response->status(); 

        if($staCode == 200){
            return redirect('/dashboard');
        }
        else {
            return back()->with('error', 'Wrong Login Details');
        }
        //return redirect('/dashboard');
    }

    /*Product Controller*/
    public function product(){

        $response = Http::get("http://127.0.0.1:8081/api/products/");
        $results = json_decode($response);
        //dd($results);

    	return view('admin.product',  compact('results')); 
    }

    /*product Input*/ 
    public function productinsert(Request $request){
        //dd($request);
        $file = $request->file('image');

        $brand = $request->input('brand');
        $gender = $request->input('gender');
        $custom = $request->input('custom');
        $product_type =$request->input('product_type');
        $price =$request->input('price');
        $number =$request->input('number');
        $discount =$request->input('discount');
        $color =$request->input('color');
        $size =$request->input('size');
        $description =$request->input('description');
        $image ='/images/'.$file->getClientOriginalName();
        //dd($image);

        $destinationPath = 'images/';
        $file->move($destinationPath,$file->getClientOriginalName());

        $response = Http::post('http://127.0.0.1:8081/api/productadd/',[
                      'name'=>$brand,
                      'price'=>$price,
                      'discount'=>$discount, 
                      'gender_id'=>$gender, 
                      'product_type_id'=>$product_type,  
                      'custom'=>$custom, 
                      'number'=>$number, 
                      'size'=>$size,
                      'description'=>$description,
                      'image'=>$image,
                      'color'=>$color
        ]);      
        return back();
    }

    /*product update*/
    public function productUpdateGet($id){

        $response = Http::get("http://127.0.0.1:8081/api/products/$id");
        $results = json_decode($response);
        //dd($results);
        return view('admin.productupdate',compact('results'));
    }

    /*product update*/ 
    public function productupdate(Request $request){
        
        $file = $request->file('image');
        $id = $request->input('id');
        $brand = $request->input('brand');
        $gender = $request->input('gender');
        $custom = $request->input('custom');
        $product_type =$request->input('product_type');
        $price =$request->input('price');
        $number =$request->input('number');
        $discount =$request->input('discount');
        $color =$request->input('color');
        $size =$request->input('size');
        $description =$request->input('description');
        $image ='/images/'.$file->getClientOriginalName();

        $destinationPath = 'images/';
        $file->move($destinationPath,$file->getClientOriginalName());

        $response = Http::put("http://127.0.0.1:8081/api/products/$id",[
                      'name'=>$brand,
                      'price'=>$price,
                      'discount'=>$discount, 
                      'gender_id'=>$gender, 
                      'product_type_id'=>$product_type,  
                      'custom'=>$custom, 
                      'number'=>$number, 
                      'size'=>$size,
                      'description'=>$description,
                      'image'=>$image,
                      'color'=>$color
        ]);      
        return redirect('/admin/product');
    }

    /*productType*/
    public function productinventory(){
        return view('admin.productinventory'); 
    }

    /*Order*/
    public function order(){

        $response = Http::get("http://127.0.0.1:8081/api/order");
        $results = json_decode($response);
        
        return view('admin.order', compact('results'));  
    }

        /*order details*/
    public function orderdetails($id){

        $data['order_id'] = $id;

        $response = Http::get("http://127.0.0.1:8081/api/order");
        $results = json_decode($response);

        return view('admin.orderDetails',compact('results'),$data); 
    }

    /*Product Controller*/
    public function contact(){

        $response = Http::get("http://127.0.0.1:8081/api/contruct");
        $results = json_decode($response);
        
        return view('admin.contact', compact('results'));  
    }

    public function others(){
    	return view('admin.others'); 
    }

    public function gender(){

    	return view('admin.gender'); 
    } 

    public function cart(){
    	return view('admin.cart'); 
    } 

    /*productType*/
    public function productType(){

        $product_type = DB::table('product_type')->get();

    	return view('admin.product_type', ['product_type' => $product_type]); 
    }

    /*product type Add*/ 
    public function producttypeinsert(Request $request){
        //dd($request);
        
        $name =$request->input('name');

        $data = array('name'=>$name);
        //dd($data);

        DB::table('product_type')->insert($data);
        return redirect('/admin/product-type');
    }

    /*productType edit*/
    public function editProductType($id){
        /*dd($request);*/
        $product_type = DB::table('product_type')->find($id);

        return view('admin.product_type_update', compact('product_type')); 
    }

    public function updateProductType(Request $request, $id){
        
        DB::table('product_type') 
                -> where ('id' , $id) 
                -> update (['name' => $request -> input ('name')]);

        return redirect('/admin/product-type')->with('message','Update successfully'); 
    }
}

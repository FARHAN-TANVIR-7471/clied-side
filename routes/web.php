<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', function () {
    return view('welcome');
});
/*Route::get('/test', function () {
    return view('userInterface.index');
});*/
Route::get('/test','UserController@userHome');

/* Admin login get*/
Route::get('admin/login','AdminController@login');

/* Admin login post*/
Route::post('/adminlogin','AdminController@adminLogin');

Route::get('/admin/register', function () {
    return view('admin.register');
});
Route::get('/admin/password', function () {
    return view('admin.password');
});

Route::get('/dashboard', function () {
	return view('admin.index');
});


/*Admin start*/
/*Product*/
Route::get('/admin/product','AdminController@product');

/*product insert*/
Route::post('/productinsert','AdminController@productinsert');
//Route::get('/productinsert','AdminController@productinsert');

/*others*/
Route::get('/admin/others','AdminController@others');

/*gender*/
Route::get('/admin/gender','AdminController@gender');

/*product_type*/
Route::get('/admin/product-type','AdminController@productType');

/*product type insert*/
//Route::post('/insert','AdminController@producttypeinsert');

/*Order*/
Route::get('/admin/order','AdminController@order');
/*Order details*/
Route::get('/admin/orderdetails/{id}','AdminController@orderdetails');
/*contact*/
Route::get('/admin/contact','AdminController@contact');

/*product_type Edit*/
Route::get('/edit/producttype/{id}','AdminController@editProductType');
Route::post('/update/producttype/{id}','AdminController@updateProductType');

/*Auth::routes();

Route::group(['middleware' => ['auth', 'admin']], function(){
	

});*/

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/user/men','UserController@men');
Route::get('/user/women','UserController@women');
Route::get('/user/description/{id}','UserController@productDescription');
Route::get('/user/custom','UserController@custom');
Route::get('/user/mancustom','UserController@mancustom');
Route::get('/user/womencustom','UserController@womencustom');
Route::get('/user/about','UserController@about');
Route::get('/user/contact','UserController@contact');
Route::post('user-contact','UserController@usercontact');

Route::post('searchproduct','UserController@searchproduct');
Route::get('/user/search','UserController@searchpage');
//Route::view('Serch view','userInterface.search')->name('Serch view');

//Route::get('cart','ShoppingController@cart');

Route::post('/cart/add',[
	'uses' => 'ShoppingController@add_to_cart',
	'as' => 'cart.add'
]);

//cart
Route::get('cart','CartController@index')->name('cart.index');
Route::post('cart/{id}','CartController@destroy')->name('cart.destroy');
Route::post('cart/item/{id}','CartController@update')->name('cart.update');

// Checkout
Route::get('checkout','CheckoutController@index')->name('checkout.index');
Route::post('checkout','CheckoutController@store')->name('checkout.store');

Route::get('/user/menproduct/{id}','UserController@menproduct');
Route::get('/user/womenproduct/{id}','UserController@womenproduct');





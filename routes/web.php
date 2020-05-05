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

Route::get('/admin/login', function () {
    return view('admin.login');
});
Route::get('/admin/register', function () {
    return view('admin.register');
});
Route::get('/admin/password', function () {
    return view('admin.password');
});

Auth::routes();

Route::group(['middleware' => ['auth', 'admin']], function(){
	Route::get('/dashboard', function () {
    	return view('admin.index');
	});

	/*Product*/
	Route::get('/admin/product','AdminController@product');

	/*product insert*/
	Route::post('/productinsert','AdminController@productinsert');
	//Route::get('/productinsert','AdminController@productinsert');

	/*others*/
	Route::get('/admin/others','AdminController@others');

	/*gender*/
	Route::get('/admin/gender','AdminController@gender');

	/*cart*/
	Route::get('/admin/cart','AdminController@cart');

	/*product_type*/
	Route::get('/admin/product-type','AdminController@productType');

	/*product type insert*/
	Route::post('/insert','AdminController@producttypeinsert');

	/*product_type Edit*/
	Route::get('/edit/producttype/{id}','AdminController@editProductType');
	Route::post('/update/producttype/{id}','AdminController@updateProductType');

});

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/user/men','UserController@men');
Route::get('/user/women','UserController@women');
Route::get('/user/mens/{id}','UserController@mens');
Route::get('/user/about','UserController@about');
Route::get('/user/contact','UserController@contact');
Route::post('user-contact','UserController@usercontact');

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





<?php

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

Route::get('/', 'FrontendController@index');

Auth::routes(['verify' => true]);

// Route::get('/home', 'HomeController@index')->name('home');

//--------------Backend Site Route.............................
Route::get('/dashboard','SuperAdminController@index');

Route::get('/logout','SuperAdminController@logout');

Route::get('/admin','AdminController@index'); 

Route::post('/admin-dashboard','AdminController@dashboard');




//---------------Frontend Site Route........................
Route::get('/home','HomeController@index'); 

//--------------- checkout and login route.......................
Route::get('/login-check','CheckoutController@login_check');
Route::get('/regi-check','CheckoutController@regi_check');
//Route::post('/user-login','LoginController@user_login');
Route::get('/checkout','CheckoutController@checkout');
Route::get('/checkout-page','CheckoutController@CheckoutPage')->name('checkout.page');




//---------------Show category wise product........................
Route::get('/product_by_category/{category_id}','HomeController@show_product_by_category'); 

Route::get('/product_by_brand/{brand_id}','HomeController@show_product_by_brand'); 

Route::get('/view_product/{product_id}','HomeController@product_deatils_by_id'); 

//---------------------Cart route.......................
Route::post('/add-to-cart','CartController@add_to_cart');
Route::get('/show-cart','CartController@show_cart'); 
Route::get('/delete-to-cart/{rowId}','CartController@delete_cart'); 
Route::post('/update-cart','CartController@update_cart');


//--------------user register route------------------------

// Route::get('/add-register','RegisterController@index');

// Route::post('/save-register','RegisterController@save_register');

//---------------Category Route.............................
Route::get('/add-category','CategoryController@index');

Route::get('/all-category','CategoryController@all_category');

Route::post('/save-category','CategoryController@save_category');

Route::get('/edit-category/{category_id}','CategoryController@edit_category');

Route::post('/update-category/{category_id}','CategoryController@update_category');

Route::get('/delete-category/{category_id}','CategoryController@delete_category');

Route::get('/unactive-category/{category_id}','CategoryController@unactive_category');

Route::get('/active-category/{category_id}','CategoryController@active_category');


//--------------------Brand route...........
Route::get('/add-brand','BrandController@index');

Route::post('/save-brand','BrandController@save_brand');

Route::get('/all-brand','BrandController@all_brand');

Route::get('/delete-brand/{brand_id}','BrandController@delete_brand');

Route::get('/unactive-brand/{brand_id}','BrandController@unactive_brand');

Route::get('/active-brand/{brand_id}','BrandController@active_brand');

Route::get('/edit-brand/{brand_id}','BrandController@edit_brand');

Route::post('/update-brand/{brand_id}','BrandController@update_brand');


//--------------Product route
Route::get('/add-product','ProductController@index');

Route::post('/save-product','ProductController@save_product');

Route::get('/all-product','ProductController@all_product');

Route::get('/unactive-product/{product_id}','ProductController@unactive_product');

Route::get('/active-product/{product_id}','ProductController@active_product');

Route::get('/delete-product/{product_id}','ProductController@delete_product');


//---------------Slider route
Route::get('/add-slider','SliderController@index');

Route::post('/save-slider','SliderController@save_slider');

Route::get('/all-slider','SliderController@all_slider');

Route::get('/unactive-slider/{slider_id}','SliderController@unactive_slider');

Route::get('/active-slider/{slider_id}','SliderController@active_slider');

Route::get('/delete-slider/{slider_id}','SliderController@delete_slider');

 //--------------language route-------------
    Route::get('lang/{locale}',function ($locale){
    session()->put('locale',$locale);
    return redirect()->back();
    
});


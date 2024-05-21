<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;



Route::view('/','myapp.index');
Route::view('/idea','myapp.ideapage');
// Route::view('products','myapp.product-page');
Route::view('dashboard','myapp.simpleD');
Route::view('bedrom','myapp.bedroom-page');
// Route::view('addproduct','myapp.add_product');
Route::view('bright','myapp.bright-light');
// Route::view('catagory','myapp.category');
Route::view('details','myapp.design-details');
Route::view('furnature','myapp.furneture');
Route::view('keitchen','myapp.kitichen');
Route::view('lighting','myapp.light');
Route::view('order','myapp.order');
Route::view('product-payment','myapp.paroduct-payment');
Route::view('setting','myapp.setting');
Route::view('shower','myapp.shower');
Route::view('upload','myapp.upload-design-page');
Route::view('wall','myapp.wall-page');
Route::view('watch','myapp.watch-page');
Route::view('vindow','myapp.window-page');



Route::get('products',[HomeController::class,'products']);
Route::post('/add_catagory',[HomeController::class,'add_catagory']);
Route::get('catagory',[HomeController::class,'catagory']);

Route::get('/delete_catagory/{id}',[HomeController::class,'delete_catagory']);
//the product page show with this route
Route::get('/addproduct',[HomeController::class,'addproduct']);

//with this route add product to database
Route::post('/Add_product',[HomeController::class,'Add_product']);
// with this route show product on the comapny dashboard
Route::get('/show_product',[HomeController::class,'show_product']);

// with this route delete the product from dashboard of designer
Route::get('/delete_product/{id}',[HomeController::class,'delete_product']);

// with this route update the product of designer

Route::get('update_product/{id}',[HomeController::class,'update_product']);  // not work wy 
Route::post('update_product_confirm/{id}',[HomeController::class,'update_product_confirm']);  //not wrk why


Route::get('product_details/{id}',[HomeController::class,'product_details']);

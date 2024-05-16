<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;



Route::view('/','myapp.index');
Route::view('/idea','myapp.ideapage');
Route::view('bedrom','myapp.bedroom-page');
Route::view('addproduct','myapp.add_product');
Route::view('bright','myapp.bright-light');
Route::view('catagory','myapp.category');
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
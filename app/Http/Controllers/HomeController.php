<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\catagory;
use App\Models\product;


class HomeController extends Controller
{
   public function products(){
    return view('myapp.product-page');
   }


//    add catagory data
   public function add_catagory(Request $request){
    $data =new catagory;
    $data->Catagory_name=$request->category;
    $data->save();
    return redirect()->back();

   }
// show catagory data
   public function catagory(){
    $data=catagory::all();
    return view('myapp.category',compact('data'));
   }


//    delet catagory

public function delete_catagory($id){
    $data=catagory::find($id);

    $data->delete();
    return redirect()->back();

}
//show the page of product
public function addproduct(){
    $catagory=catagory::all();
    return view('myapp.add_product',compact('catagory'));
}
// save product in database
public function Add_product(Request $request){
    $product =new product;
    $product->title=$request->title;
    $product->description=$request->description;
    $product->price=$request->price;
    $product->quantity=$request->quantity;
    $product->catagory=$request->catagory;
    $image=$request->image;
    $imagename=time().'.'.$image->getClientOriginalExtension();
    $request->image->move('product',$imagename);

    $product->image=$imagename;

    $product->save();
    return redirect()->back();

}
// show product in designer admin panel

public function show_product(){
    $product=product::all();
    return view('myapp.show_product',compact('product'));
}

// with this function delet product from user dashboard
public function delete_product($id){
    $product=product::find($id);
    $product->delete();

    return redirect()->back();
}

// with this update product from dashboarde
public function update_product($id){
    $product=product::find($id);
    $catagory=catagory::all();
    return view('myapp.update_product',compact('product','catagory'));
   
   

}



}

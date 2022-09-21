<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products=Product::orderBy('id','desc')->get();
        $total=Product::count();
        return view('home',compact(['products','total']));
    }

    public function create(){
        return view('create');
    }

    public function save(Request $request)
    {
    //    $title=$request->title;
    //    $content=$request->content;
    //    $price=$request->price;

       $validation=$request->validate([
        'title' =>'required',
        'content'=>'required',
        'price' =>'required',
       ]);
       $data=Product::create($validation);
       if($data){
        session()->flash('success','Product Add Successfully');
        return redirect(route('home'));
       }else{
        session()->flash('error','Some problem occure');
        return redirect(route('create'));
       }
    }
    public function edit($id)
    {
        $products=Product::findOrFail($id);
        return view('update',compact('products'));
    }

    public function delete($id)
    {
        $products=Product::findOrFail($id)->delete();
        if($products){
            session()->flash('success','Product Deleted Successfully');
            return redirect(route('home'));
        }else{
            session()->flash('error','Product Not Delete successfully');
            return redirect(route('home'));
        }
    }

    public function update(Request $request,$id)
    {
        $products=Product::findOrFail($id);
            $title=$request->title;
           $content=$request->content;
           $price=$request->price;

           $products->title=$title;
           $products->content=$content;
           $products->price=$price;
       $data=$products->save();
       if($data){
        session()->flash('success','Product Update Successfully');
        return redirect(route('home'));
       }else{
        session()->flash('error','Some problem occure');
        return redirect(route('update'));
       }
    }
}

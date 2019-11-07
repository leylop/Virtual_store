<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
   
   public function getAll(){
        $product=Product::all();
        return $product;
    }

    public function add(Request $request){
        $product=Product::craete($request->all());
        return $product;
    }

    public function get($id){
        $product=Product::find($id);
        return $product;
    } 

}

<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use JetBrains\PhpStorm\Pure;

class homeController extends Controller
{
    public function afficher(){
       
        return view('home');
    }
    public function contact(){
        return view('contact');
    }
    public function show($id){
        $product = Product::find($id);
        // $getProduct = Product::where('id',$product->id)->get();
        return view('test',compact('product',));
    }
}

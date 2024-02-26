<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class BladeController extends Controller
{

    public function nous(){
        return view('about');
    }

    public function acceuilvue() {
        // $products = Product::orderBy('created_at','desc')->take(4)->get();
        $products = Product::all();
        $categories = Category::all();

        return view('Acceuil',compact('products','categories'));
         }


public function liste(){
    $products = Product::all();
    return view('ListeProduit', compact('products'));
}

public function messenger(){
    return view('chat');
}
}

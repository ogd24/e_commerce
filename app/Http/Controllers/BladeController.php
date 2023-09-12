<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class BladeController extends Controller
{

    public function nous(){
        return view('about');
    }
    public function infos() {
   return view('blog');
    }
    public function acceuilvue() {
        $products = Product::all();
        return view('Acceuil',compact('products'));
         }
}

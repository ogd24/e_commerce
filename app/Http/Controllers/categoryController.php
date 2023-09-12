<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class categoryController extends Controller
{
    public function type(){
        
        return view('category');
    }

    public function categorie(Request $request){
        $request->validate([
            'name' => 'required|',


        ]);
        $categorie = new Category();
        $categorie->name = $request->input('name');

        $categorie->save();

        // return redirect()->intended('/login');
        return 'ok';
}
}

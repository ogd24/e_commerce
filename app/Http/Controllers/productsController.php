<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class productsController extends Controller
{
    public function produit(){
        $categories = Category::all();
        return view('product',compact('categories'));
    }
    public function product(Request $request){
        $request->validate([
            'name' => 'required',
            'category_id' => 'required',
            'prix' => 'required',
            'description' => 'required',
            'detail' => 'required',
            'Nos_points_de_vente' => 'required'
        ]);

        $product = new Product();
        $product->name = $request->input('name');
        $product->prix = $request->input('prix');
        $product->category_id = $request->input('category_id');

        // Gestion du téléchargement de l'image

        if ($photo = $request->file('photo')) {
            $destinationPath = 'images/';
            $imagePath = date('YmdHis') . "." . $photo->getClientOriginalName();
            $photo->move($destinationPath, $imagePath);
            $product['photo'] = "$imagePath";
        }

        $product->description = $request->input('description');
        $product->detail = $request->input('detail');
        $product->Nos_points_de_vente = $request->input('Nos_points_de_vente');
        $product->save();
         return('ook');
        // // return redirect()->intended('/login');
    }


}

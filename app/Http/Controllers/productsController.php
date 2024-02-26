<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

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
        $product->users_id = Auth::id();
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


      // Obtenir l'utilisateur actuellement connecté
    $user = Auth::user();

    // Vérifiez le rôle de l'utilisateur
    if ($user->roles_id == 2) {
        // Si l'utilisateur a le rôle 2 (entreprise), redirigez-le vers la page "Mes Produits"
        $product->users_id = $user->id;
        $product->save();

        return redirect()->route('EntrepriseProduits.store');
        //user 1
    } elseif ($user->roles_id == 1) {

        $product->save();

        return redirect()->route('listes_des_produits');
    }
}


public function listeproduit(){

    $products = Product::all();

    return view('products.ListeProduit', compact('products'));
}
public function editProduct($id)
    {
        $product = Product::find($id);
        $categories = Category::all();
        return view('editproduct', compact('product', 'categories'));
    }




    public function updateProduct(Request $request, $id)
    {
        $product = Product::findOrFail($id);

        $product->name = $request->input('name');
        $product->category_id = $request->input('category_id');
        $product->description = $request->input('description');
        $product->Nos_points_de_vente = $request->input('Nos_points_de_vente');
        $product->prix = $request->input('prix');
        $product->detail = $request->input('detail');


        // Vérifiez si une nouvelle image est téléchargée
        if ($request->hasFile('photo')) {
            $photo = $request->file('photo');
            $destinationPath = 'images/';
            $imagePath = date('YmdHis') . "." . $photo->getClientOriginalName();
            $photo->move($destinationPath, $imagePath);

            // Mettez à jour le chemin de l'image avec le nouveau chemin
            $product->photo = "$imagePath";
        }

        $product->save();

        return redirect()->route('listes_des_produits')->with('success', 'Produit mis à jour avec succès');
    }

//produits enrégistrés par l'entreprise

public function CompagnyProduct(){



    // Vérifiez si l'utilisateur est authentifié
    if (Auth::check()) {

        // Récupérez l'utilisateur connecté
        $user = Auth::user();

        // Récupérez les produits associés à cet utilisateur
        $products = $user->products;


        return view('products.prouduitsEntreprise', compact('products' ));
    } else {

        return redirect()->route('login');
    }
}




}







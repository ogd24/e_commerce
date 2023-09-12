<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class RechercheController extends Controller
{
    public function search(Request $request)
{
    $q = $request->input('q'); // Récupérez le terme de recherche depuis le formulaire

    $resultats = Product::where('name', 'like', "%$q%")
        ->orWhere('description', 'like', "%$q%")
        ->get();

    return view('Acceuil', compact('resultats'));
}
}

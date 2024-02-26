<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class RechercheController extends Controller
{

    public function rechercherProduits(Request $request)
    {
        $query = $request->input('q');


        $results = Product::where('name', 'LIKE', '%' . $query . '%')
            ->orWhere('description', 'LIKE', '%' . $query . '%')
            ->orWhere('detail', 'LIKE', '%' . $query . '%')
            ->orWhere('Nos_points_de_vente', 'LIKE', '%' . $query . '%')
            ->get();

       
         return view('recherche', ['results' => $results, 'query' => $query]);




    }

}

<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class EntrepriseController extends Controller
{
    public function register(Request $request){
        $request->validate([
            'nom' => 'required|',
            'prenom' => 'required',
            'email' => 'required|email|unique:users',
            'password'=>'required|min:8|confirmed',

        ]);
        $client = new User();
        $client->nom = $request->input('nom');
        $client->prenom = $request->input('prenom');
        $client->email = $request->input('email');
        $client->password = bcrypt($request->password);
        $client->roles_id = 1;
        $client->save();

        // return redirect()->intended('/login');
        return 'ok';
}


}

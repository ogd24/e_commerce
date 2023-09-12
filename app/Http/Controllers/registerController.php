<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class registerController extends Controller
{
    public function envoyer()
    {
        return view('inscription');
    }
     public function entreprise()
     {
         return view('compagny');
     }


    public function register(Request $request){
        // $request->validate([
        //     'nom' => 'required|',
        //     'prenom' => 'required',
        //     'email' => 'required|email|unique:users',
        //     'password'=>'required|min:8|confirmed',

        // ]);
        $client = new User();
        $client->nom = $request->input('nom');
        $client->prenom = $request->input('prenom');
        $client->email = $request->input('email');
        $client->password = bcrypt($request->password);
        $client->roles_id = 1;
        $client->save();

        // return redirect()->intended('/login');
        return back()->with('success','enregistrement effectue avec succes !! veuillez vous connecter');
}
    public function registerCompagny(Request $request)
    {
                // $request->validate([
                //     'nom' => 'required|',
                //     'prenom' => 'required',
                //     'email' => 'required|email|unique:users',
                //     'password'=>'required|min:8|confirmed',
                //     'picture' => 'required',
                //     'adresse' => 'required',
                //     'telephone' => 'required',
                //     'RCCM' => 'required',
                //     'IFU' => 'required',
                //     'nomRepresentant' => 'required',
                //     'prenomRepresentant' => 'required',
                //     'emailRepresentant' => 'required|email|unique:users',
                //     'telephoneRepresentant' => 'required',
                //     'CNI' => 'required',

                // ]);
                $client = new User();
                $client->nom = $request->input('nom');
                $client->prenom = $request->input('prenom');
                $client->email = $request->input('email');
          // Gestion du téléchargement du logo
          if ($request->hasFile('picture')) {
            $imagePath = $request->file('picture')->store('uploads', 'public');
            $client->picture = $imagePath;
        }
                $client->adresse = $request->input('adresse');
                $client->telephone = $request->input('telephone');
                $client->RCCM = $request->input('RCCM');
                $client->IFU = $request->input('IFU');
                $client->nomRepresentant = $request->input('nomRepresentant');
                $client->prenomRepresentant = $request->input('prenomRepresentant');
                $client->emailRepresentant = $request->input('emailRepresentant');
                $client->telephoneRepresentant = $request->input('telephoneRepresentant');
                $client->CNI = $request->input('CNI');
                $client->telephone = $request->input('telephone');
                $client->password = bcrypt($request->password);
                $client->roles_id = 2;
                $client->save();


        return 'ok';
    }
}

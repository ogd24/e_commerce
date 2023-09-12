<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class TransiteController extends Controller
{
    public function Transit(){
        return view('transitaire');
    }
    public function TransiListe(){
        $transitaires = User::where('roles_id', 3)->get();
        return view('TransitaireListe',compact('transitaires'));
    }
    public function registerTransitaire(Request $request)
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
                $client->email = $request->input('email');
                if ($request->hasFile('picture')) {
                    $imagePath = $request->file('picture')->store('images', 'public');
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
                $client->roles_id = 3;
                $client->save();



        return 'ok';
                }
    }

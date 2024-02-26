<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{

public function dashordCompagny(){
    $messages = Message::all();
    return view('CompagnyDasbord',compact('messages'));
}
public function dashbordAdmin(){
    return view('Administrateur');
}
public function dashbordtransitaire(){
    return view('TransitaireDasbord');
}
public function dashbordmodérateur(){
    return view('ModérateurDashord');
}
public function adminListe(){

    $administrateurs = User::where('roles_id', 1)->get();

    return view('AdminListe',compact('administrateurs'));
}

public function moderateurListe(){
    $moderateurs = User::where('roles_id', 4)->get();
    return view('moderateurListe',compact('moderateurs'));
}
public function destroy($id)
{
    $product = Product::findOrFail($id);
    $product->delete();
    return back();

}



}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class loginController extends Controller
{
     public function connecter(){
         return view('inscription');
     }

    public function login(Request $request ){
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);

        if (Auth::attempt($credentials)  && Auth::user()->roles_id === 1) {
            $request->session()->regenerate();
            // return redirect()->route('home');
            // return redirect()->route('afficher');
            return 'ok';

        } elseif (Auth::attempt($credentials)  && Auth::user()->roles_id === 2) {
            $request->session()->regenerate();
            // return redirect()->route('home');
            return 'ok';
            // return redirect()->route('afficher');
        } elseif (Auth::attempt($credentials)  && Auth::user()->roles_id === 3) {
            $request->session()->regenerate();
            return redirect()->route('valider');
            // return redirect()->route('afficher');
        }elseif (Auth::attempt($credentials)  && Auth::user()->roles_id === 4) {
            $request->session()->regenerate();
            return redirect()->route('valider');
            // return redirect()->route('afficher'); }

    }  else {
        // L'authentification a échoué
        return redirect()->back()->withErrors(['email' => 'Les informations d\'identification sont incorrectes.'])->withInput();
    }


    // return back()->withErrors([
    //     'email' => 'The provided credentials do not match our records.',
    // ])->onlyInput('email');
}
public function logout()
{
    Auth::logout();
    return redirect('TransitPost');
}











}

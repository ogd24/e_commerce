<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function envoyerMessage(Request $request)
{
    // Validez les données du formulaire ici


    $message = new Message();
    $message->nom = $request->input('nom');
    $message->email = $request->input('email');
    $message->message = $request->input('message');
    $message->save();

    return "ok";
}

public function MessageListe(){
    $messages = Message::all();

    return view('Message',compact('messages'));
}
}


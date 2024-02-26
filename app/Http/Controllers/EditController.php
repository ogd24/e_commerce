<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class EditController extends Controller
{
    public function AdminEditVue(){
        return view('Edit.AdminEdit');
    }

    public function destroyUser($id)
    {
        $users = User::findOrFail($id);
        $users->delete();
        return back();

    }

    public function updateUser(Request $request , $id)
{
   $input = $request->all();
   User::findOrFail($id)->update($input);
    return back();
}
}

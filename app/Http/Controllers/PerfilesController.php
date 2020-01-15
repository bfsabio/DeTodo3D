<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PerfilesController extends Controller
{
  public function update(User $user){
        $user = User::find($id);
        $this->validate($request,[
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'telefono' => ['required', 'string', 'confirmed'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
        $user->name=$request["name"];
        $user->email=$request["email"];
        $user->telefono=$request["telefono"];
        $user->password=$request["password"];
        $user->save();
        return view("/home");
      }
}

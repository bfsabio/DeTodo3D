<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class UserController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }
  public function edit(){
    $user = Auth::user();
    return view('auth.edit',[
      "user"=>$user
    ]);
  }
  public function update(User $user){
    $this->validate($request,[
        'name' => ['required', 'string', 'max:255'],
        'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
        'password' => ['required', 'string', 'min:8', 'confirmed'],
    ]);
    $user->name=$request["name"];
    $user->email=$request["email"];
    $user->password=$request["password"];
    $user->save();
    return view("home");
  }
  public function index() {
    return view('home', ['titulo' => 'hola mundo']);
  }
}

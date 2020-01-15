<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
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
  public function update(Request $req){
    $newpassword = password_hash($req->password, PASSWORD_DEFAULT);
    $user = User::find($req->id);
    $user -> name = $req->name;
    $user -> email = $req->get('email');
    $user -> password = $newpassword;
    $user->update();
    // ->update([
    //   "name"=>$req->name,
    //   "email"=>$req->email,
    //   "telefono"=>$req->telefono,
    //   "password"=>$newpassword,
    // ]);
    return redirect('/user/edit');
  }

  public function index() {
    return view('home', ['titulo' => 'hola mundo']);
  }
}

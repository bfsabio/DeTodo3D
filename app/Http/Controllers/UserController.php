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

  public function index() {




    return view('home', ['titulo' => 'hola mundo']);
  }



  public function edit(){

    $user = Auth::user();
    
    return view('auth.edit',[
      "user"=>$user
    ]);
  }

 public function update(){


  



 }
 
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    function addproduct(Request $req){
        $product = new Servicio([
            'servicio' => $req->name,
            'descripcion' =>$req->desc,
        ]);
    }
    
}

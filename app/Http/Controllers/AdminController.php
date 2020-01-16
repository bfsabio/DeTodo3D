<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Servicio;

class AdminController extends Controller
{
    function addproduct(Request $req){
        $product = new Servicio([
            'servicio' => $req->name,
            'descripcion' =>$req->desc,
        ]);
        $product->save();
        return redirect ('/admin/agregar/producto');
    }
}

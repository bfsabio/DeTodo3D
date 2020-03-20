<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Servicio;
use App\Categoria;

class AdminController extends Controller
{
    public function crearImagen(Request $req){
        $file = $req->file('img');
        $name = $req->input('name') . "." . $file->extension();
        $folder = "public/producto";
        $file->storePubliclyAs($folder,$name);
        return $name; 
    }
    public function addproduct(Request $req){
        $imagen = $this->crearImagen($req);
        $product = new Servicio([
            'servicio' => $req->name,
            'descripcion' =>$req->desc,
            'precio' =>$req->precio,
            'imagen'=>"storage/producto/$imagen",
            'categoria'=>$req->categoria,
        ]);
        $product->save();
        return redirect ('/admin/agregar/producto');
    }

    public function showproduct(){
        $product = Servicio::All();
        $vac = compact('product');
        return view('mostrar',$vac);
    }

    public function agregarCategoria(Request $req){
        $categoria = new Categoria([
           'name' => $req->name,
           'descripcion'=>$req->desc, 
        ]);
        $categoria->save();
        return redirect('admin/agregar/categoria');

    }
    public function showCategoria(){
        $categorias = Categoria::All();
        $vac = compact('categorias');
        return view('addproduct',$vac);
    }
}

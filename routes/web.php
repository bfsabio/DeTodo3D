<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', function () {
    return view('homes'); // return view('welcome');
});
Route::get('faq', function () {
    return view('faq');
});
Route::get('/user/edit',"UserController@edit");
Route::patch('/user/{user}/update',"UserController@update")->name('user.update');
Route::get('perfil2', function () {
    return view('perfil2');
});
Route::get('diseño', function () {
    return view('servicio');
});
Route::get('impresion', function () {
    return view('servicio');
});
Route::get('reparacion', function () {
    return view('servicio');
});
Route::get('insumos', function () {
    return view('servicio');
});
Route::get('otros', function () {
    return view('servicio');
});

//
// Route::get('logout', function () {
//     // return view('welcome');
//     return view('homes');
// });
//
// Route::get('login', function () {
//     // en esta ruta login
//     return view('login');
// });
//
// Route::get('register', function () {
//     // en esta ruta register
//     return view('register');
// });
//
//
// Route::get('inicio', function () {
//     // en esta ruta faq
//     return view('inicio');
// });
// // ruta estando logueado
// Route::get('logueado/inicio/{name}', function ($name) {
//     // en esta ruta incio
//     return "ruta a inicio de $name";
// });
// inicio contiene la navbar modificada, seleccion de proovedores preestablecida se deve hacer con java.
// al no estar en esa instancia se opta por modificacion alterna de vista de 5 imagenes con botones hasta poder estar en la instancia requerida

// Route::get('logueado/incio/{name}/configuraciones', function ($name) {
//     // en esta ruta configuraciones
//     return "ruta a configuraciones";
// });
// Route::get('foo',function(){
//   return view('home');
// });
// Route::get('/usuarios/{id}'{
//   return "usuarios";
// })
// Route::get('/resultado/{numero}', function($numero){
//   if ($numero) {
//     // code...
//   }
// })
// Route::get('/{name}', function ($name) {
//   return 'Hola ' . $name;
// } );
// Route::get('post/{post_id}/comments/{coment_id?}',function($post_id,$coment_id=null){
//   id ($coment_id !== null){
//     return $comment_id;
//   }else {
//     return 'no hay comentarios';
//   }
// });

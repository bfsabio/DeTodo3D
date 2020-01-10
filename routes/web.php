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

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', function () {
    return view('homes'); // return view('welcome');
});
Route::get('faq', function () {
    return view('faq');
});
Route::get('/user/faq', function () {
    return view('faq');
});
Route::get('/user/selecciondeclase', function () {
    return view('selecciondeclase');
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
Route::get('registrar',function(){
  $paises= App\User::getPaises();
  return view('auth.register',['paises'=>$paises]);
});


///////////////////////////solo administrador//////////////////////////////////
Route::group([
    'middleware' => 'admin',
    'prefix' => 'admin',
    'namespace' => 'Admin'
], function () {
    Route::get('/admin',function(){
      return view('administrador');
    });
    Route::get('/agregar/producto', function(){
        return view('addproduct');
    });
});

///////////////////////////////////////////////////////////////////////////////
Auth::routes();

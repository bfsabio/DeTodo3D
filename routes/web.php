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
Route::get('perfil', function () {
    return view('perfil');
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
], function () {
    Route::get('/',function(){
      return view('administrador');
    });
    Route::get('/agregar/producto','AdminController@showCategoria');
    
    Route::get('/agregar/categoria', function(){
        return view('addcategoria');
    });
});
Route::get('/mostrar/producto','AdminController@showproduct');

Route::post('producto','AdminController@addproduct');

Route::post('categoria','AdminController@agregarCategoria');
///////////////////////////////////////////////////////////////////////////////
Auth::routes();

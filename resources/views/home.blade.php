@extends('layouts.app')
@include('inicio')
@section('content')
@endsection
{{-- public function up()
{
     Schema::create('user_servicio', function (Blueprint $table) {
         $table->bigIncrements('id');
        $table->foreign('user_id')->reference('id')->on('users');   //se crea columna user id referenciando al id en la tabla users
     $table->unsignedBigInteger('user_id'); // aca se crea la columna y arriba se asigna el valor
         $table->foreign('servicio_id')->reference('id')->on('servicios');   //se crea columna user id referenciando al id en la tabla users
         $table->unsignedBigInteger('servicio_id'); // aca se crea la columna y arriba se asigna el valor
         $table->timestamps();
     });
 }

/**
 * Reverse the migrations.
 *
 * @return void
 */
public function down()
{
     Schema::dropIfExists('user_servicio');
}
} --}}

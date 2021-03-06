<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserServicioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_servicios', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id'); // aca se crea la columna y arriba se asigna el valor
            $table->foreign('user_id')->reference('id')->on('users');   //se crea columna user id referenciando al id en la tabla users
            $table->unsignedBigInteger('servicio_id'); // aca se crea la columna y arriba se asigna el valor
            $table->foreign('servicio_id')->reference('id')->on('servicios');   //se crea columna user id referenciando al id en la tabla users
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
        Schema::dropIfExists('user_servicios');
    }
}

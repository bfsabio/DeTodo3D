<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('post', function (Blueprint $table) { //esta tabla hace referencia al posteo del usuario
            $table->bigIncrements('id');
            $table->string('name');
            $table->text('descripcion');
            $table->foreign('user_id')->reference('id')->on('users');   //se crea columna user id referenciando al id en la tabla users
            $table->unsignedBigInteger('user_id'); // aca se crea la columna y arriba se asigna el valor
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
        Schema::dropIfExists('post');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id('id_usuario');
            $table->unsignedBigInteger('id_persona');
            $table->string('usuario');
            $table->string('clave');
            $table->integer('habilitado');
            $table->date('fecha');
            $table->unsignedBigInteger('id_rol');
            $table->date('fecha_creacion');
            $table->date('fecha_modificacion');
            $table->string('usuario_creacion');
            $table->string('usuario_modificacion');
            $table->foreign('id_persona')->references('id_persona')->on('personas');
            $table->foreign('id_rol')->references('id_rol')->on('roles');
            $table->timestamps();


        });
    }



    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usuarios');
    }
};

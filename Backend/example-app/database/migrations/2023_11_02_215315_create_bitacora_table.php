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
        Schema::create('bitacora', function (Blueprint $table) {
            $table->id('id_bitacora');
            $table->text('bitacora');
            $table->unsignedBigInteger('id_usuario');
            $table->date('fecha');
            $table->time('hora');
            $table->string('ip');
            $table->string('so');
            $table->string('navegador');
            $table->string('usuario');
            $table->foreign('id_usuario')->references('id_usuario')->on('usuarios');
            $table->timestamps();

        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bitacora');
    }
};

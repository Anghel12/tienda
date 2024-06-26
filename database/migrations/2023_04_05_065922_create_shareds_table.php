<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shareds', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->text('descripcion');
           /*  $table->string('imagen'); */
            $table->string('plataforma');
            $table->unsignedBigInteger('user_id'); // Agregar el campo para el usuario creador
            $table->string('url')->nullable();
            $table->integer('conteo')->default(0);
            $table->boolean('activo')->default(true);
            $table->string('etiquetas')->nullable();
            $table->string('tipo')->nullable();
            $table->integer('vistas')->default(0);

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade'); // Agregar la llave foránea para la relación con la tabla users

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
        Schema::dropIfExists('shareds');
    }
};

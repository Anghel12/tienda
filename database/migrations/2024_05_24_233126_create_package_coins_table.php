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
        Schema::create('package_coins', function (Blueprint $table) {
            $table->id();
            $table->string('titulo'); // Título del paquete
            $table->text('body'); // Cuerpo del paquete
            $table->integer('numero'); // Número asociado al paquete
            $table->string('title_button'); // Texto del botón
            $table->string('sub_titulo'); // Subtítulo del paquete
            $table->json('etiquetas'); // Etiquetas asociadas al paquete
            $table->timestamps(); // Timestamps para created_at y updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('package_coins');
    }
};

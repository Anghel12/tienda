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
        Schema::create('images', function (Blueprint $table) {
            $table->id();
            $table->morphs('imageable');  // Esto crea las columnas imageable_id y imageable_type
            $table->string('url');  // URL de la imagen o video
            $table->boolean('is_main')->default(false);  // Si es la imagen principal
            $table->integer('position')->nullable(); // Posición en la galería
            $table->integer('height')->nullable();  // Altura de la imagen
            $table->timestamps();
            /* $table->id();
            $table->string('url');
            $table->unsignedBigInteger('imageable_id')->nullable();
            $table->string('imageable_type')->nullable();
            $table->unsignedBigInteger('created_by')->nullable();
            $table->timestamps();

            $table->foreign('created_by')
                ->references('id')
                ->on('users')
                ->onDelete('set null');

            $table->index(['imageable_id', 'imageable_type']); */
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('images');
    }
};

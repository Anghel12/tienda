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
        Schema::create('product_marketing', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_id')->constrained()->cascadeOnDelete();
            $table->text('description')->nullable();           // Descripción SEO
            $table->string('keywords')->nullable();            // Palabras clave
            $table->integer('priority')->default(0);           // Orden de prioridad
            $table->boolean('is_featured')->default(false);    // Producto destacado
            $table->integer('sales_count')->default(0);        // Contador de ventas
            $table->float('rating')->default(0);               // Calificación promedio
            $table->integer('reviews_count')->default(0);      // Número de reseñas
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
        Schema::dropIfExists('product_marketing');
    }
};

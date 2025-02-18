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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');                           // Nombre del producto
            $table->string('slug')->unique();                  // URL amigable
            $table->text('extract')->nullable();               // Resumen o extracto
            $table->longText('body')->nullable();              // Descripción completa
            $table->foreignId('category_id')->constrained()->cascadeOnDelete();
            $table->foreignId('brand_id')->constrained()->cascadeOnDelete();
            $table->foreignId('seller_id')->constrained('users')->cascadeOnDelete();
            $table->integer('stock');                          // Stock disponible
            $table->enum('status', ['active', 'inactive'])->default('active'); // Estado
            
            $table->timestamps();
        });
        
      /*   Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug')->nullable();
            
            $table->text('extract')->nullable();
            $table->longText('body')->nullable();

            $table->decimal('price', 10, 2)->nullable(); // Precio
            $table->integer('stock')->nullable(); // Stock disponible
            $table->decimal('price_reciente', 10, 2)->nullable();
            $table->enum('status', [1, 2])->default(1);

            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('brand_id'); 

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade'); 
            $table->foreign('brand_id')->references('id')->on('brands')->onDelete('cascade');  
            $table->timestamps();
        }); */
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
};

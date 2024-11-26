<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB; 

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contents', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->string('subtitle')->nullable();
            $table->text('body')->nullable();
            $table->timestamps();
        });

        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->string('subtitle')->nullable();
            $table->text('body')->nullable();
            $table->timestamps();
        });


        Schema::create('packages', function (Blueprint $table) { // Cambiado a "packages" en lugar de "package"
            $table->id();
            $table->string('title')->nullable();
            $table->string('subtitle')->nullable();
            $table->text('body')->nullable();
            $table->timestamps();
        });


        Schema::create('about', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->string('subtitle')->nullable();
            $table->text('body')->nullable();
            $table->integer('miembro')->nullable(); // Campo numérico para 'miembro'
            $table->timestamps();
        });

        Schema::create('memberships', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->text('body')->nullable();
            $table->string('subtitle')->nullable();
            $table->text('sub_body')->nullable(); // Cambiado a "text" para permitir contenido más largo
            $table->string('price_title')->nullable(); // Título del precio
            $table->decimal('price', 10, 5)->nullable(); // Precio
            $table->text('offer')->nullable(); // Lo que se ofrece
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
        Schema::dropIfExists('contents');
        Schema::dropIfExists('services');
        Schema::dropIfExists('packages');
        Schema::dropIfExists('about');
        Schema::dropIfExists('memberships');
    }
};

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
        Schema::create('links', function (Blueprint $table) {
            $table->id();
            $table->string('url', 1000); // El enlace
            $table->string('type')->nullable(); // Tipo de enlace: 'youtube', 'image', etc.
            $table->boolean('is_main')->default(false); // Indica si es el link principal
            $table->morphs('linkable'); // Relación polimórfica
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
        Schema::dropIfExists('links');
    }
};

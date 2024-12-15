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
        Schema::create('views', function (Blueprint $table) {
            $table->id();
            $table->morphs('viewable'); // viewable_id y viewable_type, índice compuesto automático
            $table->ipAddress('ip_address'); // Dirección IP optimizada
            $table->unsignedBigInteger('user_id')->nullable(); // Usuario autenticado
            $table->timestamps();
        
            // Índices adicionales
            $table->index(['ip_address', 'user_id']); // Índice combinado para mejorar consultas por IP y usuario
            $table->index('user_id'); // Índice para consultas frecuentes por usuario
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('views');
    }
};

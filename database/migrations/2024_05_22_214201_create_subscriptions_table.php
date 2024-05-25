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
        Schema::create('subscriptions', function (Blueprint $table) {
            $table->id();
                $table->string('name');
                $table->decimal('price', 8, 2);
                $table->text('features');
                $table->string('classes')->nullable();
                $table->string('button_title')->nullable();
                $table->timestamps();
            });

            // Insertar los registros directamente en la migración
            DB::table('subscriptions')->insert([
                [
                    'name' => 'Starter',
                    'price' => 199.00,
                    'features' => json_encode([
                        'Complete documentation',
                        'Working materials in Sketch',
                        '500MB cloud storage',
                        'Lite support'
                    ]),
                    'classes' => 'col-lg-3 mb-lg-auto mb-4 my-auto p-md-0 ms-auto',
                    'button_title' => 'Buy now',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'name' => 'Professional',
                    'price' => 299.00,
                    'features' => json_encode([
                        'Complete documentation',
                        'Working materials in Figma',
                        '2GB cloud storage',
                        'Priority support'
                    ]),
                    'classes' => 'col-lg-3 p-md-0 mb-lg-auto mb-4 z-index-2',
                    'button_title' => 'Purchase',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'name' => 'Enterprise',
                    'price' => 499.00,
                    'features' => json_encode([
                        'Complete documentation',
                        'Working materials in Adobe XD',
                        '5GB cloud storage',
                        '24/7 support'
                    ]),
                    'classes' => 'col-lg-3 mb-lg-auto mb-4 my-auto p-md-0 me-auto',
                    'button_title' => 'Get Started',
                    'created_at' => now(),
                    'updated_at' => now(),
                ]
            ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('subscriptionss');
    }
};

<?php

namespace Database\Seeders;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Products\Product;
use App\Models\Products\ProductMarketing;
use App\Models\Products\ProductMedia;
use App\Models\Products\ProductPaymentMethod;
use App\Models\Products\ProductPolicy;
use App\Models\Products\ProductPrice;
use App\Models\Products\ProductPromotion;
use App\Models\Products\ProductQuestion;
use App\Models\Products\ProductReview;
use App\Models\Products\ProductShipping;
use App\Models\Products\ProductVariant;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Request;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Crear productos manualmente con valores predeterminados
        $products = [
            [
                'name' => 'Producto 1',
                'slug' => 'producto-1',
                'extract' => 'Extracto de Producto 1',
                'body' => 'Descripción completa del Producto 1',
                'category_id' => Category::inRandomOrder()->first()->id,
                'brand_id' => Brand::inRandomOrder()->first()->id,
                'seller_id' => User::inRandomOrder()->first()->id,
                'stock' => 50,
                'status' => 'active',
            ],
            [
                'name' => 'Producto 2',
                'slug' => 'producto-2',
                'extract' => 'Extracto de Producto 2',
                'body' => 'Descripción completa del Producto 2',
                'category_id' => Category::inRandomOrder()->first()->id,
                'brand_id' => Brand::inRandomOrder()->first()->id,
                'seller_id' => User::inRandomOrder()->first()->id,
                'stock' => 30,
                'status' => 'inactive',
            ],

            [
                'name' => 'Producto 3',
                'slug' => 'producto-3',
                'extract' => 'Extracto de Producto 3',
                'body' => 'Descripción completa del Producto 3',
                'category_id' => Category::inRandomOrder()->first()->id,
                'brand_id' => Brand::inRandomOrder()->first()->id,
                'seller_id' => User::inRandomOrder()->first()->id,
                'stock' => 3,
                'status' => 'inactive',
            ],

            [
                'name' => 'Producto 4',
                'slug' => 'producto-4',
                'extract' => 'Extracto de Producto 4',
                'body' => 'Descripción completa del Producto 4',
                'category_id' => Category::inRandomOrder()->first()->id,
                'brand_id' => Brand::inRandomOrder()->first()->id,
                'seller_id' => User::inRandomOrder()->first()->id,
                'stock' => 3,
                'status' => 'inactive',
            ],


            [
                'name' => 'Producto 5',
                'slug' => 'producto-5',
                'extract' => 'Extracto de Producto 5',
                'body' => 'Descripción completa del Producto 5',
                'category_id' => Category::inRandomOrder()->first()->id,
                'brand_id' => Brand::inRandomOrder()->first()->id,
                'seller_id' => User::inRandomOrder()->first()->id,
                'stock' => 3,
                'status' => 'inactive',
            ],

            
            [
                'name' => 'Producto 6',
                'slug' => 'producto-6',
                'extract' => 'Extracto de Producto 6',
                'body' => 'Descripción completa del Producto 6',
                'category_id' => Category::inRandomOrder()->first()->id,
                'brand_id' => Brand::inRandomOrder()->first()->id,
                'seller_id' => User::inRandomOrder()->first()->id,
                'stock' => 3,
                'status' => 'inactive',
            ],
            
            // Puedes agregar más productos si es necesario
        ];

        foreach ($products as $productData) {
            $product = Product::create($productData);

                    // Asociar imágenes
            $product->images()->create([
                'url' => 'https://noticias.autocosmos.com.pe/2022/05/07/ferrari-sp48-unica-un-one-off-deslumbrante',
              /*   'url' => 'https://i.imgur.com/iGpZ4B7.jpeg', */
                'is_main' => true, // Imágen principal
                'position' => 1, // Posición en la galería
                'height' => 600, // Altura de la imagen
            ]);
            $product->images()->create([
                'url' => 'https://i.imgur.com/TjjOCgC.jpeg',
                'is_main' => false, // No es la imagen principal
                'position' => 2, // Posición en la galería
                'height' => 600, // Altura de la imagen
            ]);
            $product->images()->create([
                'url' => 'https://i.imgur.com/5iz68om.jpeg',
                'is_main' => false, // No es la imagen principal
                'position' => 3, // Posición en la galería
                'height' => 600, // Altura de la imagen
            ]);

            // Asociar video
            $product->videos()->create([
                'url' => 'https://example.com/video.mp4',
                'duration' => '2:30', // Duración del video
                'resolution' => '1080p', // Resolución del video
            ]);

             // Registrar una vista inicial
            $ipAddress = Request::ip(); // Dirección IP del cliente
            $userId = auth()->id(); // ID del usuario autenticado, si existe
            $product->views()->create([
                'ip_address' => $ipAddress, // IP del creador o sistema
                'user_id' => $userId,       // Si el creador está autenticado
            ]);

            // Asociar precios
            ProductPrice::create([
                'product_id' => $product->id,
                'price' => 100.00, // Precio base
                'discount' => 10.00, // Descuento
                'price_reciente' => 120.00, // Precio anterior
            ]);
        
            // Asociar marketing con ProductMarketing
            ProductMarketing::create([
                'product_id' => $product->id,  // Asegúrate de que $product->id existe
                'description' => 'Descripción del producto',
                'keywords' => 'palabra clave, otra palabra clave',
                'priority' => 1,
                'is_featured' => true,
                'sales_count' => 50,
                'rating' => 4.5,
                'reviews_count' => 10,
            ]);
            
        
            // Asociar métodos de pago con ProductPaymentMethod
            ProductPaymentMethod::create([
                'product_id' => $product->id,
                'payment_method' => 'credit_card', // Método de pago
            ]);
        
            // Asociar políticas con ProductPolicy
            ProductPolicy::create([
                'product_id' => $product->id,
                'shipping_policy' => 'Shipping policy details', // Detalles de la política de envío
                'return_policy' => 'Return policy details', // Detalles de la política de devolución
            ]);
        
            // Asociar promociones con ProductPromotion
            ProductPromotion::create([
                'product_id' => $product->id,
                'discount_percentage' => 15, // Porcentaje de descuento
                'start_date' => now(), // Fecha de inicio de la promoción
                'end_date' => now()->addDays(30), // Fecha de fin de la promoción
            ]);
        
            // Asociar preguntas con ProductQuestion
            ProductQuestion::create([
                'product_id' => $product->id,
                'user_id' => 1, // Usuario que realiza la pregunta
                'question' => '¿Este producto tiene garantía?', // Pregunta
                'answer' => 'Sí, tiene garantía de 1 año.', // Respuesta
            ]);
        
            // Asociar reseñas con ProductReview
            ProductReview::create([
                'product_id' => $product->id,
                'user_id' => 1, // Usuario que realiza la reseña
                'review' => 'Excelente producto, lo recomiendo.', // Reseña
                'rating' => 5, // Calificación
            ]);
        
            // Asociar envío con ProductShipping
            ProductShipping::create([
                'product_id' => $product->id,
                'weight' => 1.5, // Peso en kg
                'dimensions' => json_encode(['length' => 20, 'width' => 10, 'height' => 5]), // Dimensiones como JSON
                'shipping_cost' => 15.00, // Costo de envío
                'is_free_shipping' => false, // ¿Tiene envío gratis?
            ]);
        
            // Asociar variantes con ProductVariant
            ProductVariant::create([
                'product_id' => $product->id,
                'name' => 'Color Rojo', // Nombre de la variante
                'price' => 90.00, // Precio de la variante
                'stock' => 50, // Stock de la variante
                'sku' => 'ROJO123', // SKU de la variante
            ]);
        }
        
    }
}

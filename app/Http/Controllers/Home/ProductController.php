<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Home\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class ProductController extends Controller
{
    public function index() 
    {
        //crud borra la cache ok 6 meses
        // Definir las categorías que deseas filtrar
        $categories = ['Motokares', 'Aros', 'Motores'];
    
        // Intentar obtener los productos desde la caché con una duración de 6 meses
        $products = Cache::remember('products_' . implode('_', $categories), now()->addMonths(6), function () use ($categories) {
            return Product::with([
                'links' => function ($query) {
                    $query->where('type', 'image'); // Solo un enlace de tipo imagen
                },
                'category:id,name', // cargar solo los campos id y name de la categoría
                'brand:id,title'    // cargar solo los campos id y title de la marca
            ])
            ->whereIn('category_id', function($query) use ($categories) {
                // Filtrar por las categorías definidas
                $query->select('id')
                    ->from('categories')
                    ->whereIn('name', $categories);
            })
            ->orderBy('created_at', 'desc') // Ordenar por productos más recientes
            ->get();
        });
    
        // Filtrar productos por categoría sin hacer consultas adicionales
        $motokares_filtro_market = $products->where('category.name', 'Motokares');
        $aros_filtro_market = $products->where('category.name', 'Aros');
        $motores_filtro_market = $products->where('category.name', 'Motores');
    
        return view('markets.products.index', compact('products', 'motokares_filtro_market', 'aros_filtro_market', 'motores_filtro_market'));
    }
    
    
    public function show(Product $product)
    {
        // Usar cache para el producto completo con una duración de 6 meses
        $product = Cache::remember("product_{$product->id}", now()->addMonths(6), function() use ($product) {
            return Product::with([
                'user:id,name',
                'links' => function($query) {
                    $query->whereIn('type', ['youtube', 'image']);
                },
                'category:id,name',
                'brand:id,title'
            ])->find($product->id);
        });
        
        // Usar cache para los enlaces relacionados con el producto, con 6 meses de duración
        $linkYoutube = Cache::remember("link_youtube_{$product->id}", now()->addMonths(6), function() use ($product) {
            return $product->links()->where('type', 'youtube')->first();
        });
        
        $linkImage = Cache::remember("link_image_{$product->id}", now()->addMonths(6), function() use ($product) {
            return $product->links()->where('type', 'image')->first();
        });
        
        // Usar cache para los productos relacionados, con 6 meses de duración
        $relatedProducts = Cache::remember("related_products_{$product->category_id}", now()->addMonths(6), function() use ($product) {
            return Product::where('category_id', $product->category_id)
                          ->where('id', '!=', $product->id)
                          ->limit(5)  // Limitar la cantidad de productos relacionados si es necesario
                          ->get();
        });
    
        return view('markets.products.show', compact('product', 'linkYoutube', 'linkImage', 'relatedProducts'));
    }
    

   /*  public function show(Product $product)
    {
        // Cargar solo el nombre del usuario, sin las monedas
        $product = Product::with('user:id,name')->find($product->id);

        $linkYoutube = $product->links()->where('type', 'youtube')->first();
        $linkImage = $product->links()->where('type', 'image')->first();
        
        // Obtener productos de la misma categoría, excluyendo el producto actual
        $relatedProducts = Product::where('category_id', $product->category_id)
                                  ->where('id', '!=', $product->id)
                                  ->get();
    
        return view('markets.products.show', compact('product', 'linkYoutube', 'linkImage', 'relatedProducts'));
    } */
    


}

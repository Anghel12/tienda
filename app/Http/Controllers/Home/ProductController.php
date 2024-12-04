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
        // Obtener categorías con caché de 6 meses
        $filtro_categorias = Cache::remember('categories_id_name', now()->addMonths(6), function () {
            return Category::select('id', 'name')->get();
        });
    
        // Obtener categorías con productos limitados a 3, sus enlaces de tipo imagen y con caché
        $prodcuts_categorias = Cache::remember('prodcuts_categorias', now()->addMonths(6), function () {
            return Category::with([
                'products' => function ($query) {
                    // Ordenar productos por los más recientes y cargar los enlaces de tipo imagen
                    $query->orderBy('created_at', 'desc')
                        ->with(['links' => function ($query) {
                            $query->where('type', 'image'); // Solo enlaces tipo imagen
                        }])
                        ->with('brand'); // Cargar la marca de los productos también
                }
            ])
            ->take(3) // Limitar a las primeras 3 categorías
            ->get(['id', 'name']); // Obtener solo id y nombre de las categorías
        });
    
        // Cargar productos con relaciones, caché de 6 meses
        $products = Cache::remember('products_with_relations', now()->addMonths(6), function () {
            return Product::with([
                'links' => function ($query) {
                    $query->where('type', 'image'); // Solo enlaces tipo imagen
                },
                'category:id,name', // Cargar solo id y name de la categoría
                'brand:id,title'    // Cargar solo id y title de la marca
            ])
            ->orderBy('created_at', 'desc') // Ordenar por los más recientes
            ->get();
        });

    
        return view('markets.products.index', compact('products', 'filtro_categorias', 'prodcuts_categorias'));
    }
    
    
    public function show($slug)
    {
        // Buscar el producto por su slug
        $product = Cache::remember("product_{$slug}", now()->addMonths(6), function() use ($slug) {
            return Product::with([
                'user:id,name',
                'links' => function($query) {
                    $query->whereIn('type', ['youtube', 'image']);
                },
                'category:id,name',
                'brand:id,title'
            ])->where('slug', $slug)->first();  // Buscar por el slug en lugar del id
        });
    
        // Verificar si el producto existe
        if (!$product) {
            abort(404, 'Producto no encontrado');
        }
    
        // Usar cache para los enlaces relacionados con el producto, con 6 meses de duración
        $linkYoutube = Cache::remember("link_youtube_{$product->slug}", now()->addMonths(6), function() use ($product) {
            return $product->links()->where('type', 'youtube')->first();
        });
    
        $linkImage = Cache::remember("link_image_{$product->slug}", now()->addMonths(6), function() use ($product) {
            return $product->links()->where('type', 'image')->first();
        });
    
        // Usar cache para los productos relacionados, con 6 meses de duración
        $relatedProducts = Cache::remember("related_products_{$product->category_id}", now()->addMonths(6), function() use ($product) {
            return Product::where('category_id', $product->category_id)
                          ->where('id', '!=', $product->id)
                          ->limit(5)  // Limitar la cantidad de productos relacionados
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

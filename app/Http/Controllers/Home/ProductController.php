<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Products\Product;
use App\Models\Tag;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Request;
use PhpParser\Node\Stmt\Return_;

class ProductController extends Controller
{
    public function index() 
    {
        /* en el filtro solo trae id, titulo se puede una sola consulta */
       // Obtener categorías con caché de 6 meses
        $filtro_categorias = Cache::remember('categories_id_name', now()->addMonths(6), function () {
            return Category::select('id', 'name')->get();
        });

        // Obtener marcas con caché de 6 meses
        $brands = Cache::remember('brands_id_title', now()->addMonths(6), function () {
            return Brand::select('id', 'title')->get();
        });

        // Obtener etiquetas con caché de 6 meses
        $tags = Cache::remember('tags_id_name', now()->addMonths(6), function () {
            return Tag::select('id', 'name')->get();
        });
        $views_products = Product::with([
            'product_price:id,product_id,final_price,price_reciente' // Cargar precios solo si se necesitan
        ])
        ->select('id', 'name', 'slug') // Campos mínimos del producto
        ->withCount('views') // Contar las vistas
        ->orderByDesc('views_count') // Ordenar por popularidad
        ->take(6)
        ->get();
    
        // Lazy load cuando necesites las imágenes
        $views_products->load(['mainImage']);
    

        $products = Cache::remember('products_with_relations', now()->addMonths(6), function () {
            return Product::with([
                    'brand:id,title', 
                    'product_price'
                ])
                ->select('id', 'name', 'slug') // Solo los campos necesarios
                ->orderBy('updated_at', 'desc')
                ->take(9)
                ->get();
        });
        
        // Lazy load para cargar imágenes solo si es necesario
        $products->load(['mainImage']);
        
        
        $prodcuts_categorias = Cache::remember('prodcuts_categorias', now()->addMonths(6), function () {
            return Category::with([
                'products' => function ($query) {
                    $query->with(['mainImage', 'brand:id,title', 'product_price']) // Cargar solo lo necesario
                        ->orderBy('created_at', 'desc');
                }
            ])
            ->orderBy('updated_at', 'desc')
            ->take(3)
            ->get();
        });
    

        return view('markets.products.index', compact('products','views_products', 'brands','tags', 'filtro_categorias', 'prodcuts_categorias'));
   
    } 

    public function show($slug)
    {
        // Buscar el producto por su slug
        $product = Cache::remember("product_{$slug}", now()->addMonths(6), function() use ($slug) {
            return Product::with([
                'user:id,name',
                'mainImage',
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
            return $product->videos()->first();
        });
    
        $linkImages = Cache::remember("link_image_{$product->slug}", now()->addMonths(6), function() use ($product) {
            return $product->images()->get();
        });
    
        // Usar cache para los productos relacionados, con 6 meses de duración
        $relatedProducts = Cache::remember("related_products_{$product->category_id}", now()->addMonths(6), function() use ($product) {
            return Product::where('category_id', $product->category_id)
                          ->where('id', '!=', $product->id)
                          ->limit(5)  // Limitar la cantidad de productos relacionados
                          ->get();
        });
        
        // Registrar la vista
        $product->registerView('Product');
    
    
        return view('markets.products.show', compact('product', 'linkYoutube', 'linkImages', 'relatedProducts'));
    }

    public function categorieshow($slug)
    {

          // Obtener categorías con caché de 6 meses
          $filtro_categorias = Cache::remember('categories_id_name', now()->addMonths(6), function () {
            return Category::select('id', 'name')->get();
        });

        // Obtener marcas con caché de 6 meses
        $brands = Cache::remember('brands_id_title', now()->addMonths(6), function () {
            return Brand::select('id', 'title')->get();
        });

        // Obtener etiquetas con caché de 6 meses
        $tags = Cache::remember('tags_id_name', now()->addMonths(6), function () {
            return Tag::select('id', 'name')->get();
        });


        // Usar caché para almacenar productos más vistos
        $views_products = Cache::remember('views_products', now()->addMonths(6), function () {
            return Product::with('product_price') // Cargar la relación 'product_price' para obtener el precio
                ->select('id', 'name', 'slug') // Seleccionar solo los campos necesarios
                ->withCount('views') // Contar las vistas de cada producto
                ->orderByDesc('views_count') // Ordenar por la cantidad de vistas en orden descendente
                ->take(6) // Limitar a los 6 productos más vistos
                ->get();
        });
        
        // Obtener la categoría con el slug proporcionado
        $categoria = Category::where('slug', $slug)->first();
        
        // Verificar si la categoría existe
        if (!$categoria) {
            abort(404);  // Si no existe la categoría, mostrar error 404
        }
    
        // Obtener los productos relacionados con la categoría seleccionada
        $products_by_category = $categoria->products()->withCount('views')->orderByDesc('views_count')->get();
        
        // Retornar la vista con los productos filtrados y más vistos
        return view('markets.categories.show', compact('views_products', 'products_by_category', 'categoria', 'brands','tags', 'filtro_categorias', ));
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

/* $views_products = Cache::remember('views_products', now()->addMonths(6), function () {
    return Product::with(['product_price', 'mainImage', 'brand:id,title']) // Cargar las relaciones necesarias
        ->select('id', 'name', 'slug') // Seleccionar solo los campos que realmente necesitas
        ->withCount('views') // Contar las vistas
        ->orderByDesc('views_count') // Ordenar por vistas
        ->take(6)
        ->get();
});

// Obtener productos con relaciones necesarias y seleccionando solo los campos requeridos
$products = Cache::remember('products_with_relations', now()->addMonths(6), function () {
    return Product::with(['mainImage', 'brand:id,title', 'product_price']) // Cargar las relaciones necesarias
        ->select('id', 'name', 'slug') // Seleccionar solo los campos necesarios
        ->orderBy('updated_at', 'desc')
        ->take(9)
        ->get();
});

// Cargar categorías con productos y relaciones de productos
$prodcuts_categorias = Cache::remember('prodcuts_categorias', now()->addMonths(6), function () {
    return Category::with([
        'products' => function ($query) {
            $query->with(['mainImage', 'brand:id,title', 'product_price']) // Cargar solo lo necesario
                ->orderBy('created_at', 'desc');
        }
    ])
    ->orderBy('updated_at', 'desc')
    ->take(3)
    ->get();
}); */

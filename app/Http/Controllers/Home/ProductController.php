<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Home\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        // Cargar productos con enlaces filtrados y ordenarlos por fecha de creación descendente
        $products = Product::with(['links' => function ($query) {
            $query->where('type', 'image'); // Solo un enlace de tipo imagen
        }])
        ->orderBy('created_at', 'desc') // Ordenar por productos más recientes
        ->get();


         // Filtrar productos por categoría "aros" y cargar enlaces de tipo imagen
        $motokares_filtro_market = Product::with(['links' => function ($query) {
            $query->where('type', 'image'); // Solo un enlace de tipo imagen
        }])
        ->whereHas('category', function ($query) {
            $query->where('name', 'Motokares'); // Filtrar por el nombre de la categoría "aros"
        })
        ->orderBy('created_at', 'desc') // Ordenar por productos más recientes
        ->get();

        // Filtrar productos por categoría "aros" y cargar enlaces de tipo imagen
        $aros_filtro_market = Product::with(['links' => function ($query) {
            $query->where('type', 'image'); // Solo un enlace de tipo imagen
        }])
        ->whereHas('category', function ($query) {
            $query->where('name', 'Aros'); // Filtrar por el nombre de la categoría "aros"
        })
        ->orderBy('created_at', 'desc') // Ordenar por productos más recientes
        ->get();

         // Filtrar productos por categoría "aros" y cargar enlaces de tipo imagen
         $motores_filtro_market = Product::with(['links' => function ($query) {
            $query->where('type', 'image'); // Solo un enlace de tipo imagen
        }])
        ->whereHas('category', function ($query) {
            $query->where('name', 'Motores'); // Filtrar por el nombre de la categoría "aros"
        })
        ->orderBy('created_at', 'desc') // Ordenar por productos más recientes
        ->get();

    
        return view('markets.products.index', compact('products', 'motokares_filtro_market', 'aros_filtro_market', 'motores_filtro_market'));
    }



    public function show(Product $product)
    {
        $linkYoutube = $product->links()->where('type', 'youtube')->first();
        $linkImage = $product->links()->where('type', 'image')->first();
        
        // Obtener productos de la misma categoría, excluyendo el producto actual
        $relatedProducts = Product::where('category_id', $product->category_id)
                                  ->where('id', '!=', $product->id)
                                  ->get();
    
        return view('markets.products.show', compact('product', 'linkYoutube', 'linkImage', 'relatedProducts'));
    }
    


}

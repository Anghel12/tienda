<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
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

        
    
        return view('markets.products.index', compact('products'));
    }

    public function show(Product $product)
    {

        $linkYoutube = $product->links()->where('type', 'youtube')->first();
        $linkImage = $product->links()->where('type', 'image')->first();
        return view('markets.products.show', compact('product', 'linkYoutube', 'linkImage'));
    }


}

<?php

namespace App\Http\Controllers\Admin\Market;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Image;
use App\Models\Products\Product;
use App\Models\Products\ProductMarketing;
use App\Models\Products\ProductMedia;
use App\Models\Products\ProductPaymentMethod;
use App\Models\Products\ProductPolicy;
use App\Models\Products\ProductPrice; 
use App\Models\Products\ProductPromotion;
use App\Models\Products\ProductReview;
use App\Models\Products\ProductShipping;
use App\Models\Products\ProductVariant;
use App\Models\Tag;
use App\Models\Video;
use App\Models\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:admin.roles.index')->only('index');
        $this->middleware('can:admin.roles.create')->only('create', 'store');
        $this->middleware('can:admin.roles.edit')->only('edit', 'update');
        $this->middleware('can:admin.roles.destroy')->only('destroy'); 
    } 

    public function index()
    {
        // Cargar productos con la relación de media, filtrando solo el campo 'main_image'
        $products = Product::orderby('created_at', 'desc')->get(); 

        return view('admin.products.index', compact('products'));
    }
    

    public function create()
    {
        // Obtener las opciones necesarias para los formularios de categorías, marcas, etc.
        $tags = Tag::all();
        $categories = Category::all();
        $brands = Brand::all();
        return view('admin.products.create', compact('categories', 'brands', 'tags'));
    }

    public function edit($id)
    {
        // Obtener el producto con sus relaciones
        $product = Product::with([
            'category', 'brand', 'product_price', 'images', 'variants', 'videos',
            'promotions', 'reviews', 'policies', 'paymentMethods', 'shipping', 'marketing'
        ])->findOrFail($id);

        // Obtener las opciones necesarias para los formularios de categorías, marcas, etc.
        $tags = Tag::all();
        $categories = Category::all();
        $brands = Brand::all();

        // Retornar la vista de edición con los datos del producto y las opciones
        return view('admin.products.edit', compact('product', 'categories', 'brands', 'tags'));
    }

    public function store(Request $request)
    {
        // Crear el producto
        $product = Product::create([
            'name' => $request->name,
            'slug' => $request->slug ?: Str::slug($request->name),
            'extract' => $request->extract,
            'body' => $request->body,
            'category_id' => $request->category_id, // Asumimos que tienes un campo 'category_id'
            'seller_id' => auth()->id(),
            'brand_id' => $request->brand_id,
            'status' => $request->status ?? 2,
            'stock' => $request->stock,
            'is_featured' => $request->is_featured ? true : false,
        ]);

           // Asociar etiquetas
        $tagIds = $request->input('tags', []); // IDs de las etiquetas seleccionadas
        $product->tags()->sync($tagIds);

        // Crear los medios (imágenes, videos, etc.)
        if ($request->has('images')) {
            foreach ($request->media as $media) {
                ProductMedia::create([
                    'product_id' => $product->id,
                    'main_image' => $media, // Asumimos que recibimos las rutas de las imágenes
                ]);
            }
        }

        // Crear el precio del producto
            ProductPrice::create([
                'product_id' => $product->id,
                'price' => $request->price,
                'discount' => $request->discount ?? 0,
              //  'final_price' => $request->price - ($request->price * ($request->discount ?? 0) / 100),
                'price_reciente' => $request->price,
            ]);

        // Registrar una vista inicial
        $ipAddress = $request->ip(); // Dirección IP del cliente
        $userId = auth()->id(); // ID del usuario autenticado, si existe

        $product->views()->create([
            'ip_address' => $ipAddress, // IP del creador o sistema
            'user_id' => $userId,       // Si el creador está autenticado
        ]);

        // Crear las variantes del producto
        if ($request->has('variants')) {
            foreach ($request->variants as $variant) {
                ProductVariant::create([
                    'product_id' => $product->id,
                    'name' => $variant['name'],
                    'value' => $variant['value'],
                    'price' => $variant['price'], // El precio de la variante, si es diferente
                ]);
            }
        }

        // Crear las promociones
        if ($request->has('promotions')) {
            foreach ($request->promotions as $promotion) {
                ProductPromotion::create([
                    'product_id' => $product->id,
                    'discount' => $promotion['discount'],
                    'promotion_code' => $promotion['promotion_code'],
                ]);
            }
        }

        // Crear las revisiones del producto (si es necesario)
        if ($request->has('reviews')) {
            foreach ($request->reviews as $review) {
                ProductReview::create([
                    'product_id' => $product->id,
                    'rating' => $review['rating'],
                    'review' => $review['review'],
                ]);
            }
        }

        // Crear la política de producto (si es necesario)
        if ($request->has('policies')) {
            ProductPolicy::create([
                'product_id' => $product->id,
                'return_policy' => $request->policy['return_policy'],
                'warranty' => $request->policy['warranty'],
            ]);
        }

        // Crear los métodos de pago
        if ($request->has('payment_methods')) {
            foreach ($request->payment_methods as $method) {
                ProductPaymentMethod::create([
                    'product_id' => $product->id,
                    'method' => $method,
                ]);
            }
        }

        // Crear la configuración de envío (si es necesario)
        if ($request->has('shipping')) {
            ProductShipping::create([
                'product_id' => $product->id,
                'shipping_cost' => $request->shipping['cost'],
                'is_free_shipping' => $request->shipping['is_free'],
            ]);
        }

        // Crear el marketing del producto
        if ($request->has('marketing')) {
            ProductMarketing::create([
                'product_id' => $product->id,
                'priority' => $request->marketing['priority'],
                'views' => 0, // Inicialmente sin vistas
            ]);
        }

        return redirect()
        ->route('admin.products.index')
        ->with('success', 'El producto se ha Creado correctamente.');
    }

    /* edit */

    public function update(Request $request, $id)
{
    // Validar los datos del producto
    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'slug' => 'nullable|string|max:255',
        'extract' => 'nullable|string|max:255',
        'body' => 'nullable|string|max:255',
        'category_id' => 'required|exists:categories,id',
        'brand_id' => 'nullable|exists:brands,id',
        'price' => 'required|numeric',
        'stock' => 'required|integer',
      /*   'is_featured' => 'nullable|boolean',
        'media' => 'nullable|array',
        'variants' => 'nullable|array',
        'promotions' => 'nullable|array',
        'reviews' => 'nullable|array',
        'policy' => 'nullable|array',
        'payment_methods' => 'nullable|array',
        'shipping' => 'nullable|array',
        'marketing' => 'nullable|array', */
    ]);

    // Actualizar el producto
    $product = Product::findOrFail($id);

    $product->update([
        'name' => $request->name,
        'slug' => $request->slug ?: Str::slug($request->name),
        'extract' => $request->extract,
        'body' => $request->body,
        'category_id' => $request->category_id,
        'brand_id' => $request->brand_id,
        'status' => $request->status ?? 2,
        'stock' => $request->stock,
        'user_id' => auth()->id(),
       /*  'is_featured' => $request->is_featured ? true : false, */
    ]);

    $product->product_price()->updateOrCreate(
        ['product_id' => $product->id],
        [
            'price' => $request->price,
            'discount' => $request->discount ?? 0,  // Si no se envía descuento, usa 0
            'price_reciente' => $request->price,
        ]
    );

    // Actualizar las URLs de las imágenes existentes
    if ($request->has('urls')) {
        foreach ($request->urls as $index => $url) {
            $image = $product->images()->skip($index)->first(); // Encuentra la imagen actual correspondiente

            if ($image) {
                $image->update([
                    'url' => $url, // Actualiza la URL
                    'is_main' => $request->main_image_id == $image->id, // Verifica si esta es la imagen principal
                ]);
            } else {
                // Si no hay imagen en este índice, significa que es una nueva imagen
                $newImage = $product->images()->create([
                    'url' => $url,
                    'is_main' => $request->main_image_id === 'new' && $index === array_key_last($request->urls), // Si es la última imagen y está marcada como principal
                ]);
            }
        }
    }


      // Actualizar las URLs de las imágenes
   /*    if ($request->has('urls')) {
        foreach ($request->urls as $index => $url) {
            $image = $product->images()->skip($index)->first(); // Encuentra la imagen actual correspondiente

            if ($image) {
                $image->update([
                    'url' => $url, // Actualiza la URL
                    'is_main' => $request->main_image_id == $image->id, // Verifica si esta es la imagen principal
                ]);
            }
        }
    } */

    

    // Actualizar las variantes del producto
    if ($request->has('variants')) {
        foreach ($request->variants as $variant) {
            $product->variants()->updateOrCreate(
                ['product_id' => $product->id, 'name' => $variant['name']],
                ['value' => $variant['value'], 'price' => $variant['price']]
            );
        }
    }

    // Actualizar las promociones
    if ($request->has('promotions')) {
        foreach ($request->promotions as $promotion) {
            $product->promotions()->updateOrCreate(
                ['product_id' => $product->id, 'promotion_code' => $promotion['promotion_code']],
                ['discount' => $promotion['discount']]
            );
        }
    }

    // Actualizar las revisiones del producto
    if ($request->has('reviews')) {
        foreach ($request->reviews as $review) {
            $product->reviews()->updateOrCreate(
                ['product_id' => $product->id, 'rating' => $review['rating']],
                ['review' => $review['review']]
            );
        }
    }

    // Actualizar la política del producto
    if ($request->has('policies')) {
        $product->policies()->updateOrCreate(
            ['product_id' => $product->id],
            ['return_policy' => $request->policy['return_policy'], 'warranty' => $request->policy['warranty']]
        );
    }

    // Actualizar los métodos de pago
    if ($request->has('payment_methods')) {
        foreach ($request->payment_methods as $method) {
            $product->paymentMethods()->updateOrCreate(
                ['product_id' => $product->id, 'method' => $method]
            );
        }
    }

    // Actualizar la configuración de envío
    if ($request->has('shipping')) {
        $product->shipping()->updateOrCreate(
            ['product_id' => $product->id],
            ['shipping_cost' => $request->shipping['cost'], 'is_free_shipping' => $request->shipping['is_free']]
        );
    }

    // Actualizar el marketing
    if ($request->has('marketing')) {
        $product->marketing()->updateOrCreate(
            ['product_id' => $product->id],
            ['priority' => $request->marketing['priority'], 'views' => 0]
        );
    }
    // Limpiar caché relacionada con productos y categorías
    Cache::forget('products_with_relations'); 
    Cache::forget('prodcuts_categorias'); 
    Cache::forget('categories_id_name'); 
    // Redirigir a la vista de productos

    return redirect()
    ->route('admin.products.edit', $product->id)
    ->with('success', 'El producto se ha actualizado correctamente.');
    }

/*     public function destroy(Image $image)
    {
    // Verifica que la imagen pertenece a un producto del usuario autenticado (opcional)
    if (!$image->product || $image->product->user_id !== auth()->id()) {
        abort(403, 'No tienes permiso para eliminar esta imagen.');
    }

    // Elimina la imagen
    $image->delete();

    // Redirige de vuelta a la página de edición con un mensaje de éxito
    return redirect()
        ->back()
        ->with('success', 'La imagen ha sido eliminada correctamente.');
    } */


}
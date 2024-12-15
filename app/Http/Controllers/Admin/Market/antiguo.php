<?php

namespace App\Http\Controllers\Admin\Market;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Home\Product;
use App\Models\Image;
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
         // Cargar productos con enlaces filtrados y ordenarlos por fecha de creación descendente
         $products = Product::with(['links' => function ($query) {
            $query->where('type', 'image'); // Solo un enlace de tipo imagen
        }])
        ->orderBy('created_at', 'desc') // Ordenar por productos más recientes
        ->get();

       /*  $products = Product::with('category')->paginate(10); // Paginación */
        return view('admin.products.index', compact('products'));
    }

    /**
     * Muestra el formulario para crear un nuevo producto.
     */
    public function create()
    {
        $categories = Category::all(); // Para cargar las categorías
        $brands = Brand::all();
        return view('admin.products.create', compact('categories','brands'));
    }

    /**
     * Almacena un nuevo producto en la base de datos.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            /*  'slug' => 'nullable|string|max:255|unique:products,slug',
            'price' => 'required|numeric|min:0',
            'stock' => 'required|integer|min:0',
           'category_id' => 'required|exists:categories,id',
            'image' => 'nullable|image|max:2048', */
        ]);

        $product = Product::create([
            'name' => $request->name,
            'slug' => $request->slug ?: Str::slug($request->name),
            'extract' => $request->extract,
            'body' => $request->body,
            'price' => $request->price,
            'stock' => $request->stock,
            'status' => $request->status,
            'category_id' => $request->category_id,
            'user_id' => auth()->id(),
            'brand_id' => $request->brand_id,
        ]);

        // Limpiar caché relacionada con productos y categorías
        Cache::forget('prodcuts_categorias'); 
        Cache::forget('categories_id_name'); 
        Cache::forget('products_with_relations'); 

        $categories = Category::whereIn('name', ['Motokares', 'Aros', 'Motores'])->pluck('id');
        Cache::forget('products_' . implode('_', $categories->toArray())); // Se usa el array de categorías dinámico


        return redirect()->route('admin.products.index')
            ->with('success', 'Producto creado exitosamente.');
    }

    /**
     * Muestra un producto específico.
     */
    public function show(Product $product)
    {
        return view('admin.products.show', compact('product'));
    }

    /**
     * Muestra el formulario para editar un producto.
     */
    public function edit(Product $product)
    {
        $edit_categories = Category::all();

        $brands = Brand::all();
    
        // Busca los links asociados al producto
        $linkYoutube = $product->links()->where('type', 'youtube')->first();
        $linkImage = $product->links()->where('type', 'image')->first();
    
        // Pasamos las URLs (o null si no existen)
        return view('admin.products.edit', compact('product','brands', 'edit_categories', 'linkYoutube', 'linkImage'));
    }
    

    /**
     * Actualiza un producto en la base de datos.
     */
    public function update(Request $request, Product $product)
    {
        $request->validate([
            'name' => 'required|string|max:255',
         /*    'slug' => 'nullable|string|max:255|unique:products,slug,' . $product->id,
            'price' => 'required|numeric|min:0',
            'stock' => 'required|integer|min:0',
            'category_id' => 'required|exists:categories,id',
            'image' => 'nullable|image|max:2048', */
        ]);

        $product->update([
            'name' => $request->name,
            'slug' => $request->slug ?: Str::slug($request->name),
            'extract' => $request->extract,
            'body' => $request->body,
            'price' => $request->price,
            'stock' => $request->stock,
            'status' => $request->status,
            'category_id' => $request->category_id,
        ]);

         // Maneja los links (mediaLinks)
        $this->updateOrCreateMediaLink($product, 'youtube', $request->link_youtube);
        $this->updateOrCreateMediaLink($product, 'image', $request->link_image);

       // Limpiar caché relacionada con productos y categorías
        Cache::forget('products_with_relations'); 
        Cache::forget('prodcuts_categorias'); 
        Cache::forget('categories_id_name'); 

        return redirect()->route('admin.products.index')
            ->with('success', 'Producto actualizado exitosamente.');
    }

    /**
     * Elimina un producto de la base de datos.
     */ 
    public function destroy(Product $product)
    {
        $product->delete();

         // Limpiar caché usando tags (más eficiente)
        Cache::tags(['products', 'categories', 'brands'])->flush();

        return redirect()->route('admin.market.products.index')
            ->with('success', 'Producto eliminado exitosamente.');
            
    }


        // Función para manejar las relaciones polimórficas
    private function updateOrCreateMediaLink(Product $product, $type, $url)
    {
        if ($url) {
            $product->links()->updateOrCreate(
                ['type' => $type], // Busca por tipo
                ['url' => $url]    // Actualiza o crea el URL
            );
        } else {
            // Si el campo está vacío, elimina el link relacionado
            $product->links()->where('type', $type)->delete();
        }
    }





      // Actualizar imagen si se envía
  /*       if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('products', 'public');
            $product->image()->updateOrCreate(
                ['imageable_id' => $product->id, 'imageable_type' => Product::class],
                ['url' => $imagePath, 'created_by' => auth()->id()]
            );
        } */
}

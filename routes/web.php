<?php

use App\Http\Controllers\Admin\ConfiguracionController;
use App\Http\Controllers\admin\ImagesController;
use App\Http\Controllers\AllHomeContentController;
use App\Http\Controllers\CalculatorController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CoinController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\GoogleAuthController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\FacebookAuthController;
use App\Http\Controllers\Home\AboutUsHomeController;
use App\Http\Controllers\Home\BancoHomeController;
use App\Http\Controllers\Home\BlogsController;
use App\Http\Controllers\Home\CategoryHomeController;
use App\Http\Controllers\Home\HelpHomeController;
use App\Http\Controllers\Home\ProductController;
use App\Http\Middleware\CacheMiddleware;
use WireUi\Support\Facades\WireUi;
// Definir rutas explícitas para index y show
Route::get('marketplace/products', [ProductController::class, 'index'])->name('markets.products.index');
Route::get('marketplace/products/{slug}', [ProductController::class, 'show'])->name('markets.products.show');

// Asegúrate de que la ruta tenga la URL correcta (y usa "categories" en lugar de "categorias")
Route::get('markets/categories/{categories}', [ProductController::class, 'categorieshow'])->name('markets.categories.show');

Route::post('/payment/notification', [CoinController::class, 'paymentNotification'])->name('paymentNotification');
Route::post('/image/upload', [ImagesController::class, 'upload'])->name('image.upload');
Route::get('blogs', [BlogsController::class, 'index'])->name('home.blogs.indexblog');
Route::get('blog/{slug}', [BlogsController::class, 'show'])->name('home.blogs.show');
Route::get('about', [AboutUsHomeController::class, 'index'])->name('home.about.indexaboutus');
Route::get('help', [HelpHomeController::class, 'index'])->name('home.help.indexhelp');
Route::get('/', [AllHomeContentController::class, 'all_bd_index'])->name('posts.index');
/* AUTENTICADOR GOOGLE login*/
Route::get('auth/google', [GoogleAuthController::class, 'redirect'])->name('google-auth');
Route::get('auth/google/call-back', [GoogleAuthController::class, 'callbackGoogle']);
/* AUTENTICADOR FACEBOOK */
Route::get('auth/facebook', [FacebookAuthController::class, 'redirect'])->name('facebook-auth');
Route::get('auth/facebook/call-back', [FacebookAuthController::class, 'callbackFacebook']);
//carrito de comprar vista 
 Route::Post('/agregarItem', [CartController::class, 'agregarItem'])->name('agregaritem'); 
 Route::get('/vercarrito', [CartController::class, 'verCarrito'])->name('vercarrito'); 
 Route::get('/incrementar/{id}', [CartController::class, 'incrementarCantidad'])->name('incrementarcantidad'); 
 Route::get('/decrementar/{id}', [CartController::class, 'decrementarCantidad'])->name('decrementarcantidad');
 Route::get('/eliminar/{id}', [CartController::class, 'eliminarProducto'])->name('eliminarproducto');
 Route::get('/eliminarcarrito', [CartController::class, 'eliminarCarrito'])->name('eliminarcarrito');  
 Route::get('/comfirmarcarrito', [CartController::class, 'comfirmarCarrito'])->name('comfirmarcarrito');  
/* ORDEN PEDIDOS */
 Route::get('/checkout', [CartController::class, 'checkout'])->name('checkout');  
 Route::post('/CrearOrden', [CartController::class, 'CrearOrden'])->name('CrearOrden');  
 /* Blog */
Route::get('/Blog', [BlogsController::class, 'index'])->name('home.Blogs.index');  
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
Route::get('/terms', [AllHomeContentController::class, 'terms'])->name('terms');  
Route::get('/Contactar', [AllHomeContentController::class, 'user_contact'])->name('user_contact');  



/*
 Route::get('banco', [BancoHomeController::class, 'index'])->name('home.banco.indexbanco');
  Route::get('category', [CategoryHomeController::class, 'index'])->name('home.category.index');
Route::get('category/{category}', [CategoryHomeController::class, 'show'])->name('home.category.show'); 
Route::get('categoria/{category}', [PostController::class, 'category'])->name('posts.category');
Route::get('category/{category}', [PostController::class, 'category'])->name('posts.category');
Route::get('tag{tag}', [PostController::class, 'tag'])->name('posts.tag');
Route::get('posts/{post}', [PostController::class, 'show'])->name('posts.show');
//COMMENTARIOS  
Route::get('/viewcomment', [CommentController::class, 'viewComment'])->name('viewcomment'); 
Route::get('/viewcommentpost/{id}', [CommentController::class, 'viewCommentPost'])->name('viewcommentpost'); 
Route::post('/agregarmensaje/{post}', [CommentController::class, 'agregarMensaje'])->name('agregarmensaje');
->middleware('log.device.info', CacheMiddleware::class.':300') 
Route::get('/', [PostController::class, 'index'])->name('posts.index');
*/
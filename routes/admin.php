<?php

use App\Http\Controllers\Admin\BanController;
use App\Http\Controllers\Admin\BlockedFollowController;
use App\Http\Controllers\Admin\BlogMetaController;
use App\Http\Controllers\Admin\BrandController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\CoinConfigController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\DatabaseController;
use App\Http\Controllers\Admin\DeviceInfoController;
use App\Http\Controllers\Admin\DevToolsController;
use App\Http\Controllers\Admin\FavoriteController;
use App\Http\Controllers\admin\FooterController;
use App\Http\Controllers\Admin\IconController;
use App\Http\Controllers\Admin\ImagesController;
use App\Http\Controllers\Admin\ImpersonateController;
use App\Http\Controllers\Admin\MensajesController;
use App\Http\Controllers\admin\NavbarConfigController;
use App\Http\Controllers\Admin\PedidoController;
use App\Http\Controllers\Admin\PostYoutubeController;
use App\Http\Controllers\Admin\ProviderController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\SaleController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\ReportController;
use App\Http\Controllers\Admin\CalculatorController;
use App\Http\Controllers\CoinController;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\Admin\HomeBanerController;
use App\Http\Controllers\Admin\HomeContactController;
use App\Http\Controllers\Admin\HomeContactDetailsController;
use App\Http\Controllers\Admin\LoanDetailsController;
use App\Http\Controllers\Admin\LoansController;
use App\Http\Controllers\Admin\MapsController;
use App\Http\Controllers\Admin\PlacesController;
use App\Http\Controllers\Payments\MercadoPagoController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\Admin\RuleController;
use App\Http\Controllers\SharedController;
use App\Http\Controllers\Admin\TermController;
use Chatify\ChatifyMessenger;
use App\Http\Controllers\HomeHelpController;
use App\Http\Controllers\Admin\AboutUsHomeController;
use App\Http\Controllers\Admin\EnvConfigController;
use App\Http\Controllers\Admin\FuntWallet\PackageCoinController;
use App\Http\Controllers\Admin\Home\BlogsController;
use App\Http\Controllers\Admin\Home\MembershipController;
use App\Http\Controllers\Admin\Market\ProductController;
use App\Http\Controllers\Admin\NotificationController;
use App\Http\Controllers\Admin\OrderCoinController;
use App\Http\Controllers\Admin\Rutas\PermissionController;
use App\Http\Controllers\Admin\User\VerifyController;
use App\Http\Controllers\Admin\UserController;

Route::resource('products', ProductController::class)->names('admin.products');
Route::resource('order_coins', OrderCoinController::class)->names('admin.order_coins');
Route::resource('coins', CoinConfigController::class)->names('admin.coins');
Route::get('buyCoins', [CoinController::class, 'showBuyCoinsForm'])->name('admin.buyCoins.index');
Route::get('confirmarPackage', [CoinController::class, 'confirmarPackage'])->name('admin.buyCoins.confirmar_package');
Route::post('processPayment', [CoinController::class, 'processPayment'])->name('processPayment');
Route::resource('packageCoins', PackageCoinController::class)->names('admin.funt_wallet.package_coins');
Route::resource('users', UserController::class)->only('index', 'edit', 'update', 'show')->names('admin.users');
/* IMPERSONATE CAMBIAR DE USUARIO SIENDO ADMIN */
Route::post('impersonate/{user}/start', [ImpersonateController::class, 'start'])->name('impersonate.start');
Route::get('impersonate/stop', [ImpersonateController::class, 'stop'])->name('impersonate.stop');
Route::resource('subscription', MembershipController::class)->names('admin.home.subscription');
Route::post('/notifications/mark-as-read/{id}', [NotificationController::class, 'markAsRead'])->name('notifications.markAsRead');

Route::get('/', [HomeController::class, 'index'])->middleware(['can:admin.home'
/* ,'auth:sanctum', 
config('jetstream.auth_session'),
'verified' */
])->name('admin.index');

/* config home */
Route::resource('about_us_homes', AboutUsHomeController::class)->names('admin.about_us_homes');
Route::resource('home_helps', HomeHelpController::class)->names('admin.home_helps');
Route::resource('permissions', PermissionController::class)->names('admin.permissions');
Route::resource('roles', RoleController::class)->names('admin.roles');
Route::resource('postyoutube', PostYoutubeController::class)->names('admin.postyoutubes');
Route::resource('sales', SaleController::class)->names('admin.sales');
Route::resource('pedidos', PedidoController::class)->names('admin.pedidos');
Route::resource('providers', ProviderController::class)->names('admin.providers');
Route::resource('brands', BrandController::class)->names('admin.brands');
Route::resource('dashboards', DashboardController::class)->names('admin.dashboards');
Route::resource('navbars', NavbarConfigController::class)->names('admin.navbars');
Route::resource('sliders', SliderController::class)->names('admin.sliders');
Route::resource('footers', FooterController::class)->names('admin.footers');
/* mercado pago checks*/
Route::get('MercadoPago/success', [MercadoPagoController::class, 'success'])->name('admin.MercadoPago.success');
Route::get('MercadoPago/failure', [MercadoPagoController::class, 'failure'])->name('admin.MercadoPago.failure');
Route::get('MercadoPago/pending', [MercadoPagoController::class, 'pending'])->name('admin.MercadoPago.pending');

/* ICONOES  */
Route::get('/icons', [IconController::class, 'index'])->name('admin.icons.index');
Route::resource('imagenes', ImagesController::class)->names('admin.images');


Route::resource('bans', BanController::class)->names('admin.bans');
Route::put('desbaneo/{id}', [BanController::class, 'desbaneo'])->name('admin.bans.desbaneo');
Route::resource('Database', DatabaseController::class)->names('admin.database');
Route::resource('envconfig', EnvConfigController::class)->names('admin.envconfig');
 
/* dev tools */
Route::resource('DevTools', DevToolsController::class)->names('admin.DevTools');

/* rasterar usuario middwolrd */
Route::resource('DeviceInfos', DeviceInfoController::class)->names('admin.deviceInfos');


/* favoritos rutas */
Route::resource('Favorites', FavoriteController::class)->names('admin.favorites');

/* favoritos rutas defino mis rutas */
Route::resource('reviews', ReviewController::class)->parameters(['reviews' => 'product_id'])->names('admin.reviews');
/* Route::get('reviews/create/{post}', [ReviewController::class, 'create'])->name('admin.reviews.create');
 */


/* BLOQUEO FOLOWERS USER */
Route::resource('BlockedFollow', BlockedFollowController::class)->names('admin.Blocked_follows');

/* Historial USER */
Route::resource('Historial', HistoryController::class)->names('admin.histories');

/* reportes o ayudas FOLOWERS USER admin.reports.create*/

Route::resource('Report', ReportController::class)->names('admin.reports');

/* reportes o ayudas FOLOWERS USER admin.reports.create*/
Route::resource('HomeBaners', HomeBanerController::class)->names('admin.HomeBaners');
/* CaALCULADORA */
Route::resource('Calculator', CalculatorController::class)->names('admin.Calculators');
/* COMPARTIDOS CON LA URL  */
Route::resource('Shared', SharedController::class)->names('admin.shareds');
/* Terminos y condiciones   */
Route::resource('Term', TermController::class)->names('admin.terms');

/* Terminos y condiciones   */
Route::resource('Rules', RuleController::class)->names('admin.Rules');

/* Terminos y condiciones   */ 
Route::resource('Loans', LoansController::class)->names('admin.Loans');
Route::resource('LoanDetails', LoanDetailsController::class)->names('admin.LoanDetails');

/* Blogs para comunicar a los usuarios    */
Route::resource('blogs', BlogsController::class)->names('admin.blogs');
Route::resource('blogMeta', BlogMetaController::class)->names('admin.BlogMeta');

Route::resource('verifies', VerifyController::class)->names('admin.verifies');
/* HomeContact vista formulario    */
Route::resource('HomeContact', HomeContactController::class)->names('admin.home_contact');
Route::resource('HomeContactDetails', HomeContactDetailsController::class)->names('admin.HomeContactDetails');

/* HomeContact vista formulario    */
Route::resource('maps', MapsController::class)->names('admin.maps');
Route::resource('Places', PlacesController::class)->names('admin.Places');

/* falta */
Route::resource('Notifications', NotificationController::class)->names('admin.notifications');
/* Muesta de route  */
/* Route::prefix('admin')->name('admin.')->group(function () {
    Route::resource('about_us_homes', AboutUsHomeController::class);
}); */
/* Mensajes */
Route::resource('messages', MensajesController::class)->names('admin.messages');
Route::get('mensajes', [MensajesController::class, 'listarMensajes'])->name('admin.mensajes.listar');
Route::get('mensajes/{id}', [MensajesController::class, 'verMensaje'])->name('admin.mensajes.ver');

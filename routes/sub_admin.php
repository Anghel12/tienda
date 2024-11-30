<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\CommentsAllController;
use App\Http\Controllers\Admin\ContentController;
use App\Http\Controllers\Admin\Dashboard\CRMController;
use App\Http\Controllers\Admin\Dashboard\ECommerceController;
use App\Http\Controllers\Admin\Dashboard\ProjectManagerController;
use App\Http\Controllers\Admin\Dashboard\SocialFeedController;
use App\Http\Controllers\Admin\FollowController;
use App\Http\Controllers\Admin\Home\AboutController;
use App\Http\Controllers\Admin\Home\HelpController;
use App\Http\Controllers\Admin\Home\MeetUsController;
use App\Http\Controllers\Admin\Home\MembershipController;
use App\Http\Controllers\Admin\Home\PackageController;
use App\Http\Controllers\Admin\Home\ServiceController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\PaymentMethodsController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\ReferralController;
use App\Http\Controllers\admin\subCategoryController;
use App\Http\Controllers\Admin\TagController;
use App\Http\Controllers\Admin\TransactionsController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\WalletController;
use Illuminate\Support\Facades\Route;


Route::resource('Comments', CommentsAllController::class)->names('admin.CommentsAll');
Route::resource('sub_categories', subCategoryController::class)->names('admin.sub_categories');
Route::resource('tags', TagController::class)->except('show')->names('admin.tags');
Route::resource('posts', PostController::class)->except('show')->names('admin.posts');
Route::resource('orders', OrderController::class)->only('index', 'edit', 'update', 'show')->names('admin.orders');
Route::get('/user_order', [ReferralController::class, 'UserOrder'])->name('admin.orders.user_order');
Route::resource('wallet', WalletController::class)->names('admin.wallet'); 
Route::resource('categories', CategoryController::class)->except('show')->names('admin.categories');
Route::resource('AllTransacciones', TransactionsController::class)->names('admin.transactions');
Route::resource('PaymentMethods', PaymentMethodsController::class)->names('admin.PaymentMethods');
/* FOLOWERS USER */
Route::resource('follows', FollowController::class)->names('admin.follows');
Route::post('/users/{user}/follow', [FollowController::class, 'follow'])->name('admin.users.follow');
Route::delete('/users/{user}/unfollow', [FollowController::class, 'unfollow'])->name('admin.users.unfollow');
/* home config */
Route::resource('content', ContentController::class)->names('admin.content');
Route::resource('services', ServiceController::class)->names('admin.home.services');
Route::resource('packages', PackageController::class)->names('admin.home.packages');
Route::resource('about', AboutController::class)->names('admin.home.abouts');
Route::resource('helps', HelpController::class)->names('admin.home.helps');
Route::resource('memberships', MembershipController::class)->names('admin.home.memberships');
/* Route::resource('meet_us', MeetUsController::class)->names('admin.home.meet_us'); cambie el nombre la ruta porque laravel hacia esto meet_u */
Route::resource('meet_us', MeetUsController::class)->names('admin.home.meet_us')
->parameters(['meet_us' => 'meetUs']);
/* Dashboard */
Route::resource('ecommerce', ECommerceController::class)->names('admin.dashboard.e_commerces');
Route::resource('project_manager', ProjectManagerController::class)->names('admin.dashboard.project_manager');
Route::resource('crm', CRMController::class)->names('admin.dashboard.crm');
Route::resource('social_feed', SocialFeedController::class)->names('admin.dashboard.social_feed');


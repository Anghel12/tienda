<?php

use App\Http\Controllers\Admin\FollowController;
use App\Http\Controllers\Admin\NotificationController;
use App\Http\Controllers\Admin\PaymentController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\ReferralController;
use App\Http\Controllers\Admin\User\VerifyController;
use App\Http\Controllers\Home\ProductController;
use App\Http\Controllers\UserActions\BuyCoinsController;
use App\Http\Controllers\UserActions\HistoryTransaccionController;
use App\Http\Controllers\UserActions\HistoryUserController;
use App\Http\Controllers\UserActions\OrderVoucherController;
use App\Http\Controllers\UserActions\TransferCoinController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserActions\WalletController as UserActionsWalletController;


Route::resource('OrderVoucher', OrderVoucherController::class)->names('user_actions.order_vouchers');

Route::resource('Histories', HistoryUserController::class)->names('user_actions.histories');

/* Metodos de pago vistas al pagar  */
Route::get('/payment/voucher', [PaymentController::class, 'showVoucherPage'])->name('payment_methods.voucher');
Route::post('/payment/voucher/complete', [PaymentController::class, 'completeVoucherPayment'])->name('payment_methods.voucher.complete');
Route::get('/payment/stripe', [PaymentController::class, 'showStripePage'])->name('payment_methods.stripe');
Route::get('/payment/paypal', [PaymentController::class, 'showPaypalPage'])->name('payment_methods.paypal');
Route::get('/payment/visa', [PaymentController::class, 'showVisaPage'])->name('payment_methods.visa');

/* acciones de coins */
Route::post('/purchase-coins', [PaymentController::class, 'purchaseCoins'])->name('purchase.coins');
Route::resource('WalletShow', UserActionsWalletController::class)->names('user_actions.wallets');
Route::get('transferCoin', [TransferCoinController::class, 'index'])->name('user_actions.transfer_coins.index');
Route::post('transferCoin', [TransferCoinController::class, 'completeTransfer'])->name('user_actions.transfer.complete');
Route::post('/wallet/transfer/preview', [TransferCoinController::class, 'show'])->name('user_actions.transfer_coins.show');
Route::resource('fastbuycoins', BuyCoinsController::class)->names('user_actions.buy_coins');
Route::resource('User/Transaccions', HistoryTransaccionController::class)->names('user_actions.history_transaccions');

/* FOLOWERS USER */
Route::resource('follows', FollowController::class)->names('admin.follows');
Route::post('/users/{user}/follow', [FollowController::class, 'follow'])->name('admin.users.follow');
Route::delete('/users/{user}/unfollow', [FollowController::class, 'unfollow'])->name('admin.users.unfollow');
/* Route::get('/admin/referrals', [ReferralController::class, 'index'])->name('admin.referrals.index');
 */
Route::get('/referrals', [ReferralController::class, 'referral'])->name('admin.referrals.index');
/* rasterar usuario middwolrd */
Route::resource('Notifications', NotificationController::class)->names('admin.Notifications');
Route::resource('verify_profiles', VerifyController::class)->names('user_actions.verify_profiles');

/* perfil del usuario */
Route::resource('profile', ProfileController::class)->names('admin.profile');

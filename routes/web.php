<?php

use App\Http\Controllers\PaymentController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome')->name('home');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::view('dashboard', 'dashboard')->name('dashboard');
});

require __DIR__.'/settings.php';

Route::middleware(['auth'])->group(function () {
    // Ruta que inicia el pago
    Route::get('/checkout-session', [PaymentController::class, 'checkout'])->name('checkout.session');

    // Rutas de retorno
    Route::get('/payment-success', function () {
        return view('dashboard')->with('success', '¡Pago realizado con éxito!');
    })->name('payment.success');

    Route::get('/payment-cancel', function () {
        return view('dashboard')->with('error', 'El pago fue cancelado.');
    })->name('payment.cancel');
});

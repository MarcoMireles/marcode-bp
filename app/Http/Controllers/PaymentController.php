<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function checkout(Request $request)
    {
        // En un caso real, aquí recibirías el ID del producto o precio.
        // Por ahora, usaremos un pago único de prueba.

        return $request->user()->checkoutCharge(2000, 'Producto de Prueba', 1, [
            'success_url' => route('payment.success'),
            'cancel_url' => route('payment.cancel'),
        ]);
    }
}

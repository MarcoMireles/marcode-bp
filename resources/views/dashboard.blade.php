<x-layouts::app :title="__('Dashboard')">
    <div class="p-6">
        <h2 class="text-lg font-bold">Plan Pro</h2>
        <p>Accede a funciones exclusivas por solo $20.00</p>

        <a href="{{ route('checkout.session') }}"
            class="mt-4 inline-flex items-center px-4 py-2 bg-indigo-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-indigo-700">
            Pagar con Stripe Checkout
        </a>
    </div>
</x-layouts::app>

<x-app-layout>

</x-app-layout>

{{-- FORMULARIO DE COMPRA --}}

<div class="container ">
    <div class="row justify-content-center align-items-center" style="height: 100%; padding-top: 5rem;">

        <!-- Formulario a la derecha (12 columnas en móviles, 5 columnas en pantallas grandes) -->
        <div class="col-lg-5 col-12">
            {{-- alerta --}}
            @if (session('error'))
            <div class="alert alert-danger" role="alert">
                <strong>{{ session('error') }}</strong>
            </div>
            @endif

            @if (session('success'))
            <div class="alert alert-success" role="alert">
                <strong>DEPOSITO EXITOSO {{ $userBalance }}!</strong>
                <a href="">
                    <- Ver transacción ->
                </a>
            </div>
            @endif

            <div class="card z-index-2 border-radius-xl py-3 blur shadow-blur">
                <form class="form" action="{{ route('purchase.coins') }}" method="POST" id="payment-form">
                    @csrf
                    <div class="text-center card-header">
                        <h2>Depositar a mi Cuenta:</h2>
                    </div>
                
                    <!-- Email -->
                    <div class="card-body">
                    <label for="payment-method">Usuario:</label>
                    <div class="row mb-3">
                        <div class="col-12">
                            <div class="form-group">
                                <input type="email" name="email" class="form-control form-control-alternative"
                                    id="email" value="{{ Auth::user()->email }}">
                            </div>
                        </div>
                    </div>

                    <!-- Nombre -->
                    <div class="row mb-3">
                        <div class="col-12">
                            <div class="form-group">
                                <input type="text" name="name" class="form-control form-control-alternative" id="name"
                                    value="{{ Auth::user()->name }}">
                            </div>
                        </div>
                    </div>

                    <!-- Cantidad de monedas y nombre de la moneda -->
                    <div class="row mb-3">
                        <div class="col-lg-4 col-12">
                            <label for="coin_id">Moneda:</label>
                            <select name="coin_id" id="coin_id" class="form-control">
                                <option value="1">Terra</option>
                                <option value="2">USD</option>
                                <option value="3">SOL</option>
                                <option value="4">USDT</option>
                                <!-- Agrega más opciones según los métodos de pago habilitados en tu cuenta de Stripe -->
                            </select>
                        </div>
                        <div class="col-lg-8 col-12">
                            <label for="payment-method">Cantidad de Monedas:</label>
                            <div class="form-group has-success">
                                <input type="number" name="amount"
                                    class="form-control form-control-alternative is-valid" value="100" />
                            </div>
                        </div>
                    </div>


                    <!-- Selector de método de pago -->
                    <div class="form-group mb-3">
                        <label for="payment-method">Método de pago:</label>
                        <select name="payment_method" id="payment-method" class="form-control">
                            <option value="voucher">Comprobante de pago</option>
                            <option value="visa">VISA</option>
                            <option value="paypal">PAYPAL</option>
                            <option value="stripe">STRIPE</option>
                            <!-- Agrega más opciones según los métodos de pago habilitados en tu cuenta de Stripe -->
                        </select>
                    </div>

                    {{--
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <!-- Stripe Elements para el método de pago -->
                                <div class="form-control form-control-alternative" id="card-element"></div>
                                <div id="card-errors" role="alert"></div>
                            </div>
                        </div>
                    </div> --}}

                        <button type="submit" class="btn bg-info  col-12">CONTINUAR</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

{{-- alert --}}
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


<script src="https://js.stripe.com/v3/"></script>
<script>
    var stripe = Stripe('{{ env('STRIPE_KEY') }}');
    var elements = stripe.elements();

    // Crear un elemento de tarjeta
    var card = elements.create('card');
    card.mount('#card-element');

    // Manejar los errores
    card.on('change', function(event) {
        var displayError = document.getElementById('card-errors');
        if (event.error) {
            displayError.textContent = event.error.message;
        } else {
            displayError.textContent = '';
        }
    });

    // Manejar el envío del formulario
    var form = document.getElementById('payment-form');
    form.addEventListener('submit', function(event) {
        event.preventDefault();

        stripe.createToken(card).then(function(result) {
            if (result.error) {
                // Informar de un error
                var errorElement = document.getElementById('card-errors');
                errorElement.textContent = result.error.message;
            } else {

                console.log("Token creado:", result.token); // Verifica que se crea el token

                // Enviar el token al servidor
                var hiddenInput = document.createElement('input');
                hiddenInput.setAttribute('type', 'hidden');
                hiddenInput.setAttribute('name', 'stripeToken');
                hiddenInput.setAttribute('value', result.token.id);
                form.appendChild(hiddenInput);

                // Enviar el formulario
                console.log("Enviando el formulario"); // Verifica que el formulario se está enviando
                form.submit();
            }
        });
    });
</script>


<style>
    .background-image {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
        z-index: -1;
    }

    .form-container {
        background-color: rgba(255, 255, 255, 0.8);
        /* Fondo blanco semi-transparente */
        border-radius: 15px;
        padding: 20px;
    }
</style>
<x-app-layout>

</x-app-layout>


<img class="background-image"
  src="https://img.freepik.com/fotos-premium/fondo-azul-fondo-azul_608068-13038.jpg" alt="Fondo">

{{-- FORMULARIO DE COMPRA --}}

<div class="container ">
    <div class="row justify-content-center align-items-center" style="height: 100%; padding-top: 2rem;">

        <!-- Texto a la izquierda (12 columnas en móviles, 7 columnas en pantallas grandes) -->
        <div class="col-lg-7 col-12 text-center text-lg-start mb-3 mb-lg-0">
            <h1 class="text-white pt-3 mt-n5">{{$coin->name}}: La Moneda del Futuro <br>
                que Está Revolucionando el Mercado</h1>
            {{-- <p class="lead text-white mt-3">
                Únete a los +1000 de usuarios <br>
                que ya están aprovechando las ventajas de {{$coin->name}}. <br>
                Transacciones rápidas, seguras y con bajas comisiones. <br>
                No te quedes atrás <br>
                forma parte de la próxima gran revolución financiera.
            </p> --}}
        </div>

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
                <strong>DEPOSITO EXITOSO {{ $userBalance }} {{ $coin->name }}!</strong>
                <a href="">
                    <- Ver transacción ->
                </a>
            </div>
            @endif

            <div class="form-container z-index-2 border-radius-xl py-3 blur shadow-blur">
                <form action="{{ route('purchase.coins') }}" method="POST" id="payment-form">
                    @csrf
                    <div class="text-center">
                        <h1>Depositar a mi Cuenta:</h1>
                    </div>
                    <label for="payment-method">Usuario:</label>
                    <!-- Email -->
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <input type="email" name="email" class="form-control form-control-alternative"
                                    id="email" value="{{ Auth::user()->email }}">
                            </div>
                        </div>
                    </div>

                    <!-- Nombre -->
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <input type="text" name="name" class="form-control form-control-alternative" id="name"
                                    value="{{ Auth::user()->name }}">
                            </div>
                        </div>
                    </div>

                    <!-- Cantidad de monedas y nombre de la moneda -->
                    <div class="row">
                        <div class="col-lg-4 col-12">
                            <label for="coin_id">Moneda:</label>
                            <select name="coin_id" id="coin_id" class="form-control">
                                <option value="{{ $coin->id }}">{{ $coin->name }}</option>
                                <option value="{{ $coin->id }}">USD</option>
                                <option value="{{ $coin->id }}">SOL</option>
                                <option value="{{ $coin->id }}">USDT</option>
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
                    <div class="form-group">
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



                    <div class="row">

                        <button type="submit" class="btn bg-gradient-info  col-12">CONTINUAR</button>
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
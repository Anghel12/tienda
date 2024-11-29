<x-app-layout>

</x-app-layout>

 
<img class="background-image"
  src="https://img.freepik.com/fotos-premium/fondo-azul-fondo-azul_608068-13038.jpg" alt="Fondo">
    {{-- FORMULARIO DE COMPRA --}}

    <div class="container ">
        <div class="row justify-content-center align-items-center" style="height: 100vh; padding-top: 7rem;">
            

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
                    <a href=""> <- Ver transacción -> </a>
                </div>
                @endif
    
                <div class="form-container z-index-2 border-radius-xl py-3 blur shadow-blur">

                    {!! Form::open(['route' => 'payment_methods.voucher.complete', 'autocomplete' => 'off', 'files' => true]) !!}
                    
                  {{--   <form action="{{ route('payment_methods.voucher.complete') }}" method="POST" enctype="multipart/form-data"> --}}
                        @csrf
                        <input type="hidden" name="amount" value="{{ $amount }}">
                        <input type="hidden" name="coin_id" value="1">
                        <input type="hidden" name="email" value="{{ $email }}">
                        <input type="hidden" name="ip_address" value="{{ $ip_address }}">
                        
                        <div class="text-center">
                            <h1>Deposito Exitoso</h1>
                        </div>

    
                        <!-- Cantidad de monedas y nombre de la moneda -->
                        <div class="row">


                            <label for="payment-method">Cantidad de Monedas:</label>
 

                            <div class="col-lg-12 col-12">
                                <div class="form-group has-success">
                                    <input type="hidden" name="coin_id" value="1" readonly/>
                                    <input type="number" name="amount" class="form-control form-control-alternative" value="{{ $amount }}" readonly/>
                                </div>
                            </div>
    
                        
                        </div>

                                <div class="row">
                                    <label for="voucher_images">Subir Comprobante de Pago (imágenes):</label>
                                    
                                    <div class="col-lg-12 col-12">
                                        <div class="form-group has-success">
                                            <input type="file" name="voucher_images[]" class="form-control" multiple accept="image/*">
                                            <small class="form-text text-muted">Puedes subir una o varias imágenes.</small>
                                        </div>
                                    </div>
                                </div>




                        <button type="submit" class="btn bg-gradient-info col-12">CONTINUAR</button>
                        {!! Form::close() !!}
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
        background-color: rgba(255, 255, 255, 0.8); /* Fondo blanco semi-transparente */
        border-radius: 15px;
        padding: 20px;
    }
</style>
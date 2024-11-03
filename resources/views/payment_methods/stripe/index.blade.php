<x-app-layout>

</x-app-layout>

 
  <img class="background-image" src="https://demos.creative-tim.com/soft-ui-design-system-pro/assets/img/curved-images/curved14.jpg" alt="Fondo">

   
  <div class="container ">
    <div class="row justify-content-center align-items-center" style="height: 100vh; padding-top: 7rem;">
        
        <!-- Texto a la izquierda (12 columnas en móviles, 7 columnas en pantallas grandes) -->
        <div class="col-lg-7 col-12 text-center text-lg-start mb-3 mb-lg-0">
            <h1 class="text-white pt-3 mt-n5">PAGINA EN MATENIMIENTO 404</h1>
          {{--   <p class="lead text-white mt-3"> 
                Únete a los +1000 de usuarios <br>
                que ya están aprovechando las ventajas de {{$coin->name}}. <br>
                Transacciones rápidas, seguras y con bajas comisiones. <br>
                No te quedes atrás <br>
                forma parte de la próxima gran revolución financiera.
            </p> --}}
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
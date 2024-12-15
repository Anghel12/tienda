<x-app-layout>

</x-app-layout>


<div class="container ">
    <div class="row justify-content-center align-items-center" style="height: 100%; padding-top: 2rem;">

        <!-- Formulario a la derecha (12 columnas en móviles, 5 columnas en pantallas grandes) -->
        <div class="col-lg-12 col-12">
            {{-- alerta --}}
            @if (session('error'))
            <div class="alert alert-danger" role="alert">
                <strong>{{ session('error') }}</strong>
            </div>
            @endif

        </div>

        <div class="card col-md-12">
            <!-- START Blogs w/ 3 rows w/ image on left & title, text, author on end-->
<section class="py-5">
    <div class="container">
      <div class="row">
        <h2>Historial</h2>
        <div class="col-md-10 ms-auto me-auto">
          <div class="card card-plain card-blog mt-5">
            <h3>Orden</h3>
            <div class="row">
              <div class="col-md-4">
                <div class="card-image position-relative border-radius-lg">
                  <div class="blur-shadow-image">
                    <img style="height: 100px; "  class="img border-radius-lg" src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/assets/img/color-cart.jpg">
                  </div>
                </div>
              </div>
              <div class="col-md-7 my-auto ms-md-3 mt-md-auto mt-4">
                <h3>
                  <a href="javascript:;" class="text-dark font-weight-normal">Miami raised $65 million for pet sitting</a>
                </h3>
                <p>
                  Finding temporary housing for your dog should be as easy as renting an Airbnb. That’s the idea behind Rover, which raised $65 million to expand its pet sitting and dog-walking businesses.. <a href="javascript:;" class="text-dark"> Read More </a>
                </p>
                        <div class="author">
                           <img src="../../assets/img/team-1.jpg" alt="..." class="avatar avatar-sm shadow me-2">
                           <p class="my-auto">Katie Roof</p>
                        </div>
              </div>
            </div>
          </div>
  
          <div class="card card-plain card-blog mt-5">
            <h3>Transacciones</h3>
            <div class="row">
              <div class="col-md-4">
                <div class="card-image position-relative border-radius-lg">
                  <div class="blur-shadow-image">
                    <img style="height: 100px; "  src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/assets/img/color-flower.jpg">
                  </div>
                </div>
              </div>
              <div class="col-md-7 my-auto ms-md-3 mt-md-auto mt-4">
                <h3>
                  <a href="javascript:;" class="text-dark font-weight-normal">MateLabs mixes machine learning</a>
                </h3>
                <p>
                  If you’ve ever wanted to train a machine learning model and integrate it with IFTTT, a new offering from MateLabs. MateVerse, a platform where novices can spin out machine... <a href="javascript:;" class="text-dark"> Read More </a>
                </p>
                <div class="author">
                  <img style="height: 100px; "  src="../../assets/img/team-3.jpg" alt="..." class="avatar avatar-sm shadow me-2">
                 <p class="my-auto">John Mannes</p>
                </div>
              </div>
            </div>
          </div>
  
          <div class="card card-plain card-blog mt-5">
            <h3>Compras</h3>
            <div class="row">
              <div class="col-md-4">
                <div class="card-image position-relative border-radius-lg">
                  <div class="blur-shadow-image">
                    <img style="height: 100px; "  src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/assets/img/color-stair.jpg">
                  </div>
                </div>
              </div>
              <div class="col-md-7 my-auto ms-md-3 mt-md-auto mt-4">
                <h3>
                    <a href="javascript:;" class="text-dark font-weight-normal">US venture investment ticks up</a>
                </h3>
                <p>
                    Venture investment in U.S. startups rose sequentially in the second quarter of 2017, boosted by large, late-stage financings and a few outsized early-stage rounds in tech and healthcare.. <a href="javascript:;" class="text-dark"> Read More </a>
                </p>
                <div class="author">
                  <img style="height: 100px; "  src="../../assets/img/team-4.jpg" alt="..." class="avatar avatar-sm shadow me-2">
                   <p class="my-auto">Devin Coldewey</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- END Blogs w/ 3 rows w/ image on left & title, text, author on end-->
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
        position: fixed;
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
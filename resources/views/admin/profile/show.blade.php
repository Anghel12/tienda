<x-app-layout>

</x-app-layout>
<img class="background-image"
  src="https://img.freepik.com/fotos-premium/fondo-azul-fondo-azul_608068-13038.jpg" alt="Fondo">

{{-- FORMULARIO DE COMPRA --}}

<div class="container ">
  <div class="row justify-content-center align-items-center" style="height: 100vh; padding-top: 7rem;">
    <section class="py-5">
      <div class="container">
  
      <div class="row">

        <div class="card col-12 col-md-6 mx-auto mb-2">
          <div class="row py-lg-5 py-3">
            <div class="col-lg-3 col-md-5 position-relative">
              <img class="img rounded-circle max-width-200 w-100 position-relative z-index-2"
              src="{{ $user->profile_photo_url }}" alt="{{ $user->name }}" alt="bruce">
           
            </div>
            
            <div class="col-lg-7 col-md-7 z-index-2 position-relative px-md-2 px-sm-5 mt-sm-0 mt-4">
              <div class="d-flex justify-content-between align-items-center mb-2">
                <h4 class="mb-0">{{ $user->name }}
                  </h4>
                  @if ( $user->hasRole('Admin'))
                  <span class="badge rounded-pill badge-primary">Admin</span>
                  @else

                  <span class="badge rounded-pill badge-info">User</span>

                    @endif
                <div class="d-block">
                  <button type="button" class="btn btn-sm btn-outline-info text-nowrap mb-0">Follow</button>
           
                </div>
                
              </div>
              <div class="row mb-4">
                <div class="col-auto">
                  <span class="h6">323</span>
                  <span>Posts</span>
                </div>
                <div class="col-auto">
                  <span class="h6">3.5k</span>
                  <span>Followers</span>
                </div>
                <div class="col-auto">
                  <span class="h6">260</span>
                  <span>Following</span>
                </div>
              </div>
              <p class="text-lg mb-5">
              Decisions: If you can’t  <br><a href="javascript:;" class="text-info icon-move-right">More about me
                  <i class="fas fa-arrow-right text-sm ms-1"></i>
                </a>
              </p>

              <h4>Codigo de referido:</h4>

             <input class="form-control form-control-sm mt-3 text-center w-100 text-dark bg-200 border-300" type="text" readonly="readonly" value="{{ $referralLink }}" />
              <p>Usuarios Referidos: 0</p> <a class="btn btn-info" href="{{route('admin.referrals.index')}}">Referidos lista</a>
           
            </div>
      
          </div>
       {{--    <span class="mask bg-gradient-info border-radius-xl z-index-2 opacity-1"></span> --}}
        </div>


{{-- 
      <div class="col-12 col-md-3 d-flex flex-column">
      <div class="card h-100 card-background align-items-start" id="wallet-card">
      <div class="full-background" style="background-image: url(https://demos.creative-tim.com/marketplace/soft-ui-design-system-pro/pages/&)"></div>
      <div class="card-body z-index-3">
      <div class="icon icon-md">
      <svg  width="30px" height="30px" viewBox="0 0 44 43" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
      <title>megaphone</title>
      <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
      <g transform="translate(-2168.000000, -591.000000)" fill="#FFFFFF" fill-rule="nonzero">
      <g transform="translate(1716.000000, 291.000000)">
      <g id="megaphone" transform="translate(452.000000, 300.000000)">
      <path d="M35.7958333,0.273166667 C35.2558424,-0.0603712374 34.5817509,-0.0908856664 34.0138333,0.1925 L19.734,7.33333333 L9.16666667,7.33333333 C4.10405646,7.33333333 0,11.4373898 0,16.5 C0,21.5626102 4.10405646,25.6666667 9.16666667,25.6666667 L19.734,25.6666667 L34.0138333,32.8166667 C34.5837412,33.1014624 35.2606401,33.0699651 35.8016385,32.7334768 C36.3426368,32.3969885 36.6701539,31.8037627 36.6666942,31.1666667 L36.6666942,1.83333333 C36.6666942,1.19744715 36.3370375,0.607006911 35.7958333,0.273166667 Z"></path>
      <path d="M38.5,11 L38.5,22 C41.5375661,22 44,19.5375661 44,16.5 C44,13.4624339 41.5375661,11 38.5,11 Z" opacity="0.601050967"></path>
      <path d="M18.5936667,29.3333333 L10.6571667,29.3333333 L14.9361667,39.864 C15.7423448,41.6604248 17.8234451,42.4993948 19.6501416,41.764381 C21.4768381,41.0293672 22.3968823,38.982817 21.7341667,37.1286667 L18.5936667,29.3333333 Z" opacity="0.601050967"></path>
      </g>
      </g>
      </g>
      </g>
      </svg>
      </div>
      </div>
      <div class="card-footer pb-3 pt-2 z-index-3">
        @if (isset($userBalance))
        <h4 class="text-white mb-1">BALANCE:</h4>
        <h1 class="text-white font-weight-bolder text-uppercase">$.{{ $userBalance }}</h1>

        @else
        <h4 class="text-white mb-1">BALANCE:</h4>
        <h1 class="text-white font-weight-bolder text-uppercase">$.10</h1>
       @endif
      </div>
      <span class="mask bg-gradient-info border-radius-xl z-index-2 opacity-6"></span>
      </div>
      <script>
        // Añade el evento de clic para redirigir a la wallet
        document.getElementById("wallet-card").addEventListener("click", function() {
          window.location.href = "{{ route('user_actions.wallets.index') }}";
        });
      </script>
      <div class="card h-100 card-background mt-4 align-items-start">
      <div class="full-background" style="background-image: url(https://demos.creative-tim.com/marketplace/soft-ui-design-system-pro/pages/&)"></div>
      <div class="card-body z-index-3">
      <div class="icon icon-md">
      <svg width="30px" height="30px" viewBox="0 0 46 42" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
      <title>customer-support</title>
      <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
      <g transform="translate(-1717.000000, -291.000000)" fill="#FFFFFF" fill-rule="nonzero">
      <g transform="translate(1716.000000, 291.000000)">
      <g transform="translate(1.000000, 0.000000)">
      <path d="M45,0 L26,0 C25.447,0 25,0.447 25,1 L25,20 C25,20.379 25.214,20.725 25.553,20.895 C25.694,20.965 25.848,21 26,21 C26.212,21 26.424,20.933 26.6,20.8 L34.333,15 L45,15 C45.553,15 46,14.553 46,14 L46,1 C46,0.447 45.553,0 45,0 Z" opacity="0.59858631"></path>
      <path d="M22.883,32.86 C20.761,32.012 17.324,31 13,31 C8.676,31 5.239,32.012 3.116,32.86 C1.224,33.619 0,35.438 0,37.494 L0,41 C0,41.553 0.447,42 1,42 L25,42 C25.553,42 26,41.553 26,41 L26,37.494 C26,35.438 24.776,33.619 22.883,32.86 Z"></path>
      <path d="M13,28 C17.432,28 21,22.529 21,18 C21,13.589 17.411,10 13,10 C8.589,10 5,13.589 5,18 C5,22.529 8.568,28 13,28 Z"></path>
      </g>
      </g>
      </g>
      </g>
      </svg>
      </div>
      </div>
      <div class="card-footer pb-3 pt-2 z-index-3">
      <h4 class="text-white mb-1">Cuenta Verificada en un 50%</h4>
      <p class="text-white text-xs font-weight-bolder text-uppercase"> <a class="btn btn-info text-white" href="{{ route('admin.verifies.index') }}">Completar verificacion de la cuenta</a> </p>
      </div>
      <span class="mask bg-gradient-info border-radius-xl z-index-2 opacity-6"></span>
      </div>
      </div> --}}


      {{-- 2 cartas --}}
{{-- 
      <div class="col-12 col-md-3 d-flex flex-column">
      <div class="card card-background align-items-start" id="Tranferir_dinero">
      <div class="full-background" style="background-image: url(https://demos.creative-tim.com/marketplace/soft-ui-design-system-pro/pages/&)"></div>
      <div class="card-body z-index-3">
      <div class="icon icon-md">
      <svg width="30px" height="30px" viewBox="0 0 52 35" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
      <title>sound-wave</title>
      <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
      <g transform="translate(-2015.000000, -596.000000)" fill="#FFFFFF" fill-rule="nonzero">
      <g transform="translate(1716.000000, 291.000000)">
      <g id="sound-wave" transform="translate(299.000000, 305.000000)">
      <path d="M15.2941176,30.5882353 C14.6024837,30.5882353 13.9754248,30.1667974 13.7154248,29.5210458 L8.11777778,15.5269281 L6.51189542,17.9366013 C6.19581699,18.4090196 5.66562092,18.6928105 5.09803922,18.6928105 L0,18.6928105 L0,15.2941176 L4.18888889,15.2941176 L7.08287582,10.9522876 C7.43294118,10.4288889 8.03281046,10.1467974 8.67346405,10.2045752 C9.30052288,10.2708497 9.84261438,10.6769935 10.0754248,11.263268 L15.0969935,23.8214379 L22.1696732,1.19294118 C22.3905882,0.482614379 23.0465359,0 23.7908497,0 C23.792549,0 23.792549,0 23.7942484,0 C24.5385621,0.00169934641 25.1962092,0.487712418 25.4154248,1.19973856 L31.2305882,20.1015686 L34.3267974,15.9738562 C34.6462745,15.5456209 35.1509804,15.2941176 35.6862745,15.2941176 L40.7843137,15.2941176 L40.7843137,18.6928105 L36.5359477,18.6928105 L31.9477124,24.8104575 C31.5653595,25.3202614 30.9298039,25.5717647 30.2959477,25.4647059 C29.6671895,25.3542484 29.1522876,24.9005229 28.9636601,24.2904575 L23.7772549,7.43803922 L16.9152941,29.3952941 C16.7011765,30.0818301 16.0792157,30.5593464 15.3603922,30.5865359 C15.3366013,30.5882353 15.3162092,30.5882353 15.2941176,30.5882353 Z"></path>
      <path d="M26.5098039,34.6666667 C25.8181699,34.6666667 25.1911111,34.2452288 24.9311111,33.5994771 L19.3334641,19.6053595 L17.7275817,22.0150327 C17.4115033,22.487451 16.8813072,22.7712418 16.3137255,22.7712418 L11.2156863,22.7712418 L11.2156863,19.372549 L15.4045752,19.372549 L18.2985621,15.030719 C18.6486275,14.5073203 19.2484967,14.2252288 19.8891503,14.2830065 C20.5162092,14.349281 21.0583007,14.7554248 21.2911111,15.3416993 L26.3126797,27.8998693 L33.3853595,5.27137255 C33.6062745,4.56104575 34.2622222,4.07843137 35.0065359,4.07843137 C35.0082353,4.07843137 35.0082353,4.07843137 35.0099346,4.07843137 C35.7542484,4.08013072 36.4118954,4.56614379 36.6311111,5.27816993 L42.4462745,24.18 L45.5424837,20.0522876 C45.8619608,19.6240523 46.3666667,19.372549 46.9019608,19.372549 L52,19.372549 L52,22.7712418 L47.751634,22.7712418 L43.1633987,28.8888889 C42.7810458,29.3986928 42.1454902,29.6501961 41.511634,29.5431373 C40.8828758,29.4326797 40.3679739,28.9789542 40.1793464,28.3688889 L34.9929412,11.5164706 L28.1309804,33.4737255 C27.9168627,34.1602614 27.294902,34.6377778 26.5760784,34.6649673 C26.5522876,34.6666667 26.5318954,34.6666667 26.5098039,34.6666667 Z" id="Path-Copy" opacity="0.604957217"></path>
      </g>
      </g>
      </g>
      </g>
      </svg>
      </div>
      </div>
      <div class="card-footer pb-3 pt-5 z-index-3">
      <h4 class="text-white mb-1">TRANSFERIR  DINERO</h4>
      <p class="text-white text-xs font-weight-bolder text-uppercase opacity-7">Facil y Rapido</p>
   
      </div>
      <span class="mask bg-gradient-info border-radius-xl z-index-2 opacity-6"></span>
      </div>

      <script>
        // Añade el evento de clic para redirigir a la wallet
        document.getElementById("Tranferir_dinero").addEventListener("click", function() {
          window.location.href = "{{ route('user_actions.transfer_coins.index') }}";
        });
      </script>
      <div class="card card-background mt-4 align-items-start">
      <div class="full-background" style="background-image: url(https://demos.creative-tim.com/marketplace/soft-ui-design-system-pro/pages/&)"></div>
      <div class="card-body z-index-3">
      <div class="icon icon-md">
      <svg width="30px" height="30px" viewBox="0 0 42 44" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
      <title>time-alarm</title>
      <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
      <g transform="translate(-2319.000000, -440.000000)" fill="#FFFFFF" fill-rule="nonzero">
      <g transform="translate(1716.000000, 291.000000)">
      <g id="time-alarm" transform="translate(603.000000, 149.000000)">
      <path d="M18.8086957,4.70034783 C15.3814926,0.343541521 9.0713063,-0.410050841 4.7145,3.01715217 C0.357693695,6.44435519 -0.395898667,12.7545415 3.03130435,17.1113478 C5.53738466,10.3360568 11.6337901,5.54042955 18.8086957,4.70034783 L18.8086957,4.70034783 Z" opacity="0.6"></path>
      <path d="M38.9686957,17.1113478 C42.3958987,12.7545415 41.6423063,6.44435519 37.2855,3.01715217 C32.9286937,-0.410050841 26.6185074,0.343541521 23.1913043,4.70034783 C30.3662099,5.54042955 36.4626153,10.3360568 38.9686957,17.1113478 Z" opacity="0.6"></path>
      <path d="M34.3815652,34.7668696 C40.2057958,27.7073059 39.5440671,17.3375603 32.869743,11.0755718 C26.1954189,4.81358341 15.8045811,4.81358341 9.13025701,11.0755718 C2.45593289,17.3375603 1.79420418,27.7073059 7.61843478,34.7668696 L3.9753913,40.0506522 C3.58549114,40.5871271 3.51710058,41.2928217 3.79673036,41.8941824 C4.07636014,42.4955431 4.66004722,42.8980248 5.32153275,42.9456105 C5.98301828,42.9931963 6.61830436,42.6784048 6.98113043,42.1232609 L10.2744783,37.3434783 C16.5555112,42.3298213 25.4444888,42.3298213 31.7255217,37.3434783 L35.0188696,42.1196087 C35.6014207,42.9211577 36.7169135,43.1118605 37.53266,42.5493622 C38.3484064,41.9868639 38.5667083,40.8764423 38.0246087,40.047 L34.3815652,34.7668696 Z M30.1304348,25.5652174 L21,25.5652174 C20.49574,25.5652174 20.0869565,25.1564339 20.0869565,24.6521739 L20.0869565,15.5217391 C20.0869565,15.0174791 20.49574,14.6086957 21,14.6086957 C21.50426,14.6086957 21.9130435,15.0174791 21.9130435,15.5217391 L21.9130435,23.7391304 L30.1304348,23.7391304 C30.6346948,23.7391304 31.0434783,24.1479139 31.0434783,24.6521739 C31.0434783,25.1564339 30.6346948,25.5652174 30.1304348,25.5652174 Z"></path>
      </g>
      </g>
      </g>
      </g>
      </svg>
      </div>
      </div>
      <div class="card-footer pb-3 pt-2 z-index-3">
      <h4 class="text-white mb-1">Historial de Transacciones</h4>
      <p class="text-white text-xs font-weight-bolder text-uppercase opacity-7">10 transferecian realizadas</p> <a class="btn btn-info" href="{{ route('user_actions.history_transaccions.index') }}">Ver Historial</a>
      </div>
      <span class="mask bg-gradient-info border-radius-xl z-index-2 opacity-6"></span>
    
      </div>
      </div> --}}

      </div>
      </div>
      </section>


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
<x-app-layout>

</x-app-layout>


<img class="background-image" src="https://img.freepik.com/fotos-premium/fondo-azul-fondo-azul_608068-13038.jpg"

{{-- FORMULARIO DE COMPRA --}}

<div class="container ">
  <div class="row justify-content-center align-items-center" style="height: 100vh; padding-top: 7rem;">


    <section class="py-5">
      <div class="container">
  
      <div class="row">

        <div class="card col-12 col-md-4 mx-auto mb-2">
          <div class="row py-lg-5 py-3">
            <div class="col-lg-3 col-md-5 position-relative ">
              <img class="img rounded-circle max-width-200 w-100 position-relative z-index-2"
              src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" alt="bruce">
              <a href="{{ route('admin.profile.edit', Auth::user()->id ) }}" type="button" class="btn btn-sm btn-outline-dark">Edit</a>
            </div>
            
            <div class="col-lg-7 col-md-7 z-index-2 position-relative px-md-2 px-sm-5 mt-sm-0 mt-4">
              <div class="d-flex justify-content-between align-items-center mb-5">
                <h4 class="mb-0">{{ Auth::user()->name }}
                  </h4>
                  @if (Auth::user()->hasRole('Admin'))
                  <span class="badge rounded-pill badge-primary">Admin</span>
                  @else

                  <span class="badge rounded-pill badge-info">User</span>

                    @endif
                <div class="d-block">
          
           
                </div>
                
              </div>


              <h4>Codigo de referido:</h4>

             <input class="form-control form-control-sm mt-3 text-center w-100 text-dark bg-200 border-300" type="text" readonly="readonly" value="{{ $referralLink }}" />
              <p>Usuarios Referidos: 0</p> <a class="btn btn-info" href="{{route('admin.referrals.index')}}">Referidos lista</a>
           
            </div>
      
          </div>
        {{--   <span class="mask bg-gradient-info border-radius-xl z-index-2 opacity-1"></span> --}}
        </div>




        {{-- tabla de referidos  --}}

        
        <div class="card col-12 col-md-8 mx-auto mb-2">
          <div class="row py-lg-5 py-3">
            <h4>Usuarios que han utilizado tu codigo</h4>
            <div class="card">
              <div class="table-responsive">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Author</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Function</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Technology</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Employed</th>
                      <th class="text-secondary opacity-7"></th>
                    </tr>
                  </thead>
                  <tbody>
                                            @foreach ($referrals as $referral)
                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div>
                            <img  src="{{ $referral->user->profile_photo_url }}" alt="{{ $referral->user->name }}" class="avatar avatar-sm me-3">
                          </div>
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-xs">{{ $referral->user->name ?? null }}</h6>
                            <p class="text-xs text-secondary mb-0">{{ $referral->user->email ?? null }}</p>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">Puntos: {{ $referral->points }}</p>
                        <p class="text-xs text-secondary mb-0"> {{ $referral->status }}</p>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <span class="badge badge-sm badge-success">Online</span>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold">{{$referral->created_at->diffForHumans() }}</span>
                      </td>
                      <td class="align-middle">
                        <a href="javascript:;" class="tn btn-outline-primary text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                          Edit
                        </a>
                        <a href="{{ route('admin.profile.show', $referral->user->id ) }}" class="btn btn-outline-primaryb text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="ver user">
                          ver
                        </a>
                      </td>
                    </tr>
                   @endforeach
                  {{--   <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div>
                            <img src="https://demos.creative-tim.com/soft-ui-design-system-pro/assets/img/team-3.jpg" class="avatar avatar-sm me-3">
                          </div>
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-xs">Alexa Liras</h6>
                            <p class="text-xs text-secondary mb-0">alexa@creative-tim.com</p>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">Programator</p>
                        <p class="text-xs text-secondary mb-0">Developer</p>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <span class="badge badge-sm badge-secondary">Offline</span>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold">11/01/19</span>
                      </td>
                      <td class="align-middle">
                        <a href="#!" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                          Edit
                        </a>
                      </td>
                    </tr> --}}
            
            
            
 
            
     
                  </tbody>
                </table>
              </div>
            </div>
      
          </div>
       
        </div>






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
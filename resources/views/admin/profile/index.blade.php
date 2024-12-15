<x-app-layout>

</x-app-layout>

{{-- FORMULARIO DE COMPRA --}}

<div class="container ">
  <div class="row justify-content-center align-items-center" style="height: 100vh; padding-top: 7rem;">


    <section class="py-5">
      <div class="container">
  
      <div class="row">

        <div class="card col-12 col-md-6 mx-auto mb-2">
          <div class="row py-lg-5 p-3">
            <div class="col-lg-2 col-md-5 position-relative">
              <div class="avatar status-online me-3 avatar-xl ">
                <img class="img position-relative z-index-2 rounded-circle border border-success"
                src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" alt="bruce">
              </div>
             {{--  <a href="" type="button" class="btn btn-sm btn-outline-dark">Edit</a>
             --}}
            </div>
            
            <div class="col-lg-10 col-md-7 z-index-2 position-relative px-md-2 px-sm-5 mt-sm-0 mt-4">
              <div class="d-flex justify-content-between align-items-center mb-2">
                <h4 class="mb-0">{{ Auth::user()->name }}
                  <i class="ni ni-check-bold  bg-info rounded-circle text-white"></i>
                  </h4>
                  @if (Auth::user()->hasRole('Admin'))
                  <span class="badge rounded-pill badge-primary">Admin</span>
                  @else

                  <span class="badge rounded-pill badge-info">User</span>

                    @endif
                <div class="d-block">
                  <a href="{{ route('admin.profile.edit', Auth::user()->id ) }}" class="btn btn-sm btn-outline-info text-nowrap mb-0">Edit</a>

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
              <p>Se unió en enero de 2019</p>
              <p class="text-lg mb-5">
              No has puesto nada en ti biografia 
                  <i class="fas fa-arrow-right text-sm ms-1"></i>
                </a>
              </p>
            </div>

            <div class="col-md-12">
              <div class="d-flex justify-content-between align-items-center mb-2">
          <h4>Verificacion de la cuenta: <strong>75%</strong></h4>
          </div>
            <div class="progress mb-2" role="progressbar" aria-label="Animated striped example" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
              <div class="progress-bar progress-bar-striped bg-info progress-bar-animated" style="width: 75%"></div>
            </div>

            <a class="btn btn-info" href="{{route('user_actions.verify_profiles.index')}}">Completar Verificacion</a>
          </div>


            <div class="col-md-12">
                  <div class="d-flex justify-content-between align-items-center mb-2">
              <h4>Codigo de referido:</h4> <button class="btn btn-info">Copy</button>
              </div>
              <input class="form-control form-control-sm mt-3 text-center w-100 text-dark bg-200 border-300" type="text" readonly="readonly" value="{{ $referralLink }}" />
              <p>Usuarios Referidos: 0</p> <a class="btn btn-info" href="{{route('admin.referrals.index')}}">Referidos lista</a>

            </div>
        
          </div>

        </div>


        <div class="col-12 col-md-6 mx-auto mb-2">


          <div class="col-md-12" >
            <div class="card card-pricing bg-gradient-info border-0 text-center mb-4 overflow-hidden" style="height: 390px;">
              <img src="../../assets/img/shapes/waves-white.svg" alt="pattern-lines" class="position-absolute opacity-8">
              <div class="card-header bg-transparent">
                <h6 class="text-uppercase ls-1 py-3 mb-0">Billetera Virtual:</h6>
                <p class="display-2 mb-0">S/{{ Auth::user()->wallet->balance ?? 0; }} </p>
                  <p class=" ">Nivel: Premiun</p> {{-- <span class=" text-white">Premiun</span> --}}
                <h6 class="text-uppercase ls-1 py-3 mb-0">ID: SA5D5A55655626A5DA8WQEQ</h6>

            
              </div>
              <div class="card-footer bg-transparent position-relative">
                <a href="{{ route('user_actions.buy_coins.index') }}" class="btn btn-info">Depositar</a>

                <a href="{{ route('user_actions.transfer_coins.index') }}" class="btn btn-info">Transferir</a>
              </div>
            </div>
          </div>

          {{-- icons --}}

          <div class="row">
            <div class="col-4">
              <a class="card d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3" href="{{ route('user_actions.wallets.index') }}"> 
                  <i class="fas fa-wallet fa-2x"></i>
                  <p class="mb-0 text-black text-truncate mt-1 pt-1">Billetera</p>
              </a>
          </div>
          
          <div class="col-4">
              <a class="card d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3" href="{{ route('user_actions.transfer_coins.index') }}">
                  <i class="fas fa-exchange-alt fa-2x"></i>
                  <p class="mb-0 text-black text-truncate mt-1 pt-1">Transferir</p>
              </a>
          </div>
          
          <div class="col-4">
              <a class="card d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3" href="{{ route('user_actions.buy_coins.index') }}">
                  <i class="fas fa-coins fa-2x"></i>
                  <p class="mb-0 text-black text-truncate mt-1 pt-1">Comprar</p>
              </a>
          </div> 
          
          <div class="col-4">
              <a class="card d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3" href="{{ route('user_actions.order_vouchers.index') }}">
                  <i class="fas fa-receipt fa-2x"></i>
                  <p class="mb-0 text-black text-truncate mt-1 pt-1">Ordenes</p>
              </a>
          </div>
          
          <div class="col-4">
              <a class="card d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3" href="{{ route('user_actions.histories.index') }}">
                  <i class="fas fa-history fa-2x"></i>
                  <p class="mb-0 text-black text-truncate mt-1 pt-1">Historial</p>
              </a>
          </div>
          
          <div class="col-4">
              <a class="card d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3" href="{{ route('admin.notifications.index') }}">
                  <i class="fas fa-bell fa-2x"></i>
                  <p class="mb-0 text-black text-truncate mt-1 pt-1">Notificaciones</p>
              </a>
          </div>
       
          </div>
      

        </div>

      
      </div>
      </div>
      </section>

  </div>
</div>


{{-- <script src="{{ asset('cssadmin/assets/js/config.js') }}"></script>
<script src="{{ asset('cssadmin/vendors/fontawesome/all.min.js') }}"></script>
<script src="{{ asset('cssadmin/vendors/lodash/lodash.min.js') }}"></script>
<script src="{{ asset('cssadmin/assets/js/phoenix.js') }}"></script>
@livewire('support-chat') --}}

{{-- alert --}}
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


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
  .card {
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

  .form-container {
    background-color: rgba(255, 255, 255, 0.8);
    /* Fondo blanco semi-transparente */
    border-radius: 15px;
    padding: 20px;
  }

  .btn {
    transition: background-color 0.3s ease, transform 0.3s ease;
}

.btn:hover {
    transform: translateY(-2px);
}



</style>


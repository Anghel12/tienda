
<div>
    <li class="nav-item m-0 p-0 icon-redondo list-unstyled derecha_margin">
      <a class="nav-link" id="navbarDropdownNindeDots" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" title="Perfil">
          <img style="height: 38px; width: 38px;" class="rounded-circle " src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}"/>
      </a>
        <div class="dropdown-menu dropdown-menu-end navbar-dropdown-caret py-0 dropdown-profile shadow border border-300" aria-labelledby="navbarDropdownUser">
          <div class="card position-relative border-0">
            <div class="card-body p-0" style="height: 12rem; width: 20rem;">
              <div class="text-center pt-4 pb-3">
                <div class="avatar status-online me-3 avatar-xl ">
                  <img class="rounded-circle border border-success" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                </div>
                <h6 class="mt-2 text-black">{{ Auth::user()->name }}</h6>
              </div>
              <div class="mb-3 mx-3"><input class="form-control form-control-sm" id="statusUpdateInput" type="text" placeholder="Update your status" /></div>
            </div>
            <div class="overflow-auto scrollbar" style="height: 10rem;">
              <ul class="nav d-flex flex-column mb-2 pb-1">
                <li class="nav-item"><a class="nav px-3" href="{{ route('admin.profile.index' ) }}"> <span class="me-2 text-900" data-feather="user"></span><span>{{ Auth::user()->name }}</span></a></li>
               
                @if(Auth::user()->hasRole('Admin'))
                <li class="nav-item"><a class="nav px-3" href="{{ route('user_actions.wallets.index') }}"><span class="me-2 text-900" data-feather="pie-chart"></span>Billetera: {{ $balance }} </a></li>
                
                @endif
                <li class="nav-item"><a class="nav px-3" href="{{ route('admin.profile.edit', Auth::user()->id) }} "> <span class="me-2 text-900" data-feather="settings"></span>Configuracion</a></li>
                <li class="nav-item"><a class="nav px-3" href="{{ route('user_actions.histories.index') }}"> <span class="me-2 text-900" data-feather="lock"></span>Historial</a></li>
                <li class="nav-item"><a class="nav px-3" href="{{ route('user_contact') }}"> <span class="me-2 text-900" data-feather="help-circle"></span>Ayuda</a></li>
                <li class="nav-item"><a class="nav px-3" href="/terms"> <span class="me-2 text-900" data-feather="globe"></span>Term&C</a></li>
              </ul>
            </div>
            <div class="card-footer p-0 border-top">
              <ul class="nav d-flex flex-column my-3">
                <li class="nav-"><a class="nav px-3" href="{{ route('user_actions.buy_coins.index') }}"> <span class="me-2 text-900" data-feather="credit-card"></span>Comprar Monedas</a></li>
                <li class="nav-"><a class="nav px-3" > <span class="me-2 text-900" data-feather="user-plus"></span>Otra Cuenta </a></li>
             
             
              </ul>
              <hr />
          
              <div class="px-3">
                <form method="POST" action="{{ route('logout') }}" x-data>
                  @csrf
    
                  <button class="btn btn-phoenix-secondary d-flex flex-center w-100">
                    <span class="me-2" data-feather="log-out"> </span>{{ __('Log Out') }}
                  </button>
    
              </form>
              </div>
              <div class="my-2 text-center fw-bold fs--2 text-600"><a class="text-600 me-1" href="/terms">Privacy policy</a>&bull;<a class="text-600 mx-1" href="/terms">Terms</a>&bull;<a class="text-600 ms-1" href="/terms">Cookies</a></div>
            </div>
          </div>
        </div>
      </li>
</div>





<a class="navbar-brand" href="#" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
    <i class="fas fa-bars"></i>
  </a>
                <!-- Offcanvas Navbar (Panel Lateral) -->
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                    <div class="offcanvas-header bg-dark">
                        <!-- Botón de regresar con ícono bonito -->
                        <button type="button" class="btn btn-link text-white" data-bs-dismiss="offcanvas" aria-label="Close">
                          <i class="fas fa-arrow-left fa-2x"></i>
                        </button>
                      
                        <h5 class="offcanvas-title text-white" id="offcanvasNavbarLabel">Menú</h5>
                      
                        <!-- Ícono de búsqueda a la derecha -->
                        <a href="#" class="text-white ms-auto">
                          <i class="fas fa-search fa-2x"></i>
                        </a>
                      </div>
                    <div class="offcanvas-body bg-dark">
                    <!-- Enlaces del Navbar -->
                    <ul class="navbar-nav justify-content-start bg-dark">
                        <!-- Usuario - Foto, Nombre y Ver Perfil -->
                        <div class="col-12 mb-3">
                          <a class="nav-link d-flex align-items-center" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" title="Perfil">
                            <img style="height: 38px; width: 38px;" class="rounded-circle me-2" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}"/>
                            <div>
                              <h5 class="text-white mb-0">{{ Auth::user()->name }}</h5>
                              <p class="text-white mb-0">Ver perfil</p>
                            </div>
                          </a>
                        </div>
                    
                        <div class="row text-left">
                          <!-- Enlaces del Navbar -->
                          <div class="col-6 mb-3">
                            <a class="d-block hover-bg-200 p-2 rounded-3 text-decoration-none text-white mb-3" href="{{ route('markets.products.index') }}">
                              <i class="fas fa-store fa-2x"></i>
                              <p class="mb-0 text-white text-truncate mt-1 pt-1">Market Place</p>
                            </a>
                          </div>
                    
                          <div class="col-6 mb-3">
                            <a class="d-block hover-bg-200 p-2 rounded-3 text-decoration-none text-white mb-3" href="{{ route('user_actions.wallets.index') }}">
                              <i class="fas fa-wallet fa-2x"></i>
                              <p class="mb-0 text-white text-truncate mt-1 pt-1">Billetera</p>
                            </a>
                          </div>
                    
                          <div class="col-6 mb-3">
                            <a class="d-block hover-bg-200 p-2 rounded-3 text-decoration-none text-white mb-3" href="{{ route('user_actions.transfer_coins.index') }}">
                              <i class="fas fa-exchange-alt fa-2x"></i>
                              <p class="mb-0 text-white text-truncate mt-1 pt-1">Transferir</p>
                            </a>
                          </div>
                    
                          <div class="col-6 mb-3">
                            <a class="d-block hover-bg-200 p-2 rounded-3 text-decoration-none text-white mb-3" href="{{ route('user_actions.buy_coins.index') }}">
                              <i class="fas fa-coins fa-2x"></i>
                              <p class="mb-0 text-white text-truncate mt-1 pt-1">Comprar</p>
                            </a>
                          </div>
                    
                          <div class="col-6 mb-3">
                            <a class="d-block hover-bg-200 p-2 rounded-3 text-decoration-none text-white mb-3" href="{{ route('user_actions.order_vouchers.index') }}">
                              <i class="fas fa-receipt fa-2x"></i>
                              <p class="mb-0 text-white text-truncate mt-1 pt-1">Ordenes</p>
                            </a>
                          </div>
                    
                          <div class="col-6 mb-3">
                            <a class="d-block hover-bg-200 p-2 rounded-3 text-decoration-none text-white mb-3" href="{{ route('user_actions.histories.index') }}">
                              <i class="fas fa-history fa-2x"></i>
                              <p class="mb-0 text-white text-truncate mt-1 pt-1">Historial</p>
                            </a>
                          </div>
                    
                          <div class="col-6 mb-3">
                            <a class="d-block hover-bg-200 p-2 rounded-3 text-decoration-none text-white mb-3" href="{{ route('admin.notifications.index') }}">
                              <i class="fas fa-bell fa-2x"></i>
                              <p class="mb-0 text-white text-truncate mt-1 pt-1">Notificaciones</p>
                            </a>
                          </div>
                        <!-- Terms -->
                        <div class="col-6 mb-3">
                          <a class="d-block hover-bg-200 p-4 rounded-3 text-decoration-none text-white" href="/terms">
                            <i class="fas fa-file-alt fa-2x"></i>
                            <p class="mb-0 text-white text-truncate mt-2">Terms</p>
                          </a>
                        </div>

                        <!-- Contactarnos -->
                        <div class="col-6 mb-3">
                          <a class="d-block hover-bg-200 p-4 rounded-3 text-decoration-none text-white" href="{{ route('user_contact') }}">
                            <i class="fas fa-phone-alt fa-2x"></i>
                            <p class="mb-0 text-white text-truncate mt-2">Contactarnos</p>
                          </a>
                        </div>
                    </div>
                        <div class="col-12 m-3">
                          
                          <form method="POST" action="{{ route('logout') }}" x-data>
                            @csrf
              
                            <button class="btn btn-secondary d-flex flex-center">
                              <span class="me-2" data-feather="log-out"> </span>{{ __('Log Out') }}
                            </button>
              
                        </form>
                        </div>
                        <h3 class="text-white">Admin</h3>
                        @auth
                        @if($Admin)

                   
    
                            @include('livewire.home.navigation.partials.cel-admin')

                        @endif
                        @endauth
                            
                      
                        

                      </ul>
                    </div>
                </div>
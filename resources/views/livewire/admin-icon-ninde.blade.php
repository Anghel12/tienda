<div>
    <li class="nav-item  icon-redondo dropdown derecha_margin">
      <a class="nav-link" id="navbarDropdownNindeAdmin" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" title="Perfil">
        <i class="fas fa-th"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-end navbar-dropdown-caret py-0 dropdown-nide-dots shadow border border-300" aria-labelledby="navbarDropdownNindeAdmin">
          <div class="card bg-white position-relative border-0">
            <div class="card-body pt-3 px-3 pb-0 overflow-auto scrollbar" style="height: 20rem; width: 25rem;">
              <div class="row text-center align-items-center gx-0 gy-0">

                <div class="col-4">
                  <a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3" href="{{ route('admin.products.index') }}">
                    <i class="fas fa-store-alt fa-2x"></i>
                      <p class="mb-0 text-black text-truncate mt-1 pt-1">Market products</p>
                  </a>
              </div>
              
                <div class="col-4">
                  <a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3" href="{{ route('admin.users.index') }}"> 
                      <i class="fas fa-users fa-2x"></i>
                      <p class="mb-0 text-black text-truncate mt-1 pt-1">All User</p>
                  </a>
              </div>
              <div class="col-4">
                <a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3" href="{{ route('admin.transactions.index') }}">
                  <i class="fas fa-exchange-alt fa-2x"></i>
                    <p class="mb-0 text-black text-truncate mt-1 pt-1">All Transferir</p>
                </a>
            </div>
              
              <div class="col-4">
                  <a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3" href="{{ route('user_actions.buy_coins.index') }}">
                      <i class="fas fa-coins fa-2x"></i>
                      <p class="mb-0 text-black text-truncate mt-1 pt-1">All Coins</p>
                  </a>
              </div>
              
              
              <div class="col-4">
                <a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3" href="{{ route('admin.order_coins.index') }}">
                    <i class="fas fa-receipt fa-2x"></i>
                    <p class="mb-0 text-black text-truncate mt-1 pt-1">All Ordenes</p>
                </a>
            </div>
            
              
              <div class="col-4">
                  <a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3" href="{{ route('user_actions.history_transaccions.index') }}">
                      <i class="fas fa-history fa-2x"></i>
                      <p class="mb-0 text-black text-truncate mt-1 pt-1">Historial</p>
                  </a>
              </div>
              
              <div class="col-4">
                  <a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3" href="{{ route('admin.notifications.index') }}">
                      <i class="fas fa-bell fa-2x"></i>
                      <p class="mb-0 text-black text-truncate mt-1 pt-1">All Notificaciones</p>
                  </a>
              </div>

              <div class="col-4">
                <a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3" href="{{ route('admin.home.services.index') }}">
                    <i class="fas fa-home fa-2x"></i>
                    <p class="mb-0 text-black text-truncate mt-1 pt-1">Home Edit</p>
                </a>
            </div>
    
              </div>
            </div>
          </div>
        </div>
      </li>
</div>

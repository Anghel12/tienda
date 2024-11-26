<div>
    <li class="nav dropdown ps-2">
        <a class="nav" id="navbarDropdownNindeDots" href="index.html#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" data-bs-auto-close="outside" aria-expanded="false"><svg width="16" height="16" viewbox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
            <circle cx="2" cy="2" r="2" fill="currentColor"></circle>
            <circle cx="2" cy="8" r="2" fill="currentColor"></circle>
            <circle cx="2" cy="14" r="2" fill="currentColor"></circle>
            <circle cx="8" cy="8" r="2" fill="currentColor"></circle>
            <circle cx="8" cy="14" r="2" fill="currentColor"></circle>
            <circle cx="14" cy="8" r="2" fill="currentColor"></circle>
            <circle cx="14" cy="14" r="2" fill="currentColor"></circle>
            <circle cx="8" cy="2" r="2" fill="currentColor"></circle>
            <circle cx="14" cy="2" r="2" fill="currentColor"></circle>
          </svg></a>
        <div class="dropdown-menu dropdown-menu-end navbar-dropdown-caret py-0 dropdown-nide-dots shadow border border-300" aria-labelledby="navbarDropdownNindeDots">
          <div class="card bg-white position-relative border-0">
            <div class="card-body pt-3 px-3 pb-0 overflow-auto scrollbar" style="height: 20rem; width: 25rem;">
              <div class="row text-center align-items-center gx-0 gy-0">


                <div class="col-4">
                  <a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3" href="{{ route('user_actions.wallets.index') }}"> 
                      <i class="fas fa-store fa-2x"></i>
                      <p class="mb-0 text-black text-truncate mt-1 pt-1">Market Place</p>
                  </a>
              </div>


                <div class="col-4">
                  <a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3" href="{{ route('user_actions.wallets.index') }}"> 
                      <i class="fas fa-wallet fa-2x"></i>
                      <p class="mb-0 text-black text-truncate mt-1 pt-1">Billetera</p>
                  </a>
              </div>
              
              <div class="col-4">
                  <a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3" href="{{ route('user_actions.transfer_coins.index') }}">
                      <i class="fas fa-exchange-alt fa-2x"></i>
                      <p class="mb-0 text-black text-truncate mt-1 pt-1">Transferir</p>
                  </a>
              </div>
              
              <div class="col-4">
                  <a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3" href="{{ route('user_actions.buy_coins.index') }}">
                      <i class="fas fa-coins fa-2x"></i>
                      <p class="mb-0 text-black text-truncate mt-1 pt-1">Comprar</p>
                  </a>
              </div>
              
              <div class="col-4">
                  <a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3" href="{{ route('user_actions.order_vouchers.index') }}">
                      <i class="fas fa-receipt fa-2x"></i>
                      <p class="mb-0 text-black text-truncate mt-1 pt-1">Ordenes</p>
                  </a>
              </div>
              
              <div class="col-4">
                  <a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3" href="{{ route('user_actions.histories.index') }}">
                      <i class="fas fa-history fa-2x"></i>
                      <p class="mb-0 text-black text-truncate mt-1 pt-1">Historial</p>
                  </a>
              </div>
              
              <div class="col-4">
                  <a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3" href="{{ route('admin.notifications.index') }}">
                      <i class="fas fa-bell fa-2x"></i>
                      <p class="mb-0 text-black text-truncate mt-1 pt-1">Notificaciones</p>
                  </a>
              </div>
              
                {{-- <div class="col-4"><a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3" href="index.html#!"><img src="assets/img/nav-icons/trello.webp" alt="" width="30" />
                    <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Trello</p>
                  </a></div>
                <div class="col-4"><a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3" href="index.html#!"><img src="assets/img/nav-icons/figma.webp" alt="" width="20" />
                    <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Figma</p>
                  </a></div>
                <div class="col-4"><a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3" href="index.html#!"><img src="assets/img/nav-icons/twitter.webp" alt="" width="30" />
                    <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Twitter</p>
                  </a></div>
                <div class="col-4"><a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3" href="index.html#!"><img src="assets/img/nav-icons/pinterest.webp" alt="" width="30" />
                    <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Pinterest</p>
                  </a></div>
                <div class="col-4"><a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3" href="index.html#!"><img src="assets/img/nav-icons/ln.webp" alt="" width="30" />
                    <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Linkedin</p>
                  </a></div>
                <div class="col-4"><a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3" href="index.html#!"><img src="assets/img/nav-icons/google-maps.webp" alt="" width="30" />
                    <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Maps</p>
                  </a></div>
                <div class="col-4"><a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3" href="index.html#!"><img src="assets/img/nav-icons/google-photos.webp" alt="" width="30" />
                    <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Photos</p>
                  </a></div>
                <div class="col-4"><a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3" href="index.html#!"><img src="assets/img/nav-icons/spotify.webp" alt="" width="30" />
                    <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Spotify</p>
                  </a></div>  --}}
              </div>
            </div>
          </div>
        </div>
      </li>
</div>

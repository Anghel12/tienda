
<nav class="navbar navbar-vertical navbar-expand-lg" style="display:none;">
    <script>
      var navbarStyle = window.config.config.phoenixNavbarStyle;
      if (navbarStyle && navbarStyle !== 'transparent') {
        document.querySelector('body').classList.add(`navbar-${navbarStyle}`);
      }
    </script>
    <div class="collapse navbar-collapse" id="navbarVerticalCollapse">
      <!-- scrollbar removed-->
      <div class="navbar-vertical-content">
        <ul class="navbar-nav flex-column" id="navbarVerticalNav">

              
       
          {{-- user --}}

          <li class="nav-item">
            <!-- label-->
            <p class="navbar-vertical-label">User</p>
            <hr class="navbar-vertical-line" /><!-- parent pages-->
            <div class="nav-item-wrapper">
              <a class="nav-link label-1" href="{{ route('admin.profile.show', Auth::user()->id ) }}" role="button" data-bs-toggle="" aria-expanded="false">
                <div class="d-flex align-items-center"><span class="nav-link-icon"><span data-feather="users"></span></span><span class="nav-link-text-wrapper"><span class="nav-link-text">Profile</span></span></div>
              </a>
            </div><!-- parent pages-->
            
            <hr class="navbar-vertical-line" />
            <div class="nav-item-wrapper">
              <a class="nav-link label-1" href="{{ route('admin.verifies.index') }}" role="button" data-bs-toggle="" aria-expanded="false">
                <div class="d-flex align-items-center"><span class="nav-link-icon"><span data-feather="star"></span></span><span class="nav-link-text-wrapper"><span class="nav-link-text">Verificado</span></span></div>
              </a>
            </div>

            <p class="navbar-vertical-label">Coins</p>
            <hr class="navbar-vertical-line" />
            <div class="nav-item-wrapper">
              <a class="nav-link label-1" href="{{ route('admin.buyCoins.index') }}" role="button" data-bs-toggle="" aria-expanded="false">
                <div class="d-flex align-items-center"><span class="nav-link-icon"><span data-feather="disc"></span></span><span class="nav-link-text-wrapper"><span class="nav-link-text">Buy Coins </span></span></div>
              </a>
            </div>

            <hr class="navbar-vertical-line" />
            <div class="nav-item-wrapper">
              <a class="nav-link label-1" href="{{ route('admin.orders.index') }}" role="button" data-bs-toggle="" aria-expanded="false">
                <div class="d-flex align-items-center"><span class="nav-link-icon"><span data-feather="shopping-bag"></span></span><span class="nav-link-text-wrapper"><span class="nav-link-text">Orders</span></span></div>
              </a>
            </div>

            <hr class="navbar-vertical-line" />
            <div class="nav-item-wrapper">
              <a class="nav-link label-1" href="{{ route('admin.wallet.index') }}" role="button" data-bs-toggle="" aria-expanded="false">
                <div class="d-flex align-items-center"><span class="nav-link-icon"><span data-feather="credit-card"></span></span><span class="nav-link-text-wrapper"><span class="nav-link-text">My Wallet</span></span></div>
              </a>
            </div>
            
            <p class="navbar-vertical-label">Historial</p>
            
            <hr class="navbar-vertical-line" />
            <div class="nav-item-wrapper">
              <a class="nav-link label-1" href="{{ route('admin.transactions.index') }}" role="button" data-bs-toggle="" aria-expanded="false">
                <div class="d-flex align-items-center"><span class="nav-link-icon"><span data-feather="star"></span></span><span class="nav-link-text-wrapper"><span class="nav-link-text">Transacciones</span></span></div>
              </a>
            </div>
            <p class="navbar-vertical-label">Config</p>
            <hr class="navbar-vertical-line" />
            <div class="nav-item-wrapper">
              <a class="nav-link label-1" href="{{ route('admin.profile.edit', Auth::user()->id ) }}" role="button" data-bs-toggle="" aria-expanded="false">
                <div class="d-flex align-items-center"><span class="nav-link-icon"><span data-feather="settings"></span></span><span class="nav-link-text-wrapper"><span class="nav-link-text">Confing</span></span></div>
              </a>
            </div><!-- parent pages-->
            <p class="navbar-vertical-label">Nosotros</p>
            <hr class="navbar-vertical-line" />
            <div class="nav-item-wrapper">
              <a class="nav-link label-1" href="{{ route('admin.terms.index') }}" role="button" data-bs-toggle="" aria-expanded="false">
                <div class="d-flex align-items-center"><span class="nav-link-icon"><span data-feather="bookmark"></span></span><span class="nav-link-text-wrapper"><span class="nav-link-text">Terms</span></span></div>
              </a>
            </div>

            <hr class="navbar-vertical-line" />
            <div class="nav-item-wrapper">
              <a class="nav-link label-1" href="{{ route('admin.home_helps.index') }}" role="button" data-bs-toggle="" aria-expanded="false">
                <div class="d-flex align-items-center"><span class="nav-link-icon"><span data-feather="bookmark"></span></span><span class="nav-link-text-wrapper"><span class="nav-link-text">FAQ</span></span></div>
              </a>
            </div>

            <hr class="navbar-vertical-line" />
            <div class="nav-item-wrapper">
              <a class="nav-link label-1" href="{{ route('admin.about_us_homes.index') }}" role="button" data-bs-toggle="" aria-expanded="false">
                <div class="d-flex align-items-center"><span class="nav-link-icon"><span data-feather="book-open"></span></span><span class="nav-link-text-wrapper"><span class="nav-link-text">AboutUs</span></span></div>
              </a>
            </div>

          </li>


          <li class="nav-item">
            <!-- label-->
            <p class="navbar-vertical-label">Referidos</p>

            <hr class="navbar-vertical-line" />
            <div class="nav-item-wrapper">
              <a class="nav-link label-1" href="{{ route('admin.referrals.index') }}" role="button" data-bs-toggle="" aria-expanded="false">
                <div class="d-flex align-items-center"><span class="nav-link-icon"><span data-feather="share-2"></span></span><span class="nav-link-text-wrapper"><span class="nav-link-text">users ref</span></span></div>
              </a>
            </div>

            <hr class="navbar-vertical-line" />
            <div class="nav-item-wrapper">
              <a class="nav-link label-1" href="{{ route('admin.shareds.index') }}" role="button" data-bs-toggle="" aria-expanded="false">
                <div class="d-flex align-items-center"><span class="nav-link-icon"><span data-feather="users"></span></span><span class="nav-link-text-wrapper"><span class="nav-link-text">Code</span></span></div>
              </a>
            </div>
          </li>

  
        </ul>
      </div>
    </div>
    <div class="navbar-vertical-footer"><button class="btn navbar-vertical-toggle border-0 fw-semi-bold w-100 white-space-nowrap d-flex align-items-center"><span class="uil uil-left-arrow-to-left fs-0"></span><span class="uil uil-arrow-from-right fs-0"></span><span class="navbar-vertical-footer-text ms-2">Collapsed View</span></button></div>
  </nav>
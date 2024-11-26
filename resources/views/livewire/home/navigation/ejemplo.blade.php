<!-- Navbar Light -->
<nav class="navbar navbar-expand-lg navbar-light bg-white z-index-3 py-3">
  <div class="container">
    <a class="navbar-brand" href="" rel="tooltip" title="Designed and Coded by Creative Tim" data-placement="bottom"
      target="_blank">
      Soft UI Design System
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation"
      aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navigation">
      <ul class="navbar-nav navbar-nav-hover mx-auto">
        <li class="nav-item px-3">
          <a class="nav-link">
            Pages
          </a>
        </li>

        <li class="nav-item px-3">
          <a class="nav-link">
            Utilities
          </a>
        </li>

        <li class="nav-item px-3">
          <a class="nav-link">
            Blocks
          </a>
        </li>

        <li class="nav-item px-3">
          <a class="nav-link ">
            Docs
          </a>
        </li>
      </ul>

      <ul class="navbar-nav ms-auto">
        <button class="btn bg-gradient-primary mb-0">Buy Now</button>
      </ul>
    </div>
  </div>
</nav>
{{-- esta ok no tocar --}}




<div>
  <nav
    class="navbar navbar-expand-lg  blur blur-rounded top-0 z-index-fixed shadow position-absolute my-3 py-2 start-0 end-0 mx-4">
    <div class="container-fluid px-0">
      <a class="navbar-brand font-weight-bolder ms-sm-3" href="/" rel="tooltip" title="Terra Bank"
        data-placement="bottom">
        Terra Bank
      </a>

      @if (Route::has('login'))
      @auth

      <a href="{{ route('admin.buyCoins.index') }}"
        class="btn btn-sm  bg-gradient-info  btn-round mb-0 ms-auto d-lg-none d-block">Depósito Rápido</a>

      @else


      <a href="{{ url('/login') }}"
        class="btn btn-sm  bg-gradient-info  btn-round mb-0 ms-auto d-lg-none d-block">Depósito Rápido</a>

      @endauth

      @endif

      <button class="navbar-toggler shadow-none ms-md-2" type="button" data-bs-toggle="collapse"
        data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon mt-2">
          <span class="navbar-toggler-bar bar1"></span>
          <span class="navbar-toggler-bar bar2"></span>
          <span class="navbar-toggler-bar bar3"></span>
        </span>
      </button>
      <div class="collapse navbar-collapse w-100 pt-3 pb-2 py-lg-0" id="navigation">
        <ul class="navbar-nav navbar-nav-hover mx-auto">
          @include('livewire.home.navigation.partials.user')


          @auth
          {{-- user login --}}
          @include('livewire.home.navigation.partials.user_login')
          @endauth

          @can('abouts_us')
          @include('livewire.home.navigation.partials.about_us')
          @endcan


          @include('livewire.home.navigation.partials.coin')



          @auth

          <ul class="navbar-nav d-lg-block d-none">
            <li class="nav-item">
              <a href="{{ route('user_actions.buy_coins.index') }}"
                class="btn btn-sm  bg-gradient-info  btn-round mb-0 me-1">Depósito Rápido</a>
            </li>

          </ul>

          <ul class="navbar-nav d-lg-block d-none">
            <li class="nav-item">
              <a href="{{ route('user_actions.order_vouchers.index') }}"
                class="btn btn-sm  bg-gradient-info  btn-round mb-0 me-1">Order

                (<span id="notification-count">{{ $unreadNotificationsCount }}</span>)
                {{-- @if (isset($OrderCoin) && $OrderCoin > 0)
                <span class="badge badge-md badge-circle badge-floating badge-success">{{ $OrderCoin }}</span>
                @endif --}}
              </a>
            </li>
          </ul>
          {{-- can poner order_coins.index --}}
          @if(auth()->user()->hasRole('Admin'))
          @include('livewire.home.navigation.partials.notification')
          @endif
          {{-- @if(auth()->user()->hasRole('Admin'))
          <ul class="navbar-nav d-lg-block d-none">
            <li class="nav-item">
              <a href="{{ route('admin.order_coins.index') }}"
                class="btn btn-sm  bg-gradient-info  btn-round mb-0 me-1">Order
                @if (isset($OrderCoin) && $OrderCoin > 0)
                <span class="badge badge-md badge-circle badge-floating badge-success">{{ $OrderCoin }}</span>
                @endif
              </a>
            </li>
          </ul>
          @endif --}}



          @endauth




      </div>
    </div>
  </nav>


</div>
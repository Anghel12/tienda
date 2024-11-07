<!-- Navbar Light -->
<div>
  <nav
    class="navbar navbar-expand-lg  blur blur-rounded top-0 z-index-fixed shadow position-absolute my-3 py-2 start-0 end-0 mx-4">
    <div class="container-fluid px-0">
      <a class="navbar-brand font-weight-bolder ms-sm-3" href="{{ route('admin.profile.index')}}" rel="tooltip" title="Terra Bank"
        data-placement="bottom">
        Terra Bank
      </a>

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
        {{--   @include('livewire.home.navigation.partials.user_login') --}}
          @endauth

          @can('abouts_us')
          @include('livewire.home.navigation.partials.about_us')
          @endcan

          @include('livewire.home.navigation.partials.coin')

        {{--   @auth

          <ul class="navbar-nav d-lg-block d-none">


            <li class="navbar-nav ms-auto">
              <a href="{{ route('user_actions.buy_coins.index') }}" class="btn bg-gradient-info me-1 mb-0">Depósito
                Rápido</a>
            </li>

          </ul>

          <ul class="navbar-nav d-lg-block d-none">
            <li class="navbar-nav ms-auto">


              <a href="{{ route('user_actions.order_vouchers.index') }}"
                class="btn bg-gradient-info mb-0 me-1 position-relative">
                Order
                <span
                  class="position-absolute top-0 start-100 translate-middle p-2 bg-danger border border-light rounded-circle">
                  {{ $unreadNotificationsCount }}
                  <span class="visually-hidden"></span>
                </span>
              </a>

            </li>
          </ul>
        
          @if(auth()->user()->hasRole('Admin'))
          @include('livewire.home.navigation.partials.notification')
          @endif
    

          @endauth --}}

         


      </div>
      @auth
    {{--   @include('livewire.home.navigation.partials.icon_admin') --}}
    @if(auth()->user()->hasRole('Admin'))
     <livewire:admin-icon-ninde />
    @endif
   
      <livewire:ninde-dots-icon />
      <livewire:notifications-all-views />
      <livewire:icon-profile />
      
      {{--   @include('livewire.home.navigation.partials.icon_profile') --}}
    
        @endauth


        @if (Route::has('login'))
        @auth
  
        <a href="{{ route('admin.buyCoins.index') }}"
          class="btn btn-sm bg-gradient-info  btn-round mb-0 ms-auto d-lg-none d-block">Depósito Rápido</a>
  
        @else
  
  
        <a href="{{ url('/login') }}"
          class="btn btn-sm  bg-gradient-info  btn-round mb-0 ms-auto d-lg-none d-block">Depósito Rápido</a>
  
        @endauth
  
        @endif


    </div>
  </nav>


</div>
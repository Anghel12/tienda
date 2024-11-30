<!-- Navbar Light -->
<div>{{-- my-3  mx-4 --}}
  <nav
    class="navbar navbar-expand-lg  blur top-0 z-index-fixed shadow position-absolute  py-2 start-0 end-0">
    <div class="container-fluid px-0">
      <a class="navbar-brand font-weight-bolder ms-sm-3" href="{{ route('markets.products.index')}}" rel="tooltip" title="CyberEcotienda"
        data-placement="bottom">
        CyberEcotienda
      </a>

      <button class="navbar-toggler shadow-none ms-md-2" type="button" data-bs-toggle="collapse"
        data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon mt-2">
          <span class="navbar-toggler-bar bar1"></span>
          <span class="navbar-toggler-bar bar2"></span>
          <span class="navbar-toggler-bar bar3"></span>
        </span>
      </button>

      {{-- prueba --}}
     {{--  <button class="btn navbar-toggler navbar-toggler-humburger-icon hover-bg-transparent" type="button" data-bs-toggle="collapse" data-bs-target="#navbarVerticalCollapse" aria-controls="navbarVerticalCollapse" aria-expanded="false" aria-label="Toggle Navigation"><span class="navbar-toggle-icon"><span class="toggle-line"></span></span></button>
       --}}


      <div class="collapse navbar-collapse w-100 pt-3 pb-2 py-lg-0" id="navigation">
        <ul class="navbar-nav navbar-nav-hover mx-auto">


          @include('livewire.home.navigation.partials.user')

          @auth
        {{--   @include('livewire.home.navigation.partials.user_login') --}}
          @endauth

       {{--    @can('abouts_us')
          @include('livewire.home.navigation.partials.about_us')
          @endcan --}}

          @include('livewire.home.navigation.partials.coin')


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
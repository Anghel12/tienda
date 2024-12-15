
<ul class="navbar-nav flex-row text-center">
<li class="nav-item wh-cel">
    <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" href="{{ url('/') }}"  aria-label="Inicio">
        <i class="fas fa-home"></i> {{-- Inicio --}}
    </a>
  </li>
  
  <li class="nav-item wh-cel">
    <a class="nav-link {{ Request::is('marketplace/products*') ? 'active' : '' }}" aria-label="Mercado"
        href="{{ route('markets.products.index') }}">
        <i class="fas fa-store"></i> {{-- Mercado --}}
    </a>
  </li>
  
  <li class="nav-item wh-cel">
    <a class="nav-link {{ Request::is('about*') ? 'active' : '' }}" aria-label="Nosotros"
        href="{{ route('home.about.indexaboutus') }}">
        <i class="fas fa-pencil-alt"></i> {{-- Nosotros --}}
    </a>
  </li>
  
  <li class="nav-item wh-cel">
    <a class="nav-link {{ Request::is('help*') ? 'active' : '' }}" href="{{ route('home.help.indexhelp') }}" aria-label="Ayuda">
        <i class="fas fa-question-circle"></i> {{-- Ayuda --}}
    </a>
  </li>
  
  <li class="nav-item wh-cel">
    <a class="nav-link {{ Request::is('blogs*') ? 'active' : '' }}" href="{{ route('home.blogs.indexblog') }}" aria-label="Blog">
        <i class="fas fa-newspaper"></i> {{-- Blog --}}
    </a>
  </li>

  @auth
       {{-- User --}}
  <li class="nav-item wh-cel">
    <a class="nav-link {{ Request::is('user/fastbuycoins*') ? 'active' : '' }}" aria-label="Cartera"
        href="{{ route('user_actions.buy_coins.index') }}">
        <i class="fas fa-wallet"></i>{{-- Cartera: S/{{ Auth::user()->wallet->balance ?? 0; }} --}}
    </a>
  </li>
  @endauth
</ul>

  @if (Route::has('login'))
  @auth
 
  @else
  <ul class="navbar-nav  flex-row text-center">
    <li class="nav-item wh-cel">
      <a class="nav-link {{ Request::is('login*') ? 'active' : '' }} " href="{{ url('/login') }}" aria-label="Login">
        <i class="fas fa-user"></i> {{-- Login --}}
      </a>
    </li>
    @if (Route::has('register'))
    <li class="nav-item wh-cel ">
      <a class="nav-link {{ Request::is('register*') ? 'active' : '' }}" href="{{ url('/register') }}" aria-label="Registrarse">
        <i class="fas fa-users"></i> {{-- Registrarse --}}
      </a>
    </li>
  </ul>
  @endif
  @endauth

  @endif
  <style>
    .wh-cel {
      width: 40px;
      padding: 0px;
      margin: 0px;
    }

    #navbar-small .navbar-nav{
      gap: 0px!important;
    }
  </style>


  
  
  
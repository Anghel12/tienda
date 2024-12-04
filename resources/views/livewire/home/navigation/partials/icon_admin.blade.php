{{-- if endif/ auth else endauth/ if endif --}}
@if (Route::has('login'))
@auth
{{-- Admin boton impersonate --}}
@if (session('impersonated_by'))
<ul class="navbar-nav text-center ">

  <li class="nav-item m-0 p-0 ni-wh position-relative">
    <a class="nav-link {{ Request::is('blogs*') ? 'active' : '' }}" href="{{ route('impersonate.stop')}}">
        <i class="fas fa-newspaper"></i>
    </a>
    <span class="tooltip-text">AdminVolver-></span>
</li>
</ul>
@endif
{{-- Admin boton impersonate --}}

@else
{{-- no registrado se muestra esto --}}
<ul class="navbar-nav text-center">
  <li class="nav-item m-0 p-0 ni-wh position-relative">
    <a class="nav-link {{ Request::is('login*') ? 'active' : '' }} " href="{{ url('/login') }}">
      <i class="fas fa-user"></i> {{-- Login --}}
    </a>
    <span class="tooltip-text">Login</span>
  </li>
  @if (Route::has('register'))
  <li class="nav-item m-0 p-0 ni-wh position-relative">
    <a class="nav-link {{ Request::is('register*') ? 'active' : '' }}" href="{{ url('/register') }}">
      <i class="fas fa-users"></i> {{-- Registrarse --}}
    </a>
    <span class="tooltip-text">Register</span>
  </li>
</ul>
@endif
@endauth

@endif
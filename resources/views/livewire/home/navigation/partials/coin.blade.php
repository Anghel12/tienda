
@if (Route::has('login'))
@auth

<ul class="navbar-nav d-lg-block d-none">
  <li class="nav-item">
    <a href="{{ route('admin.buyCoins.index') }}" class="btn btn-sm  bg-gradient-primary  btn-round mb-0 me-1">Depósito Rápido</a>
  </li>
</ul>

@else
<ul class="navbar-nav d-lg-block d-none">
  <li class="nav-item">
    <a href="{{ url('/login') }}" class="btn btn-sm  bg-gradient-primary  btn-round mb-0 me-1">Depósito Rápido</a>
  </li>
</ul>

@endauth

 @endif

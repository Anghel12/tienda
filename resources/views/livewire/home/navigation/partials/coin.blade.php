
@if (Route::has('login'))
@auth

<ul class="navbar-nav d-lg-block d-none">
  <li class="nav-item">
    <a href="javascript:;" class="btn btn-sm  bg-gradient-primary  btn-round mb-0 me-1"
      onclick="smoothToPricing('pricing-soft-ui')">Buy Terra</a>
  </li>
</ul>

@else
<ul class="navbar-nav d-lg-block d-none">
  <li class="nav-item">
    <a href="{{ url('/login') }}" class="btn btn-sm  bg-gradient-primary  btn-round mb-0 me-1">Buy Terra</a>
  </li>
</ul>

@endauth

 @endif

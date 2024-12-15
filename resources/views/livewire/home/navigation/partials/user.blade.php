<ul class="navbar-nav mx-auto d-none d-lg-flex text-center">
    <li class="nav-item m-0 p-0 ni-wh position-relative">
        <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" href="{{ url('/') }}" aria-label="Inicio">
            <i class="fas fa-home"></i>
        </a>
        <span class="tooltip-text">Inicio</span>
    </li>

    <li class="nav-item m-0 p-0 ni-wh position-relative">
        <a class="nav-link {{ Request::is('marketplace/products*') ? 'active' : '' }}" aria-label="Mercado"
           href="{{ route('markets.products.index') }}">
            <i class="fas fa-store"></i>
        </a>
        <span class="tooltip-text">Mercado</span>
    </li>

    <li class="nav-item m-0 p-0 ni-wh position-relative">
        <a class="nav-link {{ Request::is('about*') ? 'active' : '' }}" href="{{ route('home.about.indexaboutus') }}" aria-label="Nosotros">
            <i class="fas fa-users"></i>
        </a>
        <span class="tooltip-text">Nosotros</span>
    </li>

    <li class="nav-item m-0 p-0 ni-wh position-relative">
        <a class="nav-link {{ Request::is('help*') ? 'active' : '' }}" href="{{ route('home.help.indexhelp') }}" aria-label="Ayuda">
            <i class="fas fa-question-circle"></i>
        </a>
        <span class="tooltip-text">Ayuda</span>
    </li>

    <li class="nav-item m-0 p-0 ni-wh position-relative">
        <a class="nav-link {{ Request::is('blogs*') ? 'active' : '' }}" href="{{ route('home.blogs.indexblog') }}" aria-label="Blog">
            <i class="fas fa-newspaper"></i>
        </a>
        <span class="tooltip-text">Blog</span>
    </li>
    @if (Route::has('login'))
    @auth
    {{-- User --}}
    <li class="nav-item m-0 p-0 ni-wh position-relative">
        <a class="nav-link {{ Request::is('user/fastbuycoins*') ? 'active' : '' }}" href="{{ route('user_actions.wallets.index') }}" aria-label="Cartera">
            <i class="fas fa-wallet"></i>
        </a>
        <span class="tooltip-text">Cartera</span>
    </li>
    @endauth
    @endif
</ul>

<style>.tooltip-text {
    position: absolute;
    bottom: -30px;
    left: 50%;
    transform: translateX(-50%);
    background-color: rgba(0, 0, 0, 0.8);
    color: #fff;
    padding: 5px 10px;
    border-radius: 5px;
    font-size: 12px;
    white-space: nowrap;
    opacity: 0;
    visibility: hidden;
    transition: opacity 0.3s, visibility 0.3s;
}

.nav-item:hover .tooltip-text {
    opacity: 1;
    visibility: visible;
}
</style>

    


    
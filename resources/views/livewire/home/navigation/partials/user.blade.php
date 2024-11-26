
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{ url('/') }}">
                  <i class="fas fa-home"></i> Inicio
                </a>
              </li>

        {{--       <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{ route('home.banco.indexbanco') }}">
                    <i class="fas fa-bank"></i> Banco
                </a>
            </li> --}}
            <li class="nav-item">
                <a class="nav-link" href="{{ route('markets.products.index') }}">
                    <i class="fas fa-store"></i> Mercado
                </a>
            </li>
            
            <li class="nav-item">
                <a class="nav-link" href="{{ route('home.about.indexaboutus') }}">
                    <i class="fas fa-users"></i> Nosotros
                </a>
            </li>
            
            <li class="nav-item">
                <a class="nav-link" href="{{ route('home.help.indexhelp') }}">
                    <i class="fas fa-question-circle"></i> Ayuda
                </a>
            </li>
            

              <li class="nav-item">
                <a class="nav-link" href="{{ route('home.blogs.indexblog') }}">
                  <i class="fas fa-newspaper"></i> Blog
                </a>
              </li>

{{-- admin,user, salir botones --}}

<!-- Authentication -->
{{--         @can('admin.home')
        <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.profile.show', Auth::user()->id ) }}">
              <i class="fas fa-newspaper"></i> 
             Admin
            </a>
          </li>
        @endcan --}}
<!-- Authentication -->

{{-- categorias --}}
 {{--    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="fas fa-tags"></i> Categorías
        </a>
        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
        @foreach ($categories as $category)
            <li><a class="dropdown-item" href="{{ route('home.category.show', $category->slug) }}">{{$category->name}}</a></li>
        @endforeach
        </ul>
    </li> --}}
    

{{-- categorias --}}

   {{-- if endif/ auth else endauth/ if endif --}}
   @if (Route::has('login'))

   @auth


{{-- Admin boton impersonate --}}
        @if (session('impersonated_by'))
            <li class="nav-item">
                <a class="nav-link" href="{{ route('impersonate.stop')}}">
                <i class="fas fa-newspaper"></i> AdminVolver->
                </a>
            </li>
        @endif
{{-- Admin boton impersonate --}}

    @else
    {{-- no registrado se muestra esto --}}
        <li class="nav-item">
            <a class="nav-link" href="{{ url('/login') }}">
            <i class="fas fa-user"></i> Login
            </a>
        </li>
        @if (Route::has('register'))
        <li class="nav-item">
            <a class="nav-link" href="{{ url('/register') }}">
            <i class="fas fa-users"></i> Registrarse
            </a>
        </li>
        @endif
    @endauth

    @endif

    {{-- boton lado izquierda  --}}

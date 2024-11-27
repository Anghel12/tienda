{{-- HOME index --}}
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head> 
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Cyber-Ecotienda') }}</title>

    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-8114335291355852"
    crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="{{ asset('css/main_page.css') }}">
    <link rel="stylesheet" href="{{ asset('css/theme.min.css') }}"> 


    {{-- bank stylos --}}

    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assets/img/apple-icon.png') }}">
    <link rel="icon" type="image/png" href="{{ asset('assets/img/favicon.png') }}">
    <link rel="canonical" href="https://www.creative-tim.com/product/soft-ui-design-system-pro" />

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />

    <link href="{{ asset('assets/css/nucleo-icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/nucleo-svg.css') }}" rel="stylesheet" />

    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link href="{{ asset('assets/css/nucleo-svg.css') }}" rel="stylesheet" />

    <link id="pagestyle" href="{{ asset('assets/css/soft-design-system-pro.min.css@v=1.1.0.css') }}" rel="stylesheet" />

    {{-- bank stylos --}}

    {{-- @yield('css')
    @yield('js') --}}
    @wireUiScripts
    <script src="//unpkg.com/alpinejs" defer></script>
    <!-- Styles -->
    @livewireStyles
</head>

<body class="career">

    <div class="position-sticky z-index-sticky top-0">
        <div class="row">
            <div class="col-12">
                {{-- @livewire('navigation-menu') --}}
                @livewire('home.navigation.navbar')
              {{--    @include('livewire.home.navigation.partials.nabvar-vertical')  --}}

                <div>
                    {{ $slot }}
                </div>

                
            </div>
        </div>
  {{--       @include('layouts.support_chat') --}}
    </div>

 


    @stack('modals')

    @livewireScripts
</body>


<style>
    .background-image {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
        z-index: -1;
    }


    .minimalista-card {
      border: 2px solid #161a2b; /* Borde de 1px con el color de fondo anterior */
      color: rgb(255, 255, 255);
      border-radius: 10px; /* Bordes redondeados para un toque moderno */
      padding: 5px; /* Espaciado interno */
      transition: box-shadow 0.3s ease; /* Transición suave */
      
    }
    .minimalista-card:hover {
    box-shadow: 4px 4px 4px rgba(42, 18, 255, 0.158); /* Sombra blanca más intensa en hover */
    
}

    .bg-mod-black {
      background-color: #0f111a;
      color: rgb(255, 255, 255);
    }

    .swiper-button-next, .swiper-button-prev {
    background-color: white; /* Fondo blanco */
    border-radius: 50%; /* Hacer los botones circulares */
    width: 40px; /* Ajusta el tamaño del botón */
    height: 40px;
    display: flex;
    align-items: center;
    justify-content: center;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Sombra sutil */
    border: 1px solid #ccc; /* Borde suave */
    color: #333; /* Color del icono */
    transition: all 0.3s ease;
}

  .swiper-button-next:hover, .swiper-button-prev:hover {
      background-color: #f0f0f0; /* Fondo ligeramente gris al pasar el cursor */
      transform: scale(1.1); /* Efecto de agrandamiento */
  }

  .swiper-button-next::after, .swiper-button-prev::after {
      font-size: 18px; /* Ajusta el tamaño del icono */
      color: inherit; /* Usa el color del botón */
  }

    .swiper-pagination-bullet {
            width: 20px;
            height: 20px;
            text-align: center;
            line-height: 20px;
            font-size: 12px;
            color: #000;
            opacity: 1;
            background: rgba(177, 177, 177, 0.432);
          }
      
          .swiper-pagination-bullet-active {
            color: #fff;
            background: #007aff;
          }
</style>

</html>
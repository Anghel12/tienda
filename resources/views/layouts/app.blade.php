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
  <meta name="google-adsense-account" content="ca-pub-8114335291355852">

  <!-- Sección para metadatos dinámicos -->
  <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">

  @yield('meta')
  <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
  <meta name="google-site-verification" content="tu_codigo_de_verificacion">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>

  <noscript>
  <style>
    body {
      display: none;
    }
  </style>
  <div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); text-align: center;">
    <h2>Por favor, habilita JavaScript para continuar usando nuestro sitio.</h2>
  </div>
</noscript>
@livewireStyles
@livewireScripts 
<link rel="stylesheet" href="{{ asset('css/stylemainweb.css') }}">
 {{--  <script src="{{ asset('js/script.js') }}"></script> --}}
</head>

<body class="bg-mod-black">

  {{-- @livewire('navigation-menu') --}}
  @livewire('home.navigation.navbar')
  {{-- @include('livewire.home.navigation.partials.nabvar-vertical') --}}

  <div>
    {{ $slot }}
  </div>

  {{-- @include('layouts.support_chat') --}}
  
  @stack('modals')

</body>

</html>
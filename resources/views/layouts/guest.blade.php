{{-- aDMIN index --}}
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name', 'Cyber-Ecotienda') }}</title>

  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">
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
  <!-- Scripts -->
  @vite(['resources/css/app.css', 'resources/js/app.js'])

  <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('cssadmin/img/favicons/apple-touch-icon.png') }}">
  <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('cssadmin/img/favicons/favicon-32x32.png') }}">
  <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('cssadmin/img/favicons/favicon-16x16.png') }}">
  <link rel="shortcut icon" type="image/x-icon" href="{{ asset('cssadmin/img/favicons/favicon.ico') }}">
  <link rel="manifest" href="{{ asset('cssadmin/img/favicons/manifest.json') }}">
  <meta name="msapplication-TileImage" content="{{ asset('cssadmin/img/favicons/mstile-150x150.png') }}">
  <meta name="theme-color" content="#ffffff">

  <script src="{{ asset('cssadmin/vendors/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
  <script src="{{ asset('cssadmin/vendors/simplebar/simplebar.min.js') }}"></script>
  <script src="{{ asset('cssadmin/assets/js/config.js') }}"></script>

  <!-- ===============================================-->
  <!--    Stylesheets-->
  <!-- ===============================================-->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
  <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&display=swap"
    rel="stylesheet">
  <link href="{{ asset('cssadmin/vendors/simplebar/simplebar.min.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
  <link href="{{ asset('cssadmin/assets/css/theme-rtl.min.css') }}" type="text/css" rel="stylesheet" id="style-rtl">
  <link href="{{ asset('cssadmin/assets/css/theme.min.css') }}" type="text/css" rel="stylesheet" id="style-default">
  <link href="{{ asset('cssadmin/assets/css/user-rtl.min.css') }}" type="text/css" rel="stylesheet" id="user-style-rtl">
  <link href="{{ asset('cssadmin/assets/css/user.min.css') }}" type="text/css" rel="stylesheet" id="user-style-default">

  <script>
    var phoenixIsRTL = window.config.config.phoenixIsRTL;
          if (phoenixIsRTL) {
            var linkDefault = document.getElementById('style-default');
            var userLinkDefault = document.getElementById('user-style-default');
            linkDefault.setAttribute('disabled', true);
            userLinkDefault.setAttribute('disabled', true);
            document.querySelector('html').setAttribute('dir', 'rtl');
          } else {
            var linkRTL = document.getElementById('style-rtl');
            var userLinkRTL = document.getElementById('user-style-rtl');
            linkRTL.setAttribute('disabled', true);
            userLinkRTL.setAttribute('disabled', true);
          }
  </script>
  <link href="{{ asset('cssadmin/vendors/leaflet/leaflet.css') }}" rel="stylesheet">
  <link href="{{ asset('cssadmin/vendors/leaflet.markercluster/MarkerCluster.css') }}" rel="stylesheet">
  <link href="{{ asset('cssadmin/vendors/leaflet.markercluster/MarkerCluster.Default.css') }}" rel="stylesheet">



</head>

<body>


  <main class="main" id="top">
    {{-- @livewire('admin.navigation.nav-bar') --}}
    @include('layouts.navbaradmin.navbar')

    {{ $slot }}

    @include('layouts.navbaradmin.partials.footer')

    {{-- @include('layouts.navbaradmin.partials.chat') --}}
  </main>
  {{-- configuracion falta asset lentea la pagina --}}
  {{-- @include('layouts.navbaradmin.partials.config')
  --}}

</body>

<script src="{{ asset('cssadmin/vendors/popper/popper.min.js') }}"></script>
<script src="{{ asset('cssadmin/vendors/bootstrap/bootstrap.min.js') }}"></script>
<script src="{{ asset('cssadmin/vendors/anchorjs/anchor.min.js') }}"></script>
<script src="{{ asset('cssadmin/vendors/is/is.min.js') }}"></script>
<script src="{{ asset('cssadmin/vendors/fontawesome/all.min.js') }}"></script>
<script src="{{ asset('cssadmin/vendors/lodash/lodash.min.js') }}"></script>
<script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
<script src="{{ asset('cssadmin/vendors/list.js/list.min.js') }}"></script>
<script src="{{ asset('cssadmin/vendors/feather-icons/feather.min.js') }}"></script>
<script src="{{ asset('cssadmin/vendors/dayjs/dayjs.min.js') }}"></script>
<script src="{{ asset('cssadmin/assets/js/phoenix.js') }}"></script>
<script src="{{ asset('cssadmin/vendors/echarts/echarts.min.js') }}"></script>
<script src="{{ asset('cssadmin/vendors/leaflet/leaflet.js') }}"></script>
<script src="{{ asset('cssadmin/vendors/leaflet.markercluster/leaflet.markercluster.js') }}"></script>
<script src="{{ asset('cssadmin/vendors/leaflet.tilelayer.colorfilter/leaflet-tilelayer-colorfilter.min.js') }}">
</script>
<script src="{{ asset('cssadmin/assets/js/ecommerce-dashboard.js') }}"></script>
</html>
<x-app-layout>
  @section('meta')
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <!-- Meta general para el Marketplace -->
    <meta name="description" content="Compra y venta de productos físicos y digitales en nuestro marketplace. Encuentra lo que buscas a los mejores precios.">
    <meta name="robots" content="index, follow">
    <meta name="robots" content="noindex, nofollow">

    <!-- Meta Tags para Redes Sociales -->
    <meta property="og:title" content="Marketplace - Compra y venta de productos">
    <meta property="og:description" content="Un marketplace donde puedes comprar y vender productos físicos y digitales. Encuentra las mejores ofertas en categorías como tecnología, moda y más.">
    <meta property="og:image" content="{{ asset('images/marketplace_logo.jpg') }}"> <!-- Logo del marketplace -->
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:type" content="website">

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Marketplace - Compra y venta de productos">
    <meta name="twitter:description" content="Compra y venta de productos físicos y digitales en nuestro marketplace. Encuentra lo que buscas a los mejores precios.">
    <meta name="twitter:image" content="{{ asset('images/marketplace_logo.jpg') }}">
    <meta name="twitter:url" content="{{ url()->current() }}">

    {{-- Meta Author --}}
    <meta name="author" content="CyberEcotienda">
    <meta name="geo.region" content="PE"> <!-- Región del Marketplace -->
    <meta name="geo.placename" content="Moyobamba"> <!-- Ciudad o ubicación del Marketplace -->
    <meta name="geo.position" content="-6.0628;-77.1012"> <!-- Latitud y Longitud -->
    <meta name="google-site-verification" content="tu_codigo_de_verificacion">
    
    <link rel="canonical" href="{{ url()->current() }}">
    
    <link rel="stylesheet" href="{{ asset('css/indexmarket.css') }}">
  @endsection
</x-app-layout>

  <div class="bg-mod-black" style="width: 100%">
    <div class="container-fluid" style="height: 100%; padding-top: 4rem;">
      <div class="row pt-7 pb-5 ">
        @include('markets.products.partials.filters')
    
        <div class="col-lg-9 col-xxl-10">
          @include('markets.products.partials.cel_filtro')
          <h2 class="text-white mb-2">MarketPlace</h2>
           {{-- @include('markets.products.partials.adsend') --}}
          <h3 class="text-white ">Productos mas Recientes</h3>
            @include('markets.products.partials.product')
            @include('markets.products.partials.adsend')

            {{-- @include('markets.products.partials.motokar_category') --}}
            @include('markets.products.partials.category_aros')
            @include('markets.products.partials.adsend')

              
                 {{--     <h3 class="text-white">Categoria: <strong>Motores</strong></h3>
            @include('markets.products.partials.motores_category') --}}

            @include('posts.partials.footer')
        </div>
    </div>
    </div>
  </div>


<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
<script>
  var swiper = new Swiper(".swiper-container-products", {
      grabCursor: true,
    slidesPerView: 3,
    spaceBetween: 30,
    keyboard: true,

    pagination: {
              el: ".swiper-pagination",
              clickable: true,
              renderBullet: function (index, className) {
                return '<span class="' + className + '">' + (index + 1) + "</span>";
              },
            },

  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },

  breakpoints: {
        "@0.00": {
          slidesPerView: 1,
        },
        "@0.75": {
          slidesPerView: 2,
        },
        "@1.00": {
          slidesPerView: 2,
        },
        "@1.70": {
          slidesPerView: 3,
        },
        
      },
  });

</script>


<script>
  var swiper = new Swiper(".swiper-container-category", {
      grabCursor: true,
    slidesPerView: 3,
    spaceBetween: 30,
    keyboard: true,

    pagination: {
              el: ".swiper-pagination",
              clickable: true,
              renderBullet: function (index, className) {
                return '<span class="' + className + '">' + (index + 1) + "</span>";
              },
            },

  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },

  breakpoints: {
        "@0.00": {
          slidesPerView: 1,
        },
        "@0.75": {
          slidesPerView: 2,
        },
        "@1.00": {
          slidesPerView: 2,
        },
        "@1.70": {
          slidesPerView: 3,
        },
        
      },
  });
</script>

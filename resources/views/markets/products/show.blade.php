<x-app-layout>
  @section('meta')
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <meta name="description" content="{{ $product->extract }}">
    <meta name="robots" content="index, follow">
    <meta name="robots" content="noindex, nofollow">

    {{-- Meta Tags para Redes Sociales --}}
    <meta property="og:title" content="{{ $product->name }}">
    <meta property="og:description" content="{{ $product->extract }}">
    <meta property="og:image" content="{{ $linkImage->url }}"> <!-- Suponiendo que tienes una imagen asociada al producto -->
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:type" content="product"> <!-- 'product' es para productos, 'article' para artículos -->

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{ $product->name }}">
    <meta name="twitter:description" content="{{ $product->extract }}">
    <meta name="twitter:image" content="{{ $linkImage->url }}">
    <meta name="twitter:url" content="{{ url()->current() }}">

    {{-- Meta Author --}}
    <meta name="author" content="{{ $product->user->name }}">
    <meta name="geo.region" content="PE"> <!-- Código de región, por ejemplo 'PE' para Perú -->
    <meta name="geo.placename" content="Moyobamba"> <!-- Ciudad -->
    <meta name="geo.position" content="-6.0628;-77.1012"> <!-- Latitud y Longitud -->

    <link rel="canonical" href="{{ url()->current() }}">

    {{-- Schema Markup --}}
    <script type="application/ld+json">
      {
          "@context": "https://schema.org",
          "@type": "Product",
          "name": "{{ $product->name }}",
          "image": "{{ $linkImage->url }}",
          "description": "{{ $product->extract }}",
          "sku": "{{ $product->id }}",
          "offers": {
              "@type": "Offer",
              "url": "{{ url()->current() }}",
              "priceCurrency": "S/.",
              "price": "{{ $product->price }}",
              "itemCondition": "https://schema.org/NewCondition",
              "availability": "{{ $product->stock }}"
          }
      }
      </script>


    @endsection

<div class="mt-40">
  <div class="container-fluid " style="width: 100%">
    <div class="row pt-7 pb-5">
            @include('markets.products.partials.show_producto')
    <!-- Mostrar solo en pantallas pequeñas (móviles) -->
<div class="d-block d-md-none">
  @include('markets.products.partials.adsend')
</div>
            @include('markets.products.partials.similar')
            <!-- Mostrar solo en pantallas grandes (tabletas y de escritorio) -->
            <div class="d-none d-md-block">
            @include('markets.products.partials.adsend')
            </div>
 
    </div>
</div>
</div>
</x-app-layout>
@include('posts.partials.footer')

<style>

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

<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

<script>
  var swiper = new Swiper(".swiper-container-post", {
    grabCursor: true,
    slidesPerView: 4,
    spaceBetween: 30,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
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
          slidesPerView: 1,
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

          var swiper = new Swiper(".swiper-show-products", {
            navigation: {
              nextEl: ".swiper-button-next",
              prevEl: ".swiper-button-prev",
            },
            keyboard: true,
            grabCursor: true,
            spaceBetween: 30,
            pagination: {
              el: ".swiper-pagination",
              clickable: true,
              renderBullet: function (index, className) {
                return '<span class="' + className + '">' + (index + 1) + "</span>";
              },
            },
          });
        </script>


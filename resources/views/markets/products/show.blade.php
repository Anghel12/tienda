<x-app-layout>
  
</x-app-layout>


{{-- <img class="background-image"
  src="https://img.freepik.com/fotos-premium/fondo-azul-fondo-azul_608068-13038.jpg" alt="Fondo"> --}}
 
{{-- FORMULARIO DE COMPRA --}}
{{-- @include('markets.products.partials.navbar') --}}
<div class="bg-mod-black">
  <div class="container " style="width: 100%">
    <div class="row pt-7 pb-5">

            @include('markets.products.partials.show_producto')

            @include('markets.products.partials.similar')
            @include('markets.products.partials.adsend')
 
    </div>
</div>
</div>
@include('posts.partials.footer')


<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

<!-- Initialize Swiper -->
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
          slidesPerView: 3,
        },
        "@1.70": {
          slidesPerView: 4,
        },
        
      },
  });
</script>

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

    .form-container {
        background-color: rgba(255, 255, 255, 0.8);
        /* Fondo blanco semi-transparente */
        border-radius: 15px;
        padding: 20px;
    }

    .bg-mod-black {
      background-color: #0f111a;
      color: rgb(255, 255, 255);
    }
</style>
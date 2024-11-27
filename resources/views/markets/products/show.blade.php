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


<!-- Swiper JS Similares-->
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
          slidesPerView: 3,
        },
        "@1.70": {
          slidesPerView: 4,
        },
        
      },
  });
</script>

        <!-- Swiper main show -->
        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
        <script>
          var swiper = new Swiper(".swiper-show-products", {
            navigation: {
              nextEl: ".swiper-button-next",
              prevEl: ".swiper-button-prev",
            },
            keyboard: true,
            pagination: {
              el: ".swiper-pagination",
              clickable: true,
              renderBullet: function (index, className) {
                return '<span class="' + className + '">' + (index + 1) + "</span>";
              },
            },
          });
        </script>


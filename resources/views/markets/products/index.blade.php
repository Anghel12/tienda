<x-app-layout>
  
</x-app-layout>


{{-- <img class="background-image"
  src="https://img.freepik.com/fotos-premium/fondo-azul-fondo-azul_608068-13038.jpg" alt="Fondo"> --}}
 
{{-- FORMULARIO DE COMPRA --}}
{{-- @include('markets.products.partials.navbar') --}}

  <div class="bg-mod-black" style="width: 100%">
    <div class="container-fluid">
      <div class="row pt-7 pb-5">
        @include('markets.products.partials.filters')
    
        <div class="col-lg-9 col-xxl-10">
          

        {{--   @include('markets.products.partials.adsend') --}}
          <h3 class="text-white ">Productos mas Recientes</h3>
            @include('markets.products.partials.product')
            @include('markets.products.partials.adsend')

            <h3 class="text-white">Categoria: <strong>Motokares</strong> </h3>
            @include('markets.products.partials.motokar_category')

            <h3 class="text-white">Categoria: <strong>Aros</strong></h3>
            @include('markets.products.partials.category_aros')
            @include('markets.products.partials.adsend')

              
            <h3 class="text-white">Categoria: <strong>Motores</strong></h3>
            @include('markets.products.partials.motores_category')

        </div>
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
    slidesPerView: 3,
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
          slidesPerView: 2,
        },
        "@1.00": {
          slidesPerView: 3,
        },
        "@1.70": {
          slidesPerView: 3,
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
    /* modo oscuro tienda */

    .bg-mod-black {
      background-color: #0f111a;
      color: rgb(255, 255, 255);
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
   

</style>
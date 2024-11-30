<x-app-layout>
  
</x-app-layout>

  <div class="bg-mod-black" style="width: 100%">
    <div class="container-fluid">
      <div class="row pt-7 pb-5">
        @include('markets.products.partials.filters')
    
        <div class="col-lg-9 col-xxl-10">
          
          <nav class="mb-3  " aria-label="breadcrumb">
            <ol class="breadcrumb mb-0 bg-black">
              <li class="breadcrumb-item"><a class="text-white" href="{{ route('markets.products.index') }}">Mercado</a></li>
            </ol>
          </nav>
           {{-- @include('markets.products.partials.adsend') --}}
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

<!-- Swiper JS Similares-->
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
          slidesPerView: 3,
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
          slidesPerView: 3,
        },
        "@1.70": {
          slidesPerView: 3,
        },
        
      },
  });
</script>

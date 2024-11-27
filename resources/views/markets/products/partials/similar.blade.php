

        <div class="d-flex flex-between-center mb-1">
          <div>
            <h3 class="text-white">Similares A este Producto </h3>
            <p class="mb-0 text-700 fw-semi-bold">{{$product->category->name}}</p>
          </div><a href="{{ route('markets.products.index') }}" class="btn btn-sm btn-phoenix-primary">View all</a>
        </div>

       
        @if ($relatedProducts->isEmpty())
        <p>No hay productos relacionados. Buscar Producto en  <a href="{{ route('markets.products.index') }}" class="btn btn-sm btn-primary">Market Place</a></p>
       
    @else
        
 
    {{-- swiper --}}
 <div class="row gx-3 gy-1">
  <div class="swiper swiper-container-post">
    <div class="swiper-wrapper">

      @foreach ($relatedProducts as $product)
      <div class=" swiper-slide">
        <div class="minimalista-card {{-- border border-1 --}} col-lg-12">


       
          <div class="position-relative text-decoration-none product-card h-100">
            <div class="d-flex flex-column justify-content-between h-100">
              <div class="">
                <div class=" rounded-3 position-relative mb-3">
                  {{-- favoritos --}}
                <form method="POST" action="{{ route('admin.favorites.store') }}">
                    @csrf
                    <input type="hidden" name="item_id" value="{{ $product->id }}">
                    <button
                      class="btn rounded-circle p-0 d-flex flex-center btn-wish z-index-2 d-toggle-container btn-outline-primary"
                      type="submit" data-bs-toggle="tooltip" data-bs-placement="top" title="Add to wishlist">
                      <span class="fas fa-heart d-block-hover"></span><span class="far fa-heart d-none-hover"></span>
                    </button>
                  </form> 

                  @if ($product->links()->where('type', 'image')->exists())
                  <img style="height:250px; width: 100%" class="img-fluid rounded-3" 
                       src="{{ $product->links()->where('type', 'image')->first()->url }}"
                       alt="{{ $product->name }}" />
                  @else
                      <img style="height:250px; width: 100%" class="img-fluid rounded-3" 
                          src="https://scontent-lim1-1.xx.fbcdn.net/v/t45.5328-4/467551928_884078530466472_2987155854001498890_n.jpg?stp=dst-jpg_s960x960&_nc_cat=107&ccb=1-7&_nc_sid=247b10&_nc_ohc=ZJE2jXtW8NYQ7kNvgG55OQd&_nc_zt=23&_nc_ht=scontent-lim1-1.xx&_nc_gid=Ax-zIfezJvkS_orPp1L8fiC&oh=00_AYBEr39BhQaNe8pauM1JUZVUPdpx8QGncLH8pySClVBFmA&oe=674C44CC" alt="No image available" />
                  @endif
                  
                </div>

                <div class="p-2">
                <a class="stretched-link" href="{{route('markets.products.show', $product)}}">
                  <h4 class="mb-2 lh-sm line-clamp-3 product-name text-white" style="height: 70px">{{$product->name}}</h4>
                </a>
                <p class="fs--1"><span class="fa fa-star text-warning"></span><span
                    class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span
                    class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span
                    class="text-500 fw-semi-bold ms-1">(64 people rated)</span>
                  </p>

                  <div>
                    <p class="fs--1 text-1000 fs--1 mb-0 fw-bold text-truncate text-white" style="max-width: 300px;">{!! $product->extract !!}</p>
                    <p class="fs--1 text-700 fs--1 mb-2">Categoria:{{$product->Category->name}}</p>
  
                    <div class="d-flex align-items-center mb-1">
                      
                      <h3 class="text-1100 mb-0 text-white">S/{{$product->price}}</h3>
                      <p class="me-2 p-2 text-900 text-decoration-line-through mb-0  text-warning opacity-50">{{$product->price_reciente}}</p> 
                    </div>
                
                    <p class="text-700 fw-semi-bold fs--1 lh-1 mb-0 text-white">{{$product->brand->title}}</p>
  
                    {{-- carrito --}}
                 {{--    <div class="">
                      {!! Form::open(['route' => 'agregaritem', 'autocomplete' => 'off', 'method' => 'POST']) !!}
  
                      {!! Form::hidden('Producto_id', $product->id) !!}
  
                      {!! Form::hidden('Producto_precio', $product->price) !!}
  
                      {!! Form::submit('Agregar al carrito', ['class' => 'btn style-btn']) !!}
  
                      {!! Form::close() !!}
                    </div> --}}
                    {{-- carrito --}}
                  </div>

                </div>


              </div>
             
            </div>
          </div>


        </div>
      </div>
      @endforeach


    </div>
        {{-- paginacion --}}
       
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-pagination"></div>
  </div>

</div>

{{-- swiper --}}

@endif
   
    
      <!-- Swiper JS -->
      <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    
      <!-- Initialize Swiper -->
      <script>
        var swiper = new Swiper(".mySwiper", {
          loop: true,
          spaceBetween: 10,
          slidesPerView: 4,
          freeMode: true,
          watchSlidesProgress: true,
        });
        var swiper2 = new Swiper(".mySwiper2", {
          loop: true,
          spaceBetween: 10,
          navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
          },
          thumbs: {
            swiper: swiper,
          },
        });
      </script>
    
    
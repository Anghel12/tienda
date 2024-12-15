<div class="d-flex flex-between-center mb-1">
  <div>
    <h3 class="text-white">Similares A este Producto </h3>
    <a href="{{ route('markets.products.index') }}" class="btn btn-dark text-whitebtn btn-sm">View all</a>
    <p class="mb-0 text-700 fw-semi-bold">{{$product->category->name}}</p>
  </div>
</div>


@if ($relatedProducts->isEmpty())
<p>No hay productos relacionados. Buscar Producto en <a class="btn btn-dark text-whitebtn btn-sm" href="{{ route('markets.products.index') }}"
    class="btn btn-sm btn-primary">Market Place</a></p>

@else


{{-- swiper --}}
<div class="row gx-3 gy-1">
  <div class="swiper swiper-container-post">
    <div class="swiper-wrapper">

      @foreach ($relatedProducts as $product)
      <div class=" swiper-slide">
        <div class="minimalista-card col-lg-12">
          <div class="position-relative text-decoration-none product-card h-100">
            <div class="d-flex flex-column justify-content-between h-100">
              <div class="">
                <div class=" rounded-3 position-relative mb-3">
                  @if ($product->mainImage->exists())
                  <img style="height:250px; width: 100%" class="img-fluid rounded-3 card-img-top"
                    src="{{ $product->mainImage->url }}" alt="{{ $product->name }}" />
                  @else
                  <img style="height:250px; width: 100%" class="img-fluid rounded-3"
                    src="https://scontent-lim1-1.xx.fbcdn.net/v/t45.5328-4/467551928_884078530466472_2987155854001498890_n.jpg?stp=dst-jpg_s960x960&_nc_cat=107&ccb=1-7&_nc_sid=247b10&_nc_ohc=ZJE2jXtW8NYQ7kNvgG55OQd&_nc_zt=23&_nc_ht=scontent-lim1-1.xx&_nc_gid=Ax-zIfezJvkS_orPp1L8fiC&oh=00_AYBEr39BhQaNe8pauM1JUZVUPdpx8QGncLH8pySClVBFmA&oe=674C44CC"
                    alt="No image available" />
                  @endif
                </div>
                <div class="p-2">
                  <div style="height: 60px;">
                    <a class="stretched-link" href="{{route('markets.products.show', $product->slug)}}">
                      <h5 class="mb-2 lh-sm product-name text-white" style="height: 90%; overflow: hidden; display: -webkit-box; -webkit-line-clamp: 3; -webkit-box-orient: vertical; text-overflow: ellipsis;">
                        {{$product->name}}
                      </h5>
                    </a>
                  </div>
                  <div class="d-flex align-items-center mb-3">

                    <h3 class="text-1100 mb-0 text-white">S/{{$product->product_price->price ?? null}}</h3>
                    <p class="me-2 p-2 text-900 text-decoration-line-through mb-0  text-warning opacity-50">
                      {{$product->product_price->price ?? null}}</p>
                  </div>

                  <div class="mb-3">

                    <p class="fs--1 text-1000 fs--1 mb-0 fw-bold text-truncate text-white" style="max-width: 300px;">{!!
                      $product->extract !!}</p>
                    <p class="fs--1 text-700 fs--1 mb-2">Categoria:{{$product->Category->name}}</p>

                    <p class="text-700 fw-semi-bold fs--1 lh-1 mb-0">{{$product->brand->title}}</p>

                    {{-- carrito --}}
                    {{-- <div class="">
                      {!! Form::open(['route' => 'agregaritem', 'autocomplete' => 'off', 'method' => 'POST']) !!}

                      {!! Form::hidden('Producto_id', $product->id) !!}

                      {!! Form::hidden('Producto_precio', $product->price) !!}

                      {!! Form::submit('Agregar al carrito', ['class' => 'btn style-btn']) !!}

                      {!! Form::close() !!}
                    </div> --}}
                    {{-- carrito --}}
                  </div>


                  <p class="fs--1"><span class="fa fa-star text-warning"></span><span
                      class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span
                      class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span
                      class="text-500 fw-semi-bold ms-1">(64 people rated)</span>
                  </p>

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
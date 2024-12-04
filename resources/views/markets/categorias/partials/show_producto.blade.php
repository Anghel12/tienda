 <!-- <section> begin ============================-->
    <div class="py-0">
        <div class="container-fluid">
          <nav class="mb-3  " aria-label="breadcrumb">
            <ol class="breadcrumb mb-0 bg-black">
              <li class="breadcrumb-item"><a class="text-white" href="{{ route('markets.products.index') }}">Mercado</a></li>
              <li class="breadcrumb-item"><a class="text-white" href="#">Producto</a></li>
            </ol>
          </nav>
          <div class="row g-5 mb-5 mb-lg-8" data-product-details="data-product-details">
            <div class="col-12 col-lg-7">
              <div class="row g-3 mb-3">

           {{--      <div class="col-12 col-md-12 col-lg-12 col-xl-12">
                  <div class="d-flex align-items-center border rounded-3 text-center h-100">
                 
                    <iframe width="700" height="400" src="{{ $linkYoutube->url }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>

                  </div>
                </div> --}}

                              {{-- swiper --}}
            <div class="gy-1">
              <div class="swiper swiper-show-products">
                <div class="swiper-wrapper">


                @if ($linkYoutube->exists())
                <div class="swiper-slide">
                  <div class="minimalista-card col-lg-12">
                    <div class="position-relative text-decoration-none product-card h-100">
                      <div class="d-flex flex-column justify-content-between h-100">
                        <div class="">
                          <div class=" rounded-3 position-relative mb-3">

                            <iframe width="100%" height="500" src="{{ $linkYoutube->url }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                          </div>


                        </div>
                      
                      </div>
                    </div>


                  </div>
                </div>
                @endif

                  

{{--                   @foreach ($relatedProducts as $product) --}}
                  <div class="swiper-slide">
                    <div class="minimalista-card col-lg-12">
                      <div class="position-relative text-decoration-none product-card h-100">
                        <div class="d-flex flex-column justify-content-between h-100">
                          <div class="">
                            <div class=" rounded-3 position-relative mb-3">

                              <img style="height:500px; width: 100%" class="img-fluid rounded-3" 
                                  src="{{ $linkImage->url }}"
                                  alt="{{ $product->name }}" />
                      
              
                              
                            </div>


                          </div>
                        
                        </div>
                      </div>


                    </div>
                  </div>
            {{--       @endforeach --}}

                </div>
                    {{-- paginacion --}}
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-pagination"></div>
              </div>

            </div>
            {{-- swiper --}}


              </div>
        {{--       <div class="d-flex">
                @auth
                <a  href="{{route('checkout')}}" class="btn btn-lg btn-outline-warning rounded-pill w-100 me-3 px-2 px-sm-4 fs--1 fs-sm-0"><span class="me-2 far fa-heart"></span>Comprar ahora
                </a>
                @else
          
                <a  href="{{route('login')}}" class="btn btn-lg btn-outline-warning rounded-pill w-100 me-3 px-2 px-sm-4 fs--1 fs-sm-0"><span class="me-2 far fa-heart"></span>Comprar ahora
                </a>
              @endauth

                {!! Form::open(['route' => 'agregaritem', 'autocomplete' => 'off', 'method' => 'POST']) !!}
    
                {!! Form::hidden('Producto_id', $product->id) !!}
    
                {!! Form::hidden('Producto_precio', $product->price) !!}
            
                <button class="btn btn-lg btn-warning rounded-pill w-100 fs--1 fs-sm-0"><span class="fas fa-shopping-cart me-2"></span>Add to cart</button>
          
                  {!! Form::close() !!}
               
              </div> --}}
              {{-- Anuncio de google --}}
              @include('markets.products.partials.adsend')



            </div>
            <div class="col-12 col-lg-5">
              <div class="">
              <div class="d-flex flex-column justify-content-between h-50">
                <div>
                  <div class="d-flex flex-wrap">
                    <div class="me-2"><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span></div>
                    <p class="text-primary fw-semi-bold mb-2">65 Personas estan interesados en el producto</p>
                  </div>
                  <h3 class="mb-3 lh-sm text-white">{{$product->name}}</h3>
                  <div class="d-flex flex-wrap align-items-start mb-3"><a class="fw-semi-bold" href="#">{{$product->user->name}}: </a><span class="badge bg-success fs--1 rounded-pill me-2 fw-semi-bold">#1 Mejor Vendedor</span></div>
                  <div class="d-flex flex-wrap align-items-center mb-3">
                    <h1 class="me-3 text-white">S/{{$product->price}}</h1>
                    <p class="text-500 text-decoration-line-through fs-2 mb-0 me-3 text-warning-50">{{$product->price_reciente}}</p>
                    <p class="text-warning-500 fw-bolder mb-0">10% De Descuento</p>
                  </div>

                  @auth
                  <a  href="{{-- {{route('checkout')}} --}}" class="btn btn-lg btn-outline-warning rounded-pill w-100 me-3 px-2 px-sm-4 fs--1 fs-sm-0 mb-5"><span class="me-2 far fa-heart"></span>Comprar ahora
                  </a>
                  @else
            
                  <a  href="{{route('login')}}" class="btn btn-lg btn-outline-warning rounded-pill w-100 me-3 px-2 px-sm-4 fs--1 fs-sm-0 mb-5"><span class="me-2 far fa-heart"></span>Comprar ahora
                  </a>
                @endauth
                 
                  <p class="mb-2 text-white"> {{$product->body}} </p>
                  <p class="text-danger-500 fw-bold mb-lg-0">OFERTA ESPECIAL HASTA EL 3 DE DICIEMBRE</p>
                </div>
                <div>
                  <div class="mb-3">
                    <p class="fw-semi-bold mb-2 text-900 text-white ">Marca: <span class="text-1100 text-white" data-product-color="data-product-color">{{ $product->brand->title }}</span></p>
              
                  </div>
                  <div class="row g-3 g-sm-5 align-items-end">
                    <div class="col-12 col-sm-auto">
                      <p class="fw-semi-bold mb-2 text-900 text-white">Categoria: {{$product->category->name}}</p>
                     {{--  <div class="d-flex align-items-center"><select class="form-select w-auto">
                          <option value="44">44</option>
                          <option value="22">22</option>
                          <option value="18">18</option>
                        </select><a class="ms-2 fs--1 fw-semi-bold" href="product-details.html#!">Size chart</a></div> --}}
                    </div>
                    <div class="col-12 col-sm">
                      <p class="fw-semi-bold mb-2 text-900"> <span class="badge bg-info rounded-pill">En stock: {{$product->stock}}</span></p>
                    {{--   <div class="d-flex justify-content-between align-items-end">
                        <div class="d-flex flex-between-center" data-quantity="data-quantity"><button class="btn btn-phoenix-primary px-3" data-type="minus"><span class="fas fa-minus"></span></button><input class="form-control text-center input-spin-none bg-transparent border-0 outline-none" style="width:50px;" type="number" min="1" value="2" /><button class="btn btn-phoenix-primary px-3" data-type="plus"><span class="fas fa-plus"></span></button></div><button class="btn btn-phoenix-primary px-3 border-0"><span class="fas fa-share-alt fs-1"></span></button>
                      </div> --}}
                    </div>
                  </div>

                  @include('markets.products.partials.map_google')
                </div>
              </div>
            </div>
            </div>
          </div>
        </div><!-- end of .container-->
      </div><!-- <section> close ============================-->
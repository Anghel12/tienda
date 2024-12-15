 {{-- swiper --}}
 <div class="row mb-4">
    <h5 class="text-white mb-2">Productos mas Populares:</h5>
      <div class="swiper swiper-container-products">
        
        <div class="swiper-wrapper ">
  
          @foreach ($views_products as $product)
          <div class="swiper-slide">
            <div class="minimalista-card col-lg-12">
              <div class="position-relative text-decoration-none product-card h-100">
                <div class="d-flex flex-column justify-content-between h-100">
                  <div class="">
                    <div class=" rounded-3 position-relative mb-3">
                  @if ($product->mainImage)
                  <picture>
                    {{-- <source srcset="{{ asset('storage/images/product-image.webp') }}" type="image/webp">
                    <source srcset="{{ asset('storage/images/product-image.avif') }}" type="image/avif"> --}}
                    <img loading="lazy" 
                         style="height:250px; width:100%" 
                         class="img-fluid card-img-top rounded-3" 
                         src="{{ $product->mainImage->url ?? 0 }}" 
                         alt="{{ $product->name }}">
                    </picture>
                  @else 
                  <img loading="lazy" 
                  style="height:250px; width:100%" 
                  class="img-fluid card-img-top rounded-3" 
                  src="https://img.freepik.com/vector-gratis/fondo-colores-diferentes-formas-abstractas_23-2149133887.jpg?t=st=1733455303~exp=1733458903~hmac=afadd8d3b9a9c128e942566bc45664ccfd3d8015490b902c3049070a50ee2029&w=900" 
                  alt="{{ $product->name }}">
  
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
                          
                      <h3 class="text-1100 mb-0 text-white">S/{{$product->product_price->final_price ?? null}}</h3>
                      <p class="me-2 p-2 text-900 text-decoration-line-through mb-0  text-warning opacity-50">{{$product->product_price->price_reciente ?? null}}</p> 
                    </div>
  
                      <div class="mb-3">
                        <p>Vistas: {{ $product->views_count }}</p>
                  {{--       <p class="fs--1 text-1000 fs--1 mb-2 fw-bold text-truncate text-white" style="max-width: 300px;">{!! $product->extract !!}</p>
                        <p class="fs--1 text-700 fs--1 mb-2">Categoria: {{$product->Category->name}}</p>
    
                        <p class="text-700 fw-semi-bold fs--1 lh-1 mb-0">Marca:{{$product->brand->title ?? 1}} </p> --}}
      
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
  
                             
               {{--      <p class="fs--1"><span class="fa fa-star text-warning"></span><span
                      class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span
                      class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span
                      class="text-500 fw-semi-bold ms-1">(64 people rated)</span>
                    </p> --}}
  
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
 {{-- swiper --}}
 @foreach ($prodcuts_categorias as $category)
 <h3 class="text-white mt-30">Categoria: <strong>{{ $category->name }}</strong> </h3>
 <div class="row gx-3 gy-7">
    <div class="swiper swiper-container-category">
      <div class="swiper-wrapper">

        @foreach ($category->products as $product)
        <div class=" swiper-slide">
          <div class="minimalista-card {{-- border border-1 --}} col-lg-12">


         
            <div class="position-relative text-decoration-none product-card h-100">
              <div class="d-flex flex-column justify-content-between h-100">
                <div class="">
                  <div class=" rounded-3 position-relative mb-3">
                    {{-- favoritos --}}
           {{--        <form method="POST" action="{{ route('admin.favorites.store') }}">
                      @csrf
                      <input type="hidden" name="item_id" value="{{ $product->id }}">
                      <button
                        class="btn rounded-circle p-0 d-flex flex-center btn-wish z-index-2 d-toggle-container btn-outline-primary"
                        type="submit" data-bs-toggle="tooltip" data-bs-placement="top" title="Add to wishlist">
                        <span class="fas fa-heart d-block-hover"></span><span class="far fa-heart d-none-hover"></span>
                      </button>
                    </form>  --}}

                  
{{-- 
                    <img style="height:200px" class="img-fluid rounded-3" src="{{Storage::url($post->images->url)}}"
                      alt="" /> --}}
                @if ($product->mainImage)
                  <img loading="lazy" style="height:250px; width: 100%" class="img-fluid rounded-3 card-img-top" 
                  src="{{ $product->mainImage->url ?? 0 }}"
                  alt="{{$product->name}}" />

                @else 
                {{-- <img style="height:250px; width: 100%" class="img-fluid rounded-3" src="https://scontent-lim1-1.xx.fbcdn.net/v/t39.30808-6/467027613_1102553974852518_1382895221943072708_n.jpg?_nc_cat=110&ccb=1-7&_nc_sid=454cf4&_nc_ohc=Qc89OBI--6gQ7kNvgFvN-bu&_nc_zt=23&_nc_ht=scontent-lim1-1.xx&_nc_gid=Ae8Jo-8_kzGjgXPkLAP2O8r&oh=00_AYDDPnwQtmqkJX7vw6lqI1OLZJL2Z3jlDhaulv4J4vUWlQ&oe=6749B9B6"
                alt="" /> --}}
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
                   
                        <p class="fs--1 text-1000 fs--1 mb-0 fw-bold text-truncate text-white" style="max-width: 300px;">{!! $product->extract !!}</p>
                        <p class="fs--1 text-700 fs--1 mb-2">Categoria: {{$product->category->name}}</p>
                        <p class="text-700 fw-semi-bold fs--1 lh-1 mb-0">{{$product->brand->title}}</p>
                        
      
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
         
       <div class="swiper-pagination">
        </div> 
    </div>

  </div>

  @endforeach
{{-- swiper --}}
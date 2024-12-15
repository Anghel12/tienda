<div>
   
  <div class="col-lg-3 col-xxl-2 ps-xxl-3">
    <div class="product-filter-offcanvas scrollbar phoenix-offcanvas phoenix-offcanvas-fixed" id="productFilterColumn">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h3 class="mb-0 text-white">Filtros</h3>
          <button class="btn d-lg-none p-0" data-phoenix-dismiss="offcanvas"><span class="uil uil-times fs-0"></span></button>
        </div>
             {{-- Categorias --}}
        <a class="btn d-block collapse-indicator wt" data-bs-toggle="collapse" href="products-filter.html#collapseCategories" role="button" aria-expanded="true" aria-controls="collapseBrands">
          <div class="d-flex align-items-center justify-content-between w-100">
            <div class="fs-0 text-1000 text-white">Categorias</div>
            <svg style="height: 30px;" class="svg-inline--fa fa-angle-down toggle-icon text-500" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="angle-down" role="img"
             xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" data-fa-i2svg=""><path fill="currentColor" 
             d="M192 384c-8.188 0-16.38-3.125-22.62-9.375l-160-160c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0L192 306.8l137.4-137.4c12.5-12.5 32.75-12.5 45.25 0s12.5 32.75 0 45.25l-160 160C208.4 380.9 200.2 384 192 384z"></path></svg><!-- <span class="fa-solid fa-angle-down toggle-icon text-500"></span> Font Awesome fontawesome.com -->
          </div>
        </a>
        <div class="collapse {{-- show --}}" id="collapseCategories">
          <div class="mb-2">
            @foreach ($filtro_categorias as $item)
            <div class="mb-2">
                <!-- Asegúrate de usar 'markets.categories.show' en lugar de 'markets.categorias.show' -->
                <a href="{{ route('markets.categories.show', $item->name ) }}" 
                   class="text-white text-decoration-none wt m-2">
                    {{ $item->name }}
                </a>
            </div>
        @endforeach
        
        
        
          </div>
        </div>
        {{-- Marcas --}}
  
        <a class="btn d-block collapse-indicator wt" data-bs-toggle="collapse" href="products-filter.html#collapseBrands" role="button" aria-expanded="true" aria-controls="collapseBrands">
          <div class="d-flex align-items-center justify-content-between w-100">
            <div class="fs-0 text-1000 text-white">Marcas</div>
            <svg style="height: 30px;" class="svg-inline--fa fa-angle-down toggle-icon text-500" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="angle-down" role="img"
             xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" data-fa-i2svg=""><path fill="currentColor" 
             d="M192 384c-8.188 0-16.38-3.125-22.62-9.375l-160-160c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0L192 306.8l137.4-137.4c12.5-12.5 32.75-12.5 45.25 0s12.5 32.75 0 45.25l-160 160C208.4 380.9 200.2 384 192 384z"></path></svg><!-- <span class="fa-solid fa-angle-down toggle-icon text-500"></span> Font Awesome fontawesome.com -->
          </div>
        </a>
  
        <div class="collapse {{-- show --}}" id="collapseBrands">
          <div class="mb-2 p-2">
            @foreach ($brands as $item)
            <div class="mb-2">
                <a href="" 
                   class="d-block lh-sm fs-0 text-900 fw-normal text-white text-decoration-none wt m-2">
                    {{ $item->title }}
                </a>
            </div>
         @endforeach
  
          </div>
        </div>
  
          {{-- tags --}}
          
        <a class="btn d-block collapse-indicator wt" data-bs-toggle="collapse" href="products-filter.html#collapsetags" role="button" aria-expanded="true" aria-controls="collapseBrands">
          <div class="d-flex align-items-center justify-content-between w-100">
            <div class="fs-0 text-1000 text-white">Tags</div>
            <svg style="height: 30px;" class="svg-inline--fa fa-angle-down toggle-icon text-500" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="angle-down" role="img"
             xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" data-fa-i2svg=""><path fill="currentColor" 
             d="M192 384c-8.188 0-16.38-3.125-22.62-9.375l-160-160c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0L192 306.8l137.4-137.4c12.5-12.5 32.75-12.5 45.25 0s12.5 32.75 0 45.25l-160 160C208.4 380.9 200.2 384 192 384z"></path></svg><!-- <span class="fa-solid fa-angle-down toggle-icon text-500"></span> Font Awesome fontawesome.com -->
          </div>
        </a>
  
        <div class="collapse {{-- show --}}" id="collapsetags">
          <div class="mb-2 p-2">
            @foreach ($tags as $item)
            <div class="mb-2">
                <a href="" 
                   class="d-block lh-sm fs-0 text-900 fw-normal text-white text-decoration-none wt m-2">
                    {{ $item->name }}
                </a>
            </div>
         @endforeach
  
          </div>
        </div>
  
          {{-- Condicion --}}
  
        <a class="btn d-block collapse-indicator  wt" data-bs-toggle="collapse" href="products-filter.html#collapseCondition" role="button" aria-expanded="true" aria-controls="collapseCondition">
          <div class="d-flex align-items-center justify-content-between w-100">
            <div class="fs-0 text-1000 text-white ">Condicion</div>
            <svg style="height: 30px;" class="svg-inline--fa fa-angle-down toggle-icon text-500" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="angle-down" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" data-fa-i2svg=""><path fill="currentColor" d="M192 384c-8.188 0-16.38-3.125-22.62-9.375l-160-160c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0L192 306.8l137.4-137.4c12.5-12.5 32.75-12.5 45.25 0s12.5 32.75 0 45.25l-160 160C208.4 380.9 200.2 384 192 384z"></path></svg><!-- <span class="fa-solid fa-angle-down toggle-icon text-500"></span> Font Awesome fontawesome.com -->
          </div>
        </a>
        <div class="collapse show" id="collapseCondition">
          <div class="mb-2 p-2">
            <div class="form-check mb-0 ">
              <input class="form-check-input" id="newInput" type="checkbox" name="condition" checked=""><label class="form-check-label d-block lh-sm fs-0 text-900 fw-normal mb-0 text-white" for="newInput">Nuevo</label></div>
            <div class="form-check mb-0 ">
              <input class="form-check-input" id="usedInput" type="checkbox" name="condition"><label class="form-check-label d-block lh-sm fs-0 text-900 fw-normal mb-0 text-white" for="usedInput">Usado</label></div>
            <div class="form-check mb-0 ">
              <input class="form-check-input" id="refurbrishedInput" type="checkbox" name="condition"><label class="form-check-label d-block lh-sm fs-0 text-900 fw-normal mb-0 text-white" for="refurbrishedInput">Restaurado</label></div>
          </div>
        </div>
  
        {{-- price, reseñas,  --}}
  
        <a class="btn d-block collapse-indicator wt" data-bs-toggle="collapse" href="products-filter.html#collapsePriceRange" role="button" aria-expanded="true" aria-controls="collapsePriceRange">
          <div class="d-flex align-items-center justify-content-between w-100">
            <div class="fs-0 text-1000 text-white">Precio</div><svg style="height: 30px;" class="svg-inline--fa fa-angle-down toggle-icon text-500" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="angle-down" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" data-fa-i2svg=""><path fill="currentColor" d="M192 384c-8.188 0-16.38-3.125-22.62-9.375l-160-160c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0L192 306.8l137.4-137.4c12.5-12.5 32.75-12.5 45.25 0s12.5 32.75 0 45.25l-160 160C208.4 380.9 200.2 384 192 384z"></path></svg><!-- <span class="fa-solid fa-angle-down toggle-icon text-500"></span> Font Awesome fontawesome.com -->
          </div>
        </a>
        <div class="collapse show mt-4 mb-4" id="collapsePriceRange">
          <div class="d-flex justify-content-between mb-3">
            <div class="input-group me-2"><input class="form-control" type="text" aria-label="First name" placeholder="Min"><input class="form-control" type="text" aria-label="Last name" placeholder="Max"></div><button class="btn btn-primary border-300 px-3" type="button">Go</button>
          </div>
        </div>
  
        @auth
        @if (Auth::user()->hasRole('Admin'))
        <a class="btn d-block btn-success radius-50  wt" href="{{ route('admin.products.create') }}">Crear Un Producto +</a>
        @endif
        @endauth
      
      
  
      </div>
      
      <style>
        .collapse-indicator{
          border: 1px solid #161616;
          margin-top: 10px;
          border-radius:20px;
        }
        .wt {
          display: block; /* Hace que el enlace ocupe todo el ancho disponible */
          padding: 5px;  /* Espaciado alrededor del enlace */
        }
      
        .wt:hover{
          background: #4e4e4e; /* Color de fondo al pasar el mouse */
          text-decoration: none; /* Evita subrayado adicional */
          border-radius:20px; /* Bordes más redondeados al hacer hover (opcional) */
        }
      </style>
  
  
  
      </div>
      <div class="phoenix-offcanvas-backdrop d-lg-none" data-phoenix-backdrop=""></div>
  
      
</div>

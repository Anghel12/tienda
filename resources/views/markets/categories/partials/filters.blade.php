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
    
    
       {{--  <a class="btn d-block collapse-indicator  wt " data-bs-toggle="collapse" href="products-filter.html#collapseDisplayType" role="button" aria-expanded="true" aria-controls="collapseDisplayType">
        <div class="d-flex align-items-center justify-content-between w-100">
          <div class="fs-0 text-1000 text-white">Display type</div><svg style="height: 30px;" class="svg-inline--fa fa-angle-down toggle-icon text-500" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="angle-down" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" data-fa-i2svg=""><path fill="currentColor" d="M192 384c-8.188 0-16.38-3.125-22.62-9.375l-160-160c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0L192 306.8l137.4-137.4c12.5-12.5 32.75-12.5 45.25 0s12.5 32.75 0 45.25l-160 160C208.4 380.9 200.2 384 192 384z"></path></svg><!-- <span class="fa-solid fa-angle-down toggle-icon text-500"></span> Font Awesome fontawesome.com -->
        </div>
      </a>
      <div class="collapse" id="collapseDisplayType">
        <div class="mb-2">
          <div class="form-check mb-0"><input class="form-check-input mt-0" id="lcdInput" type="checkbox" name="displayType" checked=""><label class="form-check-label d-block lh-sm fs-0 text-900 fw-normal mb-0" for="lcdInput">LCD</label></div>
          <div class="form-check mb-0"><input class="form-check-input mt-0" id="ipsInput" type="checkbox" name="displayType"><label class="form-check-label d-block lh-sm fs-0 text-900 fw-normal mb-0" for="ipsInput">IPS</label></div>
          <div class="form-check mb-0"><input class="form-check-input mt-0" id="oledInput" type="checkbox" name="displayType"><label class="form-check-label d-block lh-sm fs-0 text-900 fw-normal mb-0" for="oledInput">OLED</label></div>
          <div class="form-check mb-0"><input class="form-check-input mt-0" id="amoledInput" type="checkbox" name="displayType"><label class="form-check-label d-block lh-sm fs-0 text-900 fw-normal mb-0" for="amoledInput">AMOLED</label></div>
          <div class="form-check mb-0"><input class="form-check-input mt-0" id="retinaInput" type="checkbox" name="displayType"><label class="form-check-label d-block lh-sm fs-0 text-900 fw-normal mb-0" for="retinaInput">Retina</label></div>
        </div>
      </div>
    <a class="btn d-block collapse-indicator  wt " data-bs-toggle="collapse" href="products-filter.html#collapseRating" role="button" aria-expanded="true" aria-controls="collapseRating">
        <div class="d-flex align-items-center justify-content-between w-100">
          <div class="fs-0 text-1000 text-white">Rating</div><svg style="height: 30px;" class="svg-inline--fa fa-angle-down toggle-icon text-500" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="angle-down" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" data-fa-i2svg=""><path fill="currentColor" d="M192 384c-8.188 0-16.38-3.125-22.62-9.375l-160-160c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0L192 306.8l137.4-137.4c12.5-12.5 32.75-12.5 45.25 0s12.5 32.75 0 45.25l-160 160C208.4 380.9 200.2 384 192 384z"></path></svg><!-- <span class="fa-solid fa-angle-down toggle-icon text-500"></span> Font Awesome fontawesome.com -->
        </div>
      </a>
      <div class="collapse" id="collapseRating">
        <div class="d-flex align-items-center mb-1"><input class="form-check-input me-3" id="flexRadio1" type="radio" name="flexRadio"><svg class="svg-inline--fa fa-star text-warning fs--1 me-1" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path fill="currentColor" d="M381.2 150.3L524.9 171.5C536.8 173.2 546.8 181.6 550.6 193.1C554.4 204.7 551.3 217.3 542.7 225.9L438.5 328.1L463.1 474.7C465.1 486.7 460.2 498.9 450.2 506C440.3 513.1 427.2 514 416.5 508.3L288.1 439.8L159.8 508.3C149 514 135.9 513.1 126 506C116.1 498.9 111.1 486.7 113.2 474.7L137.8 328.1L33.58 225.9C24.97 217.3 21.91 204.7 25.69 193.1C29.46 181.6 39.43 173.2 51.42 171.5L195 150.3L259.4 17.97C264.7 6.954 275.9-.0391 288.1-.0391C300.4-.0391 311.6 6.954 316.9 17.97L381.2 150.3z"></path></svg><!-- <span class="fa fa-star text-warning fs--1 me-1"></span> Font Awesome fontawesome.com --><svg class="svg-inline--fa fa-star text-warning fs--1 me-1" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path fill="currentColor" d="M381.2 150.3L524.9 171.5C536.8 173.2 546.8 181.6 550.6 193.1C554.4 204.7 551.3 217.3 542.7 225.9L438.5 328.1L463.1 474.7C465.1 486.7 460.2 498.9 450.2 506C440.3 513.1 427.2 514 416.5 508.3L288.1 439.8L159.8 508.3C149 514 135.9 513.1 126 506C116.1 498.9 111.1 486.7 113.2 474.7L137.8 328.1L33.58 225.9C24.97 217.3 21.91 204.7 25.69 193.1C29.46 181.6 39.43 173.2 51.42 171.5L195 150.3L259.4 17.97C264.7 6.954 275.9-.0391 288.1-.0391C300.4-.0391 311.6 6.954 316.9 17.97L381.2 150.3z"></path></svg><!-- <span class="fa fa-star text-warning fs--1 me-1"></span> Font Awesome fontawesome.com --><svg class="svg-inline--fa fa-star text-warning fs--1 me-1" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path fill="currentColor" d="M381.2 150.3L524.9 171.5C536.8 173.2 546.8 181.6 550.6 193.1C554.4 204.7 551.3 217.3 542.7 225.9L438.5 328.1L463.1 474.7C465.1 486.7 460.2 498.9 450.2 506C440.3 513.1 427.2 514 416.5 508.3L288.1 439.8L159.8 508.3C149 514 135.9 513.1 126 506C116.1 498.9 111.1 486.7 113.2 474.7L137.8 328.1L33.58 225.9C24.97 217.3 21.91 204.7 25.69 193.1C29.46 181.6 39.43 173.2 51.42 171.5L195 150.3L259.4 17.97C264.7 6.954 275.9-.0391 288.1-.0391C300.4-.0391 311.6 6.954 316.9 17.97L381.2 150.3z"></path></svg><!-- <span class="fa fa-star text-warning fs--1 me-1"></span> Font Awesome fontawesome.com --><svg class="svg-inline--fa fa-star text-warning fs--1 me-1" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path fill="currentColor" d="M381.2 150.3L524.9 171.5C536.8 173.2 546.8 181.6 550.6 193.1C554.4 204.7 551.3 217.3 542.7 225.9L438.5 328.1L463.1 474.7C465.1 486.7 460.2 498.9 450.2 506C440.3 513.1 427.2 514 416.5 508.3L288.1 439.8L159.8 508.3C149 514 135.9 513.1 126 506C116.1 498.9 111.1 486.7 113.2 474.7L137.8 328.1L33.58 225.9C24.97 217.3 21.91 204.7 25.69 193.1C29.46 181.6 39.43 173.2 51.42 171.5L195 150.3L259.4 17.97C264.7 6.954 275.9-.0391 288.1-.0391C300.4-.0391 311.6 6.954 316.9 17.97L381.2 150.3z"></path></svg><!-- <span class="fa fa-star text-warning fs--1 me-1"></span> Font Awesome fontawesome.com --><svg class="svg-inline--fa fa-star text-warning fs--1 me-1" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path fill="currentColor" d="M381.2 150.3L524.9 171.5C536.8 173.2 546.8 181.6 550.6 193.1C554.4 204.7 551.3 217.3 542.7 225.9L438.5 328.1L463.1 474.7C465.1 486.7 460.2 498.9 450.2 506C440.3 513.1 427.2 514 416.5 508.3L288.1 439.8L159.8 508.3C149 514 135.9 513.1 126 506C116.1 498.9 111.1 486.7 113.2 474.7L137.8 328.1L33.58 225.9C24.97 217.3 21.91 204.7 25.69 193.1C29.46 181.6 39.43 173.2 51.42 171.5L195 150.3L259.4 17.97C264.7 6.954 275.9-.0391 288.1-.0391C300.4-.0391 311.6 6.954 316.9 17.97L381.2 150.3z"></path></svg><!-- <span class="fa fa-star text-warning fs--1 me-1"></span> Font Awesome fontawesome.com --></div>
        <div class="d-flex align-items-center mb-1"><input class="form-check-input me-3" id="flexRadio2" type="radio" name="flexRadio"><svg class="svg-inline--fa fa-star text-warning fs--1 me-1" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path fill="currentColor" d="M381.2 150.3L524.9 171.5C536.8 173.2 546.8 181.6 550.6 193.1C554.4 204.7 551.3 217.3 542.7 225.9L438.5 328.1L463.1 474.7C465.1 486.7 460.2 498.9 450.2 506C440.3 513.1 427.2 514 416.5 508.3L288.1 439.8L159.8 508.3C149 514 135.9 513.1 126 506C116.1 498.9 111.1 486.7 113.2 474.7L137.8 328.1L33.58 225.9C24.97 217.3 21.91 204.7 25.69 193.1C29.46 181.6 39.43 173.2 51.42 171.5L195 150.3L259.4 17.97C264.7 6.954 275.9-.0391 288.1-.0391C300.4-.0391 311.6 6.954 316.9 17.97L381.2 150.3z"></path></svg><!-- <span class="fa fa-star text-warning fs--1 me-1"></span> Font Awesome fontawesome.com --><svg class="svg-inline--fa fa-star text-warning fs--1 me-1" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path fill="currentColor" d="M381.2 150.3L524.9 171.5C536.8 173.2 546.8 181.6 550.6 193.1C554.4 204.7 551.3 217.3 542.7 225.9L438.5 328.1L463.1 474.7C465.1 486.7 460.2 498.9 450.2 506C440.3 513.1 427.2 514 416.5 508.3L288.1 439.8L159.8 508.3C149 514 135.9 513.1 126 506C116.1 498.9 111.1 486.7 113.2 474.7L137.8 328.1L33.58 225.9C24.97 217.3 21.91 204.7 25.69 193.1C29.46 181.6 39.43 173.2 51.42 171.5L195 150.3L259.4 17.97C264.7 6.954 275.9-.0391 288.1-.0391C300.4-.0391 311.6 6.954 316.9 17.97L381.2 150.3z"></path></svg><!-- <span class="fa fa-star text-warning fs--1 me-1"></span> Font Awesome fontawesome.com --><svg class="svg-inline--fa fa-star text-warning fs--1 me-1" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path fill="currentColor" d="M381.2 150.3L524.9 171.5C536.8 173.2 546.8 181.6 550.6 193.1C554.4 204.7 551.3 217.3 542.7 225.9L438.5 328.1L463.1 474.7C465.1 486.7 460.2 498.9 450.2 506C440.3 513.1 427.2 514 416.5 508.3L288.1 439.8L159.8 508.3C149 514 135.9 513.1 126 506C116.1 498.9 111.1 486.7 113.2 474.7L137.8 328.1L33.58 225.9C24.97 217.3 21.91 204.7 25.69 193.1C29.46 181.6 39.43 173.2 51.42 171.5L195 150.3L259.4 17.97C264.7 6.954 275.9-.0391 288.1-.0391C300.4-.0391 311.6 6.954 316.9 17.97L381.2 150.3z"></path></svg><!-- <span class="fa fa-star text-warning fs--1 me-1"></span> Font Awesome fontawesome.com --><svg class="svg-inline--fa fa-star text-warning fs--1 me-1" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path fill="currentColor" d="M381.2 150.3L524.9 171.5C536.8 173.2 546.8 181.6 550.6 193.1C554.4 204.7 551.3 217.3 542.7 225.9L438.5 328.1L463.1 474.7C465.1 486.7 460.2 498.9 450.2 506C440.3 513.1 427.2 514 416.5 508.3L288.1 439.8L159.8 508.3C149 514 135.9 513.1 126 506C116.1 498.9 111.1 486.7 113.2 474.7L137.8 328.1L33.58 225.9C24.97 217.3 21.91 204.7 25.69 193.1C29.46 181.6 39.43 173.2 51.42 171.5L195 150.3L259.4 17.97C264.7 6.954 275.9-.0391 288.1-.0391C300.4-.0391 311.6 6.954 316.9 17.97L381.2 150.3z"></path></svg><!-- <span class="fa fa-star text-warning fs--1 me-1"></span> Font Awesome fontawesome.com --><svg class="svg-inline--fa fa-star text-warning-300 fs--1 me-1" aria-hidden="true" focusable="false" data-prefix="far" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path fill="currentColor" d="M287.9 0C297.1 0 305.5 5.25 309.5 13.52L378.1 154.8L531.4 177.5C540.4 178.8 547.8 185.1 550.7 193.7C553.5 202.4 551.2 211.9 544.8 218.2L433.6 328.4L459.9 483.9C461.4 492.9 457.7 502.1 450.2 507.4C442.8 512.7 432.1 513.4 424.9 509.1L287.9 435.9L150.1 509.1C142.9 513.4 133.1 512.7 125.6 507.4C118.2 502.1 114.5 492.9 115.1 483.9L142.2 328.4L31.11 218.2C24.65 211.9 22.36 202.4 25.2 193.7C28.03 185.1 35.5 178.8 44.49 177.5L197.7 154.8L266.3 13.52C270.4 5.249 278.7 0 287.9 0L287.9 0zM287.9 78.95L235.4 187.2C231.9 194.3 225.1 199.3 217.3 200.5L98.98 217.9L184.9 303C190.4 308.5 192.9 316.4 191.6 324.1L171.4 443.7L276.6 387.5C283.7 383.7 292.2 383.7 299.2 387.5L404.4 443.7L384.2 324.1C382.9 316.4 385.5 308.5 391 303L476.9 217.9L358.6 200.5C350.7 199.3 343.9 194.3 340.5 187.2L287.9 78.95z"></path></svg><!-- <span class="fa-regular fa-star text-warning-300 fs--1 me-1"></span> Font Awesome fontawesome.com -->
          <p class="ms-1 mb-0">&amp; above</p>
        </div>
        <div class="d-flex align-items-center mb-1"><input class="form-check-input me-3" id="flexRadio3" type="radio" name="flexRadio"><svg class="svg-inline--fa fa-star text-warning fs--1 me-1" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path fill="currentColor" d="M381.2 150.3L524.9 171.5C536.8 173.2 546.8 181.6 550.6 193.1C554.4 204.7 551.3 217.3 542.7 225.9L438.5 328.1L463.1 474.7C465.1 486.7 460.2 498.9 450.2 506C440.3 513.1 427.2 514 416.5 508.3L288.1 439.8L159.8 508.3C149 514 135.9 513.1 126 506C116.1 498.9 111.1 486.7 113.2 474.7L137.8 328.1L33.58 225.9C24.97 217.3 21.91 204.7 25.69 193.1C29.46 181.6 39.43 173.2 51.42 171.5L195 150.3L259.4 17.97C264.7 6.954 275.9-.0391 288.1-.0391C300.4-.0391 311.6 6.954 316.9 17.97L381.2 150.3z"></path></svg><!-- <span class="fa fa-star text-warning fs--1 me-1"></span> Font Awesome fontawesome.com --><svg class="svg-inline--fa fa-star text-warning fs--1 me-1" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path fill="currentColor" d="M381.2 150.3L524.9 171.5C536.8 173.2 546.8 181.6 550.6 193.1C554.4 204.7 551.3 217.3 542.7 225.9L438.5 328.1L463.1 474.7C465.1 486.7 460.2 498.9 450.2 506C440.3 513.1 427.2 514 416.5 508.3L288.1 439.8L159.8 508.3C149 514 135.9 513.1 126 506C116.1 498.9 111.1 486.7 113.2 474.7L137.8 328.1L33.58 225.9C24.97 217.3 21.91 204.7 25.69 193.1C29.46 181.6 39.43 173.2 51.42 171.5L195 150.3L259.4 17.97C264.7 6.954 275.9-.0391 288.1-.0391C300.4-.0391 311.6 6.954 316.9 17.97L381.2 150.3z"></path></svg><!-- <span class="fa fa-star text-warning fs--1 me-1"></span> Font Awesome fontawesome.com --><svg class="svg-inline--fa fa-star text-warning fs--1 me-1" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path fill="currentColor" d="M381.2 150.3L524.9 171.5C536.8 173.2 546.8 181.6 550.6 193.1C554.4 204.7 551.3 217.3 542.7 225.9L438.5 328.1L463.1 474.7C465.1 486.7 460.2 498.9 450.2 506C440.3 513.1 427.2 514 416.5 508.3L288.1 439.8L159.8 508.3C149 514 135.9 513.1 126 506C116.1 498.9 111.1 486.7 113.2 474.7L137.8 328.1L33.58 225.9C24.97 217.3 21.91 204.7 25.69 193.1C29.46 181.6 39.43 173.2 51.42 171.5L195 150.3L259.4 17.97C264.7 6.954 275.9-.0391 288.1-.0391C300.4-.0391 311.6 6.954 316.9 17.97L381.2 150.3z"></path></svg><!-- <span class="fa fa-star text-warning fs--1 me-1"></span> Font Awesome fontawesome.com --><svg class="svg-inline--fa fa-star text-warning-300 fs--1 me-1" aria-hidden="true" focusable="false" data-prefix="far" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path fill="currentColor" d="M287.9 0C297.1 0 305.5 5.25 309.5 13.52L378.1 154.8L531.4 177.5C540.4 178.8 547.8 185.1 550.7 193.7C553.5 202.4 551.2 211.9 544.8 218.2L433.6 328.4L459.9 483.9C461.4 492.9 457.7 502.1 450.2 507.4C442.8 512.7 432.1 513.4 424.9 509.1L287.9 435.9L150.1 509.1C142.9 513.4 133.1 512.7 125.6 507.4C118.2 502.1 114.5 492.9 115.1 483.9L142.2 328.4L31.11 218.2C24.65 211.9 22.36 202.4 25.2 193.7C28.03 185.1 35.5 178.8 44.49 177.5L197.7 154.8L266.3 13.52C270.4 5.249 278.7 0 287.9 0L287.9 0zM287.9 78.95L235.4 187.2C231.9 194.3 225.1 199.3 217.3 200.5L98.98 217.9L184.9 303C190.4 308.5 192.9 316.4 191.6 324.1L171.4 443.7L276.6 387.5C283.7 383.7 292.2 383.7 299.2 387.5L404.4 443.7L384.2 324.1C382.9 316.4 385.5 308.5 391 303L476.9 217.9L358.6 200.5C350.7 199.3 343.9 194.3 340.5 187.2L287.9 78.95z"></path></svg><!-- <span class="fa-regular fa-star text-warning-300 fs--1 me-1"></span> Font Awesome fontawesome.com --><svg class="svg-inline--fa fa-star text-warning-300 fs--1 me-1" aria-hidden="true" focusable="false" data-prefix="far" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path fill="currentColor" d="M287.9 0C297.1 0 305.5 5.25 309.5 13.52L378.1 154.8L531.4 177.5C540.4 178.8 547.8 185.1 550.7 193.7C553.5 202.4 551.2 211.9 544.8 218.2L433.6 328.4L459.9 483.9C461.4 492.9 457.7 502.1 450.2 507.4C442.8 512.7 432.1 513.4 424.9 509.1L287.9 435.9L150.1 509.1C142.9 513.4 133.1 512.7 125.6 507.4C118.2 502.1 114.5 492.9 115.1 483.9L142.2 328.4L31.11 218.2C24.65 211.9 22.36 202.4 25.2 193.7C28.03 185.1 35.5 178.8 44.49 177.5L197.7 154.8L266.3 13.52C270.4 5.249 278.7 0 287.9 0L287.9 0zM287.9 78.95L235.4 187.2C231.9 194.3 225.1 199.3 217.3 200.5L98.98 217.9L184.9 303C190.4 308.5 192.9 316.4 191.6 324.1L171.4 443.7L276.6 387.5C283.7 383.7 292.2 383.7 299.2 387.5L404.4 443.7L384.2 324.1C382.9 316.4 385.5 308.5 391 303L476.9 217.9L358.6 200.5C350.7 199.3 343.9 194.3 340.5 187.2L287.9 78.95z"></path></svg><!-- <span class="fa-regular fa-star text-warning-300 fs--1 me-1"></span> Font Awesome fontawesome.com -->
          <p class="ms-1 mb-0">&amp; above </p>
        </div>
        <div class="d-flex align-items-center mb-1"><input class="form-check-input me-3" id="flexRadio4" type="radio" name="flexRadio"><svg class="svg-inline--fa fa-star text-warning fs--1 me-1" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path fill="currentColor" d="M381.2 150.3L524.9 171.5C536.8 173.2 546.8 181.6 550.6 193.1C554.4 204.7 551.3 217.3 542.7 225.9L438.5 328.1L463.1 474.7C465.1 486.7 460.2 498.9 450.2 506C440.3 513.1 427.2 514 416.5 508.3L288.1 439.8L159.8 508.3C149 514 135.9 513.1 126 506C116.1 498.9 111.1 486.7 113.2 474.7L137.8 328.1L33.58 225.9C24.97 217.3 21.91 204.7 25.69 193.1C29.46 181.6 39.43 173.2 51.42 171.5L195 150.3L259.4 17.97C264.7 6.954 275.9-.0391 288.1-.0391C300.4-.0391 311.6 6.954 316.9 17.97L381.2 150.3z"></path></svg><!-- <span class="fa fa-star text-warning fs--1 me-1"></span> Font Awesome fontawesome.com --><svg class="svg-inline--fa fa-star text-warning fs--1 me-1" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path fill="currentColor" d="M381.2 150.3L524.9 171.5C536.8 173.2 546.8 181.6 550.6 193.1C554.4 204.7 551.3 217.3 542.7 225.9L438.5 328.1L463.1 474.7C465.1 486.7 460.2 498.9 450.2 506C440.3 513.1 427.2 514 416.5 508.3L288.1 439.8L159.8 508.3C149 514 135.9 513.1 126 506C116.1 498.9 111.1 486.7 113.2 474.7L137.8 328.1L33.58 225.9C24.97 217.3 21.91 204.7 25.69 193.1C29.46 181.6 39.43 173.2 51.42 171.5L195 150.3L259.4 17.97C264.7 6.954 275.9-.0391 288.1-.0391C300.4-.0391 311.6 6.954 316.9 17.97L381.2 150.3z"></path></svg><!-- <span class="fa fa-star text-warning fs--1 me-1"></span> Font Awesome fontawesome.com --><svg class="svg-inline--fa fa-star text-warning-300 fs--1 me-1" aria-hidden="true" focusable="false" data-prefix="far" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path fill="currentColor" d="M287.9 0C297.1 0 305.5 5.25 309.5 13.52L378.1 154.8L531.4 177.5C540.4 178.8 547.8 185.1 550.7 193.7C553.5 202.4 551.2 211.9 544.8 218.2L433.6 328.4L459.9 483.9C461.4 492.9 457.7 502.1 450.2 507.4C442.8 512.7 432.1 513.4 424.9 509.1L287.9 435.9L150.1 509.1C142.9 513.4 133.1 512.7 125.6 507.4C118.2 502.1 114.5 492.9 115.1 483.9L142.2 328.4L31.11 218.2C24.65 211.9 22.36 202.4 25.2 193.7C28.03 185.1 35.5 178.8 44.49 177.5L197.7 154.8L266.3 13.52C270.4 5.249 278.7 0 287.9 0L287.9 0zM287.9 78.95L235.4 187.2C231.9 194.3 225.1 199.3 217.3 200.5L98.98 217.9L184.9 303C190.4 308.5 192.9 316.4 191.6 324.1L171.4 443.7L276.6 387.5C283.7 383.7 292.2 383.7 299.2 387.5L404.4 443.7L384.2 324.1C382.9 316.4 385.5 308.5 391 303L476.9 217.9L358.6 200.5C350.7 199.3 343.9 194.3 340.5 187.2L287.9 78.95z"></path></svg><!-- <span class="fa-regular fa-star text-warning-300 fs--1 me-1"></span> Font Awesome fontawesome.com --><svg class="svg-inline--fa fa-star text-warning-300 fs--1 me-1" aria-hidden="true" focusable="false" data-prefix="far" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path fill="currentColor" d="M287.9 0C297.1 0 305.5 5.25 309.5 13.52L378.1 154.8L531.4 177.5C540.4 178.8 547.8 185.1 550.7 193.7C553.5 202.4 551.2 211.9 544.8 218.2L433.6 328.4L459.9 483.9C461.4 492.9 457.7 502.1 450.2 507.4C442.8 512.7 432.1 513.4 424.9 509.1L287.9 435.9L150.1 509.1C142.9 513.4 133.1 512.7 125.6 507.4C118.2 502.1 114.5 492.9 115.1 483.9L142.2 328.4L31.11 218.2C24.65 211.9 22.36 202.4 25.2 193.7C28.03 185.1 35.5 178.8 44.49 177.5L197.7 154.8L266.3 13.52C270.4 5.249 278.7 0 287.9 0L287.9 0zM287.9 78.95L235.4 187.2C231.9 194.3 225.1 199.3 217.3 200.5L98.98 217.9L184.9 303C190.4 308.5 192.9 316.4 191.6 324.1L171.4 443.7L276.6 387.5C283.7 383.7 292.2 383.7 299.2 387.5L404.4 443.7L384.2 324.1C382.9 316.4 385.5 308.5 391 303L476.9 217.9L358.6 200.5C350.7 199.3 343.9 194.3 340.5 187.2L287.9 78.95z"></path></svg><!-- <span class="fa-regular fa-star text-warning-300 fs--1 me-1"></span> Font Awesome fontawesome.com --><svg class="svg-inline--fa fa-star text-warning-300 fs--1 me-1" aria-hidden="true" focusable="false" data-prefix="far" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path fill="currentColor" d="M287.9 0C297.1 0 305.5 5.25 309.5 13.52L378.1 154.8L531.4 177.5C540.4 178.8 547.8 185.1 550.7 193.7C553.5 202.4 551.2 211.9 544.8 218.2L433.6 328.4L459.9 483.9C461.4 492.9 457.7 502.1 450.2 507.4C442.8 512.7 432.1 513.4 424.9 509.1L287.9 435.9L150.1 509.1C142.9 513.4 133.1 512.7 125.6 507.4C118.2 502.1 114.5 492.9 115.1 483.9L142.2 328.4L31.11 218.2C24.65 211.9 22.36 202.4 25.2 193.7C28.03 185.1 35.5 178.8 44.49 177.5L197.7 154.8L266.3 13.52C270.4 5.249 278.7 0 287.9 0L287.9 0zM287.9 78.95L235.4 187.2C231.9 194.3 225.1 199.3 217.3 200.5L98.98 217.9L184.9 303C190.4 308.5 192.9 316.4 191.6 324.1L171.4 443.7L276.6 387.5C283.7 383.7 292.2 383.7 299.2 387.5L404.4 443.7L384.2 324.1C382.9 316.4 385.5 308.5 391 303L476.9 217.9L358.6 200.5C350.7 199.3 343.9 194.3 340.5 187.2L287.9 78.95z"></path></svg><!-- <span class="fa-regular fa-star text-warning-300 fs--1 me-1"></span> Font Awesome fontawesome.com -->
          <p class="ms-1 mb-0">&amp; above</p>
        </div>
        <div class="d-flex align-items-center mb-3"><input class="form-check-input me-3" id="flexRadio5" type="radio" name="flexRadio"><svg class="svg-inline--fa fa-star text-warning fs--1 me-1" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path fill="currentColor" d="M381.2 150.3L524.9 171.5C536.8 173.2 546.8 181.6 550.6 193.1C554.4 204.7 551.3 217.3 542.7 225.9L438.5 328.1L463.1 474.7C465.1 486.7 460.2 498.9 450.2 506C440.3 513.1 427.2 514 416.5 508.3L288.1 439.8L159.8 508.3C149 514 135.9 513.1 126 506C116.1 498.9 111.1 486.7 113.2 474.7L137.8 328.1L33.58 225.9C24.97 217.3 21.91 204.7 25.69 193.1C29.46 181.6 39.43 173.2 51.42 171.5L195 150.3L259.4 17.97C264.7 6.954 275.9-.0391 288.1-.0391C300.4-.0391 311.6 6.954 316.9 17.97L381.2 150.3z"></path></svg><!-- <span class="fa fa-star text-warning fs--1 me-1"></span> Font Awesome fontawesome.com --><svg class="svg-inline--fa fa-star text-warning-300 fs--1 me-1" aria-hidden="true" focusable="false" data-prefix="far" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path fill="currentColor" d="M287.9 0C297.1 0 305.5 5.25 309.5 13.52L378.1 154.8L531.4 177.5C540.4 178.8 547.8 185.1 550.7 193.7C553.5 202.4 551.2 211.9 544.8 218.2L433.6 328.4L459.9 483.9C461.4 492.9 457.7 502.1 450.2 507.4C442.8 512.7 432.1 513.4 424.9 509.1L287.9 435.9L150.1 509.1C142.9 513.4 133.1 512.7 125.6 507.4C118.2 502.1 114.5 492.9 115.1 483.9L142.2 328.4L31.11 218.2C24.65 211.9 22.36 202.4 25.2 193.7C28.03 185.1 35.5 178.8 44.49 177.5L197.7 154.8L266.3 13.52C270.4 5.249 278.7 0 287.9 0L287.9 0zM287.9 78.95L235.4 187.2C231.9 194.3 225.1 199.3 217.3 200.5L98.98 217.9L184.9 303C190.4 308.5 192.9 316.4 191.6 324.1L171.4 443.7L276.6 387.5C283.7 383.7 292.2 383.7 299.2 387.5L404.4 443.7L384.2 324.1C382.9 316.4 385.5 308.5 391 303L476.9 217.9L358.6 200.5C350.7 199.3 343.9 194.3 340.5 187.2L287.9 78.95z"></path></svg><!-- <span class="fa-regular fa-star text-warning-300 fs--1 me-1"></span> Font Awesome fontawesome.com --><svg class="svg-inline--fa fa-star text-warning-300 fs--1 me-1" aria-hidden="true" focusable="false" data-prefix="far" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path fill="currentColor" d="M287.9 0C297.1 0 305.5 5.25 309.5 13.52L378.1 154.8L531.4 177.5C540.4 178.8 547.8 185.1 550.7 193.7C553.5 202.4 551.2 211.9 544.8 218.2L433.6 328.4L459.9 483.9C461.4 492.9 457.7 502.1 450.2 507.4C442.8 512.7 432.1 513.4 424.9 509.1L287.9 435.9L150.1 509.1C142.9 513.4 133.1 512.7 125.6 507.4C118.2 502.1 114.5 492.9 115.1 483.9L142.2 328.4L31.11 218.2C24.65 211.9 22.36 202.4 25.2 193.7C28.03 185.1 35.5 178.8 44.49 177.5L197.7 154.8L266.3 13.52C270.4 5.249 278.7 0 287.9 0L287.9 0zM287.9 78.95L235.4 187.2C231.9 194.3 225.1 199.3 217.3 200.5L98.98 217.9L184.9 303C190.4 308.5 192.9 316.4 191.6 324.1L171.4 443.7L276.6 387.5C283.7 383.7 292.2 383.7 299.2 387.5L404.4 443.7L384.2 324.1C382.9 316.4 385.5 308.5 391 303L476.9 217.9L358.6 200.5C350.7 199.3 343.9 194.3 340.5 187.2L287.9 78.95z"></path></svg><!-- <span class="fa-regular fa-star text-warning-300 fs--1 me-1"></span> Font Awesome fontawesome.com --><svg class="svg-inline--fa fa-star text-warning-300 fs--1 me-1" aria-hidden="true" focusable="false" data-prefix="far" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path fill="currentColor" d="M287.9 0C297.1 0 305.5 5.25 309.5 13.52L378.1 154.8L531.4 177.5C540.4 178.8 547.8 185.1 550.7 193.7C553.5 202.4 551.2 211.9 544.8 218.2L433.6 328.4L459.9 483.9C461.4 492.9 457.7 502.1 450.2 507.4C442.8 512.7 432.1 513.4 424.9 509.1L287.9 435.9L150.1 509.1C142.9 513.4 133.1 512.7 125.6 507.4C118.2 502.1 114.5 492.9 115.1 483.9L142.2 328.4L31.11 218.2C24.65 211.9 22.36 202.4 25.2 193.7C28.03 185.1 35.5 178.8 44.49 177.5L197.7 154.8L266.3 13.52C270.4 5.249 278.7 0 287.9 0L287.9 0zM287.9 78.95L235.4 187.2C231.9 194.3 225.1 199.3 217.3 200.5L98.98 217.9L184.9 303C190.4 308.5 192.9 316.4 191.6 324.1L171.4 443.7L276.6 387.5C283.7 383.7 292.2 383.7 299.2 387.5L404.4 443.7L384.2 324.1C382.9 316.4 385.5 308.5 391 303L476.9 217.9L358.6 200.5C350.7 199.3 343.9 194.3 340.5 187.2L287.9 78.95z"></path></svg><!-- <span class="fa-regular fa-star text-warning-300 fs--1 me-1"></span> Font Awesome fontawesome.com --><svg class="svg-inline--fa fa-star text-warning-300 fs--1 me-1" aria-hidden="true" focusable="false" data-prefix="far" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path fill="currentColor" d="M287.9 0C297.1 0 305.5 5.25 309.5 13.52L378.1 154.8L531.4 177.5C540.4 178.8 547.8 185.1 550.7 193.7C553.5 202.4 551.2 211.9 544.8 218.2L433.6 328.4L459.9 483.9C461.4 492.9 457.7 502.1 450.2 507.4C442.8 512.7 432.1 513.4 424.9 509.1L287.9 435.9L150.1 509.1C142.9 513.4 133.1 512.7 125.6 507.4C118.2 502.1 114.5 492.9 115.1 483.9L142.2 328.4L31.11 218.2C24.65 211.9 22.36 202.4 25.2 193.7C28.03 185.1 35.5 178.8 44.49 177.5L197.7 154.8L266.3 13.52C270.4 5.249 278.7 0 287.9 0L287.9 0zM287.9 78.95L235.4 187.2C231.9 194.3 225.1 199.3 217.3 200.5L98.98 217.9L184.9 303C190.4 308.5 192.9 316.4 191.6 324.1L171.4 443.7L276.6 387.5C283.7 383.7 292.2 383.7 299.2 387.5L404.4 443.7L384.2 324.1C382.9 316.4 385.5 308.5 391 303L476.9 217.9L358.6 200.5C350.7 199.3 343.9 194.3 340.5 187.2L287.9 78.95z"></path></svg><!-- <span class="fa-regular fa-star text-warning-300 fs--1 me-1"></span> Font Awesome fontawesome.com -->
          <p class="ms-1 mb-0">&amp; above </p>
        </div>
      </div> --}}
    

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
 
  {{-- <a class="btn px-0 d-block collapse-indicator" data-bs-toggle="collapse" href="products-filter.html#collapseCondition" role="button" aria-expanded="true" aria-controls="collapseCondition">
        <div class="d-flex align-items-center justify-content-between w-100">
          <div class="fs-0 text-1000 text-white ">Condicion</div><svg class="svg-inline--fa fa-angle-down toggle-icon text-500" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="angle-down" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" data-fa-i2svg=""><path fill="currentColor" d="M192 384c-8.188 0-16.38-3.125-22.62-9.375l-160-160c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0L192 306.8l137.4-137.4c12.5-12.5 32.75-12.5 45.25 0s12.5 32.75 0 45.25l-160 160C208.4 380.9 200.2 384 192 384z"></path></svg><!-- <span class="fa-solid fa-angle-down toggle-icon text-500"></span> Font Awesome fontawesome.com -->
        </div>
      </a>
      <div class="collapse show" id="collapseCondition">
        <div class="mb-2">
          <div class="form-check mb-0"><input class="form-check-input mt-0" id="newInput" type="checkbox" name="condition" checked=""><label class="form-check-label d-block lh-sm fs-0 text-900 fw-normal mb-0 text-white" for="newInput">Nuevo</label></div>
          <div class="form-check mb-0"><input class="form-check-input mt-0" id="usedInput" type="checkbox" name="condition"><label class="form-check-label d-block lh-sm fs-0 text-900 fw-normal mb-0 text-white" for="usedInput">Usado</label></div>
          <div class="form-check mb-0"><input class="form-check-input mt-0" id="refurbrishedInput" type="checkbox" name="condition"><label class="form-check-label d-block lh-sm fs-0 text-900 fw-normal mb-0 text-white" for="refurbrishedInput">Restaurado</label></div>
        </div>
      </div>
      <a class="btn px-0 d-block collapse-indicator" data-bs-toggle="collapse" href="products-filter.html#collapseDelivery" role="button" aria-expanded="true" aria-controls="collapseDelivery">
        <div class="d-flex align-items-center justify-content-between w-100">
          <div class="fs-0 text-1000 text-white">Deliveri</div><svg class="svg-inline--fa fa-angle-down toggle-icon text-500" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="angle-down" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" data-fa-i2svg=""><path fill="currentColor" d="M192 384c-8.188 0-16.38-3.125-22.62-9.375l-160-160c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0L192 306.8l137.4-137.4c12.5-12.5 32.75-12.5 45.25 0s12.5 32.75 0 45.25l-160 160C208.4 380.9 200.2 384 192 384z"></path></svg><!-- <span class="fa-solid fa-angle-down toggle-icon text-500"></span> Font Awesome fontawesome.com -->
        </div>
      </a>
      <div class="collapse show" id="collapseDelivery">
        <div class="mb-2">
          <div class="form-check mb-0"><input class="form-check-input mt-0" id="freeShippingInput" type="checkbox" name="delivery" checked=""><label class="form-check-label d-block lh-sm fs-0 text-900 fw-normal mb-0 text-white" for="freeShippingInput">Free Shipping</label></div>
          <div class="form-check mb-0"><input class="form-check-input mt-0" id="oneDayShippingInput" type="checkbox" name="delivery"><label class="form-check-label d-block lh-sm fs-0 text-900 fw-normal mb-0 text-white" for="oneDayShippingInput">One-day Shipping</label></div>
          <div class="form-check mb-0"><input class="form-check-input mt-0" id="codInput" type="checkbox" name="delivery"><label class="form-check-label d-block lh-sm fs-0 text-900 fw-normal mb-0  text-white" for="codInput">Cash on Delivery</label></div>
        </div>
      </div><a class="btn px-0 d-block collapse-indicator" data-bs-toggle="collapse" href="products-filter.html#collapseCampaign" role="button" aria-expanded="true" aria-controls="collapseCampaign">
        <div class="d-flex align-items-center justify-content-between w-100">
          <div class="fs-0 text-1000 text-white">Campaign</div><svg class="svg-inline--fa fa-angle-down toggle-icon text-500" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="angle-down" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" data-fa-i2svg=""><path fill="currentColor" d="M192 384c-8.188 0-16.38-3.125-22.62-9.375l-160-160c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0L192 306.8l137.4-137.4c12.5-12.5 32.75-12.5 45.25 0s12.5 32.75 0 45.25l-160 160C208.4 380.9 200.2 384 192 384z"></path></svg><!-- <span class="fa-solid fa-angle-down toggle-icon text-500"></span> Font Awesome fontawesome.com -->
        </div>
      </a>
      <div class="collapse show" id="collapseCampaign">
        <div class="mb-2">
          <div class="form-check mb-0"><input class="form-check-input mt-0" id="summerSaleInput" type="checkbox" name="campaign"><label class="form-check-label d-block lh-sm fs-0 text-900 fw-normal mb-0 text-white" for="summerSaleInput">Summer Sale</label></div>
          <div class="form-check mb-0"><input class="form-check-input mt-0" id="marchMadnessInput" type="checkbox" name="campaign"><label class="form-check-label d-block lh-sm fs-0 text-900 fw-normal mb-0 text-white" for="marchMadnessInput">March Madness</label></div>
          <div class="form-check mb-0"><input class="form-check-input mt-0" id="flashSaleInput" type="checkbox" name="campaign"><label class="form-check-label d-block lh-sm fs-0 text-900 fw-normal mb-0 text-white " for="flashSaleInput">Flash Sale</label></div>
          <div class="form-check mb-0"><input class="form-check-input mt-0" id="bogoBlastInput" type="checkbox" name="campaign"><label class="form-check-label d-block lh-sm fs-0 text-900 fw-normal mb-0 text-white" for="bogoBlastInput">BOGO Blast</label></div>
        </div>
      </div>
      <a class="btn px-0 d-block collapse-indicator" data-bs-toggle="collapse" href="products-filter.html#collapseWarranty" role="button" aria-expanded="true" aria-controls="collapseWarranty">
        <div class="d-flex align-items-center justify-content-between w-100">
          <div class="fs-0 text-1000 text-white">Warranty</div><svg class="svg-inline--fa fa-angle-down toggle-icon text-500" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="angle-down" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" data-fa-i2svg=""><path fill="currentColor" d="M192 384c-8.188 0-16.38-3.125-22.62-9.375l-160-160c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0L192 306.8l137.4-137.4c12.5-12.5 32.75-12.5 45.25 0s12.5 32.75 0 45.25l-160 160C208.4 380.9 200.2 384 192 384z"></path></svg><!-- <span class="fa-solid fa-angle-down toggle-icon text-500"></span> Font Awesome fontawesome.com -->
        </div>
      </a>
      <div class="collapse show" id="collapseWarranty">
        <div class="mb-2">
          <div class="form-check mb-0"><input class="form-check-input mt-0" id="threeMonthInput" type="checkbox" name="warranty"><label class="form-check-label d-block lh-sm fs-0 text-900 fw-normal mb-0 text-white" for="threeMonthInput">3 months</label></div>
          <div class="form-check mb-0"><input class="form-check-input mt-0" id="sixMonthInput" type="checkbox" name="warranty"><label class="form-check-label d-block lh-sm fs-0 text-900 fw-normal mb-0 text-white" for="sixMonthInput">6 months</label></div>
          <div class="form-check mb-0"><input class="form-check-input mt-0" id="oneYearInput" type="checkbox" name="warranty"><label class="form-check-label d-block lh-sm fs-0 text-900 fw-normal mb-0 text-white" for="oneYearInput">1 year</label></div>
          <div class="form-check mb-0"><input class="form-check-input mt-0" id="twoYearsInput" type="checkbox" name="warranty"><label class="form-check-label d-block lh-sm fs-0 text-900 fw-normal mb-0 text-white" for="twoYearsInput">2 years</label></div>
          <div class="form-check mb-0"><input class="form-check-input mt-0" id="threeYearsInput" type="checkbox" name="warranty"><label class="form-check-label d-block lh-sm fs-0 text-900 fw-normal mb-0" for="threeYearsInput">3 years</label></div>
          <div class="form-check mb-0"><input class="form-check-input mt-0" id="fiveYearsInput" type="checkbox" name="warranty"><label class="form-check-label d-block lh-sm fs-0 text-900 fw-normal mb-0" for="fiveYearsInput">5 years</label></div>
        </div>
      </div><a class="btn px-0 d-block collapse-indicator" data-bs-toggle="collapse" href="products-filter.html#collapseWarrantyType" role="button" aria-expanded="true" aria-controls="collapseWarrantyType">
        <div class="d-flex align-items-center justify-content-between w-100">
          <div class="fs-0 text-1000">Warranty Type</div><svg class="svg-inline--fa fa-angle-down toggle-icon text-500" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="angle-down" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" data-fa-i2svg=""><path fill="currentColor" d="M192 384c-8.188 0-16.38-3.125-22.62-9.375l-160-160c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0L192 306.8l137.4-137.4c12.5-12.5 32.75-12.5 45.25 0s12.5 32.75 0 45.25l-160 160C208.4 380.9 200.2 384 192 384z"></path></svg><!-- <span class="fa-solid fa-angle-down toggle-icon text-500"></span> Font Awesome fontawesome.com -->
        </div>
      </a>
      <div class="collapse show" id="collapseWarrantyType">
        <div class="mb-2">
          <div class="form-check mb-0x"><input class="form-check-input mt-0" id="replacementInput" type="checkbox" name="warrantyType"><label class="form-check-label d-block lh-sm fs-0 text-900 fw-normal mb-0" for="replacementInput">Replacement</label></div>
          <div class="form-check mb-0"><input class="form-check-input mt-0" id="serviceInput" type="checkbox" name="warrantyType"><label class="form-check-label d-block lh-sm fs-0 text-900 fw-normal mb-0" for="serviceInput">Service</label></div>
          <div class="form-check mb-0"><input class="form-check-input mt-0" id="partialCoveregeInput" type="checkbox" name="warrantyType"><label class="form-check-label d-block lh-sm fs-0 text-900 fw-normal mb-0" for="partialCoveregeInput">Partial Coverage</label></div>
          <div class="form-check mb-0"><input class="form-check-input mt-0" id="appleCareInput" type="checkbox" name="warrantyType"><label class="form-check-label d-block lh-sm fs-0 text-900 fw-normal mb-0" for="appleCareInput">Apple Care</label></div>
          <div class="form-check mb-0"><input class="form-check-input mt-0" id="moneyBackInput" type="checkbox" name="warrantyType"><label class="form-check-label d-block lh-sm fs-0 text-900 fw-normal mb-0" for="moneyBackInput">Money back</label></div>
          <div class="form-check mb-0"><input class="form-check-input mt-0" id="extendableInput" type="checkbox" name="warrantyType"><label class="form-check-label d-block lh-sm fs-0 text-900 fw-normal mb-0" for="extendableInput">Extendable</label></div>
        </div>
      </div>
      <a class="btn px-0 d-block collapse-indicator" data-bs-toggle="collapse" href="products-filter.html#collapseCertification" role="button" aria-expanded="true" aria-controls="collapseCertification">
        <div class="d-flex align-items-center justify-content-between w-100">
          <div class="fs-0 text-1000">Certification</div><svg class="svg-inline--fa fa-angle-down toggle-icon text-500" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="angle-down" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" data-fa-i2svg=""><path fill="currentColor" d="M192 384c-8.188 0-16.38-3.125-22.62-9.375l-160-160c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0L192 306.8l137.4-137.4c12.5-12.5 32.75-12.5 45.25 0s12.5 32.75 0 45.25l-160 160C208.4 380.9 200.2 384 192 384z"></path></svg><!-- <span class="fa-solid fa-angle-down toggle-icon text-500"></span> Font Awesome fontawesome.com -->
        </div>
      </a>
      <div class="collapse show" id="collapseCertification">
        <div>
          <div class="form-check mb-0"><input class="form-check-input mt-0" id="rohsInput" type="checkbox" name="certification"><label class="form-check-label d-block lh-sm fs-0 text-900 fw-normal mb-0" for="rohsInput">RoHS</label></div>
          <div class="form-check mb-0"><input class="form-check-input mt-0" id="fccInput" type="checkbox" name="certification"><label class="form-check-label d-block lh-sm fs-0 text-900 fw-normal mb-0" for="fccInput">FCC</label></div>
          <div class="form-check mb-0"><input class="form-check-input mt-0" id="conflictInput" type="checkbox" name="certification"><label class="form-check-label d-block lh-sm fs-0 text-900 fw-normal mb-0" for="conflictInput">Conflict Free</label></div>
          <div class="form-check mb-0"><input class="form-check-input mt-0" id="isoOneInput" type="checkbox" name="certification"><label class="form-check-label d-block lh-sm fs-0 text-900 fw-normal mb-0" for="isoOneInput">ISO 9001:2015</label></div>
          <div class="form-check mb-0"><input class="form-check-input mt-0" id="isoTwoInput" type="checkbox" name="certification"><label class="form-check-label d-block lh-sm fs-0 text-900 fw-normal mb-0" for="isoTwoInput">ISO 27001:2013</label></div>
          <div class="form-check mb-0"><input class="form-check-input mt-0" id="isoThreeInput" type="checkbox" name="certification"><label class="form-check-label d-block lh-sm fs-0 text-900 fw-normal mb-0" for="isoThreeInput">IEC 61000-4-2</label></div>
        </div>
      </div> --}}
    






    </div>
    <div class="phoenix-offcanvas-backdrop d-lg-none" data-phoenix-backdrop=""></div>

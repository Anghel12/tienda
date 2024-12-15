<x-app-layout>

</x-app-layout>


<img class="background-image"
  src="https://img.freepik.com/fotos-premium/fondo-azul-fondo-azul_608068-13038.jpg" alt="Fondo">

{{-- FORMULARIO DE COMPRA --}}

<div class="container ">
  <div class="row justify-content-center align-items-center" style="height: 100vh; padding-top: 7rem;">


    <section class="py-5">
      <div class="container">
  
      <div class="row">

        {{-- tabla de referidos  --}}

        
        <div class="card col-12 col-md-12 mx-auto mb-2 bg-mod-black">
          <div class="row py-lg-5 py-3">
            <h4 class="">(Admin) Ordenes De Los Usuarios Que Compraron Monedas Con El Metodo Voucher <a rel="stylesheet" class="btn btn-outline-primary text-secondary font-weight-bold text-xs" href="{{ route('admin.products.create') }}">CREATE</a> </h4>  
            <div class="card bg-mod-black">
              <div class="table-responsive ">
                <table class="table align-items-center mb-0 ">
                  <thead>
                    <tr>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">id</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nombre</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Precio</th>
                   
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Categoria</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Estado</th>
                      <th class="text-secondary opacity-7">Acciones</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($products as $product)

                    <tr>
                      <td class="align-middle text-center text-sm">
                        <p class="text-xs font-weight-bold mb-0 text-truncate" style="max-width: 100px;">{{ $product->id ?? null }} </p>
                        <span class="badge badge-sm badge-dark"></span>
                      </td>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div>
                            <img style="height: 30px" src="{{ $product->mainImage->url ?? null }}" alt="{{ $product->user->name ?? null }}" class="avatar avatar-md me-3">
                          </div>
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 ">{{ $product->name ?? null }}</h6>
                            <p class="text-xs text-secondary mb-0">{{ $product->slug ?? null }}</p>
                          </div>
                        </div>
                      </td>

                      <td>
                        <p class="text-xs font-weight-bold mb-0 ">$/{{ $product->product_price->price ?? null }}</p>
                        <p class="text-xs text-secondary mb-0"> </p>
                      </td>
                   
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold ">{{ $product->category->name  ?? null}}</span>
                      </td>
                    
                      <td class="align-middle text-center text-sm">
                        @if ($product->status == 'active')
                        <span class="badge badge-sm btn-success text-dark"> {{ $product->status  ?? null }}</span>

                        @else

                        <span class="badge badge-sm btn-success text-dark"> {{ $product->status ?? null }}</span>
                        @endif

                      

                      </td>
                       <td class="align-middle">
                        <a href="{{ route('admin.products.edit', $product->id ) }}" class="btn btn-outline-primary text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit">
                          Edit
                        </a>
                       <a href="{{ route('markets.products.index', $product->id ) }}" class="btn btn-outline-primary text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="ver">
                          ver
                        </a> 

                        @can('admin.products.destroy')
                            
                        @endcan
                        <form action="{{ route('admin.products.destroy', $product->id) }}" method="POST" style="display:inline;">
                          @csrf
                          @method('DELETE')
                          <button type="submit" class="btn btn-outline-danger text-xs" data-toggle="tooltip" data-original-title="Eliminar">
                              Eliminar
                          </button>
                      </form>
                      


                      </td> 
                    </tr>
                   @endforeach

            
     
                  </tbody>
                </table>
              </div>
            </div>
      
          </div>
       
        </div>






      </div>
      </div>
      </section>


  </div>
</div>

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



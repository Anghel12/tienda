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

        
        <div class="card col-12 col-md-12 mx-auto mb-2">
          <div class="row py-lg-5 py-3">
            <h4>(Admin) Ordenes De Los Usuarios Que Compraron Monedas Con El Metodo Voucher <a rel="stylesheet" class="btn btn-outline-primary text-secondary font-weight-bold text-xs" href="{{ route('admin.products.create') }}">CREATE</a> </h4>  
            <div class="card">
              <div class="table-responsive">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nombre</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Precio</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">body</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Categoria</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Estado</th>
                      <th class="text-secondary opacity-7">Acciones</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($products as $product)

                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div>
                            <img  src="{{ $product->user->profile_photo_url }}" alt="{{ $product->user->name }}" class="avatar avatar-sm me-3">
                          </div>
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-xs">{{ $product->name ?? null }}</h6>
                            <p class="text-xs text-secondary mb-0">{{ $product->slug ?? null }}</p>
                          </div>
                        </div>
                      </td>

                      <td>
                        <p class="text-xs font-weight-bold mb-0">$/{{ $product->price }}</p>
                        <p class="text-xs text-secondary mb-0"> </p>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <p class="text-xs font-weight-bold mb-0 text-truncate" style="max-width: 100px;">{{ $product->body }} </p>
                        <span class="badge badge-sm badge-dark"></span>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold">{{ $product->category->name }}</span>
                      </td>
                    
                      <td class="align-middle text-center text-sm">
                        <span class="badge badge-sm badge-info"> {{ $product->status }}</span>
                      </td>
                       <td class="align-middle">
                        <a href="{{ route('admin.products.edit', $product->id ) }}" class="btn btn-outline-primary text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit">
                          Edit
                        </a>
                     {{--    <a href="{{ route('admin.products.show', $product->id ) }}" class="btn btn-outline-primaryb text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="ver">
                          ver
                        </a> --}}
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
    position: fixed;
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
</style>



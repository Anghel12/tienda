<x-app-layout>

</x-app-layout>


<img class="background-image"
src="https://img.freepik.com/fotos-premium/fondo-azul-fondo-azul_608068-13038.jpg" alt="Fondo">

  <!-- -------- START HEADER 9 w/ floating img and bg  ------- -->


{{--   @include('user_actions.buy_coins.partials.header') --}}
<!-- START Pricing w/ 2 cards & nav tabs -->





  <div class="container ">
    <div class="row justify-content-center align-items-center" style="height: 100vh; padding-top: 7rem;">
        
        <!-- Texto a la izquierda (12 columnas en móviles, 7 columnas en pantallas grandes) -->
        <div class="col-lg-12 col-12 text-center d-flex flex-column justify-content-center align-items-center mb-3 mb-lg-0">
          <h1 class="text-light pt-3 mt-n5">Transacciones</h1>
          <p class="lead text-dark mt-3"> 
              
          </p>
      </div>
      

        <!-- Formulario a la derecha (12 columnas en móviles, 5 columnas en pantallas grandes) -->
        <div class="col-lg-5 col-12">


            
                @if(session('success'))

                <div id="alert" class="alert alert-success" role="alert">
                    {{ session('success') }}
                </div>

                <script>
                    // Función para ocultar la alerta después de 5 segundos
                    setTimeout(function() {
                        var alertElement = document.getElementById('alert');
                        if (alertElement) {
                            alertElement.classList.remove('show');
                            alertElement.classList.add('fade');
                            alertElement.style.display = 'none'; // Opcional: oculta el elemento completamente
                        }
                    }, 10000); // 5000 milisegundos = 5 segundos
                </script>
                @endif

          <div class="card shadow-none border h-100">
            <div class="card-header text-sm-left text-center pt-4 pb-3 px-4">
                <h5 class="mb-1">Transacción ID: {{ $transaccion->id }}</h5>
                <p class="mb-3 text-sm">Tipo de Transacción: {{ ucfirst($transaccion->type) }}</p>
                <h3 class="font-weight-bolder mt-3">
                  ${{ number_format($transaccion->amount, 2 ) }}
                    <small class="text-sm text-secondary font-weight-bold">USD</small>
                </h3>
                {{-- Botón de acción adicional si lo necesitas --}}
                {{-- <a href="javascript:;" class="btn btn-sm bg-gradient-dark w-100 border-radius-md mt-4 mb-2">Ver detalles</a> --}}
            </div>
            <hr class="horizontal dark my-0">
            <div class="card-body">
                <div class="d-flex pb-3">
                    <div>
                       <i class="fas fa-check text-success text-sm" aria-hidden="true"></i>
                   </div>
                   <div class="ps-3">
                       <span class="text-sm">{{ $transaccion->type ?? $type  }}</span>
                   </div>
               </div>

               <div class="d-flex pb-3">
                     <div>
                        <i class="fas fa-check text-success text-sm" aria-hidden="true"></i>
                    </div>
                    <div class="ps-3">
                        <span class="text-sm">Moneda: {{ $transaccion->coin->name ?? $coin->name  }}</span>
                    </div>
                </div>

                <div class="d-flex pb-3">
                    <div>
                        <i class="fas fa-check text-success text-sm" aria-hidden="true"></i>
                    </div>
                    <div class="ps-3">
                        <span class="text-sm">Cantidad: {{ $transaccion->amount }}</span>
                    </div>
                </div>

                <div class="d-flex pb-3">
                    <div>
                        <i class="fas fa-check text-success text-sm" aria-hidden="true"></i>
                    </div>
                    <div class="ps-3">
                        @if ($transaccion->status == 'pending')
                      {{--   <span class="text-sm">Estado: {{ ucfirst($transaccion->status) }}</span> --}}
                      <span class="text-sm">Estado: Pendiente de Aprobación</span>
  
                      @else
                      <span class="text-sm">Estado: Completado con Exito</span>

                        @endif
                       
                    </div>
                </div>

                <div class="d-flex pb-3">
                  <div>
                      <i class="fas fa-check text-success text-sm" aria-hidden="true"></i>
                  </div>
                  <div class="ps-3">
                      <span class="text-sm">
                          Fecha: 
                          @if($transaccion->created_at)
                              {{ $transaccion->created_at->format('d/m/Y H:i') }}
                          @else
                              No disponible
                          @endif
                      </span>
                  </div>
              </div>

                <div class="d-flex pb-3">
                    <div>
                        <i class="fas fa-check text-success text-sm" aria-hidden="true"></i>
                    </div>
                    <div class="ps-3">
                        <span class="text-sm">Dirección IP: {{ $transaccion->ip_address }}</span>
                    </div>
                </div>
            </div>
        </div>

        </div>
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
        background-color: rgba(255, 255, 255, 0.8); /* Fondo blanco semi-transparente */
        border-radius: 15px;
        padding: 20px;
    }
</style>
<!-- END Pricing w/ 2 cards & nav tabs -->

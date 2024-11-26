<x-app-layout>

</x-app-layout>
  <!-- -------- START HEADER 9 w/ floating img and bg  ------- -->
  <img class="background-image"
  src="https://img.freepik.com/fotos-premium/fondo-azul-fondo-azul_608068-13038.jpg" alt="Fondo">
  
<section class="py-2">
  <div class="container pt-8">
    <div class="row">
      <div class="col-lg-12 col-md-10 d-flex justify-content-center flex-column">

     
        
        <div class="card p-2">

            <h3 class="mt-3">Historial de Ordenes</h3>
            <p class="lead">Aquí podrás ver todas tus Ordenes realizadas</p>
          <div class="table-responsive">
            <table class="table align-items-center mb-0">
              <thead>
                <tr>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder">ID</th>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder ps-2">Email</th>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder ps-2">Cantidad</th>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder ps-2">Método de Pago</th>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder ps-2">Estado</th>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder ps-2">Fecha</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                @foreach ($orders as $order)
                <tr>
              {{--     <td>
                    <div class="d-flex px-2">
                      <div>
                        <img src="https://demos.creative-tim.com/soft-ui-design-system-pro/assets/img/logos/small-logos/logo-invision.svg" class="avatar avatar-sm rounded-circle me-2">
                      </div>
                      <div class="my-auto">
                        <h6 class="mb-0 text-xs">{{ $transaccion->coin->name ?? 'Moneda desconocida' }}</h6>
                      </div>
                    </div>
                  </td> --}}

                  <td class="align-middle text-center">
                    <p class="text-xs font-weight-bold mb-0">{{ $order->id }}</p>
                  </td>
                  <td class="align-middle text-center">
                    <p class="text-xs font-weight-bold mb-0">{{ $order->email }}</p>
                  </td>
                  <td class="align-middle text-center">
                    <p class="text-xs font-weight-bold mb-0">${{ $order->amount }}</p>
                  </td>
                  <td class="align-middle text-center">
                    <span class="badge badge-dot me-4">
                   {{--    <i class="{{ $transaccion->status == 'completed' ? 'bg-success' : 'bg-warning' }}"></i> --}}
                      <span class="text-dark text-xs">{{ $order->payment_method }}</span>
                    </span>
                  </td>
                  <td class="align-middle text-center">
                    <div class="d-flex align-items-center">
                      <span class="me-2 text-xs">{{ $order->status == 'pending' ? '50%' : 'En Revision' }}</span>
                      <div>
                        <div class="progress">
                          <div class="progress-bar bg-success" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: {{ $order->status == 'pending' ? '50%' : 'En Revision' }};"></div>
                        </div>
                      </div>
                    </div>
                  </td>
                  <td>
                    <span class="badge badge-dot me-4">
                      <i class="bg-success"></i>
                      <span class="text-dark text-xs">{{ $order->created_at->format('d/m/Y') }}</span>
                    </span>
                  </td>

                  <td class="align-middle">
                
                   {{--  <form action="{{ route('user_actions.order_vouchers.destroy', $order->id) }}" method="POST" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('¿Estás seguro?')">Eliminar</button>
                    </form> --}}
                    <a class="btn btn-dark" href="{{ route('user_actions.order_vouchers.show', $order->id) }}">Show</a>
                    <a class="btn btn-dark" href="{{ route('user_actions.order_vouchers.edit', $order->id) }}" >Edit</a>
             {{--        <button class="btn btn-link text-secondary mb-0" aria-haspopup="true" aria-expanded="false">
                      <i class="fa fa-ellipsis-v text-xs" aria-hidden="true"></i>
                    </button> --}}
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
</section>
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
<!-- END Pricing w/ 2 cards & nav tabs -->

<x-app-layout>

</x-app-layout>
  <!-- -------- START HEADER 9 w/ floating img and bg  ------- -->


{{--   @include('user_actions.buy_coins.partials.header') --}}
<!-- START Pricing w/ 2 cards & nav tabs -->
<section class="py-2 bg-light">
  <div class="container pt-8">
    <div class="row">
      <div class="col-lg-12 col-md-10 d-flex justify-content-center flex-column">

        <h3 class="mt-3">Historial de Transferencias</h3>
        <p class="lead">Aquí podrás ver todas tus transferencias realizadas</p>
        
        <div class="card">
          <div class="table-responsive">
            <table class="table align-items-center mb-0">
              <thead>
                <tr>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder">Compra</th>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder ps-2">Precio</th>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder ps-2">Estado</th>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder ps-2">Completion</th>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder ps-2">Fecha</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                @foreach ($UserTransaccion as $transaccion)
                <tr>
                  <td>
                    <div class="d-flex px-2">
                      <div>
                        <img src="https://demos.creative-tim.com/soft-ui-design-system-pro/assets/img/logos/small-logos/logo-invision.svg" class="avatar avatar-sm rounded-circle me-2">
                      </div>
                      <div class="my-auto">
                        <h6 class="mb-0 text-xs">{{ $transaccion->coin->name ?? 'Moneda desconocida' }}</h6>
                      </div>
                    </div>
                  </td>
                  <td>
                    <p class="text-xs font-weight-bold mb-0">${{ number_format($transaccion->amount, 2 ) }}</p>
                  </td>
                  <td>
                    <span class="badge badge-dot me-4">
                      <i class="{{ $transaccion->status == 'completed' ? 'bg-success' : 'bg-warning' }}"></i>
                      <span class="text-dark text-xs">{{ $transaccion->status }}</span>
                    </span>
                  </td>
                  <td class="align-middle text-center">
                    <div class="d-flex align-items-center">
                      <span class="me-2 text-xs">{{ $transaccion->status == 'completed' ? '100%' : 'En progreso' }}</span>
                      <div>
                        <div class="progress">
                          <div class="progress-bar bg-success" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: {{ $transaccion->status == 'completed' ? '100%' : '50%' }};"></div>
                        </div>
                      </div>
                    </div>
                  </td>
                  <td>
                    <span class="badge badge-dot me-4">
                      <i class="bg-success"></i>
                      <span class="text-dark text-xs">{{ $transaccion->created_at->format('d/m/Y') }}</span>
                    </span>
                  </td>

                  <td class="align-middle">
                    <a class="btn btn-dark" href="{{ route('user_actions.history_transaccions.show', $transaccion->id ) }}">Show</a>
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

<!-- END Pricing w/ 2 cards & nav tabs -->

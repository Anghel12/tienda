
<div class="col-lg-7 col-md-12 ms-lg-auto me-lg-auto">
    <div class="tab-content tab-space">
      <div class="tab-pane active" id="personal">
        <div class="row">
         

          <div class="col-md-12">
            <div class="card card-pricing bg-gradient-primary border-0 text-center mb-4 overflow-hidden">
              <img src="../../assets/img/shapes/waves-white.svg" alt="pattern-lines" class="position-absolute opacity-8">
              <div class="card-header bg-transparent">
                <h6 class="text-uppercase  ls-1 py-3 mb-0">Cartera Virtual</h6>

                <h6 class="text-uppercase  ls-1 py-3 mb-0">ID: SA5D5AS5DSA4DSA5DA8WQEQ</h6>
              </div>
              <div class="card-body  position-relative">
                <p class="display-2 font-weight-bold mb-0">$ {{ $wallet->balance ?? 0 }} </p>
                <span>Coins</span>
                <ul class="list-unstyled my-4">

                  <li class="align-items-center">
                    <b>Seguridad:</b> <span>Encryptada</span>
                  </li>
                  <li class="align-items-center my-2">
                    <b>Status:</b> <span>Activa</span>
                  </li>
                  <li class="align-items-center">
                    <b>Nivel:</b> <span>Premiun</span>
                  </li>
                </ul>
              </div>
              <div class="card-footer bg-transparent position-relative">
                <a href="{{ route('user_actions.buy_coins.index') }}" class="btn btn-primary{{-- btn-outline-white --}}">Depositar</a>

                <a href="{{ route('user_actions.transfer_coins.index') }}" class="btn btn-primary">Transferir</a>
              </div>


             

            </div>
          </div>
        </div>
      </div>




    </div>
  </div>
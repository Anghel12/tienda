  
  <section class="py-lg-7">
    <div class="container">
      <div class="row">
        <div class="col-md-6 mx-auto text-center mb-5">   
          @auth
          @if(auth()->user()->hasRole('Admin'))
          <a href="{{ route('admin.home.memberships.edit', $membership) }}" class="btn bg-success btn-rounded me-2">Editar Membership</a>
          @endif
          @endauth
          <h2>{{ $membership->title }}</h2>
          <p class="lead">{{ $membership->body }}
          </p>
        </div>
      </div>
      <div class="row">
        <div class="card">
          <div class="row">
            <div class="col-lg-8">
              <div class="card-body">
                <h3 class="text-gradient text-info">{{ $membership->subtitle }}</h3>
                <p>{{ $membership->sub_body }}</p>
                <div class="row mt-5 mb-2">
                  <div class="col-lg-3 col-12">
                    <h6 class="text-dark tet-uppercase">Que Ofrecemos?</h6>
                  </div>
                  <div class="col-6">
                    <hr class="horizontal dark">
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-6 col-md-6 col-12 ps-0">
                    <div class="d-flex align-items-center p-2">
                      <div class="icon icon-shape icon-xs rounded-circle bg-gradient-dark opacity-6 shadow text-center">
                        <i class="fas fa-check opacity-10"></i>
                      </div>
                      <div>
                        <span class="ps-2">Cuentas Seguras y Encriptadas</span>
                      </div>
                    </div>
                    <div class="d-flex align-items-center p-2">
                      <div class="icon icon-shape icon-xs rounded-circle bg-gradient-dark opacity-6 shadow text-center">
                        <i class="fas fa-check opacity-10"></i>
                      </div>
                      <div>
                        <span class="ps-2">Transacciones Gratis</span>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6 col-md-6 col-12 ps-sm-2 ps-0">
                    <div class="d-flex align-items-center p-2">
                      <div class="icon icon-shape icon-xs rounded-circle bg-gradient-dark opacity-6 shadow text-center">
                        <i class="fas fa-check opacity-10"></i>
                      </div>
                      <div>
                        <span class="ps-2">Cuenta sin limites</span>
                      </div>
                    </div>
                    <div class="d-flex align-items-center p-2">
                      <div class="icon icon-shape icon-xs rounded-circle bg-gradient-dark opacity-6 shadow text-center">
                        <i class="fas fa-check opacity-10"></i>
                      </div>
                      <div>
                        <span class="ps-2">Asistentes las 24 horas</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 my-auto">
              <div class="card-body text-center">
                <h6 class="mt-sm-4 mt-0 mb-0">{{ $membership->price_title }}</h6>
                <h1 class="mt-0">
                  <small>$</small>{{ $membership->price }}
                </h1>
                <a  href="{{ route('login') }}" class="btn bg-gradient-info btn-lg mt-2">Registrarse</a>
                <p class="text-sm">{{ $membership->offer }}</p>
                
              </div>
            </div>
            
          </div>
        </div>
      </div>
    </div>
  </section>
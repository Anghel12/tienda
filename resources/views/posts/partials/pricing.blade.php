
<section class="py-lg-7 pb-5">
  <div class="bg-gradient-dark position-relative m-3 border-radius-xl">{{-- ../assets/img/shapes/waves-white.svg --}}
    <img src="../assets/img/shapes/waves-white.svg" alt="pattern-lines"
      class="position-absolute start-0 top-md-0 w-100 opacity-6">
    <div class="container pb-lg-9 pb-7 pt-7 postion-relative z-index-2">
      <div class="row">
        <div class="col-md-8 mx-auto text-center">
          <span class="badge bg-gradient-info mb-2">{{ $package->title }}</span>
          <h3 class="text-white">{{ $package->subtitle }}</h3>
          <p class="text-white">{{ $package->body }}</p>
          @auth
          @if(auth()->user()->hasRole('Admin'))
          <a href="{{ route('admin.home.packages.edit', $package->id) }}" class="btn bg-success btn-rounded me-2">Editar</a>
          @endif
          @endauth
        </div>
      </div>
    </div>
  </div>
         
{{--   <div class="mt-sm-n8 mt-n7">
    <div class="container">
      <div class="row">


        
        <div class="col-lg-3 mb-lg-auto mb-4 my-auto p-md-0 ms-auto">
          <div class="card border-radius-top-end-lg-0 border-radius-bottom-end-lg-0">
            <div class="card-header text-center pt-4 pb-3">
              <h6 class="text-dark opacity-8 text mb-0">Starter</h6>
              <h1 class="font-weight-bolder">
                
                <small>$</small>199
              </h1>
            </div>
            <div class="card-body mx-auto pt-0">
              <div class="justify-content-start d-flex px-2 py-1">
                <div>
                  <i class="fas fa-check text-info text-sm"></i>
                </div>
                <div class="ps-2">
                  <span class="text-sm">Complete documentation</span>
                </div>
              </div>
              <div class="justify-content-start d-flex px-2 py-1">
                <div>
                  <i class="fas fa-check text-info text-sm"></i>
                </div>
                <div class="ps-2">
                  <span class="text-sm">Working materials in Sketch</span>
                </div>
              </div>
              <div class="justify-content-start d-flex px-2 py-1">
                <div>
                  <i class="fas fa-check text-info text-sm"></i>
                </div>
                <div class="ps-2">
                  <span class="text-sm">500MB cloud storage</span>
                </div>
              </div>
              <div class="justify-content-start d-flex px-2 py-1">
                <div>
                  <i class="fas fa-check text-info text-sm"></i>
                </div>
                <div class="ps-2">
                  <span class="text-sm">Lite support</span>
                </div>
              </div>
            </div>
            <div class="card-footer pt-0">
              <a href="javascript:;" class="btn w-100 bg-gradient-dark mb-0">
                Buy now
              </a>
            </div>
          </div>
        </div>



        <div class="col-lg-3 p-md-0 mb-lg-auto mb-4 z-index-2">
          <div class="card">
            <div class="card-header text-center pt-4 pb-3">
              <h6 class="text-dark opacity-8 text mb-0 mt-2">Pro</h6>
              <h1 class="font-weight-bolder">
                <small>$</small>299
              </h1>
            </div>
            <div class="card-body mx-auto pt-0">
              <div class="justify-content-start d-flex px-2 py-1">
                <div>
                  <i class="fas fa-check text-info text-sm"></i>
                </div>
                <div class="ps-2">
                  <span class="text-sm">Complete documentation</span>
                </div>
              </div>
              <div class="justify-content-start d-flex px-2 py-1">
                <div>
                  <i class="fas fa-check text-info text-sm"></i>
                </div>
                <div class="ps-2">
                  <span class="text-sm">Working materials in Sketch</span>
                </div>
              </div>
              <div class="justify-content-start d-flex px-2 py-1">
                <div>
                  <i class="fas fa-check text-info text-sm"></i>
                </div>
                <div class="ps-2">
                  <span class="text-sm">100GB cloud storage</span>
                </div>
              </div>
              <div class="justify-content-start d-flex px-2 py-1">
                <div>
                  <i class="fas fa-check text-info text-sm"></i>
                </div>
                <div class="ps-2">
                  <span class="text-sm">500 team members</span>
                </div>
              </div>
              <div class="justify-content-start d-flex px-2 py-1">
                <div>
                  <i class="fas fa-check text-info text-sm"></i>
                </div>
                <div class="ps-2">
                  <span class="text-sm">Premium support</span>
                </div>
              </div>
            </div>
            <div class="card-footer pt-0">
              <a href="javascript:;" class="btn btn-icon bg-gradient-info d-block mb-0">
                Try Pro
                <i class="fas fa-arrow-right ms-1"></i>
              </a>
            </div>
          </div>
        </div>


        <div class="col-lg-3 mb-lg-auto mb-4 my-auto p-md-0 me-auto">
          <div class="card border-radius-top-start-lg-0 border-radius-bottom-start-lg-0">
            <div class="card-header text-center pt-4 pb-2">
              <h6 class="text-dark opacity-8 text mb-0">Premium</h6>
              <h1 class="font-weight-bolder">
                <small>$</small>399
              </h1>
            </div>
            <div class="card-body mx-auto pt-0">
              <div class="justify-content-start d-flex px-2 py-1 py-1">
                <div>
                  <i class="fas fa-check text-info text-sm"></i>
                </div>
                <div class="ps-2">
                  <span class="text-sm">Complete documentation</span>
                </div>
              </div>
              <div class="justify-content-start d-flex px-2 py-1 py-1">
                <div>
                  <i class="fas fa-check text-info text-sm"></i>
                </div>
                <div class="ps-2">
                  <span class="text-sm">Working materials in Sketch</span>
                </div>
              </div>
              <div class="justify-content-start d-flex px-2 py-1 py-1">
                <div>
                  <i class="fas fa-check text-info text-sm"></i>
                </div>
                <div class="ps-2">
                  <span class="text-sm">2GB cloud storage</span>
                </div>
              </div>
              <div class="justify-content-start d-flex px-2 py-1">
                <div>
                  <i class="fas fa-check text-info text-sm"></i>
                </div>
                <div class="ps-2">
                  <span class="text-sm">Premium support</span>
                </div>
              </div>
            </div>
            <div class="card-footer pt-0">
              <a href="javascript:;" class="btn w-100 bg-gradient-dark mb-0">Buy now</a>
            </div>
          </div>
        </div>

      </div>

    </div>
  </div> --}}
</section>
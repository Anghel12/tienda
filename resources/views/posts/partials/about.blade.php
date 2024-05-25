<section class="py-4 position-relative overflow-hidden">
    <img src="https://demos.creative-tim.com/marketplace/soft-ui-design-system-pro//assets/img/shapes/waves-white.svg"
      alt="pattern-lines" class="position-absolute top-0 opacity-6">
    <div class="container-fluid">
      <div class="row">
        <div class="col-10 mx-auto bg-gradient-dark border-radius-lg">
          <div class="row py-5">
            <div class="col-xl-4 col-md-6 px-5 position-relative">
              <img class="img border-radius-md max-width-300 w-100 position-relative z-index-2"
                src="https://demos.creative-tim.com/marketplace/soft-ui-design-system-pro//assets/img/jordan.jpg"
                alt="card image">
            </div>

            
            <div class="col-xl-4 col-md-5 z-index-2 position-relative px-md-3 px-5 my-md-auto mt-4">

              <h3 class="text-white">{{ $about->title }}</h3>
              <p class="text-lg text-white">
              
                {{ $about->body }}
                
              </p>
              <p class="text-white font-weight-bold text-sm">{{ $about->subtitle }}{{-- Michael - <span
                  class="text-xs font-weight-normal">Antonio</span> --}}</p>


                  @auth
                  @if(auth()->user()->hasRole('Admin'))
                  <a href="{{ route('admin.home.abouts.edit', $about) }}" class="btn bg-success btn-rounded me-2">Editar Membership</a>
                  @endif
                  @endauth

              <hr class="vertical start-100 ms-n5 d-xl-block d-none">
            </div>
            <div class="col-1"></div>
            <div class="col-xl-2 col-12 px-xl-0 px-5 my-xl-auto">
              <h3 class="text-white mt-xl-0 mt-5">{{ $about->miembro }} +</h3>
              <p class="text-sm text-white opacity-8">Miembros</p>
              <a href="javascript:;" class="text-primary icon-move-right text-sm">Registrarse
                <i class="fas fa-arrow-right text-xs"></i>
              </a>

              
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <div class="page-header min-vh-75" loading="lazy" style="background-image: url('../assets/img/office-dark.jpeg'); height: 800px; position: relative;">
    <span class="mask bg-gradient-info opacity-8"></span>
    <div class="container d-flex align-items-center justify-content-center" style="height: 100%;">
      <div class="row justify-content-center">
        <div class="col-lg-8 text-center mx-auto my-auto">
          @if($content)
          <h1 class="text-white">{{$content->title}} <span class="text-white" id="typed"></span></h1>

          <p class="lead mb-4 text-white opacity-8">{{$content->subtitle}} {{$content->body}}</p>

          @auth
          @if(auth()->user()->hasRole('Admin'))
          <a href="{{ route('admin.content.edit', $content) }}" class="btn bg-success btn-rounded me-2 fadeIn1 fadeInBottom">Editar</a>
         @endif
          @endauth
      
          @else

            <h1 class="text-white">{{$content->title}} <span class="text-white" id="typed"></span></h1>

            <p class="lead mb-4 text-white opacity-8">{{$content->subtitle}} {{$content->body}}</p>

            <a href="{{ url('/register') }}" type="submit" class="btn bg-white text-dark">Registrarse ahora</a>
          @endif

          <a href="{{ route('user_actions.buy_coins.index') }}" type="submit" class="btn bg-white text-dark">Obtener Monedas </a>
          <h6 class="text-white mb-2 mt-5">Nuestras Redes</h6>
          <div class="d-flex justify-content-center">
            <a href="javascript:;"><i class="fab fa-facebook text-lg text-white me-4"></i></a>
            <a href="javascript:;"><i class="fab fa-instagram text-lg text-white me-4"></i></a>
            <a href="javascript:;"><i class="fab fa-twitter text-lg text-white me-4"></i></a>
            <a href="javascript:;"><i class="fab fa-google-plus text-lg text-white"></i></a>
          </div>
        </div>
      </div>
    </div>
    <div class="position-absolute w-100 z-index-1 bottom-0">
      <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
        viewBox="0 24 150 40" preserveAspectRatio="none" shape-rendering="auto">
        <defs>
          <path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
        </defs>
        <g class="moving-waves">
          <use xlink:href="#gentle-wave" x="48" y="-1" fill="rgba(255,255,255,0.40" />
          <use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(255,255,255,0.35)" />
          <use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(255,255,255,0.25)" />
          <use xlink:href="#gentle-wave" x="48" y="8" fill="rgba(255,255,255,0.20)" />
          <use xlink:href="#gentle-wave" x="48" y="13" fill="rgba(255,255,255,0.15)" />
          <use xlink:href="#gentle-wave" x="48" y="16" fill="rgba(255,255,255,1" />
        </g>
      </svg>
    </div>
  </div>










{{-- 
<header class="position-relative">
    <div class="page-header min-vh-100 position-relative" style="background-image: url(https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/assets/img/nightsky.jpg);">
      <span class="mask bg-gradient-dark"></span>
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6 text-center mx-auto mt-n7">


            @if($content)

            <h4 class="text-white text-primary fadeIn1 fadeInBottom">{{$content->subtitle}}</h4>
            <h1 class="text-gradient text-primary fadeIn2 fadeInBottom">{{$content->title}}</h1>
            <p class="lead mb-5 fadeIn3 fadeInBottom text-white opacity-5">{{$content->body}}</p>
            <h4> <a href="{{ route('user_actions.buy_coins.index') }}" type="submit" class="btn btn-outline-primary btn-rounded me-5 fadeIn1 fadeInBottom">Comprar {{ $coin->name }} </a></h4>
           

            @auth
            @if(auth()->user()->hasRole('Admin'))
            <a href="{{ route('admin.content.edit', $content) }}" class="btn bg-success btn-rounded me-2 fadeIn1 fadeInBottom">Editar</a>
           @endif
            @endauth
        
           

            @else
            <h4 class="text-white text-primary fadeIn1 fadeInBottom">Primer fondo de alta rentabilidad.</h4>
            <h1 class="text-white fadeIn2 fadeInBottom">BIENVENIDOS A TERRA BANK UNIVERSAL</h1>
            <p class="lead mb-5 fadeIn3 fadeInBottom text-white opacity-5">{{$slider->body}}</p>

            <a href="{{ url('/register') }}" type="submit" class="btn bg-primary btn-rounded me-2 fadeIn1 fadeInBottom">Registrarse ahora</a>
            <button type="submit" class="btn bg-white btn-icon-only rounded-circle fadeIn1 fadeInBottom"><i class="fas fa-play"></i></button>
            @endif



          </div>
        </div>
      </div>
      <img src="{{ asset('assets/img/illustrations/man-rocket.png') }}" class="position-absolute floating-man ms-7 fadeIn1 fadeInBottom mt-n10 d-none d-sm-none d-md-none d-lg-block"  alt="">
      <img src="{{ asset('assets/img/illustrations/man-cloud.png') }}" class="position-absolute floating-man end-0 fadeIn3 fadeInBottom me-8 mt-10 d-none d-sm-none d-md-none d-lg-block"  alt="">
  
      <div class="position-absolute w-100 z-index-1 bottom-0">
        <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
        viewBox="0 24 150 40" preserveAspectRatio="none" shape-rendering="auto">
          <defs>
            <path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
          </defs>
          <g class="moving-waves">
            <use xlink:href="#gentle-wave" x="48" y="-1" fill="rgba(255,255,255,0.40" />
            <use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(255,255,255,0.35)" />
            <use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(255,255,255,0.25)" />
            <use xlink:href="#gentle-wave" x="48" y="8" fill="rgba(255,255,255,0.20)" />
            <use xlink:href="#gentle-wave" x="48" y="13" fill="rgba(255,255,255,0.15)" />
            <use xlink:href="#gentle-wave" x="48" y="16" fill="rgba(255,255,255,1" />
          </g>
        </svg>
      </div>
    </div>
  </header> --}}

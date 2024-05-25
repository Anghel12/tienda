<header class="position-relative">
    <div class="page-header min-vh-100 position-relative" style="background-image: url(https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/assets/img/nightsky.jpg);">
      <span class="mask bg-gradient-dark"></span>
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6 text-center mx-auto mt-n7">


            @if($content)

            <h4 class="text-gradient text-primary fadeIn1 fadeInBottom">{{$content->title}}</h4>
            <h1 class="text-white fadeIn2 fadeInBottom">{{$content->subtitle}}</h1>
            <p class="lead mb-5 fadeIn3 fadeInBottom text-white opacity-5">{{$content->body}}</p>
            <button type="submit" class="btn bg-white btn-rounded me-2 fadeIn1 fadeInBottom">Registrarse ahora</button>
            <button type="submit" class="btn bg-white btn-icon-only rounded-circle fadeIn1 fadeInBottom"><i class="fas fa-play"></i></button>
    
            @auth
            @if(auth()->user()->hasRole('Admin'))
            <a href="{{ route('admin.content.edit', $content) }}" class="btn bg-success btn-rounded me-2 fadeIn1 fadeInBottom">Editar</a>
        @endif
            @endauth
        
           

            @else
            <h4 class="text-gradient text-primary fadeIn1 fadeInBottom">BIENVENIDOS A TERRA BANK UNIVERSAL </h4>
            <h1 class="text-white fadeIn2 fadeInBottom">Primer fondo de alta rentabilidad.</h1>
            <p class="lead mb-5 fadeIn3 fadeInBottom text-white opacity-5">{{$slider->body}}</p>
            <button type="submit" class="btn bg-white btn-rounded me-2 fadeIn1 fadeInBottom">Registrarse ahora</button>
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
  </header>
{{--   <div class="container my-5">
    <div class="row">
        <div class="col-lg-2 col-md-6 col-6">
          <img class="w-100 opacity-7" src="../../assets/img/logos/gray-logos/logo-apple.svg">
        </div>
        <div class="col-lg-2 col-md-6 col-6">
          <img class="w-100 opacity-7" src="../../assets/img/logos/gray-logos/logo-facebook.svg">
        </div>
        <div class="col-lg-2 col-md-6 col-6">
          <img class="w-100 opacity-7" src="../../assets/img/logos/gray-logos/logo-behance.svg">
        </div>

        <div class="col-lg-2 col-md-6 col-6">
          <img class="w-100 opacity-7" src="../../assets/img/logos/gray-logos/logo-digitalocean.svg">
        </div>

      </div>
  </div> --}}
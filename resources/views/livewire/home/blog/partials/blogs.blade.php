<div class="container " style="height: 100%; padding-top: 5rem;">
  <div class="row mt-40">
    <div class="col-lg-12">

      @foreach ($main_blog as $item)
          
 
      <div class="row card-minimalista" style="padding-top: 7vh">
        <div class="col-lg-6 justify-content-center d-flex flex-column ">
          <div class="card">
            <div class="d-block blur-shadow-image">
              <img loading="lazy"
                src="https://img.freepik.com/foto-gratis/hermosa-foto-enfoque-selectivo-bola-cristal-que-refleja-impresionante-puesta-sol_181624-8579.jpg?t=st=1733207179~exp=1733210779~hmac=d6f297f5ca59f567f22d268b760bd4c43b609a469c329929e262da8df57a12f5&w=900"
                alt="img-blur-shadow-blog-2" class="img-fluid border-radius-lg">
            </div>
          </div>
        </div>
        <div class="col-lg-6 justify-content-center d-flex flex-column p-4">
          <h6 class="category text-primary mt-3">Blog</h6>
          <h3 class="card-title">
            <a href="javascript:;" class="text-white">{{$item->title}}</a>
          </h3>
          <p class="card-description" style="width: 100%">
          {{$item->body}} <a href="{{ route('admin.blogs.show', $item->id )}}" class="text-darker icon-move-right text-sm">Read More
              <i class="fas fa-arrow-right text-xs ms-1"></i>
            </a>
          </p>
          <p class="author">
            by <a href="javascript:;" class="ms-1"><span class="font-weight-bold text-primary"> {{ $item->user->name}}</span></a>,
            2 days ago
          </p>
          @auth
          @if(auth()->user()->hasRole('Admin'))
          <a class="btn bg-success btn-rounded me-2 fadeIn1 fadeInBottom"href="{{ route('admin.blogs.edit', $item->id )}}">Editar Blog</a>
         @endif
          @endauth
       
        </div>
      </div>
      @endforeach


      <div class="row mt-5">
        @foreach ($blogs as $item)
        <div class=" mb-5">
        
          <div class="row card-minimalista" style="padding-top: 7vh">
            <div class="col-lg-6 justify-content-center d-flex flex-column ">
              <div class="card">
                <div class="d-block blur-shadow-image">
                  <img loading="lazy"
                    src="https://img.freepik.com/foto-gratis/majestuoso-pico-montana-tranquilo-paisaje-invernal-generado-ia_188544-15662.jpg"
                    alt="img-blur-shadow-blog-2" class="img-fluid border-radius-lg">
                </div>
              </div>
            </div>
            <div class="col-lg-6 justify-content-center d-flex flex-column pl-lg-5 pt-lg-0 pt-3">
              <h6 class="category text-primary mt-3">Blog</h6>
              <h3 class="card-title">
                <a href="javascript:;" class="text-white">{{$item->title}}</a>
              </h3>
              <p class="card-description formatted-text" style="width: 100%">
              {{$item->body}} 
              <a href="{{ route('admin.blogs.show', $item->id )}}" class="text-darker icon-move-right text-sm">Ver Blog
                  <i class="fas fa-arrow-right text-xs ms-1"></i>
                </a>
              </p>
              <p class="author">
                by <a href="javascript:;" class="ms-1"><span class="font-weight-bold text-primary"> {{ $item->user->name}}</span></a>,
                2 days ago
              </p>
              @auth
              @if(auth()->user()->hasRole('Admin'))
              <a class="btn bg-success btn-rounded me-2 fadeIn1 fadeInBottom"href="{{ route('admin.blogs.edit', $item->id )}}">Editar Blog</a>
             @endif
              @endauth
           
            </div>
           
          </div>
        </div>
          @endforeach 
      </div>
     {{--  <div class="row mt-5">
        <div class="col-lg-6 justify-content-center d-flex flex-column">
          <div class="card">
            <div class="d-block blur-shadow-image">
              <img
                src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/assets/img/jump.jpg"
                alt="img-blur-shadow-blog-2" class="img-fluid border-radius-lg">
            </div>
          </div>
        </div>
        <div class="col-lg-6 justify-content-center d-flex flex-column pl-lg-5 pt-lg-0 pt-3">
          <h6 class="category text-warning mt-3">Productivity</h6>
          <h3 class="card-title">
            <a href="javascript:;" class="text-dark">Interesting factoids I bet you never knew about Creative Tim</a>
          </h3>
          <p class="card-description">
            Warner Music Group announced today it’s acquiring the selected assets of the music platform Songkick,
            including its app for finding concerts and the company’s trademark. Songkick has been involved in a lawsuit
            against the major… <a href="javascript:;" class="text-darker icon-move-right text-sm">Read More
              <i class="fas fa-arrow-right text-xs ms-1"></i>
            </a>
          </p>
          <p class="author">
            by <a href="javascript:;" class="ms-1"><span class="font-weight-bold text-warning"> Sarah Perez</span></a>,
            2 days ago
          </p>
        </div>
      </div>
      <div class="row">
        <div class="row mt-5">
          <div class="col-lg-4 mb-lg-0 mb-4">

            <a href="javascript:;">
              <div class="card card-background move-on-hover">
                <div class="full-background"
                  style="background-image: url('https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/assets/img/color-ananas.jpg')">
                </div>
                <div class="card-body pt-12">
                  <h4 class="text-white">History of Industry</h4>
                  <p>Knowing the history better than anybody else is a huge career advantage, which is wild because even
                    though it’s so simple, few people read up.</p>
                </div>
              </div>
            </a>

          </div>
          <div class="col-lg-4 mb-lg-0 mb-4">

            <a href="javascript:;">
              <div class="card card-background move-on-hover">
                <div class="full-background"
                  style="background-image: url('https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/assets/img/color-banana.jpg')">
                </div>
                <div class="card-body pt-12">
                  <h4 class="text-white">Digital Representation</h4>
                  <p>Every protocol has a token, to where every application has a token, to where every valuable
                    representation of an object or person has token.</p>
                </div>
              </div>
            </a>

          </div>
          <div class="col-lg-4">

            <a href="javascript:;">
              <div class="card card-background move-on-hover">
                <div class="full-background"
                  style="background-image: url('https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/assets/img/color-orange.jpg')">
                </div>
                <div class="card-body pt-12">
                  <h4 class="text-white">Beginning of an Infinity</h4>
                  <p>Website visitors today demand a frictionless user expericence — especially when using search.
                    Because of the hight standards.</p>
                </div>
              </div>
            </a>

          </div>
        </div>
      </div>
      <ul class="pagination pagination-primary my-5">
        <li class="page-item">
          <a class="page-link" href="javascript:;" aria-label="Previous">
            <span aria-hidden="true"><i class="fa fa-angle-double-left" aria-hidden="true"></i></span>
          </a>
        </li>
        <li class="page-item">
          <a class="page-link" href="javascript:;">1</a>
        </li>
        <li class="page-item">
          <a class="page-link" href="javascript:;">2</a>
        </li>
        <li class="page-item active">
          <a class="page-link" href="javascript:;">3</a>
        </li>
        <li class="page-item">
          <a class="page-link" href="javascript:;">4</a>
        </li>
        <li class="page-item">
          <a class="page-link" href="javascript:;">5</a>
        </li>
        <li class="page-item">
          <a class="page-link" href="javascript:;" aria-label="Next">
            <span aria-hidden="true"><i class="fa fa-angle-double-right" aria-hidden="true"></i></span>
          </a>
        </li>
      </ul> --}}
    </div>
  </div>
  
@include('posts.partials.footer')
</div>

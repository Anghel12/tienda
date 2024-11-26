<header>
  <div class="page-header min-vh-50"
    style="background-image: url('https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/assets/img/minimal-interior.jpg')">
    <span class="mask bg-gradient-primary"></span>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mx-auto text-white text-center">
          <h2 class="text-white">Buscar Blogs </h2>
          <p class="lead">Un lugar para que los emprendedores compartan y descubran nuevas historias.</p>
        </div>
      </div>
    </div>
  </div>
  <div class="position-relative overflow-hidden" style="height:36px;margin-top:-35px;">
    <div class="w-full absolute bottom-0 start-0 end-0"
      style="transform: scale(2);transform-origin: top center;color: #fff;">
      <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
      </svg>
    </div>
  </div>
  <div class="container">
    <div class="row bg-white shadow-lg mt-n6 border-radius-md pb-4 p-3 position-relative w-75 mx-auto">
      <div class="col-lg-8 mt-lg-n2 mt-2">
        <label>Buscar</label>
        <div class="input-group">
          <span class="input-group-text"><i class="fas fa-search"></i></span>
          <input class="form-control" placeholder="Search for category" type="text">
        </div>
      </div>
      <div class="col-lg-4 d-flex align-items-center mt-lg-auto mt-2">
        <button type="button" class="btn bg-gradient-primary w-100 mb-0">Buscar</button>
      </div>
    </div>
  </div>
</header>

<div class="container mt-7">
  <div class="row">
    <div class="col-lg-12">

      @foreach ($main_blog as $item)
          
 
      <div class="row">
        <div class="col-lg-6 justify-content-center d-flex flex-column">
          <div class="card">
            <div class="d-block blur-shadow-image">
              <img
                src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/assets/img/color-chair.jpg"
                alt="img-blur-shadow-blog-2" class="img-fluid border-radius-lg">
            </div>
          </div>
        </div>
        <div class="col-lg-6 justify-content-center d-flex flex-column pl-lg-5 pt-lg-0 pt-3">
          <h6 class="category text-primary mt-3">Coworking</h6>
          <h3 class="card-title">
            <a href="javascript:;" class="text-dark">{{$item->title}}</a>
          </h3>
          <p class="card-description">
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


      <div class="row">
        <div class="row mt-5">


          @foreach ($blogs as $item)
              
  

          <div class="col-lg-4 mb-lg-0 mb-4">

            <a href="javascript:;">
              <div class="card card-background move-on-hover">
                <div class="full-background"
                  style="background-image: url('https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/assets/img/baloon.jpg')">
                </div>
                <div class="card-body pt-12">
                  <h4 class="text-white">{{$item->title}}</h4>
                  <p>  {{$item->body}}</p>
                </div>
              </div>
            </a>

          </div>
          @endforeach

  {{--         <div class="col-lg-4 mb-lg-0 mb-4">

            <a href="javascript:;">
              <div class="card card-background move-on-hover">
                <div class="full-background"
                  style="background-image: url('https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/assets/img/color-time.jpg')">
                </div>
                <div class="card-body pt-12">
                  <h4 class="text-white">Search and Discovery</h4>
                  <p>A network alone will not lead to opportunities.
                    It has to be combined with the content you consume (books, media) to see how this network.
                  </p>
                </div>
              </div>
            </a>

          </div>
          <div class="col-lg-4">

            <a href="javascript:;">
              <div class="card card-background move-on-hover">
                <div class="full-background"
                  style="background-image: url('https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/assets/img/cactus.jpg')">
                </div>
                <div class="card-body pt-12">
                  <h4 class="text-white">People get Intimidated </h4>
                  <p>If you’re living well, you will make dissatisfied people feel insignificnt. People get intimidated
                    by anything that makes them feel small.</p>
                </div>
              </div>
            </a>

          </div> --}}
        </div>
      </div>
      <div class="row mt-5">
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
      </ul>
    </div>
  </div>
</div>

<footer class="footer py-5 bg-gradient-dark position-relative overflow-hidden">
  <img src="../../assets/img/shapes/waves-white.svg" alt="pattern-lines"
    class="position-absolute start-0 top-0 w-100 opacity-6">
  <div class="container position-relative">
    <div class="row">
      <div class="col-lg-4 me-auto mb-lg-0 mb-4 text-lg-start text-center">
        <h6 class="text-white font-weight-bolder text-uppercase mb-lg-4 mb-3">Soft</h6>
        <ul class="nav flex-row ms-n3 justify-content-lg-start justify-content-center mb-4 mt-sm-0">
          <li class="nav-item">
            <a class="nav-link text-white opacity-8" href="https://www.creative-tim.com" target="_blank">
              Home
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white opacity-8" href="https://www.creative-tim.com/presentation" target="_blank">
              About
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white opacity-8" href="https://www.creative-tim.com/blog" target="_blank">
              Blog
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white opacity-8" href="https://www.creative-tim.com" target="_blank">
              Services
            </a>
          </li>
        </ul>
        <p class="text-sm text-white opacity-8 mb-0">
          Copyright © <script>
            document.write(new Date().getFullYear())
          </script> Soft by Creative Tim.
        </p>
      </div>
      <div class="col-lg-6 ms-auto text-lg-end text-center">
        <p class="mb-5 text-lg text-white font-weight-bold">
          The reward for getting on the stage is fame. The price of fame is you can’t get off the stage.
        </p>
        <a href="javascript:;" target="_blank" class="text-white me-xl-4 me-4 opacity-5">
          <span class="fab fa-dribbble"></span>
        </a>
        <a href="javascript:;" target="_blank" class="text-white me-xl-4 me-4 opacity-5">
          <span class="fab fa-twitter"></span>
        </a>
        <a href="javascript:;" target="_blank" class="text-white me-xl-4 me-4 opacity-5">
          <span class="fab fa-pinterest"></span>
        </a>
        <a href="javascript:;" target="_blank" class="text-white opacity-5">
          <span class="fab fa-github"></span>
        </a>
      </div>
    </div>
  </div>
</footer>
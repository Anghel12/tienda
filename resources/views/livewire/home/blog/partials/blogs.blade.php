<div class="container " style="height: 100%; padding-top: 5rem;">
  <div class="row mt-40">
    <div class="col-lg-12">

      @foreach ($main_blog as $item)
          
      <div class="mb-5">
        
        <div class="row card-minimalista">
          <div class="col-lg-6 justify-content-center d-flex flex-column ">
            <a href="{{ route('home.blogs.show', ['slug' => $item->slug]) }}">
            <div class="card">
              <div class="d-block blur-shadow-image">

                @if ($item->mainImage)
                <picture>
                    <img 
                        loading="lazy"
                        style="height:250px; width:100%" 
                        class="img-fluid card-img-top rounded-3" 
                        src="{{ $item->mainImage->url ?? '' }}" 
                        alt="{{ $item->name }}">
                </picture>
               @else
                     <picture>
                <img loading="lazy" 
                style="height:250px; width:100%" 
                class="img-fluid card-img-top rounded-3" 
                src="https://img.freepik.com/foto-gratis/hermosa-foto-enfoque-selectivo-bola-cristal-que-refleja-impresionante-puesta-sol_181624-8579.jpg?t=st=1733207179~exp=1733210779~hmac=d6f297f5ca59f567f22d268b760bd4c43b609a469c329929e262da8df57a12f5&w=900" 
                alt="{{ $item->name }}">
               </picture>
                @endif

              </div>
            </div>
          </a>
          </div>

          <div class="col-lg-6 justify-content-center d-flex flex-column pl-lg-5 pt-lg-0 pt-3">
            <a href="{{ route('home.blogs.show', ['slug' => $item->slug]) }}" >
            <h6 class="category text-primary mt-3">Blog</h6>
            <h3 class="card-title text-white">{{$item->title}}
             
            </h3>
          </a>
            <p class="card-description formatted-text" style="width: 100%; max-height: 100px; overflow: hidden; text-overflow: ellipsis;">
              {{$item->body}}
              <a href="{{ route('home.blogs.show', $item->slug )}}" class="text-darker icon-move-right text-sm">Ver Blog
                  <i class="fas fa-arrow-right text-xs ms-1"></i>
              </a>
          </p>
          
            <p class="author">
             Creado por: <a href="{{ route('admin.profile.show', $item->user->id )}}" class="ms-1"><span class="font-weight-bold text-primary"> {{ $item->user->name}}</span></a>,
              {{ $item->created_at->diffForHumans() ?? '2 dias' }}
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


      <div class="row mt-5">
        @foreach ($blogs as $item)
        <div class="mb-5">
        
          <div class="row card-minimalista">
            <div class="col-lg-6 justify-content-center d-flex flex-column ">
              <a href="{{ route('home.blogs.show', ['slug' => $item->slug]) }}">
              <div class="card">
                <div class="d-block blur-shadow-image">

                  @if ($item->mainImage)
                  <picture>
                      <img 
                          loading="lazy"
                          style="height:250px; width:100%" 
                          class="img-fluid card-img-top rounded-3" 
                          src="{{ $item->mainImage->url ?? '' }}" 
                          alt="{{ $item->name }}">
                  </picture>
                 @else
                       <picture>
                  <img loading="lazy" 
                  style="height:250px; width:100%" 
                  class="img-fluid card-img-top rounded-3" 
                  src="https://img.freepik.com/foto-gratis/hermosa-foto-enfoque-selectivo-bola-cristal-que-refleja-impresionante-puesta-sol_181624-8579.jpg?t=st=1733207179~exp=1733210779~hmac=d6f297f5ca59f567f22d268b760bd4c43b609a469c329929e262da8df57a12f5&w=900" 
                  alt="{{ $item->name }}">
                 </picture>
                  @endif

                </div>
              </div>
            </a>
            </div>

            <div class="col-lg-6 justify-content-center d-flex flex-column pl-lg-5 pt-lg-0 pt-3">
              <a href="{{ route('home.blogs.show', ['slug' => $item->slug]) }}" >
              <h6 class="category text-primary mt-3">Blog</h6>
              <h3 class="card-title text-white">{{$item->title}}
               
              </h3>
            </a>
              <p class="card-description formatted-text" style="width: 100%; max-height: 100px; overflow: hidden; text-overflow: ellipsis;">
                {{$item->body}}
                <a href="{{ route('home.blogs.show', $item->slug )}}" class="text-darker icon-move-right text-sm">Ver Blog
                    <i class="fas fa-arrow-right text-xs ms-1"></i>
                </a>
            </p>
            
              <p class="author">
               Creado por: <a href="{{ route('admin.profile.show', $item->user->id )}}" class="ms-1"><span class="font-weight-bold text-primary"> {{ $item->user->name}}</span></a>,
                {{ $item->created_at->diffForHumans() ?? '2 dias' }}
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
    
    </div>
  </div>

  <style>
    .card-minimalista {
      border-radius: 10px;
      overflow: hidden;
      transition: all 0.3s ease-in-out; /* Transición suave para todas las propiedades */
    }

    .card-minimalista:hover {
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); /* Aumento de la sombra */
      transform: scale(1.05); /* Agrandado del card al 105% */
    }
  </style>
</div>

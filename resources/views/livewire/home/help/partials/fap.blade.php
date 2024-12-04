
<section class="py-lg-5 mt-lg-5">
  <div class="container" style="height: 100%; padding-top: 5rem;">
    <div class="row my-5">
      <div class="col-md-6 mx-auto text-center">
        <h2>Preguntas Frecuentes que nos hacen </h2>
        <p>Respondemos a todas sus preguntas aqui, si aun no entiendes como funciona contactanos atraves de esta web
        </p>
      </div>
    </div>
    <div class="row">
      <div class="col-md-10 mx-auto">
        <div class="accordion" id="accordionRental">

          @foreach ($HomeHelps as $HomeHelp)
          <div class="accordion-item mb-3">
            <h5 class="accordion-header" id="heading{{ $HomeHelp->id }}">
              <button class="accordion-button border-bottom font-weight-bold text-start" type="button"
                data-bs-toggle="collapse" data-bs-target="#collapse{{ $HomeHelp->id }}" aria-expanded="true"
                aria-controls="collapse{{ $HomeHelp->id }}">
               {{ $HomeHelp->title }}
                <i class="collapse-close fa fa-plus text-xs pt-1 position-absolute end-0 me-3"></i>
                <i class="collapse-open fa fa-minus text-xs pt-1 position-absolute end-0 me-3"></i>
              </button>
            </h5>
            <div id="collapse{{ $HomeHelp->id }}" class="accordion-collapse collapse show"
              aria-labelledby="heading{{ $HomeHelp->id }}" data-bs-parent="#accordionRental">
              <div class="accordion-body text-sm opacity-8">
                <p>{{ $HomeHelp->body }}</p>
              </div>
            </div>
          </div>

          @auth
          @if(auth()->user()->hasRole('Admin'))
          <a href="{{ route('admin.home.helps.edit', $HomeHelp->id) }}" class="btn btn-warning">Editar</a>
          @endif
          @endauth

          @endforeach

        </div>
      </div>
    </div>
  </div>
</section>
@include('posts.partials.form_contact')

@include('posts.partials.footer')
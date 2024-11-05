<header class="position-relative">
  <div class="page-header min-vh-50" style="background-image: url('../assets/img/curved-images/curved14.jpg');">
    <span class="mask bg-gradient-dark opacity-6"></span>
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-6 col-sm-9 text-center mx-auto mb-4">
          <h2 class="text-white mb-3">Como podemos ayudarte?</h2>
          <div class="row">
            <div class="col-md-8 col-7">
              <div class="input-group">
                <span class="input-group-text"><i class="fas fa-search"></i></span>
                <input type="text" class="form-control" placeholder="Search after">
              </div>
            </div>
            <div class="col-md-4 col-5 text-start ps-0">
              <button type="button" class="btn bg-gradient-info w-100 mb-0 h-100">Buscar problema</button>
            </div>
          </div>
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
        <use xlink:href="#gentle-wave" x="48" y="16" fill="rgba(255,255,255,0.95" />
      </g>
    </svg>
  </div>
</header>


{{-- <section class="py-7">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 mx-auto text-center pb-4">
        <h4 class="text-gradient text-info">Social Analytics</h4>
        <h2>Turn your idea into a startup</h2>
        <p class="lead">We’re constantly trying to express ourselves and actualize our dreams. If you have the
          opportunity to play </p>
      </div>
    </div>
    <div class="row mt-4">
      <div class="col-lg-4 col-md-6">
        <div class="p-3 text-center">
          <div class="icon icon-shape bg-gradient-info shadow text-center">
            <i class="ni ni-single-02"></i>
          </div>
          <h5 class="mt-4">Check our team</h5>
          <p class="mb-0">We get insulted by others, lose trust for those others. We get back here to follow my dreams
          </p>
        </div>
      </div>
      <div class="col-lg-4 col-md-6">
        <div class="p-3 text-center">
          <div class="icon icon-shape bg-gradient-info shadow text-center">
            <i class="ni ni-email-83"></i>
          </div>
          <h5 class="mt-4">Support 24/7</h5>
          <p class="mb-0">We get insulted by others, lose trust for those others. We get back here to follow my dreams
          </p>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 mx-md-auto">
        <div class="p-3 text-center">
          <div class="icon icon-shape bg-gradient-info shadow text-center">
            <i class="ni ni-atom"></i>
          </div>
          <h5 class="mt-4">Unlimited revisions</h5>
          <p class="mb-0">We get insulted by others, lose trust for those others. We get back here to follow my dreams
          </p>
        </div>
      </div>
    </div>
  </div>
</section>
--}}
<section class="py-lg-5 mt-lg-5">
  <div class="container">
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
                {{ $HomeHelp->body }}
              </div>
            </div>
          </div>

          @auth
          @if(auth()->user()->hasRole('Admin'))
          <a href="{{ route('admin.home.helps.edit', $HomeHelp->id) }}" class="btn btn-warning">Editar</a>
          @endif
          @endauth

          @endforeach

          {{-- <div class="accordion-item mb-3">
            <h5 class="accordion-header" id="headingTwo">
              <button class="accordion-button border-bottom font-weight-bold text-start" type="button"
                data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false"
                aria-controls="collapseTwo">
                How can i make the payment?
                <i class="collapse-close fa fa-plus text-xs pt-1 position-absolute end-0 me-3"></i>
                <i class="collapse-open fa fa-minus text-xs pt-1 position-absolute end-0 me-3"></i>
              </button>
            </h5>
            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
              data-bs-parent="#accordionRental">
              <div class="accordion-body text-sm opacity-8">
                It really matters and then like it really doesn’t matter. What matters is the people who are sparked
                by it. And the people who are like offended by it, it doesn’t matter. Because it's about motivating
                the doers. Because I’m here to follow my dreams and inspire other people to follow their dreams, too.
                <br>
                We’re not always in the position that we want to be at. We’re constantly growing. We’re constantly
                making mistakes. We’re constantly trying to express ourselves and actualize our dreams. If you have
                the opportunity to play this game of life you need to appreciate every moment. A lot of people don’t
                appreciate the moment until it’s passed.
              </div>
            </div>
          </div> --}}

        </div>
      </div>
    </div>
  </div>
</section>

{{--
<section class="py-7">
  <div class="container">
    <div class="row">
      <div class="col-lg-5 col-10 ms-auto me-auto text-center">
        <div class="p-3 info-hover-warning">
          <div class="icon icon-shape bg-gradient-primary shadow icon-shape-circle text-primary">
            <i class="fa fa-cogs"></i>
          </div>
        </div>
        <h3 class="text-gradient text-primary mb-0 mt-4">Beware The Components</h3>
        <h3>How To Handle Them</h3>
        <p>We’re constantly trying to express ourselves and actualize our dreams. Don't stop.</p>
      </div>
    </div>
    <div class="row mt-5">
      <div class="col-md-4 ms-auto my-auto">
        <div class="cursor-pointer">
          <div class="card card-background tilt" data-tilt>
            <div class="full-background"
              style="background-image: url('https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/assets/img/team-working.jpg')">
            </div>
            <div class="card-body pt-7 text-center">
              <div class="icon icon-lg up mb-3">
                <svg width="40px" height="40px" viewBox="0 0 40 40" version="1.1" xmlns="http://www.w3.org/2000/svg"
                  xmlns:xlink="http://www.w3.org/1999/xlink">
                  <title>chart-pie-35</title>
                  <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <g transform="translate(-1720.000000, -742.000000)" fill="#FFFFFF" fill-rule="nonzero">
                      <g transform="translate(1716.000000, 291.000000)">
                        <g transform="translate(4.000000, 451.000000)">
                          <path
                            d="M21.6666667,18.3333333 L39.915,18.3333333 C39.11,8.635 31.365,0.89 21.6666667,0.085 L21.6666667,18.3333333 Z"
                            opacity="0.602864583"></path>
                          <path
                            d="M20.69,21.6666667 L7.09833333,35.2583333 C10.585,38.21 15.085,40 20,40 C30.465,40 39.0633333,31.915 39.915,21.6666667 L20.69,21.6666667 Z">
                          </path>
                          <path
                            d="M18.3333333,19.31 L18.3333333,0.085 C8.085,0.936666667 0,9.535 0,20 C0,24.915 1.79,29.415 4.74166667,32.9016667 L18.3333333,19.31 Z">
                          </path>
                        </g>
                      </g>
                    </g>
                  </g>
                </svg>
              </div>
              <h1 class="text-white up mb-0">Search and Discover!</h1>
              <p class="lead up">Website visitors</p>
              <button type="button" class="btn btn-white btn-lg mt-3 up">Get Started</button>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-5 me-auto my-auto ms-md-5">
        <div class="p-3 info-horizontal d-flex">
          <div>
            <h5>1. Listen to Social Conversations</h5>
            <p>
              Gain access to the demographics, psychographics, and location of unique people who are interested and
              talk about your brand.
            </p>
          </div>
        </div>
        <div class="p-3 info-horizontal d-flex">
          <div>
            <h5>2. Performance Analyze</h5>
            <p>
              Unify data from Facebook, Instagram, Twitter, LinkedIn, and Youtube to gain rich insights from
              easy-to-use reports.
            </p>
          </div>
        </div>
        <div class="p-3 info-horizontal d-flex">
          <div>
            <h5>3. Social Conversions</h5>
            <p>
              Track actions taken on your website that originated from social, and understand the impact on your
              bottom line.
            </p>
          </div>
        </div>
      </div>
    </div>
    <hr class="horizontal dark my-sm-6 my-3 mx-7">
    <div class="row">
      <div class="col-md-5 ms-auto my-auto">
        <div class="p-3 info-horizontal d-flex">
          <div>
            <h5>1. Always In Sync</h5>
            <p>
              No matter where you are, Trello stays in sync across all of your devices.
            </p>
          </div>
        </div>
        <div class="p-3 info-horizontal d-flex">
          <div>
            <h5>2. Work With Any Team</h5>
            <p>
              Whether it’s for work or even the next family vacation, Trello helps your team.
            </p>
          </div>
        </div>
        <div class="p-3 info-horizontal d-flex">
          <div>
            <h5>3. A Productivity Platform</h5>
            <p>
              Integrate the apps your team already uses directly into your workflow.
            </p>
          </div>
        </div>
      </div>
      <div class="col-md-4 me-auto my-auto ms-md-5">
        <div class="cursor-pointer">
          <div class="card card-background tilt" data-tilt>
            <div class="full-background"
              style="background-image: url('https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/assets/img/coffee-shop.jpg')">
            </div>
            <div class="card-body pt-7 text-center">
              <div class="icon icon-lg up mb-3">
                <svg width="40px" height="40px" viewBox="0 0 46 42" version="1.1" xmlns="http://www.w3.org/2000/svg"
                  xmlns:xlink="http://www.w3.org/1999/xlink">
                  <title>customer-support</title>
                  <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <g transform="translate(-1717.000000, -291.000000)" fill="#FFFFFF" fill-rule="nonzero">
                      <g transform="translate(1716.000000, 291.000000)">
                        <g transform="translate(1.000000, 0.000000)">
                          <path
                            d="M45,0 L26,0 C25.447,0 25,0.447 25,1 L25,20 C25,20.379 25.214,20.725 25.553,20.895 C25.694,20.965 25.848,21 26,21 C26.212,21 26.424,20.933 26.6,20.8 L34.333,15 L45,15 C45.553,15 46,14.553 46,14 L46,1 C46,0.447 45.553,0 45,0 Z"
                            opacity="0.59858631"></path>
                          <path
                            d="M22.883,32.86 C20.761,32.012 17.324,31 13,31 C8.676,31 5.239,32.012 3.116,32.86 C1.224,33.619 0,35.438 0,37.494 L0,41 C0,41.553 0.447,42 1,42 L25,42 C25.553,42 26,41.553 26,41 L26,37.494 C26,35.438 24.776,33.619 22.883,32.86 Z">
                          </path>
                          <path
                            d="M13,28 C17.432,28 21,22.529 21,18 C21,13.589 17.411,10 13,10 C8.589,10 5,13.589 5,18 C5,22.529 8.568,28 13,28 Z">
                          </path>
                        </g>
                      </g>
                    </g>
                  </g>
                </svg>
              </div>
              <h1 class="text-white up mb-0">Talk and Meet!</h1>
              <p class="lead up">Social activities</p>
              <button type="button" class="btn btn-white btn-lg mt-3 up">Get Started</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section> --}}

@include('posts.partials.form_contact')

@include('posts.partials.footer')
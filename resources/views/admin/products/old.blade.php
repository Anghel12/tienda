<x-guest-layout>
    <div class="content">
      <nav class="mb-2" aria-label="breadcrumb">
        <ol class="breadcrumb mb-0">
          <li class="breadcrumb-item"><a href="pricing-grid.html#!">Moneda</a></li>
          <li class="breadcrumb-item active">Balance</li>
        </ol>
      </nav>
      <div class="pb-9">
        <h2 class="mb-7">Balance</h2>
        <div class="row">
          <div class="col-xl-12 col-xxl-9 mb-1">
            <div class="tabs mb-7">
              <ul class="nav nav-underline nav-tabs mb-3" id="nav-tab" role="tablist">
                <li class="nav-item" role="presentation"><button class="nav-link" id="pills-year-tab" data-bs-toggle="pill" data-bs-target="#pills-year" type="button" role="tab" aria-controls="pills-year" aria-selected="false">My Wallet</button></li>
                <li class="nav-item" role="presentation"><button class="nav-link active" id="pills-month-tab" data-bs-toggle="pill" data-bs-target="#pills-month" type="button" role="tab" aria-controls="pills-month" aria-selected="true">Comprar {{ $coin->name }} </button></li>
              </ul>
  
              
  
              <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-month" role="" aria-labelledby="pills-month-tab">
                  <div class="row g-3">
  
  
                    <div class="col-12 col-md-6 col-lg-12 col-xl-6">
                      <div class="h-100">{{-- <input class="pricing-plan-radio d-none" type="radio" name="pricingMonthly" id="standard" /> --}}
                        <div class="position-relative h-100"><label class="stretched-link" for="standard"></label>
  
                          <div class="card h-100 overflow-hidden cursor-pointer">
                            <div class="bg-holder d-dark-none" style="background-image:url({{ asset('cssadmin/assets/img/bg/9.png') }});"></div>
                            <!--/.bg-holder-->
                            <div class="bg-holder d-light-none" style="background-image:url({{ asset('cssadmin/assets/img/bg/9-dark.png') }});"></div>
                            <!--/.bg-holder-->
                            <div class="card-body d-flex flex-column justify-content-between position-relative">
                              <div class="d-flex justify-content-between">
                                <div class="mb-5 mb-md-0 mb-lg-5 me-3">
                                  <div class="d-sm-flex align-items-center mb-3">
                                    <h3 class="mb-0">{{ $coin->name }}</h3><span class="badge ms-sm-3 text-uppercase fs--2 bg-success">recommended</span>
                                  </div>
  
                                  <p class="fs--1 text-700">moneda <br> virtual</p>
                                  <div class="d-flex align-items-end mb-md-5 mb-lg-0">
                                    <h4 class="fw-bolder me-1">{{ $coin->symbol }} {{ $coin->exchange_rate }}</h4>
                                    <h5 class="fs--1 fw-normal text-700 ms-1">Per month</h5>
  
                                  </div>
                                  <div class="col-auto p-2"><a href="{{ route('admin.buyCoins.index') }}" class="btn btn-phoenix-success"><span class="far fa-credit-card me-2 "></span>Comprar</a></div>
                          
                                  
                                </div><img class="d-dark-none" src="{{ asset('cssadmin/assets/img/spot-illustrations/bag-2.png') }}" width="54" height="54" alt="" /><img class="d-light-none" src="{{ asset('cssadmin/assets/img/spot-illustrations/bag-2-dark.png') }}" width="54" height="54" alt="" />
                              </div>
                              <div class="row flex-1 justify-content-end">
                                <div class="col-sm-8 col-md-12">
                                  <div class="d-sm-flex d-md-block d-lg-flex justify-content-end align-items-end h-100">
                                    <ul class="list-unstyled mb-0 border-start-sm border-start-md-0 border-start-lg ps-sm-5 ps-md-0 ps-lg-5 border-200">
                                      <li class="d-flex align-items-center"><span class="uil uil-check-circle text-success me-2"></span><span class="text-700 fw-semi-bold">Up to 8 Members</span></li>
                                      <li class="d-flex align-items-center"><span class="uil uil-check-circle text-success me-2"></span><span class="text-700 fw-semi-bold">Create & Share libraries</span></li>
                                      <li class="d-flex align-items-center"><span class="uil uil-check-circle text-success me-2"></span><span class="text-700 fw-semi-bold">10 Collaboration projects</span></li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          
                        </div>
                      </div>
                    </div>
  
  
  
                  </div>
                </div>
              </div>
  
  
  
              {{-- WAllet --}}
  
  
              <div class="tab-content" id="pills-tabContentYear">
                <div class="tab-pane fade" id="pills-year" role="tabpanel" aria-labelledby="pills-year-tab">
                  <div class="row g-3">
  
  
                    <div class="col-12 col-lg-6">
                      <div class="card h-100">
                        <div class="card-body">
                          <div class="border-bottom border-dashed border-300">
                            <h4 class="mb-3 lh-sm lh-xl-1">My Wallet<button class="btn btn-link p-0" type="button"> <span class="fas fa-edit fs--1 ms-3 text-500"></span></button></h4>
                          </div>
                          <div class="pt-4 mb-7 mb-lg-4 mb-xl-7">
                            <div class="row justify-content-between">
                              <div class="col-auto">
                                <h5 class="text-1000">Balance de {{ $coin->name }}</h5>
                              </div>
                              <div class="col-auto">
    
                                @if (isset($latest_balance))
                                <h6 class="mb-2 text-800">Balance de {{ $coin->name }} </h6>
                                <h4 class="fs-1 text-1000 mb-0">$ {{ $latest_balance }}</h4>
      
                                @else
                                <h6 class="mb-2 text-800">Balance de {{ $coin->name }} </h6>
                                <h4 class="fs-1 text-1000 mb-0">$ 100</h4>
                               @endif
                             <div class="col-auto p-2"><a href=" {{ route('admin.buyCoins.index') }} " class="btn btn-phoenix-primary"><span class="far fa-credit-card me-2 "></span>Comprar</a></div>
                             <div class="col-auto p-2"><a href=" {{ route('admin.buyCoins.index') }} " class="btn btn-phoenix-success"><span class="far fa-credit-card me-2 "></span>Depositar</a></div>
                             <div class="col-auto p-2"><a href=" {{ route('admin.buyCoins.index') }} " class="btn btn-phoenix-danger"><span class="far fa-credit-card me-2 "></span>Retirar</a></div>
                              </div>
                            </div>
                          </div>
                          <div class="border-top border-dashed border-300 pt-4">
                            <div class="row flex-between-center mb-2">
                              <div class="col-auto">
                                <h5 class="text-1000 mb-0">Email</h5>
                              </div>
                              <div class="col-auto"><a class="lh-1" href="{{ Auth::user()->email }}">{{ Auth::user()->email }}</a></div>
                            </div>
                            <div class="row flex-between-center">
                              <div class="col-auto">
                                <h5 class="text-1000 mb-0">Phone</h5>
                              </div>
                              <div class="col-auto"><a href="tel:+1234567890">+1234567890</a></div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
  
                  </div>
                </div>
              </div>
            </div>
  
  
            <div>
              <p class="mb-0">Business Starter, Business Standard, and Business Plus plans can be purchased for a maximum of 300 users. There is no <br class="d-none d-xl-block d-xxl-none" />maximum user limit for Enterprise plans.</p>
              <p class="fw-semi-bold">Phoenix customers may have access to additional features for a limited <br class="d-none d-sm-block d-lg-none" />promotional period.</p>
              <div class="d-grid d-sm-flex"><button class="btn btn-lg btn-primary d-sm-flex align-items-center mb-3 mb-sm-0 me-sm-3 px-sm-8">Subscribe Now<span class="fas fa-angle-right ms-1"></span></button><button class="btn btn-lg btn-outline-primary px-sm-7">Start 7 days free Trial</button></div>
            </div>
          </div>
          <div class="col col-xxl-3 mt-8">
            <h3 class="fw-semi-bold mb-3">Included in our all packages</h3>
            <div class="row">
              <div class="col-md-6 col-xxl-12">
                <div class="rounded-3 py-2 px-3 bg-white d-flex align-items-center mb-3"><span class="fas fa-check text-primary me-3 fs--1"></span>
                  <p class="mb-0 text-800">Timeline</p>
                </div>
              </div>
              <div class="col-md-6 col-xxl-12">
                <div class="rounded-3 py-2 px-3 bg-white d-flex align-items-center mb-3"><span class="fas fa-check text-primary me-3 fs--1"></span>
                  <p class="mb-0 text-800">Advanced Search</p>
                </div>
              </div>
              <div class="col-md-6 col-xxl-12">
                <div class="rounded-3 py-2 px-3 bg-white d-flex align-items-center mb-3"><span class="fas fa-check text-primary me-3 fs--1"></span>
                  <p class="mb-0 text-800">Custom fields</p><span class="badge badge-phoenix badge-phoenix-primary ms-2">New</span>
                </div>
              </div>
              <div class="col-md-6 col-xxl-12">
                <div class="rounded-3 py-2 px-3 bg-white d-flex align-items-center mb-3"><span class="fas fa-check text-primary me-3 fs--1"></span>
                  <p class="mb-0 text-800">Task dependencies</p>
                </div>
              </div>
              <div class="col-md-6 col-xxl-12">
                <div class="rounded-3 py-2 px-3 bg-white d-flex align-items-center mb-3"><span class="fas fa-check text-primary me-3 fs--1"></span>
                  <p class="mb-0 text-800">20TB of additional space </p>
                </div>
              </div>
              <div class="col-md-6 col-xxl-12">
                <div class="rounded-3 py-2 px-3 bg-white d-flex align-items-center mb-3"><span class="fas fa-check text-primary me-3 fs--1"></span>
                  <p class="mb-0 text-800">Bandwidth of Upto 1 Gbps</p>
                </div>
              </div>
              <div class="col-md-6 col-xxl-12">
                <div class="rounded-3 py-2 px-3 bg-white d-flex align-items-center mb-3"><span class="fas fa-check text-primary me-3 fs--1"></span>
                  <p class="mb-0 text-800">Private teams & projects</p>
                </div>
              </div>
              <div class="col-md-6 col-xxl-12">
                <div class="rounded-3 py-2 px-3 bg-white d-flex align-items-center mb-3"><span class="fas fa-check text-primary me-3 fs--1"></span>
                  <p class="mb-0 text-800">Private teams & projects</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
  
    </div>
  </x-guest-layout>


  <x-guest-layout>
    <div class="content">
      <nav class="mb-2" aria-label="breadcrumb">
        <ol class="breadcrumb mb-0">
          <li class="breadcrumb-item"><a href="pricing-column.html#!">Pages</a></li>
          <li class="breadcrumb-item active">Pricing</li>
        </ol>
      </nav>
      <h2 class="mb-7">Obtener {{ $coin->name }} </h2>
  
  
  
  
      <div class="row g-7 g-lg-11 mb-7">
        <div class="col-12 col-sm-6 col-xxl-4">
          <div class="card overflow-hidden bg-transparent h-100 p-2" ><img class="mb-4 d-dark-none" src="{{ asset('cssadmin/assets/img/spot-illustrations/13.png')}} " alt="" width="120" height="96" /><img class="mb-4 d-light-none" src="{{ asset('cssadmin/assets/img/spot-illustrations/dark_13.png')}}" alt="" width="120" height="96" />
          <div class="mb-sm-5 pricing-column-title-box">
            <h3 class="mb-2">Normal de {{ $coin->name }}</h3>
            <p class="text-800 mb-0 pe-3">For individuals who are interested in giving it a shot first.</p>
          </div>
          <div class="d-flex align-items-center mb-4">
            <h3 class="display-3 fw-bolder">Free</h3>
          </div><button class="btn btn-lg w-100 mb-6 btn-outline-primary">Buy</button>
          <h5 class="mb-4">What’s included</h5>
          <ul class="fa-ul" style="--fa-li-margin: 1.5em;">
            <li class="text-800 mb-2"><span class="fa-li"><span class="fas fa-check text-primary"></span></span>Timeline</li>
            <li class="mb-2 text-500"><span class="fa-li me-2 stack-icon-item"><span class="fa-stack fs--3"><span class="fas fa-circle fa-stack-2x text-300"></span><span class="fas fa-stack-1x fa-inverse fa-times text-600"></span></span></span>Advanced Search</li>
            <li class="mb-2 text-500"><span class="fa-li me-2 stack-icon-item"><span class="fa-stack fs--3"><span class="fas fa-circle fa-stack-2x text-300"></span><span class="fas fa-stack-1x fa-inverse fa-times text-600"></span></span></span>Custom fields</li>
            <li class="mb-2 text-500"><span class="fa-li me-2 stack-icon-item"><span class="fa-stack fs--3"><span class="fas fa-circle fa-stack-2x text-300"></span><span class="fas fa-stack-1x fa-inverse fa-times text-600"></span></span></span>Task dependencies</li>
            <li class="mb-2 text-500"><span class="fa-li me-2 stack-icon-item"><span class="fa-stack fs--3"><span class="fas fa-circle fa-stack-2x text-300"></span><span class="fas fa-stack-1x fa-inverse fa-times text-600"></span></span></span>Private teams & projects</li>
          </ul>
        </div>
      </div>
  
  
        <div class="col-12 col-sm-6 col-xxl-4">
          <div class="card overflow-hidden bg-transparent h-100 p-2" ><img class="mb-4 d-dark-none" src="{{ asset('cssadmin/assets/img/spot-illustrations/14.png')}}" alt="" width="120" height="96" /><img class="mb-4 d-light-none" src="{{ asset('cssadmin/assets/img/spot-illustrations/dark_14.png')}}" alt="" width="120" height="96" />
          <div class="mb-sm-5 pricing-column-title-box">
            <h3 class="mb-2">Premiun de {{ $coin->name }}</h3>
            <p class="text-800 mb-0 pe-3">For teams that need to create project plans with confidence.</p>
          </div>
          <div class="d-flex align-items-center mb-4">
            <h3 class="display-3 fw-bolder">$14.99</h3>
            <h5 class="fs-0 fw-normal ms-1">/ month</h5>
          </div><button class="btn btn-lg w-100 mb-6 btn-outline-primary">Buy</button>
          <h5 class="mb-4">What’s included</h5>
          <ul class="fa-ul" style="--fa-li-margin: 1.5em;">
            <li class="text-800 mb-2"><span class="fa-li"><span class="fas fa-check text-primary"></span></span>Timeline</li>
            <li class="mb-2 text-900"><span class="fa-li me-2 stack-icon-item"><span class="fa-stack fs--3"><span class="fas fa-circle fa-stack-2x text-success"></span><span class="fas fa-stack-1x fa-inverse fa-check text-white"></span></span></span>Advanced Search</li>
            <li class="mb-2 text-500"><span class="fa-li me-2 stack-icon-item"><span class="fa-stack fs--3"><span class="fas fa-circle fa-stack-2x text-300"></span><span class="fas fa-stack-1x fa-inverse fa-times text-600"></span></span></span>Custom fields</li>
            <li class="mb-2 text-500"><span class="fa-li me-2 stack-icon-item"><span class="fa-stack fs--3"><span class="fas fa-circle fa-stack-2x text-300"></span><span class="fas fa-stack-1x fa-inverse fa-times text-600"></span></span></span>Task dependencies</li>
            <li class="mb-2 text-500"><span class="fa-li me-2 stack-icon-item"><span class="fa-stack fs--3"><span class="fas fa-circle fa-stack-2x text-300"></span><span class="fas fa-stack-1x fa-inverse fa-times text-600"></span></span></span>Private teams & projects</li>
          </ul>
        </div>
      </div>
  
  
        <div class="col-12 col-sm-6 col-xxl-4">
          <div class="card overflow-hidden bg-transparent h-100 p-2" ><img class="mb-4 d-dark-none" src="{{ asset('cssadmin/assets/img/spot-illustrations/15.png')}}" alt="" width="120" height="96" /><img class="mb-4 d-light-none" src="{{ asset('cssadmin/assets/img/spot-illustrations/dark_15.png')}}" alt="" width="120" height="96" />
          <div class="mb-sm-5 pricing-column-title-box">
            <h3 class="mb-2">VIP de {{ $coin->name }}</h3>
            <p class="text-800 mb-0 pe-3">For teams that need to manage work across initiatives.</p>
          </div>
          <div class="d-flex align-items-center mb-4">
            <h3 class="display-3 fw-bolder">$49.99</h3>
            <h5 class="fs-0 fw-normal ms-1">/ month</h5>
          </div><button class="btn btn-lg w-100 mb-6 btn-primary">Buy</button>
          <h5 class="mb-4">What’s included</h5>
          <ul class="fa-ul" style="--fa-li-margin: 1.5em;">
            <li class="text-800 mb-2"><span class="fa-li"><span class="fas fa-check text-primary"></span></span>Timeline</li>
            <li class="mb-2 text-900"><span class="fa-li me-2 stack-icon-item"><span class="fa-stack fs--3"><span class="fas fa-circle fa-stack-2x text-success"></span><span class="fas fa-stack-1x fa-inverse fa-check text-white"></span></span></span>Advanced Search</li>
            <li class="mb-2 text-900"><span class="fa-li me-2 stack-icon-item"><span class="fa-stack fs--3"><span class="fas fa-circle fa-stack-2x text-success"></span><span class="fas fa-stack-1x fa-inverse fa-check text-white"></span></span></span>Custom fields<span class="badge badge-phoenix badge-phoenix-primary ms-2 fs--2">New</span></li>
            <li class="mb-2 text-500"><span class="fa-li me-2 stack-icon-item"><span class="fa-stack fs--3"><span class="fas fa-circle fa-stack-2x text-300"></span><span class="fas fa-stack-1x fa-inverse fa-times text-600"></span></span></span>Task dependencies</li>
            <li class="mb-2 text-500"><span class="fa-li me-2 stack-icon-item"><span class="fa-stack fs--3"><span class="fas fa-circle fa-stack-2x text-300"></span><span class="fas fa-stack-1x fa-inverse fa-times text-600"></span></span></span>Private teams & projects</li>
          </ul>
        </div>
      </div>
  
  
      <footer class="footer position-absolute">
        <div class="row g-0 justify-content-between align-items-center h-100">
          <div class="col-12 col-sm-auto text-center">
            <p class="mb-0 mt-2 mt-sm-0 text-900">Thank you for creating with Phoenix<span class="d-none d-sm-inline-block"></span><span class="d-none d-sm-inline-block mx-1">|</span><br class="d-sm-none" />2023 &copy;<a class="mx-1" href="https://themewagon.com">Themewagon</a></p>
          </div>
          <div class="col-12 col-sm-auto text-center">
            <p class="mb-0 text-600">v1.13.0</p>
          </div>
        </div>
      </footer>
    </div>
  
  
  
  
  </x-guest-layout>
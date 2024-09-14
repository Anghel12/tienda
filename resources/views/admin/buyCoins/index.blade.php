<x-guest-layout>
  <div class="content">
    <nav class="mb-2" aria-label="breadcrumb">
      <ol class="breadcrumb mb-0">
        <li class="breadcrumb-item"><a href="pricing-grid.html#!">Moneda</a></li>
        <li class="breadcrumb-item active">Recargar</li>
      </ol>
    </nav>
    <div class="pb-9">
      <h2 class="mb-7">Recargar Dollares, Euros, Criptomonedas, Terras u Otras Monedas</h2>
      <div class="row">
        <div class="col-xl-12 mb-1">
          <div class="tabs mb-7">
            <ul class="nav nav-underline nav-tabs mb-3" id="nav-tab" role="tablist">
              <li class="nav-item" role="presentation"><button class="nav-link " id="pills-year-tab" data-bs-toggle="pill" data-bs-target="#pills-year" type="button" role="tab" aria-controls="pills-year" aria-selected="false">Package de {{ $coin->name }}</button></li>
              <li class="nav-item" role="presentation"><button class="nav-link active" id="pills-month-tab" data-bs-toggle="pill" data-bs-target="#pills-month" type="button" role="tab" aria-controls="pills-month" aria-selected="true"> Recargar {{ $coin->name }}</button></li>
            </ul>

            

            <div class="tab-content" id="pills-tabContent">
              <div class="tab-pane fade show active" id="pills-month" role="" aria-labelledby="pills-month-tab">
                <div class="row g-3">


              {{--  --}}
                  <div class="card theme-wizard mb-5 col-12 col-sm-6 col-xxl-4" data-theme-wizard="data-theme-wizard">
                    <div class="card-header bg-100 pt-3 pb-2 border-bottom-0">
                      <ul class="nav justify-content-between nav-wizard" role="tablist">
                        <li class="nav-item" role="presentation"><a class="nav-link active fw-semi-bold" href="wizard.html#bootstrap-wizard-validation-tab1" data-bs-toggle="tab" data-wizard-step="1" aria-selected="true" role="tab">
                            <div class="text-center d-inline-block"><span class="nav-item-circle-parent"><span class="nav-item-circle"><svg class="svg-inline--fa fa-lock" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="lock" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M80 192V144C80 64.47 144.5 0 224 0C303.5 0 368 64.47 368 144V192H384C419.3 192 448 220.7 448 256V448C448 483.3 419.3 512 384 512H64C28.65 512 0 483.3 0 448V256C0 220.7 28.65 192 64 192H80zM144 192H304V144C304 99.82 268.2 64 224 64C179.8 64 144 99.82 144 144V192z"></path></svg><!-- <span class="fas fa-lock"></span> Font Awesome fontawesome.com --></span></span><span class="d-none d-md-block mt-1 fs--1">Monto</span></div>
                          </a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link fw-semi-bold" href="wizard.html#bootstrap-wizard-validation-tab2" data-bs-toggle="tab" data-wizard-step="2" aria-selected="false" tabindex="-1" role="tab">
                            <div class="text-center d-inline-block"><span class="nav-item-circle-parent"><span class="nav-item-circle"><svg class="svg-inline--fa fa-user" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="user" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M224 256c70.7 0 128-57.31 128-128s-57.3-128-128-128C153.3 0 96 57.31 96 128S153.3 256 224 256zM274.7 304H173.3C77.61 304 0 381.6 0 477.3c0 19.14 15.52 34.67 34.66 34.67h378.7C432.5 512 448 496.5 448 477.3C448 381.6 370.4 304 274.7 304z"></path></svg><!-- <span class="fas fa-user"></span> Font Awesome fontawesome.com --></span></span><span class="d-none d-md-block mt-1 fs--1">datos </span></div>
                          </a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link fw-semi-bold" href="wizard.html#bootstrap-wizard-validation-tab3" data-bs-toggle="tab" data-wizard-step="3" aria-selected="false" tabindex="-1" role="tab">
                            <div class="text-center d-inline-block"><span class="nav-item-circle-parent"><span class="nav-item-circle"><svg class="svg-inline--fa fa-file-lines" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="file-lines" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" data-fa-i2svg=""><path fill="currentColor" d="M256 0v128h128L256 0zM224 128L224 0H48C21.49 0 0 21.49 0 48v416C0 490.5 21.49 512 48 512h288c26.51 0 48-21.49 48-48V160h-127.1C238.3 160 224 145.7 224 128zM272 416h-160C103.2 416 96 408.8 96 400C96 391.2 103.2 384 112 384h160c8.836 0 16 7.162 16 16C288 408.8 280.8 416 272 416zM272 352h-160C103.2 352 96 344.8 96 336C96 327.2 103.2 320 112 320h160c8.836 0 16 7.162 16 16C288 344.8 280.8 352 272 352zM288 272C288 280.8 280.8 288 272 288h-160C103.2 288 96 280.8 96 272C96 263.2 103.2 256 112 256h160C280.8 256 288 263.2 288 272z"></path></svg><!-- <span class="fas fa-file-alt"></span> Font Awesome fontawesome.com --></span></span><span class="d-none d-md-block mt-1 fs--1">Billing</span></div>
                          </a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link fw-semi-bold" href="wizard.html#bootstrap-wizard-validation-tab4" data-bs-toggle="tab" data-wizard-step="4" aria-selected="false" tabindex="-1" role="tab">
                            <div class="text-center d-inline-block"><span class="nav-item-circle-parent"><span class="nav-item-circle"><svg class="svg-inline--fa fa-check" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="check" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M438.6 105.4C451.1 117.9 451.1 138.1 438.6 150.6L182.6 406.6C170.1 419.1 149.9 419.1 137.4 406.6L9.372 278.6C-3.124 266.1-3.124 245.9 9.372 233.4C21.87 220.9 42.13 220.9 54.63 233.4L159.1 338.7L393.4 105.4C405.9 92.88 426.1 92.88 438.6 105.4H438.6z"></path></svg><!-- <span class="fas fa-check"></span> Font Awesome fontawesome.com --></span></span><span class="d-none d-md-block mt-1 fs--1">Done</span></div>
                          </a></li>
                      </ul>
                    </div>
                    <div class="card-body pt-4 pb-0">
                      <div class="tab-content">
                        <div class="tab-pane active" role="tabpanel" aria-labelledby="bootstrap-wizard-validation-tab1" id="bootstrap-wizard-validation-tab1">
                          <form class="{{-- needs-validation --}}" id="" novalidate="novalidate" data-wizard-form="1">
                            <div class="mb-2">
                              <label class="form-label text-900" for="bootstrap-wizard-validation-wizard-name">Monto de {{ $coin->name }}</label>
                              <input class="form-control" type="text" name="name" placeholder="5" required="required" id="bootstrap-wizard-validation-wizard-name">
                              <div class="invalid-feedback">Poner un Monto</div>
                            </div>
                            <div class="form-check">
                            </div>
                          </form>
                        </div>
                        <div class="tab-pane" role="tabpanel" aria-labelledby="bootstrap-wizard-validation-tab2" id="bootstrap-wizard-validation-tab2">
                          <form class="needs-validation" id="wizardValidationForm2" novalidate="novalidate" data-wizard-form="2">


                            <div class="mb-2"><label class="form-label text-900" for="bootstrap-wizard-validation-wizard-name">Nombre Completo</label><input class="form-control" type="text" name="name" placeholder="{{ Auth::user()->name }}" id="bootstrap-wizard-validation-wizard-name" />
                              <div class="invalid-feedback">Please choose a username.</div>
                            </div>
                            <div class="mb-2"><label class="form-label" for="bootstrap-wizard-validation-wizard-email">Email*</label><input class="form-control" type="email" name="email" placeholder="{{ Auth::user()->email }}" pattern="^([a-zA-Z0-9_.-])+@(([a-zA-Z0-9-])+.)+([a-zA-Z0-9]{2,4})+$"id="bootstrap-wizard-validation-wizard-email" />
                              <div class="invalid-feedback">You must add email</div>
                            </div>
                          </form>
                        </div>
                        <div class="tab-pane" role="tabpanel" aria-labelledby="bootstrap-wizard-validation-tab3" id="bootstrap-wizard-validation-tab3">

                          
                          @include('admin.buyCoins.partials.modal')

                          
                        </div>
                        <div class="tab-pane" role="tabpanel" aria-labelledby="bootstrap-wizard-validation-tab4" id="bootstrap-wizard-validation-tab4">
                          <div class="row flex-center pb-8 pt-4 gx-3 gy-4">
                            <div class="col-12 col-sm-auto">
                              <div class="text-center text-sm-start"><img class="d-dark-none" src="../../assets/img/spot-illustrations/38.webp" alt="" width="220"><img class="d-light-none" src="../../assets/img/spot-illustrations/dark_38.webp" alt="" width="220"></div>
                            </div>
                            <div class="col-12 col-sm-auto">
                              <div class="text-center text-sm-start">
                                <h5 class="mb-3">You are all set!</h5>
                                <p class="text-1100 fs--1">Now you can access your account<br>anytime anywhere</p><a class="btn btn-primary px-6" href="wizard.html">Start Over</a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="card-footer border-top-0" data-wizard-footer="data-wizard-footer">
                      <div class="d-flex pager wizard list-inline mb-0"><button class="d-none btn btn-link ps-0" type="button" data-wizard-prev-btn="data-wizard-prev-btn"><svg class="svg-inline--fa fa-chevron-left me-1" data-fa-transform="shrink-3" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-left" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg="" style="transform-origin: 0.3125em 0.5em;"><g transform="translate(160 256)"><g transform="translate(0, 0)  scale(0.8125, 0.8125)  rotate(0 0 0)"><path fill="currentColor" d="M224 480c-8.188 0-16.38-3.125-22.62-9.375l-192-192c-12.5-12.5-12.5-32.75 0-45.25l192-192c12.5-12.5 32.75-12.5 45.25 0s12.5 32.75 0 45.25L77.25 256l169.4 169.4c12.5 12.5 12.5 32.75 0 45.25C240.4 476.9 232.2 480 224 480z" transform="translate(-160 -256)"></path></g></g></svg><!-- <span class="fas fa-chevron-left me-1" data-fa-transform="shrink-3"></span> Font Awesome fontawesome.com -->Previous</button>
                        <div class="flex-1 text-end"><button class="btn btn-primary px-6 px-sm-6" type="submit" data-wizard-next-btn="data-wizard-next-btn">Next<svg class="svg-inline--fa fa-chevron-right ms-1" data-fa-transform="shrink-3" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg="" style="transform-origin: 0.3125em 0.5em;"><g transform="translate(160 256)"><g transform="translate(0, 0)  scale(0.8125, 0.8125)  rotate(0 0 0)"><path fill="currentColor" d="M96 480c-8.188 0-16.38-3.125-22.62-9.375c-12.5-12.5-12.5-32.75 0-45.25L242.8 256L73.38 86.63c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0l192 192c12.5 12.5 12.5 32.75 0 45.25l-192 192C112.4 476.9 104.2 480 96 480z" transform="translate(-160 -256)"></path></g></g></svg><!-- <span class="fas fa-chevron-right ms-1" data-fa-transform="shrink-3"> </span> Font Awesome fontawesome.com --></button></div>
                      </div>
                    </div>
                  </div>
                
                
{{-- prueba --}}

                  {{-- <div class="col-12 col-lg-6">
                    <div class="card h-100">
                      <div class="card-body">
                        <div class="border-bottom border-dashed border-300">
                          <h4 class="mb-3 lh-sm lh-xl-1">Recargar {{ $coin->name }} con Skrill<button class="btn btn-link p-0" type="button"> <span class="fas fa-edit fs--1 ms-3 text-500"></span></button></h4>
                        </div>
                        <div class="pt-4 mb-7 mb-lg-4 mb-xl-7">
                          <div class="row justify-content-between">
                            <div class="col-auto">
                              <h5 class="text-1000">Monto:</h5>
                              <input class="form-control" id="inputName" type="text" placeholder="100">
                              <div class="col-auto"><a href=" {{ route('admin.buyCoins.index') }} " class="btn btn-phoenix-success"><span class="far fa-credit-card me-2 "></span>Continuar</a></div>
                          
                            </div>

                    <div class="col-auto">
                              <div class="col-12">
                                <label class="form-label fs-0 text-1000 ps-0 text-none" for="inputName">Cantidad de {{ $coin->name }} </label>
                              </div>
                           <div class="col-auto p-2"><a href=" {{ route('admin.buyCoins.index') }} " class="btn btn-phoenix-primary"><span class="far fa-credit-card me-2 "></span>Comprar</a></div>
                           <div class="col-auto p-2"><a href=" {{ route('admin.buyCoins.index') }} " class="btn btn-phoenix-success"><span class="far fa-credit-card me-2 "></span>Depositar</a></div>
                           <div class="col-auto p-2"><a href=" {{ route('admin.buyCoins.index') }} " class="btn btn-phoenix-danger"><span class="far fa-credit-card me-2 "></span>Retirar</a></div>
                            </div> 

                          </div>
                        </div>
                        <div class="border-top border-dashed border-300 pt-4">
                          <div class="row flex-between-center mb-2">
                            <div class="col-auto">
                              <h5 class="text-1000 mb-0">Methodo:</h5>
                            </div>
                            <div class="col-auto">Skrill <a class="lh-1" href="">T&C</a></div>
                          </div>
                          <div class="row flex-between-center">
                            <div class="col-auto">
                              <h5 class="text-1000 mb-0">Wallet Coins:</h5>
                            </div>
                            <div class="col-auto"><a href="#"> 0 </a></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
 --}}
{{-- 
                  <div class="col-12 col-lg-6">
                    <div class="card h-100">
                      <div class="card-body">
                        <div class="border-bottom border-dashed border-300">
                          <h4 class="mb-3 lh-sm lh-xl-1">Recargar {{ $coin->name }} con Bcp<button class="btn btn-link p-0" type="button"> <span class="fas fa-edit fs--1 ms-3 text-500"></span></button></h4>
                        </div>
                        <div class="pt-4 mb-7 mb-lg-4 mb-xl-7">
                          <div class="row justify-content-between">
                            <div class="col-auto">
                              <h5 class="text-1000">Monto:</h5>
                              <input class="form-control" id="inputName" type="text" placeholder="100">
                              <div class="col-auto"><a href=" {{ route('admin.buyCoins.index') }} " class="btn btn-phoenix-success"><span class="far fa-credit-card me-2 "></span>Continuar</a></div>
                          
                            </div>


                          </div>
                        </div>
                        <div class="border-top border-dashed border-300 pt-4">
                          <div class="row flex-between-center mb-2">
                            <div class="col-auto">
                              <h5 class="text-1000 mb-0">Methodo:</h5>
                            </div>
                            <div class="col-auto">BCP <a class="lh-1" href="">T&C</a></div>
                          </div>
                          <div class="row flex-between-center">
                            <div class="col-auto">
                              <h5 class="text-1000 mb-0">Wallet Coins:</h5>
                            </div>
                            <div class="col-auto"><a href="#"> 0 </a></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
 --}}

                </div>
              </div>
            </div>



            {{-- WAllet --}}


            <div class="tab-content" id="pills-tabContentYear">
              <div class="tab-pane fade" id="pills-year" role="tabpanel" aria-labelledby="pills-year-tab">
                <div class="row g-3">


                  @foreach ($packageCoins as $packageCoin)
                  <div class="col-12 col-sm-6 col-xxl-4">
                    <div class="card overflow-hidden bg-transparent h-100 p-2" ><img class="mb-4 d-dark-none" src="{{ asset('cssadmin/assets/img/spot-illustrations/13.png')}} " alt="" width="120" height="96" /><img class="mb-4 d-light-none" src="{{ asset('cssadmin/assets/img/spot-illustrations/dark_13.png')}}" alt="" width="120" height="96" />
                    <div class="mb-sm-5 pricing-column-title-box">
                      <h3 class="mb-2">{{ $packageCoin->titulo }} 1{{ $coin->name }}</h3>
                      <p class="text-800 mb-0 pe-3">{{ $packageCoin->body }}</p>
                    </div>
                    <div class="d-flex align-items-center mb-4">
                      <h3 class="display-3 fw-bolder">${{ $packageCoin->numero }}</h3>
                      <h5 class="fs-0 fw-normal ms-1">/ Dolares</h5>
                    </div><a href="{{  route('admin.buyCoins.confirmar_package') }}" class="btn btn-lg w-100 mb-6 btn-outline-primary">{{ $packageCoin->title_button }}</a>
                    <h5 class="mb-4">{{ $packageCoin->sub_titulo }}</h5>

                    <ul class="fa-ul" style="--fa-li-margin: 1.5em;">
                      <li class="text-800 mb-2"><span class="fa-li"><span class="fas fa-check text-primary"></span></span>{{ $packageCoin->etiquetas }}</li>
                      <li class="mb-2 text-500"><span class="fa-li me-2 stack-icon-item"><span class="fa-stack fs--3"><span class="fas fa-circle fa-stack-2x text-300"></span><span class="fas fa-stack-1x fa-inverse fa-times text-600"></span></span></span>Advanced Search</li>
                      <li class="mb-2 text-500"><span class="fa-li me-2 stack-icon-item"><span class="fa-stack fs--3"><span class="fas fa-circle fa-stack-2x text-300"></span><span class="fas fa-stack-1x fa-inverse fa-times text-600"></span></span></span>Custom fields</li>
                      <li class="mb-2 text-500"><span class="fa-li me-2 stack-icon-item"><span class="fa-stack fs--3"><span class="fas fa-circle fa-stack-2x text-300"></span><span class="fas fa-stack-1x fa-inverse fa-times text-600"></span></span></span>Task dependencies</li>
                      <li class="mb-2 text-500"><span class="fa-li me-2 stack-icon-item"><span class="fa-stack fs--3"><span class="fas fa-circle fa-stack-2x text-300"></span><span class="fas fa-stack-1x fa-inverse fa-times text-600"></span></span></span>Private teams & projects</li>
                    </ul>
                  </div>
                </div>
            
                @endforeach 
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
              </div>
            </div>
          </div>




      </div>
    </div>

  </div>
</x-guest-layout>


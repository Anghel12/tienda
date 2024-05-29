<x-guest-layout>
    <div class="content">
        <nav class="mb-2" aria-label="breadcrumb">
          <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="pricing-grid.html#!">admin</a></li>
            <li class="breadcrumb-item active">Wallet</li>
          </ol>
        </nav>
        <div class="pb-9">
          <h2 class="mb-7">Mi Wallet</h2>
          <div class="row">
            <div class="col-xl-12 col-xxl-9 mb-1">
              <div class="tabs mb-7">
                <ul class="nav nav-underline nav-tabs mb-3" id="nav-tab" role="tablist">
                  <li class="nav-item" role="presentation"><button class="nav-link active" id="pills-month-tab" data-bs-toggle="pill" data-bs-target="#pills-month" type="button" role="tab" aria-controls="pills-month" aria-selected="true">Mi Cartera</button></li>
                </ul>


                <div class="tab-content" id="pills-tabContent">
                  <div class="tab-pane fade show active" id="pills-month" role="tabpanel" aria-labelledby="pills-month-tab">
                    <div class="row g-3">

                      <div class="col-12 col-md-6 col-lg-12 col-xl-6">
                        <div class="h-100">
          
                          <div class="position-relative h-100">
                            <label class="stretched-link" for="startup"></label>
                            <div class="card h-100 overflow-hidden cursor-pointer">
                              <div class="bg-holder d-dark-none" style="background-image:url({{ asset('cssadmin/assets/img/bg/8.png') }});background-position:left bottom;background-size:auto;"></div>
                              <!--/.bg-holder-->
                              <div class="bg-holder d-light-none" style="background-image:url({{ asset('cssadmin/assets/img/bg/8-dark.png') }});background-position:left bottom;background-size:auto;"></div>
                              <!--/.bg-holder-->
                              <div class="card-body d-flex flex-column justify-content-between position-relative">
                                <div class="d-flex justify-content-between">
                                  <div class="mb-5 mb-md-0 mb-lg-5 me-3">
                                    <div class="d-sm-flex align-items-center mb-3">
                                      <h3 class="mb-0">Wallet</h3>
                                    </div>
                                    <p class="fs--1 text-700">Obtener mas {{ $coin->name}} <br> Como obtener mas coins de {{ $coin->name}} gratis</p>
                                    <div class="d-flex align-items-end mb-md-5 mb-lg-0">
                                      <h4 class="fw-bolder me-1">Cantidad de {{ $coin->name}}:</h4>
                                      <h2 class="fs--5 fw-normal text-700 text-cyan-500">10</h2> 
                                    </div>
                                  </div><img class="d-dark-none" src="{{ asset('cssadmin/assets/img/spot-illustrations/rocket.png') }}" width="54" height="54" alt="" /><img class="d-light-none" src="../../assets/img/spot-illustrations/rocket-dark.png" width="54" height="54" alt="" />
                                </div>
                                <div class="row flex-1 justify-content-end">
                                  <div class="col-sm-8 col-md-12">
                                    <div class="d-sm-flex d-md-block d-lg-flex justify-content-end align-items-end h-100">
                                      <ul class="list-unstyled mb-0 border-start-sm border-start-md-0 border-start-lg ps-sm-5 ps-md-0 ps-lg-5 border-200">
                                        <li class="d-flex align-items-center"><span class="uil uil-check-circle text-success me-2"></span><span class="text-700 fw-semi-bold">Cuenta creada +5 coins</span></li>
                                        <li class="d-flex align-items-center"><span class="uil uil-check-circle text-success me-2"></span><span class="text-700 fw-semi-bold">Referidos +5 coins</span></li>
                                      </ul>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>

{{--                       <div class="col-12 col-md-6 col-lg-12 col-xl-6">

                        <div class="h-100">
          
                          <div class="position-relative h-100">

                          <div class="card mb-3 h-100">
                            <div class="card-body">
                              <div class="row align-items-center g-3">
                                <div class="col-12 col-sm-auto flex-1">
                                  <h3 class="fw-bolder mb-2 line-clamp-1">Start-Up Growth Suite</h3>
                                  <div class="d-flex align-items-center mb-4">
                                    <h5 class="mb-0 me-4">USD $12,000.00</h5>
                                    <h5 class="fw-semi-bold"><svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-grid d-inline-block lh-sm me-1" style="height:16px;width:16px;"><rect x="3" y="3" width="7" height="7"></rect><rect x="14" y="3" width="7" height="7"></rect><rect x="14" y="14" width="7" height="7"></rect><rect x="3" y="14" width="7" height="7"></rect></svg><span class="d-inline-block lh-sm">Financial</span></h5>
                                  </div>
                                  <div class="d-md-flex d-xl-block align-items-center justify-content-between mb-5">
                                    <div class="d-flex align-items-center mb-3 mb-md-0 mb-xl-3">
                                      <div class="avatar avatar-xl me-3"><img class="rounded-circle" src="assets/img/team/72x72/58.webp" alt=""></div>
                                      <div>
                                        <h5>Ansolo Lazinatov</h5>
                                        <div class="dropdown"><a class="text-800 dropdown-toggle text-decoration-none dropdown-caret-none" href="widgets.html#!" data-bs-toggle="dropdown" aria-expanded="false"> Owner<svg class="svg-inline--fa fa-caret-down text-800 fs--1 ms-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="caret-down" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg=""><path fill="currentColor" d="M310.6 246.6l-127.1 128C176.4 380.9 168.2 384 160 384s-16.38-3.125-22.63-9.375l-127.1-128C.2244 237.5-2.516 223.7 2.438 211.8S19.07 192 32 192h255.1c12.94 0 24.62 7.781 29.58 19.75S319.8 237.5 310.6 246.6z"></path></svg><!-- <span class="fa-solid fa-caret-down text-800 fs--1 ms-2"></span> Font Awesome fontawesome.com --></a>
                                          <div class="dropdown-menu shadow-sm" style="min-width:20rem">
                                            <div class="card position-relative border-0">
                                              <div class="card-body p-0">
                                                <div class="mx-3">
                                                  <h4 class="mb-3 fw-bold">Switch ownership</h4>
                                                  <h5 class="mb-3">Deal Owner</h5><select class="form-select mb-3" aria-label="Default select">
                                                    <option selected="selected">Select</option>
                                                    <option value="1">Jerry Seinfield</option>
                                                    <option value="2">Anthoney Michael</option>
                                                    <option value="3">Ansolo Lazinatov</option>
                                                  </select>
                                                  <div class="text-end"><button class="btn btn-link text-danger" type="button">Cancel</button><button class="btn btn-sm btn-primary px-5" type="button">Save</button></div>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                    <div><span class="badge badge-phoenix badge-phoenix-success me-2">Success</span><span class="badge badge-phoenix badge-phoenix-danger me-2">Lost</span><span class="badge badge-phoenix badge-phoenix-secondary">Close</span></div>
                                  </div>
                                  <div class="progress mb-2" style="height:5px">
                                    <div class="progress-bar bg-primary-200" role="progressbar" style="width: 40%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                  </div>
                                  <div class="d-flex align-items-center justify-content-between">
                                    <p class="mb-0"> New</p>
                                    <div><svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-clock d-inline-block lh-sm me-1" style="height:16px;width:16px;"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg><span class="d-inline-block lh-sm"> Dec 15, 05:00AM</span></div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
            
                        </div>
                      </div>
                      </div> --}}
   


                    </div>
                  </div>
                </div>
                <div class="tab-content" id="pills-tabContentYear">
                  <div class="tab-pane fade" id="pills-year" role="tabpanel" aria-labelledby="pills-year-tab">
                    <div class="row g-3">
                      <div class="col-12 col-md-6 col-lg-12 col-xl-6">
                        <div class="h-100"><input class="pricing-plan-radio d-none" type="radio" name="pricingYearly" id="startupYearly" checked="checked" />
                          <div class="position-relative h-100"><label class="stretched-link" for="startupYearly"></label>
                            <div class="card h-100 overflow-hidden cursor-pointer">
                              <div class="bg-holder d-dark-none" style="background-image:url(../../assets/img/bg/8.png);background-position:left bottom;background-size:auto;"></div>
                              <!--/.bg-holder-->
                              <div class="bg-holder d-light-none" style="background-image:url(../../assets/img/bg/8-dark.png);background-position:left bottom;background-size:auto;"></div>
                              <!--/.bg-holder-->
                              <div class="card-body d-flex flex-column justify-content-between position-relative">
                                <div class="d-flex justify-content-between">
                                  <div class="mb-5 mb-md-0 mb-lg-5 me-3">
                                    <div class="d-sm-flex align-items-center mb-3">
                                      <h3 class="mb-0">Startup</h3>
                                    </div>
                                    <p class="fs--1 text-700">For individuals who are interested <br> in giving it a shot first.</p>
                                    <div class="d-flex align-items-end mb-md-5 mb-lg-0">
                                      <h4 class="fw-bolder me-1">Free</h4>
                                      <h5 class="fs--1 fw-normal text-700 ms-1">Forever</h5>
                                    </div>
                                  </div><img class="d-dark-none" src="../../assets/img/spot-illustrations/rocket.png" width="54" height="54" alt="" /><img class="d-light-none" src="../../assets/img/spot-illustrations/rocket-dark.png" width="54" height="54" alt="" />
                                </div>
                                <div class="row flex-1 justify-content-end">
                                  <div class="col-sm-8 col-md-12">
                                    <div class="d-sm-flex d-md-block d-lg-flex justify-content-end align-items-end h-100">
                                      <ul class="list-unstyled mb-0 border-start-sm border-start-md-0 border-start-lg ps-sm-5 ps-md-0 ps-lg-5 border-200">
                                        <li class="d-flex align-items-center"><span class="uil uil-check-circle text-success me-2"></span><span class="text-700 fw-semi-bold">Up to 4 Members</span></li>
                                        <li class="d-flex align-items-center"><span class="uil uil-check-circle text-success me-2"></span><span class="text-700 fw-semi-bold">3 Collaboration projects</span></li>
                                      </ul>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-12 col-md-6 col-lg-12 col-xl-6">
                        <div class="h-100"><input class="pricing-plan-radio d-none" type="radio" name="pricingYearly" id="standardYearly" />
                          <div class="position-relative h-100"><label class="stretched-link" for="standardYearly"></label>
                            <div class="card h-100 overflow-hidden cursor-pointer">
                              <div class="bg-holder d-dark-none" style="background-image:url(../../assets/img/bg/9.png);background-position:left bottom;background-size:auto;"></div>
                              <!--/.bg-holder-->
                              <div class="bg-holder d-light-none" style="background-image:url(../../assets/img/bg/9-dark.png);background-position:left bottom;background-size:auto;"></div>
                              <!--/.bg-holder-->
                              <div class="card-body d-flex flex-column justify-content-between position-relative">
                                <div class="d-flex justify-content-between">
                                  <div class="mb-5 mb-md-0 mb-lg-5 me-3">
                                    <div class="d-sm-flex align-items-center mb-3">
                                      <h3 class="mb-0">Standard</h3>
                                    </div>
                                    <p class="fs--1 text-700">For teams that need to create <br> project plans with confidence.</p>
                                    <div class="d-flex align-items-end mb-md-5 mb-lg-0">
                                      <h4 class="fw-bolder me-1">$179.88</h4>
                                      <h5 class="fs--1 fw-normal text-700 ms-1">Per year</h5>
                                    </div>
                                  </div><img class="d-dark-none" src="../../assets/img/spot-illustrations/bag-2.png" width="54" height="54" alt="" /><img class="d-light-none" src="../../assets/img/spot-illustrations/bag-2-dark.png" width="54" height="54" alt="" />
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
                      <div class="col-12 col-md-6 col-lg-12 col-xl-6">
                        <div class="h-100"><input class="pricing-plan-radio d-none pricing-plan-recommended" type="radio" name="pricingYearly" id="businessPlusYearly" />
                          <div class="position-relative h-100"><label class="stretched-link" for="businessPlusYearly"></label>
                            <div class="card h-100 overflow-hidden cursor-pointer bg-warning-soft border-warning warning-boxshadow pricing-business-plus">
                              <div class="bg-holder d-dark-none" style="background-image:url(../../assets/img/bg/bg-11.png);background-position:left bottom;background-size:auto;"></div>
                              <!--/.bg-holder-->
                              <div class="bg-holder d-light-none" style="background-image:url(../../assets/img/bg/bg-11-dark.png);background-position:left bottom;background-size:auto;"></div>
                              <!--/.bg-holder-->
                              <div class="card-body d-flex flex-column justify-content-between position-relative">
                                <div class="d-flex justify-content-between">
                                  <div class="mb-5 mb-md-0 mb-lg-5 me-3">
                                    <div class="d-sm-flex align-items-center mb-3">
                                      <h3 class="mb-0">Business Plus</h3><span class="badge ms-sm-3 text-uppercase fs--2 bg-warning">recommended</span>
                                    </div>
                                    <p class="fs--1 text-700">For teams that need to manage <br> work across initiatives.</p>
                                    <div class="d-flex align-items-end mb-md-5 mb-lg-0">
                                      <h4 class="fw-bolder me-1">$599.88</h4>
                                      <h5 class="fs--1 fw-normal text-700 ms-1">Per year</h5>
                                    </div>
                                  </div><img class="d-dark-none" src="../../assets/img/spot-illustrations/star.png" width="54" height="54" alt="" /><img class="d-light-none" src="../../assets/img/spot-illustrations/star-dark.png" width="54" height="54" alt="" />
                                </div>
                                <div class="row flex-1 justify-content-end">
                                  <div class="col-sm-8 col-md-12">
                                    <div class="d-sm-flex d-md-block d-lg-flex justify-content-end align-items-end h-100">
                                      <ul class="list-unstyled mb-0 border-start-sm border-start-md-0 border-start-lg ps-sm-5 ps-md-0 ps-lg-5 border-200">
                                        <li class="d-flex align-items-center"><span class="uil uil-check-circle text-success me-2"></span><span class="text-700 fw-semi-bold">Technical Supports</span></li>
                                        <li class="d-flex align-items-center"><span class="uil uil-check-circle text-success me-2"></span><span class="text-700 fw-semi-bold">Up to 20 Members</span></li>
                                        <li class="d-flex align-items-center"><span class="uil uil-check-circle text-success me-2"></span><span class="text-700 fw-semi-bold">Create & Share libraries</span></li>
                                        <li class="d-flex align-items-center"><span class="uil uil-check-circle text-success me-2"></span><span class="text-700 fw-semi-bold"><span class="fw-bold">Unlimited</span> Collaboration</span></li>
                                      </ul>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-12 col-md-6 col-lg-12 col-xl-6">
                        <div class="h-100"><input class="pricing-plan-radio d-none" type="radio" name="pricingYearly" id="enterpriseYearly" />
                          <div class="position-relative h-100"><label class="stretched-link" for="enterpriseYearly"></label>
                            <div class="card h-100 overflow-hidden cursor-pointer">
                              <div class="bg-holder d-dark-none" style="background-image:url(../../assets/img/bg/10.png);background-position:left bottom;background-size:auto;"></div>
                              <!--/.bg-holder-->
                              <div class="bg-holder d-light-none" style="background-image:url(../../assets/img/bg/10-dark.png);background-position:left bottom;background-size:auto;"></div>
                              <!--/.bg-holder-->
                              <div class="card-body d-flex flex-column justify-content-between position-relative">
                                <div class="d-flex justify-content-between">
                                  <div class="mb-5 mb-md-0 mb-lg-5 me-3">
                                    <div class="d-sm-flex align-items-center mb-3">
                                      <h3 class="mb-0">Enterprise</h3>
                                    </div>
                                    <p class="fs--1 text-700">For organizations that need <br> additional security and support.</p>
                                    <div class="d-flex align-items-end mb-md-5 mb-lg-0">
                                      <h4 class="fw-bolder me-1">$1,799.88</h4>
                                      <h5 class="fs--1 fw-normal text-700 ms-1">Per year</h5>
                                    </div>
                                  </div><img class="d-dark-none" src="../../assets/img/spot-illustrations/shield-2.png" width="54" height="54" alt="" /><img class="d-light-none" src="../../assets/img/spot-illustrations/shield-2-dark.png" width="54" height="54" alt="" />
                                </div>
                                <div class="row flex-1 justify-content-end">
                                  <div class="col-sm-8 col-md-12">
                                    <div class="d-sm-flex d-md-block d-lg-flex justify-content-end align-items-end h-100">
                                      <ul class="list-unstyled mb-0 border-start-sm border-start-md-0 border-start-lg ps-sm-5 ps-md-0 ps-lg-5 border-200">
                                        <li class="d-flex align-items-center"><span class="uil uil-check-circle text-success me-2"></span><span class="text-700 fw-semi-bold">24/7 VIP Support</span></li>
                                        <li class="d-flex align-items-center"><span class="uil uil-check-circle text-success me-2"></span><span class="text-700 fw-semi-bold">Automated analytics</span></li>
                                        <li class="d-flex align-items-center"><span class="uil uil-check-circle text-success me-2"></span><span class="text-700 fw-semi-bold"><span class="fw-bold">Unlimited</span> Members*</span></li>
                                        <li class="d-flex align-items-center"><span class="uil uil-check-circle text-success me-2"></span><span class="text-700 fw-semi-bold">Create & Share libraries</span></li>
                                        <li class="d-flex align-items-center"><span class="uil uil-check-circle text-success me-2"></span><span class="text-700 fw-semi-bold">Centralized billing</span></li>
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
              </div>



              
            </div>

          </div>
        </div>

      </div>

  
  </x-guest-layout>

{{-- 
    @livewire('admin.wallet.index-wallet')
 --}}
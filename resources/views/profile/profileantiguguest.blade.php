
<x-guest-layout>
  <!-- ============================================-->
  <!-- <section> begin ============================-->
    <div class="content">
    <section class="pt-5 pb-9">
        <div class="container-small">
          <nav class="mb-2" aria-label="breadcrumb">
            <ol class="breadcrumb mb-0">
              <li class="breadcrumb-item"><a href="profile.html#!">Page 1</a></li>
              <li class="breadcrumb-item"><a href="profile.html#!">Page 2</a></li>
              <li class="breadcrumb-item active" aria-current="page">Default</li>
            </ol>
          </nav>
          <div class="row align-items-center justify-content-between g-3 mb-4">
            <div class="col-auto">
              <h2 class="mb-0">Profile</h2>
            </div>
            <div class="col-auto">
              <div class="row g-2 g-sm-3">
               {{--  <div class="col-auto"><button class="btn btn-phoenix-danger"><span class="fas fa-trash-alt me-2"></span>delete</button></div> --}}
                <div class="col-auto"><a href="{{ route('admin.profile.edit', $user->id ) }}" class="btn btn-phoenix-secondary"><span class="far fa-conf me-2"></span>Config</a></div>
              </div>
            </div>
          </div>
          <div class="row g-3 mb-6">
            <div class="col-12 col-lg-8">
              <div class="card h-100">
                <div class="card-body">
                  <div class="border-bottom border-dashed border-300 pb-4">
                    <div class="row align-items-center g-3 g-sm-5 text-center text-sm-start">
                      <div class="col-12 col-sm-auto"><input class="d-none" id="avatarFile" type="file" /><label class="cursor-pointer avatar avatar-5xl" for="avatarFile"><img class="rounded-circle" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" /></label></div>
                      <div class="col-12 col-sm-auto flex-1">
                        <h3>{{ Auth::user()->name }}</h3>
                        <p class="text-800">{{ Auth::user()->created_at }}</p>
                        <div><a class="me-2" href="profile.html#!"><span class="fab fa-linkedin-in text-400 hover-primary"></span></a><a class="me-2" href="profile.html#!"><span class="fab fa-facebook text-400 hover-primary"></span></a><a href="profile.html#!"><span class="fab fa-twitter text-400 hover-primary"></span></a></div>
                      </div>
                    </div>
                  </div> 
                  <div class="d-flex flex-between-center pt-4">
                    <div>
                   

                      @if (isset($latest_balance))
                      <h6 class="mb-2 text-800">Balance de {{ $coin->name }} </h6>
                      <h4 class="fs-1 text-1000 mb-0">$ {{ $latest_balance }}</h4>

                      @else
                      <h6 class="mb-2 text-800">Balance de {{ $coin->name }} </h6>
                      <h4 class="fs-1 text-1000 mb-0">$ 100</h4>
                     @endif

                    </div>
                    <div class="text-end">
                      <h6 class="mb-2 text-800">Role:</h6>
                      @if (Auth::user()->hasRole('Admin'))
                        <span class="badge bg-primary">Administrador</span>
                    @else

                    <span class="badge bg-success">Usuario</span>

                      @endif
                     
                    </div>
                    <div class="text-end">
                      <h6 class="mb-2 text-800">Total Posts</h6>
                      <h4 class="fs-1 text-1000 mb-0">{{ $user->posts->count() }} </h4>
                    </div>
                    <div class="text-end">
                      <h6 class="mb-2 text-800">activity:</h6>

                      @if ($user->active_status) 
                      <span class="badge bg-success">En linea</span>
                     @else 
                     <span class="badge bg-danger">fuera de linea</span>
                     @endif
                      
                    </div>

                  </div>

                  <div class="border-top border-dashed border-300 pt-4">
     
                    <div class="row flex-between-center">
                      <div class="col-auto">
                        <h5 class="text-1000 mb-0">Link de Referido:</h5>
                      </div>
                      <div class="col-md-8"><input class="form-control form-control-sm mt-3 text-center w-100 text-dark bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="{{ $referralLink }}" /></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>



     {{--        <div class="col-12 col-lg-4">
            <div class="card h-100 mb-3">
              <div class="card-body">
                <div class="row align-items-center g-3">
                  <div class="col-12 col-sm-auto flex-1">
                    <h3 class="fw-bolder mb-2 line-clamp-1">Estado de la Cuenta  Deal details</h3>
                    <div class="d-flex align-items-center mb-4">
                      <h5 class="mb-0 me-4">USD $12,000.00</h5>
                      <h5 class="fw-semi-bold"><svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-grid d-inline-block lh-sm me-1" style="height:16px;width:16px;"><rect x="3" y="3" width="7" height="7"></rect><rect x="14" y="3" width="7" height="7"></rect><rect x="14" y="14" width="7" height="7"></rect><rect x="3" y="14" width="7" height="7"></rect></svg><span class="d-inline-block lh-sm">Financial</span></h5>
                    </div>
                    <div class="d-md-flex d-xl-block align-items-center justify-content-between mb-5">
                      <div class="d-flex align-items-center mb-3 mb-md-0 mb-xl-3">
                        <div class="avatar avatar-xl me-3"><img class="rounded-circle" src="../../assets/img/team/72x72/58.webp" alt=""></div>
                        <div>
                          <h5>Ansolo Lazinatov</h5>
                          <div class="dropdown"><a class="text-800 dropdown-toggle text-decoration-none dropdown-caret-none" href="deal-details.html#!" data-bs-toggle="dropdown" aria-expanded="false"> Owner<svg class="svg-inline--fa fa-caret-down text-800 fs--1 ms-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="caret-down" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg=""><path fill="currentColor" d="M310.6 246.6l-127.1 128C176.4 380.9 168.2 384 160 384s-16.38-3.125-22.63-9.375l-127.1-128C.2244 237.5-2.516 223.7 2.438 211.8S19.07 192 32 192h255.1c12.94 0 24.62 7.781 29.58 19.75S319.8 237.5 310.6 246.6z"></path></svg><!-- <span class="fa-solid fa-caret-down text-800 fs--1 ms-2"></span> Font Awesome fontawesome.com --></a>
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
                      <p class="mb-0"> Verificación</p>
                      <div><svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-clock d-inline-block lh-sm me-1" style="height:16px;width:16px;"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg><span class="d-inline-block lh-sm"> Dec 15, 05:00AM</span></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div> --}}

      <div class="col-12 col-lg-4">
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
                      <div class="col-auto"><a href="tel:+{{ Auth::user()->phone }}">{{ Auth::user()->phone }}</a></div>
                    </div>

                  </div>
                </div>
              </div>
            </div>
          </div> 


          
          <div>
            <div class="scrollbar">
              <ul class="nav nav-underline flex-nowrap mb-3 pb-1" id="myTab" role="tablist">
                <li class="nav-item me-3"><a class="nav-link text-nowrap active" id="orders-tab" data-bs-toggle="tab" href="profile.html#tab-orders" role="tab" aria-controls="tab-orders" aria-selected="true"><span class="fas fa-shopping-cart me-2"></span>Orders <span class="text-700 fw-normal"> (35)</span></a></li>
                <li class="nav-item me-3"><a class="nav-link text-nowrap" id="reviews-tab" data-bs-toggle="tab" href="profile.html#tab-reviews" role="tab" aria-controls="tab-orders" aria-selected="true"><span class="fas fa-star me-2"></span>Reviews<span class="text-700 fw-normal"> (24)</span></a></li>
                <li class="nav-item me-3"><a class="nav-link text-nowrap" id="wishlist-tab" data-bs-toggle="tab" href="profile.html#tab-wishlist" role="tab" aria-controls="tab-orders" aria-selected="true"><span class="fas fa-heart me-2"></span>Wishlist</a></li>
                <li class="nav-item me-3"><a class="nav-link text-nowrap" id="stores-tab" data-bs-toggle="tab" href="profile.html#tab-stores" role="tab" aria-controls="tab-stores" aria-selected="true"><span class="fas fa-home me-2"></span>Stores</a></li>
                <li class="nav-item"><a class="nav-link text-nowrap" id="personal-info-tab" data-bs-toggle="tab" href="profile.html#tab-personal-info" role="tab" aria-controls="tab-personal-info" aria-selected="true"><span class="fas fa-user me-2"></span>Personal info</a></li>
              </ul>
            </div>
            <div class="tab-content" id="profileTabContent">
              <div class="tab-pane fade show active" id="tab-orders" role="tabpanel" aria-labelledby="orders-tab">
                <div class="border-top border-bottom border-200" id="profileOrdersTable" data-list='{"valueNames":["order","status","delivery","date","total"],"page":6,"pagination":true}'>
                  <div class="table-responsive scrollbar">
                    <table class="table fs--1 mb-0">
                      <thead>
                        <tr>
                          <th class="sort white-space-nowrap align-middle pe-3 ps-0" scope="col" data-sort="order" style="width:15%; min-width:140px">ORDER</th>
                          <th class="sort align-middle pe-3" scope="col" data-sort="status" style="width:15%; min-width:180px">STATUS</th>
                          <th class="sort align-middle text-start" scope="col" data-sort="delivery" style="width:20%; min-width:160px">DELIVERY METHOD</th>
                          <th class="sort align-middle pe-0 text-end" scope="col" data-sort="date" style="width:15%; min-width:160px">DATE</th>
                          <th class="sort align-middle text-end" scope="col" data-sort="total" style="width:15%; min-width:160px">TOTAL</th>
                          <th class="align-middle pe-0 text-end" scope="col" style="width:15%;"> </th>
                        </tr>
                      </thead>
                      <tbody class="list" id="profile-order-table-body">
                        <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                          <td class="order align-middle white-space-nowrap py-2 ps-0"><a class="fw-semi-bold text-primary" href="profile.html#!">#2453</a></td>
                          <td class="status align-middle white-space-nowrap text-start fw-bold text-700 py-2"><span class="badge badge-phoenix fs--2 badge-phoenix-success"><span class="badge-label">Shipped</span><span class="ms-1" data-feather="check" style="height:12.8px;width:12.8px;"></span></span></td>
                          <td class="delivery align-middle white-space-nowrap text-900 py-2">Cash on delivery</td>
                          <td class="total align-middle text-700 text-end py-2">Dec 12, 12:56 PM</td>
                          <td class="date align-middle fw-semi-bold text-end py-2 text-1000">$87</td>
                          <td class="align-middle text-end white-space-nowrap pe-0 action py-2">
                            <div class="font-sans-serif btn-reveal-trigger position-static"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs--2"></span></button>
                              <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="profile.html#!">View</a><a class="dropdown-item" href="profile.html#!">Export</a>
                                <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="profile.html#!">Remove</a>
                              </div>
                            </div>
                          </td>
                        </tr>
                        <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                          <td class="order align-middle white-space-nowrap py-2 ps-0"><a class="fw-semi-bold text-primary" href="profile.html#!">#2452</a></td>
                          <td class="status align-middle white-space-nowrap text-start fw-bold text-700 py-2"><span class="badge badge-phoenix fs--2 badge-phoenix-info"><span class="badge-label">Ready to pickup</span><span class="ms-1" data-feather="info" style="height:12.8px;width:12.8px;"></span></span></td>
                          <td class="delivery align-middle white-space-nowrap text-900 py-2">Free shipping</td>
                          <td class="total align-middle text-700 text-end py-2">Dec 9, 2:28PM</td>
                          <td class="date align-middle fw-semi-bold text-end py-2 text-1000">$7264</td>
                          <td class="align-middle text-end white-space-nowrap pe-0 action py-2">
                            <div class="font-sans-serif btn-reveal-trigger position-static"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs--2"></span></button>
                              <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="profile.html#!">View</a><a class="dropdown-item" href="profile.html#!">Export</a>
                                <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="profile.html#!">Remove</a>
                              </div>
                            </div>
                          </td>
                        </tr>
                        <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                          <td class="order align-middle white-space-nowrap py-2 ps-0"><a class="fw-semi-bold text-primary" href="profile.html#!">#2451</a></td>
                          <td class="status align-middle white-space-nowrap text-start fw-bold text-700 py-2"><span class="badge badge-phoenix fs--2 badge-phoenix-warning"><span class="badge-label">Partially fulfilled</span><span class="ms-1" data-feather="clock" style="height:12.8px;width:12.8px;"></span></span></td>
                          <td class="delivery align-middle white-space-nowrap text-900 py-2">Local pickup</td>
                          <td class="total align-middle text-700 text-end py-2">Dec 4, 12:56 PM</td>
                          <td class="date align-middle fw-semi-bold text-end py-2 text-1000">$375</td>
                          <td class="align-middle text-end white-space-nowrap pe-0 action py-2">
                            <div class="font-sans-serif btn-reveal-trigger position-static"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs--2"></span></button>
                              <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="profile.html#!">View</a><a class="dropdown-item" href="profile.html#!">Export</a>
                                <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="profile.html#!">Remove</a>
                              </div>
                            </div>
                          </td>
                        </tr>
                        <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                          <td class="order align-middle white-space-nowrap py-2 ps-0"><a class="fw-semi-bold text-primary" href="profile.html#!">#2450</a></td>
                          <td class="status align-middle white-space-nowrap text-start fw-bold text-700 py-2"><span class="badge badge-phoenix fs--2 badge-phoenix-secondary"><span class="badge-label">Canceled</span><span class="ms-1" data-feather="x" style="height:12.8px;width:12.8px;"></span></span></td>
                          <td class="delivery align-middle white-space-nowrap text-900 py-2">Standard shipping</td>
                          <td class="total align-middle text-700 text-end py-2">Dec 1, 4:07 AM</td>
                          <td class="date align-middle fw-semi-bold text-end py-2 text-1000">$657</td>
                          <td class="align-middle text-end white-space-nowrap pe-0 action py-2">
                            <div class="font-sans-serif btn-reveal-trigger position-static"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs--2"></span></button>
                              <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="profile.html#!">View</a><a class="dropdown-item" href="profile.html#!">Export</a>
                                <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="profile.html#!">Remove</a>
                              </div>
                            </div>
                          </td>
                        </tr>
                        <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                          <td class="order align-middle white-space-nowrap py-2 ps-0"><a class="fw-semi-bold text-primary" href="profile.html#!">#2449</a></td>
                          <td class="status align-middle white-space-nowrap text-start fw-bold text-700 py-2"><span class="badge badge-phoenix fs--2 badge-phoenix-success"><span class="badge-label">fulfilled</span><span class="ms-1" data-feather="check" style="height:12.8px;width:12.8px;"></span></span></td>
                          <td class="delivery align-middle white-space-nowrap text-900 py-2">Express</td>
                          <td class="total align-middle text-700 text-end py-2">Nov 28, 7:28 PM</td>
                          <td class="date align-middle fw-semi-bold text-end py-2 text-1000">$9562</td>
                          <td class="align-middle text-end white-space-nowrap pe-0 action py-2">
                            <div class="font-sans-serif btn-reveal-trigger position-static"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs--2"></span></button>
                              <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="profile.html#!">View</a><a class="dropdown-item" href="profile.html#!">Export</a>
                                <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="profile.html#!">Remove</a>
                              </div>
                            </div>
                          </td>
                        </tr>
                        <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                          <td class="order align-middle white-space-nowrap py-2 ps-0"><a class="fw-semi-bold text-primary" href="profile.html#!">#2448</a></td>
                          <td class="status align-middle white-space-nowrap text-start fw-bold text-700 py-2"><span class="badge badge-phoenix fs--2 badge-phoenix-danger"><span class="badge-label">Unfulfilled</span><span class="ms-1" data-feather="check" style="height:12.8px;width:12.8px;"></span></span></td>
                          <td class="delivery align-middle white-space-nowrap text-900 py-2">Local delivery</td>
                          <td class="total align-middle text-700 text-end py-2">Nov 24, 10:16 AM</td>
                          <td class="date align-middle fw-semi-bold text-end py-2 text-1000">$256</td>
                          <td class="align-middle text-end white-space-nowrap pe-0 action py-2">
                            <div class="font-sans-serif btn-reveal-trigger position-static"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs--2"></span></button>
                              <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="profile.html#!">View</a><a class="dropdown-item" href="profile.html#!">Export</a>
                                <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="profile.html#!">Remove</a>
                              </div>
                            </div>
                          </td>
                        </tr>
                        <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                          <td class="order align-middle white-space-nowrap py-2 ps-0"><a class="fw-semi-bold text-600 pointers-events-none text-decoration-none" href="profile.html#!">#2447</a></td>
                          <td class="status align-middle white-space-nowrap text-start fw-bold text-700 py-2"><span class="badge badge-phoenix fs--2 badge-phoenix-secondary"><span class="badge-label">Cancelled</span><span class="ms-1" data-feather="x" style="height:12.8px;width:12.8px;"></span></span></td>
                          <td class="delivery align-middle white-space-nowrap text-900 py-2">Standard shipping</td>
                          <td class="total align-middle text-700 text-end py-2">Nov 10, 12:00 PM</td>
                          <td class="date align-middle fw-semi-bold text-end py-2 text-600">$898</td>
                          <td class="align-middle text-end white-space-nowrap pe-0 action py-2">
                            <div class="font-sans-serif btn-reveal-trigger position-static"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs--2"></span></button>
                              <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="profile.html#!">View</a><a class="dropdown-item" href="profile.html#!">Export</a>
                                <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="profile.html#!">Remove</a>
                              </div>
                            </div>
                          </td>
                        </tr>
                        <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                          <td class="order align-middle white-space-nowrap py-2 ps-0"><a class="fw-semi-bold text-primary" href="profile.html#!">#2446</a></td>
                          <td class="status align-middle white-space-nowrap text-start fw-bold text-700 py-2"><span class="badge badge-phoenix fs--2 badge-phoenix-success"><span class="badge-label">shipped</span><span class="ms-1" data-feather="check" style="height:12.8px;width:12.8px;"></span></span></td>
                          <td class="delivery align-middle white-space-nowrap text-900 py-2">Express</td>
                          <td class="total align-middle text-700 text-end py-2">Nov 12, 12:20 PM</td>
                          <td class="date align-middle fw-semi-bold text-end py-2 text-1000">$4116</td>
                          <td class="align-middle text-end white-space-nowrap pe-0 action py-2">
                            <div class="font-sans-serif btn-reveal-trigger position-static"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs--2"></span></button>
                              <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="profile.html#!">View</a><a class="dropdown-item" href="profile.html#!">Export</a>
                                <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="profile.html#!">Remove</a>
                              </div>
                            </div>
                          </td>
                        </tr>
                        <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                          <td class="order align-middle white-space-nowrap py-2 ps-0"><a class="fw-semi-bold text-600 pointers-events-none text-decoration-none" href="profile.html#!">#2445</a></td>
                          <td class="status align-middle white-space-nowrap text-start fw-bold text-700 py-2"><span class="badge badge-phoenix fs--2 badge-phoenix-success"><span class="badge-label">fulfilled</span><span class="ms-1" data-feather="check" style="height:12.8px;width:12.8px;"></span></span></td>
                          <td class="delivery align-middle white-space-nowrap text-900 py-2">Free shipping</td>
                          <td class="total align-middle text-700 text-end py-2">Oct 19, 1:20 PM</td>
                          <td class="date align-middle fw-semi-bold text-end py-2 text-600">$4116</td>
                          <td class="align-middle text-end white-space-nowrap pe-0 action py-2">
                            <div class="font-sans-serif btn-reveal-trigger position-static"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs--2"></span></button>
                              <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="profile.html#!">View</a><a class="dropdown-item" href="profile.html#!">Export</a>
                                <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="profile.html#!">Remove</a>
                              </div>
                            </div>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  <div class="row align-items-center justify-content-between py-2 pe-0 fs--1">
                    <div class="col-auto d-flex">
                      <p class="mb-0 d-none d-sm-block me-3 fw-semi-bold text-900" data-list-info="data-list-info"></p><a class="fw-semi-bold" href="profile.html#!" data-list-view="*">View all<span class="fas fa-angle-right ms-1" data-fa-transform="down-1"></span></a><a class="fw-semi-bold d-none" href="profile.html#!" data-list-view="less">View Less<span class="fas fa-angle-right ms-1" data-fa-transform="down-1"></span></a>
                    </div>
                    <div class="col-auto d-flex"><button class="page-link" data-list-pagination="prev"><span class="fas fa-chevron-left"></span></button>
                      <ul class="mb-0 pagination"></ul><button class="page-link pe-0" data-list-pagination="next"><span class="fas fa-chevron-right"></span></button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="tab-reviews" role="tabpanel" aria-labelledby="reviews-tab">
                <div class="border-y" id="profileRatingTable" data-list='{"valueNames":["product","rating","review","status","date"],"page":6,"pagination":true}'>
                  <div class="table-responsive scrollbar">
                    <table class="table fs--1 mb-0">
                      <thead>
                        <tr>
                          <th class="sort white-space-nowrap align-middle" scope="col" style="min-width:220px;" data-sort="product">PRODUCT</th>
                          <th class="sort align-middle" scope="col" data-sort="rating" style="max-width:10%;">RATING</th>
                          <th class="sort align-middle" scope="col" style="min-width:480px" data-sort="review">REVIEW</th>
                          <th class="sort align-middle" scope="col" style="max-width:12%;" data-sort="status">STATUS</th>
                          <th class="sort text-end align-middle" scope="col" style="max-width:10%;" data-sort="date">DATE</th>
                          <th class="sort text-end pe-0 align-middle" scope="col" style="width: 7%"> </th>
                        </tr>
                      </thead>
                      <tbody class="list" id="profile-review-table-body">
                        <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                          <td class="align-middle product pe-3"><a class="fw-semi-bold line-clamp-1" href="product-details.html">Fitbit Sense Advanced Smartwatch with Tools for Heart Health, Stress Management &amp; Skin Temperature Trends, Carbon/Graphite, One Size (S &amp; L Bands)</a></td>
                          <td class="align-middle rating white-space-nowrap fs--2"><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa-regular fa-star text-warning-300"></span></td>
                          <td class="align-middle review pe-7">
                            <p class="fw-semi-bold text-1000 mb-0 line-clamp-2">This Fitbit is fantastic! I was trying to be in better shape and needed some motivation, so I decided to treat myself to a new Fitbit.</p>
                          </td>
                          <td class="align-middle status pe-9"><span class="badge badge-phoenix fs--2 badge-phoenix-success">Approaved<span class="ms-1" data-feather="check" style="height:12.8px;width:12.8px;"></span></span></td>
                          <td class="align-middle text-end date white-space-nowrap">
                            <p class="text-700 mb-0">Just now</p>
                          </td>
                          <td class="align-middle white-space-nowrap text-end pe-0">
                            <div class="font-sans-serif btn-reveal-trigger position-static"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs--2"></span></button>
                              <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="profile.html#!">View</a><a class="dropdown-item" href="profile.html#!">Export</a>
                                <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="profile.html#!">Remove</a>
                              </div>
                            </div>
                          </td>
                        </tr>
                        <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                          <td class="align-middle product pe-3"><a class="fw-semi-bold line-clamp-1" href="product-details.html">iPhone 13 pro max-Pacific Blue-128GB storage</a></td>
                          <td class="align-middle rating white-space-nowrap fs--2"><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa-regular fa-star text-warning-300"></span></td>
                          <td class="align-middle review pe-7">
                            <p class="fw-semi-bold text-1000 mb-0 line-clamp-2">The order was delivered ahead of schedule. To give us additional time, you should leave the packaging sealed with plastic.</p>
                          </td>
                          <td class="align-middle status pe-9"><span class="badge badge-phoenix fs--2 badge-phoenix-warning">Pending<span class="ms-1" data-feather="clock" style="height:12.8px;width:12.8px;"></span></span></td>
                          <td class="align-middle text-end date white-space-nowrap">
                            <p class="text-700 mb-0">Dec 9, 2:28 PM</p>
                          </td>
                          <td class="align-middle white-space-nowrap text-end pe-0">
                            <div class="font-sans-serif btn-reveal-trigger position-static"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs--2"></span></button>
                              <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="profile.html#!">View</a><a class="dropdown-item" href="profile.html#!">Export</a>
                                <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="profile.html#!">Remove</a>
                              </div>
                            </div>
                          </td>
                        </tr>
                        <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                          <td class="align-middle product pe-3"><a class="fw-semi-bold line-clamp-1" href="product-details.html">Apple MacBook Pro 13 inch-M1-8/256GB-space</a></td>
                          <td class="align-middle rating white-space-nowrap fs--2"><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star-half-alt star-icon text-warning"></span></td>
                          <td class="align-middle review pe-7">
                            <p class="fw-semi-bold text-1000 mb-0 line-clamp-2">It's a Mac, after all. Once you've gone Mac, there's no going back. My first Mac lasted over nine years, and this is my second.</p>
                          </td>
                          <td class="align-middle status pe-9"><span class="badge badge-phoenix fs--2 badge-phoenix-success">Approaved<span class="ms-1" data-feather="check" style="height:12.8px;width:12.8px;"></span></span></td>
                          <td class="align-middle text-end date white-space-nowrap">
                            <p class="text-700 mb-0">Dec 4, 12:56 PM</p>
                          </td>
                          <td class="align-middle white-space-nowrap text-end pe-0">
                            <div class="font-sans-serif btn-reveal-trigger position-static"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs--2"></span></button>
                              <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="profile.html#!">View</a><a class="dropdown-item" href="profile.html#!">Export</a>
                                <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="profile.html#!">Remove</a>
                              </div>
                            </div>
                          </td>
                        </tr>
                        <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                          <td class="align-middle product pe-3"><a class="fw-semi-bold line-clamp-1" href="product-details.html">Apple iMac 24&quot; 4K Retina Display M1 8 Core CPU, 7 Core GPU, 256GB SSD, Green (MJV83ZP/A) 2021</a></td>
                          <td class="align-middle rating white-space-nowrap fs--2"><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa-regular fa-star text-warning-300"></span><span class="fa-regular fa-star text-warning-300"></span></td>
                          <td class="align-middle review pe-7">
                            <p class="fw-semi-bold text-1000 mb-0 line-clamp-2">Personally, I like the minimalist style, but I wouldn't choose it if I were searching for a computer that I would use frequently. It's not horrible in terms of speed and power</p>
                          </td>
                          <td class="align-middle status pe-9"><span class="badge badge-phoenix fs--2 badge-phoenix-success">Approaved<span class="ms-1" data-feather="check" style="height:12.8px;width:12.8px;"></span></span></td>
                          <td class="align-middle text-end date white-space-nowrap">
                            <p class="text-700 mb-0">Nov 28, 7:28 PM</p>
                          </td>
                          <td class="align-middle white-space-nowrap text-end pe-0">
                            <div class="font-sans-serif btn-reveal-trigger position-static"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs--2"></span></button>
                              <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="profile.html#!">View</a><a class="dropdown-item" href="profile.html#!">Export</a>
                                <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="profile.html#!">Remove</a>
                              </div>
                            </div>
                          </td>
                        </tr>
                        <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                          <td class="align-middle product pe-3"><a class="fw-semi-bold line-clamp-1" href="product-details.html">Razer Kraken v3 x Wired 7.1 Surroung Sound Gaming headset</a></td>
                          <td class="align-middle rating white-space-nowrap fs--2"><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span></td>
                          <td class="align-middle review pe-7">
                            <p class="fw-semi-bold text-1000 mb-0 line-clamp-2">It performs exactly as expected. There are three of these in the family.</p>
                          </td>
                          <td class="align-middle status pe-9"><span class="badge badge-phoenix fs--2 badge-phoenix-secondary">Cancelled<span class="ms-1" data-feather="x" style="height:12.8px;width:12.8px;"></span></span></td>
                          <td class="align-middle text-end date white-space-nowrap">
                            <p class="text-700 mb-0">Nov 24, 10:16 AM</p>
                          </td>
                          <td class="align-middle white-space-nowrap text-end pe-0">
                            <div class="font-sans-serif btn-reveal-trigger position-static"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs--2"></span></button>
                              <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="profile.html#!">View</a><a class="dropdown-item" href="profile.html#!">Export</a>
                                <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="profile.html#!">Remove</a>
                              </div>
                            </div>
                          </td>
                        </tr>
                        <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                          <td class="align-middle product pe-3"><a class="fw-semi-bold line-clamp-1" href="product-details.html">PlayStation 5 DualSense Wireless Controller</a></td>
                          <td class="align-middle rating white-space-nowrap fs--2"><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span></td>
                          <td class="align-middle review pe-7">
                            <p class="fw-semi-bold text-1000 mb-0 line-clamp-2">The controller is quite comfy for me. Despite its increased size, the controller still fits well in my hands.</p>
                          </td>
                          <td class="align-middle status pe-9"><span class="badge badge-phoenix fs--2 badge-phoenix-success">Approaved<span class="ms-1" data-feather="check" style="height:12.8px;width:12.8px;"></span></span></td>
                          <td class="align-middle text-end date white-space-nowrap">
                            <p class="text-700 mb-0">Just now</p>
                          </td>
                          <td class="align-middle white-space-nowrap text-end pe-0">
                            <div class="font-sans-serif btn-reveal-trigger position-static"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs--2"></span></button>
                              <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="profile.html#!">View</a><a class="dropdown-item" href="profile.html#!">Export</a>
                                <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="profile.html#!">Remove</a>
                              </div>
                            </div>
                          </td>
                        </tr>
                        <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                          <td class="align-middle product pe-3"><a class="fw-semi-bold line-clamp-1" href="product-details.html">2021 Apple 12.9-inch iPad Pro (Wi‑Fi, 128GB) - Space Gray</a></td>
                          <td class="align-middle rating white-space-nowrap fs--2"><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa-regular fa-star text-warning-300"></span></td>
                          <td class="align-middle review pe-7">
                            <p class="fw-semi-bold text-1000 mb-0 line-clamp-2">The response time and service I received when contacted the designers were Phenomenal!</p>
                          </td>
                          <td class="align-middle status pe-9"><span class="badge badge-phoenix fs--2 badge-phoenix-warning">Pending<span class="ms-1" data-feather="fas fa-stopwatch" style="height:12.8px;width:12.8px;"></span></span></td>
                          <td class="align-middle text-end date white-space-nowrap">
                            <p class="text-700 mb-0">Nov 07, 9:00 PM</p>
                          </td>
                          <td class="align-middle white-space-nowrap text-end pe-0">
                            <div class="font-sans-serif btn-reveal-trigger position-static"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs--2"></span></button>
                              <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="profile.html#!">View</a><a class="dropdown-item" href="profile.html#!">Export</a>
                                <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="profile.html#!">Remove</a>
                              </div>
                            </div>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  <div class="row align-items-center justify-content-between py-2 pe-0 fs--1">
                    <div class="col-auto d-flex">
                      <p class="mb-0 d-none d-sm-block me-3 fw-semi-bold text-900" data-list-info="data-list-info"></p><a class="fw-semi-bold" href="profile.html#!" data-list-view="*">View all<span class="fas fa-angle-right ms-1" data-fa-transform="down-1"></span></a><a class="fw-semi-bold d-none" href="profile.html#!" data-list-view="less">View Less<span class="fas fa-angle-right ms-1" data-fa-transform="down-1"></span></a>
                    </div>
                    <div class="col-auto d-flex"><button class="page-link" data-list-pagination="prev"><span class="fas fa-chevron-left"></span></button>
                      <ul class="mb-0 pagination"></ul><button class="page-link pe-0" data-list-pagination="next"><span class="fas fa-chevron-right"></span></button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="tab-wishlist" role="tabpanel" aria-labelledby="wishlist-tab">
                <div class="border-y" id="productWishlistTable" data-list='{"valueNames":["products","color","size","price","quantity","total"],"page":5,"pagination":true}'>
                  <div class="table-responsive scrollbar">
                    <table class="table fs--1 mb-0">
                      <thead>
                        <tr>
                          <th class="sort white-space-nowrap align-middle fs--2" scope="col" style="width:7%;"></th>
                          <th class="sort white-space-nowrap align-middle" scope="col" style="width:30%; min-width:250px;" data-sort="products">PRODUCTS</th>
                          <th class="sort align-middle" scope="col" data-sort="color" style="width:16%;">COLOR</th>
                          <th class="sort align-middle" scope="col" data-sort="size" style="width:10%;">SIZE</th>
                          <th class="sort align-middle text-end" scope="col" data-sort="price" style="width:10%;">PRICE</th>
                          <th class="sort align-middle text-end pe-0" scope="col" style="width:35%;"> </th>
                        </tr>
                      </thead>
                      <tbody class="list" id="profile-wishlist-table-body">
                        <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                          <td class="align-middle white-space-nowrap ps-0 py-0"><a class="border rounded-2 d-inline-block" href="product-details.html"><img src="https://prium.github.io/phoenix/v1.13.0/assets/img//products/1.png" alt="" width="53" /></a></td>
                          <td class="products align-middle pe-11"><a class="fw-semi-bold mb-0 line-clamp-1" href="product-details.html">Fitbit Sense Advanced Smartwatch with Tools for Heart Health, Stress Management &amp; Skin Temperature Trends, Carbon/Graphite, One Size (S &amp; L Bands)</a></td>
                          <td class="color align-middle white-space-nowrap fs--1 text-900">Pure matte black</td>
                          <td class="size align-middle white-space-nowrap text-700 fs--1 fw-semi-bold">42</td>
                          <td class="price align-middle text-900 fs--1 fw-semi-bold text-end">$57</td>
                          <td class="total align-middle fw-bold text-1000 text-end text-nowrap pe-0"><button class="btn btn-sm text-500 hover-text-600 me-2"><span class="fas fa-trash"></span></button><button class="btn btn-primary fs--2"><span class="fas fa-shopping-cart me-1 fs--2"></span>Add to cart</button></td>
                        </tr>
                        <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                          <td class="align-middle white-space-nowrap ps-0 py-0"><a class="border rounded-2 d-inline-block" href="product-details.html"><img src="https://prium.github.io/phoenix/v1.13.0/assets/img//products/7.png" alt="" width="53" /></a></td>
                          <td class="products align-middle pe-11"><a class="fw-semi-bold mb-0 line-clamp-1" href="product-details.html">2021 Apple 12.9-inch iPad Pro (Wi‑Fi, 128GB) - Space Gray</a></td>
                          <td class="color align-middle white-space-nowrap fs--1 text-900">Black</td>
                          <td class="size align-middle white-space-nowrap text-700 fs--1 fw-semi-bold">Pro</td>
                          <td class="price align-middle text-900 fs--1 fw-semi-bold text-end">$1,499</td>
                          <td class="total align-middle fw-bold text-1000 text-end text-nowrap pe-0"><button class="btn btn-sm text-500 hover-text-600 me-2"><span class="fas fa-trash"></span></button><button class="btn btn-primary fs--2"><span class="fas fa-shopping-cart me-1 fs--2"></span>Add to cart</button></td>
                        </tr>
                        <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                          <td class="align-middle white-space-nowrap ps-0 py-0"><a class="border rounded-2 d-inline-block" href="product-details.html"><img src="https://prium.github.io/phoenix/v1.13.0/assets/img//products/6.png" alt="" width="53" /></a></td>
                          <td class="products align-middle pe-11"><a class="fw-semi-bold mb-0 line-clamp-1" href="product-details.html">PlayStation 5 DualSense Wireless Controller</a></td>
                          <td class="color align-middle white-space-nowrap fs--1 text-900">White</td>
                          <td class="size align-middle white-space-nowrap text-700 fs--1 fw-semi-bold">Regular</td>
                          <td class="price align-middle text-900 fs--1 fw-semi-bold text-end">$299</td>
                          <td class="total align-middle fw-bold text-1000 text-end text-nowrap pe-0"><button class="btn btn-sm text-500 hover-text-600 me-2"><span class="fas fa-trash"></span></button><button class="btn btn-primary fs--2"><span class="fas fa-shopping-cart me-1 fs--2"></span>Add to cart</button></td>
                        </tr>
                        <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                          <td class="align-middle white-space-nowrap ps-0 py-0"><a class="border rounded-2 d-inline-block" href="product-details.html"><img src="https://prium.github.io/phoenix/v1.13.0/assets/img//products/3.png" alt="" width="53" /></a></td>
                          <td class="products align-middle pe-11"><a class="fw-semi-bold mb-0 line-clamp-1" href="product-details.html">Apple MacBook Pro 13 inch-M1-8/256GB-space</a></td>
                          <td class="color align-middle white-space-nowrap fs--1 text-900">Space Gray</td>
                          <td class="size align-middle white-space-nowrap text-700 fs--1 fw-semi-bold">Pro</td>
                          <td class="price align-middle text-900 fs--1 fw-semi-bold text-end">$1,699</td>
                          <td class="total align-middle fw-bold text-1000 text-end text-nowrap pe-0"><button class="btn btn-sm text-500 hover-text-600 me-2"><span class="fas fa-trash"></span></button><button class="btn btn-primary fs--2"><span class="fas fa-shopping-cart me-1 fs--2"></span>Add to cart</button></td>
                        </tr>
                        <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                          <td class="align-middle white-space-nowrap ps-0 py-0"><a class="border rounded-2 d-inline-block" href="product-details.html"><img src="https://prium.github.io/phoenix/v1.13.0/assets/img//products/4.png" alt="" width="53" /></a></td>
                          <td class="products align-middle pe-11"><a class="fw-semi-bold mb-0 line-clamp-1" href="product-details.html">Apple iMac 24&quot; 4K Retina Display M1 8 Core CPU, 7 Core GPU, 256GB SSD, Green (MJV83ZP/A) 2021</a></td>
                          <td class="color align-middle white-space-nowrap fs--1 text-900">Ocean Blue</td>
                          <td class="size align-middle white-space-nowrap text-700 fs--1 fw-semi-bold">21&quot;</td>
                          <td class="price align-middle text-900 fs--1 fw-semi-bold text-end">$65</td>
                          <td class="total align-middle fw-bold text-1000 text-end text-nowrap pe-0"><button class="btn btn-sm text-500 hover-text-600 me-2"><span class="fas fa-trash"></span></button><button class="btn btn-primary fs--2"><span class="fas fa-shopping-cart me-1 fs--2"></span>Add to cart</button></td>
                        </tr>
                        <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                          <td class="align-middle white-space-nowrap ps-0 py-0"><a class="border rounded-2 d-inline-block" href="product-details.html"><img src="https://prium.github.io/phoenix/v1.13.0/assets/img//products/10.png" alt="" width="53" /></a></td>
                          <td class="products align-middle pe-11"><a class="fw-semi-bold mb-0 line-clamp-1" href="product-details.html">Apple Magic Mouse (Wireless, Rechargable) - Silver</a></td>
                          <td class="color align-middle white-space-nowrap fs--1 text-900">White</td>
                          <td class="size align-middle white-space-nowrap text-700 fs--1 fw-semi-bold">Regular</td>
                          <td class="price align-middle text-900 fs--1 fw-semi-bold text-end">$30</td>
                          <td class="total align-middle fw-bold text-1000 text-end text-nowrap pe-0"><button class="btn btn-sm text-500 hover-text-600 me-2"><span class="fas fa-trash"></span></button><button class="btn btn-primary fs--2"><span class="fas fa-shopping-cart me-1 fs--2"></span>Add to cart</button></td>
                        </tr>
                        <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                          <td class="align-middle white-space-nowrap ps-0 py-0"><a class="border rounded-2 d-inline-block" href="product-details.html"><img src="https://prium.github.io/phoenix/v1.13.0/assets/img//products/8.png" alt="" width="53" /></a></td>
                          <td class="products align-middle pe-11"><a class="fw-semi-bold mb-0 line-clamp-1" href="product-details.html">Amazon Basics Matte Black Wired Keyboard - US Layout (QWERTY)</a></td>
                          <td class="color align-middle white-space-nowrap fs--1 text-900">Black</td>
                          <td class="size align-middle white-space-nowrap text-700 fs--1 fw-semi-bold">MD</td>
                          <td class="price align-middle text-900 fs--1 fw-semi-bold text-end">$40</td>
                          <td class="total align-middle fw-bold text-1000 text-end text-nowrap pe-0"><button class="btn btn-sm text-500 hover-text-600 me-2"><span class="fas fa-trash"></span></button><button class="btn btn-primary fs--2"><span class="fas fa-shopping-cart me-1 fs--2"></span>Add to cart</button></td>
                        </tr>
                        <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                          <td class="align-middle white-space-nowrap ps-0 py-0"><a class="border rounded-2 d-inline-block" href="product-details.html"><img src="https://prium.github.io/phoenix/v1.13.0/assets/img//products/12.png" alt="" width="53" /></a></td>
                          <td class="products align-middle pe-11"><a class="fw-semi-bold mb-0 line-clamp-1" href="product-details.html">HORI Racing Wheel Apex for PlayStation 4_3, and PC</a></td>
                          <td class="color align-middle white-space-nowrap fs--1 text-900">Black</td>
                          <td class="size align-middle white-space-nowrap text-700 fs--1 fw-semi-bold">45</td>
                          <td class="price align-middle text-900 fs--1 fw-semi-bold text-end">$130</td>
                          <td class="total align-middle fw-bold text-1000 text-end text-nowrap pe-0"><button class="btn btn-sm text-500 hover-text-600 me-2"><span class="fas fa-trash"></span></button><button class="btn btn-primary fs--2"><span class="fas fa-shopping-cart me-1 fs--2"></span>Add to cart</button></td>
                        </tr>
                        <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                          <td class="align-middle white-space-nowrap ps-0 py-0"><a class="border rounded-2 d-inline-block" href="product-details.html"><img src="https://prium.github.io/phoenix/v1.13.0/assets/img//products/17.png" alt="" width="53" /></a></td>
                          <td class="products align-middle pe-11"><a class="fw-semi-bold mb-0 line-clamp-1" href="product-details.html">Xbox Series S</a></td>
                          <td class="color align-middle white-space-nowrap fs--1 text-900">Space Gray</td>
                          <td class="size align-middle white-space-nowrap text-700 fs--1 fw-semi-bold">sm</td>
                          <td class="price align-middle text-900 fs--1 fw-semi-bold text-end">$99</td>
                          <td class="total align-middle fw-bold text-1000 text-end text-nowrap pe-0"><button class="btn btn-sm text-500 hover-text-600 me-2"><span class="fas fa-trash"></span></button><button class="btn btn-primary fs--2"><span class="fas fa-shopping-cart me-1 fs--2"></span>Add to cart</button></td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  <div class="row align-items-center justify-content-between py-2 pe-0 fs--1">
                    <div class="col-auto d-flex">
                      <p class="mb-0 d-none d-sm-block me-3 fw-semi-bold text-900" data-list-info="data-list-info"></p><a class="fw-semi-bold" href="profile.html#!" data-list-view="*">View all<span class="fas fa-angle-right ms-1" data-fa-transform="down-1"></span></a><a class="fw-semi-bold d-none" href="profile.html#!" data-list-view="less">View Less<span class="fas fa-angle-right ms-1" data-fa-transform="down-1"></span></a>
                    </div>
                    <div class="col-auto d-flex"><button class="page-link" data-list-pagination="prev"><span class="fas fa-chevron-left"></span></button>
                      <ul class="mb-0 pagination"></ul><button class="page-link pe-0" data-list-pagination="next"><span class="fas fa-chevron-right"></span></button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="tab-stores" role="tabpanel" aria-labelledby="wishlist-tab">
                <div class="border-y mb-6" id="profileStoreTable" data-list='{"valueNames":["products","color","size","price","quantity","total"],"page":5,"pagination":true}'>
                  <div class="table-responsive scrollbar">
                    <table class="table table-sm fs--1 mb-0">
                      <thead>
                        <tr>
                          <th class="sort white-space-nowrap align-middle fs--2" scope="col" style="width:7%; min-width:80px;"></th>
                          <th class="sort white-space-nowrap align-middle" scope="col" style="width:20%; min-width:150px;" data-sort="products">VENDOR</th>
                          <th class="sort align-middle" scope="col" data-sort="color" style="width:15%; min-width:150px;">STORE RATING</th>
                          <th class="sort align-middle text-end" scope="col" data-sort="price" style="width:12%; min-width:150px;">ORDERS</th>
                          <th class="sort align-middle text-end" scope="col" data-sort="size" style="width:15%; min-width:150px;">TOTAL SPENT</th>
                          <th class="sort align-middle text-end" scope="col" data-sort="price" style="width:15%; min-width:150px;">LAST ORDER</th>
                          <th class="sort align-middle text-end pe-0" scope="col" style="width:30%; min-width:150px;"> </th>
                        </tr>
                      </thead>
                      <tbody class="list" id="profile-stores-table-body">
                        <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                          <td class="align-middle white-space-nowrap ps-0 py-0"><a href="profile.html#!"> <img src="https://prium.github.io/phoenix/v1.13.0/assets/img//brand2/dell.png" alt="" width="53" /></a></td>
                          <td class="products align-middle"><a class="fw-semi-bold mb-0" href="profile.html#!">Dell Technologies</a></td>
                          <td class="color align-middle white-space-nowrap fs--1 text-900"><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span></td>
                          <td class="size align-middle white-space-nowrap text-primary fs--1 fw-bold text-end">3</td>
                          <td class="price align-middle text-end text-900 fw-semi-bold">$ 23987</td>
                          <td class="price align-middle text-700 fs--1 text-end">Dec 12, 12:56 PM</td>
                          <td class="total align-middle fw-bold text-1000 text-end">
                            <div class="font-sans-serif btn-reveal-trigger position-static"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs--2"></span></button>
                              <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="profile.html#!">View</a><a class="dropdown-item" href="profile.html#!">Export</a>
                                <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="profile.html#!">Remove</a>
                              </div>
                            </div>
                          </td>
                        </tr>
                        <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                          <td class="align-middle white-space-nowrap ps-0 py-0"><a href="profile.html#!"> <img src="https://prium.github.io/phoenix/v1.13.0/assets/img//brand2/honda.png" alt="" width="53" /></a></td>
                          <td class="products align-middle"><a class="fw-semi-bold mb-0" href="profile.html#!">Honda</a></td>
                          <td class="color align-middle white-space-nowrap fs--1 text-900"><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa-regular fa-star text-warning-300"></span><span class="fa-regular fa-star text-warning-300"></span></td>
                          <td class="size align-middle white-space-nowrap text-primary fs--1 fw-bold text-end">5</td>
                          <td class="price align-middle text-end text-900 fw-semi-bold">$ 1250</td>
                          <td class="price align-middle text-700 fs--1 text-end">Dec 09, 10:48 AM</td>
                          <td class="total align-middle fw-bold text-1000 text-end">
                            <div class="font-sans-serif btn-reveal-trigger position-static"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs--2"></span></button>
                              <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="profile.html#!">View</a><a class="dropdown-item" href="profile.html#!">Export</a>
                                <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="profile.html#!">Remove</a>
                              </div>
                            </div>
                          </td>
                        </tr>
                        <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                          <td class="align-middle white-space-nowrap ps-0 py-0"><a href="profile.html#!"> <img src="https://prium.github.io/phoenix/v1.13.0/assets/img//brand2/xiaomi.png" alt="" width="53" /></a></td>
                          <td class="products align-middle"><a class="fw-semi-bold mb-0" href="profile.html#!">Xiaomi</a></td>
                          <td class="color align-middle white-space-nowrap fs--1 text-900"><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa-regular fa-star text-warning-300"></span><span class="fa-regular fa-star text-warning-300"></span></td>
                          <td class="size align-middle white-space-nowrap text-primary fs--1 fw-bold text-end">6</td>
                          <td class="price align-middle text-end text-900 fw-semi-bold">$ 360</td>
                          <td class="price align-middle text-700 fs--1 text-end">Dec 03, 05:45 PM</td>
                          <td class="total align-middle fw-bold text-1000 text-end">
                            <div class="font-sans-serif btn-reveal-trigger position-static"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs--2"></span></button>
                              <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="profile.html#!">View</a><a class="dropdown-item" href="profile.html#!">Export</a>
                                <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="profile.html#!">Remove</a>
                              </div>
                            </div>
                          </td>
                        </tr>
                        <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                          <td class="align-middle white-space-nowrap ps-0 py-0"><a href="profile.html#!"> <img src="../../../assets/img/brand/huawei.png" alt="" width="53" /></a></td>
                          <td class="products align-middle"><a class="fw-semi-bold mb-0" href="profile.html#!">Huawei Shop BD</a></td>
                          <td class="color align-middle white-space-nowrap fs--1 text-900"><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa-regular fa-star text-warning-300"></span><span class="fa-regular fa-star text-warning-300"></span></td>
                          <td class="size align-middle white-space-nowrap text-primary fs--1 fw-bold text-end">1</td>
                          <td class="price align-middle text-end text-900 fw-semi-bold">$1,799</td>
                          <td class="price align-middle text-700 fs--1 text-end">Nov 27, 06:20 PM</td>
                          <td class="total align-middle fw-bold text-1000 text-end">
                            <div class="font-sans-serif btn-reveal-trigger position-static"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs--2"></span></button>
                              <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="profile.html#!">View</a><a class="dropdown-item" href="profile.html#!">Export</a>
                                <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="profile.html#!">Remove</a>
                              </div>
                            </div>
                          </td>
                        </tr>
                        <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                          <td class="align-middle white-space-nowrap ps-0 py-0"><a href="profile.html#!"> <img src="../../../assets/img/brand2/intel-2.png" alt="" width="53" /></a></td>
                          <td class="products align-middle"><a class="fw-semi-bold mb-0" href="profile.html#!">Intel</a></td>
                          <td class="color align-middle white-space-nowrap fs--1 text-900"><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa-regular fa-star text-warning-300"></span></td>
                          <td class="size align-middle white-space-nowrap text-primary fs--1 fw-bold text-end">2</td>
                          <td class="price align-middle text-end text-900 fw-semi-bold">$65</td>
                          <td class="price align-middle text-700 fs--1 text-end">Nov 21, 10:25 AM</td>
                          <td class="total align-middle fw-bold text-1000 text-end">
                            <div class="font-sans-serif btn-reveal-trigger position-static"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs--2"></span></button>
                              <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="profile.html#!">View</a><a class="dropdown-item" href="profile.html#!">Export</a>
                                <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="profile.html#!">Remove</a>
                              </div>
                            </div>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  <div class="row align-items-center justify-content-between py-2 pe-0 fs--1">
                    <div class="col-auto d-flex">
                      <p class="mb-0 d-none d-sm-block me-3 fw-semi-bold text-900" data-list-info="data-list-info"></p><a class="fw-semi-bold" href="profile.html#!" data-list-view="*">View all<span class="fas fa-angle-right ms-1" data-fa-transform="down-1"></span></a><a class="fw-semi-bold d-none" href="profile.html#!" data-list-view="less">View Less<span class="fas fa-angle-right ms-1" data-fa-transform="down-1"></span></a>
                    </div>
                    <div class="col-auto d-flex"><button class="page-link" data-list-pagination="prev"><span class="fas fa-chevron-left"></span></button>
                      <ul class="mb-0 pagination"></ul><button class="page-link pe-0" data-list-pagination="next"><span class="fas fa-chevron-right"></span></button>
                    </div>
                  </div>
                </div>
                <div class="d-flex flex-between-center mb-5">
                  <div>
                    <h3 class="text-1100 mb-2">My Favorites Stores</h3>
                    <h5 class="text-700 fw-semi-bold">Essential for a better life</h5>
                  </div><button class="btn btn-phoenix-primary">View all</button>
                </div>
                <div class="row gx-3 gy-5">
                  <div class="col-6 col-sm-4 col-md-3 col-lg-2 hover-actions-trigger btn-reveal-trigger">
                    <div class="border d-flex flex-center rounded-3 mb-3 p-4" style="height:180px;"><img class="mw-100" src="../../../assets/img/brand2/dell.png" alt="Dell Technologies" /></div>
                    <h5 class="mb-2">Dell Technologies</h5>
                    <div class="mb-1 fs--1"><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa-regular fa-star text-warning-300"></span></div>
                    <p class="text-500 fs--1 mb-2 fw-semi-bold">(1263 people rated)</p><a class="btn btn-link p-0" href="profile.html#!">Visit Store<span class="fas fa-chevron-right ms-1 fs--2"></span></a>
                    <div class="hover-actions top-0 end-0 mt-2 me-3">
                      <div class="font-sans-serif btn-reveal-trigger"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal p-2 lh-1 bg-100 rounded-1" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs--1"></span></button>
                        <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="profile.html#!">View</a><a class="dropdown-item" href="profile.html#!">Export</a>
                          <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="profile.html#!">Remove</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-6 col-sm-4 col-md-3 col-lg-2 hover-actions-trigger btn-reveal-trigger">
                    <div class="border d-flex flex-center rounded-3 mb-3 p-4" style="height:180px;"><img class="mw-100" src="../../../assets/img/brand2/hp.png" alt="HP Global Store" /></div>
                    <h5 class="mb-2">HP Global Store</h5>
                    <div class="mb-1 fs--1"><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa-regular fa-star text-warning-300"></span><span class="fa-regular fa-star text-warning-300"></span></div>
                    <p class="text-500 fs--1 mb-2 fw-semi-bold">(365 people rated)</p><a class="btn btn-link p-0" href="profile.html#!">Visit Store<span class="fas fa-chevron-right ms-1 fs--2"></span></a>
                    <div class="hover-actions top-0 end-0 mt-2 me-3">
                      <div class="font-sans-serif btn-reveal-trigger"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal p-2 lh-1 bg-100 rounded-1" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs--1"></span></button>
                        <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="profile.html#!">View</a><a class="dropdown-item" href="profile.html#!">Export</a>
                          <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="profile.html#!">Remove</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-6 col-sm-4 col-md-3 col-lg-2 hover-actions-trigger btn-reveal-trigger">
                    <div class="border d-flex flex-center rounded-3 mb-3 p-4" style="height:180px;"><img class="mw-100" src="../../../assets/img/brand2/honda.png" alt="Honda" /></div>
                    <h5 class="mb-2">Honda</h5>
                    <div class="mb-1 fs--1"><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span></div>
                    <p class="text-500 fs--1 mb-2 fw-semi-bold">(596 people rated)</p><a class="btn btn-link p-0" href="profile.html#!">Visit Store<span class="fas fa-chevron-right ms-1 fs--2"></span></a>
                    <div class="hover-actions top-0 end-0 mt-2 me-3">
                      <div class="font-sans-serif btn-reveal-trigger"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal p-2 lh-1 bg-100 rounded-1" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs--1"></span></button>
                        <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="profile.html#!">View</a><a class="dropdown-item" href="profile.html#!">Export</a>
                          <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="profile.html#!">Remove</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-6 col-sm-4 col-md-3 col-lg-2 hover-actions-trigger btn-reveal-trigger">
                    <div class="border d-flex flex-center rounded-3 mb-3 p-4" style="height:180px;"><img class="mw-100" src="../../../assets/img/brand2/asus-rog.png" alt="Asus ROG" /></div>
                    <h5 class="mb-2">Asus ROG</h5>
                    <div class="mb-1 fs--1"><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa-regular fa-star text-warning-300"></span><span class="fa-regular fa-star text-warning-300"></span></div>
                    <p class="text-500 fs--1 mb-2 fw-semi-bold">(2365 people rated)</p><a class="btn btn-link p-0" href="profile.html#!">Visit Store<span class="fas fa-chevron-right ms-1 fs--2"></span></a>
                    <div class="hover-actions top-0 end-0 mt-2 me-3">
                      <div class="font-sans-serif btn-reveal-trigger"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal p-2 lh-1 bg-100 rounded-1" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs--1"></span></button>
                        <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="profile.html#!">View</a><a class="dropdown-item" href="profile.html#!">Export</a>
                          <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="profile.html#!">Remove</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-6 col-sm-4 col-md-3 col-lg-2 hover-actions-trigger btn-reveal-trigger">
                    <div class="border d-flex flex-center rounded-3 mb-3 p-4" style="height:180px;"><img class="mw-100" src="../../../assets/img/brand2/yamaha.png" alt="Yamaha" /></div>
                    <h5 class="mb-2">Yamaha</h5>
                    <div class="mb-1 fs--1"><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span></div>
                    <p class="text-500 fs--1 mb-2 fw-semi-bold">(1253 people rated)</p><a class="btn btn-link p-0" href="profile.html#!">Visit Store<span class="fas fa-chevron-right ms-1 fs--2"></span></a>
                    <div class="hover-actions top-0 end-0 mt-2 me-3">
                      <div class="font-sans-serif btn-reveal-trigger"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal p-2 lh-1 bg-100 rounded-1" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs--1"></span></button>
                        <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="profile.html#!">View</a><a class="dropdown-item" href="profile.html#!">Export</a>
                          <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="profile.html#!">Remove</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-6 col-sm-4 col-md-3 col-lg-2 hover-actions-trigger btn-reveal-trigger">
                    <div class="border d-flex flex-center rounded-3 mb-3 p-4" style="height:180px;"><img class="mw-100" src="../../../assets/img/brand2/ibm.png" alt="IBM" /></div>
                    <h5 class="mb-2">IBM</h5>
                    <div class="mb-1 fs--1"><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa-regular fa-star text-warning-300"></span><span class="fa-regular fa-star text-warning-300"></span></div>
                    <p class="text-500 fs--1 mb-2 fw-semi-bold">(996 people rated)</p><a class="btn btn-link p-0" href="profile.html#!">Visit Store<span class="fas fa-chevron-right ms-1 fs--2"></span></a>
                    <div class="hover-actions top-0 end-0 mt-2 me-3">
                      <div class="font-sans-serif btn-reveal-trigger"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal p-2 lh-1 bg-100 rounded-1" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs--1"></span></button>
                        <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="profile.html#!">View</a><a class="dropdown-item" href="profile.html#!">Export</a>
                          <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="profile.html#!">Remove</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-6 col-sm-4 col-md-3 col-lg-2 hover-actions-trigger btn-reveal-trigger">
                    <div class="border d-flex flex-center rounded-3 mb-3 p-4" style="height:180px;"><img class="mw-100" src="../../../assets/img/brand2/apple-2.png" alt="Apple Store" /></div>
                    <h5 class="mb-2">Apple Store</h5>
                    <div class="mb-1 fs--1"><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa-regular fa-star text-warning-300"></span><span class="fa-regular fa-star text-warning-300"></span></div>
                    <p class="text-500 fs--1 mb-2 fw-semi-bold">(365 people rated)</p><a class="btn btn-link p-0" href="profile.html#!">Visit Store<span class="fas fa-chevron-right ms-1 fs--2"></span></a>
                    <div class="hover-actions top-0 end-0 mt-2 me-3">
                      <div class="font-sans-serif btn-reveal-trigger"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal p-2 lh-1 bg-100 rounded-1" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs--1"></span></button>
                        <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="profile.html#!">View</a><a class="dropdown-item" href="profile.html#!">Export</a>
                          <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="profile.html#!">Remove</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-6 col-sm-4 col-md-3 col-lg-2 hover-actions-trigger btn-reveal-trigger">
                    <div class="border d-flex flex-center rounded-3 mb-3 p-4" style="height:180px;"><img class="mw-100" src="../../../assets/img/brand2/oppo.png" alt="Oppo" /></div>
                    <h5 class="mb-2">Oppo</h5>
                    <div class="mb-1 fs--1"><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa-regular fa-star text-warning-300"></span><span class="fa-regular fa-star text-warning-300"></span></div>
                    <p class="text-500 fs--1 mb-2 fw-semi-bold">(576 people rated)</p><a class="btn btn-link p-0" href="profile.html#!">Visit Store<span class="fas fa-chevron-right ms-1 fs--2"></span></a>
                    <div class="hover-actions top-0 end-0 mt-2 me-3">
                      <div class="font-sans-serif btn-reveal-trigger"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal p-2 lh-1 bg-100 rounded-1" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs--1"></span></button>
                        <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="profile.html#!">View</a><a class="dropdown-item" href="profile.html#!">Export</a>
                          <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="profile.html#!">Remove</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-6 col-sm-4 col-md-3 col-lg-2 hover-actions-trigger btn-reveal-trigger">
                    <div class="border d-flex flex-center rounded-3 mb-3 p-4" style="height:180px;"><img class="mw-100" src="../../../assets/img/brand2/redragon.png" alt="Redragon" /></div>
                    <h5 class="mb-2">Redragon</h5>
                    <div class="mb-1 fs--1"><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa-regular fa-star text-warning-300"></span><span class="fa-regular fa-star text-warning-300"></span><span class="fa-regular fa-star text-warning-300"></span></div>
                    <p class="text-500 fs--1 mb-2 fw-semi-bold">(1125 people rated)</p><a class="btn btn-link p-0" href="profile.html#!">Visit Store<span class="fas fa-chevron-right ms-1 fs--2"></span></a>
                    <div class="hover-actions top-0 end-0 mt-2 me-3">
                      <div class="font-sans-serif btn-reveal-trigger"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal p-2 lh-1 bg-100 rounded-1" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs--1"></span></button>
                        <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="profile.html#!">View</a><a class="dropdown-item" href="profile.html#!">Export</a>
                          <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="profile.html#!">Remove</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-6 col-sm-4 col-md-3 col-lg-2 hover-actions-trigger btn-reveal-trigger">
                    <div class="border d-flex flex-center rounded-3 mb-3 p-4" style="height:180px;"><img class="mw-100" src="../../../assets/img/brand2/xbox.png" alt="Microsoft XBOX" /></div>
                    <h5 class="mb-2">Microsoft XBOX</h5>
                    <div class="mb-1 fs--1"><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa-regular fa-star text-warning-300"></span></div>
                    <p class="text-500 fs--1 mb-2 fw-semi-bold">(830 people rated)</p><a class="btn btn-link p-0" href="profile.html#!">Visit Store<span class="fas fa-chevron-right ms-1 fs--2"></span></a>
                    <div class="hover-actions top-0 end-0 mt-2 me-3">
                      <div class="font-sans-serif btn-reveal-trigger"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal p-2 lh-1 bg-100 rounded-1" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs--1"></span></button>
                        <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="profile.html#!">View</a><a class="dropdown-item" href="profile.html#!">Export</a>
                          <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="profile.html#!">Remove</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-6 col-sm-4 col-md-3 col-lg-2 hover-actions-trigger btn-reveal-trigger">
                    <div class="border d-flex flex-center rounded-3 mb-3 p-4" style="height:180px;"><img class="mw-100" src="../../../assets/img/brand2/lenovo.png" alt="Lenovo" /></div>
                    <h5 class="mb-2">Lenovo</h5>
                    <div class="mb-1 fs--1"><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa-regular fa-star text-warning-300"></span><span class="fa-regular fa-star text-warning-300"></span></div>
                    <p class="text-500 fs--1 mb-2 fw-semi-bold">(1032 people rated)</p><a class="btn btn-link p-0" href="profile.html#!">Visit Store<span class="fas fa-chevron-right ms-1 fs--2"></span></a>
                    <div class="hover-actions top-0 end-0 mt-2 me-3">
                      <div class="font-sans-serif btn-reveal-trigger"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal p-2 lh-1 bg-100 rounded-1" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs--1"></span></button>
                        <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="profile.html#!">View</a><a class="dropdown-item" href="profile.html#!">Export</a>
                          <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="profile.html#!">Remove</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-6 col-sm-4 col-md-3 col-lg-2 hover-actions-trigger btn-reveal-trigger">
                    <div class="border d-flex flex-center rounded-3 mb-3 p-4" style="height:180px;"><img class="mw-100" src="../../../assets/img/brand2/xiaomi.png" alt="Xiaomi" /></div>
                    <h5 class="mb-2">Xiaomi</h5>
                    <div class="mb-1 fs--1"><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa-regular fa-star text-warning-300"></span><span class="fa-regular fa-star text-warning-300"></span></div>
                    <p class="text-500 fs--1 mb-2 fw-semi-bold">(965 people rated)</p><a class="btn btn-link p-0" href="profile.html#!">Visit Store<span class="fas fa-chevron-right ms-1 fs--2"></span></a>
                    <div class="hover-actions top-0 end-0 mt-2 me-3">
                      <div class="font-sans-serif btn-reveal-trigger"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal p-2 lh-1 bg-100 rounded-1" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs--1"></span></button>
                        <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="profile.html#!">View</a><a class="dropdown-item" href="profile.html#!">Export</a>
                          <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="profile.html#!">Remove</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="tab-personal-info" role="tabpanel" aria-labelledby="personal-info-tab">
                <div class="row g-3 mb-5">
                  <div class="col-12 col-lg-6"><label class="form-label text-1000 fs-0 ps-0 text-capitalize lh-sm" for="fullName">Full name</label><input class="form-control" id="fullName" type="text" placeholder="Full name" /></div>
                  <div class="col-12 col-lg-6"><label class="form-label text-1000 fs-0 ps-0 text-capitalize lh-sm" for="gender">Gender</label><select class="form-select" id="gender">
                      <option value="male">Male</option>
                      <option value="female">Female</option>
                      <option value="non-binary">Non-binary</option>
                      <option value="not-to-say">Prefer not to say</option>
                    </select></div>
                  <div class="col-12 col-lg-6"><label class="form-label text-1000 fs-0 ps-0 text-capitalize lh-sm" for="email">Email</label><input class="form-control" id="email" type="text" placeholder="Email" /></div>
                  <div class="col-12 col-lg-6">
                    <div class="row g-2 gy-lg-0"><label class="form-label text-1000 fs-0 ps-1 text-capitalize lh-sm mb-1">Date of birth</label>
                      <div class="col-6 col-sm-2 col-lg-3 col-xl-2"><select class="form-select" id="date">
                          <option value="1">1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                          <option value="4">4</option>
                          <option value="5">5</option>
                          <option value="6">6</option>
                          <option value="7">7</option>
                          <option value="8">8</option>
                          <option value="9">9</option>
                          <option value="10">10</option>
                          <option value="11">11</option>
                          <option value="12">12</option>
                          <option value="13">13</option>
                          <option value="14">14</option>
                          <option value="15">15</option>
                          <option value="16">16</option>
                          <option value="17">17</option>
                          <option value="18">18</option>
                          <option value="19">19</option>
                          <option value="20">20</option>
                          <option value="21">21</option>
                          <option value="22">22</option>
                          <option value="23">23</option>
                          <option value="24">24</option>
                          <option value="25">25</option>
                          <option value="26">26</option>
                          <option value="27">27</option>
                          <option value="28">28</option>
                          <option value="29">29</option>
                          <option value="30">30</option>
                        </select></div>
                      <div class="col-6 col-sm-2 col-lg-3 col-xl-2"><select class="form-select" id="month">
                          <option value="Jan">Jan</option>
                          <option value="Feb">Feb</option>
                          <option value="Mar">Mar</option>
                          <option value="Apr">Apr</option>
                          <option value="May">May</option>
                          <option value="Jun">Jun</option>
                          <option value="Jul">Jul</option>
                          <option value="Aug">Aug</option>
                          <option value="Sep">Sep</option>
                          <option value="Oct">Oct</option>
                          <option value="Nov">Nov</option>
                          <option value="Dec">Dec</option>
                        </select></div>
                      <div class="col-12 col-sm-8 col-lg-6 col-xl-8"><select class="form-select" id="year">
                          <option value="1990">1990</option>
                          <option value="1991">1991</option>
                          <option value="1992">1992</option>
                          <option value="1993">1993</option>
                          <option value="1994">1994</option>
                          <option value="1995">1995</option>
                          <option value="1996">1996</option>
                          <option value="1997">1997</option>
                          <option value="1998">1998</option>
                          <option value="1999">1999</option>
                          <option value="2000">2000</option>
                          <option value="2001">2001</option>
                          <option value="2002">2002</option>
                          <option value="2003">2003</option>
                          <option value="2004">2004</option>
                          <option value="2005">2005</option>
                          <option value="2006">2006</option>
                          <option value="2007">2007</option>
                          <option value="2008">2008</option>
                          <option value="2009">2009</option>
                          <option value="2010">2010</option>
                          <option value="2011">2011</option>
                          <option value="2012">2012</option>
                          <option value="2013">2013</option>
                          <option value="2014">2014</option>
                          <option value="2015">2015</option>
                          <option value="2016">2016</option>
                          <option value="2017">2017</option>
                          <option value="2018">2018</option>
                          <option value="2019">2019</option>
                          <option value="2020">2020</option>
                          <option value="2021">2021</option>
                          <option value="2022">2022</option>
                        </select></div>
                    </div>
                  </div>
                  <div class="col-12 col-lg-6"><label class="form-label text-1000 fw-bold fs-0 ps-0 text-capitalize lh-sm" for="phone">Phone</label><input class="form-control" id="phone" type="text" placeholder="+1234567890" /></div>
                  <div class="col-12 col-lg-6"><label class="form-label text-1000 fw-bold fs-0 ps-0 text-capitalize lh-sm" for="alternative_phone">Alternative phone</label><input class="form-control" id="alternative_phone" type="text" placeholder="+1234567890" /></div>
                  <div class="col-12 col-lg-4"><label class="form-label text-1000 fw-bold fs-0 ps-0 text-capitalize lh-sm" for="facebook">Facebook</label><input class="form-control" id="facebook" type="text" placeholder="Facebook" /></div>
                  <div class="col-12 col-lg-4"><label class="form-label text-1000 fw-bold fs-0 ps-0 text-capitalize lh-sm" for="instagram">Instagram</label><input class="form-control" id="instagram" type="text" placeholder="Instagram" /></div>
                  <div class="col-12 col-lg-4"><label class="form-label text-1000 fw-bold fs-0 ps-0 text-capitalize lh-sm" for="twitter">Twitter</label><input class="form-control" id="twitter" type="text" placeholder="Twitter" /></div>
                </div>
                <div class="text-end"><button class="btn btn-primary px-7">Save changes</button></div>
              </div>
            </div>
          </div>
        </div><!-- end of .container-->
      </section><!-- <section> close ============================-->
      <!-- ============================================-->

      <div class="support-chat-container">
        <div class="container-fluid support-chat">
          <div class="card bg-white">
            <div class="card-header d-flex flex-between-center px-4 py-3 border-bottom">
              <h5 class="mb-0 d-flex align-items-center gap-2">Demo widget<span class="fa-solid fa-circle text-success fs--3"></span></h5>
              <div class="btn-reveal-trigger"><button class="btn btn-link p-0 dropdown-toggle dropdown-caret-none transition-none d-flex" type="button" id="support-chat-dropdown" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h text-900"></span></button>
                <div class="dropdown-menu dropdown-menu-end py-2" aria-labelledby="support-chat-dropdown"><a class="dropdown-item" href="profile.html#!">Request a callback</a><a class="dropdown-item" href="profile.html#!">Search in chat</a><a class="dropdown-item" href="profile.html#!">Show history</a><a class="dropdown-item" href="profile.html#!">Report to Admin</a><a class="dropdown-item btn-support-chat" href="profile.html#!">Close Support</a></div>
              </div>
            </div>
            <div class="card-body chat p-0">
              <div class="d-flex flex-column-reverse scrollbar h-100 p-3">
                <div class="text-end mt-6"><a class="mb-2 d-inline-flex align-items-center text-decoration-none text-1100 hover-bg-soft rounded-pill border border-primary py-2 ps-4 pe-3" href="profile.html#!">
                    <p class="mb-0 fw-semi-bold fs--1">I need help with something</p><span class="fa-solid fa-paper-plane text-primary fs--1 ms-3"></span>
                  </a><a class="mb-2 d-inline-flex align-items-center text-decoration-none text-1100 hover-bg-soft rounded-pill border border-primary py-2 ps-4 pe-3" href="profile.html#!">
                    <p class="mb-0 fw-semi-bold fs--1">I can’t reorder a product I previously ordered</p><span class="fa-solid fa-paper-plane text-primary fs--1 ms-3"></span>
                  </a><a class="mb-2 d-inline-flex align-items-center text-decoration-none text-1100 hover-bg-soft rounded-pill border border-primary py-2 ps-4 pe-3" href="profile.html#!">
                    <p class="mb-0 fw-semi-bold fs--1">How do I place an order?</p><span class="fa-solid fa-paper-plane text-primary fs--1 ms-3"></span>
                  </a><a class="false d-inline-flex align-items-center text-decoration-none text-1100 hover-bg-soft rounded-pill border border-primary py-2 ps-4 pe-3" href="profile.html#!">
                    <p class="mb-0 fw-semi-bold fs--1">My payment method not working</p><span class="fa-solid fa-paper-plane text-primary fs--1 ms-3"></span>
                  </a></div>
                <div class="text-center mt-auto">
                  <div class="avatar avatar-3xl status-online"><img class="rounded-circle border border-3 border-white" src="https://prium.github.io/phoenix/v1.13.0/assets/img/team/30.webp" alt="" /></div>
                  <h5 class="mt-2 mb-3">Eric</h5>
                  <p class="text-center text-black mb-0">Ask us anything – we’ll get back to you here or by email within 24 hours.</p>
                </div>
              </div>
            </div>
            <div class="card-footer d-flex align-items-center gap-2 border-top ps-3 pe-4 py-3">
              <div class="d-flex align-items-center flex-1 gap-3 border rounded-pill px-4"><input class="form-control outline-none border-0 flex-1 fs--1 px-0" type="text" placeholder="Write message" /><label class="btn btn-link d-flex p-0 text-500 fs--1 border-0" for="supportChatPhotos"><span class="fa-solid fa-image"></span></label><input class="d-none" type="file" accept="image/*" id="supportChatPhotos" /><label class="btn btn-link d-flex p-0 text-500 fs--1 border-0" for="supportChatAttachment"> <span class="fa-solid fa-paperclip"></span></label><input class="d-none" type="file" id="supportChatAttachment" /></div><button class="btn p-0 border-0 send-btn"><span class="fa-solid fa-paper-plane fs--1"></span></button>
            </div>
          </div>
        </div><button class="btn p-0 border border-200 btn-support-chat"><span class="fs-0 btn-text text-primary text-nowrap">Chat demo</span><span class="fa-solid fa-circle text-success fs--1 ms-2"></span><span class="fa-solid fa-chevron-down text-primary fs-1"></span></button>
      </div>
    </main><!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->
</div>
</x-guest-layout>

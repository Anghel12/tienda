

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
                <div class="col-auto"><button class="btn btn-phoenix-danger"><span class="fas fa-trash-alt me-2"></span>Delete customer</button></div>
                <div class="col-auto"><button class="btn btn-phoenix-secondary"><span class="fas fa-key me-2"></span>Reset password</button></div>
              </div>
            </div>
          </div>
          <div class="row g-3 mb-6">
            <div class="col-12 col-lg-8">
              <div class="card h-100">
                <div class="card-body">
                  <div class="border-bottom border-dashed border-300 pb-4">
                    <div class="row align-items-center g-3 g-sm-5 text-center text-sm-start">
                      <div class="col-12 col-sm-auto"><input class="d-none" id="avatarFile" type="file" /><label class="cursor-pointer avatar avatar-5xl" for="avatarFile"><img class="rounded-circle" src="{{ Auth::user()->profile_photo_url }}" alt="" /></label></div>
                      <div class="col-12 col-sm-auto flex-1">
                        <h3>{{ Auth::user()->name }}</h3>
                        <p class="text-800">Joined 3 months ago</p>
                        <div><a class="me-2" href="profile.html#!"><span class="fab fa-linkedin-in text-400 hover-primary"></span></a><a class="me-2" href="profile.html#!"><span class="fab fa-facebook text-400 hover-primary"></span></a><a href="profile.html#!"><span class="fab fa-twitter text-400 hover-primary"></span></a></div>
                      </div>
                    </div>
                  </div>
                  <div class="d-flex flex-between-center pt-4">
                    <div>
                      <h6 class="mb-2 text-800">Total Spent</h6>
                      <h4 class="fs-1 text-1000 mb-0">$894</h4>
                    </div>
                    <div class="text-end">
                      <h6 class="mb-2 text-800">Last Order</h6>
                      <h4 class="fs-1 text-1000 mb-0">1 week ago</h4>
                    </div>
                    <div class="text-end">
                      <h6 class="mb-2 text-800">Total Orders</h6>
                      <h4 class="fs-1 text-1000 mb-0">97 </h4>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12 col-lg-4">
              <div class="card h-100">
                <div class="card-body">


                      <div class="row list" id="icon-list">
                        <div class="col-lg-12 "><span class="icon-list-item d-none">far fa-address-book</span>
                          <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-3 far fa-address-book"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-dark bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="far fa-address-book" /></div>
                        </div>
          
             
                      </div>


                </div>
              </div>
            </div>
          </div>
          <div class="pb-6">
            <h2 class="mb-4">Usuarios Referidos </h2>
            <div id="lealsTable" data-list='{"valueNames":["name","email","phone","contact","company","date"],"page":10,"pagination":true}'>
              <div class="row g-3 justify-content-between mb-4">
                <div class="col-auto">
                  <div class="d-md-flex justify-content-between">
                    <div><button class="btn btn-primary me-4"><span class="fas fa-plus me-2"></span>Create Lead</button><button class="btn btn-link text-900 px-0"><span class="fa-solid fa-file-export fs--1 me-2"></span>Export</button></div>
                  </div>
                </div>
                <div class="col-auto">
                  <div class="d-flex">
                    <div class="search-box me-2">
                      <form class="position-relative" data-bs-toggle="search" data-bs-display="static"><input class="form-control search-input search" type="search" placeholder="Search by name" aria-label="Search" />
                        <span class="fas fa-search search-box-icon"></span>
                      </form>
                    </div>
                    <div class="flatpickr-input-container me-2"><input class="form-control ps-6 datetimepicker" id="datepicker" type="text" data-options='{"dateFormat":"M j, Y","disableMobile":true,"defaultDate":"Mar 1, 2022"}' /><span class="uil uil-calendar-alt flatpickr-icon text-700"></span></div><button class="btn px-3 btn-phoenix-secondary" type="button" data-bs-toggle="modal" data-bs-target="#filterModal" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fa-solid fa-filter text-primary" data-fa-transform="down-3"></span></button>
                    <div class="modal fade" id="filterModal" tabindex="-1">
                      <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content border">
                          <form id="addEventForm" autocomplete="off">
                            <div class="modal-header border-200 p-4">
                              <h5 class="modal-title text-1000 fs-2 lh-sm">Filter</h5><button class="btn p-1 text-900" type="button" data-bs-dismiss="modal" aria-label="Close"><span class="fas fa-times fs--1"></span></button>
                            </div>
                            <div class="modal-body pt-4 pb-2 px-4">
                              <div class="mb-3"><label class="fw-bold mb-2 text-1000" for="leadStatus">Lead Status</label><select class="form-select" id="leadStatus">
                                  <option value="newLead" selected="selected">New Lead</option>
                                  <option value="coldLead">Cold Lead</option>
                                  <option value="wonLead">Won Lead</option>
                                  <option value="canceled">Canceled</option>
                                </select></div>
                              <div class="mb-3"><label class="fw-bold mb-2 text-1000" for="createDate">Create Date</label><select class="form-select" id="createDate">
                                  <option value="today" selected="selected">Today</option>
                                  <option value="last7Days">Last 7 Days</option>
                                  <option value="last30Days">Last 30 Days</option>
                                  <option value="chooseATimePeriod">Choose a time period</option>
                                </select></div>
                              <div class="mb-3"><label class="fw-bold mb-2 text-1000" for="designation">Designation</label><select class="form-select" id="designation">
                                  <option value="VPAccounting" selected="selected">VP Accounting</option>
                                  <option value="ceo">CEO</option>
                                  <option value="creativeDirector">Creative Director</option>
                                  <option value="accountant">Accountant</option>
                                  <option value="executiveManager">Executive Manager</option>
                                </select></div>
                            </div>
                            <div class="modal-footer d-flex justify-content-end align-items-center px-4 pb-4 border-0 pt-3"><button class="btn btn-sm btn-phoenix-primary px-4 fs--2 my-0" type="submit"> <span class="fas fa-arrows-rotate me-2 fs--2"></span>Reset</button><button class="btn btn-sm btn-primary px-9 fs--2 my-0" type="submit">Done</button></div>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="table-responsive scrollbar mx-n1 px-1 border-top">
                <table class="table fs--1 mb-0 leads-table">
                  <thead>
                    <tr>
                      <th class="white-space-nowrap fs--1 align-middle ps-0" style="max-width:20px; width:18px;">
                        <div class="form-check mb-0 fs-0"><input class="form-check-input" type="checkbox" data-bulk-select='{"body":"leal-tables-body"}' /></div>
                      </th>
                      <th class="sort white-space-nowrap align-middle text-uppercase ps-0" scope="col" data-sort="name" style="width:25%;">Name</th>
                      <th class="sort align-middle ps-4 pe-5 text-uppercase border-end" scope="col" data-sort="email" style="width:15%;">
                        <div class="d-inline-flex flex-center">
                          <div class="d-flex align-items-center px-1 py-1 bg-success-100 rounded me-2"><span class="text-success-600 dark__text-success-300" data-feather="mail"></span></div><span>Email</span>
                        </div>
                      </th>
                      <th class="sort align-middle ps-4 pe-5 text-uppercase border-end" scope="col" data-sort="phone" style="width:15%; min-width: 180px;">
                        <div class="d-inline-flex flex-center">
                          <div class="d-flex align-items-center px-1 py-1 bg-primary-100 rounded me-2"><span class="text-primary-600 dark__text-primary-300" data-feather="phone"></span></div><span>Phone</span>
                        </div>
                      </th>
                      <th class="sort align-middle ps-4 pe-5 text-uppercase border-end" scope="col" data-sort="contact" style="width:15%;">
                        <div class="d-inline-flex flex-center">
                          <div class="d-flex align-items-center px-1 py-1 bg-info-100 rounded me-2"><span class="text-info-600 dark__text-info-300" data-feather="user"></span></div><span>Contact name</span>
                        </div>
                      </th>
                      <th class="sort align-middle ps-4 pe-5 text-uppercase border-end" scope="col" data-sort="company" style="width:15%;">
                        <div class="d-inline-flex flex-center">
                          <div class="d-flex align-items-center px-1 py-1 bg-warning-100 rounded me-2"><span class="text-warning-600 dark__text-warning-300" data-feather="grid"></span></div><span>Company name</span>
                        </div>
                      </th>
                      <th class="sort align-middle ps-4 pe-5 text-uppercase" scope="col" data-sort="date" style="width:15%;">Create date</th>
                      <th class="sort text-end align-middle pe-0 ps-4" scope="col"></th>
                    </tr>
                  </thead>
                  <tbody class="list" id="leal-tables-body">
                    @foreach ($referrals as $referral)
                    <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                      <td class="fs--1 align-middle">
                        <div class="form-check mb-0 fs-0"><input class="form-check-input" type="checkbox" data-bulk-select-row='{"customer":{"avatar":"/team/32.webp","name":"Anthoney Michael","designation":"VP Accounting","status":{"label":"new lead","type":"badge-phoenix-primary"}},"email":"anth125@gmail.com","phone":"+1-202-555-0126","contact":"Ally Aagaard","company":"Google.inc","date":"Jan 01, 12:56 PM"}' /></div>
                      </td>
                      <td class="name align-middle white-space-nowrap ps-0">
                        <div class="d-flex align-items-center"><a href="leads.html#!">
                            <div class="avatar avatar-xl me-3"><img class="rounded-circle" src="https://prium.github.io/phoenix/v1.13.0/assets/img/team/32.webp" alt="" /></div>
                          </a>
                          <div><a class="fs-0 fw-bold" href="leads.html#!">{{ $referral->user_id->name }}</a>
                            <div class="d-flex align-items-center">
                              <p class="mb-0 text-1000 fw-semi-bold fs--1 me-2">{{ $referral->referral_code }}</p><span class="badge badge-phoenix badge-phoenix-primary">new lead</span>
                            </div>
                          </div>
                        </div>
                      </td>
                      <td class="email align-middle white-space-nowrap fw-semi-bold ps-4 border-end"><a class="text-1000" href="mailto:anth125@gmail.com">anth125@gmail.com</a></td>
                      <td class="phone align-middle white-space-nowrap fw-semi-bold ps-4 border-end"><a class="text-1000" href="tel:+1-202-555-0126">{{ $referral->points }}</a></td>
                      <td class="contact align-middle white-space-nowrap ps-4 border-end fw-semi-bold text-1000">{{ $referral->status }}</td>
                      <td class="company align-middle white-space-nowrap text-600 ps-4 border-end fw-semi-bold text-1000">Google.inc</td>
                      <td class="date align-middle white-space-nowrap text-600 ps-4 text-700">Jan 01, 12:56 PM</td>
                      <td class="align-middle white-space-nowrap text-end pe-0 ps-4">
                        <div class="font-sans-serif btn-reveal-trigger position-static"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs--2" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs--2"></span></button>
                          <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="leads.html#!">View</a><a class="dropdown-item" href="leads.html#!">Export</a>
                            <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="leads.html#!">Remove</a>
                          </div>
                        </div>
                      </td>
                    </tr>
  
                    @endforeach
                  </tbody>
                </table>
              </div>
              <div class="row align-items-center justify-content-end py-4 pe-0 fs--1">
                <div class="col-auto d-flex">
                  <p class="mb-0 d-none d-sm-block me-3 fw-semi-bold text-900" data-list-info="data-list-info"></p><a class="fw-semi-bold" href="leads.html#!" data-list-view="*">View all<span class="fas fa-angle-right ms-1" data-fa-transform="down-1"></span></a><a class="fw-semi-bold d-none" href="leads.html#!" data-list-view="less">View Less<span class="fas fa-angle-right ms-1" data-fa-transform="down-1"></span></a>
                </div>
                <div class="col-auto d-flex"><button class="page-link" data-list-pagination="prev"><span class="fas fa-chevron-left"></span></button>
                  <ul class="mb-0 pagination"></ul><button class="page-link pe-0" data-list-pagination="next"><span class="fas fa-chevron-right"></span></button>
                </div>
              </div>
            </div>
          </div>
  
  
        </div><!-- end of .container-->
      </section><!-- <section> close ============================-->
      <!-- ============================================-->

    </main><!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->
</div>
</x-guest-layout>


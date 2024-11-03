  <x-guest-layout>
        <div class="content">
            <nav class="mb-2" aria-label="breadcrumb">
              <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a href="members.html#!">Admin</a></li>
                <li class="breadcrumb-item active">Transacciones</li>
              </ol>
            </nav>
            <h2 class="text-bold text-1100 mb-5">Transacciones</h2>
            <div id="members" data-list='{"valueNames":["customer","email","mobile_number","city","last_active","joined"],"page":10,"pagination":true}'>
              <div class="row align-items-center justify-content-between g-3 mb-4">
                <div class="col col-auto">
                  <div class="search-box">
                    <form class="position-relative" data-bs-toggle="search" data-bs-display="static"><input class="form-control search-input search" type="search" placeholder="Search members" aria-label="Search" />
                      <span class="fas fa-search search-box-icon"></span>
                    </form>
                  </div>
                </div>
                <div class="col-auto"> 
                  <div class="d-flex align-items-center"><button class="btn btn-link text-900 me-4 px-0"><span class="fa-solid fa-file-export fs--1 me-2"></span>Export</button><button class="btn btn-primary"><span class="fas fa-plus me-2"></span>Add member</button></div>
                </div>
              </div>
              <div class="mx-n4 mx-lg-n6 px-4 px-lg-6 mb-9 bg-white border-y border-300 mt-2 position-relative top-1">
                <div class="table-responsive scrollbar ms-n1 ps-1">
                  <table class="table table-sm fs--1 mb-0">
                    <thead>
                      <tr>
                        <th class="white-space-nowrap fs--1 align-middle ps-0">
                          <div class="form-check mb-0 fs-0"><input class="form-check-input" id="checkbox-bulk-members-select" type="checkbox" data-bulk-select='{"body":"members-table-body"}' /></div>
                        </th>
                        <th class="sort align-middle" scope="col" data-sort="User" style="width:15%; min-width:200px;">User</th>
                        <th class="sort align-middle" scope="col" data-sort="Coin" style="width:15%; min-width:200px;">Coin</th>
                        <th class="sort align-middle pe-3" scope="col" data-sort="Payment" style="width:20%; min-width:200px;">Payment</th>
                        <th class="sort align-middle" scope="col" data-sort="Amount" style="width:10%;">Amount</th>
                        <th class="sort align-middle text-end" scope="col" data-sort="last_active" style="width:21%;  min-width:200px;">type</th>
                       <th class="sort align-middle text-end pe-0" scope="col" data-sort="joined" style="width:19%;  min-width:200px;">price</th> 
                        <th class="sort align-middle text-end pe-0" scope="col" data-sort="joined" style="width:19%;  min-width:200px;">Actions</th>
                      </tr>
                    </thead>
                    <tbody class="list" id="members-table-body">

                     @foreach ($Transactions as $transaction)

                      <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                        <td class="fs--1 align-middle ps-0 py-3">
                          <div class="form-check mb-0 fs-0"><input class="form-check-input" type="checkbox" data-bulk-select-row='{"customer":{"avatar":"/team/32.webp","name":"Carry Anna"},"email":"annac34@gmail.com","mobile":"+912346578","city":"Budapest","lastActive":"34 min ago","joined":"Dec 12, 12:56 PM"}' /></div>
                        </td>
                        <td class="customer align-middle white-space-nowrap"><a class="d-flex align-items-center text-900 text-hover-1000" href="members.html#!">
                        <div class="avatar avatar-m">
                            <img class="rounded-circle" src="{{ $transaction->user->profile_photo_url }}" alt="{{ $transaction->user->name }}" />
                        </div>
                         <h6 class="mb-0 ms-3 fw-semi-bold"> {{ $transaction->user->id }}</h6>
                          </a>
                        </td>
                        <td class="email align-middle white-space-nowrap"><a class="fw-semi-bold" href="coin_id">{{ $transaction->coin_id }}</a></td>
                        <td class="mobile_number align-middle white-space-nowrap"><a class="fw-bold text-1100" href="payment_id">{{ $transaction->payment_id }}</a></td>
                        <td class="email align-middle white-space-nowrap"><a class="fw-semi-bold" href="amount">{{ $transaction->amount }}</a></td>
                        <td class="mobile_number align-middle white-space-nowrap"><a class="fw-bold text-1100" href="type">{{ $transaction->type }}</a></td>
                        <td class="email align-middle white-space-nowrap"><a class="fw-semi-bold" href="price">{{ $transaction->price }}</a></td>

                        <td class="align-middle white-space-nowrap text-end pe-0 ps-4 btn-reveal-trigger">
                          <div class="font-sans-serif btn-reveal-trigger position-static"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs--2" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs--2"></span></button>
                            <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="{{ route('admin.transactions.show', $transaction->id ) }}">View</a><a class="dropdown-item" href="{{ route('admin.transactions.edit', $transaction->id  ) }}">EDIT</a>
                              <div class="dropdown-divider"></div>
                           <form action="{{ route('admin.transactions.destroy', $transaction->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                         
                                <button type="submit" class="dropdown-item text-danger">Remove</button>
                            </form> 
                            
                              </a>
                            </div>
                          </div>
                        </td>
                      </tr>
                       @endforeach
    
                    </tbody>
                  </table>
                </div>
                <div class="row align-items-center justify-content-between py-2 pe-0 fs--1">
                  <div class="col-auto d-flex">
                    <p class="mb-0 d-none d-sm-block me-3 fw-semi-bold text-900" data-list-info="data-list-info"></p><a class="fw-semi-bold" href="members.html#!" data-list-view="*">View all<span class="fas fa-angle-right ms-1" data-fa-transform="down-1"></span></a><a class="fw-semi-bold d-none" href="members.html#!" data-list-view="less">View Less<span class="fas fa-angle-right ms-1" data-fa-transform="down-1"></span></a>
                  </div>
                  <div class="col-auto d-flex"><button class="page-link" data-list-pagination="prev"><span class="fas fa-chevron-left"></span></button>
                    <ul class="mb-0 pagination"></ul><button class="page-link pe-0" data-list-pagination="next"><span class="fas fa-chevron-right"></span></button>
                  </div>
                </div>
              </div>
            </div>



          </div>
</x-guest-layout>
{{-- 
    @livewire('admin.users-index') --}}

    <x-guest-layout>
        <div class="content">
            <nav class="mb-2" aria-label="breadcrumb">
              <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a href="members.html#!">Pages</a></li>
                <li class="breadcrumb-item active">Ordenes</li>
              </ol>
            </nav>
            <h2 class="text-bold text-1100 mb-5">Ordenes</h2>
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
                        <th class="sort align-middle" scope="col" data-sort="customer" style="width:15%; min-width:200px;">Cantidad</th>
                        <th class="sort align-middle" scope="col" data-sort="email" style="width:15%; min-width:200px;">User</th>
                        <th class="sort align-middle pe-3" scope="col" data-sort="mobile_number" style="width:20%; min-width:200px;">status</th>
                        <th class="sort align-middle text-end" scope="col" data-sort="last_active" style="width:21%;  min-width:200px;">Metodo de Pago </th>
                    {{--     <th class="sort align-middle text-end pe-0" scope="col" data-sort="joined" style="width:19%;  min-width:200px;">JOINED</th> --}}
                        <th class="sort align-middle text-end pe-0" scope="col" data-sort="joined" style="width:19%;  min-width:200px;">Hora</th>
                      </tr>
                    </thead>
                    <tbody class="list" id="members-table-body">

                        @foreach ($orders as $order)
  
                  
                      <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                        <td class="joined align-middle white-space-nowrap text-700 text-end">#{{ $order->item_count}}</td>
                        <td class="joined align-middle white-space-nowrap text-700 text-end"> {{$order->user->name}}  </td>
                        <td class="joined align-middle white-space-nowrap text-700 text-end">{{ $order->status }}</td>
                        <td class="joined align-middle white-space-nowrap text-700 text-end">{{ $order->payment_method }}</td>
                        <td class="joined align-middle white-space-nowrap text-700 text-end">{{$order->created_at->diffForHumans() }}</td>
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
{{-- 
@include('admin.orders.partials.ver_order')  --}}


<x-guest-layout>
    <div class="content">
        <nav class="mb-2" aria-label="breadcrumb">
          <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="products.html#!">Page 1</a></li>
            <li class="breadcrumb-item"><a href="products.html#!">Page 2</a></li>
            <li class="breadcrumb-item active">Config</li>
          </ol>
        </nav>

        @if (session('info'))
<div class="alert alert-success">
     <strong> {{session('info')}} </strong>
</div>
@endif

        <div class="mb-9">
          <div class="row g-3 mb-4">
            <div class="col-auto">
              <h2 class="mb-0">Config de coin</h2>
            </div>
          </div>
          <ul class="nav nav-links mb-3 mb-lg-2 mx-n3">
            <li class="nav-item"><a class="nav-link active" aria-current="page" href="products.html#"><span>All </span><span class="text-700 fw-semi-bold">(68817)</span></a></li>
            <li class="nav-item"><a class="nav-link" href="products.html#"><span>Published </span><span class="text-700 fw-semi-bold">(70348)</span></a></li>
            <li class="nav-item"><a class="nav-link" href="products.html#"><span>Drafts </span><span class="text-700 fw-semi-bold">(17)</span></a></li>
            <li class="nav-item"><a class="nav-link" href="products.html#"><span>On discount </span><span class="text-700 fw-semi-bold">(810)</span></a></li>
          </ul>
          <div id="products" data-list='{"valueNames":["product","price","category","tags","vendor","time"],"page":10,"pagination":true}'>
            <div class="mb-4">
              <div class="d-flex flex-wrap gap-3">
                <div class="search-box">
                  <form class="position-relative" data-bs-toggle="search" data-bs-display="static"><input class="form-control search-input search" type="search" placeholder="Search products" aria-label="Search" />
                    <span class="fas fa-search search-box-icon"></span>
                  </form>
                </div>
                <div class="scrollbar overflow-hidden-y">
                  <div class="btn-group position-static" role="group">
                    <div class="btn-group position-static text-nowrap"><button class="btn btn-phoenix-secondary px-7 flex-shrink-0" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"> Category<span class="fas fa-angle-down ms-2"></span></button>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="products.html#">Action</a></li>
                        <li><a class="dropdown-item" href="products.html#">Another action</a></li>
                        <li><a class="dropdown-item" href="products.html#">Something else here</a></li>
                        <li>
                          <hr class="dropdown-divider" />
                        </li>
                        <li><a class="dropdown-item" href="products.html#">Separated link</a></li>
                      </ul>
                    </div>
                    <div class="btn-group position-static text-nowrap"><button class="btn btn-sm btn-phoenix-secondary px-7 flex-shrink-0" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"> Vendor<span class="fas fa-angle-down ms-2"></span></button>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="products.html#">Action</a></li>
                        <li><a class="dropdown-item" href="products.html#">Another action</a></li>
                        <li><a class="dropdown-item" href="products.html#">Something else here</a></li>
                        <li>
                          <hr class="dropdown-divider" />
                        </li>
                        <li><a class="dropdown-item" href="products.html#">Separated link</a></li>
                      </ul>
                    </div><button class="btn btn-sm btn-phoenix-secondary px-7 flex-shrink-0">More filters</button>
                  </div>
                </div>
                <div class="ms-xxl-auto"><button class="btn btn-link text-900 me-4 px-0"><span class="fa-solid fa-file-export fs--1 me-2"></span>Export</button><a href="{{ route('admin.coins.create' ) }}" class="btn btn-primary" id="addBtn"><span class="fas fa-plus me-2"></span>Add Coins</a></div>
              </div>
            </div>
            <div class="mx-n4 px-4 mx-lg-n6 px-lg-6 bg-white border-top border-bottom border-200 position-relative top-1">
              <div class="table-responsive scrollbar mx-n1 px-1">
                <table class="table fs--1 mb-0">
                  <thead>

                    <tr>
                      <th class="white-space-nowrap fs--1 align-middle ps-0" style="max-width:20px; width:18px;">
                        <div class="form-check mb-0 fs-0"><input class="form-check-input" id="checkbox-bulk-products-select" type="checkbox" data-bulk-select='{"body":"products-table-body"}' /></div>
                      </th>
                      <th class="sort white-space-nowrap align-middle fs--2" scope="col" style="width:70px;"></th>
                      <th class="sort white-space-nowrap align-middle ps-4" scope="col"  data-sort="IMAGE">IMAGE</th>
                      <th class="sort white-space-nowrap align-middle ps-4" scope="col"  data-sort="COIN">COIN NAME</th>
                      <th class="sort align-middle text-end ps-4" scope="col" data-sort="SYMBOL" style="width:150px;">SYMBOL</th>
                      <th class="sort align-middle ps-4" scope="col" data-sort="RATE" style="width:150px;">exchange_rate</th>

                      <th class="sort align-middle ps-4" scope="col" data-sort="time" style="width:50px;">CREACION</th>
                      <th class="sort text-end align-middle pe-0 ps-4" scope="col">Actions</th>
                    </tr>
                  </thead>
                  <tbody class="list" id="products-table-body">
                                 @foreach ($coins as $coin)
                    <tr class="position-static">
                      <td class="fs--1 align-middle">
                        <div class="form-check mb-0 fs-0"><input class="form-check-input" type="checkbox"/></div>
                      </td>
                      <td class="align-middle white-space-nowrap py-0"><a class="d-block border rounded-2" href="../landing/product-details.html"><img src="https://prium.github.io/phoenix/v1.13.0/assets/img//products/1.png" alt="" width="53" /></a></td>
                      <td class="product align-middle ps-4"><a class="fw-semi-bold line-clamp-3 mb-0" href="../landing/product-details.html"> {{ $coin->name }} </a></td>
                      <td class="price align-middle white-space-nowrap text-end fw-bold text-700 ps-4">{{ $coin->symbol }}</td>
                      <td class="category align-middle white-space-nowrap text-600 fs--1 ps-4 fw-semi-bold">{{ $coin->exchange_rate }}</td>

                     <td class="time align-middle white-space-nowrap text-600 ps-4">{{ $coin->created_at }}</td>
                      <td class="align-middle white-space-nowrap text-end pe-0 ps-4 btn-reveal-trigger">
                        <div class="font-sans-serif btn-reveal-trigger position-static"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs--2" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs--2"></span></button>
                          <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="{{ route('admin.coins.show', $coin->id ) }}">View</a><a class="dropdown-item" href="{{ route('admin.coins.edit', $coin->id  ) }}">EDIT</a>
                            <div class="dropdown-divider"></div>
                            <form action="{{ route('admin.coins.destroy', $coin->id) }}" method="post">
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
                  <p class="mb-0 d-none d-sm-block me-3 fw-semi-bold text-900" data-list-info="data-list-info"></p><a class="fw-semi-bold" href="products.html#!" data-list-view="*">View all<span class="fas fa-angle-right ms-1" data-fa-transform="down-1"></span></a><a class="fw-semi-bold d-none" href="products.html#!" data-list-view="less">View Less<span class="fas fa-angle-right ms-1" data-fa-transform="down-1"></span></a>
                </div>
                <div class="col-auto d-flex"><button class="page-link" data-list-pagination="prev"><span class="fas fa-chevron-left"></span></button>
                  <ul class="mb-0 pagination"></ul><button class="page-link pe-0" data-list-pagination="next"><span class="fas fa-chevron-right"></span></button>
                </div>
              </div>
            </div>
          </div>
        </div>
{{--         <footer class="footer position-absolute">
          <div class="row g-0 justify-content-between align-items-center h-100">
            <div class="col-12 col-sm-auto text-center">
              <p class="mb-0 mt-2 mt-sm-0 text-900">Thank you for creating with Phoenix<span class="d-none d-sm-inline-block"></span><span class="d-none d-sm-inline-block mx-1">|</span><br class="d-sm-none" />2023 &copy;<a class="mx-1" href="https://themewagon.com">Themewagon</a></p>
            </div>
            <div class="col-12 col-sm-auto text-center">
              <p class="mb-0 text-600">v1.13.0</p>
            </div>
          </div>
        </footer> --}}
      </div>
  </x-guest-layout>
{{-- <div class="card-minimalista">
    <div class="card-header">
        <h3 class="card-title">Coins</h3>
    </div>
    <div class="card-body">
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Symbol</th>
                    <th>Exchange Rate</th>
                    <th>Created At</th>
                    <th>Updated At</th>
                  <th>Actions</th> 
                </tr>
            </thead>
            <tbody>
                @foreach ($coins as $coin)
                    <tr>
                        <td>{{ $coin->id }}</td>
                        <td>{{ $coin->name }}</td>
                        <td>{{ $coin->symbol }}</td>
                        <td>{{ $coin->exchange_rate }}</td>
                        <td>{{ $coin->created_at }}</td>
                        <td>{{ $coin->updated_at }}</td>
                      <td>
                            <a href="{{ route('coins.edit', $coin->id) }}" class="btn btn-primary btn-sm">Edit</a>
                            <form action="{{ route('coins.destroy', $coin->id) }}" method="POST" style="display: inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        </td> 
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div> --}}

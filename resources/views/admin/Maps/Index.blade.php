<x-guest-layout>
    <div class="content">
        <nav class="mb-2" aria-label="breadcrumb">
          <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="products.html#!">admin</a></li>
            <li class="breadcrumb-item"><a href="products.html#!">Maps</a></li>
            <li class="breadcrumb-item active">Maps</li>
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
              <h2 class="mb-0">Lista de Maps</h2>
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
                <div class="ms-xxl-auto"><button class="btn btn-link text-900 me-4 px-0"><span class="fa-solid fa-file-export fs--1 me-2"></span>Export</button><a href="{{ route('admin.coins.create', $coin->id ) }}" class="btn btn-primary" id="addBtn"><span class="fas fa-plus me-2"></span>Add Coins</a></div>
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
                      <th class="sort white-space-nowrap align-middle fs--2" scope="col" style="width:70px;">Images</th>
                      <th class="sort white-space-nowrap align-middle ps-4" scope="col" style="width:350px;" data-sort="product">Blogs</th>
                      <th class="sort align-middle text-end ps-4" scope="col" data-sort="price" style="width:150px;">Body</th>
                      <th class="sort align-middle ps-4" scope="col" data-sort="category" style="width:150px;">Hora creada</th>
                      <th class="sort text-end align-middle pe-0 ps-4" scope="col">Action</th>
                    </tr>
                  </thead>
                  <tbody class="list" id="products-table-body">
  {{--                   @foreach ($blogs as $blog)
                    <tr class="position-static">
                      <td class="fs--1 align-middle">
                        <div class="form-check mb-0 fs-0"><input class="form-check-input" type="checkbox" data-bulk-select-row='{"product":"Fitbit Sense Advanced Smartwatch with Tools for Heart Health, Stress Management & Skin Temperature Trends, Carbon/Graphite, One Size (S & L Bands...","productImage":"/products/1.png","price":"$39","category":"Plants","tags":["Health","Exercise","Discipline","Lifestyle","Fitness"],"star":false,"vendor":"Blue Olive Plant sellers. Inc","publishedOn":"Nov 12, 10:45 PM"}' /></div>
                      </td>
                      <td class="align-middle white-space-nowrap py-0">
                        <a class="d-block border rounded-5" href="{{ route('admin.profile.show', $blog->user_id ) }} ">
                            <img class="rounded-circle"  src="{{ $blog->user->profile_photo_url }}" alt="" width="53" />
                        </a>
                    </td>
                      <td class="product align-middle ps-4"><a class="fw-semi-bold line-clamp-3 mb-0" href="{{ route('admin.blogs.show', $blog->id ) }}"> {{$blog->title }} </a></td>
                      <td class="price align-middle white-space-nowrap text-end fw-bold text-700 ps-4">{{$blog->body }}</td>
                      <td class="category align-middle white-space-nowrap text-600 fs--1 ps-4 fw-semi-bold">{{$blog->created_at->diffForHumans() }}</td>
  
                    </tr>
                @endforeach --}}
   
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
      </div>
  </x-guest-layout>
  
  
  
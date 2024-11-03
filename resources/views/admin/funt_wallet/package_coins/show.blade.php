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
              <h2 class="mb-0">Show de coin</h2>
            </div>
          </div>
          <ul class="nav nav-links mb-3 mb-lg-2 mx-n3">
            <li class="nav-item"><a class="nav-link active" aria-current="page" href="products.html#"><span>All </span><span class="text-700 fw-semi-bold">(68817)</span></a></li>
            <li class="nav-item"><a class="nav-link" href="products.html#"><span>Published </span><span class="text-700 fw-semi-bold">(70348)</span></a></li>
            <li class="nav-item"><a class="nav-link" href="products.html#"><span>Drafts </span><span class="text-700 fw-semi-bold">(17)</span></a></li>
            <li class="nav-item"><a class="nav-link" href="products.html#"><span>On discount </span><span class="text-700 fw-semi-bold">(810)</span></a></li>
          </ul>

            
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
                    <div class="col-auto"><a href="tel:+1234567890">+1234567890</a></div>
                  </div>
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


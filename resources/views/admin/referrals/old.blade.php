@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>REFERIDOS OK</h1>
@stop

@section('content')


<div class="card-minimalista p-2">
    <div class="card-header">Referral Link</div>
    <div class="card-body">
        <p>Use the following link to refer new users:</p>
        <input type="text" class="form-control" value="{{ $referralLink }}" readonly>
    </div>
</div>

<div class="card-minimalista">
    <div class="card-body">
        <div class="table-responsive">
            <table id='myTable' class="table table-bordered ">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Usuario ID</th>
                            <th>Código de referencia</th>
                            <th>Usuario referido</th>
                            <th>referrinf</th>
                            <th>Puntos</th>
                            <th>Estado</th>
                            <th>Fecha de registro</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($referrals as $referral)
                        <tr>
                            <td>{{ $referral->id }}</td>
                            <td>{{ $referral->user_id }}</td>
                            <td>{{ $referral->referral_code }}</td>
                            <td>{{ $referral->referredUser->id ?? null }}</td>
                            <td>{{ $referral->referring_user_id ?? null }}</td>
                            <td>{{ $referral->points }}</td>
                            <td>{{ $referral->status }}</td>
                            <td>{{ $referral->created_at->diffForHumans() }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                
        </div>
    </div>
</div>

@stop

@section('css')
{{-- <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css"> --}}


    <!-- table css -->
<link rel="stylesheet" href="{{ asset('css/table.css') }}">
<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="/css/admin_custom.css"> 
@stop

@section('js')

    <script> console.log('Hi!'); </script>
   {{--  <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script> --}}
  
   <script src="https://code.jquery.com/jquery-3.5.1.js"></script> 
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap4.min.js"></script>

    <script>


    $('#myTable').DataTable({
        responsive: true,
        autoWitdth: false
    });

        </script>
@stop




<x-guest-layout>
    <!-- ============================================-->
    <!-- <section> begin ============================-->
      <div class="content">
      <section class="pt-5 pb-9">
          <div class="container-small">
            <nav class="mb-2" aria-label="breadcrumb">
              <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a href="{{ route('admin.profile.index') }}">Page 1</a></li>
                <li class="breadcrumb-item"><a href="{{ route('admin.profile.index') }}">admin</a></li>
                <li class="breadcrumb-item active" aria-current="page">Referidos</li>
              </ol>
            </nav>
            <div class="row align-items-center justify-content-between g-3 mb-4">
              <div class="col-auto">
                <h2 class="mb-0">Referidos</h2>
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
                          {{-- links de redes --}}
                          <div><a class="me-2" href="{{ route('admin.profile.index') }}">
                            <span class="fab fa-linkedin-in text-400 hover-primary"></span></a><a class="me-2" href="profile.html#!">
                              <span class="fab fa-facebook text-400 hover-primary"></span></a><a href="profile.html#!">
                                <span class="fab fa-twitter text-400 hover-primary"></span>
                              </a></div>
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
  
                    <h2 class="p-2 -m-2 text-center">Link de Referidos:</h2>
                        <div class="row list" id="icon-list">
                      
                          <div class="col-lg-12 "><span class="icon-list-item d-none">{{ $referralLink }}</span>
                            <div class="border border-300 rounded-2 p-3 mb-4 text-center bg-white dark__bg-1000 shadow-sm"><span class="text-900 fs-3 fas fa-share"></span><input class="form-control form-control-sm mt-3 text-center w-100 text-dark bg-200 dark__bg-1100 border-300" type="text" readonly="readonly" value="{{ $referralLink }}" /></div>
                          </div>
            
               
                        </div>
  
  
                  </div>
                </div>
              </div>
            </div>
            <div class="pb-6">
  
              <h2 class="text-bold text-1100 mb-5">Usuarios Referidos</h2>
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
                          <th class="sort align-middle" scope="col" data-sort="Código" style="width:15%; min-width:200px;">Código</th>
                          <th class="sort align-middle pe-3" scope="col" data-sort="referido" style="width:20%; min-width:200px;">  referido</th>
                          <th class="sort align-middle" scope="col" data-sort="referrinf" style="width:10%;">referrinf</th>
                          <th class="sort align-middle text-end" scope="col" data-sort="Puntos" style="width:21%;  min-width:200px;">Puntos</th>
                         <th class="sort align-middle text-end pe-0" scope="col" data-sort="Estado" style="width:19%;  min-width:200px;">Estado</th> 
                          <th class="sort align-middle text-end pe-0" scope="col" data-sort="Fecha" style="width:19%;  min-width:200px;">Fecha de registro</th>
                          <th class="sort align-middle text-end pe-0" scope="col" data-sort="Actions" style="width:19%;  min-width:200px;">Actions</th>
                        </tr>
                        
                      
                        
                        
                        
                      </thead>
                      <tbody class="list" id="members-table-body">
                        @foreach ($referrals as $referral)
  
                        <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                          <td class="fs--1 align-middle ps-0 py-3">
                            <div class="form-check mb-0 fs-0"><input class="form-check-input" type="checkbox" data-bulk-select-row='{"customer":{"avatar":"/team/32.webp","name":"Carry Anna"},"email":"annac34@gmail.com","mobile":"+912346578","city":"Budapest","lastActive":"34 min ago","joined":"Dec 12, 12:56 PM"}' /></div>
                          </td>
                          <td class="customer align-middle white-space-nowrap"><a class="d-flex align-items-center text-900 text-hover-1000" href="members.html#!">
                          <div class="avatar avatar-m">
                              <img class="rounded-circle" src="{{ $referral->user->profile_photo_url }}" alt="{{ $referral->user->name }}" />
                          </div>
                           <h6 class="mb-0 ms-3 fw-semi-bold"> {{ $referral->user->name }}</h6>
                            </a>
                          </td>
                          <td class="email align-middle white-space-nowrap"><a class="fw-semi-bold" href="referral_code">{{ $referral->referral_code }}</a></td>
                          <td class="mobile_number align-middle white-space-nowrap"><a class="fw-bold text-1100" href="referredUser">{{ $referral->referredUser->id ?? null }}</a></td>
                          <td class="email align-middle white-space-nowrap"><a class="fw-semi-bold" href="amount">{{ $referral->referring_user_id ?? null }}</a></td>
                          <td class="mobile_number align-middle white-space-nowrap"><a class="fw-bold text-1100" href="type">{{ $referral->points }}</a></td>
                          <td class="email align-middle white-space-nowrap"><a class="fw-semi-bold" href="price">{{ $referral->status }}</a></td>
                          <td class="email align-middle white-space-nowrap"><a class="fw-semi-bold" href="price">{{ $referral->created_at->diffForHumans() }}</a></td>
                          <td class="align-middle white-space-nowrap text-end pe-0 ps-4 btn-reveal-trigger">
                            <div class="font-sans-serif btn-reveal-trigger position-static"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs--2" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs--2"></span></button>
                              <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="{{ route('admin.referrals.show', $referral->id ) }}">View</a><a class="dropdown-item" href="{{ route('admin.referrals.edit', $referral->id  ) }}">EDIT</a>
                                <div class="dropdown-divider"></div>
                             <form action="{{ route('admin.referrals.destroy', $referral->id) }}" method="post">
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
    
    
          </div><!-- end of .container-->
        </section><!-- <section> close ============================-->
        <!-- ============================================-->
  
      </main><!-- ===============================================-->
      <!--    End of Main Content-->
      <!-- ===============================================-->
  </div>
  </x-guest-layout>
  
  
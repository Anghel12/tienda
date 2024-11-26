<div>
  {{-- div padre --}}


  <div class="container">
    <div class="row">

      {{-- User Main --}}
      <div class="card col-12 col-md-6 mx-auto mb-2">
        <div class="row py-lg-5 py-3">
          <div class="col-lg-3 col-md-5 position-relative">
            <img class="img rounded-circle max-width-200 w-100 position-relative z-index-2"
            src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" alt="bruce">
            <a href="{{ route('admin.profile.edit', Auth::user()->id ) }}" type="button" class="btn btn-sm btn-outline-dark">Edit</a>
          </div>
          
          <div class="col-lg-7 col-md-7 z-index-2 position-relative px-md-2 px-sm-5 mt-sm-0 mt-4">
            <div class="d-flex justify-content-between align-items-center mb-2">
              <h4 class="mb-0">{{ Auth::user()->name }}
                </h4>
                @if (Auth::user()->hasRole('Admin'))
                <span class="badge rounded-pill badge-primary">Admin</span>
                @else

                <span class="badge rounded-pill badge-info">User</span>

                  @endif
              <div class="d-block">
                <button type="button" class="btn btn-sm btn-outline-info text-nowrap mb-0">Follow</button>
         
              </div>
              
            </div>
            <div class="row mb-4">
              <div class="col-auto">
                <span class="h6">323</span>
                <span>Posts</span>
              </div>
              <div class="col-auto">
                <span class="h6">3.5k</span>
                <span>Followers</span>
              </div>
              <div class="col-auto">
                <span class="h6">260</span>
                <span>Following</span>
              </div>
            </div>
            <p class="text-lg mb-5">
            Decisions: If you can’t  <br><a href="javascript:;" class="text-info icon-move-right">More about me
                <i class="fas fa-arrow-right text-sm ms-1"></i>
              </a>
            </p>

            <h4>Codigo de referido:</h4>

           <input class="form-control form-control-sm mt-3 text-center w-100 text-dark bg-200 border-300" type="text" readonly="readonly" value="{{ $referralLink }}" />
            <p>Usuarios Referidos: 0</p> <a class="btn btn-info" href="{{route('admin.referrals.index')}}">Referidos lista</a>
         
          </div>
    
        </div>

      </div>
   
    {{-- Accciones icons --}}
    <div class="col-12 col-md-3 d-flex flex-column">
      <div class="card-footer pb-3 pt-2 z-index-3">


        @if (isset($userBalance))
        <h4 class="text-white mb-1">BALANCE:</h4>
        <h1 class="text-white font-weight-bolder text-uppercase">$.{{ $userBalance }}</h1>

        @else
        <h4 class="text-white mb-1">BALANCE:</h4>
        <h1 class="text-white font-weight-bolder text-uppercase">$.10</h1>
       @endif

    
      </div>
      </div>


    </div>
</div>









</div>


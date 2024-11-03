<x-app-layout>

</x-app-layout>
  <!-- -------- START HEADER 9 w/ floating img and bg  ------- -->


{{--   @include('user_actions.buy_coins.partials.header') --}}
<!-- START Pricing w/ 2 cards & nav tabs -->
<section class="py-2 bg-light">
  <div class="container pt-8">
    <div class="row">
      <div class="col-lg-4 col-md-10 d-flex justify-content-center flex-column">
        <h3 class="mt-3">Invita A Tus Amigos</h3>
          <p class="lead">y obtendras mas monedas por cada usuario registrado y se activara la Black Card</p>
          <div class="nav-wrapper me-auto mt-4 mb-5 mb-lg-0">


            <div class="card-footer bg-transparent position-relative">
              <a href="{{route('admin.referrals.index')}}" class="btn btn-primary">Codigo de Referidos</a>

              <a href="{{route('admin.profile.show',  Auth::user()->id )}}" class="btn btn-primary">Ver Perfil</a>
            </div>
          </div>
      </div>

      @include('user_actions.wallets.partials.user_wallet')

    </div>
  </div>
</section>
<!-- END Pricing w/ 2 cards & nav tabs -->

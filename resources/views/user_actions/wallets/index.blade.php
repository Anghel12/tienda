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
            <ul class="nav nav-pills nav-fill p-1" id="tabs-pricing" role="tablist">
              <li class="nav-item">
                <a class="nav-link mb-sm-3 mb-md-0 active" id="tabs-iconpricing-tab-1" data-bs-toggle="tab" href="#personal" role="tab" aria-controls="tabs-pricing-tab-1" aria-selected="true">
                  Freelancer
                </a>
              </li>
            </ul>
          </div>
      </div>

      @include('user_actions.wallets.partials.userWallet')

    </div>
  </div>
</section>
<!-- END Pricing w/ 2 cards & nav tabs -->

<x-app-layout>

</x-app-layout>
  <!-- -------- START HEADER 9 w/ floating img and bg  ------- -->

  <img class="background-image" src="https://demos.creative-tim.com/soft-ui-design-system-pro/assets/img/curved-images/curved14.jpg" alt="Fondo">

{{--   @include('user_actions.buy_coins.partials.header') --}}

<!-- -------- START CONTENT 11 w/ title and 4 images ------- -->
<section class="py-8">
    <div class="container">
      <div class="row">
        <div class="col-md-6 mx-auto mb-8">
      {{--     <span class="badge rounded-pill badge-info mb-2">Living</span>
          <h2>A new way to buy your next home</h2>
          <p>
            If you can’t decide, the answer is no. If two equally difficult paths,
            choose the one more painful in the short term (pain avoidance
            is creating an illusion of equality).
          </p> --}}


          <ul class="list-group">
            <h4 class="list-group-item text-center">Confirmar La Transferencia  de {{ $amount }} Coins a:</h4>
            <li class="list-group-item"><p>Nombre Del Destinatario: <strong>{{ $recipient->name }}</strong> </p></li>
            <li class="list-group-item"><p>Email Del Destinatario: <strong>{{ $recipient->email }}</strong></p></li>
            <li class="list-group-item"><p>Cantidad A Transferir: <strong>{{ $amount }} {{ $coin->name }}</strong> </p></li>
            <li class="list-group-item">
                  
          <form action="{{ route('user_actions.transfer.complete') }}" method="POST">
            @csrf
            <input type="hidden" name="recipient_id" value="{{ $recipient->id }}">
            <input type="hidden" name="amount" value="{{ $amount }}">

            <div>

                <textarea class="form-control" placeholder="Descripción (opcional)*" name="description" rows="3"></textarea>
            </div>


            <button class="btn bg-gradient-primary pull-end mt-2" type="submit">Transferir</button> 
        </form>
            </li>
           
          </ul>
        </div>
      </div>

    </div>
  </section>
  <!-- -------- END CONTENT 11 w/ title and 4 images ------- -->

<!-- END Pricing w/ 2 cards & nav tabs -->
  <style>

    .background-image {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
        z-index: -1;
    }
    .form-container {
        background-color: rgba(255, 255, 255, 0.8); /* Fondo blanco semi-transparente */
        border-radius: 15px;
        padding: 20px;
    }
</style>
<x-app-layout>

</x-app-layout>

  <img class="background-image"
  src="https://img.freepik.com/fotos-premium/fondo-azul-fondo-azul_608068-13038.jpg" alt="Fondo">

  <div class="container ">
    <div class="row justify-content-center align-items-center" style="height: 100%; padding-top: 5rem;">

        <!-- Texto a la izquierda (12 columnas en móviles, 7 columnas en pantallas grandes) -->
        <div
            class="col-lg-12 col-12 text-center d-flex flex-column justify-content-center align-items-center mb-3 mb-lg-0">
            <h1 class="text-white pt-3 mt-n5">Confirmar La Transferencia </h1>
            <p class="lead text-white mt-3">
             Estas Enviando $/{{ $amount }}
            </p>
        </div>

        <div class="col-lg-6 col-12">

        <div class="card p-2">
          <ul class="list-group">

            <li class="list-group-item"><p>Nombre Del Destinatario: <strong>{{ $recipient->name }}</strong> </p></li>
            <li class="list-group-item"><p>Email Del Destinatario: <strong>{{ $recipient->email }}</strong></p></li>
            <li class="list-group-item"><p class="">Cantidad A Transferir: <strong>S/{{ $amount }}</strong> </p></li>
            <li class="list-group-item">
                  
          <form action="{{ route('user_actions.transfer.complete') }}" method="POST">
            @csrf
            <input type="hidden" name="recipient_id" value="{{ $recipient->id }}">
            <input type="hidden" name="amount" value="{{ $amount }}">

            <div>

                <textarea class="form-control" placeholder="Descripción (opcional)*" name="description" rows="3"></textarea>
            </div>


            <button class="btn bg-primary pull-end mt-2" type="submit">Transferir</button> 
        </form>
            </li>
           
          </ul>

        </div>
        </div>

    </div>
</div>



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
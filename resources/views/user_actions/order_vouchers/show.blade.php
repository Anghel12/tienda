<x-app-layout>

</x-app-layout>
  <!-- -------- START HEADER 9 w/ floating img and bg  ------- -->
  <img class="background-image"
  src="https://img.freepik.com/fotos-premium/fondo-azul-fondo-azul_608068-13038.jpg" alt="Fondo">

<section class="py-2">
  <div class="container pt-8">
    <div class="row justify-content-center align-items-center"style="height: 100%; padding-top: 2rem;">
      <div class="col-lg-12 col-md-10 ">

 
        <div class="card p-2">
            <h3>Detalles de la Orden de Voucher #{{ $order->id }}</h3>
            <div class="card-body">
                <p><strong>Usuario:</strong> {{ $order->name }}</p>
                <p><strong>Email:</strong> {{ $order->email }}</p>
                <p><strong>Cantidad:</strong> $/{{ $order->amount }}</p>
                <p><strong>Método de Pago:</strong> {{ $order->payment_method }}</p>
                <p><strong>Estado:</strong> {{ $order->status }}</p>
                <p><strong>Fecha de Creación:</strong> {{ $order->created_at->format('d/m/Y H:i') }}</p>

                <div class="form-group ">
                    <label>Imágenes actuales:</label>
                    <div class="card col-1">
                        @if($order->images)
                        {{--     @foreach($order->images as $image) --}}
                                <img style="height: 80px" class="image-fluid" src="{{ asset('storage/' . $order->images->url)}}" alt="{{ asset('storage/' . $order->name) }}">

                                <img style="height: 40px" class="w-10 h-10 rounded-full mr-4" src="{{ Storage::url($order->images->url) }}" alt="Imagen actual">
                          {{--   @endforeach --}}
                        @else
                            Subir Imagen
                         
                        @endif
                    </div>
                    
                </div>
                <a class="btn btn-secondary mt-3 col-2" href="{{ route('user_actions.order_vouchers.edit', $order->id) }}" >Editar mi orden</a>
     
            </div>
        </div>

        <a href="{{ route('user_actions.order_vouchers.index') }}" class="btn btn-info mt-3">Ver tu lista de ordenes</a>



      </div>
    </div>
  </div>
</section>
<style>
    .background-image {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
        z-index: -1;
    }

    .form-container {
        background-color: rgba(255, 255, 255, 0.8);
        /* Fondo blanco semi-transparente */
        border-radius: 15px;
        padding: 20px;
    }
</style>
<!-- END Pricing w/ 2 cards & nav tabs -->

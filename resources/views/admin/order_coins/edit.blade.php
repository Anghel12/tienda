<x-app-layout>

</x-app-layout>
  <!-- -------- START HEADER 9 w/ floating img and bg  ------- -->
  <img class="background-image"
  src="https://img.freepik.com/fotos-premium/fondo-azul-fondo-azul_608068-13038.jpg" alt="Fondo">

<section class="py-2">
  <div class="container pt-8">
    <div  class="row justify-content-center align-items-center" style="height: 100vh; padding-top: 7rem;">
      <div class="col-lg-12 col-md-10">
            <div class="card p-2">
                <h3> (Admin) Editar Orden de Voucher</h3>
                <a href="{{route('admin.users.show', $user->id) }}">Ver Perdil del Usuario {{ $user->name }}</a>


              

                <form action="{{ route('admin.order_coins.update', $orderCoin->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label>Nombre:</label>
                        <input type="text" name="name" class="form-control" value="{{ $orderCoin->name }}" required>
                    </div>
                    <div class="form-group">
                        <label>Email:</label>
                        <input type="email" name="email" class="form-control" value="{{ $orderCoin->email }}" required>
                    </div>
                    <div class="form-group">
                        <label>Cantidad:</label>
                        <input type="number" name="amount" class="form-control" value="{{ $orderCoin->amount }}" required>
                    </div>

                    <div class="form-group">
                        <label>Methodo de Pago:</label>
                    {{-- poner en autentficador en php  --}}

                    <select name="payment_method" id="payment_method" class="form-control">
                        <option value="{{ $orderCoin->payment_method }}">{{ $orderCoin->payment_method }}</option>
                        <option value="1">USD</option>
                        <option value="1">SOL</option>
                        <option value="1">USDT</option>
                        <!-- Agrega más opciones según los métodos de pago habilitados en tu cuenta de Stripe -->
                    </select>

                 
                    </div>

                    <div class="form-group">
                        <label>Status:</label>

                        <select name="status" id="status" class="form-control">
                            <option value="pending">pending</option>
                            <option value="complete">Completado</option>
                            <option value="Denegado">Denegado</option>
                            <option value="Reenviar">Reenviar</option>
                            <!-- Agrega más opciones según los métodos de pago habilitados en tu cuenta de Stripe -->
                        </select>
    
                    </div>
                 
                <div class="form-group">
                    <label>Imágenes actuales:</label>
                    <div class="card">
                        @if($orderCoin->images)
                        {{--     @foreach($order->images as $image) --}}
                                <img class="w-10 h-10 rounded-full mr-4" src="{{ Storage::url($orderCoin->images->url) }}" alt="Imagen actual">
                          {{--   @endforeach --}}
                        @else
                            No se encontraron imágenes. Puedes subir imágenes nuevas si es necesario.
                        @endif
                    </div>
                </div>


                <div class="form-group">
                    <label>Subir nuevas imágenes:</label>
                    <input type="file" name="voucher_images[]" class="form-control" multiple accept="image/*">
                    <small class="form-text text-muted">Puedes subir una o varias imágenes.</small>
                </div>
             
  
                    <button type="submit" class="btn btn-success">Actualizar</button>
                </form>
            </div>

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


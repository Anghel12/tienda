<x-app-layout>

</x-app-layout>
  <!-- -------- START HEADER 9 w/ floating img and bg  ------- -->
  <img class="background-image"
  src="https://img.freepik.com/fotos-premium/fondo-azul-fondo-azul_608068-13038.jpg" alt="Fondo">

<section class="py-2">
  <div class="container pt-8">
    <div class="row">
      <div class="col-lg-12 col-md-10 d-flex justify-content-center flex-column">
            <div class="card p-2">
                <h1>Editar Orden de Voucher</h1>

                <form action="{{ route('user_actions.order_vouchers.update', $order->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label>Nombre:</label>
                        <input type="text" name="name" class="form-control" value="{{ $order->name }}" required>
                    </div>
                    <div class="form-group">
                        <label>Email:</label>
                        <input type="email" name="email" class="form-control" value="{{ $order->email }}" required>
                    </div>
                    <div class="form-group">
                        <label>Cantidad:</label>
                        <input type="number" name="amount" class="form-control" value="{{ $order->amount }}" required>
                    </div>
                 
                <div class="form-group">
                    <label>Imágenes actuales:</label>
                    <div class="card">
                        @if($order->images)
                        {{--     @foreach($order->images as $image) --}}
                                <img class="w-10 h-10 rounded-full mr-4" src="{{ Storage::url($order->images->url) }}" alt="Imagen actual">
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
                
                    {{-- poner en autentficador en php  --}}
                    <input type="hidden" name="payment_method" class="form-control" value="{{ $order->payment_method }}" required>
                        <input type="hidden" name="status" class="form-control" value="{{ $order->status }}" required>
  
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


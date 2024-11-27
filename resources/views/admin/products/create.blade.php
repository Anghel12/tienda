<x-app-layout>

</x-app-layout>


<img class="background-image"
  src="https://img.freepik.com/fotos-premium/fondo-azul-fondo-azul_608068-13038.jpg" alt="Fondo">

{{-- FORMULARIO DE COMPRA --}}

<div class="container ">
  <div class="row justify-content-center align-items-center" style="height: 100vh; padding-top: 7rem;">


    <section class="py-5">
      <div class="container">
  
      <div class="row">

        <div class="col-lg-12 col-md-10 d-flex justify-content-center flex-column">
          <div class="card bg-mod-black p-4">
              <h3 class="text-white"> (Admin) Crear Producto De La Tienda  <a class="btn btn-info" href="{{ route('admin.products.index') }}">Lista de productos</a> </h3>
     
              <form action="{{ route('admin.products.store') }}" method="POST" enctype="multipart/form-data">
                  @csrf
             
             
                  <div class="form-group">
                    <label class="text-white">Nombre:</label>
                    <input type="text" name="name" class="form-control" value="{{ $product->name ?? '' }}" required>
                </div>
                
                <div class="form-group">
                
                  <label class="text-white">URL del Video (YouTube):</label>
                  <input type="text" name="link_youtube" class="form-control" 
                         value="">
                </div>
                
                <div class="form-group">
                  <label class="text-white">URL de la Imagen:</label>
                  <input type="text" name="link_image" class="form-control" 
                         value="">
                </div>
                
                
                <div class="form-group">
                    <label class="text-white">Informacion importante :</label>
                    <textarea name="body" class="form-control text-black">{{ $product->body ?? ''}}</textarea>
                </div>
                
                <div class="form-group">
                    <label class="text-white">Extra de info del Producto:</label>
                    <textarea name="extract" id="extract" class="form-control text-black">{{ $product->extract  ?? '' }}</textarea>
                </div>
                
                <div class="row">
                
                <div class="form-group col-3">
                    <label class="text-white">Precio del Producto:</label>
                    <input type="number" name="price" class="form-control" value="{{ $product->price ?? '' }}">
                </div>
                
                <div class="form-group col-3">
                    <label class="text-white">Categoría:</label>
                    <select name="category_id" class="form-control">
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">
                                {{ $category->name }}
                            </option>
                        @endforeach
                    </select>
                </div>
                
                
                <div class="form-group col-3">
                    <label class="text-white">Cantidad del Producto:</label>
                    <input type="number" name="stock" class="form-control" value="{{ $product->stock ?? '' }}">
                </div>
                
                <div class="form-group col-3">
                    <label class="text-white">Status:</label>
                    <select name="status" class="form-control">
                        <option value="1">1</option>
                        <option value="2">2</option>
                    </select>
                </div>
                </div>


                  <button type="submit" class="btn btn-primary col-12">Crear Producto</button>
              </form>
          </div>

    </div>



      </div>
      </div>
      </section>


  </div>
</div>


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
      background-color: rgba(255, 255, 255, 0.8);
      /* Fondo blanco semi-transparente */
      border-radius: 15px;
      padding: 20px;
  }
  /* modo oscuro tienda */

  .bg-mod-black {
    background-color: #0f111a;
    color: rgb(255, 255, 255);
  }

  .minimalista-card {
    border: 2px solid #161a2b; /* Borde de 1px con el color de fondo anterior */
    color: rgb(255, 255, 255);
    border-radius: 10px; /* Bordes redondeados para un toque moderno */
    padding: 5px; /* Espaciado interno */
    transition: box-shadow 0.3s ease; /* Transición suave */
    
  }
  .minimalista-card:hover {
  box-shadow: 4px 4px 4px rgba(42, 18, 255, 0.158); /* Sombra blanca más intensa en hover */
  
}
</style>



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
          <div class="card p-2">
              <h3> (Admin) Crear Producto De La Tienda</h3>
     
              <form action="{{ route('admin.products.store') }}" method="POST" enctype="multipart/form-data">
                  @csrf
             
             
                  <div class="form-group">
                    <label>Nombre:</label>
                    <input type="text" name="name" class="form-control" required>
                </div>
                
                <div class="form-group">
                  <label>URL del Video (YouTube):</label>
                  <input type="text" name="link_youtube" class="form-control" 
                         value="">
                </div>
                
                <div class="form-group">
                  <label>URL de la Imagen:</label>
                  <input type="text" name="link_image" class="form-control" 
                         value="">
                </div>
                
                
                <div class="form-group">
                    <label>Informacion importante :</label>
                    <textarea name="body" class="form-control"></textarea>
                </div>
                
                <div class="form-group">
                    <label>Extra de info del Producto:</label>
                    <input type="text" name="extract" class="form-control" value="">
                </div>
                
                <div class="form-group">
                    <label>Precio del Producto:</label>
                    <input type="number" name="price" class="form-control" value="">
                </div>
                
                <div class="form-group">
                    <label>Cantidad del Producto:</label>
                    <input type="number" name="stock" class="form-control" value="">
                </div>

               
                <div class="form-group">
                  <label>Marca del Producto:</label>
                  <select name="brand_id" class="form-control">
                    @foreach ($brand as $brands)
                    <option value="{{ $brands->id }}">{{ $brands->title }}</option>
                    @endforeach
                     
                      <!-- Agrega aquí más opciones de categorías si es necesario -->
                  </select>
              </div>

                <div class="form-group">
                    <label>Categoría:</label>
                    <select name="category_id" class="form-control">
                      @foreach ($categories as $category)
                      <option value="{{ $category->id }}">{{ $category->name }}</option>
                      @endforeach
                       
                        <!-- Agrega aquí más opciones de categorías si es necesario -->
                    </select>
                </div>
                
                <div class="form-group">
                    <label>Status:</label>
                    <select name="status" class="form-control">
                        <option value="1">1</option>
                        <option value="2">2</option>
                    </select>
                </div>


                  <button type="submit" class="btn btn-success">Crear Producto</button>
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



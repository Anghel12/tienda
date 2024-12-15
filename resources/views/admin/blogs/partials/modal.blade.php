<div class="row col-lg-6 col-md-10 ">
    <div class="card bg-mod-black p-4">
      <h3 class="text-white">
        Url Agregar Imagenes o videos
      </h3>
<div class="row">
        <!-- Button trigger modal -->
    <button type="button" class="btn btn-danger col-3 m-4"  data-toggle="modal" data-target="#exampleModalYoutube">
        Agregar Video
    </button>
    
    <!-- Modal -->
    <div class="modal fade " id="exampleModalYoutube" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
        <div class="modal-content modal-dialog-centered">

            <div class="card-minimalista bg-dark p-4"  style="width: 850px" >
                    <!-- Mostrar las URLs actuales de las imágenes -->
                    <h2 class="mb-3">Url de videos</h2>
                    <div class="form-group">
                        <label class="text-white">URL del Video (YouTube):</label>
                       <textarea name="link_youtube" id="" class="form-control" rows="1">{{ $product->video->url ?? null }}</textarea>  
                      </div>
            </div>
        </div>
        </div>
    </div>


    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary col-3 m-4"  data-toggle="modal" data-target="#exampleModalimagenurl">
        Agregar Imagenes
    </button>
  
  <!-- Modal -->
  <div class="modal fade " id="exampleModalimagenurl" tabindex="-1" role="dialog" aria-labelledby="exampleModalimagenurlLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content modal-dialog-centered">

        <div class="card-minimalista bg-dark p-4"  style="width: 850px" >
                <!-- Mostrar las URLs actuales de las imágenes -->
                <h2 class="mb-3">Carrusel de Url Imagenes</h2>
       <!-- Lista de imágenes existentes -->
         {{--    @foreach ($product->images as $item)
            <div class="form-group mb-3">
                <label class="text-white">URL de la Imagen:</label>
                <textarea name="urls[]" class="form-control" rows="1">{{ $item->url }}</textarea>
                <div class="form-check">
                    <input type="radio" id="main_image_{{ $item->id }}" name="main_image_id" value="{{ $item->id }}" class="form-check-input" 
                        {{ $item->is_main ? 'checked' : '' }}>
                    <label for="main_image_{{ $item->id }}" class="form-check-label text-white">Imagen principal</label>
                </div>
            </div>
            @endforeach --}}

            <!-- Campo para agregar nueva imagen -->
            <div class="form-group mb-3">
            <label class="text-white">Nueva URL de Imagen:</label>
            <textarea name="urls[]" class="form-control" rows="1"></textarea>
            <div class="form-check">
                <input type="radio" id="new_main_image" name="main_image_id" value="new" class="form-check-input">
                <label for="new_main_image" class="form-check-label text-white">Imagen principal</label>
            </div>
            </div>


        </div>
      </div>
    </div>
  </div>
   <!-- Button trigger modal -->
   <button type="button" class="btn btn-info col-3 m-4"  data-toggle="modal" data-target="#exampleModalimagen">
    Imagenes Subir
</button>
    <!-- Modal -->
    <div class="modal fade " id="exampleModalimagen" tabindex="-1" role="dialog" aria-labelledby="exampleModalimagenLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content modal-dialog-centered">
    
            <div class="card-minimalista bg-dark p-4"  style="width: 850px" >
                    <!-- Mostrar las URLs actuales de las imágenes -->
                    <h2 class="mb-3">Carrusel de Imagenes</h2>
            <!-- Campo para subir nuevas imágenes -->
                    <div class="form-group">
                        <label class="text-white">Sube nuevas imágenes:</label>
                        <input type="file" name="images[]" class="form-control" multiple>
                    </div>
            </div>
          </div>
        </div>
      </div>
</div> 
 

      <h3 class="text-white">
       Lista de Imagenes   
     </h3>
       <div class="row">
   {{--      @foreach ($product->images as $item)
            <!-- Se ajusta la clase col-4 para mostrar 3 imágenes por fila -->
            <div class="col-4 mb-3"> <!-- col-4 para 3 imágenes por fila y mb-3 para margen inferior -->
                <div class="card-minimalista">
                    <img src="{{ $item->url ?? '' }}" alt="{{ $product->name ?? '' }}" class="card-img-top" style="height: 100px; object-fit: cover;">
                    <div class="card-body">

                        <button type="submit" class="btn btn-warning btn-sm">Editar</button>
                    </div>
                </div>
            </div>
        @endforeach --}}
    </div>
    
    </div>
  </div>
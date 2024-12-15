<div class="row col-lg-6 col-md-10 ">
    <div class="card bg-mod-black p-4">
      <h3 class="text-white">
        Url Agregar Imagenes o videos
      </h3>
<div class="row">
        <!-- Button trigger modal -->
    <button type="button" class="btn btn-danger col-3 m-4"  data-bs-toggle="modal" data-bs-target="#exampleModalYoutube">
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
    <button type="button" class="btn btn-primary col-3 m-4"  data-bs-toggle="modal" data-bs-target="#exampleModalimagenurl">
        Agregar Imagenes
    </button>
  
  <!-- Modal -->
  <div class="modal fade " id="exampleModalimagenurl" tabindex="-1" role="dialog" aria-labelledby="exampleModalimagenurlLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content modal-dialog-centered">

        <div class="card-minimalista bg-dark p-4"  style="width: 850px" >
                <!-- Mostrar las URLs actuales de las imágenes -->
                <h2 class="mb-3">Carrusel de Url Imagenes</h2>
                <div class="form-group mb-3">
                    <label class="text-white">URL de la Imagen:</label>
                    <textarea name="urls[]" class="form-control" rows="1">{{ $item->url ?? null }}</textarea>
                    <!-- Selector para definir si es la imagen principal -->
                    <div class="form-check">
                        <!-- Asociamos el texto con el radio button usando 'for' y 'id' -->
                        <input type="radio" id="main_image_1" name="main_image_id" value="1" class="form-check-input" checked>
                        <label for="main_image_1" class="form-check-label text-white">
                            Imagen principal
                        </label>
                    </div>
                </div>

                <div class="form-group mb-3">
                    <label class="text-white">URL de la Imagen:</label>
                    <textarea name="urls[]" class="form-control" rows="1">{{ $item->url ?? null }}</textarea>
                    <!-- Selector para definir si es la imagen principal -->
                    <div class="form-check">
                        <!-- Asociamos el texto con el radio button usando 'for' y 'id' -->
                        <input type="radio" id="main_image_2" name="main_image_id" value="2" class="form-check-input">
                        <label for="main_image_2" class="form-check-label text-white">
                            Imagen principal
                        </label>
                    </div>
                </div>

                <div class="form-group mb-3">
                    <label class="text-white">URL de la Imagen:</label>
                    <textarea name="urls[]" class="form-control" rows="1">{{ $item->url ?? null }}</textarea>
                    <!-- Selector para definir si es la imagen principal -->
                    <div class="form-check">
                        <!-- Asociamos el texto con el radio button usando 'for' y 'id' -->
                        <input type="radio" id="main_image_3" name="main_image_id" value="3" class="form-check-input">
                        <label for="main_image_3" class="form-check-label text-white">
                            Imagen principal
                        </label>
                    </div>
                </div>
        </div>
      </div>
    </div>
  </div>
   <!-- Button trigger modal -->
   <button type="button" class="btn btn-info col-3 m-4"  data-bs-toggle="modal" data-bs-target="#exampleModalimagen">
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
 
    </div>
  </div>
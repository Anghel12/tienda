<x-app-layout>

</x-app-layout>


<img class="background-image" src="https://img.freepik.com/fotos-premium/fondo-azul-fondo-azul_608068-13038.jpg"
  alt="Fondo">

{{-- FORMULARIO DE COMPRA --}}

<div class="container-fluid">
  <div class="row " style="height: 100vh; padding-top: 7rem;">
    <h2 class="text-white">Nombre: {{ $product->name }} id:{{ $product->id }}<a class="btn btn-info"
      href="{{ route('admin.products.index') }}">Lista de productos</a> </h2>
    <h5 class="text-white"> (Admin) Editar Producto De La Tienda </h5>
    <form action="{{ route('admin.products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
      @csrf
      @method('PUT')
      <section class="py-5">

        <div class="row">
          {{-- lado izqueirdo --}}

          <div class="row col-lg-6 col-md-10 ">
            <div class="card bg-mod-black p-4">
              <h3 class="text-white">
                Url Agregar Imagenes o videos
              </h3>
              <div class="form-group">
                <label class="text-white">URL del Video (YouTube):</label>
               <textarea name="link_youtube" id="" class="form-control" rows="1">{{ $linkYoutube ? $linkYoutube->url : '' }}</textarea>  
              </div>
              <button type="submit" class="btn btn-info col-3">Agregar Video</button>
              <div class="form-group">
                <label class="text-white">URL de la Imagen: </label>
                <textarea name="link_image" class="form-control" rows="1">{{ $linkImage ? $linkImage->url : '' }}</textarea>
              </div>
              <button type="submit" class="btn btn-info col-3">Agregar Imagen</button>

              <h3 class="text-white">
               Lista de Imagenes    </h3>
            <div class="row">  
              <div class="card-minimalista col-4">
                <img src="{{ $linkImage->url ?? '' }}" alt="{{ $product->name ?? '' }}"
                style="height: 150px; width: 200px ">
                <button type="submit" class="btn btn-info">Eliminar</button>
                <button type="submit" class="btn btn-info">Editar</button>
              </div>
            </div>
            </div>
          </div>


          
          <div class="col-lg-6 col-md-10">
            <div class="card bg-mod-black p-4">
         
              <a href="{{route('admin.profile.show', $product->user->id) }}">Creador: {{ $product->user->name }}</a>




              @include('admin.products.partials.form')



              <button type="submit" class="btn btn-success">Actualizar</button>

            </div>

          </div>

        </div>

      </section>

    </form>
  </div>
</div>
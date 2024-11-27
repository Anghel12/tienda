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
              <h6> (Admin) Editar Producto De La Tienda  <a class="btn btn-info" href="{{ route('admin.products.index') }}">Lista de productos</a></h6> 
              <h2 class="text-white">Nombre: {{ $product->name }} id:{{ $product->id }} </h2>
              <a href="{{route('admin.profile.show', $product->user->id) }}">Creador: {{ $product->user->name }}</a>

              <form action="{{ route('admin.products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
            
           
            @include('admin.products.partials.form')


                <button type="submit" class="btn btn-success">Actualizar</button>
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






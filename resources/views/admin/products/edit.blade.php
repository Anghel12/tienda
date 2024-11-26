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
              <h3> (Admin) Editar Producto De La Tienda</h3>
              <a href="{{route('admin.profile.show', $product->user->id) }}">Ver Perfil del Usuario {{ $product->user->name }}</a>

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






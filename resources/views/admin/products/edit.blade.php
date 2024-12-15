<x-app-layout>
{{-- FORMULARIO DE COMPRA --}}

<div class="container-fluid">
  <div class="row " style="height: 100vh; padding-top: 5rem;">
   <!-- Contenedor del texto -->
      <div class="col-md-9">
        <h2 class="text-white">
            Nombre: {{ $product->name ?? null }} id:{{ $product->id ?? null }}
            <a class="btn btn-info" href="{{ route('admin.products.index') }}">Lista de productos</a>
        </h2>
        <p class="text-white"> (Admin) Editar Producto De La Tienda </p>
    </div>

    <!-- Contenedor de la imagen -->
    <div class="col-md-3 text-end">
        <img src="{{ $product->mainImage->url ?? '' }}" alt="{{ $product->name ?? '' }}"
            style="height: 100px; width: 100%; object-fit: cover;">
    </div>

    <form action="{{ route('admin.products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
      @csrf
      @method('PUT')
      <section class="py-5">

        <div class="row">
          {{-- lado izqueirdo --}}
          @include('admin.products.partials.modal')
         
          <div class="col-lg-6 col-md-10">
            <div class="card bg-mod-black p-4">
         
              <a class="mb-3" href="{{route('admin.profile.show', $product->user->id) }}">Creador: {{ $product->user->name }}</a>
              {{-- formulario de creacion --}}
              @include('admin.products.partials.form')

              <button type="submit" class="btn btn-success">Actualizar</button>

            </div>

          </div>

        </div>

      </section>

    </form>
  </div>
</div>

</x-app-layout>
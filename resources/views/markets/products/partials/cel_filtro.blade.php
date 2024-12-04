      <!-- Navbar solo para móviles -->
      <nav class="navbar navbar-dark navbar-custom">
        <div class="container-fluid">
          <button class="btn btn-outline-dark" type="button" data-bs-toggle="modal" data-bs-target="#menuModal">
            <span class="ms-2 text-white">Categorias</span>
          </button>
          <button class="btn btn-outline-dark" type="button" data-bs-toggle="modal" data-bs-target="#menuModal">
            <span class="ms-2 text-white">Tags</span>
          </button>
        </div>
      </nav>
      
      <!-- Modal para el menú -->
      <div class="modal fade" id="menuModal" tabindex="-1" aria-labelledby="menuModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-fullscreen-sm-down">
          <div class="modal-content bg-mod-black">
            <div class="modal-header">
              <h5 class="modal-title" id="menuModalLabel">Categorias</h5>
              <button type="button" class="btn-close text-white" data-bs-dismiss="modal" aria-label="Cerrar">X</button>
            </div>
            <div class="modal-body text-center">
              @foreach ($filtro_categorias as $item)
              <a href="#" class="btn btn-outline-dark d-block text-white">{{ $item->name }}</a>
              @endforeach
            
            </div>
          </div>
        </div>
      </div>
      
      <style>
        /* Ocultar el navbar en pantallas grandes */
        .navbar-custom {
          display: none;
        }
      
        /* Mostrar el navbar solo en pantallas pequeñas */
        @media (max-width: 768px) {
          .navbar-custom {
            display: flex;
          }
      
          .nav-item .btn {
            border-radius: 50px;
            margin: 5px;
            width: 100%;
          }
        }
      </style>
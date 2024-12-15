<!-- Mostrar solo en pantallas pequeñas (móviles) -->
{{--   <div class="d-block d-md-none">
    @include('livewire.home.navigation.celular')
  </div> --}}
<div>
    <div id="navbar-large" class="navbar navbar-expand-lg navbar-dark px-3 fixed-top" style="display: none;">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('markets.products.index') }}">
                <i class="fas fa-store"></i> CyberEcotienda
            </a>
            
                @include('livewire.home.navigation.partials.user')
            
            <div class="d-flex align-items-center list-unstyled mx-2 text-center">
                @auth
                    @if($Admin)
                        <livewire:admin-icon-ninde />
                    @endif
                    <livewire:ninde-dots-icon />
                    <livewire:notifications-all-views />
                     <livewire:icon-profile />
                @endauth
                
                @include('livewire.home.navigation.partials.icon_admin')
            </div>
        </div>
    </div>
    
    <!-- Navbar para pantallas pequeñas -->
    <div id="navbar-small" class="navbar navbar-dark d-lg-none fixed-top" style="display: flex;">

        <div class="container-fluid justify-content-between">
        <!-- Icono de menú hamburguesa -->
              <!-- Iconos en versión compacta -->
              @include('livewire.home.navigation.partials.cel_rutas_mid')
                @auth
                @include('livewire.home.navigation.partials.cel_dropdawn')
                @endauth          
          
           
        </div>
    </div> 
 
</div>

<script>
document.addEventListener('DOMContentLoaded', function () {
    function toggleNavbar() {
        const navbarLarge = document.getElementById('navbar-large');
        const navbarSmall = document.getElementById('navbar-small');
        
        if (window.innerWidth <= 992) {
            navbarLarge.style.display = 'none';
            navbarSmall.style.display = 'flex';
        } else {
            navbarLarge.style.display = 'flex';
            navbarSmall.style.display = 'none';
        }
    }

    // Ejecuta al cargar y al redimensionar la ventana
    toggleNavbar();
    window.addEventListener('resize', toggleNavbar);
});


</script>
<style>
  #navbar-small ul.navbar-nav {
    display: flex;
    gap: 15px;
}

#navbar-small .navbar-brand {
    font-size: 1.5rem;
}

.navbar {
    transition: all 0.3s ease-in-out;
}

</style>
</div>

      
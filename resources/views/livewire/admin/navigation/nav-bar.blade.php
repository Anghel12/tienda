<div>
    
{{-- @include('layouts.navbaradmin.partials.navbar_vertical_collapse') --}}
@if(auth()->user()->hasRole('Admin'))
@include('livewire.admin.navigation.partials.admin')

@else
@include('livewire.admin.navigation.partials.user')
@endif

@include('livewire.admin.navigation.partials.icons_horizontal')

@include('livewire.admin.navigation.partials.top_nav_slim')

@include('livewire.admin.navigation.partials.top_navbar')
  
@include('livewire.admin.navigation.partials.navbar_top_slim')

@include('livewire.admin.navigation.partials.combo_navbar')

@include('livewire.admin.navigation.partials.combo_slim')

 @include('livewire.admin.navigation.partials.dual_nav') 

@include('livewire.admin.navigation.partials.search_box_modal')


<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Obtén la URL actual
        var currentUrl = window.location.href;

        // Selecciona todos los enlaces de navegación
        var navLinks = document.querySelectorAll('.nav-link');

        // Recorre cada enlace y añade la clase 'active' si coincide con la URL actual
        navLinks.forEach(function(link) {
            if (link.href === currentUrl) {
                link.classList.add('active');
            }
        });
    });
</script>
</div>

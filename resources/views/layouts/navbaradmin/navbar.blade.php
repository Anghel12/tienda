


{{-- @include('layouts.navbaradmin.partials.navbar_vertical_collapse') --}}
@if(auth()->user()->hasRole('Admin'))
@include('layouts.navbaradmin.partials.admin')

@else
@include('layouts.navbaradmin.partials.user')
@endif

@include('layouts.navbaradmin.partials.icons_horizontal')

@include('layouts.navbaradmin.partials.top_nav_slim')

@include('layouts.navbaradmin.partials.top_navbar')
  
@include('layouts.navbaradmin.partials.navbar_top_slim')

@include('layouts.navbaradmin.partials.combo_navbar')

@include('layouts.navbaradmin.partials.combo_slim')

@include('layouts.navbaradmin.partials.dual_nav')

@include('layouts.navbaradmin.partials.search_box_modal')


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

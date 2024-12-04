{{-- HOME index --}}
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Cyber-Ecotienda') }}</title>
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-8114335291355852"
    crossorigin="anonymous"></script>

     <!-- Sección para metadatos dinámicos -->
     @yield('meta')
     
    {{-- no tocar --}}
   <meta name="description" content="Compra y venta de productos digitales como fisicos webs, motos, aros, tienda ubicada en san martin, moyobamba ">
    <meta name="robots" content="index, follow">
    <meta name="robots" content="noindex, nofollow">
    Meta Tags para Redes Sociales y Mejorar la Presentación: 
    <meta property="og:title" content="El Título de tu Página o Artículo">
    <meta property="og:description" content="Descripción corta y atractiva para tu página.">
    <meta property="og:image" content="URL_de_imagen_de_previsualización.jpg">
    <meta property="og:url" content="https://www.ejemplo.com">
    <meta property="og:type" content="website"> 

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="El Título de tu Página">
    <meta name="twitter:description" content="Descripción corta para Twitter.">
    <meta name="twitter:image" content="URL_de_imagen_de_previsualización.jpg">
    <meta name="twitter:url" content="https://www.ejemplo.com">
     Meta Author 
    <meta name="author" content="Tu Nombre o Nombre de la Empresa">
    <meta property="og:image" content="https://www.ejemplo.com/imagen.jpg">
    <meta name="geo.region" content="US-NY"> 
    <meta name="geo.placename" content="New York">
    <meta name="geo.position" content="40.7128;-74.0060">
    <meta name="google-site-verification" content="tu_codigo_de_verificacion">
    <link rel="canonical" href="https://www.ejemplo.com/pagina-original">

    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <meta name="google-site-verification" content="tu_codigo_de_verificacion">
 
      
    <noscript><style>body {display: none;}</style><div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); text-align: center;"><h2>Por favor, habilita JavaScript para continuar usando nuestro sitio.</h2></div>
    </noscript>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    @livewireStyles 


    {{-- 1. Schema Markup (Microdatos o Rich Snippets) --}}
<script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Product",
      "name": "Nombre del producto",
      "image": "https://www.ejemplo.com/imagen_producto.jpg",
      "description": "Descripción detallada del producto.",
      "sku": "12345",
      "offers": {
        "@type": "Offer",
        "url": "https://www.ejemplo.com/producto",
        "priceCurrency": "USD",
        "price": "29.99",
        "itemCondition": "https://schema.org/NewCondition",
        "availability": "https://schema.org/InStock"
      }
    }
    </script>
    {{--  Rich Snippets de Reseñas y Comentarios --}}
    <script type="application/ld+json">
        {
          "@context": "https://schema.org",
          "@type": "Product",
          "name": "Producto X",
          "aggregateRating": {
            "@type": "AggregateRating",
            "ratingValue": "4.5",
            "reviewCount": "24"
          }
        }
        </script>
        <sitemapindex xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
          <sitemap>
            <loc>https://www.ejemplo.com/sitemap.xml</loc>
            <lastmod>2024-12-01</lastmod>
          </sitemap>
        </sitemapindex>

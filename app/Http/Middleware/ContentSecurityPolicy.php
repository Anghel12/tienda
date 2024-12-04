<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class ContentSecurityPolicy
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $response = $next($request);

        // Configuración de CSP para permitir Bootstrap y otros recursos externos
        $csp = [
            "default-src" => ["'self'"], // Solo permitir recursos del mismo origen
            "script-src" => ["'self'", "'unsafe-inline'", "'unsafe-eval'", "https://cdn.jsdelivr.net", "https://cdnjs.cloudflare.com", "https://pagead2.googlesyndication.com"], // Permitir scripts de Bootstrap y Google Ads
            "style-src" => ["'self'", "'unsafe-inline'", "https://cdn.jsdelivr.net", "https://fonts.googleapis.com", "https://cdnjs.cloudflare.com"], // Permitir estilos de Bootstrap y fuentes de Google
            "img-src" => ["'self'", "data:", "https://*"], // Permite imágenes de cualquier dominio HTTPS
            "font-src" => ["'self'", "https://fonts.gstatic.com"], // Permite fuentes de Google Fonts
            "connect-src" => ["'self'"], // Permite conexiones XHR o WebSockets solo al mismo origen
            "frame-src" => ["https://*"], // Permite iframes de cualquier dominio HTTPS
            "object-src" => ["'none'"], // No permite objetos (a menos que sean necesarios explícitamente)
            "media-src" => ["'self'"], // Permite media solo del mismo origen
            "child-src" => ["'none'"], // Bloquea contenido de iframe
            "form-action" => ["'self'"], // Bloquea formularios de otros orígenes
        ];
        
        // Construir la cabecera CSP
        $cspHeader = "";
        foreach ($csp as $directive => $sources) {
            $cspHeader .= "$directive " . implode(" ", $sources) . "; ";
        }
        
        // Establece la cabecera CSP
        $response->headers->set('Content-Security-Policy', $cspHeader);
        
        return $response;
        
        
    }
}

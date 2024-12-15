<?php

namespace App\Traits;

use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Str;
use App\Models\View; // Asegúrate de tener este modelo que representa las vistas en la base de datos

trait Viewable
{
    public function registerView($viewableType = null)
    {
        $ipAddress = request()->ip();
        $userId = auth()->id();
        $cookieKey = 'unique_user_key';
        $today = now()->format('Y-m-d'); // Usamos la fecha actual para limitar las vistas por día

        // Si no se pasa un tipo de vista, se usa 'Product' por defecto
        $viewableType = $viewableType ?? 'Product';

        // Obtener o generar cookie única para usuarios anónimos
        $uniqueKey = request()->cookie($cookieKey) ?? Str::uuid()->toString();

        // Determinar clave de cache basada en usuario o cookie
        $cacheKey = $userId ? "user_{$userId}_viewed_{$viewableType}" : "anon_{$uniqueKey}_viewed_{$viewableType}";
        $dailyViewsKey = !$userId ? "anon_{$uniqueKey}_daily_views_{$today}" : null;

        // Verificar si el usuario anónimo ya alcanzó el límite de 3 vistas por día
        if (!$userId && Cache::get($dailyViewsKey, 0) >= 10) {
            return; // Si ya ha visto 3 productos, no registrar más vistas
        }

        // Verificar si ya se registró esta vista (para evitar duplicados por IP o ID)
        $viewedItems = Cache::get($cacheKey, []);
        if (in_array($this->id, $viewedItems)) {
            return; // Si ya se registró esta vista en cache, salir
        }

        // Verificar en base de datos solo si no se registró en cache
        if (View::where('ip_address', $ipAddress)
            ->where('viewable_type', $viewableType)  // Usar el tipo dinámico
            ->where('viewable_id', $this->id)
            ->exists()) {
            return; // No registrar si ya existe una vista para el mismo ítem y IP
        }

        // Registrar la vista en cache
        $viewedItems[] = $this->id;
        Cache::put($cacheKey, $viewedItems, now()->addYear()); // Guardar vistas de forma persistente

        // Incrementar contador de vistas diarias para usuarios anónimos
        if (!$userId) {
            Cache::increment($dailyViewsKey, 1); // Incrementa el contador en cache
            Cache::put($dailyViewsKey, Cache::get($dailyViewsKey, 0), now()->addDay()); // Expira al final del día
        }

        // Establecer cookie única si no existe
        if (!request()->cookie($cookieKey)) {
            cookie()->queue(cookie($cookieKey, $uniqueKey, 60 * 24 * 365)); // Validez de 1 año
        }

        // Registrar la vista en la base de datos
        $this->views()->create([
            'ip_address' => $ipAddress,
            'user_id' => $userId,
            'viewable_type' => $viewableType,  // Asignar el tipo de vista dinámicamente
            'viewable_id' => $this->id,        // ID del ítem que está siendo visto
        ]);
    }
}



/* trait Viewable
    public function registerView($viewableType = null)
    {
        $ipAddress = request()->ip();
        $userId = auth()->id();
        $cookieKey = 'unique_user_key';
        $today = now()->format('Y-m-d'); // Usamos la fecha actual para limitar las vistas por día

        // Si no se pasa un tipo de vista, se usa 'Product' por defecto
        $viewableType = $viewableType ?? 'Product';

        // Obtener o generar cookie única para usuarios anónimos
        $uniqueKey = request()->cookie($cookieKey) ?? Str::uuid()->toString();

        // Determinar clave de cache basada en usuario o cookie
        $cacheKey = $userId ? "user_{$userId}_viewed_{$viewableType}" : "anon_{$uniqueKey}_viewed_{$viewableType}";
        $dailyViewsKey = !$userId ? "anon_{$uniqueKey}_daily_views_{$today}" : null;

        // Verificar si el usuario anónimo ya alcanzó el límite de 3 vistas por día
        if (!$userId && Cache::get($dailyViewsKey, 0) >= 10) {
            return; // Si ya ha visto 3 productos, no registrar más vistas
        }

        // Verificar si ya se registró esta vista (para evitar duplicados por IP o ID)
        $viewedItems = Cache::get($cacheKey, []);
        if (in_array($this->id, $viewedItems)) {
            return; // Si ya se registró esta vista en cache, salir
        }

        // Verificar en base de datos solo si no se registró en cache
        if (View::where('ip_address', $ipAddress)
            ->where('viewable_type', $viewableType)  // Usar el tipo dinámico
            ->where('viewable_id', $this->id)
            ->exists()) {
            return; // No registrar si ya existe una vista para el mismo ítem y IP
        }

        // Registrar la vista en cache
        $viewedItems[] = $this->id;
        Cache::put($cacheKey, $viewedItems, now()->addYear()); // Guardar vistas de forma persistente

        // Incrementar contador de vistas diarias para usuarios anónimos
        if (!$userId) {
            Cache::increment($dailyViewsKey, 1); // Incrementa el contador en cache
            Cache::put($dailyViewsKey, Cache::get($dailyViewsKey, 0), now()->addDay()); // Expira al final del día
        }

        // Establecer cookie única si no existe
        if (!request()->cookie($cookieKey)) {
            cookie()->queue(cookie($cookieKey, $uniqueKey, 60 * 24 * 365)); // Validez de 1 año
        }

        // Registrar la vista en la base de datos
        $this->views()->create([
            'ip_address' => $ipAddress,
            'user_id' => $userId,
            'viewable_type' => $viewableType,  // Asignar el tipo de vista dinámicamente
            'viewable_id' => $this->id,        // ID del ítem que está siendo visto
        ]);
    }
}*/


/* antiguo */

     /*  Usuario vista */
  /*    $ipAddress = Request::ip();
     $userId = auth()->id();

     $alreadyViewed = $product->views()
     ->where(function ($query) use ($ipAddress, $userId, $product) {
         $query->where('ip_address', $ipAddress)
               ->where('viewable_id', $product->id)
               ->where('viewable_type', Product::class)
               ->orWhere('user_id', $userId);
     })
     ->exists();
 
 if (!$alreadyViewed) {
     $product->views()->create([
         'ip_address' => $ipAddress,
         'user_id' => $userId,
     ]);
 } */

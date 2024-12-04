<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Throwable;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Illuminate\Support\Facades\Log;


class Handler extends ExceptionHandler
{
    /**
     * A list of exception types with their corresponding custom log levels.
     *
     * @var array<class-string<\Throwable>, \Psr\Log\LogLevel::*>
     */
    protected $levels = [
        //
    ];

    /**
     * A list of the exception types that are not reported.
     *
     * @var array<int, class-string<\Throwable>>
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed to the session on validation exceptions.
     *
     * @var array<int, string>
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     *
     * @return void
     */
    public function register()
    {
        $this->reportable(function (Throwable $e) {
            //
        });
    }

    public function render($request, Throwable $exception)
    {
        // Personalizar el error 404 (Página no encontrada)
        if ($exception instanceof NotFoundHttpException) {
            return response()->view('errors.404', [], 404);
        }
    
        // Para el error 500 (Error Interno del Servidor)
                   // Si quieres notificar al administrador del error 500
     /*    if ($exception instanceof \Exception) {
            \Log::error("Error 500: " . $exception->getMessage(), ['exception' => $exception]);
            return response()->view('errors.500', [], 500);
        } */
    
        // Para el error 403 (Acceso Prohibido)
        if ($exception instanceof \Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException) {
            return response()->view('errors.403', [], 403);
        }
    
        // Para el error 401 (No Autenticado)
        if ($exception instanceof \Illuminate\Auth\AuthenticationException) {
            return response()->view('errors.401', [], 401);
        }
    
        // Errores comunes como valiudadciones de campos Para el error 422 (Entidad No Procesable)
       /*  if ($exception instanceof \Illuminate\Validation\ValidationException) {
            return response()->view('errors.422', [], 422);
        } */
    
        // Manejo de otros errores como método no permitido (405)
        if ($exception instanceof \Symfony\Component\HttpKernel\Exception\MethodNotAllowedHttpException) {
            return response()->view('errors.405', [], 405);
        }
    
        // Si el error es relacionado con base de datos (QueryException)
    /*     if ($exception instanceof \Illuminate\Database\QueryException) {
            return response()->view('errors.500', [], 500);
        } */
    
        // Puedes agregar más excepciones aquí si lo necesitas, como error 500, 403, etc.
    
        return parent::render($request, $exception);
    }
    

}

<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response as HttpFoundationResponse;
use Illuminate\Support\Facades\Response;

/**
 * Middleware para validar la API Key en las solicitudes al backend
 */
class ValidateApiKey
{
    /**
     * Maneja la solicitud entrante y valida la API Key
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): HttpFoundationResponse
    {
        // Compara la API Key recibida con la esperada desde el archivo .evn
        if ($request->header('API-Key') !== env('API_KEY')) {
            return Response::json(['message' => 'Unauthorized'], 401);
        }

        // Si la API Key es válida, permite que la solicitud continúe
        return $next($request);
    }
}

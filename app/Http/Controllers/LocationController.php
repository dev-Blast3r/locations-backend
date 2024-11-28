<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Response;


/**
 * Controlador que ayuda a mejorar las solicitudes relacionadas con las sedes (locations)
 */
class LocationController extends Controller
{
    /**
     * Devuelve una lista de sedes simuladas
     */
    public function index(): JsonResponse
    {
        // Lista de sedes simulada para que aparezcan en front react js
        $locations = [
            [
                'code' => '001',
                'name' => 'Sede Norte',
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/2/22/Granada_-_Cathedral_Front.jpg',
                'creationDate' => '2024-01-01',
            ],
            [
                'code' => '002',
                'name' => 'Sede Sur',
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/4/40/Sydney_Opera_House_Sails.jpg',
                'creationDate' => '2024-01-02',
            ],
            [
                'code' => '003',
                'name' => 'Sede Este',
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/6/6a/Jinshangling2.jpg',
                'creationDate' => '2024-01-03',
            ],
            [
                'code' => '004',
                'name' => 'Sede Oeste',
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/0/0a/Golden_Gate_Bridge_2021.jpg',
                'creationDate' => '2024-01-04',
            ],
            [
                'code' => '005',
                'name' => 'Sede Central',
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/2/2e/Eiffel_Tower_from_Palais_de_Chaillot%2C_Paris_5_May_2012.jpg',
                'creationDate' => '2024-01-05',
            ],
            [
                'code' => '006',
                'name' => 'Sede Internacional',
                'image' => 'https://upload.wikimedia.org/wikipedia/en/9/93/Burj_Khalifa.jpg',
                'creationDate' => '2024-01-06',
            ],
        ];
        

        // Retorna la lista en formato Json
        // return response()->json($locations);
        return Response::json($locations);

    }
}

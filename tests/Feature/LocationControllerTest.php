<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class LocationControllerTest extends TestCase
{
    /**
     * Testea que el controlador devuelve la lista de sedes correctamente.
     *
     * @return void
     */
    public function test_locations_endpoint_returns_correct_structure()
    {
        $response = $this->withHeaders([
            'API-Key' => env('API_KEY'),
        ])->get('/api/locations');

        $response->assertStatus(200)
                 ->assertJsonStructure([
                     '*' => [
                         'code',
                         'name',
                         'image',
                         'creationDate',
                     ],
                 ]);
    }
}

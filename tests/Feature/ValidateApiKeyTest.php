<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ValidateApiKeyTest extends TestCase
{
     /**
     * Testea el acceso con una API Key válida.
     *
     * @return void
     */
    public function test_access_with_valid_api_key()
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

    /**
     * Testea el acceso con una API Key inválida.
     *
     * @return void
     */
    public function test_access_with_invalid_api_key()
    {
        $response = $this->withHeaders([
            'API-Key' => 'invalid_key',
        ])->get('/api/locations');

        $response->assertStatus(401)
                 ->assertJson(['message' => 'Unauthorized']);
    }
}

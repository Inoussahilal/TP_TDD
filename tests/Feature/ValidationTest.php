<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ValidationTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    
    

public function test_un_chirp_ne_peut_pas_depasser_la_taille_maximale()
{
    // Crée un utilisateur
    $utilisateur = User::factory()->create();

    // Authentifie l'utilisateur
    $this->actingAs($utilisateur);

    // Tente de poster un chirp avec un message trop long
    $reponse = $this->post('/chirps', [
        'message' => str_repeat('a', 256), // Remplacez 256 par la taille maximale autorisée + 1
    ]);

    // Vérifie que la validation échoue
   $reponse->assertSessionHasErrors(['message']);
}

}

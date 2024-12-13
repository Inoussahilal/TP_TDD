<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class AffichageTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_les_chirps_sont_affiches_sur_la_page_d_accueil()
{

 $chirps = Chirp::factory()->count(3)->create();
 $reponse = $this->get('/');
 foreach ($chirps as $chirp) {
 $reponse->assertSee($chirp->contenu);
 }
}
}

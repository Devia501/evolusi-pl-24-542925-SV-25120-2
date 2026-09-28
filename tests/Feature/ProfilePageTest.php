<?php

namespace Tests\Feature;

use Tests\TestCase;

class ProfilePageTest extends TestCase
{
    public function test_profile_page_loads_successfully(): void
    {
        $response = $this->get('/profile');

        $response->assertStatus(200);
        $response->assertSee('Evolusi Perangkat Lunak');
        $response->assertSee('24/542925/SV/25120');
        $response->assertSee('Tentang Saya');
    }
}

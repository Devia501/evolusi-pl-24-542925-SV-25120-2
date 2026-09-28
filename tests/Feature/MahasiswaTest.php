<?php

namespace Tests\Feature;

use App\Models\Mahasiswa;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class MahasiswaTest extends TestCase
{
    use RefreshDatabase;

    public function test_mahasiswa_index_can_be_opened(): void
    {
        $response = $this->get('/mahasiswa');

        $response->assertStatus(200);
        $response->assertSee('Data Mahasiswa');
    }

    public function test_mahasiswa_can_be_created(): void
    {
        $response = $this->post('/mahasiswa', [
            'nama' => 'Devia Artika Maharani',
            'nim' => '24/542925/SV/25120',
            'prodi' => 'Teknologi Rekayasa Perangkat Lunak',
        ]);

        $response->assertRedirect('/mahasiswa');

        $this->assertDatabaseHas('mahasiswas', [
            'nim' => '24/542925/SV/25120',
            'nama' => 'Devia Artika Maharani',
        ]);
    }

    public function test_mahasiswa_can_be_updated(): void
    {
        $mahasiswa = Mahasiswa::create([
            'nama' => 'Nama Lama',
            'nim' => '123456',
            'prodi' => 'TRPL',
        ]);

        $response = $this->put("/mahasiswa/{$mahasiswa->id}", [
            'nama' => 'Nama Baru',
            'nim' => '654321',
            'prodi' => 'TRPL',
        ]);

        $response->assertRedirect('/mahasiswa');

        $this->assertDatabaseHas('mahasiswas', [
            'id' => $mahasiswa->id,
            'nama' => 'Nama Baru',
            'nim' => '654321',
        ]);
    }

    public function test_mahasiswa_can_be_deleted(): void
    {
        $mahasiswa = Mahasiswa::create([
            'nama' => 'Data Hapus',
            'nim' => '999999',
            'prodi' => 'TRPL',
        ]);

        $response = $this->delete("/mahasiswa/{$mahasiswa->id}");

        $response->assertRedirect('/mahasiswa');
        $this->assertDatabaseMissing('mahasiswas', ['id' => $mahasiswa->id]);
    }
}

<?php

namespace Tests\Feature;

use App\Models\Kelurahan;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class AdminTest extends TestCase
{

    use RefreshDatabase;

    public function test_get_kelurahan_index(): void
    {
        $data = [
            'kelurahan' => 'Test Index Page',
            'kecamatan' => 'Test',
            'kota' => 'Test',
        ];

        $create = Kelurahan::create($data);

        $response = $this->get(route('kelurahan.index'));

        $response->assertStatus(200);
        $response->assertSee(_('Test Index Page'));
    }

    public function test_admin_create_page(): void
    {
        $response = $this->get(route('kelurahan.create'));

        $response->assertStatus(200);
    }

    public function test_admin_input_data_kelurahan(): void
    {
        $data = [
            'kelurahan' => 'Test',
            'kecamatan' => 'Test',
            'kota' => 'Test',
        ];

        $create = Kelurahan::create($data);

        $this->assertInstanceOf(Kelurahan::class, $create);
        $this->assertDatabaseHas('Kelurahans', [
            'kelurahan' => 'Test',
            'kecamatan' => 'Test',
            'kota' => 'Test',
        ]);
    }

    public function test_admin_edit_page(): void
    {
        $response = $this->get(route('kelurahan.create', 1));

        $response->assertStatus(200);
    }

    public function test_admin_update_data_kelurahan(): void
    {
        $data = new Kelurahan();
        $data->kelurahan = 'Test';
        $data->kecamatan = 'Test';
        $data->kota = 'Test';
        $data->save();

        $data->kelurahan = 'Test Update';
        $data->save();

        $this->assertEquals('Test Update', $data->kelurahan);
        $this->assertDatabaseHas('Kelurahans', [
            'id' => $data->id,
            'kelurahan' => 'Test Update',
        ]);
    }
}

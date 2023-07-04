<?php

namespace Tests\Feature;

use App\Models\Kelurahan;
use App\Models\Pasien;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class OperatorTest extends TestCase
{

    use RefreshDatabase;

    /**
     * A basic feature test example.
     */
    public function test_operator_input_data_pasien(): void
    {
        $data = new Kelurahan();
        $data->kelurahan = 'Mandalajati';
        $data->kecamatan = 'Cimenyan';
        $data->kota = 'Bandung';
        $data->save();

        $pasien = new Pasien();
        $pasien->nama = 'Pasien';
        $pasien->no_telp = '1234567890';
        $pasien->alamat = 'Alamat';
        $pasien->rukun = collect([3, 13])->implode(',');
        $pasien->jenis_kelamin = '';
        $pasien->tgl_lahir = '';
        $latest_id = Pasien::latest()->first('id');
        if ($latest_id == null) {
            $new_number = $latest_id + 1;
        } else {
            $latest_id_new = Pasien::latest()->first()->id;
            $new_number = $latest_id_new + 1;
        }
        $format = str_pad($new_number, 6, '0', STR_PAD_LEFT);
        $id = date('y') . date('m') . $format;
        $pasien->id_pasien = $id;
        $pasien->save();
        $pasien->kelurahan()->attach(1);

        $response = $this->get(route('pasien.index'));

        $response->assertStatus(200);
        $response->assertSee('Mandalajati');
    }
}

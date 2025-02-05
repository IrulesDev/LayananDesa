<?php

namespace Database\Seeders;

use App\Models\Keluarga;
use App\Models\LayananDesa;
use App\Models\Penduduk;
use App\Models\Pendudukable;
use App\Models\PengajuanLayanan;
use App\Models\Perangkat_Desa;
use App\Models\PerangkatDesa;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        PengajuanLayanan::factory(10)->create();
        PerangkatDesa::factory(4)->create();
        LayananDesa::factory(20)->create();
        
        $keluargas = Keluarga::factory(50)->create();
        foreach($keluargas as $keluarga){
            Penduduk::factory(4)->create(['keluarga_id'=> $keluarga->id]);
        }
        Pendudukable::factory(250)->create();
    }
}
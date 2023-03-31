<?php

namespace Database\Seeders;

use App\Models\Kegiatan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KegiatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Kegiatan::create([
            'id' => '1',
            'nama_sekolah' => 'SMAN 1 MAOS',
            'nama_kegiatan' => 'LAKSANA',
            'tanggal' => '2023-03-20',
        ]);
        Kegiatan::create([
            'id' => '2',
            'nama_sekolah' => 'SMKN 1 CILACAP',
            'nama_kegiatan' => 'BANTARA',
            'tanggal' => '2023-03-20',
        ]);
        Kegiatan::create([
            'id' => '3',
            'nama_sekolah' => 'MTS 1 MUHAMMADYAH',
            'nama_kegiatan' => 'PBB',
            'tanggal' => '2023-03-20',
        ]);
    }
}

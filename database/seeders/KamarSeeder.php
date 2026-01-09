<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KamarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
   public function run(): void {
    for ($i = 1; $i <= 10; $i++) {
        \App\Models\Kamar::create([
            'nomor_kamar' => 'A' . $i,
            'tipe' => 'standard',
            'harga_bulanan' => 1000000,
            'fasilitas' => 'Kasur, Lemari, WiFi',
            'status' => $i % 2 == 0 ? 'tersedia' : 'terisi'
        ]);
    }
}
}

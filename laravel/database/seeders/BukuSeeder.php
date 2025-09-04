<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BukuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $buku = [
            [
                'judul' => 'Pemograman Javascript',
                'pengarang' => 'Anton Kurniawan',
                'tahun_terbit'=> '2024',
                'create_at'=> now(),
                'update_at'=> now()
            ],

            [
                'judul' => 'Revolusi',
                'pengarang' => 'Muzayin Musri',
                'tahun_terbit' => '2012',
                'created_at' => now(),
                'updated_at'=> now()
            ],
        ];
        DB::table('buku')->insert($buku);
    }
}

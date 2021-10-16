<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class DosenTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dosen = [
            ['nipd' => '012345', 'nama' => 'Ute Juli Kurnia', 'alamat' => 'Cibiru'],
            ['nipd' => '012367', 'nama' => 'Bayu Prima Yuda', 'alamat' => 'Sukamenak'],
            ['nipd' => '012389', 'nama' => 'Candra Herdiansyah', 'alamat' => 'Cibaduyut'],
            ['nipd' => '012310', 'nama' => 'Mulki', 'alamat' => 'Cibaduyut'],
            ['nipd' => '012311', 'nama' => 'Agung Kurniawan', 'alamat' => 'Bandung'],
        ];
        DB::table('dosens')->insert($dosen);
    }
}

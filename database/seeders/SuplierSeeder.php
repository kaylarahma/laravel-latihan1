<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class SuplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $suplier = [
            ['nama' => 'Seni', 'alamat' => 'Jl.Sindang Palay', 'kode_pos' => '40225', 'kota' => 'Bandung'],
            ['nama' => 'Adzura', 'alamat' => 'Jl.Tarate', 'kode_pos' => '40226', 'kota' => 'Bandung'],
            ['nama' => 'Abel', 'alamat' => 'Jl.Margahayu', 'kode_pos' => '40227', 'kota' => 'Bandung'],
            ['nama' => 'Rehan', 'alamat' => 'Jl.Ciwastra', 'kode_pos' => '40228', 'kota' => 'Bandung'],
            ['nama' => 'Sandi', 'alamat' => 'Jl.Rancamanyar', 'kode_pos' => '40229', 'kota' => 'Bandung'],
        ];
        DB::table('supliers')->insert($suplier);

    }
}

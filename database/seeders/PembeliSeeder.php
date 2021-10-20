<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class PembeliSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pembeli = [
            ['nama' => 'Lira', 'jk' => 'Perempuan', 'alamat' => 'Jl.Bahuan', 'kode_pos' => '40227', 'kota' => 'Bandung', 'tgl_lahir' => '2004-17-02'],
            ['nama' => 'Albi', 'jk' => 'Laki-laki', 'alamat' => 'Jl.Rancamanyar', 'kode_pos' => '40228', 'kota' => 'Bandung', 'tgl_lahir' => '2003-11-11'],
            ['nama' => 'Maudy', 'jk' => 'Perempuan', 'alamat' => 'Jl.Inhoptank', 'kode_pos' => '40229', 'kota' => 'Bandung', 'tgl_lahir' => '2004-05-23'],
            ['nama' => 'Palah', 'jk' => 'Laki-laki', 'alamat' => 'Jl.Sukamenak', 'kode_pos' => '40221', 'kota' => 'Bandung', 'tgl_lahir' => '2003-11-28'],
            ['nama' => 'Tiara', 'jk' => 'Perempuan', 'alamat' => 'Jl.Cisirung', 'kode_pos' => '40225', 'kota' => 'Bandung', 'tgl_lahir' => '2003-11-23'],
        ];
        DB::table('pembelis')->insert($pembeli);

    }
}

<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class MahasiswaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $mhs = [
            ['nim' => '098765', 'nama' => 'Kayla Rahmanisa', 'jurusan' => 'RPL', 'wali' => 'Oman Rohman'],
            ['nim' => '087654', 'nama' => 'Rifki Alif Hidayatulloh', 'jurusan' => 'TKRO', 'wali' => 'Tuti Hariati'],
            ['nim' => '076543', 'nama' => 'Risma Septiani Fadila', 'jurusan' => 'RPL', 'wali' => 'Agus Harianto'],
            ['nim' => '065432', 'nama' => 'Saepuloh', 'jurusan' => 'TKRO', 'wali' => 'Dodi Kusnaedi'],
            ['nim' => '054321', 'nama' => 'Seni Oktoviani', 'jurusan' => 'RPL', 'wali' => 'Lina Nurlina'],
        ];
        DB::table('mahasiswas')->insert($mhs);

    }
}

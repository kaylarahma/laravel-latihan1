<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class Biodatastableseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $bio = [
            ['id' => 1, 'name' => 'Kayla Rahmanisa',
                'bornDate' => '25 Oktober 2004', 'gender' => 'Perempuan',
                'address' => 'Jl.Sukamenak', 'religion' => 'Islam',
                'age' => 17, 'hobby' => 'Makan'],

            ['id' => 2, 'name' => 'Risma Septiani Fadila',
                'bornDate' => '13 September 2003', 'gender' => 'Perempuan',
                'address' => 'Jl.Ciparay Tengah', 'religion' => 'Islam',
                'age' => 18, 'hobby' => 'Tidur'],

            ['id' => 3, 'name' => 'Lira Rahmawati',
                'bornDate' => '17 Februari 2004', 'gender' => 'Perempuan',
                'address' => 'Jl.Bahulan', 'religion' => 'Islam',
                'age' => 18, 'hobby' => 'Main HP'],

            ['id' => 4, 'name' => 'Palah Syahrul Murabak',
                'bornDate' => '8 Mei 1999', 'gender' => 'Laki-Laki',
                'address' => 'Jl.Sukamenak', 'religion' => 'Hindu',
                'age' => 22, 'hobby' => 'Ngurir'],

            ['id' => 5, 'name' => 'Tiara Andini',
                'bornDate' => '34 juli 1790', 'gender' => 'Perempuan',
                'address' => 'Jl.Palasari', 'religion' => 'Islam',
                'age' => 140, 'hobby' => 'Mati'],

        ];
        DB::table('biodatas')->insert($bio);
    }
}

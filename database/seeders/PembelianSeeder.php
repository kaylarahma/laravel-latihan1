<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class PembelianSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pembelian = [
            ['nama_barang' => 'CornDog', 'nama_suplier' => 'Seni', 'qty' => '1', 'tgl' => '2021-10-19'],
            ['nama_barang' => 'Kebab', 'nama_suplier' => 'Adzura', 'qty' => '2', 'tgl' => '2021-10-20'],
            ['nama_barang' => 'Burger', 'nama_suplier' => 'Abel', 'qty' => '3', 'tgl' => '2021-10-21'],
            ['nama_barang' => 'Pizza', 'nama_suplier' => 'Sandi', 'qty' => '4', 'tgl' => '2021-10-22'],
            ['nama_barang' => 'HotDog', 'nama_suplier' => 'Rehan', 'qty' => '5', 'tgl' => '2021-10-23'],
        ];
        DB::table('pembelians')->insert($pembelian);

    }
}

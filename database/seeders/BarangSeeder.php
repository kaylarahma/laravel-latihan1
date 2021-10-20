<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $barang = [
            ['nama' => 'CornDog', 'varian' => 'Tiramisu', 'harga_beli' => 'Rp.10.000', 'harga_jual' => 'Rp.15.000'],
            ['nama' => 'Kebab', 'varian' => 'Beef Pedas', 'harga_beli' => 'Rp.15.000', 'harga_jual' => 'Rp.20.000'],
            ['nama' => 'Burger', 'varian' => 'Cheese Beef', 'harga_beli' => 'Rp.20.000', 'harga_jual' => 'Rp.25.000'],
            ['nama' => 'Pizza', 'varian' => 'Jamur Keju Pedas', 'harga_beli' => 'Rp.90.000', 'harga_jual' => 'Rp.100.000'],
            ['nama' => 'HotDog', 'varian' => 'Big', 'harga_beli' => 'Rp.15.000', 'harga_jual' => 'Rp.20.000'],
        ];
        DB::table('barangs')->insert($barang);

    }
}

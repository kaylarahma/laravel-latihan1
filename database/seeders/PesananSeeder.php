<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class PesananSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pesanan = [
            ['nama_pelanggan' => 'Lira', 'nama_barang' => 'Tiramisu', 'qty' => '1', 'tgl_pesan' => '2021-10-01'],
            ['nama_pelanggan' => 'ALbi', 'nama_barang' => 'Beef Pedas', 'qty' => '2', 'tgl_pesan' => '2021-10-02'],
            ['nama_pelanggan' => 'Maudy', 'nama_barang' => 'Cheese Beef', 'qty' => '3', 'tgl_pesan' => '2021-10-03'],
            ['nama_pelanggan' => 'Seni', 'nama_barang' => 'Jamur Keju Pedas', 'qty' => '4', 'tgl_pesan' => '2021-10-04'],
            ['nama_pelanggan' => 'Tiara', 'nama_barang' => 'Big', 'qty' => '5', 'tgl_pesan' => '2021-10-05'],
        ];
        DB::table('pesanans')->insert($pesanan);

    }
}

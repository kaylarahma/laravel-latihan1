<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(PostsTableSeeder::class);
        $this->call(DosenTableSeeder::class);
        $this->call(MahasiswaTableSeeder::class);
        $this->call(HeroSeeder::class);
        $this->call(BarangSeeder::class);
        $this->call(PesananSeeder::class);
        $this->call(PembeliSeeder::class);
        $this->call(PembelianSeeder::class);
        $this->call(SuplierSeeder::class);

    }
}

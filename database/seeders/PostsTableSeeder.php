<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $post = [
            ['title' => 'Tajwid Menyenangkan', 'content' => 'lorem ipsum'],
            ['title' => 'Bacaan Sholat', 'content' => 'lorem ipsum'],
            ['title' => 'Juz Amma', 'content' => 'lorem ipsum'],
        ];
        // masukkan data ke database
        DB::table('posts')->insert($post);

    }
}

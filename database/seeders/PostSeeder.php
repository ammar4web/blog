<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Models\Post;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Db::table('posts')->insert([
        //     'title' => Str::random(25),
        //     'body'=> Str::random(300),
        //     'author' => Str::random(10),
        // ]);

        // Post::factory()->count(20)->create();
        // Post::factory()->count(20)->hasComments(3, ['approved' => true])->create();
        Post::factory()->count(20)->hasComments(3, ['approved' => false])->create();
    }
}

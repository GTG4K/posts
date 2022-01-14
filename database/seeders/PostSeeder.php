<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=0; $i<10; $i++){
            $Post = new Post;

            $Post->fill([
                'title' => Str::random(25),
                'content' => Str::random(200),
                'author' => Str::random(10),
            ])->save();
        }
    }
}

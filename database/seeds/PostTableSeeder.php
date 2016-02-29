<?php

use Illuminate\Database\Seeder;
use Multiversum\Post;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Post::truncate();
        factory(Post::class, 50)->create();
    }
}

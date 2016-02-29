<?php

use Illuminate\Database\Seeder;
use Multiversum\Post;
use Multiversum\Tag;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tag::truncate();
        factory(Tag::class, 5)->create()->each(function ($tag) {
            foreach (Post::all()->random(10) as $post) {
                $tag->posts()->save($post);
            }
        });
    }
}

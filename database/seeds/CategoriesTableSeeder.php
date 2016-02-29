<?php

use Illuminate\Database\Seeder;
use Multiversum\Category;
use Multiversum\Post;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::truncate();
        factory(Category::class, 5)->create()->each(function ($cat) {
            foreach (Post::whereNull('category_id')->get()->random(10) as $post) {
                $cat->posts()->save($post);
            }
        });
    }
}

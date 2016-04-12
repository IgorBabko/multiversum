<?php

use Multiversum\Post;

class PostTest extends TestCase
{

    /** @test */
    public function it_fetches_trending_posts()
    {
        $post         = factory(Post::class, 2)->create();
        $topRatedPost = factory(Post::class, 1)->create(['rating' => 20]);

        $posts = Post::topRated();
//
        $

    }
}

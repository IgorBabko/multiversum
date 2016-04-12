<?php

use Illuminate\Foundation\Testing\DatabaseTransactions;
use Multiversum\Post;

class PostTest extends TestCase
{
    use DatabaseTransactions;

    /** @test */
    public function it_fetches_top_rated_posts()
    {
        $posts        = [];
        $posts[]      = factory(Post::class)->make();
        $posts[]      = factory(Post::class)->make();
        $topRatedPost = factory(Post::class)->make();
        $posts[]      = $topRatedPost;

        // $posts = Post::topRated(5);

        $this->assertEquals($topRatedPost->id, $posts[2]->id);
        $this->assertCount(3, $posts);
    }
}

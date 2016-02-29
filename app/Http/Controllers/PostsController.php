<?php

namespace Multiversum\Http\Controllers;

use Carbon\Carbon;
use Multiversum\Http\Controllers\Controller;
use Multiversum\Post;

class PostsController extends Controller
{
    public function index()
    {
        $posts = Post::where('published_at', '<=', Carbon::now())
            ->orderBy('published_at', 'desc')
            ->paginate(config('custom.posts_per_page'));

        return view('posts.index')->withPosts($posts);
    }

    public function showPost($slug)
    {
        $post = Post::whereSlug($slug)->firstOrFail();

        return view('posts.show')->withPost($post);
    }
}

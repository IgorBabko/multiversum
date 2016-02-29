<?php

namespace Multiversum\Http\Controllers;

use Multiversum\Http\Controllers\Controller;
use Multiversum/Post;
use Carbon\Carbon;


class PostsController extends Controller
{
    // $post = Post::findBySlug('my-slug');
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

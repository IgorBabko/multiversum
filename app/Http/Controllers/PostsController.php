<?php

namespace Multiversum\Http\Controllers;

use Illuminate\Http\Request;
use Multiversum\Http\Controllers\Controller;
use Multiversum\Post;

class PostsController extends Controller
{
    public function index()
    {
        $posts = Post::orderBy('published_at', 'desc')
            ->paginate(config('custom.posts_per_page'));

        return view('posts.index')->withPosts($posts);
    }

    public function showPost(Request $request, $slug)
    {
        $post = Post::whereSlug($slug)->firstOrFail();

        return view('posts.show', compact('request', 'post'));
    }

    public function search($searchString)
    {
        $posts = Post::search($searchString, false)->paginate(10);

        return view('posts.index', compact('posts', 'searchString'));
    }
}

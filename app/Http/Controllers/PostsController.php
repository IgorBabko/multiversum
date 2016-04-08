<?php

namespace Multiversum\Http\Controllers;

use Illuminate\Http\Request;
use Multiversum\Category;
use Multiversum\Http\Controllers\Controller;
use Multiversum\Post;
use Multiversum\Tag;

class PostsController extends Controller
{
    public function index(Request $request)
    {
        $categories = Category::all();
        $tags       = Tag::all();
        $posts      = Post::paginate(config('custom.posts_per_page'));

        return view('posts.index', compact('posts', 'categories', 'tags'));
    }

    public function showPostsFromCategory($name)
    {
        $categories = Category::all();
        $tags       = Tag::all();

        $posts = $this->getPostsFromCategory($name);

        return view('posts.index', compact('posts', 'categories', 'tags', 'name'));
    }

    public function showPostsWithTag($name)
    {
        $categories = Category::all();
        $tags       = Tag::all();

        $posts = $this->getPostsWithTag($name);

        return view('posts.index', compact('posts', 'categories', 'tags', 'name'));
    }

    public function getPostsFromCategory($name)
    {
        $category = Category::where('name', $name)->first();

        return $category->posts()->paginate(config('custom.posts_per_page'));
    }

    public function getPostsWithTag($name)
    {
        $tag = Tag::where('name', $name)->first();

        return $tag->posts()->paginate(config('custom.posts_per_page'));
    }

    public function showPost(Request $request, $slug)
    {
        $post = Post::whereSlug($slug)->firstOrFail();

        return view('posts.show', compact('request', 'post'));
    }

    public function search($searchString)
    {
        $postsBuilder = Post::search($searchString);
        $count        = $postsBuilder->get()->count();
        $posts        = $postsBuilder->paginate(10);

        return view('posts.index', compact('posts', 'searchString', 'count'));
    }
}

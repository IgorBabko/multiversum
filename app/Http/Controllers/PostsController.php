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
        // dd(Post::where('id', 1)->get()[0]->ratings);
        $categories = category::all();
        $tags       = tag::all();
        $posts      = post::paginate(config('custom.posts_per_page'));

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
        $categories = Category::all();
        $tags       = Tag::all();
        $post       = Post::whereSlug($slug)->firstOrFail();

        return view('posts.show', compact('request', 'post', 'categories', 'tags'));
    }

    public function search($searchString)
    {
        $categories = Category::all();
        $tags       = Tag::all();

        $postsBuilder = Post::search($searchString);
        $count        = $postsBuilder->get()->count();
        $posts        = $postsBuilder->paginate(10);

        return view('posts.index', compact('posts', 'categories', 'tags', 'searchString', 'count'));
    }

    public function rate( /*RateRequest $request, */$id)
    {
        Post::first($id)->rate();
    }

}

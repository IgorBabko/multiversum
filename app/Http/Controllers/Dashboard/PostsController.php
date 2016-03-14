<?php

namespace Multiversum\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use Multiversum\Http\Controllers\Controller;
use Multiversum\Http\Requests\StorePostRequest;
use Multiversum\Http\Requests\UpdatePostRequest;
use Multiversum\Post;
use Session;

class PostsController extends Controller
{
    /**
     * Display a listing of the posts.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::orderBy('published_at', 'desc')->get();
        return view('dashboard.posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new post.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.posts.create');
    }

    /**
     * Store a newly created post in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, StorePostRequest $storePostRequest)
    {
        $post = new Post($request->except('file'));

        $post->save();

        Session::flash('success', 'Статья добавлена успешно');

        return redirect('dashboard/posts');
    }

    /**
     * Display the specified post.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified post.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        return view('dashboard.posts.edit', compact('post'));
    }

    /**
     * Update the specified post in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post, UpdatePostRequest $updatePostRequest)
    {
        $post->update(
            $request->except('_token', '_method')
        );

        Session::flash('success', 'Статья изменена успешно');

        return redirect('dashboard/posts');
    }

    /**
     * Remove the specified post from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Post::destroy($id);

        Session::flash('success', 'Статья успешно удалена');

        return back();
    }
}

<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::latest()->get();
        return view('post.index', compact('posts'));
    }

    public function create()
    {
        return view ('post.create');
    }

    public function store(Request $request)
    {
       $request->validate([
         'title' => 'required|max:255',
         'body' => 'required|max:2000',
       ]);
       $post = new Post();
       $post->title = $request->input('title');
       $post->body = $request->input('body');
       $post->save();
       return redirect('/');
    }

    public function show(Post $post)
    {
        return view('post.show');
    }

    public function edit(Post $post)
    {
        //
    }

    public function update(Request $request, Post $post)
    {
        //
    }

    public function destroy(Post $post)
    {
        //
    }
}

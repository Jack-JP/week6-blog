<?php

namespace App\Http\Controllers;
use App\Comment;
use App\Category;
use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $categories = Category::orderBy('name', 'desc')->take(6)->get();
        $posts = Post::latest()->get();
        return view('post.index', compact('posts','categories'));
    }

    public function create()
    {
        $categories = Category::orderBy('name', 'desc')->take(6)->get();
        return view ('admin.posts.create', compact('categories'));
    }

    public function store(Request $request)
    {
       $request->validate([
         'title' => 'required|max:255',
         'body' => 'required|max:2000',
         'image' => 'required'
       ]);
       $post = new Post();
       $post->title = $request->input('title');
       $post->body = $request->input('body');
       //$path = $request->file('image')->store('images', ['disk' => 'public']);
       $post->image_url = $request->input('image');
       $post->user_id = auth()->user()->id;
       $post->category_id = $request->input('category');
       $post->comment_id = 1;
       $post->comment_active = 1;
       $post->save();
       return redirect('/');
    }

    public function show($id)
    {


      $singlePost = Post::find($id);
      $categories = Category::orderBy('name', 'desc')->take(6)->get();
      return view('post.show', compact('categories', 'singlePost'));
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

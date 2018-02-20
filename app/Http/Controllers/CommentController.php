<?php

namespace App\Http\Controllers;

use App\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function index()
    {
        //
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
      $request->validate([
        'body' => 'required',
      ]);
      $comment = new Comment;
      $comment->body = $request->body;
      $comment->user_id = auth()->user()->id;
      $comment->post_id = $request->post;
      $comment->save();
      return redirect()->route('post.show', $request->post);
    }

    public function show(Comment $comment)
    {
        //
    }

    public function edit(Comment $comment)
    {
        //
    }

    public function update(Request $request, Comment $comment)
    {
        //
    }

    public function destroy(Comment $comment)
    {
        //
    }
}

@extends('layouts.app')

@section('title', 'All posts')

@section('content')
<div class="container">

      <div class="row">

        <!-- Blog Entries Column -->
        <div class="col-md-8">

          <h1 class="my-4">Page Heading
            <small>Secondary Text</small>
          </h1>

          @foreach ($posts as $post)
          <div class="card mb-4 article category_{{$post->category_id}}">
            <img class="card-img-top" src="<?php echo asset('storage/' . $post->image_url);?>" alt="Card image cap">
            <div class="card-body">
              <h2 class="card-title">{{$post->title}}</h2>
              <p class="card-text">{!!$post->body!!}</p>
              <a href="{{ route('post.show', $post->id) }}" class="btn btn-primary">Read More &rarr;</a>
            </div>
            <div class="card-footer text-muted">
              Posted {{$post->created_at->diffForHumans()}} by
              <a href="#">{{ $post->user->name }}</a>
            </div>
          </div>
          @endforeach

          <!-- Pagination -->
<!--          <ul class="pagination justify-content-center mb-4">
            <li class="page-item">
              <a class="page-link" href="#">&larr; Older</a>
            </li>
            <li class="page-item disabled">
              <a class="page-link" href="#">Newer &rarr;</a>
            </li>
          </ul>
-->
        </div>

        @include('layouts.sidebar')

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

@endsection

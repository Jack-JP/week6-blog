@extends('layouts.app')

@section('title', 'Single post')

@section('content')
<div class="container">
      <div class="row">
        <div class="col-lg-8">
          <h1 class="mt-4">{{ $singlePost->title }}</h1>
          <p class="lead">
            by <a href="#">{{ $singlePost->user->name }}</a>
          </p>
          <hr>
          <p>Posted on {{ $singlePost->created_at->diffForHumans() }}</p>
          <hr>
          <img class="img-fluid rounded" src="http://placehold.it/900x300" alt="">
          <hr>
          <p class="lead">{{ $singlePost->body }}</p>
          <hr>

          <div class="card my-4">
            <h5 class="card-header">Leave a Comment:</h5>
            <div class="card-body">
              {!! Form::open(['method' => 'POST', 'route' => 'comment.store']) !!}
              {{ Form::hidden('post', $singlePost->id) }}
                  <div class="form-group{{ $errors->has('body') ? ' has-error' : '' }}">
                      {!! Form::textarea('body', null, ['id' => 'body', 'class' => 'form-control', 'placeholder' => 'Comment here..']) !!}

                      @if($errors->has('body'))
                          <span class="help-block">{{ $errors->first('body') }}</span>
                      @endif
                  </div>
              {{ Form::button('Add your comment', ['class' => 'btn btn-primary', 'type' => 'submit']) }}
              {!! Form::close() !!}
            </div>
          </div>

          <!-- Single Comment -->
          @foreach( $singlePost->comment as $comment)


          <div class="media mb-4">
            <img height="80" width="80" class="d-flex mr-3 rounded-circle" src="http://www.nce.ufrj.br/ginape/imagens/avatar.png" alt="user">
            <div class="media-body">
              <h5 class="mt-0">{{$comment->user->name}}</h5>
              {{$comment->body}}
            </div>
          </div>

        @endforeach
        </div>
        <!-- Sidebar Widgets Column -->
        <div class="col-md-4">

          <!-- Search Widget -->
          <div class="card my-4">
            <h5 class="card-header">Search</h5>
            <div class="card-body">
              <div class="input-group">
                <input type="text" class="form-control" placeholder="Search for...">
                <span class="input-group-btn">
                  <button class="btn btn-secondary" type="button">Go!</button>
                </span>
              </div>
            </div>
          </div>

          <!-- Categories Widget -->
          <div class="card my-4">
            <h5 class="card-header">Categories</h5>
            <div class="card-body">
              <div class="row">
                @foreach($categories as $category)
                  <div class="col-lg-6">
                    <ul class="list-unstyled mb-0">
                      <li>
                        <a href="#">{{ $category->name }}</a>
                      </li>
                    </ul>
                  </div>
                @endforeach
              </div>
            </div>
          </div>

          <!-- Side Widget -->
          <div class="card my-4">
            <h5 class="card-header">Side Widget</h5>
            <div class="card-body">
              You can put anything you want inside of these side widgets. They are easy to use, and feature the new Bootstrap 4 card containers!
            </div>
          </div>

        </div>

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->


@endsection

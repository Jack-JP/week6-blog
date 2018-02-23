@extends('layouts.app')

@section('title', 'Single post')

@section('content')
<div class="container">
  <div class="row">

  </div>
      <div class="row">
        <div class="col-lg-8">
          <h1 class="mt-4">{{ $singlePost->title }}</h1>
          <p class="lead">
            by <a href="#">{{ $singlePost->user->name }}</a>
          </p>
          <hr>
          <p>Posted {{ $singlePost->created_at->diffForHumans() }}</p>
          <hr>
          <img class="img-fluid rounded" src="{{$singlePost->image_url}}" alt="">
          <hr>
          <p class="lead">{!! $singlePost->body !!}</p>
          <hr>

          @if($singlePost->comment_active)


            @foreach( $singlePost->comment as $comment)
              <div class="media mb-4">
                <img height="80" width="80" class="d-flex mr-3 rounded-circle" src="http://www.nce.ufrj.br/ginape/imagens/avatar.png" alt="user">
                <div class="media-body">
                  <h5 class="mt-0">{{$comment->user->name}}</h5>
                  {{$comment->body}}
                </div>
              </div>
            @endforeach

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


          @else

            <div class="card my-4">
              <h5 class="card-header">Commenting set to private</h5>
            </div>
          @endif


        </div>

        @include('layouts.sidebar')

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->


@endsection

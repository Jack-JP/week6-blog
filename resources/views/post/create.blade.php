@extends('layouts.app')

@section('title', 'Create post')

@section('content')

<script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
<script>tinymce.init({ selector:'textarea' });</script>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card card-default">
                <div class="card-header">Create post</div>

                <div class="card-body">

                   <form action="{{route('post.store')}}" method="post">
                       {{ csrf_field() }}
                       <div class="form-group">
                       <label>Title</label>
                       <input type="text" class="form-control" name="title" required>
                       </div>
                       <div class="form-group">
                       <label>Body</label>
                       <textarea name="body" class="form-control"></textarea>
                       </div>
                       <input type="submit" class="btn btn-basic" value="Add post">
                   </form>


                </div>
            </div>
        </div>
    </div>
</div>


@endsection

@extends('layouts.app')

@section('title', 'All posts')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card card-default">
                <div class="card-header">Dashboard</div>

                <div class="card-body">

                    @foreach ($posts as $post)
                    {{$post}}
                    @endforeach


                </div>
            </div>
        </div>
    </div>
</div>
@endsection

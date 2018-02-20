@extends('layouts.app')

@section('title', 'Admin page')

@section('content')
<div class="container-fluid">
  <div class="row">
    <div class="col-md-2">
      @include('admin.layouts.admin_sidebar')
    </div>
    <div class="col-md-10">
      <div class="row">
        <div class="col-md-8">
          <div class="card card-info">
            <div class="card-header">Dashboard</div>

            <table class="table">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">name</th>
                  <th scope="col">created_at</th>
                  <th scope="col">updated_at</th>
                </tr>
              </thead>
              <tbody>
                @foreach($categories as $category)
                <tr>
                  <th scope="row">{{ $category->id }}</th>
                  <td>{{ $category->name }}</td>
                  <td>{{ $category->created_at->diffForHumans() }}</td>
                  <td>{{ $category->updated_at->diffForHumans() }}</td>
                </tr>
                @endforeach

              </tbody>
            </table>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card card-info">
            <div class="card-header">New Category</div>

            <div class="card-body">
              {!! Form::open(['method' => 'POST', 'route' => 'category.store']) !!}
                  <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                      {!! Form::label('name', 'Name:', ['class' => 'control-label']) !!}
                      {!! Form::text('name', null, ['id' => 'name', 'class' => 'form-control', 'placeholder' => 'name']) !!}
                      @if($errors->has('name'))
                          <span class="help-block">{{ $errors->first('name') }}</span>
                      @endif
                  </div>
              {{ Form::button('Add', ['class' => 'btn btn-default', 'type' => 'submit']) }}
              {!! Form::close() !!}
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

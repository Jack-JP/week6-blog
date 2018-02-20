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
        <div class="col-md-12">
          <div class="card card-info">
            <div class="card-header">Dashboard</div>
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Name</th>
                  <th scope="col">Email</th>
                  <th scope="col">created_at</th>
                </tr>
              </thead>
              <tbody>
              @foreach($users as $user)
                <tr>
                  <th scope="row">{{ $user->id }}</th>
                  <td>{{ $user->name }}</td>
                  <td>{{ $user->email }}</td>
                  <td>{{ $user->created_at->diffForHumans() }}</td>
                </tr>
              @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

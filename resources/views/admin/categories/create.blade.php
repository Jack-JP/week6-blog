@extends('layouts.app')

@section('title', 'Admin page')

@section('content')
<div class="container-fluid">
    <div class="row">
      <div class="col-md-2">
        @include('admin.layouts.admin_sidebar')
      </div>
      <div class="col-md-10">


          <div class="card card-info">
              <div class="card-header">Dashboard</div>

              <div class="card-body">
                  <p>Create</p>
              </div>
          </div>
      </div>
    </div>
</div>
@endsection

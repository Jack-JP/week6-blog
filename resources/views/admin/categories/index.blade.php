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

        <table class="table">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">First</th>
              <th scope="col">Last</th>
              <th scope="col">Handle</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td>Mark</td>
              <td>Otto</td>
              <td>@mdo</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
@endsection

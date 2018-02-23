<div class="card bg-primary">
    <div class="card-header"><a class="text-white" href="/admin">Dashboard</a> </div>
    <div class="card-body bg-light list_sidebar">
        <ul class="list-group list-group-flush ">
          <li class="list-group-item"><a href="{{ route('post.create') }}">Posts</a></li>
          <li class="list-group-item"><a href="{{ route('category.index') }}">Categories</a></li>
          <li class="list-group-item"><a href="{{ route('user.index') }}">Users</a></li>
        </ul>
    </div>
</div>

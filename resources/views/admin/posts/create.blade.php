@extends('layouts.app')

@section('title', 'Create')

@section('content')

<script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
<script src="{{ asset('js/text_expander.js') }}"></script>
<script>
var mceEditor;
tinymce.init({ selector:'textarea',
init_instance_callback : function(editor) {
    mceEditor = editor;

    mceEditor.on('keyup', function(e){
      var bookmark = mceEditor.selection.getBookmark();
      var expandedText = expandText(mceEditor.getContent({format: 'raw'}))
      mceEditor.setContent(expandedText, {format: 'raw'});
      mceEditor.selection.moveToBookmark(bookmark);
      mceEditor.dom.remove(bookmark.id + "_start");
    });
  }
});

</script>

<div class="container-fluid">
    <div class="row">
      <div class="col-md-2">
        @include('admin.layouts.admin_sidebar')
      </div>
      <div class="col-md-10">


          <div class="card card-info">
              <div class="card-header">Dashboard</div>

              <div class="card-body">

                <form action="{{route('post.store')}}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="form-group">
                    <label>Title</label>
                    <input type="text" class="form-control" name="title" required>
                    </div>
                    <div class="form-group">
                      <label>Category</label><br>
                      <select name="category" required>
                        @foreach ($categories as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach
                      </select>
                    </div>
                    <div class="form-group">
                    <label>Body</label>
                    <textarea id="text-editor" name="body" class="form-control"></textarea>
                    </div>
                    <div id="shortcuts"></div>
                    <script>showShortcuts();</script>

                    <div class="form-group">
                    <label>Picture URL</label><br>
                    <input type="text" name="image">
                    </div>

                    <input type="submit" class="btn btn-basic" value="Add post">
                </form>

              </div>
          </div>
      </div>
    </div>
</div>

@endsection

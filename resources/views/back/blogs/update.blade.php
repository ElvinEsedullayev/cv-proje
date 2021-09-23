@extends('back\layouts\master')
@section('title','Blog Update')
@section('css')
   <link rel="stylesheet" href="{{asset('back')}}/plugins/summernote/summernote-bs4.min.css">
@endsection
@section('content')
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Blog Form</h3>
                <a href="{{route('yonetim.blog')}}" class="btn btn-danger btn-xs float-right"><i class="fas fa-undo"></i> Geri</a>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{route('blog.updated',$blog->id)}}" method="POST" enctype="multipart/form-data">
                   @include('back\layouts\partials\errors')
                   @include('back\layouts\partials\alert')
                @csrf
             
                <div class="card-body">
                <div class="form-group">
                    <label for="">Blog Name</label>
                    <input type="text" class="form-control" id="" placeholder="Blog Name" name="name" value="{{old('name',$blog->name)}}">
                  </div>
                  <div class="form-group">
                    <label for="">Author</label>
                    <input type="text" class="form-control" id="" placeholder="Author" name="author" value="{{old('author',$blog->author)}}">
                  </div>
                <div class="form-group">
                    <label for="">Date</label>
                    <input type="text" class="form-control" id="" placeholder="Date" name="date" value="{{old('date',$blog->date)}}">
                  </div>
                  <div class="form-group">
                    @if($blog->image != null)
                          <img src="{{asset('uploads/blogs/'.$blog->image)}}" style="width: 120px; height: 100px; margin-bottom: 10px;" alt="">
                    @endif
                    <label for="exampleInputFile">Sekil</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" name="image" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Sekil Sec</label>
                      </div>
                    </div>
                  </div>
            <div class="form-group">
                <div class="card-body">
              <textarea id="summernote" name="description" class="form-control">{{old('description',$blog->description)}}</textarea>
              </div>
                </div>
                </div>

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary btn-block">Create</button>
                </div>
              </form>
            </div>
@endsection
@section('footer')
<script src="{{asset('back')}}/plugins/summernote/summernote-bs4.min.js"></script>
<script>
  $(function () {
    // Summernote
    $('#summernote').summernote()

    // CodeMirror
    CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), {
      mode: "htmlmixed",
      theme: "monokai"
    });
  })
</script>
@endsection
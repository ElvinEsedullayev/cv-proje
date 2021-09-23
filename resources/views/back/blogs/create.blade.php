@extends('back\layouts\master')
@section('title','Blog Create')
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
              <form action="{{route('blog.created')}}" method="POST" enctype="multipart/form-data">
                   @include('back\layouts\partials\errors')
                @csrf
             
                <div class="card-body">
                <div class="form-group">
                    <label for="">Blog Name</label>
                    <input type="text" class="form-control" id="" placeholder="Blog Name" name="name">
                  </div>
                  <div class="form-group">
                    <label for="">Author</label>
                    <input type="text" class="form-control" id="" placeholder="Author" name="author">
                  </div>
                <div class="form-group">
                    <label for="">Date</label>
                    <input type="text" class="form-control" id="" placeholder="Date" name="date">
                  </div>
                  <div class="form-group">
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
              <textarea id="summernote" name="description" class="form-control">Description</textarea>
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
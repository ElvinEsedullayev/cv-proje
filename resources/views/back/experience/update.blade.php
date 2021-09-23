@extends('back\layouts\master')
@section('title','Experience Update')
@section('css')
   <link rel="stylesheet" href="{{asset('back')}}/plugins/summernote/summernote-bs4.min.css">
@endsection
@section('content')
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Experience Form</h3>
                <a href="{{route('yonetim.experience')}}" class="btn btn-danger btn-xs float-right"><i class="fas fa-undo"></i> Geri</a>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{route('experience.updated',$experience->id)}}" method="POST">
                   @include('back\layouts\partials\errors')
                   @include('back\layouts\partials\alert')
                @csrf
             
                <div class="card-body">
                <div class="form-group">
                    <label for="">Work</label>
                    <input type="text" class="form-control" id="" placeholder="Work" name="work" value="{{old('specialty',$experience->work)}}">
                  </div>
                  <div class="form-group">
                    <label for="">Factory</label>
                    <input type="text" class="form-control" id="" placeholder="Factory" name="factory" value="{{old('factory',$experience->factory)}}">
                  </div>
                  <div class="form-group">
                    <label for="">Date</label>
                    <input type="text" class="form-control" id="" placeholder="Date" name="date" value="{{old('date',$experience->date)}}">
                  </div>
                  <div class="form-group">
                    <label for="">Status</label>
                    <select name="status" id="" class="form-control">
                      <option @if($experience->status == 'passiv') selected @endif value="passiv">Passiv</option>
                      <option @if($experience->status == 'aktiv') selected @endif value="aktiv">Aktiv</option>
                    </select>
                  </div>
                <div class="form-group">
                <div class="card-body">
              <textarea id="summernote" name="description" class="form-control">{{old('description',$experience->description)}}</textarea>
              </div>
                </div>
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary btn-block">Update</button>
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
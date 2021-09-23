@extends('back\layouts\master')
@section('title','Portfolio Create')
@section('content')
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Portfolio Form</h3>
                <a href="{{route('yonetim.portfolio')}}" class="btn btn-danger btn-xs float-right"><i class="fas fa-undo"></i> Geri</a>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{route('portfolio.created')}}" method="POST" enctype="multipart/form-data">
                   @include('back\layouts\partials\errors')
                @csrf
             
                <div class="card-body">
                <div class="form-group">
                    <label for="">Project Name</label>
                    <input type="text" class="form-control" id="" placeholder="Project Name" name="project_name">
                  </div>
                  <div class="form-group">
                    <label for="">Author</label>
                    <input type="text" class="form-control" id="" placeholder="Author" name="author">
                  </div>
                <div class="form-group">
                    <label for="">Skill</label>
                    <input type="text" class="form-control" id="" placeholder="Skill" name="skill">
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
                </div>

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary btn-block">Create</button>
                </div>
              </form>
            </div>
@endsection
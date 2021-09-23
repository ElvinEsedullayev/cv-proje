@extends('back\layouts\master')
@section('title','Interest Create')
@section('content')
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Interest Form</h3>
                <a href="{{route('yonetim.interest')}}" class="btn btn-danger btn-xs float-right"><i class="fas fa-undo"></i> Geri</a>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{route('interest.created')}}" method="POST">
                   @include('back\layouts\partials\errors')
                   @include('back\layouts\partials\alert')
                @csrf
             
                <div class="card-body">
                <div class="form-group">
                    <label for="">Ad</label>
                    <input type="text" class="form-control" id="" placeholder="Ad" name="name">
                  </div>
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary btn-block">Create</button>
                </div>
              </form>
            </div>
@endsection

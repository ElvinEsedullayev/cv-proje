@extends('back\layouts\master')
@section('title','Skill Update')
@section('content')
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Skill Form</h3>
                <a href="{{route('yonetim.skill')}}" class="btn btn-danger btn-xs float-right"><i class="fas fa-undo"></i> Geri</a>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{route('skill.updated',$skill->id)}}" method="POST">
                   @include('back\layouts\partials\errors')
                   @include('back\layouts\partials\alert')
                @csrf
             
                <div class="card-body">
                <div class="form-group">
                    <label for="">Ad</label>
                    <input type="text" class="form-control" id="" placeholder="Ad" name="name" value="{{old('name',$skill->name)}}">
                  </div>
                <div class="form-group">
                    <label for="">Faiz</label>
                    <input type="text" class="form-control" id="" placeholder="Faiz" name="faiz" value="{{old('faiz',$skill->faiz)}}">
                  </div>
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary btn-block">Update</button>
                </div>
              </form>
            </div>
@endsection

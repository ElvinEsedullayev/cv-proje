@extends('back\layouts\master')
@section('title','User Create')
@section('content')
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Language Form</h3>
                <a href="{{route('yonetim.language')}}" class="btn btn-danger btn-xs float-right"><i class="fas fa-undo"></i> Geri</a>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{route('language.updated',$language->id)}}" method="POST">
                   @include('back\layouts\partials\errors')
                   @include('back\layouts\partials\alert')
                @csrf
             
                <div class="card-body">
                <div class="form-group">
                    <label for="">Ad</label>
                    <input type="text" class="form-control" id="" placeholder="Ad" name="name" value="{{old('name',$language->name)}}">
                  </div>
                  <div class="form-group">
                    <label for="">Seviyye</label>
                    <select name="seviyye" id="" class="form-control">
                      <option @if($language->seviyye == 'zeif') selected @endif value="zeif">Zeif</option>
                      <option @if($language->seviyye == 'orta') selected @endif  value="orta">Orta</option>
                      <option @if($language->seviyye == 'yuksek') selected @endif  value="yuksek">Yuksek</option>
                    </select>
                  </div>
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary btn-block">Create</button>
                </div>
              </form>
            </div>
@endsection

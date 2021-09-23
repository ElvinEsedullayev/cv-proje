@extends('back\layouts\master')
@section('title','Anasayfa')
@section('content')
@include('back\layouts\partials\alert')
       <div class="row">
          <div class="col-12 col-sm-6 col-md-3">
            <a href="{{route('yonetim.blog')}}">
            <div class="info-box">
              <span class="info-box-icon bg-info elevation-1"><i class="fab fa-blogger"></i></span>
              
              <div class="info-box-content">
                
                <span class="info-box-text">Blogs</span>
                <span class="info-box-number">
                  {{count($blog)}}
                  <small>eded</small>
                </span>
               
              </div>
               
            </div>
            </a>
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
            <a href="{{route('yonetim.portfolio')}}">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-photo-video"></i></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Portfolio</span>
                <span class="info-box-number">{{count($portfolio)}}</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            </a>
          </div>
          <!-- /.col -->

          <!-- fix for small devices only -->
          <div class="clearfix hidden-md-up"></div>

          <div class="col-12 col-sm-6 col-md-3">
            <a href="{{route('yonetim.skill')}}">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-success elevation-1"><i class="fas fa-poll-h"></i></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Bacariq</span>
                <span class="info-box-number">{{count($skill)}}</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            </a>
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
             <a href="{{route('yonetim.skill')}}">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-language"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Diller</span>
                <span class="info-box-number">{{count($language)}}</span>
              </div>
              <!-- /.info-box-content -->
            </div>
             </a>
          </div>
          <!-- /.col -->
        </div>
@endsection()
@section('footer')

@endsection
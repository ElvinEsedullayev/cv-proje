@extends('back\layouts\master')
@section('title','Profile')
@section('content')

    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">

            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                  <img class="profile-user-img img-fluid img-circle"
                       src="{{asset('uploads/users/'.$user->detail->image)}}"
                       alt="User profile picture">
                </div>

                <h3 class="profile-username text-center">{{$user->name}}</h3>

                <p class="text-muted text-center">{{$user->detail->specialty}} / Web Developer</p>
              </div>
            </div>
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">About Me</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <strong><i class="fas fa-book mr-1"></i> Education</strong>

                <p class="text-muted">
                  @foreach($education as $edu)
                 {{$edu->specialty}}
                 @endforeach
                </p>
                <hr>
                <strong><i class="fas fa-map-marker-alt mr-1"></i> Location</strong>
                <p class="text-muted">{{$user->detail->adress}}</p>
                <hr>
                <strong><i class="fas fa-pencil-alt mr-1"></i> Skills</strong>
                <p class="text-muted">
                  @foreach($skills as $skill)
                  <span class="tag tag-danger">{{$skill->name}}</span>
                  <div class="progress-bar bg-@if($skill->faiz <50)danger @elseif($skill->faiz ==50)warning @elseif($skill->faiz >50)success @endif" role="progressbar" style="width: {{$skill->faiz}}%" aria-valuenow="{{$skill->faiz}}" aria-valuemin="0" aria-valuemax="100">{{$skill->faiz}} %</div>
                  @endforeach
                </p>
              </div>
            </div>
          </div>




          <!-- /.col -->
          <div class="col-md-9"">
            <div class="card card-primary card-outline">
              <div class="card-header p-2">
                <ul class="nav nav-pills">
                  <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">About Me</a></li>
                </ul>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">
                  <div class="active tab-pane" id="activity">
                    <!-- Post -->
                    <div class="post">
                      <div class="user-block">
                        <img class="img-circle img-bordered-sm" src="{{asset('uploads/users/'.$user->detail->image)}}" alt="user image">
                        <span class="username">
                          <a href="{{route('home')}}" target="_blank">{{$user->name}}</a>
                  
                        </span>
                      </div>
                      <!-- /.user-block -->
                      <p>
                        {{$user->detail->about}}
                      </p>
                    </div>


                    <div class="post">
                      <div class="user-block">
                        <img class="img-circle img-bordered-sm" src="{{asset('uploads/users/'.$user->detail->image)}}" alt="User Image">
                        <span class="username">
                          <a href="#">{{$user->name}}</a>
                          <a href="#" class="float-right btn-tool"><i class="fas fa-times"></i></a>
                        </span>
                        <span class="description">Posted 5 photos - 5 days ago</span>
                      </div>
                      <!-- /.user-block -->
                      <div class="row mb-3">
                        <div class="col-sm-6">
                          <img class="img-fluid" src="{{asset('back')}}/dist/img/men.jpg" alt="Elvin Asadullayev" style="width: 400px; height: 250px;">
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-6">
                          <div class="row">
                            @foreach($portfolies as $port)
                            <div class="col-sm-6">
                            <a href="{{asset('uploads/portfolio/'.$port->image)}}" target="_blank">  <img class="img-fluid mb-3" src="{{asset('uploads/portfolio/'.$port->image)}}" alt="Photo"></a>
                            </div>
                            @endforeach
                            {{$portfolies->links()}}
                          </div>

                        </div>
                        
                      </div>

                    </div> 
                  </div>
                  
                </div>   
              </div> 
            </div>
          </div>

        </div>
      </div>
    </section>


@endsection()
@section('footer')

@endsection
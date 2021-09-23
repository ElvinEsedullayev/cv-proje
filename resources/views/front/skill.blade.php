@extends('front\layouts\master')
@section('title','Ana Səhifə')
@section('content')
           <section class="intro-section">
                <h2 class="section-title">Salam, {{$user->name}}!</h2>
                <p>{{$user->detail->about}}.</p>

            </section>
                        <section class="resume-section">
                <div class="row">
                    <div class="col-lg-12">

                        <h2 class="section-title">BACARIQ</h2>
                        <ul class="time-line">
                            @foreach($skills as $skill)
                            <li class="time-line-item">
                                
                                <h6 class="time-line-item-title">{{$skill->name}}</h6>
                               
                              <div class="progress">
                              <div class="progress-bar bg-@if($skill->faiz <50)danger @elseif($skill->faiz ==50)warning @elseif($skill->faiz >50)success @endif" role="progressbar" style="width: {{$skill->faiz}}%" aria-valuenow="{{$skill->faiz}}" aria-valuemin="0" aria-valuemax="100">{{$skill->faiz}} %</div>
                              </div>
                            </li>
                            @endforeach
                        </ul>
                    </div>
     
                </div>
            </section>

            <section class="testimonial-section">
                <div id="testimonialCarousel" class="testimonial-carousel carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        @foreach($user as $users)
                        <div class="carousel-item active">
                            <p class="testimonial-content">Web devoloper ürə istənilən iş üçün muraciət edə bilərsiniz.</p>
                            <img src="{{asset('front')}}/assets/images/men.jpg" alt="profile" class="testimonial-img">
                            <p class="testimonial-name">{{$user->name}}</p>
                        </div>
                        @endforeach
                    </div>
                </div>
            </section>

@endsection
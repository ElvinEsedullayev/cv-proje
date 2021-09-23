@extends('front\layouts\master')
@section('title','Ana Səhifə')
@section('content')
           <section class="intro-section">
                <h2 class="section-title">Salam, {{$user->name}}!</h2>
                <p>{{$user->detail->about}}.</p>

            </section>
                        <section class="resume-section">
                <div class="row">
                    <div class="col-lg-6">

                        <h2 class="section-title">TƏHSİL</h2>
                        <ul class="time-line">
                            @foreach($education as $edu)
                            <li class="time-line-item">
                                <span class="badge badge-primary">{{$edu->date}}</span>
                                <h6 class="time-line-item-title">{{$edu->specialty}}</h6>
                                <p class="time-line-item-subtitle">{{$edu->uni}}</p>
                                <p class="time-line-item-content">{{$edu->description}}</p>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="col-lg-6">
                        <h2 class="section-title">TƏCRÜBƏ</h2>
                        <ul class="time-line">
                            @foreach($experience as $exp)
                            <li class="time-line-item">
                                <span class="badge badge-primary">{{$exp->date}}</span>
                                <h6 class="time-line-item-title">{{$exp->work}}</h6>
                                <p class="time-line-item-subtitle">{{$exp->factory}}</p>
                                <p class="time-line-item-content">{{$exp->description}}</p>
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
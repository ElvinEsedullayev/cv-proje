@extends('front\layouts\master')
@section('title','Portfolio')
@section('content')
            <section class="portfolio-section">
                <h2 class="section-title">PORTFOLIO</h2>
                
                <div class="portfolio-wrapper">
                    @foreach($portfolies as $port)
                    <figure class="portfolio-item hover-box">
                       <a href="{{asset('uploads/portfolio/'.$port->image)}}" target="_blank"> <img src="{{asset('uploads/portfolio/'.$port->image)}}" alt="project" class="portfolio-item-img"></a>
                        <figcaption class="portfolio-item-details overlay">
                            <h5 class="portfolio-item-title">{{$port->project_name}}</h5>
                            <p class="portfolio-item-description">{{$port->author}}</p>
                        </figcaption>
                    </figure>
                    @endforeach
                </div>
                {{$portfolies->links()}}
            </section>
@endsection
@section('footer')
  <script src="{{asset('front')}}/assets/vendors/entry/jq.entry.min.js"></script>
@endsection
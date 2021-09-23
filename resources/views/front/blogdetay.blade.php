@extends('front\layouts\master')
@section('title','Portfolio')
@section('content')
            <section class="blog-section">
                <h2 class="section-title">SADE</h2>

                <div class="blog-posts-wrapper">    
                        <div class="col-md-12">
                          <img src="{{asset('uploads/blogs/'.$blog->image)}}" alt="news 1" class="blog-post-thumbnail" style="width: 100%; height: 500px;" >
                            <h5 class="blog-post-title">{{$blog->author}}</h5>
                          <p>{!! $blog->description !!}</p>
                        </div>
                        <p class="blog-post-meta ml-3">
                            <span class="post-published-date">{{$blog->date}}</span>

                        </p>
                
     
                </div>
         
            </section>
@endsection
@section('footer')
  <script src="{{asset('front')}}/assets/vendors/entry/jq.entry.min.js"></script>
@endsection
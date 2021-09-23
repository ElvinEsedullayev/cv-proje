@extends('front\layouts\master')
@section('title','Portfolio')
@section('content')
            <section class="blog-section">
                <h2 class="section-title">SADE STATUS</h2>

                <div class="blog-posts-wrapper">
                    @foreach($blogs as $blog)
                    <article class="blog-post">
                        <a href="{{route('blog.detay',$blog->id)}}" class="blog-post-link">
                           <a href="{{route('blog.detay',$blog->id)}}"> <img src="{{asset('uploads/blogs/'.$blog->image)}}" alt="news 1" class="blog-post-thumbnail" style="width: 250px; height: 150px;" ></a>
                            <h5 class="blog-post-title">{{$blog->author}}</h5>

                        </a>
                        <p class="blog-post-meta">
                            <span class="post-published-date">{{$blog->date}}</span>

                        </p>
                    </article>
                    @endforeach
                </div>
                {{$blogs->links()}}
            </section>
@endsection
@section('footer')
  <script src="{{asset('front')}}/assets/vendors/entry/jq.entry.min.js"></script>
@endsection
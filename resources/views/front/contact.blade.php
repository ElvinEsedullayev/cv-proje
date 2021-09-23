@extends('front\layouts\master')
@section('title','Portfolio')
@section('content')
            <section class="contact-section">
                <h2 class="section-title">ƏLAQƏ QURMAQ</h2>
                @include('front\layouts\partials\alert')
                @include('front\layouts\partials\errors')
                <p class="mb-4">Bir layihə, işimiz və ya başqa bir şey haqqında danışmaq istəyirsinizsə, bizimlə əlaqə saxlayın.</p>
                
                <div class="contact-cards-wrapper">
                    <div class="contact-card">
                        <h6 class="contact-card-title">BİZƏ ZƏNG EDİN</h6>
                        <p class="contact-card-content">+994 55 496 63 56 , +994 51 226 72 83</p>
                    </div>
                    <div class="contact-card">
                        <h6 class="contact-card-title">Bizim Email</h6>
                        <p class="contact-card-content">elvinesedulla@gmail.com</p>
                    </div>
                </div>

                <form action="{{route('send.message')}}" method="POST" class="contact-form">
                    @csrf
                    
                    <div class="form-group form-group-name">
                      <label for="name" class="sr-only">AD SOYAD</label>
                      <input type="text" name="name" id="name" class="form-control" placeholder="AD SOYAD">
                    </div>
                    <div class="form-group form-group-email">
                        <label for="email" class="sr-only">Email</label>
                        <input type="email" name="email" id="email" class="form-control" placeholder="EMAIL">
                    </div>
                    <div class="form-group">
                        <label for="message" class="sr-only">MESAJ</label>
                        <textarea name="message" id="message" class="form-control" placeholder="MESAJ" rows="5"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary form-submit-btn">MESAJ GÖNDƏR</button>
                </form>

            </section>
@endsection
@section('footer')
  <script src="{{asset('front')}}/assets/vendors/entry/jq.entry.min.js"></script>
@endsection
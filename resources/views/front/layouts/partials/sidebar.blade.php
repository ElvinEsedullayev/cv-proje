        <aside>
            <div class="profile-img-wrapper">
                <img src="{{asset('uploads/users/'.$user->detail->image)}}" alt="profile">
            </div>
            <h1 class="profile-name">{{$user->name}}</h1>
            <div class="text-center">
                <span class="badge badge-white badge-pill profile-designation">{{$user->detail->specialty}} / Web Developer </span>
            </div>
            <nav class="social-links">
                @foreach($socials as $social)
                <a href="{{$social->link}}" class="social-link" target="_blank"><i class="fab fa-{{$social->name}}"></i></a>
                @endforeach
            </nav>
            
            <div class="widget">
                <h5 class="widget-title">Şəxsi Məlumat</h5>
                <div class="widget-content">
                    <p>Doğum : {{$user->detail->birthday}}</p>
                    <p>Telefon : {{$user->detail->phone}}</p>
                    <p>Mail : {{$user->email}}</p>
                    <p>Adres : {{$user->detail->adress}}</p>
               
                </div>
            </div>
            <div class="widget card">
                <div class="card-body">
                    <div class="widget-content">
                        <h5 class="widget-title card-title">Dil</h5>
                        @foreach($language as $lang)
                        <p>{{$lang->name}} : {{$lang->seviyye}}</p>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="widget card">
                <div class="card-body">
                    <div class="widget-content">
                        <h5 class="widget-title card-title">Maraqlar</h5>
                        @foreach($interest as $int)
                        <p>{{$int->name}}</p>
                        @endforeach
                    </div>
                </div>
            </div>
        </aside>
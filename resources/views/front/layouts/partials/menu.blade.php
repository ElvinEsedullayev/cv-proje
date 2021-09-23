    <header>
        <button class="btn btn-white btn-share ml-auto mr-3 ml-md-0 mr-md-auto">
            </button>
        <nav style="float: right" class="collapsible-nav" id="collapsible-nav">
            <a href="{{route('home')}}" class="nav-link {{Route::is('home')? 'active' : ''}}">ANASAYFA</a>
            <a href="{{route('portfolio')}}" class="nav-link {{Route::is('portfolio')? 'active' : ''}}">PORTFOLIO</a>
            <a href="{{route('skill')}}" class="nav-link {{Route::is('skill')? 'active' : ''}}">BACARIQ</a>
            <a href="{{route('blog')}}" class="nav-link {{Route::is('blog')? 'active' : ''}}">BLOG</a>
            <a href="{{route('contact')}}" class="nav-link {{Route::is('contact')? 'active' : ''}}">CONTACT</a>
        </nav>
        <button class="btn btn-menu-toggle btn-white rounded-circle" data-toggle="collapsible-nav"
            data-target="collapsible-nav"><img src="{{asset('front')}}/assets/images/hamburger.svg" alt="hamburger"></button>
    </header>
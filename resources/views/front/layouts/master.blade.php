<!DOCTYPE html>
<html lang="{{config('app.locale')}}">
<head>
@include('front\layouts\partials\head')
@yield('css')
</head>
<body>
@include('front\layouts\partials\menu')
    <div class="content-wrapper">
@include('front\layouts\partials\sidebar')
        <main>
          @yield('content')

            <footer>Canlı @ <a href="{{route('home')}}" target="_blank" rel="noopener noreferrer">Cv Saytım</a>. Bütün Huquqlar Qorunur 2021</footer>
        </main>
    </div>
@include('front\layouts\partials\footer')
@yield('footer')
</body>

</html>
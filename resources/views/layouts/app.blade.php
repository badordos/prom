<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="{{$desc ?? 'Проминдустрия - производство и продажа металлоконструкций в Екатеринбурге'}}">
    <meta name="keywords" content="{{$desc ?? 'Проминдустрия - производство и продажа металлоконструкций в Екатеринбурге'}}">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta name="yandex-verification" content="{{env('YANDEX_VERIFY')}}" />

    <title>{{ $title ?? config('app.name', 'Laravel') }}</title>

    <!-- Yandex.Metrika counter -->
    <script type="text/javascript" >
        (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
            m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
        (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

        ym(68612425, "init", {
            clickmap:true,
            trackLinks:true,
            accurateTrackBounce:true,
            webvisor:true
        });
    </script>
    <noscript><div><img src="https://mc.yandex.ru/watch/68612425" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
    <!-- /Yandex.Metrika counter -->

    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i&display=swap"
          rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    {{--<link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">--}}
    <link href="{{ asset('css/magnific-popup.css') }}" rel="stylesheet">
    <link href="{{ asset('css/slicknav.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <!-- Favicon -->
    <link href="/img/favicon.ico" rel="shortcut icon"/>
</head>
<body>
<!-- Page Preloder -->
<div id="preloder">
    <div class="loader"></div>
</div>

<!-- Header section  -->
<header class="header-section clearfix">
    @if($message = session('message'))
        <div class="header-top">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <p>{{$message}}</p>
                    </div>
                </div>
            </div>
        </div>
    @endif
    @include('components.menu')
</header>
<!-- Header section end  -->

<main class="py-4">
    @yield('content')
</main>

<!-- Footer section -->
<footer class="footer-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="footer-widget about-widget">
                    <img src="/img/logo-alt.png" alt="проминдустрия логотип">
                    {{--<p>Lorem ipsum dolor sit amet, consec-tetur adipiscing elit. Quisque orci purus, sodales in est--}}
                    {{--quis, blandit sollicitudin est. Nam ornare ipsum ac accumsan auctor. Donec consequat arcu et--}}
                    {{--commodo interdum. </p>--}}
                    {{--<div class="footer-social">--}}
                    {{--<a href=""><i class="fa fa-facebook"></i></a>--}}
                    {{--<a href=""><i class="fa fa-twitter"></i></a>--}}
                    {{--<a href=""><i class="fa fa-dribbble"></i></a>--}}
                    {{--<a href=""><i class="fa fa-behance"></i></a>--}}
                    {{--</div>--}}
                </div>
            </div>
            {{--<div class="col-lg-3 col-md-6 col-sm-6">--}}
            {{--<div class="footer-widget">--}}
            {{--<h2 class="fw-title">Useful Resources</h2>--}}
            {{--<ul>--}}
            {{--<li><a href="">Jobs Vacancies</a></li>--}}
            {{--<li><a href="">Client Testimonials</a></li>--}}
            {{--<li><a href="">Green Energy</a></li>--}}
            {{--<li><a href="">Chemical Research</a></li>--}}
            {{--<li><a href="">Oil Extractions</a></li>--}}
            {{--<li><a href="">About our Work</a></li>--}}
            {{--</ul>--}}
            {{--</div>--}}
            {{--</div>--}}
            {{--<div class="col-lg-3 col-md-6 col-sm-6">--}}
            {{--<div class="footer-widget">--}}
            {{--<h2 class="fw-title">Our Solutions</h2>--}}
            {{--<ul>--}}
            {{--<li><a href="">Metal Industry</a></li>--}}
            {{--<li><a href="">Agricultural Engineering</a></li>--}}
            {{--<li><a href="">Green Energy</a></li>--}}
            {{--<li><a href="">Chemical Research</a></li>--}}
            {{--<li><a href="">Oil Extractions</a></li>--}}
            {{--<li><a href="">Manufactoring</a></li>--}}
            {{--</ul>--}}
            {{--</div>--}}
            {{--</div>--}}
            <div class="col-lg-3 col-md-6 col-sm-7">
                <div class="footer-widget">
                    <h2 class="fw-title">Контакты</h2>
                    <div class="footer-info-box">
                        <div class="fib-icon">
                            <img src="/img/icons/map-marker.png" alt="" class="">
                        </div>
                        <div class="fib-text">
                            <p>Россия, г.Екатеринбург<br>Пер. Дизельный 33, офис 75</p>
                        </div>
                    </div>
                    <div class="footer-info-box">
                        <div class="fib-icon">
                            <img src="/img/icons/phone.png" alt="" class="">
                        </div>
                        <div class="fib-text">
                            <p>+7 (343) 207-73-87
                                <br>+7 (992) 332-22-68<br>
                                <a href="mailto:promindustria2019@mail.ru">Promindustria2019@mail.ru</a>
                            </p>
                        </div>
                    </div>
                    {{--<form class="footer-search">--}}
                    {{--<input type="text" placeholder="Search">--}}
                    {{--<button><i class="fa fa-search"></i></button>--}}
                    {{--</form>--}}
                </div>
            </div>
        </div>
    </div>
    {{--<div class="footer-buttom">--}}
        {{--<div class="container">--}}
            {{--<div class="row">--}}
                {{--<div class="col-lg-4 order-2 order-lg-1 p-0">--}}
                    {{--<div class="copyright">--}}
                        {{--<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->--}}
                        {{--Copyright &copy;<script>document.write(new Date().getFullYear());</script>--}}
                        {{--All rights reserved | This template is made with <i class="fa fa-heart-o"--}}
                                                                            {{--aria-hidden="true"></i> by <a--}}
                            {{--href="https://colorlib.com" target="_blank">Colorlib</a>--}}
                        {{--<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></div>--}}
                {{--</div>--}}
                {{--<div class="col-lg-7 order-1 order-lg-2 p-0">--}}
                {{--<ul class="footer-menu">--}}
                {{--<li class="active"><a href="index.html">Home</a></li>--}}
                {{--<li><a href="about.html">About us</a></li>--}}
                {{--<li><a href="solutions.html">Solutions</a></li>--}}
                {{--<li><a href="blog.html">Blog</a></li>--}}
                {{--<li><a href="contact.html">Contact</a></li>--}}
                {{--</ul>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
</footer>
<!-- Footer section end -->

<!-- Search model -->
<div class="search-model">
    <div class="h-100 d-flex align-items-center justify-content-center">
        <div class="search-close-switch">+</div>
        <form class="search-model-form">
            <input type="text" id="search-input" placeholder="Search here.....">
        </form>
    </div>
</div>
<!-- Search model end -->

<!-- Scripts -->
<script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/jquery.slicknav.min.js') }}"></script>
<script src="{{ asset('js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('js/circle-progress.min.js') }}"></script>
<script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('js/main.js') }}"></script>
<script src="https://kit.fontawesome.com/b3e3d9863b.js" crossorigin="anonymous"></script>


</body>
</html>

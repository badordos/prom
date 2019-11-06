<div class="site-navbar">
    <!-- Logo -->
    <a href="index.html" class="site-logo">
        <img src="img/logo.png" alt="">
    </a>
    <div class="header-right">
        <div class="header-info-box">
            <div class="hib-icon">
                <img src="img/icons/phone.png" alt="" class="">
            </div>
            <div class="hib-text">
                <h6>+546 990221 123</h6>
                <p>contact@industryalinc.com</p>
            </div>
        </div>
        <div class="header-info-box">
            <div class="hib-icon">
                <img src="img/icons/map-marker.png" alt="" class="">
            </div>
            <div class="hib-text">
                <h6>Main Str, no 23</h6>
                <p>NY, New York PK 23589</p>
            </div>
        </div>
        <button class="search-switch"><i class="fa fa-search"></i></button>
    </div>
    <!-- Menu -->
    <nav class="site-nav-menu">
        <ul>
            <li @if($route == 'home') class="active" @endif><a href="{{route('home')}}">Главная</a></li>
            <li @if($route == 'catalog') class="active" @endif><a href="{{route('catalog')}}">Каталог</a></li>
            <li @if($route == 'about') class="active" @endif><a href="{{route('about')}}">О нас</a></li>
            <li @if($route == 'contact') class="active" @endif><a href="{{route('contact')}}">Контакты</a></li>
        </ul>
    </nav>
</div>
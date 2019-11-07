<div class="site-navbar">
    <!-- Logo -->
    <a href="{{route('home')}}" class="site-logo">
        <img src="img/logo.png" alt="проминдустрия логотип">
    </a>
    <div class="header-right">
        <div class="header-info-box">
            <div class="hib-icon">
                <img src="img/icons/phone.png" alt="" class="">
            </div>
            <div class="hib-text">
                <h6>+7(343)207-73-87</h6>
                <h6>+7(992)332-22-68</h6>
                <p>Promindustria2019@mail.ru</p>
            </div>
        </div>
        <div class="header-info-box">
            <div class="hib-icon">
                <img src="img/icons/map-marker.png" alt="" class="">
            </div>
            <div class="hib-text">
                <h6>Пер. Дизельный 33, офис 75</h6>
                <p>Россия, г.Екатеринбург</p>
            </div>
        </div>
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
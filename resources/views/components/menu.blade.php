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
                <h6>+7 (343) 207-73-87 | +7 (992) 332-22-68</h6>
                <p><a href="mailto:promindustria2019@mail.ru">Promindustria2019@mail.ru</a></p>
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
            <li @if(isset($route) && $route == 'home') class="active" @endif><a href="{{route('home')}}">Главная</a></li>
            <li @if(isset($route) && $route == 'catalog') class="active" @endif><a href="{{route('catalog')}}">Каталог</a></li>
            {{--<li @if($route == 'about') class="active" @endif><a href="{{route('about')}}">О нас</a></li>--}}
            <li @if(isset($route) && $route == 'contact') class="active" @endif><a href="{{route('contact')}}">Контакты</a></li>
            @if(auth()->check() && auth()->user()->admin)<li><a href="{{route('admin.index')}}">Админ</a></li>@endif
        </ul>
    </nav>
</div>

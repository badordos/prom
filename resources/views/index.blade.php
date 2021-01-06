@extends('layouts.app')

@section('content')
    <!-- Hero section  -->
    <section class="hero-section">
        <div class="hero-slider owl-carousel">
            <div class="hero-item set-bg" data-setbg="img/hero-slider/metas.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-8">
                            <h2><span>Производство</span>
                                <span>металлоконструкций</span>
                            </h2>
                            <a href="tel:+79923322268" class="site-btn sb-white mr-4 mb-3"><i class="fas fa-phone"></i>
                                Позвонить</a>
                            <a href="{{route('contact')}}" class="site-btn sb-dark"><i class="far fa-envelope"></i>
                                Оставить заявку</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hero-item set-bg" data-setbg="img/hero-slider/metas.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-8">
                            <h2><span>Проминдустрия</span>
                                <span>Екатеринбург</span>
                            </h2>
                            <a href="tel:+79923322268" class="site-btn sb-white mr-4 mb-3"><i class="fas fa-phone"></i>
                                Позвонить</a>
                            <a href="{{route('contact')}}" class="site-btn sb-dark"><i class="far fa-envelope"></i>
                                Оставить заявку</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero section end  -->

    <!-- Services section  -->
    <section class="services-section">
        <div class="services-warp">
            <div class="container">
                <div class="row">
                    @foreach($types as $typesGroup)
                        @foreach($typesGroup as $type)
                            <div class="@if($typesGroup->count() == 4) col-lg-3
                                        @elseif($typesGroup->count() == 3) col-lg-4
                                        @elseif($typesGroup->count() == 2) col-lg-6
                                        @else col-lg-12
                                        @endif
                                        col-md-6">
                                <div class="service-item">
                                    <div class="si-head">
                                        <div class="si-icon">
                                            <img src="{{$type->image}}" alt="">
                                        </div>
                                        <h5>{{$type->title}}</h5>
                                    </div>
                                    <p>{{$type->desc}}</p>
                                </div>
                            </div>
                        @endforeach
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <!-- Services section end  -->

    <!-- Features section   -->
    {{--<section class="features-section spad set-bg" data-setbg="img/features-bg.jpg">--}}
    {{--<div class="container">--}}
    {{--<div class="row">--}}
    {{--<div class="col-lg-4 col-md-6">--}}
    {{--<div class="feature-box">--}}
    {{--<img src="img/features/1.jpg" alt="">--}}
    {{--<div class="fb-text">--}}
    {{--<h5>Chemichal Reserach</h5>--}}
    {{--<p>Lorem ipsum dolor sit amet, consectetur adipi-scing elit. Quisque orci purus, sodales in est quis, blandit sollicitudin est. Nam ornare ipsum ac accumsan auctor. </p>--}}
    {{--<a href="" class="fb-more-btn">Read More</a>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="col-lg-4 col-md-6">--}}
    {{--<div class="feature-box">--}}
    {{--<img src="img/features/2.jpg" alt="">--}}
    {{--<div class="fb-text">--}}
    {{--<h5>Engineering</h5>--}}
    {{--<p>Lorem ipsum dolor sit amet, consectetur adipi-scing elit. Quisque orci purus, sodales in est quis, blandit sollicitudin est. Nam ornare ipsum ac accumsan auctor. </p>--}}
    {{--<a href="" class="fb-more-btn">Read More</a>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="col-lg-4 col-md-12">--}}
    {{--<div class="feature-box">--}}
    {{--<img src="img/features/3.jpg" alt="">--}}
    {{--<div class="fb-text">--}}
    {{--<h5>Manufactoring</h5>--}}
    {{--<p>Lorem ipsum dolor sit amet, consectetur adipi-scing elit. Quisque orci purus, sodales in est quis, blandit sollicitudin est. Nam ornare ipsum ac accumsan auctor. </p>--}}
    {{--<a href="" class="fb-more-btn">Read More</a>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</section>--}}
    <!-- Features section end  -->

    <!-- Testimonial section -->
    <section class="testimonial-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 p-0">
                    <div class="testimonial-bg set-bg" data-setbg="img/piles.jpg"></div>
                </div>
                <div class="col-lg-6 p-0">
                    <div class="testimonial-box">
                        <div class="testi-box-warp">
                            <h2>Винтовые сваи</h2>
                            <div>
                                <div class="testimonial">
                                    <p>Фундамент на винтовых сваях-это современно и удобно, он может быть возведен
                                        практически в любом месте. Это быстро, качественно и надежно. Монтаж можно
                                        начинать в любое время года.
                                        Фундамент на винтовых сваях не требует сложного проектирования, применим к
                                        любому проекту здания, и может быть построен за 2 дня.
                                    </p>
                                    <a href="{{route('catalog', ['type_id' => 4])}}"
                                       class="site-btn sb-white mr-4 mb-3">Посмотреть в каталоге</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="testimonial-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 p-0">
                    <div class="testimonial-box">
                        <div class="testi-box-warp">
                            <h2>Токарно-фрезерные работы</h2>
                            <div>
                                <div class="testimonial">
                                    <p>Заказ токарно-фрезерных работ актуален для получения деталей сложной
                                        геометрической формы.
                                        Токарно-фрезерные работы по металлу востребованы на любом предприятии
                                        машиностроения, производства металлоизделий или по ремонту и обслуживанию
                                        транспорта.</p>
                                    <a href="{{route('catalog', ['type_id' => 9])}}"
                                       class="site-btn sb-white mr-4 mb-3">Посмотреть в каталоге</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 p-0">
                    <div class="testimonial-bg set-bg" data-setbg="img/rezby1.jpg"></div>
                </div>
            </div>
        </div>
    </section>
    <section class="testimonial-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 p-0">
                    <div class="testimonial-bg set-bg" data-setbg="img/setka.jpg"></div>
                </div>
                <div class="col-lg-6 p-0">
                    <div class="testimonial-box">
                        <div class="testi-box-warp">
                            <h2>Сварные арматурные сетки</h2>
                            <div>
                                <div class="testimonial">
                                    <p>Cварная сетка получила широкую популярность и применение в строительстве и
                                        промышленности, сельском хозяйстве. Сетка сварная удобна при крепеже, имеет
                                        низкий удельный вес. Изделия и конструкции с применением сварной сетки доступны
                                        по цене, легки в монтаже, безопасны в пользовании.</p>
                                    <a href="{{route('catalog', ['type_id' => 5])}}"
                                       class="site-btn sb-white mr-4 mb-3">Посмотреть в каталоге</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="testimonial-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 p-0">
                    <div class="testimonial-box">
                        <div class="testi-box-warp">
                            <h2>
                                Перильные ограждения
                                <br>
                                Дорожные отбойники
                            </h2>
                            <div>
                                <div class="testimonial">
                                    <p>Перильные ограждения для дорог предназначены для разграничения пешеходной зоны и
                                        проезжей части дорог, а так же для создания искусственных препятствий,
                                        препятствующих пересечению пешеходами дороги в неположенном месте.
                                        Дорожные ограждения барьерного типа — это элемент обеспечения пассивной
                                        безопасности автомобильных дорог.</p>
                                    <a href="{{route('catalog', ['type_id' => 6])}}"
                                       class="site-btn sb-white mr-4 mb-3">Посмотреть в каталоге</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 p-0">
                    <div class="testimonial-bg set-bg" data-setbg="img/ogr.jpg"></div>
                </div>
            </div>
        </div>
    </section>
    <section class="testimonial-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 p-0">
                    <div class="testimonial-bg set-bg" data-setbg="img/rmp.jpg"></div>
                </div>
                <div class="col-lg-6 p-0">
                    <div class="testimonial-box">
                        <div class="testi-box-warp">
                            <h2>
                                Рамы РМП
                            </h2>
                            <div>
                                <div class="testimonial">
                                    <p>Конструкции данного типа предназначены для размещения на их плоскости под прямым
                                        углом дорожных знаков, светосигнального оборудования, светофоров, приборов фото
                                        и видеофиксации, рекламных конструкций. Прямой угол крепления конструкций
                                        обеспечивает хороший обзор всем участникам движения.</p>
                                    <a href="{{route('catalog', ['type_id' => 7])}}"
                                       class="site-btn sb-white mr-4 mb-3">Посмотреть в каталоге</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="testimonial-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 p-0">
                    <div class="testimonial-box">
                        <div class="testi-box-warp">
                            <h2>
                                Г-образные светофорные опоры
                            </h2>
                            <div>
                                <div class="testimonial">
                                    <p>Г-образная опора для светофоров дорожных знаков используется для установки
                                        различных средств регулирования и организации движения на трассах, автострадах,
                                        прилегающей к дороге территории, подъездных путях, а также рядом с пешеходными
                                        переходами, которые не оборудованы специальными барьерными ограждениями. </p>
                                    <a href="{{route('catalog', ['type_id' => 1])}}"
                                       class="site-btn sb-white mr-4 mb-3">Посмотреть в каталоге</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 p-0">
                    <div class="testimonial-bg set-bg" data-setbg="img/гобр.jpg"></div>
                </div>
            </div>
        </div>
    </section>
    <section class="testimonial-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 p-0">
                    <div class="testimonial-bg set-bg" data-setbg="img/ost_main.jpg"></div>
                </div>
                <div class="col-lg-6 p-0">
                    <div class="testimonial-box">
                        <div class="testi-box-warp">
                            <h2>
                                Опоры освещения
                                <br>
                                Фундаменты и кронштейны
                            </h2>
                            <div>
                                <div class="testimonial">
                                    <p>Пpи peшeнии зaдaчи пo нapужнoму ocвeщeнию нe oбoйтиcь бeз ocвeтитeльныx oпop,
                                        oбecпeчивaющиx уcтaнoвку cвeтильникoв и пpoжeктopoв нa тpeбуeмoй выcoтe.
                                        Haибoльшee pacпpocтpaнeниe пoлучили мeтaлличecкиe oпopы ocвeщeния. Иx cтoимocть
                                        и пpeимущecтвa cбaлaнcиpoвaны, a шиpoкий выбop пapaмeтpoв нe oгpaничивaeт
                                        вoзмoжнocти пpимeнeния.</p>
                                    <a href="{{route('catalog', ['type_id' => 1])}}"
                                       class="site-btn sb-white mr-4 mb-3">Посмотреть в каталоге</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- Testimonial section end  -->

    <!-- Clients section  -->
    {{--    <section class="clients-section spad">--}}
    {{--        <div class="container">--}}
    {{--            <div class="client-text">--}}
    {{--                <h2>Наши партнеры</h2>--}}
    {{--            </div>--}}
    {{--            <div class="single-brand d-inline-block">--}}
    {{--                <a href="http://www.1advance.ru/" class="site-logo">--}}
    {{--                    <img src="img/advlogo.png" target="_blank" alt="Адванс логотип">--}}
    {{--                </a>--}}
    {{--            </div>--}}
    {{--            <div class="single-brand d-inline-block">--}}
    {{--                <a href="#" class="site-logo">--}}
    {{--                    <img src="img/rmglogo.png" target="_blank" alt="РусМетГрупп логотип">--}}
    {{--                </a>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </section>--}}
    <!-- Clients section end  -->


    <!-- Call to action section  -->
    {{--    <section class="cta-section">--}}
    {{--        <div class="container">--}}
    {{--            <div class="row">--}}
    {{--                <div class="col-lg-9 d-flex align-items-center">--}}
    {{--                    <h2>We produce or supply Goods, Services, or Sources</h2>--}}
    {{--                </div>--}}
    {{--                <div class="col-lg-3 text-lg-right" >--}}
    {{--                    <a href="#" class="site-btn sb-dark">contact us</a>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </section>--}}
    <!-- Call to action section end  -->

    <!-- Video section  -->
    {{--<section class="video-section spad" >--}}
    {{--<div class="container">--}}
    {{--<div class="row">--}}
    {{--<div class="col-lg-6">--}}
    {{--<div class="video-text">--}}
    {{--<h2>We produce or supply Goods, & Services</h2>--}}
    {{--<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque orci purus, sodales in est quis, blandit sollicitudin est. Nam ornare ipsum ac accumsan auctor. Donec consequat arcu et commodo interdum. Vivamus posuere lorem lacus.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque orci purus, sodales in est quis, blandit sollicitudin est. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque orci purus, sodales in est quis, blandit sollicitudin est. Nam ornare ipsum ac accumsan auctor. Donec consequat arcu et commodo interdum. Vivamus posuere lorem lacus.Lorem ipsum dolor sit amet, consectetur.</p>--}}
    {{--<a href="#" class="site-btn">contact us</a>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="col-lg-6">--}}
    {{--<div class="video-box set-bg" data-setbg="img/video-box.jpg">--}}
    {{--<a href="https://www.youtube.com/watch?v=wbnaHgSttVo" class="video-popup">--}}
    {{--<i class="fa fa-play"></i>--}}
    {{--</a>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</section>--}}
    <!-- Video section end  -->
@endsection

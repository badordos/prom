@extends('layouts.app')

@section('content')
    <!-- Hero section  -->
    <section class="hero-section">
        <div class="hero-slider owl-carousel">
            {{--<div class="hero-item set-bg" data-setbg="img/hero-slider/1.jpg">--}}
                {{--<div class="container">--}}
                    {{--<div class="row">--}}
                        {{--<div class="col-xl-8">--}}
                            {{--<h2><span>Производство</span>--}}
                                {{--<span>металлоконструкций</span>--}}
                            {{--</h2>--}}
                            {{--<a href="tel:+79326161120" class="site-btn sb-white mr-4 mb-3"><i class="fas fa-phone"></i> Позвонить</a>--}}
                            {{--<a href="{{route('contact')}}" class="site-btn sb-dark"><i class="far fa-envelope"></i> Оставить заявку</a>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="hero-item set-bg" data-setbg="img/hero-slider/2.jpg">--}}
                {{--<div class="container">--}}
                    {{--<div class="row">--}}
                        {{--<div class="col-xl-8">--}}
                            {{--<h2><span>Продажа</span>--}}
{{--                                <span>& Energy</span><span>Industry</span>--}}
                            {{--</h2>--}}
                            {{--<a href="tel:+79326161120" class="site-btn sb-white mr-4 mb-3"><i class="fas fa-phone"></i> Позвонить</a>--}}
                            {{--<a href="{{route('contact')}}" class="site-btn sb-dark"><i class="far fa-envelope"></i> Оставить заявку</a>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
            <div class="hero-item set-bg" data-setbg="img/hero-slider/metas.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-8">
                            <h2><span>Производство</span>
                                <span>металлоконструкций</span>
                            </h2>
                            <a href="tel:+79326161120" class="site-btn sb-white mr-4 mb-3"><i class="fas fa-phone"></i> Позвонить</a>
                            <a href="{{route('contact')}}" class="site-btn sb-dark"><i class="far fa-envelope"></i> Оставить заявку</a>
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
                    <div class="col-lg-4 col-md-6">
                        <div class="service-item">
                            <div class="si-head">
                                <div class="si-icon">
                                    <img src="img/icons/опора.png" alt="">
                                </div>
                                <h5>Опоры освещения</h5>
                            </div>
                            <p>Металлические опоры освещения для благоустройства придомовых территорий, дорог, переходов и парковых зон.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="service-item">
                            <div class="si-head">
                                <div class="si-icon">
                                    <img src="img/icons/фундамент.png" alt="закладная деталь фундамента">
                                </div>
                                <h5>Фундаменты</h5>
                            </div>
                            <p>Закладные детали фундамента для опор освещения. Трубные, консольные, анкерные и выносные фундаменты.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="service-item">
                            <div class="si-head">
                                <div class="si-icon">
                                    <img src="img/icons/кронштейн.png" alt="кронштейн освещения">
                                </div>
                                <h5>Кронштейны</h5>
                            </div>
                            <p>Кронштейны освещения устанавливаются на опоры освещения или на стены или другие проектируемые поверхности. </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="service-item">
                            <div class="si-head">
                                <div class="si-icon">
                                    <img src="img/icons/токарные.png" alt="">
                                </div>
                                <h5>Токарно-фрезерные работы</h5>
                            </div>
                            <p>Изготовление деталей, инструмента и оснастки из стандартного перечня и по чертежам заказчика</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="service-item">
                            <div class="si-head">
                                <div class="si-icon">
                                    <img src="img/icons/свая.png" alt="свая винтовая">
                                </div>
                                <h5>Винтовые сваи</h5>
                            </div>
                            <p>Заглубляемые в грунт методом завинчивания в сочетании с вдавливанием сваи для промышленого и гражданского строительства.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="service-item">
                            <div class="si-head">
                                <div class="si-icon">
                                    <img src="img/icons/сетка.png" alt="">
                                </div>
                                <h5>Сварные арматурные и кладочные сетки</h5>
                            </div>
                            <p>Предназначены для армирования железобетонных конструкций и увеличение прочности кирпичной кладки.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Services section end  -->

    <!-- Features section   -->
{{--    <section class="features-section spad set-bg" data-setbg="img/features-bg.jpg">--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="col-lg-4 col-md-6">--}}
{{--                    <div class="feature-box">--}}
{{--                        <img src="img/features/1.jpg" alt="">--}}
{{--                        <div class="fb-text">--}}
{{--                            <h5>Chemichal Reserach</h5>--}}
{{--                            <p>Lorem ipsum dolor sit amet, consectetur adipi-scing elit. Quisque orci purus, sodales in est quis, blandit sollicitudin est. Nam ornare ipsum ac accumsan auctor. </p>--}}
{{--                            <a href="" class="fb-more-btn">Read More</a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-4 col-md-6">--}}
{{--                    <div class="feature-box">--}}
{{--                        <img src="img/features/2.jpg" alt="">--}}
{{--                        <div class="fb-text">--}}
{{--                            <h5>Engineering</h5>--}}
{{--                            <p>Lorem ipsum dolor sit amet, consectetur adipi-scing elit. Quisque orci purus, sodales in est quis, blandit sollicitudin est. Nam ornare ipsum ac accumsan auctor. </p>--}}
{{--                            <a href="" class="fb-more-btn">Read More</a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-4 col-md-12">--}}
{{--                    <div class="feature-box">--}}
{{--                        <img src="img/features/3.jpg" alt="">--}}
{{--                        <div class="fb-text">--}}
{{--                            <h5>Manufactoring</h5>--}}
{{--                            <p>Lorem ipsum dolor sit amet, consectetur adipi-scing elit. Quisque orci purus, sodales in est quis, blandit sollicitudin est. Nam ornare ipsum ac accumsan auctor. </p>--}}
{{--                            <a href="" class="fb-more-btn">Read More</a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}
    <!-- Features section end  -->


    <!-- Clients section  -->
{{--    <section class="clients-section spad">--}}
{{--        <div class="container">--}}
{{--            <div class="client-text">--}}
{{--                <h2>A group of productive enterprises that produce or supply Goods, Services, or Sources of Income</h2>--}}
{{--                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque orci purus, sodales in est quis, blandit sollicitudin est. Nam ornare ipsum ac accumsan auctor. Donec consequat arcu et commodo interdum. Vivamus posuere lorem lacus.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque orci purus, sodales in est quis, blandit sollicitudin est.</p>--}}
{{--            </div>--}}
{{--            <div id="client-carousel" class="client-slider owl-carousel">--}}
{{--                <div class="single-brand">--}}
{{--                    <a href="#">--}}
{{--                        <img src="img/clients/1.png" alt="">--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--                <div class="single-brand">--}}
{{--                    <a href="#">--}}
{{--                        <img src="img/clients/2.png" alt="">--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--                <div class="single-brand">--}}
{{--                    <a href="#">--}}
{{--                        <img src="img/clients/3.png" alt="">--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--                <div class="single-brand">--}}
{{--                    <a href="#">--}}
{{--                        <img src="img/clients/4.png" alt="">--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--                <div class="single-brand">--}}
{{--                    <a href="#">--}}
{{--                        <img src="img/clients/5.png" alt="">--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}
    <!-- Clients section end  -->


    <!-- Testimonial section -->
    {{--<section class="testimonial-section">--}}
        {{--<div class="container-fluid">--}}
            {{--<div class="row">--}}
                {{--<div class="col-lg-6 p-0">--}}
                    {{--<div class="testimonial-bg set-bg" data-setbg="img/testimonial-bg.jpg"></div>--}}
                {{--</div>--}}
                {{--<div class="col-lg-6 p-0">--}}
                    {{--<div class="testimonial-box">--}}
                        {{--<div class="testi-box-warp">--}}
                            {{--<h2>Дорожные металлоконструкции</h2>--}}
                            {{--<div>--}}
                                {{--<div class="testimonial">--}}
                                    {{--<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque orci purus, sodales in est quis, blandit sollicitudin est. Nam ornare ipsum ac accumsan auctor. Donec consequat arcu et commodo interdum. Vivamus posuere lorem lacus.Lorem ipsum dolor sit amet, consecte-tur adipiscing elit. Quisque orci purus, sodales in est quis, blandit sollicitudin est.</p>--}}
                                    {{--<img src="img/testimonial-thumb.jpg" alt="" class="testi-thumb">--}}
                                    {{--<div class="testi-info">--}}
                                        {{--<h5>Michael Smith</h5>--}}
                                        {{--<span>CEO Industrial INC</span>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</section>--}}
    {{--<section class="testimonial-section">--}}
        {{--<div class="container-fluid">--}}
            {{--<div class="row">--}}
                {{--<div class="col-lg-6 p-0">--}}
                    {{--<div class="testimonial-box">--}}
                        {{--<div class="testi-box-warp">--}}
                            {{--<h2>Дорожные металлоконструкции</h2>--}}
                            {{--<div>--}}
                                {{--<div class="testimonial">--}}
                                    {{--<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque orci purus, sodales in est quis, blandit sollicitudin est. Nam ornare ipsum ac accumsan auctor. Donec consequat arcu et commodo interdum. Vivamus posuere lorem lacus.Lorem ipsum dolor sit amet, consecte-tur adipiscing elit. Quisque orci purus, sodales in est quis, blandit sollicitudin est.</p>--}}
                                    {{--<img src="img/testimonial-thumb.jpg" alt="" class="testi-thumb">--}}
                                    {{--<div class="testi-info">--}}
                                        {{--<h5>Michael Smith</h5>--}}
                                        {{--<span>CEO Industrial INC</span>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="col-lg-6 p-0">--}}
                    {{--<div class="testimonial-bg set-bg" data-setbg="img/testimonial-bg.jpg"></div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</section>    --}}
    <!-- Testimonial section end  -->


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

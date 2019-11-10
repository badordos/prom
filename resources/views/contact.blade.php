@extends('layouts.app')

@section('content')

    <!-- Contact section   -->
    <section class="contact-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="contact-text">
                        <h2>Оставить заявку</h2>
                        <p>Воспользуйтесь формой связи и оставьте заявку по интересующему Вас вопросу. Наш менеджер свяжется с вами в самое ближайшее время!</p>
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
                </div>
                <div class="col-lg-8">
                    <form method="post" action="{{route('callback')}}" class="contact-form">
                        @csrf
                        <div class="row">
                            <div class="col-lg-6">
                                <input type="text" name="name" placeholder="Ваше имя">
                            </div>
                            <div class="col-lg-6">
                                <input type="email" name="email" placeholder="Ваша почта">
                            </div>
                            <div class="col-lg-4">
                            </div>
                            <div class="col-lg-12">
                                <input type="text" name="subject" placeholder="Заголовок">
                                <textarea class="text-msg" placeholder="Сообщение" name="message"></textarea>
                                {!! app('captcha')->display() !!}
                                <button class="site-btn" type="submit">Отправить</button>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact section end  -->

    <!-- Page top section  -->
    {{--<section class="page-top-section set-bg" data-setbg="img/page-top-bg/4.jpg">--}}
        {{--<div class="container">--}}
            {{--<div class="row">--}}
                {{--<div class="col-lg-7">--}}
                    {{--<h2>Contact</h2>--}}
                    {{--<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque orci purus, sodales in est quis,--}}
                        {{--blandit sollicitudin est. Nam ornare ipsum ac accumsan auctor. </p>--}}
                    {{--<a href="" class="site-btn">Say hello</a>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</section>--}}
    <!-- Page top section end  -->

    <!-- Map section  -->
    <div class="map-section">
        <div class="container">
            <div class="map-info">
                <img src="img/logo.png" alt="">
                <p>Свяжитесь с нами</p>
            </div>
        </div>
        <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2186.7157804036488!2d60.59834231597004!3d56.76501698083616!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x43c168ea687ee0eb%3A0xdceb9b7275bcfcd5!2z0JTQuNC30LXQu9GM0L3Ri9C5INC_0LXRgC4sIDMzLCDQldC60LDRgtC10YDQuNC90LHRg9GA0LMsINCh0LLQtdGA0LTQu9C-0LLRgdC60LDRjyDQvtCx0LsuLCA2MjAwODU!5e0!3m2!1sru!2sru!4v1573375425466!5m2!1sru!2sru"
                    style="border:0" allowfullscreen></iframe>
        </div>
    </div>
    <!-- Map section end  -->



    <!-- Call to action section  -->
    {{--<section class="cta-section">--}}
        {{--<div class="container">--}}
            {{--<div class="row">--}}
                {{--<div class="col-lg-9 d-flex align-items-center">--}}
                    {{--<h2>We produce or supply Goods, Services, or Sources</h2>--}}
                {{--</div>--}}
                {{--<div class="col-lg-3 text-lg-right">--}}
                    {{--<a href="#" class="site-btn sb-dark">contact us</a>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</section>--}}
    <!-- Call to action section end  -->
@endsection

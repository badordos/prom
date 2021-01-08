<form method="post" action="{{route('callback')}}" class="contact-form">
    @csrf
    <div class="row">
        <div class="col-lg-6">
            <input type="text" name="name" placeholder="Ваше имя" required>
        </div>
        <div class="col-lg-6">
            <input type="email" name="email" placeholder="Ваша почта" required>
        </div>
        <div class="col-lg-4">
        </div>
        <div class="col-lg-12">
            <input type="text" name="subject" placeholder="Заголовок" required>
            <textarea class="text-msg" placeholder="Сообщение" name="message" required></textarea>
            {!! app('captcha')->display() !!}
            <br>
            <button class="site-btn" type="submit">Оставить заявку</button>
        </div>

    </div>
</form>

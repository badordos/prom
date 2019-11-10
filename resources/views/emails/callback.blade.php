<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Письмо с формы обратной связи Promindustria2019.ru</title>
</head>
<body>

<p>Имя отправителя: {{$request->name ?? 'Не указан'}}</p>
<p>E-mail: {{$request->email ?? 'Не указан' }}</p>
<p>Заголовок: {{$request->subject ?? 'Не указан'}} </p>
<p>Сообщение: {{$request->message ?? 'Не указан'}} </p>

</body>

</html>

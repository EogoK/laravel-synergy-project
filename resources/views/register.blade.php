<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Synergy</title>
        <link rel="stylesheet" href="{{asset('css/register.css')}}">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700;800&display=swap" rel="stylesheet">
    </head>
    <body class="align">
        <form class="registration" method="POST" action="register">
            {!! csrf_field() !!}
            <input type="email" name="email" placeholder="E-mail">
            <input type="text" name="surname" placeholder="Фамилия">
            <input type="text" name="name" placeholder="Имя">
            <input type="text" name="patonymic" placeholder="Отчество">
            <input type="text" name="passport" placeholder="Паспорт">
            <div>
                <button id="button">Зарегистрироваться</button>
                <a id="register" href="/login">Уже есть аккаунт?</a>
            </div>
        </form>
        <script>
            var msg = "{{Session::get('alert')}}";
            var exist = "{{Session::has('alert')}}";
            if(exist){
                alert(msg);
            }
        </script>
    </body>
</html>
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Synergy</title>
        <link rel="stylesheet" href="{{asset('css/login.css')}}">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700;800&display=swap" rel="stylesheet">
    </head>
    <body class="align">
        <form class="login" action="login" method="POST">
            {!! csrf_field() !!}
            <input type="text" name="email" placeholder="E-mail">
            <input type="password" name="password" placeholder="Пароль">
            <div>
                <button id="login-button" type="submit">Войти</button>
                <a id="register" href="/register">Еще нет аккаунта?</a>
            </div>
        </form>

    </body>
</html>
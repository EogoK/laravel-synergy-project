<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Synergy</title>
        <link rel="stylesheet" href="{{asset('css/main.css')}}">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700;800&display=swap" rel="stylesheet">
    </head>
    <body class="align">
        <div id="main">
            <nav>
                <a href="/main">Меню</a>
                <a href="/contact">Контакты</a>
                <a href="/profile">Профиль</a>
                <a href="/logout">Выйти</a>
            </nav>
        </div>
    </body>
</html>
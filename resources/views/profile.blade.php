<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Synergy</title>
        <link rel="stylesheet" href="{{asset('css/profile.css')}}">
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
            <div id="change">
            <div>
            <p>Профиль</p>
            <form class="change-data">
                <input type="text" placeholder="E-mail">
                <input type="text" placeholder="Фамилия">
                <input type="text" placeholder="Имя">
                <input type="text" placeholder="Отчество">
                <input type="text" placeholder="Паспорт">
                <button>Сохранить</button>
            </form>
            </div>
            <div>
            <p>Анкета</p>
            <form class="change-data">
                <input type="text" placeholder="Возраст">
                <input type="text" placeholder="Любимые книги">
                <input type="text" placeholder="Университет">
                <input type="text" placeholder="Статус">
                <input type="text" placeholder="Банковская карта">
                <button>Сохранить</button>
            </form>
            </div>
            </div>

        </div>
    </body>
</html>
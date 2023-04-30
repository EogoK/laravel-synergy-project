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
            <form action="update" method="POST">
            {!! csrf_field() !!}
            <div id="change">
                <div>
                    <p>Профиль</p>
                    <div class="change-data">
                        <input type="email" placeholder="E-mail" name="email" value='{{Auth::user()->email}}'>
                        <input type="text" placeholder="Фамилия" name="surname" value='{{Auth::user()->surname}}'>
                        <input type="text" placeholder="Имя" name="name" value='{{Auth::user()->name}}'>
                        <input type="text" placeholder="Отчество" name="patonymic" value='{{Auth::user()->patonymic}}'>
                        <input type="text" placeholder="Паспорт" name="passport" value='{{Auth::user()->passport}}'>
                        <button>Сохранить</button>
                    </div>
                </div>
                <div>
                <p>Анкета</p>
                    <div class="change-data">
                        <input type="text" placeholder="Возраст" name="age" value='{{Auth::user()->age}}'>
                        <input type="text" placeholder="Любимые книги" name="book" value='{{Auth::user()->book}}'>
                        <input type="text" placeholder="Университет" name="university" value='{{Auth::user()->university}}'>
                        <input type="text" placeholder="Статус" name="status" value='{{Auth::user()->status}}'>
                        <input type="text" placeholder="Банковская карта" name="bank_card" value='{{Auth::user()->bank_card}}'>
                        <button>Сохранить</button>
                    </div>
                </div>
            </div>
            </form>

        </div>
    </body>
</html>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css') }}" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>@yield('title')</title>
</head>
<body class="admin">
<header class="admin-header">
    <container>
        <h3>NAME:{{ Auth::user()->name }}</h3>
        <div class="list-menu">
            <a href="{{route('admin')}}">Главная</a>
            <a href="{{route('orders')}}">Заказы</a>
            <a href="{{route('user')}}">Пользователи</a>
            <a href="{{route('categories')}}">Категории</a>
            <a href="{{route('products')}}">Товары</a>
            <a href="{{route('home')}}">Выход</a>
        </div>
    </container>
</header>

@yield('content')

<footer>
    <container>

    </container>
</footer>
</body>
</html>

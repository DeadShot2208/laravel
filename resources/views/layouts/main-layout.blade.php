<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css') }}" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="preconnect" href="{{asset('https://fonts.googleapis.com')}}">
    <link rel="stylesheet" href="{{ asset('css/swiper-bundle.min.css') }}"/>
    <link rel="stylesheet" href="{{asset('css/burger.css')}}">
    <link rel="stylesheet" href="{{asset('css/wrapper.css')}}">
    <link rel="stylesheet" href="{{ asset('css/swiper-katalog.css') }}"/>
    <link rel="preconnect" href="{{asset('https://fonts.gstatic.com')}}" crossorigin>
    <link href="{{asset('https://fonts.googleapis.com/css2?family=Ropa+Sans&display=swap')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" title="theme" href="#">



    <title>@yield('titile')</title>
</head>
<body>
<div id="page-bookshelf_wrapper" class="move1">
    <div  class="bookshelf_wrapper">
        <ul class="books_list">
            <li class="book_item first"></li>
            <li class="book_item second"></li>
            <li class="book_item third"></li>
            <li class="book_item fourth"></li>
            <li class="book_item fifth"></li>
            <li class="book_item sixth"></li>
        </ul>
        <div class="shelf"></div>
    </div>
</div>

<header class="nav_bar">
    <container>

        <div class="hamburger-menu">
            <input id="menu__toggle" type="checkbox" />
            <label class="menu__btn" for="menu__toggle">
                <span></span>
            </label>

            <ul class="menu__box">
                <li><a class="menu__item" href="{{ route('home') }}">Главная</a></li>
                <li><a class="menu__item" href="{{ route('katalog') }}">Каталог</a></li>
                <li><a class="menu__item" href="{{ route('kontact') }}">Контакты</a></li>
                <li><a class="menu__item" href="{{ route('info') }}">О нас</a></li>
            </ul>
            <div class="theme">
                <button class="change-theme" data-theme="dark" ><img src="{{asset('img/luna.png')}}" alt=""> </button>
                <button class="change-theme" data-theme="light" ><img src="{{asset('img/luk.png')}}" alt="" width="40px" height="40px"> </button>
            </div>
        </div>
        <div class="poisk">
            <form>
                <input class="poiskov" type="text" placeholder="Введите название книги...">
                <button class="button_1" type="submit"><img src="{{asset('img/poisk.png')}}" alt=""></button>
            </form>
        </div>
        <div class="main_menu">
            <div class="menu_list">
                <a href="{{route('basket')}}"><img src="{{asset('img/kz.png')}}" alt=""></a>
                <a href="{{route('basket')}}">Корзина</a>
            </div>
            <div class="menu_list">
                <a href=""><img src="{{asset('img/iz.png')}}" alt=""></a>
                <a href="{{route('favorites')}}">Избраное</a>
            </div>
            <div class="menu_list">
                @guest()
                <a href="{{ route('login') }}"><img src="{{asset('img/auth.png')}}" alt=""></a>
                <a href="{{ route('login') }}">Вход</a>
                @endguest
                @auth()
                <a href="{{ route('profile') }}"><img src="{{asset('img/auth.png')}}" alt=""></a>
                <a href="{{ route('profile') }}">Личный кабинет</a>
                    @endauth
            </div>
        </div>
    </container>
</header>


@yield('content')

<footer class="footer-con">

    <div class="container">
        <div class="text-glav">
            <h1>Книжник</h1>
            <p>мы создали организацию в 1996. <br>
                Читай и развивайся!</p>
            <p class="inc">Книжник Inc. © 1996</p>
        </div>
        <div class="menu-footer">
            <h3>Меню</h3>

            <div class="nav">
                <a href="{{ route('home') }}">Главная</a>
                <a href="{{ route('katalog') }}">Каталог</a>
                <a href="{{ route('info') }}">О нас</a>
                <a href="{{ route('kontact') }}">Контакты</a>
            </div>
        </div>
        <div class="footer-sety">
            <h3>Социальные сети </h3>
            <div class="nav">
                <a href="">Facebook</a>
                <a href="">Instagram</a>
                <a href="">Pinterest</a>
                <a href="">Twitter</a>
            </div>

        </div>
        <div class="footer-contact">
            <h3>КОНТАКТЫ </h3>
            <p>Мы всегда готовы ответить на ваши вопросы.</p>
            <h1>ru@bookstyle.io</h1>
        </div>
    </div>
</footer>

<script src="{{asset('https://unpkg.com/swiper@8/swiper-bundle.min.js')}}"></script>
<script src='{{asset('https://code.jquery.com/jquery-2.2.4.min.js')}}'></script>
<script src="{{asset('js/main.js')}}"></script>
<script src="{{asset('js/preloder.js')}}"></script>
<script src="{{asset('js/dark.js')}}"></script>

</body>

</html>

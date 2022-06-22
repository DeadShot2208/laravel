
@extends('layouts.main-layout')

@section('title', 'Home')

@section('content')

<main class="kontakt_main">
    <container>

        <div class="box-img-kontakt">
            <img src="{{asset('img/kontakt.jpg')}}" alt="" width="100%" height="700px">
        </div>

        <div class="box-info-kontakt">
            <div class="kontakt-1">
                <h1>Адресс</h1>
                <h3>«Книжник» находится в Златоусте, на ул. Ленина, 2А.</h3>
            </div>
            <div class="kontakt-2">
                <h1>Телефон</h1>
                <h3>+7 (351) 897 29 34</h3>
            </div>
            <div class="kontakt-3">
                <h1>Электроное письмо</h1>
                <h3>Knijnik2022@mail.ru</h3>
            </div>

            <div class="kontakt-4">
                <a href=""><img src="{{asset('img/wk.png')}}" alt="" ></a>
                <a href=""><img src="{{asset('img/insta.png')}}" alt=""></a>
                <a href=""><img src="{{asset('img/face.png')}}" alt=""></a>
                <a href=""><img src="{{asset('img/teleg.png')}}" alt=""></a>
            </div>
        </div>

    </container>
</main>

@endsection

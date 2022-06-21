@extends('layouts.main-layout')

@section('title', 'Home')

@section('content')

    <main class="main_katalog">
        <container>
            <div class="zagolovok-1">
                <h1>Книжные хиты</h1>
            </div>

            <div class="swiper-col">
                <section class="swiper-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide" style="background-image:url({{asset('img/product_hit.jpg')}})">
                            <div class="swiper-content">
                                <p class="swiper-title" data-swiper-parallax="-30%" data-swiper-parallax-scale=".7">Заголовок</p>
                                <span class="swiper-caption" data-swiper-parallax="-20%">Описание слайда</span>
                            </div>
                        </div>

                        <div class="swiper-slide" style="background-image:url({{asset('img/product_hit2.jpg')}})">
                            <div class="swiper-content">
                                <p class="swiper-title" data-swiper-parallax="-30%" data-swiper-parallax-scale=".7">Заголовок</p>
                                <span class="swiper-caption" data-swiper-parallax="-20%">Описание слайда</span>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                    <div class="swiper-button-prev swiper-button-white"></div>
                    <div class="swiper-button-next swiper-button-white"></div>
                </section>
            </div>

            <div class="zagolovok-2">
                <h1>Сортировать по жанрам</h1>
            </div>

            <div class="sortirovka">
                @foreach($categories as $category)
                <a href="{{route('getByCategory',$category->slug)}}">{{$category->title}}</a>
                @endforeach
            </div>


            <div class="zagolovok-2">
                <h1>Книги</h1>
            </div>

            <div class="product-1">
                @foreach($products as $product)
                    <div class="box_product">
                        <a href="{{route('getPost',[$product->category['slug'], $product->slug])}}">@if($product->image !== '')<img src="{{\Illuminate\Support\Facades\Storage::url($product->image)}}" alt="">@endif</a>
                        <div class="info_product">
                            <h3>{{$product['title']}}</h3>
                            <div class="opisanie">
                                <p>{{$product['subcontent']}}</p>
                            </div>
                            <div class="inn">
                                <h4>Автор:{{$product['author']}}</h4>
                                <h4>Жанр:{{ $product->category->title }}</h4>
                                <h4>Цена:{{$product['price']}}руб</h4>
                            </div>
                            <div class="known">
                                <button class="button button5">В корзину</button>
                                <a href=""><img src="{{asset('img/izbr.png')}}" alt=""></a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            {{$products->links('vendor.pagination.bootstrap-5')}}
        </container>

    </main>

@endsection

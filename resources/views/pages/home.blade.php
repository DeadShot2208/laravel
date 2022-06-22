@extends('layouts.main-layout')

@section('title', 'Home')

@section('content')

<main class="col_main">
    <container>

        <!-- Slider main container -->
        <div class="swiper">

            <div class="swiper-wrapper">
                <div class="swiper-slide"><img src="img/slide_1.png" alt="">
                    <h2><b>Книжник открыл свой сайт заходи и заказывай.</b></h2>
                </div>
                <div class="swiper-slide"><img src="img/slide_2.png" alt=""></div>
                <div class="swiper-slide"><img src="img/slide_1.png" alt=""></div>
            </div>

            <div class="swiper-pagination"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>

        </div>
        <div class="zagolovok">
            <h1>Популярные категории</h1>
        </div>

        <div class="kategory">
            @foreach ($categoris as $category)
            <div class="box_kategory">
                @if($category->image !== '')<img src="{{\Illuminate\Support\Facades\Storage::url($category->image)}}" alt="">@endif
                <h3>{{ $category['title'] }}</h3>
            </div>


            @endforeach
        </div>


        <div class="zagolovok">
            <h1>Хиты продаж</h1>
        </div>

        <div class="product">
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
                        <form action="{{ route('basketAdd', $product) }}" method="POST">
                            @csrf
                            @method("POST")
                            <button type="submit" class="button button5">В корзину</button>
                        </form>

                        <form action="{{ route('favouritesStore', $product) }}" method="POST">
                            @csrf
                            @method("POST")
                            <button type="submit" style="border: 0"><img src="{{asset('img/izbr.png')}}" alt=""></button>
                        </form>
                    </div>
                </div>
            </div>
            @endforeach


    </container>
</main>
@endsection

@extends('layouts.main-layout')

@section('title', $product->title)

@section('content')

    <main class="col_main">
        <container>
            <div class="cards_products">
                <div class="name_product">
                    <h1>{!! $product->title !!} </h1>
                </div>
                <div class="title_product">
                    <div class="image_product">
                        @if($product->image !== '')<img style="width: 200px; height: 300px; margin: 30px"  src="{{\Illuminate\Support\Facades\Storage::url($product->image)}}" alt="">@endif
                    </div>
                    <div class="contact_product">
                <h5>Автор:{!! $product->author !!}</h5>
                        <h5>Стоимость:{!! $product->price !!}</h5>
                        <p>описание:{!! $product->subcontent !!}</p>
                        <button class="button button5">В корзину</button>
                    </div>
                </div>
                <div class="content_product">
    <p style="line-height: 2.5; width: 90%">{!! $product->content !!}</p>
                </div>
                <div class="category_card">
                <p>Категория:{!! $product->category->title  !!}</p>
                </div>
            </div>
        </container>
    </main>
@endsection

@extends('layouts.main-layout')

@section('title', 'Favorites')

@section('content')

    <main class="col_main" style="margin-bottom: 300px;">
        <container>
            <div class="zagolovok">
                <h1>Избраное</h1>
            </div>
        <div class="favorites" >
            @forelse($favorites as $favorite)
            <div class="box_product">
                <img src="{{ asset('storage/' . $favorite->image) }}" alt="">
                <div class="info_product">
                    <h3>{{ $favorite->product->title }}</h3>
                    <div class="opisanie">
                        <p>{{ $favorite->product->subcontent }}</p>
                    </div>
                    <div class="inn">
                        <h4>Автор: {{ $favorite->product->author }}</h4>
                        <h4>Жанр: {{ $favorite->product->category->title }}</h4>
                        <h4>Цена: {{ $favorite->product->price }}</h4>
                    </div>
                    <div class="known">
                        <form action="{{ route('basketAdd', $favorite->product) }}" method="POST">
                            @csrf
                            @method("POST")
                            <button type="submit" class="button button5">В корзину</button>
                        </form>
                        <form action="{{ route('favouriteDelete', $favorite->product) }}" method="POST">
                            @csrf
                            @method("DELETE")
                            <button type="submit" class="button button5" >Удалить</button>
                        </form>
                    </div>
                </div>
            </div>
            @empty

                <p>Избранное пустое</p>
            @endforelse

        </div>
        </container>
    </main>
@endsection

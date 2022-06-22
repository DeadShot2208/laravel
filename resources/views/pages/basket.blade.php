@extends('layouts.main-layout')

@section('title', 'Basket')

@section('content')

    <main class="col_main">
        <container>
            <div class="basket">
                <h1>Ваша корзина</h1>
                @if($baskets->count() > 0)
                    <form action="{{ route('basketAllDelete') }}" method="post" class="text-right">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-outline-danger mb-4 mt-0">
                            Очистить корзину
                        </button>
                    </form>
                    <table class="table table-bordered">
                        <tr>
                            <th>Наименование</th>
                            <th>Цена</th>
                            <th>Кол-во</th>
                            <th>Общая стоимость</th>
                            <th></th>
                            <th></th>
                        </tr>
                        @foreach($baskets as $basket)
                            <tr>
                                <td>{{ $basket->product->title }}</td>
                                <td>{{ $basket->product->price }}</td>
                                <td>{{ $basket->count }}</td>
                                <td>{{ $basket->price }}</td>
                                <td>
                                    <div class="quantity_inner">

                                        <form action="{{ route('basketMin', $basket->product->id) }}" method="POST" style="margin: 0; width: auto">
                                            @csrf
                                            @method("POST")
                                            <button class="bt_minus">
                                                <svg viewBox="0 0 24 24">
                                                    <line x1="5" y1="12" x2="19" y2="12"></line>
                                                </svg>
                                            </button>
                                        </form>
                                        <input type="text" disabled value="{{ $basket->count }}" size="2" class="quantity" data-max-count="20"/>

                                        <form action="{{ route('basketAdd', $basket->product->id) }}" method="POST" style="margin: 0; width: auto">
                                            @csrf
                                            @method("POST")
                                            <button class="bt_plus" type="submit">
                                                <svg viewBox="0 0 24 24">
                                                    <line x1="12" y1="5" x2="12" y2="19"></line>
                                                    <line x1="5" y1="12" x2="19" y2="12"></line>
                                                </svg>
                                            </button>
                                        </form>

                                    </div>
                                </td>
                                <td>
                                    <form action="{{ route('basketDelete', $basket) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="destroy">Удалить</button>
                                    </form>
                                </td>
                            </tr>


                        @endforeach
                        <tr>
                            <th colspan="4" class="text-right">Итого</th>
                            <th>{{ $baskets->sum('price') }}</th>
                        </tr>
                    </table>
                    <a href="{{route('checkout')}}" class="btn btn-success float-right">
                        Оформить заказ
                    </a>
                @else

                    <p>Ваша корзина пуста...</p>

                @endif


            </div>
        </container>
    </main>
@endsection

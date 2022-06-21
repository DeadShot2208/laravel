@extends('layouts.main-layout')

@section('title', 'Basket')

@section('content')

    <main class="col_main">
        <container>
            <div class="basket">
            <h1>Ваша корзина</h1>
                <form action="" method="post" class="text-right">

                    <button type="submit" class="btn btn-outline-danger mb-4 mt-0">
                        Очистить корзину
                    </button>
                </form>
                <table class="table table-bordered">
                    <tr>
                        <th>№</th>
                        <th>Наименование</th>
                        <th>Цена</th>
                        <th>Кол-во</th>
                        <th>Стоимость</th>
                        <th></th>
                    </tr>
                        <tr>
                            <td></td>
                            <td>
                                <a href="">

                                </a>
                            </td>
                            <td>99</td>
                            <td>
                                <div class="quantity_inner">
                                    <button class="bt_minus">
                                        <svg viewBox="0 0 24 24"><line x1="5" y1="12" x2="19" y2="12"></line></svg>
                                    </button>
                                    <input type="text" value="1" size="2" class="quantity" data-max-count="20" />
                                    <button class="bt_plus">
                                        <svg viewBox="0 0 24 24"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
                                    </button>
                                </div>
                            </td>
                            <td> </td>
                            <td>
                                <form action="" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="destroy">Удалить</button>
                                </form>
                            </td>
                        </tr>
                    <tr>
                        <th colspan="4" class="text-right">Итого</th>
                        <th>00</th>
                        <th></th>
                    </tr>
                </table>
                <a href="{{route('checkout')}}" class="btn btn-success float-right">
                    Оформить заказ
                </a>
                <p>Ваша корзина пуста...</p>
            </div>
        </container>
    </main>
@endsection

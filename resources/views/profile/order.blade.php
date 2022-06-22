@extends('layouts.profile-layout')

@section('title', 'Profile')

@section('content')

    <div class="profile">
        <h1>Профиль</h1>
        <div class="info-profile">
            <h3>Ваши заказы</h3>

            @if($orders->count() > 0)
                <div class="profile_order">
                    <table class="table table-bordered">
                        <tr>
                            <th>№</th>
                            <th>Дата и время</th>
                            <th>Покупатель</th>
                            <th>Номер телефона</th>
                            <th>Адрес</th>
                            <th>Количество товаров</th>
                            <th>Общая сумма</th>
                            <th>Комментарий</th>

                        </tr>
                        @foreach($orders as $order)
                            <tr>
                                <td>{{ $order->id }}</td>
                                <td>{{ $order->created_at }}</td>
                                <td>{{ $order->name }}</td>
                                <td>{{ $order->email }}</td>
                                <td>{{ $order->address }}</td>
                                <td>{{ $order->count }}</td>
                                <td>{{ $order->total_sum }}</td>
                                <td>{{ $order->comment }}</td>
                            </tr>
                        @endforeach

                    </table>


                </div>
            @else
                <p>Заказов пока нет</p>
            @endif


        </div>
    </div>



@endsection

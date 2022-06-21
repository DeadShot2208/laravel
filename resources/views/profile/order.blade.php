@extends('layouts.profile-layout')

@section('title', 'Profile')

@section('content')

    <div class="profile">
        <h1>Профиль</h1>
        <div class="info-profile">
            <h3>Ваши заказы</h3>

    <div class="profile_order">
                <table class="table table-bordered">
                    <tr>
                        <th  >№</th>
                        <th>Дата и время</th>
                        <th>Статус</th>
                        <th >Покупатель</th>
                        <th >Номер телефона</th>

                    </tr>
                        <tr>
                            <td>890</td>
                            <td>809</td>
                            <td>8908</td>
                            <td>80980</td>
                            <td>80980</td>
                        </tr>

                </table>


                <p>Заказов пока нет</p>
    </div>



@endsection

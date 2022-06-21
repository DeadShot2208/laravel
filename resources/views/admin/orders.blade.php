
@extends('layouts.admin-layout')

@section('title', 'user')

@section('content')

    <main class="main-admin">
        <container>
            <div class="wrapp__admin__panel">
                <div class="list__table">
                    <div class="table">
                        <div class="title__table">
                            <p>Заказы</p>
                        </div>
                        <table class="table__db">
                            <thead>
                            <th>ID</th>
                            <th>Дата создания</th>
                            <th>Статус</th>
                            <th>Покупатель</th>
                            <th>email</th>
                            <th>Номер телефона</th>
                            <th>Пользователь</th>

                            </thead>
                            <tbody>
                                <tr>
                                    <td>0000</td>
                                    <td>000000</td>
                                    <td>0000000</td>
                                    <td style="width: 10%">0000</td>
                                    <td style="width: 25%">0000000</td>
                                    <td>00000000</td>
                                    <td>000000000</td>
                                    <td style="width: 15%">
                                        <a href="" class="edit">Редактировать</a>
                                    </td>
                                    <td>
                                        <form action="" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button class="destroy">Удалить</button>
                                        </form>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </container>
    </main>
@endsection

@extends('layouts.admin-layout')

@section('title', 'user')

@section('content')

<main class="main-admin">
    <container>
        <div class="wrapp__admin__panel">
            <div class="list__table">
                <div class="table">
                    <div class="title__table">
                        <p>Пользователи</p>
                    </div>
                    <table class="table__db">
                        <thead>
                        <th>ID</th>
                        <th>Имя</th>
                        <th>Логин</th>
                        <th>Email</th>
                        <th>Дата создания</th>
                        </thead>
                        <tbody>
                        <tr>
                            <td>1</td>
                            <td>Марат</td>
                            <td>Dead</td>
                            <td>maraty2208@mail.ru</td>
                            <td>21.12.21</td>
                            <td>
                                <a href="" class="edit">Редактировать</a>
                            </td>
                            <td>
                                <form action="" method="POST">
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

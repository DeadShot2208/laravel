@extends('layouts.admin-layout')

@section('title', 'category')

@section('content')

    <main class="main-admin">
        <container>
            <div class="wrapp__admin__panel">
                <div class="list__table">
                    <div class="table">
                        <div class="title__table">
                            <p>Пользователи</p>
                            <a href="{{ route('add_category') }}" class="create">Добавить</a>
                        </div>
                        <table class="table__db">
                            <thead>
                            <th>ID</th>
                            <th>Заголовок</th>
                            <th>Слаг</th>
                            <th>img</th>
                            <th>Дата создания</th>
                            </thead>
                            <tbody>
                            @foreach($category as $item)
                            <tr>
                                <td>{{$item->id}}</td>
                                <td>{{$item->title}}</td>
                                <td>{{$item->slug}}</td>
                                <td>@if($item->image !== '')<img  src="{{\Illuminate\Support\Facades\Storage::url($item->image)}}" alt="">@endif</td>

                                <td>{{$item->created_at}}</td>
                                <td >
                                    <a href="{{ route('edit_category', $item->id) }}" class="edit">Редактировать</a>
                                </td>
                                <td>
                                    <form action="{{ route('category.destroy', $item->id)}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="destroy">Удалить</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
                {{$category->links('vendor.pagination.bootstrap-5')}}
            </div>

        </container>
    </main>

@endsection

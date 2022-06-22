@extends('layouts.admin-layout')

@section('title', 'product')

@section('content')

    <main class="main-admin">
        <container>
            <div class="wrapp__admin__panel">
                <div class="list__table">
                    <div class="table">
                        <div class="title__table">
                            <p>Товар</p>
                            <a href="{{route('add_product')}}" class="create">Добавить</a>
                        </div>
                        <table class="table__db">
                            <thead>
                            <th>ID</th>
                            <th>Категория</th>
                            <th>Заголовок</th>
                            <th>краткое описание</th>
                            <th>описание</th>
                            <th>Автор</th>
                            <th>Стоимость</th>
                            <th>image</th>
                            <th>слаг</th>
                            <th>Дата создания</th>
                            </thead>
                            <tbody>
                            @foreach($product as $item_product)
                            <tr>
                                <td>{{$item_product->id}}</td>
                                <td>{{$item_product->category_id}}</td>
                                <td>{{$item_product->title}}</td>
                                <td style="width: 10%">{{$item_product->subcontent}}</td>
                                <td style="width: 25%">{{$item_product->content}}</td>
                                <td>{{$item_product->author}}</td>
                                <td>{{$item_product->price}}</td>
                                <td>@if($item_product->image !== '')<img  style="width: 200px;height: 300px" src="{{\Illuminate\Support\Facades\Storage::url($item_product->image)}}" alt="">@endif</td>
                                <td>{{$item_product->slug}}</td>
                                <td>{{$item_product->created_at}}</td>
                                <td style="width: 15%">
                                    <a href="{{route('edit_product', $item_product->id)}}" class="edit">Редактировать</a>
                                </td>
                                <td>
                                    <form action="{{ route('product.destroy', $item_product->id)}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="destroy">Удалить</button>
                                    </form>
                                </td>
                            </tr>
                            </tbody>
                            @endforeach
                        </table>
                    </div>
                </div>
                {{$product->links('vendor.pagination.bootstrap-5')}}
            </div>
        </container>
    </main>

@endsection

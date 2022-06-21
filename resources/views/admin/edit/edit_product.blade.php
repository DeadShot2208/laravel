@extends('layouts.admin-layout')

@section('title', 'product')

@section('content')

    <div class="wrapp__admin__panel">
        <p class="title">Редактирование категории</p>
        @foreach($product as $item_product)
            <form action="{{ route('product.update', $item_product->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="input__group">
                    <label for="category_id">Категория</label>
                    <select name="category_id">
                        @foreach($category as $item)
                            <option value="{{$item->id}}">{{$item->title}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="input__group">
                    <label for="title">Название</label>
                    <input type="text" name="title">
                </div>
                <div class="input__group">
                    <label for="subcontent">краткое описание</label>
                    <input type="text" name="subcontent">
                </div>
                <div class="input__group">
                    <label for="content">описание</label>
                    <input type="text" name="content">
                </div>
                <div class="input__group">
                    <label for="author">Автор</label>
                    <input type="text" name="author">
                </div>
                <div class="input__group">
                    <label for="price">Стоимость</label>
                    <input type="text" name="price">
                </div>
                <div class="input__group">
                    <label for="slug">Слаг</label>
                    <input type="text" name="slug">
                </div>

                <<div class="input__group">
                    <label for="image">Загрузить фото</label>
                    <input type="file" id="image" name="image">
                </div>

                <div class="input__group">
                    <input type="submit" class="btn__add" value="Добавить">
                </div>
            </form>
        @endforeach
    </div>
    </div>

@endsection

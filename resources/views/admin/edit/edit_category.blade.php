@extends('layouts.admin-layout')

@section('title', 'category')

@section('content')

    <div class="wrapp__admin__panel">
        <p class="title">Редактирование категории</p>
        @foreach($category as $item)
            <form action="{{ route('category.update', $item->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="input__group">
                    <label for="title">Заголовок</label>
                    <input type="text" name="title" value="{{$item->title}}" >
                </div>
                <div class="input__group">
                    <label for="slug">Слаг</label>
                    <input type="text" name="slug" value="{{$item->slug}}">
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

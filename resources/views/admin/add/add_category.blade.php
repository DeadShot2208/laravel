@extends('layouts.admin-layout')

@section('title', 'add_category')

@section('content')

    <main class="main-admin">
        <container>
<div class="wrapp__admin__panel">
    <p class="title">Создание категории</p>
    <form action="{{ route('category.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="input__group">
            <label for="title">Заголовок</label>
            <input type="text" name="title">
            @error('title')
            <p>{{$message}}</p>
            @enderror
        </div>
        <div class="input__group">
            <label for="slug">Слаг</label>
            <input type="text" name="slug">

        </div>
        <<div class="input__group">
            <label for="image">Загрузить фото</label>
            <input type="file" id="image" name="image">
            @error('image')
            <p>{{$message}}</p>
            @enderror
        </div>
        <div class="input__group">
            <input type="submit" class="btn__add" value="Добавить">
        </div>
    </form>
</div>
</div>
        </container>
    </main>
@endsection

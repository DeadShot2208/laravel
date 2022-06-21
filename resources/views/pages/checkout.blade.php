@extends('layouts.main-layout')

@section('title', 'Checkout')

@section('content')
    <main class="col_main">
        <container>
            <div class="checkout">
    <h1 class="mb-4">Оформить заказ</h1>

<form method="post" action="" id="checkout">

    <div class="form-group">
        <input type="text" class="form-control" name="name" placeholder="Имя, Фамилия"
               required maxlength="255" value="">
    </div>
    <div class="form-group">
        <input type="email" class="form-control" name="email" placeholder="Адрес почты"
               required maxlength="255" value="">
    </div>
    <div class="form-group">
        <input type="text" class="form-control" name="phone" placeholder="Номер телефона"
               required maxlength="255" value="">
    </div>
    <div class="form-group">
        <input type="text" class="form-control" name="address" placeholder="Адрес доставки"
               required maxlength="255" value="">
    </div>
    <div class="form-group">
            <textarea class="form-control" name="comment" placeholder="Комментарий"
                      maxlength="255" rows="2"></textarea>
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-success">Оформить</button>
    </div>
</form>
            </div>
        </container>
    </main>

@endsection

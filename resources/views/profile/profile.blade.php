@extends('layouts.profile-layout')

@section('title', 'Profile')

@section('content')

            <div class="profile">
                <h1>Профиль</h1>
                <div class="info-profile">
                    <h3>Данные аккаунта</h3>

                    <p>Имя:{{ Auth::user()->name }}</p>
                    <p>Email:{{ Auth::user()->email }}</p>

                </div>
            </div>


@endsection

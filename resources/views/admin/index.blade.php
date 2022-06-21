
@extends('layouts.admin-layout')

@section('title', 'user')

@section('content')

    <main class="main-admin">
        <container>
            <h1 style="display: flex; align-items: center; justify-content: center; color: white;" >Приветствую {{ Auth::user()->name }}</h1>

        </container>
    </main>
@endsection

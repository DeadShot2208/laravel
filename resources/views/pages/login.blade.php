<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <title>login</title>
    <link rel="stylesheet" href="{{asset('https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css')}}">
    <link rel='stylesheet prefetch' href='{{asset('https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900|Material+Icons')}}'>
    <link rel="stylesheet" href="{{ asset('css/auth.css')}}">
</head>

<body>
<div class="wrapper">
    <div class="form">
        <div class="form-panel form-login">
            <div class="form-header">
                <h1>Авторизация</h1>
            </div>
            <div class="form-body">
                <form class="sign_in" action="{{route('login')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="email">Почта</label>
                        <input type="text" name="email" required>
                        @error('email')
                        <p>{{$message}}</p>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="password">Пароль</label>
                        <input type="password" name="password" required>
                        @error('password')
                        <p>{{$message}}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <div class="form-remember">
                            <div class="checkbox-input">
                                <label for="remember">Запомнить</label>
                                <input type="checkbox" name="remember">
                            </div>
                            <a href="{{route('home')}}" class="link_to_back">На гланую</a>
                        </div>

                    </div>
                    <div class="form-group">
                        <button class="submit-btn">Войти</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="form-panel form-register">
            <div class="btn-open">
                <span class="btn-line"></span>
                <span class="btn-line"></span>
            </div>
            <div class="form-header">
                <h1>Регистрация</h1>
            </div>
            <div class="form-body">
                <form class="sign_up" action="{{ route('register') }}" method="post">
                    @csrf

                    <div class="form-group">
                        <label for="name">Имя</label>
                        <input type="text" name="name" required>
                        @error('name')
                        <p>{{$message}}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="email">Почта</label>
                        <input type="text" name="email" required>
                        @error('email')
                        <p>{{$message}}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="password">Пароль</label>
                        <input type="password" name="password" required>
                        @error('password')
                        <p>{{$message}}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="check_password">Повторите пароль</label>
                        <input type="password" name="check_password" required>
                        @error('check_password')
                        <p>{{$message}}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <div class="form-remember">
                            <div class="checkbox-input">
                                <label for="consent">Даю согласи на обработку персональных данных</label>
                                <input type="checkbox" name="consent">
                            </div>
                        </div>

                    </div>

                    <div class="form-group">
                        <button class="submit-btn">Войти</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

</body>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='https://codepen.io/andytran/pen/vLmRVp.js'></script>
<script src="js/index.js"></script>
</html>


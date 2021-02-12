@extends('layouts')

@section('title')Регистрация@endsection

@section('main_content')
    <h1>Регистрация пользователя</h1><br>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="post" action="/signup/check">
        @csrf
        <input type="email" name="email" id="email" placeholder="Введите email" class="form-control"><br>
        <input type="login" name="login" id="login" placeholder="Введите логин" class="form-control"><br>
        <input type="password" name="password" id="password" placeholder="Введите пароль" class="form-control"><br>
        <button type="submit" class="btn btn-success">Зарегистрироваться</button>
    </form>
@endsection

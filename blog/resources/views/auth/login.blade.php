@extends('layouts.app')

@section('css')
<link href="{{ asset('css/login.css') }}" rel="stylesheet">
@endsection

@section('content')
<div class="main">
    <p class="sign" align="center">Đăng nhập</p>
    <form method="POST" action="{{ route('login') }}">
        @csrf
        @if ($errors->has('email'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('email') }}</strong>
            </span>
        @endif
        <input class="un " type="text" align="center" placeholder="Email" name="email" value="{{ old('email') }}" required autofocus>
        <input class="pass" type="password" align="center" placeholder="Password" name="password" required>
        <button class="submit" align="center">Đăng nhập</button>
        @if (Route::has('password.request'))
        <p class="forgot" align="center"><a href="{{ route('password.request') }}">Quên mật khẩu</p>
        @endif
</div>
@endsection

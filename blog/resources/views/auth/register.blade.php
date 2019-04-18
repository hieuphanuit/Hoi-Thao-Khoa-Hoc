@extends('layouts.app')

@section('css')
<link href="{{ asset('css/register.css') }}" rel="stylesheet">
@endsection

@section('content')

<div class="main">
    <p class="sign" align="center">Đăng ký người thuyết trình</p>
    <form method="POST" action="{{ route('register') }}">
    @csrf
        @if ($errors->has('name'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('name') }}</strong>
            </span>
        @endif
        <input class="un " type="text" align="center" placeholder="Tên"  name="name" value="{{ old('name') }}" required autofocus>
        @if ($errors->has('email'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('email') }}</strong>
            </span>
        @endif
        <input class="un " type="text" align="center" placeholder="Email"  name="email" value="{{ old('email') }}" required autofocus>
        @if ($errors->has('password'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('password') }}</strong>
            </span>
        @endif
        <input class="pass" type="password" align="center" placeholder="Password" name="password" required>
        <input class="pass" type="password" align="center" placeholder="Nhập lại password" name="password_confirmation" required>
       
        <button class="submit" align="center">Đăng ký</button>
</div>
@endsection

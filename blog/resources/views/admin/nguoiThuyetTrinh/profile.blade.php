@extends('admin.master')
@section('title')
    <h1>NGƯỜI THUYẾT TRÌNH</h1>
@endsection
@section('content')
    @if (\Session::has('success'))
      <div class="alert alert-success">
        <p>{{ \Session::get('success') }}</p>
      </div><br />
     @endif
    <form>
        @csrf
        
        <div style="margin-top:20px">
            <label>Họ và tên:</label>
            <input type="text" name="hoVaTen" class="form-control" id="hoVaTen" value="{{$user->name}} " readonly>
        </div>
        <div class="form-group" style="margin-top:20px">
            <label for="email">Email</label>
            <input type="text" name="email" class="form-control" id="email" value="{{$user->email}} " readonly>
        </div>
        <div class="form-group" style="margin-top:20px">
            <label for="password">Password</label>
            <input type="text" name="thoiGian" class="form-control" id="password" value="{{$user->password}}" readonly>
        </div>
    </form>
@endsection


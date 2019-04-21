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
     <br/>
     <br/>
     <table class="table table-striped dataTable">
        <thead>
            <tr>
                <th>ID</th>
                <th>Tên người thuyết trình</th>
                <th>Email</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach($nguoi_thuyet_trinhs as $nguoi_thuyet_trinh)
            <tr>
                <td>{{$nguoi_thuyet_trinh->id}}</td>
                <td>{{$nguoi_thuyet_trinh->name}}</td>
                <td>{{$nguoi_thuyet_trinh->email}}</td>
                <td>
                    <a href="#" class="btn btn-warning">Thông tin</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection


@extends('nguoiThuyetTrinh.master')
@section('title')
    <h1>HỘI NGHỊ</h1>
@endsection
@section('content')
    @if (\Session::has('success'))
      <div class="alert alert-success">
        <p>{{ \Session::get('success') }}</p>
      </div><br />
     @endif
     <br/>
     <table class="table table-striped dataTable">
        <thead>
            <tr>
                <th>ID</th>
                <th>Tên hội nghị</th>
                <th>Địa điểm</th>
                <th>Thời gian bắt đầu</th>
                <th>Thời gian kết thúc</th>
                <th>Trạng Thái</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach($hoiNghis as $hoiNghi)
            <tr>
                <td>{{$hoiNghi->id}}</td>
                <td>{{$hoiNghi->tenHoiNghi}}</td>
                <td>{{$hoiNghi->diaDiem}}</td>
                <td>{{$hoiNghi->thoiGianBatDau}}</td>
                <td>{{$hoiNghi->thoiGianKetThuc}}</td>
                <td>{{$hoiNghi->trangThai}}</td>
                <td>
                    <a href="{{url('nguoi-thuyet-trinh/hoi-nghi',$hoiNghi->id)}}" class="btn btn-warning">Xem</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection


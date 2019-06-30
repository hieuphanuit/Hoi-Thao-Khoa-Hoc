@extends('admin.master')
@section('title')
    <h1>HỘI NGHỊ</h1>
@endsection
@section('content')
    @if (\Session::has('success'))
      <div class="alert alert-success">
        <p>{{ \Session::get('success') }}</p>
      </div><br />
     @endif
     <a href="{{url('admin/hoi-nghi/create')}}" class="btn btn-success">Thêm Hội Nghị</a>
     <br/>
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
                <th></th>
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
                    <a href="{{action('HoiNghiController@edit', $hoiNghi->id)}}" class="btn btn-warning">Sửa</a>
                </td>
                <td>
                    <a href="{{action('HoiNghiController@profile', $hoiNghi->id)}}" class="btn btn-success">Thông tin</a>
                </td>
                <td>
                    <form action="{{action('HoiNghiController@destroy', $hoiNghi->id)}}" method="POST"
                    onsubmit="return confirm('Bạn có chắc là muốn xóa?');"
                    >
                        @csrf
                        <input name="_method" type="hidden" value="DELETE">
                        <button class="btn btn-danger btn-delete" type="submit">Xóa</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection


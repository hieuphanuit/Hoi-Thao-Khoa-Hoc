@extends('nguoiThuyetTrinh.master')
@section('title')
    <h1>BÀI THUYẾT TRÌNH</h1>
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
                <th>Tên hội nghị</th>
                <th>Tên bài thuyết trình</th>
                <th>Mô tả</th>
                <th>Trạng Thái</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach($baiThuyetTrinhs as $baiThuyetTrinh)
            <tr>    
                <td>{{$baiThuyetTrinh->tenHoiNghi}}</td>
                <td>{{$baiThuyetTrinh->tenBaiThuyetTrinh}}</td>
                <td>{{$baiThuyetTrinh->moTa}}</td>
                <td>{{$baiThuyetTrinh->trangThai}}</td>
                <td>
                    <a href="{{url('bai-thuyet-trinh',$baiThuyetTrinh->id)}}" class="btn btn-warning">Xem</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection


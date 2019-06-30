@extends('admin.master')
@section('title')
<h1>CẬP NHẬT HỘI NGHỊ</h1>
@endsection
@section('css')
<style>
    .baiThuyetTrinhImage {
        height: 300px;
        background-size: cover;
        text-align: center;
        color: #eee;
    }

    .baiThuyetTrinhImage .overlay {
        background: rgba(0, 0, 0, 0.3);
        width: 100%;
        height: 100%;
        border-radius: 1.5em;
    }
</style>
@endsection
@section('content')
@if (\Session::has('success'))
<div class="alert alert-success">
    <p>{{ \Session::get('success') }}</p>
</div><br />
@endif
<br />
<br />
<div class="container">
    <div class="baiThuyetTrinhImage hoi-nghi-block" style='background: #ffffff url("{{url('/images',$hoiNghi->hinh)}}") no-repeat center center; background-size: cover;'>
    </div>
    <form action='{{url("admin/hoi-nghi/$hoiNghi->id")}}' method="POST">
        @csrf
        <div class="form-group">
            <label for="tenHoiNghi">Tên hội nghị</label>
            <input type="text" name="tenHoiNghi" class="form-control" id="tenHoiNghi" value="{{$hoiNghi->tenHoiNghi}}">
        </div>
        <div style="margin-top:20px">
            <label>Nội dung:</label>
            <textarea name="noiDung"  id="noiDung" rows="4" cols="175">{{$hoiNghi->noiDung}}
            </textarea>
        </div>
        <div class="form-group">
            <label for="diaDiem">Địa điểm</label>
            <input type="text" name="diaDiem" class="form-control" id="diaDiem" value="{{$hoiNghi->diaDiem}}">
        </div>
        <div class="form-group">
            <label for="thoiGian">Thời gian</label>
            <input type="text" name="thoiGian" class="form-control" id="thoiGian" required>
        </div>
        <div class="form-group">
            <label for="moTa">Mô tả</label>
            <textarea name="moTa" class="form-control" id="moTa">{{$hoiNghi->moTa}}</textarea>
        </div>
        <div class="form-group">
            <label for="soLuongToiDa">Số lượng người tối đa</label>
            <input type="number" name="soLuongToiDa" class="form-control" id="soLuongToiDa" value="{{$hoiNghi->soLuongToiDa}}" />
        </div>
        <div class="form-group">
            <label for="trangThai">Trạng thái</label>
            <select name="trangThai" class="form-control" id="trangThai" required />
            <option value="Đang mở">Đang mở</option>
            <option value="Đã đóng">Đã đóng</option>
            <select>
        </div>
        <button class="btn btn-success">Cập nhật</button>
    </form>
</div>
@endsection
@section('js')
<script src="{{url('/js/ckeditor.js')}}"></script>
<script>
    $('#thoiGian').daterangepicker({
        timePicker: true,
        locale: {
            format: 'YYYY-MM-DD HH:MM:ss'
        }
    });
</script>

@endsection
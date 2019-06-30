@extends('admin.master')
@section('title')
<h1>THÔNG TIN  HỘI NGHỊ</h1>
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
            <h1 style="text-align:center;">{{$hoiNghi->tenHoiNghi}} </h1>
    <form>
        @csrf
        
        <div style="margin-top:20px">
            <label>Nội dung:</label>
            <textarea name="noiDung"  id="noiDung" rows="4" cols="175" readonly style=" background-color : #EEEEEE; ">{{$hoiNghi->noiDung}} 
            </textarea>
        </div>
        <div class="form-group" style="margin-top:20px">
            <label for="diaDiem">Địa điểm</label>
            <input type="text" name="diaDiem" class="form-control" id="diaDiem" value="{{$hoiNghi->diaDiem}}" readonly>
        </div>
        <div class="form-group" style="margin-top:20px">
            <label for="thoiGian">Từ ngày </label>
            <input type="text" name="thoiGian" class="form-control" id="thoiGian" value= "{{$hoiNghi->thoiGianBatDau}}"readonly>
        </div>
        <div class="form-group" style="margin-top:20px">
            <label for="thoiGian">Đến ngày </label>
            <input type="text" name="thoiGian" class="form-control" id="thoiGian" value= "{{$hoiNghi->thoiGianKetThuc}}"readonly>
        </div>
        <div class="form-group" style="margin-top:20px" style="margin-top:20px">
            <label for="moTa">Mô tả</label>
            <textarea name="moTa" class="form-control" id="moTa" readonly>{{$hoiNghi->moTa}}</textarea>
        </div>
        <div class="form-group" style="margin-top:20px">
            <label for="soLuongToiDa">Số lượng người tối đa</label>
            <input type="number" name="soLuongToiDa" class="form-control" id="soLuongToiDa" value="{{$hoiNghi->soLuongToiDa}}" readonly />
        </div>
        <div class="form-group" style="margin-top:20px">
            <label for="trangThai">Trạng thái</label>
            <input name="trangThai" class="form-control" id="trangThai" value="{{$hoiNghi->trangThai}}" readonly />
        </div>
    </form>
</div>
@endsection

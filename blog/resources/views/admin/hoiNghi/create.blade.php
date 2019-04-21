@section('css')
    <style type="text/css">
        .ck-editor__editable_inline {
            min-height: 400px;
        }
    </style>
   
@stop
@extends('admin.master')

@section('title')
    <h1>HỘI NGHỊ</h1>
    <h2>Thêm Hội Nghị</h2>
@stop
@section('content')
    <form method="POST" action="{{action('HoiNghiController@store')}}" enctype='multipart/form-data'>
    @csrf
        <div class="form-group">
            <label for="tenHoiNghi">Tên Hội Nghị</label>
            <input type="text" name="tenHoiNghi" class="form-control" id="tenHoiNghi" required>
        </div>
        <div class="form-group">
            <label for="diaDiem">Địa điểm</label>
            <input type="text" name="diaDiem" class="form-control" id="diaDiem" required>
        </div>
        <div class="form-group">
            <label for="thoiGian">Thời gian</label>
            <input type="text" name="thoiGian" class="form-control" id="thoiGian" required>
        </div>
        <div class="form-group">
            <label for="hinh">Hình</label>
            <input type="file" name="hinh" class="form-control" id="hinh" required>
        </div>
        <div class="form-group">
            <label for="moTa">Mô tả</label>
            <textarea name="moTa" class="form-control" id="moTa" required></textarea>
        </div>
        <div class="form-group">
            <label for="noiDung">Nội dung</label>
            <textarea name="noiDung" class="form-control" id="noiDung"></textarea>
        </div>
        <div class="form-group">
            <label for="soLuongToiDa">Số lượng người tối đa</label>
            <input type="number" name="soLuongToiDa" class="form-control" id="soLuongToiDa" required/>
        </div>
        <div class="form-group">
            <label for="trangThai">Trạng thái</label>
            <select name="trangThai" class="form-control" id="trangThai" required/>
                <option value="Đang mở">Đang mở</option>
                <option value="Đã đóng">Đã đóng</option>
            <select>
        </div>

       
        <button class="btn btn-success">Lưu</button>
    </form>
@stop

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
<script>
    ClassicEditor
        .create( document.querySelector( '#noiDung' ) )
        .catch( error => {
            console.error( error );
        } );
</script>
@stop
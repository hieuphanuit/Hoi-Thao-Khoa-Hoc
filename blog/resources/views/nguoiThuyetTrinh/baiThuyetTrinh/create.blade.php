@section('css')
    <style type="text/css">
        .ck-editor__editable_inline {
            min-height: 400px;
        }
    </style>
   
@stop
@extends('admin.master')

@section('title')
    <h1>BÀI THUYẾT TRÌNH</h1>
    <h2>Thêm bài thuyết trình cho {{$hoiNghi->tenHoiNghi}}</h2>
    <p>
    <p >
        {{$hoiNghi->thoiGianBatDau}} => {{$hoiNghi->thoiGianKetThuc}} <br>
        Địa Điểm: {{$hoiNghi->diaDiem}}<br>
    </p>
@stop
@section('content')
    <form method="POST" action="{{action('BaiThuyetTrinhController@store')}}" enctype='multipart/form-data'>
    @csrf
        <input type="hidden" name="idHoiNghi" value="{{$hoiNghi->id}}">
        <div class="form-group">
            <label for="tenBaiThuyetTrinh">Tên Bài Thuyết Trình</label>
            <input type="text" name="tenBaiThuyetTrinh" class="form-control" id="tenBaiThuyetTrinh" required>
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
            <label for="doDai">Thời lượng (phút):</label>
            <input type="number" name="doDai" class="form-control" id="doDai"/>
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
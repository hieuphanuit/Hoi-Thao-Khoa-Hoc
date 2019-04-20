@extends('master')
@section('css')
<style>
    #baiThuyetTrinhImage{
        height: 300px;
        background: #ffffff url("{{url('/images',$hoiNghi->hinh)}}") no-repeat center center;
        background-size: cover;
        text-align: center;
        color: #eee;
    }
    #baiThuyetTrinhImage .overlay{
        background: rgba(0,0,0,0.3);
        width: 100%;
        height: 100%;
    }
    .text-shadow{
        text-shadow: 2px 2px 4px #000000;
    }
    .name{
        padding-top: 100px;
        color: skyblue;
        font-size: 3em;
        
        text-transform: uppercase;
        font-weight: bold;
    }
    .text{
        font-size: 1.2em;
    }
    .noiDung{
        background-color: #fff;
        padding: 20px;
        border: 1px solid #ddd;
    }
    .btn-container{
        width: 100%;
        text-align: center;
        margin: 10px;
    }
    .tenBaiThuyetTrinh{
        font-size: 2em;
        text-transform: uppercase;
        font-weight: bold;
    }
</style>
@stop
@section('title')
   
@endsection
@section('content')
    @if (\Session::has('success'))
      <div class="alert alert-success">
        <p>{{ \Session::get('success') }}</p>
      </div><br />
     @endif
    <div id="baiThuyetTrinhImage">
        <div class="overlay">
            <div>
                <h3 class="name text-shadow">{{$hoiNghi->tenHoiNghi}}</h3>
                <p class="text text-shadow">
                {{$hoiNghi->thoiGianBatDau}} -> {{$hoiNghi->thoiGianKetThuc}} <br>
                Địa Điểm: {{$hoiNghi->diaDiem}}<br>
                <br>
                {{$hoiNghi->moTa}}
                </p>
            </div>
        </div>
    </div>
    <div class="noiDung">
        <h3 class="tenBaiThuyetTrinh">{{$baiThuyetTrinh->tenBaiThuyetTrinh}}</h3>
        <p>
            <label>Thời lượng: </label> {{$baiThuyetTrinh->doDai}} phút<br>
            <label>Mô tả: </label> {{$baiThuyetTrinh->doDai}}
            <br><br>
            {!!$baiThuyetTrinh->noiDung!!}
        </p>
        
    </div>
   
@endsection


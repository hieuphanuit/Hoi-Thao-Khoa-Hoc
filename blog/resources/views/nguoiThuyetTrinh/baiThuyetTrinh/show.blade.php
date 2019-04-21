@extends('nguoiThuyetTrinh.master')
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
    {!! $hoiNghi->noiDung !!}
        <div class="btn-container">
            <a class="btn btn-success">Đăng ký thuyết trình</a>
        </div>

        <h3>Danh sách bài thuyết trình</h3>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Tên bài thuyết trình</th>
                    <th scope="col">Người thuyết trình</th>
                    <th scope="col">Mô tả</th>
                    <th scope="col">Thời lượng</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
                <td><a href="{{url('nguoi-thuyet-trinh/hoi-nghi',$hoiNghi->id)}}" class="btn btn-warning">Xem</a></td>
                </tr>
                <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
                </tr>
                <tr>
                <th scope="row">3</th>
                <td>Larry</td>
                <td>the Bird</td>
                <td>@twitter</td>
                </tr>
            </tbody>
        </table>
    </div>
    
@endsection


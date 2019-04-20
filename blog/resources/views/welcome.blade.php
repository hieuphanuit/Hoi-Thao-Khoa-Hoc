@extends('master')
@section('css')
@section('css')
<style>
    .baiThuyetTrinhImage{
        height: 300px;
        background-size: cover;
        text-align: center;
        color: #eee;
    }
    .baiThuyetTrinhImage .overlay{
        background: rgba(0,0,0,0.3);
        width: 100%;
        height: 100%;
		border-radius: 1.5em;
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
	.hoi-nghi-block{
		border-radius: 1.5em;
    	box-shadow: 0px 11px 35px 2px rgba(0, 0, 0, 0.14);
	}
	hr{
		border: 1px solid #ddd;
	}
	a:hover{
		text-decoration: none;
	}
</style>
@endsection
@section('content')
		@foreach($HoiNghis as $hoiNghi)
		<a href="{{url('hoi-nghi',$hoiNghi->id)}}">
			<div class="baiThuyetTrinhImage hoi-nghi-block" style='background: #ffffff url("{{url('/images',$hoiNghi->hinh)}}") no-repeat center center; background-size: cover;'>
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
		</a>
		<hr>
		@endforeach

@endsection

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
@php
$i = 0
@endphp
		@foreach($HoiNghis as $hoiNghi)
		@if($i==0)
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
		@php
			$i = 1
			@endphp
		@endif

		@endforeach
@endsection
@section('content_1')
		<div style="background-color: #18478B; padding:100px; text-align:center; margin-bottom:20px;">
				<h1 style="font-size:30px;">H2</h1>
				<h1 style="font-size:30px; color:white;"> Các hội nghị năm 2019 </h1>
			</div>
		@foreach($HoiNghis as $hoiNghi)
		<a href="{{url('hoi-nghi',$hoiNghi->id)}}">
			<div class="baiThuyetTrinhImage hoi-nghi-block" style='background: #ffffff url("{{url('/images',$hoiNghi->hinh)}}") no-repeat center center; background-size: cover;'>
				<div class="overlay">
					<div>
						<a class="name text-shadow" style="font-size:20px;">{{$hoiNghi->tenHoiNghi}}</a>
						<p class="text text-shadow" style="font-size:15px;">
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
@section('content_2')
@php
$i = 0
@endphp
		@foreach($HoiNghis as $hoiNghi)
		@if($i==0)
		<a href="{{url('hoi-nghi',$hoiNghi->id)}}">
			<div class="baiThuyetTrinhImage hoi-nghi-block" style='background: #ffffff url("{{url('/images',$hoiNghi->hinh)}}") no-repeat center center; background-size: cover;'>
			</div>
			<div class="overlay">
					<div>
						<h1 class="name" style="font-size:50px; color: black">{{$hoiNghi->tenHoiNghi}}</h1>
						<p>
						<a style="font-size:20px; color: black">Thời gian bắt đầu: {{$hoiNghi->thoiGianBatDau}} -> {{$hoiNghi->thoiGianKetThuc}} </a> <br>
						<a style="font-size:20px; color: black"> Địa Điểm: {{$hoiNghi->diaDiem}} </a><br>
						<br>
						<a style="font-size:20px; color: black">Mô tả: {{$hoiNghi->moTa}}</a><br>
						<a style="font-size:20px; color: black">Số lượng tối đa: {{$hoiNghi->soLuongToiDa}}</a><br>
						<a style="font-size:20px; color: black">Trạng thái: {{$hoiNghi->trangThai}}</a><br>
						<a style="font-size:20px; color: black">Nội dung: {{$hoiNghi->noiDung}}</a><br>
						</p>
					</div>
				</div>
		</a>
		<hr>
		@php
			$i = 1
			@endphp
		@endif

		@endforeach
@endsection
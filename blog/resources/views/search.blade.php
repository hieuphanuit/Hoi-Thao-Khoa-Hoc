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
	<div class="container" id="search_contain">
		<div>
			<div class="row">
				
				@foreach($hoinghis as $hoinghi)
					<div class="col-md-6">	
						<div class="thongtin-hoinghi">
							<a href="{{url('hoi-nghi',$hoinghi->id)}}">
								<div class="baiThuyetTrinhImage hoi-nghi-block" style='background: #ffffff url("{{url('/images',$hoinghi->hinh)}}") no-repeat center center; background-size: cover;margin:10px;'>
									<div class="overlay">
										<div>
											<p class="name" style="font-size:20px; color: white">{{$hoinghi->tenHoiNghi}}</p>
											<p class="text" style="font-size:15px;">
											{{$hoinghi->thoiGianBatDau}} -> {{$hoinghi->thoiGianKetThuc}} <br>
											Địa Điểm: {{$hoinghi->diaDiem}}<br>
											<br>
											</p>
										</div>
									</div>
								</div>
							</a>
						</div>
					</div>
				@endforeach
			</div>
		</div>
	</div>
@endsection
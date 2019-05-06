<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>{{ config('app.name', 'Laravel') }}</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="{{url('/bower_components/bootstrap/dist/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{url('/bower_components/font-awesome/css/font-awesome.min.css')}}">
  <link rel="stylesheet" href="{{url('/bower_components/Ionicons/css/ionicons.min.css')}}">
  <link rel="stylesheet" href="{{url('/bower_components/jvectormap/jquery-jvectormap.css')}}">
  <link rel="stylesheet" href="{{url('/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css')}}">
  <link rel="stylesheet" href="{{url('/bower_components/bootstrap-daterangepicker/daterangepicker.css')}}">
  <link rel="stylesheet" href="{{url('/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')}}">
  <link rel="stylesheet" href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
  <link rel="stylesheet" href="{{url('/css/custom.css')}}">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

  @section('css')

  @show
</head>
<body class="">
	<header style="text-align: center; background-color: #3D9970; padding:20px; position: relative;">
		<div class="row">
			<div class="col-md-6">
			<h2><img style= "margin-right:20px;"src="{{ asset('uploads/logo.png') }}" width="50"><a style="color: white; text-transform: uppercase; font-weight: bold" href="{{url('/')}}">Hội Nghị Khoa Học</a><h2>
			</div>
			<div class="col-md-6">
				<h2 style="padding-top:10px;"><a style="color: white; text-transform: uppercase; font-weight: bold" href="{{url('/login')}}">Là người thuyết trình?</a><h2>
			</div>
		</div>
	  </header>
	<div class="hoinghi_img">
	<div class="container">
		<section class="content-header">
		  <h3 class="list_hoinghi">
			@section('title')
			   Hội nghị tiêu biểu:
			@show
		  </h3>
		</section>
		<hr/>
		<section class="content">
			@yield('content')
		</section>
	</div>
	</div>
<div class="container body_hoinghi">
	<div class="row">
		<div class="col-md-7">
			<section class="content_2">
			@yield('content_2')
			</section>
		</div>
		<div class="col-md-5">
			<section class="content_1">
			@yield('content_1')
			</section>
		</div>
	</div>
</div>

<footer class="main-footer"style="text-align: center; background-color: #3D9970; padding:20px; position: relative;">
		<div class="cover">
			<div class="container">
				<div class="row">
					<div class="col-sm-3">
						<h3 style="color:white">Nav links</h3>
						<a style="color:white" href="">Link 1</a><br>
						<a style="color:white" href="">Link 2</a><br>
						<a style="color:white" href="">Link 3</a><br>
						<a style="color:white" href="">Link 4</a><br>
					</div>
					
					<div class="col-sm-3">
						<h3 style="color:white">Liên hệ</h3>
						<address>
						<p style="color:white" ><b>Địa chỉ: </b><i>Trường CNTT<br>
							Linh Trung, Thủ Đức, HCM</i>
						</p>
						<p style="color:white"><b>Điện thoại: </b><i>0964030602</i>
						</p>
						<p style="color:white"><b>Mail: </b><a style="color:white" href="mailto:16520412@gm.uit.edu.vn" target="_blank"><i>16520412@gm.uit.edu.vn</i></a>
						</p>
						</address>
					</div>

					<div class="col-sm-3">
						<h3 style="color:white">Dev Team</h3>
						<p style="color:white">
							<a style="color:white" href="https://www.facebook.com/phandinhminh.hieu" target="_blank">Phan Đình Minh Hiếu</a><br>
							<a style="color:white" href="https://www.facebook.com/lanphuong.nguyen.1309" target="_blank">Nguyễn Thị Lan Phương</a><br>
							<a style="color:white" href="https://www.facebook.com/H15101998" target="_blank">Phạm Bảo Hân</a><br>
							<a style="color:white" href="https://www.facebook.com/profile.php?id=100010713276063"  target="_blank">Hà Kiệt Hùng</a>
						</p>
					</div>
					<div class="col-sm-3">
						<h3 style="color:white" >Follow Us</h3>
						</br>
						<a style= "padding-right:10px" href="https://www.facebook.com/phandinhminh.hieu" target="_blank"><img style="width: 30px; height:30px;" src="/uploads/facebook.png"/></a>
						<a href="https://plus.google.com/110251690083587542042" target="_blank"><img style="width: 40px; height:40px;" src="/uploads/google.png"/></a>
					</div>
				</div>
			</div>
		</div>
</footer>
  
</div>
<!-- jQuery 3 -->
<script src="{{url('/bower_components/jquery/dist/jquery.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{url('/bower_components/jquery-ui/jquery-ui.min.js')}}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>
</html>
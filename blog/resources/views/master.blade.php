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
<div>
    <header style="text-align: center; background-color: #ddd; padding: 20px; position: relative">
		<h2><a style="color: darkblue; text-transform: uppercase; font-weight: bold" href="{{url('/')}}">Hội Nghị Khoa Học</a><h2>
    <a style="position: absolute; right: 10px; top: 18px"href="{{url('/login')}}"><small>Là người thuyết trình?</small></a>
  </header>
</div>

<div class="container">
    <section class="content-header">
      <h3>
        @section('title')
           Danh Sách Hội Nghị
        @show
      </h3>
    </section>
    <hr/>
    <section class="content">
        @yield('content')
    </section>
  </div>
  <footer class="main-footer">
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
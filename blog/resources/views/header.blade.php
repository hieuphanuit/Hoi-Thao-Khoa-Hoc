<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Hội nghị khoa học</title>
			
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
		<link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
		<!-- CSS -->
        <link href="/css/app.css" rel="stylesheet" type="text/css">
		<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
		<link href="{{ asset('css/custom_style.css') }}" rel="stylesheet">
		<!-- JS -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script src="{{ asset('js/bootstrap.min.js') }}"></script>
		<script src="{{ asset('js/custom_js.js') }}"></script>
    </head>
    <body>
	<header>
		<div class="header-menu">
				<div class="row">
					<div class="col-md-2">
						<a href="{{url('/')}}"><img src="/upload/logo.png" width="50" height="50"></a>
					</div>
					<div class="col-md-1">
						<a><b>Home</b></a>
					</div>
					<div class="col-md-1">
						<a><b>Call for Papers</b></a>
					</div>
					<div class="col-md-1">
						<a><b>Committee</b></a>
					</div>
					<div class="col-md-1">
						<a><b>Author</b></a>
					</div>
					<div class="col-md-1">
						<a><b>Speakers</b></a>
					</div>
					<div class="col-md-1">
						<a><b>Special Sessions</b></a>
					</div>
					<div class="col-md-1">
						<a><b>Previous ISCIT</b></a>
					</div>
					<div class="col-md-1">
						<a><b>Contact</b></a>
					</div>
					<div class="col-md-1">
						<a href="#" width="50" height="50"></a>
					</div>
			</div>
		</div>
	</header>
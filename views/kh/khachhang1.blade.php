<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
        <title>@yield('title')</title>
        <link rel="shortcut icon" type="image/icon" href="{{asset('./assets/logo/favicon.png')}}">
        <link rel="stylesheet" href="{{asset('./assets/css/font-awesome.min.css')}}">
        <link rel="stylesheet" href="{{asset('./assets/css/linearicons.css')}}">
        <link rel="stylesheet" href="{{asset('./assets/css/animate.css')}}">
        <link rel="stylesheet" href="{{asset('./assets/css/flaticon.css')}}">
        <link rel="stylesheet" href="{{asset('./assets/css/slick.css')}}">
        <link rel="stylesheet" href="{{asset('./assets/css/slick-theme.css')}}">
        <link rel="stylesheet" href="{{asset('./assets/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('./assets/css/bootsnav.css')}}">
        <link rel="stylesheet" href="{{asset('./assets/css/style.css')}}">
        <link rel="stylesheet" href="assets/css/responsive.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/5.3.45/css/materialdesignicons.css" integrity="sha256-NAxhqDvtY0l4xn+YVa6WjAcmd94NNfttjNsDmNatFVc=" crossorigin="anonymous" />
        <!-- Font Awesome Icons -->
        <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
        <link href="{{ asset('./assets/css/nucleo-svg.css')}}" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
        @yield('css')

    </head>
	<style>
        h2,a{
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        body{
            background:#eee;
        }
    </style>
	<body>
		@include('kh.navbar')
        @yield('content')

		@include('kh.ques')
        @include('kh.footer')
        @yield('js')
		<script src="assets/js/jquery.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
		<script src="assets/js/bootsnav.js"></script>
        <script  src="assets/js/feather.min.js"></script>
		<script src="assets/js/jquery.counterup.min.js"></script>
		<script src="assets/js/waypoints.min.js"></script>
        <script src="assets/js/slick.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <script src="assets/js/custom.js"></script>
    </body>
</html>
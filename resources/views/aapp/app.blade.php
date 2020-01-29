<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no">
</head>

<link href="{{asset('asset/css/main.css')}}" rel="stylesheet">
<link href="{{asset('asset/css/style.css')}}" rel="stylesheet">
<link href="{{asset('asset/icon/icon/css/helper.css')}}" rel="stylesheet">
<link href="{{asset('asset/icon/icon/css/pe-icon-7-stroke.css')}}" rel="stylesheet">
<link href="{{asset('asset/font-awesome-4.7.0/css/font-awesome.min.css')}}" rel="stylesheet">
<link href="{{asset('asset/font-awesome-4.7.0/css/font-awesome.css')}}" rel="stylesheet">
<link href="{{asset('asset/css/animation.css')}}" rel="stylesheet">
<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="{{asset('asset/DataTables/datatables.min.css')}}"/>

<link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.min.css'>


@yield('css-plus')

<body>

	<div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">

		@include('aapp.navbar')  

		{{-- @include('aapp.setting') --}}        

		@include('aapp.main')
	</div>

	<script src="{{asset('asset/js/main.js')}}"></script>
	<script src="https://kit.fontawesome.com/a076d05399.js"></script>
	<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js'></script>
	<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
	
	<script src="{{asset('asset/DataTables/datatables.min.js')}}"></script>
	<script src="{{asset('asset/DataTables/pdf.js')}}"></script>
	<script src="{{asset('asset/DataTables/vfs_fonts.js')}}"></script>
	<script src="{{asset('asset/DataTables/button.js')}}"></script>
	<script src="{{asset('asset/DataTables/jzip.js')}}"></script>
	@include('sweetalert::alert')
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.all.min.js"></script>
	
	@yield('js-plus')
	
	@include('aapp.swal')

</body>

</html>

@yield('modal')
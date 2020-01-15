<!DOCTYPE html>
<html>
<head>
  <title>@yield('title')</title>
</head>

<link href="{{asset('asset/css/main.css')}}" rel="stylesheet">
<link href="{{asset('asset/icon/icon/css/helper.css')}}" rel="stylesheet">
<link href="{{asset('asset/icon/icon/css/pe-icon-7-stroke.css')}}" rel="stylesheet">
<link href="{{asset('asset/font-awesome-4.7.0/css/font-awesome.min.css')}}" rel="stylesheet">
<link href="{{asset('asset/font-awesome-4.7.0/css/font-awesome.css')}}" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">

@yield('css-plus')

<body>

 <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">

  @include('aapp.navbar')  

  @include('aapp.setting')        

  @include('aapp.main')
</div>

<script type="text/javascript" src="{{asset('asset/js/main.js')}}"></script>
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="http://maps.google.com/maps/api/js?sensor=true"></script>
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>

@yield('js-plus')

</body>

</html>
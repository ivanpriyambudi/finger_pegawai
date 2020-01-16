@extends('aapp.sidebar')

@section('sidebar-konten')
<li class="app-sidebar__heading">Dashboard</li>
<li>
  <a href="{{route('DashboardGuru')}}" class=" 
  {{ (request()->routeIs(

    'DashboardGuru'

    )) ? 'mm-active' : '' }}
    ">
    <i class="metismenu-icon pe-7s-home"></i>
    Dashboard
  </a>
</li>
<li class="app-sidebar__heading">Absensi</li>
<li>
  <a href="{{route('AbsensiHariIni')}}" class="
  {{ (request()->routeIs(

    'AbsensiHariIni'

    )) ? 'mm-active' : '' }}
    ">
    <i class="metismenu-icon pe-7s-clock"></i>
    Hari ini
  </a>
</li>
<li>
  <a href="{{route('AbsensiRekap')}}" class="
  {{ (request()->routeIs(

    'AbsensiRekap'

    )) ? 'mm-active' : '' }}
    ">
    <i class="metismenu-icon pe-7s-news-paper"></i>
    Rekap Absensi
  </a>
</li>
<li>
  <a href="{{route('AbsensiIzin')}}" class="
  {{ (request()->routeIs(

    'AbsensiIzin'

    )) ? 'mm-active' : '' }}
    ">
    <i class="metismenu-icon pe-7s-mail-open-file"></i>
    Surat Izin
  </a>
</li>
@endsection
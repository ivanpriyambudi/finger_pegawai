@extends('aapp.sidebar')

@section('sidebar-konten')
<li class="app-sidebar__heading">Dashboard</li>
<li>
  <a href="{{route('DashboardAdminSekolah')}}" class=" 
  {{ (request()->routeIs(

    'DashboardAdminSekolah'

    )) ? 'mm-active' : '' }}
    ">
    <i class="metismenu-icon pe-7s-home"></i>
    Dashboard
  </a>
</li>

<li class="app-sidebar__heading">Guru</li>
<li>
  <a href="{{route('AdminSekolahTabelGuru')}}" class="
  {{ (request()->routeIs(

    'AdminSekolahTabelGuru'

    )) ? 'mm-active' : '' }}
    ">
    <i class="metismenu-icon pe-7s-like"></i>
    Tabel Guru
  </a>
</li>

<li>
  <a href="#">
    <i class="metismenu-icon pe-7s-news-paper"></i>Absensi Guru
    <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
  </a>
  <ul>
    <li>
      <a href="#!">
        <i class="metismenu-icon"></i>
        Absensi Hari Ini
      </a>
    </li>
    <li>
      <a href="#!">
        <i class="metismenu-icon"></i>
        Rekap Absensi
      </a>
    </li>
  </ul>
</li>

<li class="app-sidebar__heading">Siswa</li>
<li>
  <a href="{{route('TabelSiswaGuru')}}" class="
  {{ (request()->routeIs(

    'TabelSiswaGuru'

    )) ? 'mm-active' : '' }}
    ">
    <i class="metismenu-icon pe-7s-like"></i>
    Tabel Siswa
  </a>
</li>

<li>
  <a href="#">
    <i class="metismenu-icon pe-7s-news-paper"></i>Absensi Siswa
    <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
  </a>
  <ul>
    <li>
      <a href="#!">
        <i class="metismenu-icon"></i>
        Absensi Hari Ini
      </a>
    </li>
    <li>
      <a href="#!">
        <i class="metismenu-icon"></i>
        Rekap Absensi
      </a>
    </li>
  </ul>
</li>

@endsection
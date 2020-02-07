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

<li class="
{{ (request()->routeIs(

  'AdminSekolahRekapGuru',
  'AdminSekolahHariIniGuru'

  )) ? 'mm-active' : '' }}
  ">
  <a href="#">
    <i class="metismenu-icon pe-7s-news-paper"></i>Absensi Guru
    <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
  </a>
  <ul>
    <li>
      <a href="{{route('AdminSekolahHariIniGuru')}}" class="
      {{ (request()->routeIs(

        'AdminSekolahHariIniGuru'

        )) ? 'mm-active' : '' }}
        ">
        <i class="metismenu-icon"></i>
        Absensi Hari Ini
      </a>
    </li>
    <li>
      <a href="{{route('AdminSekolahRekapGuru')}}" class="
      {{ (request()->routeIs(

        'AdminSekolahRekapGuru'

        )) ? 'mm-active' : '' }}
        ">
        <i class="metismenu-icon"></i>
        Rekap Absensi
      </a>
    </li>
  </ul>
</li>
<li>
  <a href="{{route('AdminSekolahSuratIzin')}}" class="
  {{ (request()->routeIs(

    'AdminSekolahSuratIzin'

    )) ? 'mm-active' : '' }}
    ">
    <i class="metismenu-icon pe-7s-mail-open-file"></i>
    Surat Izin
  </a>
</li>

<li class="app-sidebar__heading">Siswa</li>
<li>
  <a href="{{route('AdminSekolahTabelSiswa')}}" class="
  {{ (request()->routeIs(

    'AdminSekolahTabelSiswa'

    )) ? 'mm-active' : '' }}
    ">
    <i class="metismenu-icon pe-7s-like"></i>
    Tabel Siswa
  </a>
</li>

<li class="
{{ (request()->routeIs(

  'AdminSekolahHariIniSiswa',
  'AdminSekolahRekapSiswa'

  )) ? 'mm-active' : '' }}
  ">
  <a href="#">
    <i class="metismenu-icon pe-7s-news-paper"></i>Absensi Siswa
    <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
  </a>
  <ul>
    <li>
      <a href="{{route('AdminSekolahHariIniSiswa')}}" class="
      {{ (request()->routeIs(

        'AdminSekolahHariIniSiswa'

        )) ? 'mm-active' : '' }}
        ">
        <i class="metismenu-icon"></i>
        Absensi Hari Ini
      </a>
    </li>
    <li>
      <a href="{{route('AdminSekolahRekapSiswa')}}" class="
      {{ (request()->routeIs(

        'AdminSekolahRekapSiswa'

        )) ? 'mm-active' : '' }}
        ">
        <i class="metismenu-icon"></i>
        Rekap Absensi
      </a>
    </li>
  </ul>
</li>

<li class="app-sidebar__heading">Wali Murid</li>
<li>
  <a href="{{route('AdminSekolahTabelWaliMuird')}}" class="
  {{ (request()->routeIs(

    'AdminSekolahTabelWaliMuird'

    )) ? 'mm-active' : '' }}
    ">
    <i class="metismenu-icon pe-7s-like"></i>
    Tabel Wali Murid
  </a>
</li>

@endsection
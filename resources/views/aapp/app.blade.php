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

  <div class="app-main">

    @if(Auth::guard('guru'))
    @auth('guru')
    @include('guru.app.sidebar')
    @endauth 
    @endif

    @if(Auth::guard('kepsek'))
    @auth('kepsek')
    @include('kepsek.app.sidebar')
    @endauth 
    @endif

    @if(Auth::guard('adminsekolah'))
    @auth('adminsekolah')
    @include('admin-sekolah.app.sidebar')
    @endauth 
    @endif

    @if(Auth::guard('adminkecamatan'))
    @auth('adminkecamatan')
    @include('admin-kecamatan.app.sidebar')
    @endauth 
    @endif

    @if(Auth::guard('admindinas'))
    @auth('admindinas')
    @include('admin-dinas.app.sidebar')
    @endauth 
    @endif

    @if(Auth::guard('adminmaster'))
    @auth('adminmaster')
    @include('admin-master.app.sidebar')
    @endauth 
    @endif

    <div class="app-main__outer">
      <div class="app-main__inner">

        <div class="app-page-title">
          <div class="page-title-wrapper">

            <div class="page-title-heading">
              <div class="page-title-icon">
                @yield('page-title-icon')
              </div>
              <div>
                @yield('page-title-text')
                <div class="page-title-subheading">
                  @yield('page-title-desk')
                </div>
              </div>
            </div>

            <div class="page-title-actions">

              @yield('page-title-action')
              
            </div>

          </div>
        </div>

        @yield('page-content') 

      </div>

      @include('aapp.footer')

    </div>
  </div>
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
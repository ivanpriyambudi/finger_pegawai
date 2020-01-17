<div class="app-header header-shadow">
  <div class="app-header__logo">
    <div class="logo-src"></div>
    <div class="header__pane ml-auto">
      <div>
        <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
          <span class="hamburger-box">
            <span class="hamburger-inner"></span>
          </span>
        </button>
      </div>
    </div>
  </div>

  <div class="app-header__mobile-menu">
    <div>
      <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
        <span class="hamburger-box">
          <span class="hamburger-inner"></span>
        </span>
      </button>
    </div>
  </div>

  <div class="app-header__menu">
    <span>
      <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
        <span class="btn-icon-wrapper">
          <i class="fa fa-ellipsis-v fa-w-6"></i>
        </span>
      </button>
    </span>
  </div>  

  <div class="app-header__content">

    <div class="app-header-left">
      @if(Auth::guard('guru'))
      @auth('guru')
      @include('guru.app.navbar-konten-left')
      @endauth 
      @endif

      @if(Auth::guard('walimurid'))
      @auth('walimurid')
      @include('wali-murid.app.navbar-konten-left')
      @endauth 
      @endif

      @if(Auth::guard('adminsekolah'))
      @auth('adminsekolah')
      @include('admin-sekolah.app.navbar-konten-left')
      @endauth 
      @endif

      @if(Auth::guard('adminkecamatan'))
      @auth('adminkecamatan')
      @include('admin-kecamatan.app.navbar-konten-left')
      @endauth 
      @endif

      @if(Auth::guard('admindinas'))
      @auth('admindinas')
      @include('admin-dinas.app.navbar-konten-left')
      @endauth 
      @endif

      @if(Auth::guard('adminmaster'))
      @auth('adminmaster')
      @include('admin-master.app.navbar-konten-left')
      @endauth 
      @endif

    </div>

    <div class="app-header-right">

      @if(Auth::guard('guru'))
      @auth('guru')
      @include('guru.app.navbar-konten-right')
      @endauth 
      @endif

      @if(Auth::guard('walimurid'))
      @auth('walimurid')
      @include('wali-murid.app.navbar-konten-right')
      @endauth 
      @endif

      @if(Auth::guard('adminsekolah'))
      @auth('adminsekolah')
      @include('admin-sekolah.app.navbar-konten-right')
      @endauth 
      @endif

      @if(Auth::guard('adminkecamatan'))
      @auth('adminkecamatan')
      @include('admin-kecamatan.app.navbar-konten-right')
      @endauth 
      @endif

      @if(Auth::guard('admindinas'))
      @auth('admindinas')
      @include('admin-dinas.app.navbar-konten-right')
      @endauth 
      @endif

      @if(Auth::guard('adminmaster'))
      @auth('adminmaster')
      @include('admin-master.app.navbar-konten-right')
      @endauth 
      @endif

    </div>

  </div>
</div>
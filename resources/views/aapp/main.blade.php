<div class="app-main">

    @if(Auth::guard('guru'))
    @auth('guru')
    @include('guru.app.sidebar')
    @endauth 
    @endif

    @if(Auth::guard('walimurid'))
    @auth('walimurid')
    @include('wali-murid.app.sidebar')
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
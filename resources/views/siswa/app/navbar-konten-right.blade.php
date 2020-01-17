
<div class="header-dots">
  <div class="dropdown">

    <button type="button" aria-haspopup="true" aria-expanded="false" data-toggle="dropdown" class="p-0 mr-2 btn btn-link">
      <span class="icon-wrapper icon-wrapper-alt rounded-circle">
        <span class="icon-wrapper-bg bg-danger"></span>
        <i class="icon text-danger icon-anim-pulse pe-7s-bell"></i>
        <span class="badge badge-dot badge-dot-sm badge-danger">Notifications</span>
      </span>
    </button>

    <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu-xl rm-pointers dropdown-menu dropdown-menu-right">
      <div class="dropdown-menu-header mb-0">
        <div class="dropdown-menu-header-inner bg-deep-blue">
          <div class="menu-header-image opacity-1" style="background-image: url('{{asset('asset/images/dropdown-header/city3.jpg')}}');"></div>
          <div class="menu-header-content text-dark">
            <h5 class="menu-header-title">Notifications</h5>
            <h6 class="menu-header-subtitle">Anda Memiliki <b>1</b> Notifikasi belum dibaca</h6>
          </div>
        </div>
      </div>

      <ul class="list-group list-group-flush">
        <li class="list-group-item">
          <div class="widget-content p-0">
            <div class="widget-content-wrapper">
              <div class="widget-content-left mr-3">
                <div class="icon-wrapper border-light rounded m-0">
                  <div class="icon-wrapper-bg bg-light"></div>
                  <i class="pe-7s-mail-open-file icon-gradient bg-happy-itmeo"></i></div>
                </div>
                <div class="widget-content-left">
                  <div class="widget-heading">Pengajuan Surat Izin</div>
                  <div class="width-subheading">Senin, 13 Oktober 2020</div>
                </div>
                <div class="widget-content-right">
                  <a href="{{route('AbsensiIzin')}}" class="btn-pill btn-hover-shine btn btn-primary btn-sm">Details</a>
                </div>
              </div>
            </div>
          </li>
        </ul>

        <ul class="nav flex-column">
          <li class="nav-item-btn text-center nav-item">
            <button class="btn-shadow btn-wide btn-pill btn btn-focus btn-sm">Lihat Semua Notifikasi</button>
          </li>
        </ul>
      </div>

    </div>
  </div>

  <div class="header-btn-lg pr-0">
    <div class="widget-content p-0">
      <div class="widget-content-wrapper">
        <div class="widget-content-left">
          <div class="btn-group">
            <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="p-0 btn">
              <img width="42" class="rounded-circle" src="{{asset('asset/images/avatars/1.jpg')}}" alt="">
              <i class="fa fa-angle-down ml-2 opacity-8"></i>
            </a>

            <div tabindex="-1" role="menu" aria-hidden="true" class="rm-pointers dropdown-menu-lg dropdown-menu dropdown-menu-right">
              <div class="dropdown-menu-header">
                <div class="dropdown-menu-header-inner bg-info">

                  <div class="menu-header-image opacity-2" style="background-image: url('{{asset('asset/images/dropdown-header/city3.jpg')}}');">
                  </div>

                  <div class="menu-header-content text-left">
                    <div class="widget-content p-0">
                      <div class="widget-content-wrapper">
                        <div class="widget-content-left mr-3">
                          <img width="42" class="rounded-circle" src="{{asset('asset/images/avatars/1.jpg')}}" alt="">
                        </div>
                        <div class="widget-content-left">
                          <div class="widget-heading">{{Auth::guard('guru')->user()->name}}
                          </div>
                          <div class="widget-subheading opacity-8">Guru
                          </div>
                        </div>
                        <div class="widget-content-right mr-2">
                          <a href="/logout" class="btn-pill btn-shadow btn-shine btn btn-focus">Logout</a>
                        </div>
                      </div>
                    </div>
                  </div>

                </div>
              </div>

              <div class="scrollbar-container ps">
                <ul class="nav flex-column">
                  <li class="nav-item">
                    <a href="{{route('ProfileGuru')}}" class="nav-link">Profile
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="javascript:void(0);" class="nav-link">Setting
                    </a>
                  </li>
                </ul>
              </div>

            </div>

          </div>
        </div>
        <div class="widget-content-left  ml-3 header-user-info">
          <div class="widget-heading">

          </div>
          <div class="widget-subheading">

          </div>
        </div>

      </div>
    </div>
  </div>


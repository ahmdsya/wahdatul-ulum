<header class="main-header">
    <!-- Logo -->
    <a href="{{route('admin.home')}}" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>Wa</b> 'U</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Wahdatul</b> 'Ulum</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <li class="dropdown">
            <a href="http://wahdatululum.uinsu.ac.id/" target="blank">
              <span class="hidden-xs"><i class="fa fa-desktop" style="margin-right: 5px;"></i> Lihat Situs</span>
            </a>
          </li>
          <li class="dropdown">
            <a href="{{route('profil.index')}}">
              <span class="hidden-xs"><i class="fa fa-user" style="margin-right: 5px;"></i> Profil</span>
            </a>
          </li>
          <li class="dropdown user user-menu">
            <a href="{{route('admin.logout')}}">
              <span class="hidden-xs"><i class="fa fa-external-link" style="margin-right: 5px;"></i> Keluar</span>
            </a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">

        <li class="{{ (Request::segment(1) == 'admin' && Request::segment(2) == '' ? 'active' : '') }}">
          <a href="{{route('admin.home')}}"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a>
        </li>

        <li class="{{ (Request::segment(2) == 'kata-sambutan' ? 'active' : '') }}">
          <a href="{{route('kata-sambutan.index')}}"><i class="fa fa-bullhorn"></i> <span>Kata Sambutan</span></a>
        </li>
        <li class="{{ (Request::segment(2) == 'artikel' ? 'active' : '') }}">
          <a href="{{route('artikel.index')}}"><i class="fa fa-newspaper-o"></i> <span>Artikel</span></a>
        </li>

        <li class="{{ (Request::segment(2) == 'bagian' ? 'active' : '') }}">
          <a href="{{route('bagian.index')}}"><i class="fa fa-leaf"></i> <span>Bagian</span></a>
        </li>

        <!-- <li class="{{ (Request::segment(2) == 'profil' ? 'active' : '') }}">
          <a href="#"><i class="fa fa-users"></i> <span>Profil</span></a>
        </li> -->

        <li class="{{ (Request::segment(2) == 'pengaturan' ? 'active' : '') }}">
          <a href="{{route('pengaturan.index')}}"><i class="fa fa-gears "></i> <span>Pengaturan</span></a>
        </li>

      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
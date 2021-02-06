  <!--/ Nav Star /-->
  
  <nav class="navbar navbar-default navbar-trans navbar-expand-lg fixed-top">
    <div class="container">
      <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarDefault"
        aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span></span>
        <span></span>
        <span></span>
      </button>
      <a class="navbar-brand text-brand" href="{{route('home')}}" style="font-size: 25px; margin-left: -85px;">WAHDATUL<span class="color-b"> ‘ULÛM</span></a>
      <button type="button" class="btn btn-link nav-search navbar-toggle-box-collapse d-md-none" data-toggle="collapse"
        data-target="#navbarTogglerDemo01" aria-expanded="false">
        <span class="fa fa-search" aria-hidden="true"></span>
      </button>
      <div class="navbar-collapse collapse justify-content-center" id="navbarDefault">
        <ul class="navbar-nav">
          <!-- <li class="nav-item">
            <a class="nav-link" href="{{route('home')}}">Beranda</a>
          </li> -->
          <!-- <li class="nav-item">
            <a class="nav-link" href="#">Profil</a>
          </li> -->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">
              Integrasi Ilmu
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              @foreach(artikel('Bagian Pertama') as $pertama)
              <a class="dropdown-item" href="{{route('artikel.single', ['id' => $pertama->id, 'judul' => $pertama->judul])}}">{{$pertama->judul}}</a>
              @endforeach
              <!-- <a class="dropdown-item" href="{{asset('pdf/Bagian-Pertama.pdf')}}">Download Bagian Pertama</a> -->
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">
              Pendekatan Trandisipliner
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              @foreach(artikel('Bagian Kedua') as $kedua)
              <a class="dropdown-item" href="{{route('artikel.single', ['id' => $kedua->id, 'judul' => $kedua->judul])}}">{{$kedua->judul}}</a>
              @endforeach
              <!-- <a class="dropdown-item" href="{{asset('pdf/Bagian-Kedua.pdf')}}">Download Bagian Kedua</a> -->
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">
              Karakter Alumni
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              @foreach(artikel('Bagian Ketiga') as $ketiga)
              <a class="dropdown-item" href="{{route('artikel.single', ['id' => $ketiga->id, 'judul' => $ketiga->judul])}}">{{$ketiga->judul}}</a>
              @endforeach
              <!-- <a class="dropdown-item" href="{{asset('pdf/Bagian-Ketiga.pdf')}}">Download Bagian Ketiga</a> -->
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">
              Implementasi
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              @foreach(artikel('Bagian Keempat') as $keempat)
              <a class="dropdown-item" href="{{route('artikel.single', ['id' => $keempat->id, 'judul' => $keempat->judul])}}">{{$keempat->judul}}</a>
              @endforeach
              <!-- <a class="dropdown-item" href="{{asset('pdf/Bagian-Ketiga.pdf')}}">Download Bagian Ketiga</a> -->
            </div>
          </li>
        </ul>
      </div>
      <button style="margin-right: -85px;" type="button" class="btn btn-b-n navbar-toggle-box-collapse d-none d-md-block" data-toggle="collapse"
        data-target="#navbarTogglerDemo01" aria-expanded="false">
        <span class="fa fa-search" aria-hidden="true"></span>
      </button>
    </div><br>
  </nav>
  <!--/ Nav End /-->
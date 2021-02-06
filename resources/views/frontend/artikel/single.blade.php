  @extends('frontend.component.master')
  @section('konten')
  @include('frontend.component._carouselite')

  <!--/ Intro Single star /-->
  <section class="intro-single" style="margin-top: -80px;">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-lg-12">
          <div class="title-single-box">
            <h1 class="title-single">{{$artikel->judul}}</h1>
            <!-- <span class="color-text-a">{{$artikel->bagian}}</span> -->
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--/ Intro Single End /-->

  <!--/ News Single Star /-->
  <section class="news-single nav-arrow-b">
    <div class="container">
      <div class="row">

        <div class="col-md-3 col-lg-3" id="left-widget" style="margin-top: 150px;">
          <div id="accordion">
            <div class="card">
              <div class="card-header" id="beranda">
                <h5 class="mb-0">
                  <button class="btn btn-link" data-toggle="collapse" data-target="#beranda" aria-expanded="true" aria-controls="beranda">
                    <a href="{{route('home')}}" style="color: #445A19;">Beranda</a>
                  </button>
                </h5>
              </div>

              <!-- <div id="beranda" class="collapse" aria-labelledby="beranda" data-parent="#accordion">
                <div class="card-body">
                  <ul class="list-group list-group-flush">
                    @foreach(bagianPertama() as $pertama)
                    <li class="list-group-item"><a href="{{route('artikel.single', ['id' => $pertama->id, 'judul' => $pertama->judul])}}">{{$pertama->judul}}</a></li>
                    @endforeach
                  </ul>
                </div>
              </div> -->
            </div>
            <div class="card">
              <div class="card-header" id="headingOne">
                <h5 class="mb-0">
                  <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" style="color: #445A19;">
                    Integrasi Ilmu
                  </button>
                </h5>
              </div>

              <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                <div class="card-body">
                  <ul class="list-group list-group-flush">
                    @foreach(bagianPertama() as $pertama)
                    <li class="list-group-item"><a href="{{route('artikel.single', ['id' => $pertama->id, 'judul' => $pertama->judul])}}">{{$pertama->judul}}</a></li>
                    @endforeach
                  </ul>
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header" id="headingTwo">
                <h5 class="mb-0">
                  <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" style="color: #445A19;">
                    Pendekatan Trandisipliner
                  </button>
                </h5>
              </div>
              <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                <div class="card-body">
                  <ul class="list-group list-group-flush">
                    @foreach(bagianKedua() as $kedua)
                    <li class="list-group-item"><a href="{{route('artikel.single', ['id' => $kedua->id, 'judul' => $kedua->judul])}}">{{$kedua->judul}}</a></li>
                    @endforeach
                  </ul>
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header" id="headingThree">
                <h5 class="mb-0">
                  <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree" style="color: #445A19;">
                    Karakter Alumni
                  </button>
                </h5>
              </div>
              <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                <div class="card-body">
                  <ul class="list-group list-group-flush">
                    @foreach(bagianKetiga() as $ketiga)
                    <li class="list-group-item"><a href="{{route('artikel.single', ['id' => $ketiga->id, 'judul' => $ketiga->judul])}}">{{$ketiga->judul}}</a></li>
                    @endforeach
                  </ul>
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header" id="headingFour">
                <h5 class="mb-0">
                  <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour" style="color: #445A19;">
                    Implementasi
                  </button>
                </h5>
              </div>
              <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
                <div class="card-body">
                  <ul class="list-group list-group-flush">
                    @foreach(bagianKeempat() as $keempat)
                    <li class="list-group-item"><a href="{{route('artikel.single', ['id' => $keempat->id, 'judul' => $keempat->judul])}}">{{$keempat->judul}}</a></li>
                    @endforeach
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-9 col-lg-9">
          <div class="post-information">
            <ul class="list-inline text-center color-a">
              <li class="list-inline-item mr-2">
                <span class="color-text-a">
                	<strong><a href="{{route('artikel.bagian', $getbagian->bagian)}}">{{$getbagian->bagian}}</a></strong> - {{$getbagian->judul}} 
                </span>
              </li>
            </ul>
          </div>
          <div class="post-content color-text-a" style="margin-bottom: 30px;">
            {!! $artikel->artikel !!}
            <br>
            <p class="text-center">Download Wahdatul 'Ulum - {{$artikel->judul}} : <a href="{{asset($artikel->file)}}" target="_blank">Download</a></p>
          </div>
          <div id="disqus_thread"></div>
        </div>
      </div>
    </div>
  </section>
  <!--/ News Single End /-->

  @endsection
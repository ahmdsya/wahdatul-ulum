  @extends('frontend.component.master')
  @section('konten')
  @include('frontend.component._carousel')


  <!--/ Services Star /-->
  <section class="section-services section-t8">
    <div class="container">
      <div class="row">
        <div class="col-md-5">
          <div id="accordion" style="margin-bottom: 20px;">
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
                    Integerasi Ilmu
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
        <div class="col-md-7">
          <div class="row">
            @foreach($sambutan as $sam)
            <div class="col-md-4">
              <div class="card-box-c foo">
                <div class="card-header-c d-flex">
                    <img src="{{asset('img/'.$sam->foto)}}" class="rounded-circle" width="150" height="150">
                </div>
                <div class="card-body-c">
                  <p class="content-c">
                   <a href="{{route('kata.sambutan', $sam->id)}}">{{$sam->judul}}</a>
                  </p>
                </div>
              </div>
            </div>
            @endforeach
          </div>
        </div>
      </div>
      
    </div>
  </section>
  <!--/ Services End /-->

  <section class="section-services section-t8">
    <div class="container">
		<div class="row" style="text-align: center;">
		  	<div class="col-sm-6" style="margin-bottom: 30px;">
		  		<p>Diagram</p>
		  		<strong>Gambaran Cara Kerja Transdisipliner Integratif
          </strong><br>
		  		<img src="{{asset('img/trandisipliner-ingratif.jpg')}}">
		  	</div>
		  	<div class="col-sm-6" style="margin-bottom: 30px;">
		  		<p>Diagram</p>
		  		<strong>Profil & Karakter Ulul Albâb</strong><br>
		  		<img src="{{asset('img/profil-darul-albab.jpg')}}">
		  	</div>
		</div>
	</div>
  </section>

  <!--/ News Star /-->
  @if($artikel->count() >= 1)
  <section class="section-news section-t8">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="title-wrap d-flex justify-content-between">
            <div class="title-box">
              <h2 class="title-a">Daftar Artikel</h2>
            </div>
            <div class="title-link">
              <a href="{{route('artikel.semua')}}">Lihat Semua
                <span class="ion-ios-arrow-forward"></span>
              </a>
            </div>
          </div>
        </div>
      </div>
      	<div class="row">
          @foreach($artikel as $ar)
    		  <div class="col-sm-4" style="margin-bottom: 30px;">
    		    <div class="card border-success mb-3">
              <div class="card-header"><a href="{{route('artikel.bagian', $ar->bagian)}}">{{$ar->bagian}}</a></div>
              <div class="card-body">
                <h5 class="card-title"><a href="{{route('artikel.single', ['id' => $ar->id, 'judul' => $ar->judul])}}">{{$ar->judul}}</a></h5>
              </div>
            </div>
    		  </div>
          @endforeach

          

		    </div>
    </div>
  </section>
  @endif
  <!--/ News End /-->
  @endsection

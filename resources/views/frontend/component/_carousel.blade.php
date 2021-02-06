  <!--/ Carousel Star /-->
  <div class="intro intro-carousel">
    <div id="carousel" class="owl-carousel owl-theme">
      <div class="carousel-item-a intro-item bg-image" style="background-image: url(public/frontend/img/sampul.jpeg)">
        <div class="overlay overlay-a"></div>
        <div class="intro-content display-table">
          <div class="table-cell">
            <div class="container">
              <div class="row">
                <div class="col-lg-8">
                  <div class="intro-body">
                    <h1 class="intro-title mb-4">
                      WAHDATUL<span class="color-b"> ‘ULÛM</span>
                    </h1><br>
                    <h5 style="color: #ff0; margin-top: -50px; margin-bottom: 50px;">Paradigma Integrasi Keilmuan Universitas Islam Negeri Sumatera Utara Medan
                    </h5>
                    <h5 style="color: #fff;">WAHDATUL 'ULÛM (Unity of Science), paradigma integrasi keilmuan yang memahami dan meyakini bahwa ilmu pengetahuan adalah satu. Walaupun dikembangkan dalam sejumlah bidang ilmu dalam bentuk departemen atau fakultas, program studi, dan mata kuliah, namun semuanya memiliki kaitan kesatuan sebagai ilmu yang diyakini merupakan pemberian Tuhan. Oleh karenanya ontologi, epistemologi, dan aksiologinya dipersembahkan sebagai pengabdian kepada Tuhan dan didedikasikan bagi pengembangan peradaban dan kesejahteraan umat manusia.</h5>
                  </div>
                </div>

                <div class="col-lg-4">
                  <img src="{{asset('img/uinsu.png')}}">
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>
      @foreach($sambutan as $sam)
      <div class="carousel-item-a intro-item bg-image" style="background-image: url(public/frontend/img/sampul.jpeg)">
        <div class="overlay overlay-a"></div>
        <div class="intro-content display-table">
          <div class="table-cell">
            <div class="container">
              <div class="row">
                <div class="col-lg-3 text-center">
                  <img src="{{asset('img/'.$sam->foto)}}" class="rounded-circle">
                  <h4 class="mt-3">
                      <a href="{{route('kata.sambutan', $sam->id)}}" style="color: #2ECA6A;">{{$sam->tokoh}}</a>
                  </h4><br>
                  <h6 style="color: #fff;">{{$sam->jabatan}}</h6>
                </div>
                <div class="col-lg-8">
                  <div class="intro-body">
                    <h4 style="color: #fff" class="mt-5">
                      <!-- {{$sam->judul}} -->
                      {!! $sam->deskripsi !!}
                    </h4>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
  <!--/ Carousel end /-->
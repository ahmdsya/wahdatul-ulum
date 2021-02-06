@extends('frontend.component.master')
@section('konten')
@include('frontend.component._carouselite')

<!--/ Intro Single star /-->
  <section class="intro-single" style="margin-top: -80px;">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-lg-8">
          <div class="title-single-box">
            <h1 class="title-single">Hasil Pencarian</h1>
            <span class="color-text-a">"{{$cari}}"</span>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--/ Intro Single End /-->

    <!--/ News Star /-->
  @if($getArtikel->count() >= 1)
  <section class="section-news section-t8" style="margin-top: -80px;">
    <div class="container">
      	<div class="row">
          @foreach($getArtikel as $ar)
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

  @if($getPengantar->count() >= 1)
  <section class="section-news section-t8" style="margin-top: -80px;">
    <div class="container">
      	<div class="row">
          @foreach($getPengantar as $pe)
    		 <div class="col-md-4">
              <div class="card-box-c foo">
                <div class="card-header-c d-flex">
                    <img src="{{asset('img/'.$pe->foto)}}" class="rounded-circle" width="150" height="150">
                </div>
                <div class="card-body-c">
                  <p class="content-c">
                   <a href="{{route('kata.sambutan', $pe->id)}}">{{$pe->judul}}</a>
                  </p>
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
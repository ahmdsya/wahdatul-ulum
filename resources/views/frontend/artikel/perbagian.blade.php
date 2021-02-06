@extends('frontend.component.master')
@section('konten')
@include('frontend.component._carouselite')

<!--/ Intro Single star /-->
  <section class="intro-single" style="margin-top: -80px;">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-lg-8">
          <div class="title-single-box">
            <h1 class="title-single">{{$bagian->bagian}}</h1>
            <span class="color-text-a">{{$bagian->judul}}</span>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--/ Intro Single End /-->

    <!--/ News Star /-->
  @if($artikel->count() >= 1)
  <section class="section-news section-t8" style="margin-top: -80px;">
    <div class="container">
      	<div class="row">
          @foreach($artikel as $ar)
    		  <div class="col-sm-4" style="margin-bottom: 30px;">
    		    <div class="card border-success mb-3">
              <div class="card-header">{{$ar->bagian}}</div>
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
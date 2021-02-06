  @extends('frontend.component.master')
  @section('konten')

  <!--/ Intro Single star /-->
  <section class="intro-single">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-lg-8">
          <div class="title-single-box">
            <h1 class="title-single">{{$kata->judul}}</h1>
            <span class="color-text-a">{{$kata->jabatan}}</span>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--/ Intro Single End /-->

  <!--/ Agent Single Star /-->
  <section class="agent-single">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="row" style="margin-bottom: 50px;">
            <div class="col-md-2">
              <div class="agent-avatar-box">
                <img src="{{asset('img/'.$kata->foto)}}" alt="" class="agent-avatar img-fluid">
              </div>
            </div>
            <div class="col-md-9 section-md-t3" style="margin-bottom: 40px;">
              <div class="agent-info-box">
                <div class="agent-title">
                  <div class="title-box-d">
                    <h3 class="title-d">{{$kata->tokoh}}</h3>
                  </div>
                </div>
                <div class="agent-content mb-3">
                  {!! $kata->isi !!}
                </div>
              </div>
              <div id="disqus_thread"></div>
            </div>
          </div>
        </div>
      </div>
	</div>
  </section>
<!--/ Agent Single End /-->

  @endsection
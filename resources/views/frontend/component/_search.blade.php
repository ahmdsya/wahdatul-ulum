<body>
  <div class="click-closed"></div>
  <!--/ Form Search Star /-->
  <div class="box-collapse">
    <div class="title-box-d">
      <h3 class="title-d">Pencarian</h3>
    </div>
    <span class="close-box-collapse right-boxed ion-ios-close"></span>
    <div class="box-collapse-wrap form">
      <form method="POST" action="{{route('cari')}}" class="form-a">
        @csrf
        <div class="row">
          <div class="col-md-12 mb-2">
            <div class="form-group">
              <label for="Type">Kata Kunci</label>
              <input type="text" name="cari" class="form-control form-control-lg form-control-a" placeholder="Masukkan Kata Kunci">
            </div>
          </div>
          <div class="col-md-12">
            <button type="submit" class="btn btn-b">Cari</button>
          </div>
        </div>
      </form>
    </div>
  </div>
  <!--/ Form Search End /-->
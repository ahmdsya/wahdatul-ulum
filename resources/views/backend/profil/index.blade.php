@extends('backend.component.master')
@section('konten')
      
      @if(session('sukses'))
      <div class="alert alert-success alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
          {{session('sukses')}}
      </div>
      @elseif(session('gagal'))
      <div class="alert alert-danger alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
          {{session('gagal')}}
      </div>
      @endif

      <div class="row">
      	<section class="col-lg-6 connectedSortable">
      	    <!-- Default box -->
            <div class="box">
              <div class="box-header with-border">
                <h3 class="box-title">Ubah Profil</h3>
              </div>
              <div class="box-body">
                <form method="POST" action="{{route('profil.update', Auth::user()->id)}}">
                  @csrf
                  <input type="hidden" name="_method" value="PUT">
                <div class="form-group">
                  <label for="nama">Nama</label>
                  <input type="text" name="name" class="form-control" id="nama" value="{{Auth::user()->name}}">
                </div>
                <div class="form-group">
                  <label for="email">Email</label>
                  <input type="email" name="email" class="form-control" id="email" value="{{Auth::user()->email}}">
                </div>
                <div class="box-footer">
                  <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
                </form>

              </div>
              <!-- /.box-body -->
            </div>
            <!-- /.box -->
          </section>

          <section class="col-lg-6 connectedSortable">
      	    <!-- Default box -->
            <div class="box">
              <div class="box-header with-border">
                <h3 class="box-title">Ubah Password</h3>
              </div>
              <div class="box-body">
                <form method="POST" action="{{route('ubah.password')}}">
                  @csrf
                  <input type="hidden" name="_method" value="PUT">
                <div class="form-group">
                  <label for="lama">Password Lama</label>
                  <input type="password" name="lama" class="form-control" id="lama" placeholder="Password Lama" required>
                </div>
                <div class="form-group">
                  <label for="baru">Password Baru</label>
                  <input type="password" name="baru" class="form-control" id="baru" placeholder="Password Lama" required>
                </div>
                <div class="form-group">
                  <label for="ulangi">Ulangi Password Baru</label>
                  <input type="password" name="ulangi" class="form-control" id="ulangi" placeholder="Ulangi Password Baru" required>
                </div>
                <div class="box-footer">
                  <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
                </form>

              </div>
              <!-- /.box-body -->
            </div>
            <!-- /.box -->
          </section>
      </div>

@endsection
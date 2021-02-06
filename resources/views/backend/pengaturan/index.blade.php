@extends('backend.component.master')
@section('konten')

    @if(session('sukses'))
      <div class="alert alert-success alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
          {{session('sukses')}}
      </div>
    @elseif(session('gagal'))
      <div class="alert alert-success alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
          {{session('gagal')}}
      </div>
    @endif
	  <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Pengaturan</h3>
        </div>
        <div class="box-body">
          <form method="POST" action="{{route('pengaturan.update', $data->id)}}" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="_method" value="PUT">
          <table class="table">
            <tr>
              <td width="200px"></td>
              <td width="100px"><strong>Judul Situs</strong></td>
              <td>
                <input type="text" name="judul" class="form-control" value="{{$data->judul}}">
              </td>
              <td width="100px"></td>
            </tr>
            <tr>
              <td width="200px"></td>
              <td width="100px"><strong>Deskripsi Situs</strong></td>
              <td>
                <!-- <textarea name="deskripsi" class="pengaturan"></textarea> -->
                <textarea id="my-editor" name="deskripsi" class="form-control" required></textarea>
              </td>
              <td width="100px"></td>
            </tr>
            <!-- <tr>
              <td width="200px"></td>
              <td width="100px"><strong>Logo</strong></td>
              <td>
                <input type="file" name="logo" class="form-control">
                <img src="{{asset('logo.jpg')}}" width="300" height="100">
              </td>
              <td width="100px"></td>
            </tr> -->
            <tr>
              <td width="200px"></td>
              <td width="100px"><strong>Favicon</strong></td>
              <td>
                <input type="file" name="favicon" class="form-control">
                <img src="{{asset('favicon.png')}}" width="80" height="80">
              </td>
              <td width="100px"></td>
            </tr>
            <tr>
              <td width="200px"></td>
              <td width="100px"></td>
              <td>
                <input type="submit" class="btn btn-primary" value="Simpan">
              </td>
              <td width="100px"></td>
            </tr>
          </table>
          </form>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
@endsection
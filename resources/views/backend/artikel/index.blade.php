@extends('backend.component.master')
@section('konten')
	  @if(session('sukses'))
      <div class="alert alert-success alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
          {{session('sukses')}}
      </div>
      @endif
	  <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Data Artikel</h3>
          <a href="{{route('artikel.create')}}" class="btn btn-primary btn-xs">Tambah</a>
        </div>
        <div class="box-body">
          	<table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th>NO.</th>
                      <th>Judul</th>
                      <th>Bagian</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($artikel as $ar)
                    <tr>
                      <td width="15px">{{$no++}}</td>
                      <td><a href="{{route('artikel.edit', $ar->id)}}">{{$ar->judul}}</a></td>
                      <td width="300px">{{$ar->bagian}}</td>
                      <td width="100px">
                        <form method="POST" action="{{route('artikel.destroy', $ar->id)}}">
                          @csrf
                          <input type="hidden" name="_method" value="DELETE">
                        <a href="{{route('artikel.edit', $ar->id)}}" type="button" class="btn btn-primary btn-xs">Ubah</a>
                        <input type="submit" class="btn btn-danger btn-xs" value="Hapus">
                        </form>
                      </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
@endsection
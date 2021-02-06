@extends('backend.component.master')
@section('konten')
      
      @if(session('sukses'))
      <div class="alert alert-success alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
          {{session('sukses')}}
      </div>
      @endif
      <div class="row">
        <!-- Left col -->
        <section class="col-lg-4 connectedSortable">
      	    <!-- Default box -->
            <div class="box">
              <div class="box-header with-border">
                <h3 class="box-title">Tambah Bagian</h3>
              </div>
              <div class="box-body">
                <form method="POST" action="{{route('bagian.store')}}">
                  @csrf
                <div class="form-group">
                  <label for="bagian">Bagian</label>
                  <input type="text" name="bagian" class="form-control" id="bagian" placeholder="Bagian Pertama" required>
                </div>
                <div class="form-group">
                  <label for="judul">Judul</label>
                  <input type="text" name="judul" class="form-control" id="judul" placeholder="Masukkan Judul" required>
                </div>
                <div class="form-group">
                  <label for="deskripsi">Deskripsi</label>
                  <textarea id="deskripsi" name="deskripsi" class="form-control" style="height: 300px;"></textarea>
                </div>
                <div class="box-footer">
                  <button type="submit" class="btn btn-primary">Tambah</button>
                </div>
                </form>

              </div>
              <!-- /.box-body -->
            </div>
            <!-- /.box -->
          </section>

          <section class="col-lg-8 connectedSortable">
            <!-- Custom tabs (Charts with tabs)--> 
            <!-- Default box -->
            <div class="box">
              <div class="box-header with-border">
                <h3 class="box-title">Data Bagian</h3>
              </div>
              <div class="box-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th>NO.</th>
                      <th>Bagian</th>
                      <th>Judul</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($bagian as $bg)
                    <tr>
                      <td width="15px">{{$no++}}</td>
                      <td width="120px">{{$bg->bagian}}</td>
                      <td>
                        <a href="#" data-toggle="modal" data-target="#modal-{{$bg->id}}">{{$bg->judul}}</a>
                      </td>
                      <td width="100px">
                        <form method="POST" action="{{route('bagian.destroy', $bg->id)}}">
                          @csrf
                          <input type="hidden" name="_method" value="DELETE">
                        <button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#modal-{{$bg->id}}">Ubah</button>
                        <input type="submit" class="btn btn-danger btn-xs" value="Hapus">
                        </form>
                      </td>
                    </tr>

                    <div class="modal fade" id="modal-{{$bg->id}}">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title">Ubah Data Bagian</h4>
                          </div>
                          <form method="POST" action="{{route('bagian.update', $bg->id)}}">
                            @csrf
                            <input type="hidden" name="_method" value="PUT">
                          <div class="modal-body">
                            <div class="form-group">
                              <label for="bagian">Bagian</label>
                              <input type="text" name="bagian" class="form-control" id="bagian" value="{{$bg->bagian}}">
                            </div>
                            <div class="form-group">
                              <label for="judul">Judul</label>
                              <input type="text" name="judul" class="form-control" id="judul" value="{{$bg->judul}}">
                            </div>
                            <div class="form-group">
                              <label for="deskripsi">Deskripsi</label>
                              <textarea id="deskripsi" name="deskripsi" class="form-control" style="height: 300px;">{{$bg->deskripsi}}</textarea>
                            </div>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Batal</button>
                            <input type="submit" class="btn btn-primary" value="Simpan">
                          </div>
                          </form>
                        </div>
                        <!-- /.modal-content -->
                      </div>
                      <!-- /.modal-dialog -->
                    </div>
                    <!-- /.modal -->

                    @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.box-body -->
            </div>
            <!-- /.box -->    
          </section>
        </div>
@endsection
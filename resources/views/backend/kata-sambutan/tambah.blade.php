@extends('backend.component.master')
@section('konten')
	<form method="POST" action="{{route('kata-sambutan.store')}}" enctype="multipart/form-data">
		@csrf
	<div class="row">
        <section class="col-lg-9 connectedSortable">
          <!-- Custom tabs (Charts with tabs)-->
			  <!-- Default box -->
		      <div class="box">
		        <div class="box-header with-border">
		          <h3 class="box-title">Tambah Kata Sambutan / Pengantar</h3>
		        </div>
		        <div class="box-body">
		        	<div class="form-group">
	                  <label for="judul">Judul</label>
	                  <input type="text" name="judul" class="form-control" id="judul" placeholder="Judul" required>
	                </div>

	                <div class="form-group">
	                  <label for="isi">Kata Sambutan / Pengantar</label>
	                  <!-- <textarea name="isi" class="summernote"></textarea> -->
	                  <textarea id="my-editor" name="isi" class="form-control" required></textarea>
	                </div>

	                <div class="form-group">
	                  <label for="isi">Ringkasan</label>
	                  <textarea id="editor" name="deskripsi" class="form-control" required></textarea>
	                </div>

		        </div>
		        <!-- /.box-body -->
		      </div>
		      <!-- /.box -->
		</section>
		<section class="col-lg-3 connectedSortable">
			<div class="box">
		        <div class="box-header with-border">
		          <h3 class="box-title">Rincian</h3>
		        </div>
		        <div class="box-body">
		        	<div class="form-group">
	                  <label for="tokoh">Nama Tokoh</label>
	                  <input type="text" name="tokoh" id="tokoh" class="form-control" required>
	                </div>
	                <div class="form-group">
	                  <label for="jabatan">Jabatan</label>
	                  <input type="text" name="jabatan" id="jabatan" class="form-control" required>
	                </div>
		        	<div class="form-group">
	                  <label for="foto">Pilih Foto</label>
	                  <input type="file" name="foto" class="form-control" id="foto" required>
	                  <p>Pilih foto tokoh terkait.</p>
	                </div>
		        </div>
		        <!-- /.box-body -->
		        <div class="box-footer">
                  <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
		      </div>
		      <!-- /.box -->
		</section>
	</div>
	</form>
@endsection
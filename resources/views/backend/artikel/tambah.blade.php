@extends('backend.component.master')
@section('konten')
	<form method="POST" action="{{route('artikel.store')}}">
		@csrf
	<div class="row">
        <section class="col-lg-9 connectedSortable">
          <!-- Custom tabs (Charts with tabs)-->
			  <!-- Default box -->
		      <div class="box">
		        <div class="box-header with-border">
		          <h3 class="box-title">Tambah Artikel</h3>
		        </div>
		        <div class="box-body">
		        	<div class="form-group">
	                  <label for="judul">Judul Artikel</label>
	                  <input type="text" name="judul" class="form-control" id="judul" placeholder="Judul Artikel" required>
	                </div>

	                <div class="form-group">
	                  <label for="isi">Isi Artikel</label>
	                  <!-- <textarea name="artikel" id="editor1" rows="10" cols="80" required>
	                  </textarea> -->
	                  <textarea id="my-editor" name="artikel" class="form-control" required></textarea>
	                  
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
	                  <label for="bagian">Pilih Bagian</label>
	                  <select class="form-control" name="bagian" id="bagian">
	                  	@foreach($bagian as $bg)
	                  	<option value="{{$bg->bagian}}">{{$bg->bagian}}</option>
	                  	@endforeach
	                  </select>
	                </div>
		        </div>
		        <div class="box-body">
		        	<label for="bagian">Upload File</label>
		        	<div class="input-group">
	                  <span class="input-group-btn">
	                    <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
	                      <i class="fa fa-archive ml-1"></i>
	                    </a>
	                  </span>
	                  <input id="thumbnail" class="form-control" type="text" name="file">
	                </div>
	                <!-- <img id="holder" style="margin-top:15px;max-height:100px;"> -->
		        </div>
		        <!-- /.box-body -->
		        <div class="box-footer">
                  <button type="submit" class="btn btn-primary">Publikasi</button>
                </div>
		      </div>
		      <!-- /.box -->
		</section>
	</div>
	</form>
@endsection
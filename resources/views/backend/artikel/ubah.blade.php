@extends('backend.component.master')
@section('konten')
	
	@if(session('sukses'))
      <div class="alert alert-success alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
          {{session('sukses')}}
      </div>
      @endif
	<form method="POST" action="{{route('artikel.update', $artikel->id)}}">
		@csrf
		<input type="hidden" name="_method" value="PUT">
	<div class="row">
        <section class="col-lg-9 connectedSortable">
          <!-- Custom tabs (Charts with tabs)-->
			  <!-- Default box -->
		      <div class="box">
		        <div class="box-header with-border">
		          <h3 class="box-title">Ubah Artikel</h3>
		        </div>
		        <div class="box-body">
		        	<div class="form-group">
	                  <label for="judul">Judul Artikel</label>
	                  <input type="text" name="judul" class="form-control" id="judul" value="{{$artikel->judul}}" required>
	                </div>

	                <div class="form-group">
	                  <label for="isi">Isi Artikel</label>
	                  <!-- <textarea name="artikel" class="summernote">
	                  	{{$artikel->artikel}}
	                  </textarea> -->
	                  <textarea id="my-editor" name="artikel" class="form-control" required>
                      	{{$artikel->artikel}}
                      </textarea>
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
	                  	<option value="{{$artikel->bagian}}">{{$artikel->bagian}}</option>
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
	                  <input id="thumbnail" class="form-control" type="text" name="file" value="{{$artikel->file}}">
	                </div>
	                <!-- <img id="holder" style="margin-top:15px;max-height:100px;"> -->
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
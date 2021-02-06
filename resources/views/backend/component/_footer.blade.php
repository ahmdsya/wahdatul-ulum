<footer class="main-footer">
    <div class="pull-right hidden-xs">
     Prodi Sistem Informasi UINSU
    </div>
    <strong>Copyright &copy; {{date('Y')}} <a href="{{ env('APP_URL') }}" target="blank">{{ env('APP_NAME') }}</a>.</strong> All rights
    reserved.
  </footer>

  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<script src="//ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!-- jQuery 3 -->
<script src="{{asset('backend/bower_components/jquery/dist/jquery.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{asset('backend/bower_components/jquery-ui/jquery-ui.min.js')}}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="{{asset('backend/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<!-- Sparkline -->
<script src="{{asset('backend/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js')}}"></script>
<!-- Slimscroll -->
<script src="{{asset('backend/bower_components/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
<!-- DataTables -->
<script src="{{asset('backend/bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('backend/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
<!-- CK Editor -->
<!-- <script src="{{asset('backend/bower_components/ckeditor/ckeditor.js')}}"></script> -->

<!-- include summernote css/js-->
<!-- <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.4/summernote.js"></script> -->
<!-- FastClick -->
<script src="{{asset('backend/bower_components/fastclick/lib/fastclick.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('backend/dist/js/adminlte.min.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('backend/dist/js/demo.js')}}"></script>

<script src="//cdn.ckeditor.com/4.6.2/full-all/ckeditor.js"></script>
    <script>
        var route_prefix = "{{ url(config('lfm.url_prefix', config('lfm.prefix'))) }}";
        var options = {
        height: 300,
        filebrowserImageBrowseUrl: route_prefix + '?type=Images',
        filebrowserImageUploadUrl: route_prefix + '/upload?type=Images&_token={{csrf_token()}}',
        filebrowserBrowseUrl: route_prefix + '?type=Files',
        filebrowserUploadUrl: route_prefix + '/upload?type=Files&_token={{csrf_token()}}'
      };
    </script>
    <script>
        CKEDITOR.replace( 'my-editor', options);
    </script>
    <script>
        CKEDITOR.replace( 'editor', options);
    </script>
    <script>
        {!! \File::get(base_path('vendor/unisharp/laravel-filemanager/public/js/lfm.js')) !!}
    </script>
    <script>
        $('#lfm').filemanager('file', {prefix: route_prefix});
        
        var domain = route_prefix;
        $('#lfm').filemanager('file', {prefix: domain});
    </script>
<script>
  $(function () {
    
  $('#example1').DataTable()
  })
</script>
</body>
</html>

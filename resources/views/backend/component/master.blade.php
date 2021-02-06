<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Wahdatul `Ulum - {{$judul}}</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
 
  @include('backend.component._header')

  @include('backend.component._navbar')

  @include('backend.component._sidebar')

    <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Main content -->
    <section class="content">

      @yield('konten')

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  
  @include('backend.component._footer')
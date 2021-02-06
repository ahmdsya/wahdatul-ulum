@extends('authAdmin.component.master')

@section('konten')
<div class="login-box">
  <div class="login-logo">
    <a href="#"><b>Wahdatul</b> 'Ulum</a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Silahkan Masuk</p>

    <form action="{{ route('admin.login.submit') }}" method="POST">
        @csrf

      <div class="form-group has-feedback">
        <input type="email" name="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="Email" value="{{ old('email') }}" required autofocus>
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
        @if ($errors->has('email'))
        <span class="invalid-feedback" role="alert">
            <strong>{{ $errors->first('email') }}</strong>
        </span>
        @endif
      </div>
      <div class="form-group has-feedback">
        <input type="password" name="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="Password" required>
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>

        @if ($errors->has('password'))
        <span class="invalid-feedback" role="alert">
            <strong>{{ $errors->first('password') }}</strong>
        </span>
        @endif
      </div>
      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
            <label>
              <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Ingat Saya
            </label>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Masuk</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

    <a href="#">Lupa Password</a><br>

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->
@endsection

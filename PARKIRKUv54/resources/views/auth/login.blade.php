@extends('layouts.app')

@section('content')
<div class="position-relative">
  <div style="" id="login-box" class="login-box visible widget-box no-border">
    <div class="widget-body">
      <div class="widget-main">
        <h4 class="header blue lighter bigger">
          <i class="ace-icon fa fa-fire blue"></i>
          Login PARKIRKU
        </h4>

        <div class="space-6"></div>

        <form action="{{ route('login') }}" method="post">
        {{ csrf_field() }}

          <fieldset>
            <label class="block clearfix">
              <span class="block input-icon input-icon-right">
                <input type="text" class="form-control" placeholder="Username" name="username" value="{{ old('username') }}" required autofocus/>
                @if ($errors->has('username'))
                    <span class="help-block">
                        <strong>{{ $errors->first('username') }}</strong>
                    </span>
                @endif
                <i class="ace-icon fa fa-user"></i>
              </span>
            </label>

            <label class="block clearfix">
              <span class="block input-icon input-icon-right">
                <input type="password" class="form-control" placeholder="Password" name="password" required/>
                @if ($errors->has('password'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
                <i class="ace-icon fa fa-lock"></i>
              </span>
            </label>

            <label class="block clearfix">
              <span class="block input-icon input-icon-right">
                <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
              </span>
            </label>

            <div class="space-6"></div>

            <div class="clearfix">
              <label class="inline">
                <a href="{{ route('home') }}" class="bigger-110 pull-right btn btn-sm btn-success">Back to Home</a>
              </label>
              <div class="pull-right">
                <input type="submit" class="bigger-110 pull-right btn btn-sm btn-primary" value="Login">
              </div>
            </div>

            <div class="space-4"></div>
          </fieldset>
        </form>

      </div><!-- /.widget-main -->
    </div><!-- /.widget-body -->
  </div><!-- /.login-box -->
</div><!-- /.position-relative -->
@endsection

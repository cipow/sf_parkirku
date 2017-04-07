@extends('panelAdmin.masterAdmin')

@section('sidebar')
  @include('panelAdmin.masterKonten.sidebar',['active'=>$active])
@endsection

@section('contentNavbar')
  @include('panelAdmin.masterKonten.contentNavbar',['titleTop'=>$titleTop])
@endsection

@section('layanan')
<div class="page-header">
  <h1>
    Tambah User PARKIRKU
    <small>
      <i class="ace-icon fa fa-angle-double-right"></i>
      Petugas
    </small>
  </h1>
</div>
<div class="row">
  <div class="col-xs-12">

    <form method="POST" action="{{ route('register') }}" class="form-horizontal" role="form">
      {{ csrf_field() }}
      <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right"> Nama Lengkap </label>
        <div class="col-sm-9">
          <input id="name" class="col-xs-10 col-sm-5" type="text" name="name" value="{{ old('name') }}" required autofocus/>
        </div>
        <div class="col-sm-3 col-xs-12">
        </div>
        <div class="col-sm-9">
          @if ($errors->has('name'))
              <span class="help-block">
                  <strong>{{ $errors->first('name') }}</strong>
              </span>
          @endif
        </div>
      </div>

      <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right"> Username </label>
        <div class="col-sm-9">
          <input id="username" class="col-xs-10 col-sm-5" type="text" name="username" value="{{ old('username') }}" required/>
        </div>
        <div class="col-sm-3 col-xs-12">
        </div>
        <div class="col-sm-9">
          @if ($errors->has('username'))
              <span class="help-block">
                  <strong>{{ $errors->first('username') }}</strong>
              </span>
          @endif
        </div>
      </div>

      <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right"> Password </label>
        <div class="col-sm-9">
          <input id="password" class="col-xs-10 col-sm-5" type="password" name="password" required/>
        </div>
        <div class="col-sm-3 col-xs-12">
        </div>
        <div class="col-sm-9">
          @if ($errors->has('password'))
              <span class="help-block">
                  <strong>{{ $errors->first('password') }}</strong>
              </span>
          @endif
        </div>
      </div>

      <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right"> Confirm Password </label>
        <div class="col-sm-9">
          <input id="password-confirm" class="col-xs-10 col-sm-5" type="password" name="password_confirmation" required/>
        </div>
      </div>

      <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right">  </label>
        <div class="col-sm-9">
          <button class="btn btn-info" type="submit">
            <i class="ace-icon fa fa-check bigger-110"></i>
            Add
          </button>
        </div>
      </div>
    </form>


  </div>
</div>
@endsection

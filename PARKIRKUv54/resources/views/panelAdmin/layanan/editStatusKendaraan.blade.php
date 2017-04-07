@extends('panelAdmin.masterAdmin')

@section('sidebar')
  @include('panelAdmin.masterKonten.sidebar')
@endsection

@section('contentNavbar')
  @include('panelAdmin.masterKonten.contentNavbar')
@endsection

@section('layanan')
<div class="page-header">
  <h1>
    Edit Kendaraan
    <small>
      <i class="ace-icon fa fa-angle-double-right"></i>
      Pengubahan Status Form
    </small>
  </h1>
</div>

<div class="row">
  <div class="col-xs-12">
    <!-- PAGE CONTENT BEGINS -->

    <form method="POST" action="{{ route('edit',$edit->id) }}" class="form-horizontal" role="form">
      {{ csrf_field() }}
      {{ method_field('PUT') }}
      <div class="form-group">
        <div class="col-sm-3">
        </div>
        <div class="col-sm-9">
          <label><h3>Posisi Gedung {{ $edit->gedung }}</h3></label><br>
        </div>
      </div>

      <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right"> Nomor PLAT </label>
        <div class="col-sm-9">
          <input class="col-xs-10 col-sm-5" name="noPlat" type="text" style="text-transform:uppercase" value="{{$edit->noPlat}}" required />
        </div>
      </div>

      <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right"> Tipe Kendaraan </label>

        <div class="col-sm-9">
          <select class="col-xs-10 col-sm-5" name="tipe">
            @if ($edit->tipeKendaraan == 'MOTOR')
            <option value="MOTOR" selected="selected">MOTOR</option>
            <option value="MOBIL">MOBIL</option>
            @else
            <option value="MOTOR">MOTOR</option>
            <option value="MOBIL" selected="selected">MOBIL</option>
            @endif
          </select>
        </div>
      </div>

      <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right"> Gedung </label>

        <div class="col-sm-9">
          <select class="col-xs-10 col-sm-5" name="gedung">
            <option value="G">G</option>
            <option value="H">H</option>
            <option value="D">D</option>
            <option value="C">C</option>
            <option value="E">E</option>
            <option value="LB">LB</option>
          </select>
        </div>
      </div>

      <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right">  </label>
        <div class="col-sm-9">
          <button class="btn btn-info" type="submit">
            <i class="ace-icon fa fa-check bigger-110"></i>
            Submit
          </button>
        </div>
      </div>
    </form>


    <!-- PAGE CONTENT ENDS -->
  </div>
</div>
@endsection

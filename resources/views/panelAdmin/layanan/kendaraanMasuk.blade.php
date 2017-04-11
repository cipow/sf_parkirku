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
    Kendaraan Masuk
    <small>
      <i class="ace-icon fa fa-angle-double-right"></i>
      Pengisian Form
    </small>
  </h1>
</div>

<div class="row">
  <div class="col-xs-12">
    <!-- PAGE CONTENT BEGINS -->

    <div class="tabbable">
      <ul class="nav nav-tabs" id="myTab">
        @if (session('tab'))
          @if (session('tab')=='G')
          <li class="active">
          @else
          <li>
          @endif
        @else
          <li class="active">
        @endif
          <a data-toggle="tab" href="#G">
            Gedung G
          </a>
        </li>

        @if (session('tab')=='H')
        <li class="active">
        @else
        <li>
        @endif
          <a data-toggle="tab" href="#H">
            Gedung H
          </a>
        </li>

        @if (session('tab')=='E')
        <li class="active">
        @else
        <li>
        @endif
          <a data-toggle="tab" href="#E">
            Gedung E
          </a>
        </li>

        @if (session('tab')=='D')
        <li class="active">
        @else
        <li>
        @endif
          <a data-toggle="tab" href="#D">
            Gedung D
          </a>
        </li>

        @if (session('tab')=='C')
        <li class="active">
        @else
        <li>
        @endif
          <a data-toggle="tab" href="#C">
            Gedung C
          </a>
        </li>

        @if (session('tab')=='LB')
        <li class="active">
        @else
        <li>
        @endif
          <a data-toggle="tab" href="#LB">
            Lapangan Basket
          </a>
        </li>

      </ul>

      <div class="tab-content">
        @if (session('tab'))
          @if (session('tab')=='G')
          <div id="G" class="tab-pane fade in active">
          @else
          <div id="G" class="tab-pane fade">
          @endif
        @else
        <div id="G" class="tab-pane fade in active">
        @endif
          <form method="POST" action="{{ route('adminKendaraanTambah') }}" class="form-horizontal" role="form">
            {{ csrf_field() }}

            <div class="form-group">
              <div class="col-sm-3">
              </div>
              <div class="col-sm-9">
                <label><h3>Gedung G</h3></label><br>
                <label>Sisa <strong>Motor</strong> : <b>{{$sisa['motorG']}}</b> | <strong>Mobil</strong> : <b>{{$sisa['mobilG']}}</b></label>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-3 control-label no-padding-right"> Nomor PLAT </label>
              <div class="col-sm-9">
                <input class="col-xs-10 col-sm-5" name="noPlat" type="text" placeholder="H 1234 XYZ" style="text-transform:uppercase" value="{{old('noPlat')}}" required />
              </div>
              <div class="col-sm-3 col-xs-12">
              </div>
              <div class="col-sm-9">
                @if ($errors->has('noPlat')) <p style="color:red;"><br>no plat sudah terdaftar</p> @endif
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-3 control-label no-padding-right"> Tipe Kendaraan </label>

              <div class="col-sm-9">
                <select class="col-xs-10 col-sm-5" name="tipe">
                  <option value="MOTOR">MOTOR</option>
                  @if ($sisa['mobilG'] > 0)
                    <option value="MOBIL">MOBIL</option>
                  @endif
                </select>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-3 control-label no-padding-right">  </label>
              <input type="hidden" name="gedung" value="G">
              <div class="col-sm-9">
                @if ($sisa['motorG'] > 0)
                <button class="btn btn-info" type="submit">
                  <i class="ace-icon fa fa-check bigger-110"></i>
                  Submit
                </button>
                @else
                <button class="btn disabled btn-info" type="submit">
                  <i class="ace-icon fa fa-check bigger-110"></i>
                  Submit
                </button>
                @endif
              </div>
            </div>
          </form>
        </div>

        @if (session('tab')=='H')
        <div id="H" class="tab-pane fade in active">
        @else
        <div id="H" class="tab-pane fade">
        @endif
          <form method="POST" action="{{ route('adminKendaraanTambah') }}" class="form-horizontal" role="form">
            {{ csrf_field() }}

            <div class="form-group">
              <div class="col-sm-3">
              </div>
              <div class="col-sm-9">
                <label><h3>Gedung H</h3></label><br>
                <label>Sisa <strong>Motor</strong> : <b>{{$sisa['motorH']}}</b></label>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-3 control-label no-padding-right"> Nomor PLAT </label>

              <div class="col-sm-9">
                <input class="col-xs-10 col-sm-5" name="noPlat" type="text" placeholder="H 1234 XYZ" style="text-transform:uppercase" value="{{old('noPlat')}}" required />
              </div>
              <div class="col-sm-3 col-xs-12">
              </div>
              <div class="col-sm-9">
                @if ($errors->has('noPlat')) <p style="color:red;"><br>no plat sudah terdaftar</p> @endif
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-3 control-label no-padding-right"> Tipe Kendaraan </label>

              <div class="col-sm-9">
                <select class="col-xs-10 col-sm-5" name="tipe">
                  <option value="MOTOR">MOTOR</option>
                </select>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-3 control-label no-padding-right">  </label>
              <input type="hidden" name="gedung" value="H">
              <div class="col-sm-9">
                @if ($sisa['motorH'] > 0)
                <button class="btn btn-info" type="submit">
                  <i class="ace-icon fa fa-check bigger-110"></i>
                  Submit
                </button>
                @else
                <button class="btn disabled btn-info" type="submit">
                  <i class="ace-icon fa fa-check bigger-110"></i>
                  Submit
                </button>
                @endif
              </div>
            </div>
          </form>
        </div>

        @if (session('tab')=='E')
        <div id="E" class="tab-pane fade in active">
        @else
        <div id="E" class="tab-pane fade">
        @endif
          <form method="POST" action="{{ route('adminKendaraanTambah') }}" class="form-horizontal" role="form">
            {{ csrf_field() }}

            <div class="form-group">
              <div class="col-sm-3">
              </div>
              <div class="col-sm-9">
                <label><h3>Gedung E</h3></label><br>
                <label>Sisa <strong>Motor</strong> : <b>{{$sisa['motorE']}}</b> | <strong>Mobil</strong> : <b>{{$sisa['mobilE']}}</b></label>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-3 control-label no-padding-right"> Nomor PLAT </label>

              <div class="col-sm-9">
                <input class="col-xs-10 col-sm-5" name="noPlat" type="text" placeholder="H 1234 XYZ" style="text-transform:uppercase" value="{{old('noPlat')}}" required />
              </div>
              <div class="col-sm-3 col-xs-12">
              </div>
              <div class="col-sm-9">
                @if ($errors->has('noPlat')) <p style="color:red;"><br>no plat sudah terdaftar</p> @endif
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-3 control-label no-padding-right"> Tipe Kendaraan </label>

              <div class="col-sm-9">
                <select class="col-xs-10 col-sm-5" name="tipe">
                  <option value="MOTOR">MOTOR</option>
                  @if ($sisa['mobilE'] > 0)
                    <option value="MOBIL">MOBIL</option>
                  @endif
                </select>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-3 control-label no-padding-right">  </label>
              <input type="hidden" name="gedung" value="E">
              <div class="col-sm-9">
                @if ($sisa['motorE'] > 0)
                <button class="btn btn-info" type="submit">
                  <i class="ace-icon fa fa-check bigger-110"></i>
                  Submit
                </button>
                @else
                <button class="btn disabled btn-info" type="submit">
                  <i class="ace-icon fa fa-check bigger-110"></i>
                  Submit
                </button>
                @endif
              </div>
            </div>
          </form>
        </div>

        @if (session('tab')=='D')
        <div id="D" class="tab-pane fade in active">
        @else
        <div id="D" class="tab-pane fade">
        @endif
          <form method="POST" action="{{ route('adminKendaraanTambah') }}" class="form-horizontal" role="form">
            {{ csrf_field() }}

            <div class="form-group">
              <div class="col-sm-3">
              </div>
              <div class="col-sm-9">
                <label><h3>Gedung D</h3></label><br>
                <label>Sisa <strong>Motor</strong> : <b>{{$sisa['motorD']}}</b></label>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-3 control-label no-padding-right"> Nomor PLAT </label>

              <div class="col-sm-9">
                <input class="col-xs-10 col-sm-5" name="noPlat" type="text" placeholder="H 1234 XYZ" style="text-transform:uppercase" value="{{old('noPlat')}}" required />
              </div>
              <div class="col-sm-3 col-xs-12">
              </div>
              <div class="col-sm-9">
                @if ($errors->has('noPlat')) <p style="color:red;"><br>no plat sudah terdaftar</p> @endif
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-3 control-label no-padding-right"> Tipe Kendaraan </label>

              <div class="col-sm-9">
                <select class="col-xs-10 col-sm-5" name="tipe">
                  <option value="MOTOR">MOTOR</option>
                </select>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-3 control-label no-padding-right">  </label>
              <input type="hidden" name="gedung" value="D">
              <div class="col-sm-9">
                @if ($sisa['motorD'] > 0)
                <button class="btn btn-info" type="submit">
                  <i class="ace-icon fa fa-check bigger-110"></i>
                  Submit
                </button>
                @else
                <button class="btn disabled btn-info" type="submit">
                  <i class="ace-icon fa fa-check bigger-110"></i>
                  Submit
                </button>
                @endif
              </div>
            </div>
          </form>
        </div>

        @if (session('tab')=='C')
        <div id="C" class="tab-pane fade in active">
        @else
        <div id="C" class="tab-pane fade">
        @endif
          <form method="POST" action="{{ route('adminKendaraanTambah') }}" class="form-horizontal" role="form">
            {{ csrf_field() }}

            <div class="form-group">
              <div class="col-sm-3">
              </div>
              <div class="col-sm-9">
                <label><h3>Gedung C</h3></label><br>
                <label>Sisa <strong>Motor</strong> : <b>{{$sisa['motorC']}}</b> | <strong>Mobil</strong> : <b>{{$sisa['mobilC']}}</b></label>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-3 control-label no-padding-right"> Nomor PLAT </label>

              <div class="col-sm-9">
                <input class="col-xs-10 col-sm-5" name="noPlat" type="text" placeholder="H 1234 XYZ" style="text-transform:uppercase" value="{{old('noPlat')}}" required />
              </div>
              <div class="col-sm-3 col-xs-12">
              </div>
              <div class="col-sm-9">
                @if ($errors->has('noPlat')) <p style="color:red;"><br>no plat sudah terdaftar</p> @endif
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-3 control-label no-padding-right"> Tipe Kendaraan </label>

              <div class="col-sm-9">
                <select class="col-xs-10 col-sm-5" name="tipe">
                  <option value="MOTOR">MOTOR</option>
                  @if ($sisa['mobilC'] > 0)
                    <option value="MOBIL">MOBIL</option>
                  @endif
                </select>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-3 control-label no-padding-right">  </label>
              <input type="hidden" name="gedung" value="C">
              <div class="col-sm-9">
                @if ($sisa['motorC'] > 0)
                <button class="btn btn-info" type="submit">
                  <i class="ace-icon fa fa-check bigger-110"></i>
                  Submit
                </button>
                @else
                <button class="btn disabled btn-info" type="submit">
                  <i class="ace-icon fa fa-check bigger-110"></i>
                  Submit
                </button>
                @endif
              </div>
            </div>
          </form>
        </div>

        @if (session('tab')=='LB')
        <div id="LB" class="tab-pane fade in active">
        @else
        <div id="LB" class="tab-pane fade">
        @endif
          <form method="POST" action="{{ route('adminKendaraanTambah') }}" class="form-horizontal" role="form">
            {{ csrf_field() }}

            <div class="form-group">
              <div class="col-sm-3">
              </div>
              <div class="col-sm-9">
                <label><h3>Lapangan Basket</h3></label><br>
                <label>Sisa <strong>Motor</strong> : <b>{{$sisa['LB']}}</b></label>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-3 control-label no-padding-right"> Nomor PLAT </label>

              <div class="col-sm-9">
                <input class="col-xs-10 col-sm-5" name="noPlat" type="text" placeholder="H 1234 XYZ" style="text-transform:uppercase" value="{{old('noPlat')}}" required />
              </div>
              <div class="col-sm-3 col-xs-12">
              </div>
              <div class="col-sm-9">
                @if ($errors->has('noPlat')) <p style="color:red;"><br>no plat sudah terdaftar</p> @endif
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-3 control-label no-padding-right"> Tipe Kendaraan </label>

              <div class="col-sm-9">
                <select class="col-xs-10 col-sm-5" name="tipe">
                  <option value="MOTOR">MOTOR</option>
                </select>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-3 control-label no-padding-right">  </label>
              <input type="hidden" name="gedung" value="LB">
              <div class="col-sm-9">
                @if ($sisa['LB'] > 0)
                <button class="btn btn-info" type="submit">
                  <i class="ace-icon fa fa-check bigger-110"></i>
                  Submit
                </button>
                @else
                <button class="btn disabled btn-info" type="submit">
                  <i class="ace-icon fa fa-check bigger-110"></i>
                  Submit
                </button>
                @endif
              </div>
            </div>
          </form>
        </div>

      </div>
    </div>

    <!-- PAGE CONTENT ENDS -->
  </div>
</div>
@endsection

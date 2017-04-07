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
    Daftar Lapor
    <small>
      <i class="ace-icon fa fa-angle-double-right"></i>
      Timeline
    </small>
  </h1>
</div>
<div class="row">
  <div class="col-xs-12">

        <div class="col-xs-12 col-sm-10 col-sm-offset-1">
          <div class="timeline-container">
            <span class="timeline-label">
              <span class="label label-primary arrowed-in-right label-lg">
                <b>PARKIRKU</b>
              </span>
            </span>
            <div class="timeline-items">
              @foreach ($list as $data)
              <div class="timeline-item clearfix">
                <div class="timeline-info">
                  <span class="label label-info label-sm">{{ date('H:i',strtotime($data->created_at)) }}</span>
                </div>

                <div class="widget-box transparent">
                  <div class="widget-header widget-header-small">
                    <h4 class="widget-title smaller">
                      <span class="blue"><b>{{ $data->judulLapor }}</b></span>
                    </h4>

                    <span class="widget-toolbar no-border">
                      <i class="ace-icon fa fa-clock-o bigger-110"></i>
                      {{ date('l, d-m-Y',strtotime($data->created_at)) }}
                    </span>

                    <span class="widget-toolbar">
                      <span class="green">Oleh</span>
                      <span class="red"><b>{{ $data->namaPelapor }}</b></span>
                    </span>
                  </div>

                  <div class="widget-body">
                    <div class="widget-main">
                      {{ $data->pesanLapor }}
                    </div>
                    <div class="widget-toolbox clearfix">
                      <div class="pull-right action-buttons">
                        <span class="red">Hubungi : <b>{{ $data->noHP }}</b></span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              @endforeach
            </div><!-- /.timeline-items -->
          </div><!-- /.timeline-container -->
        </div>


  </div>
</div>
@endsection

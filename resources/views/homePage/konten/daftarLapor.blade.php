@extends('homePage.masterLapor')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Lapor
            <small>{{$text}}</small>
        </h1>
    </div>
</div>
<!-- /.row -->

<!-- Projects Row -->
<div class="row">
  @foreach ($data as $data)
    <div class="col-md-4 portfolio-item">
      <h3>{{$data->judulLapor}}
        <small>oleh {{$data->namaPelapor}}</small><br>
        <small><i>pada {{ date('l, d-m-Y',strtotime($data->created_at)) }} pukul {{ date('H:i',strtotime($data->created_at)) }} WIB</i></small>
      </h3>
      <p>
        {{$data->pesanLapor}}
      </p>
      <p align="right" style="margin-right:25px;">
        <small><i>Hubungi: {{$data->noHP}}</i></small>
        <br>
        @if ($data->publish == 1)
        <small style="color:green;"><i> < on progress > </i></small>
        @else
        <small style="color:red;"><i> < finished > </i></small>
        @endif
      </p>
    </div>
  @endforeach
</div>
@endsection

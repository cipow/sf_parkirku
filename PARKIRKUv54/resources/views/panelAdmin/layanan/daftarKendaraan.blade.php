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
    Daftar Kendaraan
  </h1>
</div>

<div class="row">
		<div class="col-xs-12">
											<div id="dynamic-table_wrapper" class="dataTables_wrapper form-inline no-footer">
                        <div id="dynamic-table_wrapper" class="dataTables_wrapper form-inline no-footer">
                        <table id="dynamic-table" class="table table-responsive table-striped table-bordered table-hover dataTable no-footer" role="grid" aria-describedby="dynamic-table_info">
												<thead>
													<tr role="row">
                            <th class="center sorting_disabled" style="display:none;" rowspan="1" colspan="1" aria-label=""></th>
                            <th class="sorting" tabindex="0" aria-controls="dynamic-table" rowspan="1" colspan="1" aria-label="Domain: activate to sort column ascending">NOMOR PLAT</th>
                            <th class="sorting" tabindex="0" aria-controls="dynamic-table" rowspan="1" colspan="1" aria-label="Price: activate to sort column ascending">GEDUNG (KENDARAAN)</th>
                            <th class="hidden-480 sorting" tabindex="0" aria-controls="dynamic-table" rowspan="1" colspan="1" aria-label="Clicks: activate to sort column ascending">
                              <i class="ace-icon fa fa-clock-o bigger-110 hidden-480"></i>MASUK</th>
                            <th class="sorting_asc" tabindex="0" aria-controls="dynamic-table" rowspan="1" colspan="1" aria-label="Update: activate to sort column descending" aria-sort="ascending">
															<i class="ace-icon fa fa-clock-o bigger-110 hidden-480"></i>KELUAR
														</th>
                            <th class="hidden-480 sorting" tabindex="0" aria-controls="dynamic-table" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending">Status</th>
                            <th class="sorting_disabled" rowspan="1" colspan="1" aria-label=""></th>
                          </tr>
												</thead>
												<tbody>
                          @foreach ($list as $data)
												  <tr role="row" class="odd">
														<td class="center" style="display:none;"></td>
														<td class="">{{ $data->noPlat}}</td>
                            <td class="">{{ $data->gedung }} ({{ $data->tipeKendaraan}})</td>
                            <td class="hidden-480">{{ date('d M Y - H:i',strtotime($data->created_at))}} WIB<br>oleh <b>{{ $data->pencatatMasuk }}</b></td>
                            @if ($data->kondisi == 1)
                            <td class="hidden-480">{{ date('d M Y - H:i',strtotime($data->updated_at))}} WIB<br>oleh <b>{{ $data->pencatatKeluar }}</b></td>
                            @else
                            <td class="hidden-480"></td>
                            @endif

                            @if ($data->kondisi == 1)
                            <td class="">
															<span class="label label-sm label-danger">sudah keluar</span>
														</td>
                            @else
                            <td class="">
															<span class="label label-sm label-success">belum keluar</span>
														</td>
                            @endif
                            <td width="10%">
                              <div class="hidden-sm hidden-xs action-buttons">
                                @if ($data->kondisi == 0)

                                <a class="red" href="{{route('adminKendaraanKeluar',$data->id)}}"
                                  onclick="event.preventDefault();
                                           document.getElementById('keluar{{$data->id}}').submit();">
                                           <i class="ace-icon glyphicon glyphicon-remove bigger-130"></i>
                                         </a>
                                <form id="keluar{{$data->id}}" action="{{route('adminKendaraanKeluar',$data->id)}}" method="POST" style="display: none;">
                                  {{ csrf_field() }}
                                </form>
                                <a class="blue" href="{{route('tampilanEdit',$data->id)}}"
                                  onclick="event.preventDefault();
                                  document.getElementById('edit{{$data->id}}').submit();">
                                  <i class="ace-icon glyphicon glyphicon-edit bigger-130"></i>
                                </a>
                                <form id="edit{{$data->id}}" action="{{route('tampilanEdit',$data->id)}}" method="POST" style="display: none;">
                                  {{ csrf_field() }}
                                </form>

                                @else
                                <a class="green" href="#"><i class="ace-icon glyphicon glyphicon-ok bigger-130"></i></a>
                                @endif
                              </div>
                              <div class="hidden-md hidden-lg">
																<div class="inline pos-rel">
																	<button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown" data-position="auto">
																		<i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
																	</button>
																	<ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
                                    @if ($data->kondisi == 0)
                                    <li>
																			<a href="{{route('adminKendaraanKeluar',$data->id)}}" class="tooltip-info" data-rel="tooltip" title="Status In"
                                        onclick="event.preventDefault();
                                                 document.getElementById('keluar{{$data->id}}').submit();">
																				<span class="red">
																					<i class="ace-icon glyphicon glyphicon-remove bigger-120"></i>
																				</span>
																			</a>
                                      <form id="keluar{{$data->id}}" action="{{route('adminKendaraanKeluar',$data->id)}}" method="POST" style="display: none;">
                                          {{ csrf_field() }}
                                      </form>
																		</li>
                                    <li>
                                      <a class="blue" href="{{route('tampilanEdit',$data->id)}}"
                                        onclick="event.preventDefault();
                                               document.getElementById('edit{{$data->id}}').submit();">
                                               <i class="ace-icon glyphicon glyphicon-edit  bigger-130"></i>
                                      </a>
                                      <form id="edit{{$data->id}}" action="{{route('tampilanEdit',$data->id)}}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                      </form>
																		</li>
                                    @else
                                    <li>
																			<a href="#" class="tooltip-info" data-rel="tooltip" title="Status Out">
																				<span class="green">
																					<i class="ace-icon glyphicon glyphicon-ok bigger-120"></i>
																				</span>
																			</a>
																		</li>
                                    @endif
																	</ul>
																</div>
															</div>
                            </td>
													</tr>
                          @endforeach
                        </tbody>
											</table>
                    </div>
                  </div>
  </div>
</div>
@endsection

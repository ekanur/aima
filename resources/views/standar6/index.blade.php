@extends('layout')
@section('title', 'Standar 6')
@section('content')
<div class="col-md-12">
    <div class="card">
        <div class="header">
            <h4 class="title">Pembiayaan, Sarana dan Prasarana,serta Sistem Informasi</h4>
            <p class="category">Standar 6</p>
        </div>

        <div class="content">
            <form action="/standar6/save" method="post" class="kuesioner">
                {{ csrf_field() }}

                <fieldset>
                <ul class="list-unstyled">
                    <li class="row">
                        <div class="col-md-12 komponen">
                            <span class="nomor pull-left">6.2.1</span>
                            <div class="deskriptor pull-left">
                              <div class="row">
                                 <strong>Penggunaan dana untuk operasional (pendidikan, penelitian, pengabdian pada masyarakat, termasuk gaji dan upah).</strong>
                              </div>
                            <div class="row">
                              <div class="form-group col-md-3">
                                <label for="nilai6_2_1_dana">Jumlah Dana Operasional Permahasiswa Pertahun</label>
                                <input type="number" min=0 name="nilai6_2_1_dana" class="form-control border-input" id="nilai6_2_1" value="<?php if(!$dataCheck) echo json_decode($data[0]->data)[0] ?>" required="">
                              </div>
                          </div>
                        </div>
                              <div class="dropdown pull-right">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                                  <b class="fa fa-ellipsis-v"></b>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-right"> 
                                      <li><a href="#" data-toggle="modal" data-target="#upload_file"  data-catatan="" data-kode="">Catatan Auditor</a></li>
                                </ul>
                              </div>
                      
                      </div>
                    </li>
                    <li class="row">
                      <div class="col-md-12 komponen">
                          <div class="pull-left nomor">6.2.2</div>
                          <div class="deskriptor pull-left">
                            <div class="row">
                              <strong> Dana yang diperoleh dalam rangka pelayanan/pengabdian kepada masyarakat dalam tiga  tahun terakhir </strong>
                            </div>
                        <div class="row">
                            <div class="form-group col-md-4">
                              <label for="nilai6_2_2dana">Rata-rata dana penelitian per dosen tetap per tahun</label>
                              <input type="number" min=0 name="nilai6_2_2dana" class="form-control border-input" id="nilai6_2_2" value="<?php if(!$dataCheck) echo json_decode($data[1]->data)[0] ?>" required="">
                            </div>
                          </div>
                        </div>

                      <div class="dropdown pull-right">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                                  <b class="fa fa-ellipsis-v"></b>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-right"> 
                                      <li><a href="#" data-toggle="modal" data-target="#upload_file"  data-catatan="" data-kode="">Catatan Auditor</a></li>
                                </ul>
                              </div>
                      </div>
                    </li>

                    <li class="row">
                        <div class="col-md-12 komponen">
                            <div class="pull-left nomor">6.2.3</div>
                            <div class="deskriptor pull-left">
                              <div class="row">
                                <strong> Dana yang diperoleh dalam rangka pelayanan/pengabdian kepada masyarakat dalam tiga  tahun terakhir </strong>
                              </div>
                            <div class="row">
                              <div class="form-group col-md-3">
                                <input type="number" min=0 name="nilai6_2_3satu" class="form-control border-input" id="nilai6_2_3" value="<?php if(!$dataCheck) echo json_decode($data[2]->data)[0] ?>" required="">
                              </div>
                            </div>
                          </div>
                          <div class="dropdown pull-right">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                                  <b class="fa fa-ellipsis-v"></b>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-right"> 
                                      <li><a href="#" data-toggle="modal" data-target="#upload_file"  data-catatan="" data-kode="">Catatan Auditor</a></li>
                                </ul>
                              </div>
                        </div>
                      </li>

                    <li class="row">
                      <div class="col-md-12 komponen">
                          <div class="pull-left nomor">6.3.1</div>
                          <div class="deskriptor pull-left">
                            <div class="row">
                              <strong>Luas Kerja Dosen </strong>
                            </div>
                          <div class="row">
                            <div class="form-group col-md-3">
                              <label for="a">Luas total (m2) ruang bersama untuk dosen tetap</label>
                              <input type="number" min=0 name="a" class="form-control border-input" id="nilai6_3_1" value="<?php if(!$dataCheck) echo json_decode($data[3]->data)[0] ?>" required="">
                            </div>

                            <div class="form-group col-md-3">
                              <label for="b">Luas total (m2) ruang untuk 3-4 orang dosen tetap</label>
                              <input type="number" min=0 name="b" class="form-control border-input" id="nilai6_3_1" value="<?php if(!$dataCheck) echo json_decode($data[3]->data)[1] ?>" required="">
                            </div>
                            <div class="form-group col-md-3">
                              <label for="c">Luas total (m2) ruang untuk 2 orang dosen tetap</label>
                              <input type="number" min=0 name="c" class="form-control border-input" id="nilai6_3_1" value="<?php if(!$dataCheck) echo json_decode($data[3]->data)[2] ?>" required="">
                            </div>
                            <div class="form-group col-md-3">
                              <label for="d">Luas total (m2) ruang untuk 1 orang dosen tetap</label>
                              <input type="number" min=0 name="d" class="form-control border-input" id="nilai6_3_1" value="<?php if(!$dataCheck) echo json_decode($data[3]->data)[3] ?>" required="">
                            </div>
                          </div>
                        </div>
                      
                      <div class="dropdown pull-right">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                                  <b class="fa fa-ellipsis-v"></b>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-right"> 
                                      <li><a href="#" data-toggle="modal" data-target="#upload_file"  data-catatan="" data-kode="">Catatan Auditor</a></li>
                                </ul>
                              </div>
                      </div>
                    </li>

                    <li class="row">
                        <div class="col-md-12 komponen">
                            <div class="pull-left nomor"><small>6.4.1.a</small></div>
                            <div class="deskriptor pull-left">
                                <div class="row">
                                <strong>Bahan pustaka berupa buku teks.</strong>
                              </div>
                              <div class="row">
                                <div class="form-group col-md-3">
                                  <label for="nilai6_4_1_a">Jumlah bahan pustaka teks</label>
                                  <input type="number" min=0 name="nilai6_4_1_a" class="form-control border-input" id="nilai6_4_1_a" value="<?php if(!$dataCheck) echo json_decode($data[4]->data)[0] ?>" required="">
                                </div>
                              </div>
                            </div>
                        
                        <div class="dropdown pull-right">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                                  <b class="fa fa-ellipsis-v"></b>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-right"> 
                                      <li><a href="#" data-toggle="modal" data-target="#upload_file"  data-catatan="" data-kode="">Catatan Auditor</a></li>
                                </ul>
                              </div>
                        </div>
                    </li>

                    <li class="row">
                      <div class="col-md-12 komponen">
                          <div class="pull-left nomor"><small>6.4.1.b</small></div>
                          <div class="deskriptor pull-left">
                              <div class="row">
                              <strong>Bahan pustaka berupa disertasi/tesis/skripsi/tugas akhir</strong>
                            </div>
                            <div class="row">
                              <div class="form-group col-md-3">
                                <label for="nilai6_4_1_b">Jumlah bahan pustaka berupa disertasi/tesis/skripsi/tugas akhir</label>
                                <input type="number" min=0 name="nilai6_4_1_b" class="form-control border-input" id="nilai6_4_1_b" value="<?php if(!$dataCheck) echo json_decode($data[5]->data)[0] ?>" required="">
                              </div>
                            </div>
                          </div>
                      
                      <div class="dropdown pull-right">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                                  <b class="fa fa-ellipsis-v"></b>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-right"> 
                                      <li><a href="#" data-toggle="modal" data-target="#upload_file"  data-catatan="" data-kode="">Catatan Auditor</a></li>
                                </ul>
                              </div>
                      </div>
                    </li>

                    <li class="row">
                        <div class="col-md-12 komponen">
                            <div class="pull-left nomor"><small>6.4.1.c</small></div>
                            <div class="deskriptor pull-left">
                              <div class="row">
                                <strong>
                                Bahan pustaka berupa jurnal ilmiah terakreditasi Dikti
                                </strong>
                              </div>
                            <div class="row">
                              <div class="col-md-5">
                                <select name="nilai6_4_1_c" id="" class="form-control border-input" required="">
                                  <option disabled selected >--Pilih--</option>
                                  <option value="4" <?php if(!$dataCheck){ if (json_decode($data[6]->data)[0] == 4){ echo "selected"; }}?>>≥3 Judul jurnal, nomornya lengkap</option>
                                  <option value="3" <?php if(!$dataCheck){ if (json_decode($data[6]->data)[0] == 3){ echo "selected"; }}?>>2 Judul jurnal, nomornya lengkap</option>
                                  <option value="2" <?php if(!$dataCheck){ if (json_decode($data[6]->data)[0] == 2){ echo "selected"; }}?>>1 Judul jurnal, nomornya lengkap</option>
                                  <option value="1" <?php if(!$dataCheck){ if (json_decode($data[6]->data)[0] == 1){ echo "selected"; }}?>>Tidak ada jurnal yang nomornya lengkap </option>
                                  <option value="0" <?php if(!$dataCheck){ if (json_decode($data[6]->data)[0] == 0){ echo "selected"; }}?>>Tidak memiliki jurnal terakreditasi</option>
                                </select>
                              </div>
                            </div>
                          </div>
                        
                        <div class="dropdown pull-right">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                                  <b class="fa fa-ellipsis-v"></b>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-right"> 
                                      <li><a href="#" data-toggle="modal" data-target="#upload_file"  data-catatan="" data-kode="">Catatan Auditor</a></li>
                                </ul>
                              </div>
                        </div>
                    </li>

                    <li class="row">
                      <div class="col-md-12 komponen">
                          <div class="pull-left nomor"><small>6.4.1.d</small></div>
                          <div class="deskriptor pull-left">
                            <div class="row">
                              <strong>
                              Bahan pustaka  berupa jurnal ilmiah internasional
                              </strong>
                            </div>
                          <div class="row">
                            <div class="col-md-5">
                              <select name="nilai6_4_1_d" id="" class="form-control border-input" required="">
                                <option disabled selected >--Pilih--</option>
                                <option value="4" <?php if(!$dataCheck){ if (json_decode($data[7]->data)[0] == 4){ echo "selected"; }}?>>≥2 Judul jurnal, nomornya lengkap</option>
                                <option value="3" <?php if(!$dataCheck){ if (json_decode($data[7]->data)[0] == 3){ echo "selected"; }}?>>2 Judul jurnal, nomornya lengkap</option>
                                <option value="2" <?php if(!$dataCheck){ if (json_decode($data[7]->data)[0] == 2){ echo "selected"; }}?>>Tidak ada jurnal yang nomornya lengkap</option>
                              </select>
                            </div>
                          </div>
                        </div>
                      
                      <div class="dropdown pull-right">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                                  <b class="fa fa-ellipsis-v"></b>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-right"> 
                                      <li><a href="#" data-toggle="modal" data-target="#upload_file"  data-catatan="" data-kode="">Catatan Auditor</a></li>
                                </ul>
                              </div>
                      </div>
                    </li>

                    <li class="row">
                        <div class="col-md-12 komponen">
                              <div class="pull-left nomor"><small>6.4.1.e</small></div>
                              <div class="deskriptor pull-left">
                                  <div class="row">
                                  <strong>Bahan pustaka berupa prosiding seminar dalam tiga tahun terakhir</strong>
                                </div>
                                <div class="row">
                                  <div class="form-group col-md-3">
                                    <label for="nilai6_4_1_esatu">Jumlah Prosiding dalam Tiga Tahun terakhir</label>
                                    <input type="number" min=0 name="nilai6_4_1_esatu" class="form-control border-input" id="nilai6_4_1_e" value="<?php if(!$dataCheck) echo json_decode($data[8]->data)[0] ?>" required="">
                                  </div>
                                </div>
                              </div>
                          
                          <div class="dropdown pull-right">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                                  <b class="fa fa-ellipsis-v"></b>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-right"> 
                                      <li><a href="#" data-toggle="modal" data-target="#upload_file"  data-catatan="" data-kode="">Catatan Auditor</a></li>
                                </ul>
                              </div>
                          </div>
                    </li>

                </ul>
              </fieldset>

            <div class="footer text-center">
                <button type="submit" class="btn btn-info btn-fill btn-wd">@if(sizeof($data)>0) Update @else Simpan @endif</button>
            <div class="clearfix"></div>
                <!-- <div class="chart-legend">
                    <i class="fa fa-circle text-info"></i> Open
                    <i class="fa fa-circle text-danger"></i> Click
                    <i class="fa fa-circle text-warning"></i> Click Second Time
                </div>
                <hr>
                <div class="stats">
                    <i class="ti-reload"></i> Updated 3 minutes ago
                </div> -->
            </div>
            </form>
        </div>
    </div>
</div>

@endsection

@push('modal')
<div class="modal fade" id="upload_file" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Catatan Auditor poin <span id="kode"></span></h4>
      </div>
      <div class="modal-body">
        <figure class="highlight" id="catatan">
        </figure>
      </div>
      <div class="modal-footer">
        {{-- <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button> --}}
      </div>
    </div>
  </div>
</div>
@endpush

@section("js")

<script type="text/javascript">
    $(document).ready(function(){
        $("#upload_file").on("show.bs.modal", function (event) {
                const catatan = $(event.relatedTarget);

                var detail_catatan = catatan.data("catatan");
                var kode_catatan = catatan.data("kode");

                $("#kode").text(kode_catatan);
                $("#catatan").text(detail_catatan);         
                
            });
    });
</script>

@endsection

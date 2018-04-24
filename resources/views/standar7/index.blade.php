@extends('layout')
@section('content')
  <div class="col-md-12">
    <div class="card">
        <div class="header">
            <h4 class="title">Penelitian, Pengabdian Kepada Masyarakat, dan Kerjasama</h4>
            <p class="category">Standar 7</p>
        </div>
        <div class="content">
            <form action="/standar7/save" method="post" class="kuesioner">
                {{ csrf_field() }}

                <fieldset @if(sizeof($data)>0) disabled @endif>
                <ul class="list-unstyled">
                    <li class="row">
                        <div class="col-md-12 komponen">
                            <span class="nomor pull-left">7.1.1</span>
                            <div class="deskriptor pull-left">
                                 <div class="row">
                                   <strong>Jumlah penelitian yang sesuai dengan bidang keilmuan PS, yang dilakukan oleh dosen tetap yang bidang keahliannya sama dengan PS, selama 3 tahun.</strong>
                                 </div>
                                 <div class="row">
                                   <div class="form-group col-md-3">
                                     <label for="7_1_1_na">Na</label>
                                     <input type="number" name="na7_1_1" class="form-control border-input" id="7_1_1_na" min="0" value="<?php if(!$dataCheck) echo json_decode($data[0]->data)[0] ?>" required>
                                     <small>Jumlah penelitian dnegan biaya luar negeri yang sesuai bidang ilmu</small>
                                   </div>
                                   <div class="form-group col-md-3">
                                     <label for="7_1_1_nb">Nb</label>
                                     <input type="number" name="nb7_1_1" class="form-control border-input" id="7_1_1_nb" min="0" value="<?php if(!$dataCheck) echo json_decode($data[0]->data)[1] ?>" required>
                                     <small>Jumlah penelitian dengna biaya luar yang sesuai bidang ilmu</small>
                                   </div>
                                   <div class="form-group col-md-3">
                                     <label for="7_1_1_nc">Nc</label>
                                     <input type="number" name="nc7_1_1" class="form-control border-input" id="7_1_1_nc" min="0" value="<?php if(!$dataCheck) echo json_decode($data[0]->data)[2] ?>" required>
                                     <small>Jumlah penelitian dengna biaya dari PT/sendiri yang sesuai bidang ilmu</small>
                                   </div>
                                   <div class="form-group col-md-3">
                                     <label for="7_1_1_f">F</label>
                                     <input type="number" name="f7_1_1" class="form-control border-input" id="7_1_1_f" min="1" value="<?php if(!$dataCheck) echo json_decode($data[0]->data)[3] ?>" required>
                                     <small>Jumlah dosen tetap yang bidang keahliannya sesuai dengna PS</small>
                                   </div>
                                 </div>
                            </div>
                        </div>
                    </li>
                    <li class="row">
                        <div class="col-md-12 komponen">
                            <span class="nomor pull-left">7.1.2</span>
                            <div class="deskriptor pull-left">
                                <div class="row">
                                  <strong>Keterlibatan mahasiswa yang melakukan tugas akhir dalam penelitian dosen</strong>
                                </div>
                                <div class="row">
                                  <div class="form-group col-md-12 form-inline">
                                    <label for="pd">PD</label>
                                    <input class="form-control border-input" type="number" name="pd7_1_2" min="0" value="<?php if(!$dataCheck) echo json_decode($data[1]->data)[0] ?>" required>
                                    <span>%</span>
                                    <small>Persentasi mahasiswa yang melakukan tugas akhir dalam penelitian dosen</small>
                                  </div>
                                </div>
                            </div>

                        </div>
                    </li>
                    <li class="row">
                        <div class="col-md-12 komponen">
                            <div class="pull-left nomor">7.1.3</div>
                            <div class="deskriptor pull-left">
                                <div class="row">
                                  <strong>
                                  Jumlah artikel ilmiah yang dihasilkan oleh dosen tetap yang bidang keahliannya sama dengan PS, selama 3 tahun
                                  </strong>
                                </div>
                                <div class="row">
                                  <div class="form-group col-md-3">
                                    <label for="7_1_3_na">Na</label>
                                    <input type="number" name="na7_1_3" class="form-control border-input" id="7_1_3_na" min="0" value="<?php if(!$dataCheck) echo json_decode($data[2]->data)[0] ?>" required>
                                    <small>Jumlah penelitian dnegan biaya luar negeri yang sesuai bidang ilmu</small>
                                  </div>
                                  <div class="form-group col-md-3">
                                    <label for="7_1_3_nb">Nb</label>
                                    <input type="number" name="nb7_1_3" class="form-control border-input" id="7_1_3_nb" min="0" value="<?php if(!$dataCheck) echo json_decode($data[2]->data)[1] ?>" required>
                                    <small>Jumlah penelitian dengna biaya luar yang sesuai bidang ilmu</small>
                                  </div>
                                  <div class="form-group col-md-3">
                                    <label for="7_1_3_nc">Nc</label>
                                    <input type="number" name="nc7_1_3" class="form-control border-input" id="7_1_3_nc" min="0" value="<?php if(!$dataCheck) echo json_decode($data[2]->data)[2] ?>" required>
                                    <small>Jumlah penelitian dengna biaya dari PT/sendiri yang sesuai bidang ilmu</small>
                                  </div>
                                  <div class="form-group col-md-3">
                                    <label for="7_1_3_f">F</label>
                                    <input type="number" name="f7_1_3" class="form-control border-input" id="7_1_3_f" min="1" value="<?php if(!$dataCheck) echo json_decode($data[2]->data)[3] ?>" required>
                                    <small>Jumlah dosen tetap yang bidang keahliannya sesuai dengna PS</small>
                                  </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="row">
                        <div class="col-md-12 komponen">
                            <div class="pull-left nomor">7.1.4</div>
                            <div class="deskriptor pull-left">
                                <div class="row">
                                  <strong>
                                  Karya-karya PS/institusi yang telah memperoleh perlindungan Hak atas Kekayaan Intelektual (HaKI) dalam tiga tahun terakhir
                                  </strong>
                                </div>
                                <div class="row">
                                  <div class="col-md-12">
                                    <select name="n7_1_4" id="" class="form-control border-input">
                                        <option disabled selected >--Pilih--</option>
                                        <option value="2" <?php if(!$dataCheck){ if (json_decode($data[3]->data)[0] == 2){ echo "selected"; }}?>>
                                          Tidak ada karya dosen tetap yang memperoleh HaKI
                                        </option>
                                        <option value="3" <?php if(!$dataCheck){ if (json_decode($data[3]->data)[0] == 3){ echo "selected"; }}?>>
                                          Satu yang memperoleh HaKI
                                        </option>
                                        <option value="4" <?php if(!$dataCheck){ if (json_decode($data[3]->data)[0] == 4){ echo "selected"; }}?>>
                                          Dua atau lebih karya yang memperoleh HaKI
                                        </option>
                                    </select>
                                  </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="row">
                        <div class="col-md-12 komponen">
                            <div class="pull-left nomor">7.2.1</div>
                            <div class="deskriptor pull-left">
                                <div class="row">
                                  <strong>
                                  Jumlah kegiatan pelayanan/pengabdian kepada masyarakat (PkM) yang dilakukan oleh dosen tetap yang bidang keahliannya sama dengan PS selama tiga tahun.
                                  </strong>
                                </div>
                                <div class="row">
                                  <div class="form-group col-md-3">
                                    <label for="7_2_1_na">Na</label>
                                    <input type="number" name="na7_2_1" class="form-control border-input" id="7_2_1_na" min="0" value="<?php if(!$dataCheck) echo json_decode($data[4]->data)[0] ?>" required>
                                    <small>Jumlah kegiatan PkM dengan biaya luar negeri yang sesuai bidang ilmu</small>
                                  </div>
                                  <div class="form-group col-md-3">
                                    <label for="7_2_1_nb">Nb</label>
                                    <input type="number" name="nb7_2_1" class="form-control border-input" id="7_2_1_nb" min="0" value="<?php if(!$dataCheck) echo json_decode($data[4]->data)[1] ?>" required>
                                    <small>Jumlah kegiatan PkM dengna biaya luar yang sesuai bidang ilmu</small>
                                  </div>
                                  <div class="form-group col-md-3">
                                    <label for="7_2_1_nc">Nc</label>
                                    <input type="number" name="nc7_2_1" class="form-control border-input" id="7_2_1_nc" min="0" value="<?php if(!$dataCheck) echo json_decode($data[4]->data)[2] ?>" required>
                                    <small>Jumlah kegiatan PkM dengan biaya dari PT/sendiri yang sesuai bidang ilmu</small>
                                  </div>
                                  <div class="form-group col-md-3">
                                    <label for="7_2_1_f">F</label>
                                    <input type="number" name="f7_2_1" class="form-control border-input" id="7_2_1_f" min="1" value="<?php if(!$dataCheck) echo json_decode($data[4]->data)[3] ?>" required>
                                    <small>Jumlah dosen tetap yang bidang keahliannya sesuai dengan PS</small>
                                  </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
              </fieldset>

            <div class="footer text-center">
                <button type="submit" class="btn btn-info btn-fill btn-wd" @if(sizeof($data)>0) disabled @endif>Simpan</button>
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

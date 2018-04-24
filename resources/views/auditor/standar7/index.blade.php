@extends('layoutauditor')
@section('content')
  <div class="col-md-12">
@include("auditor.riwayat")
    <div class="card">
        <div class="header">
            <h4 class="title">Penelitian, Pengabdian Kepada Masyarakat, dan Kerjasama</h4>
            <p class="category">Standar 7</p>
        </div>
        <div class="content">
            <form action="/auditor/isi/{{$idprodi}}/standar7/save" method="post" class="kuesioner">
              {{-- <fieldset @if(sizeof($data) > 0) disabled @endif> --}}
                {{ csrf_field() }}
                <ul class="list-unstyled">
                    <li class="row">
                        <div class="col-md-12 komponen">
                            <span class="nomor pull-left">7.1.1</span>
                            <div class="deskriptor pull-left">
                                 <strong>Jumlah penelitian yang sesuai dengan bidang keilmuan PS, yang dilakukan oleh dosen tetap yang bidang keahliannya sama dengan PS, selama 3 tahun.</strong>
                            </div>
                        </div>
                        @component("auditor.isiangket")
                                      @isset ($data_kprodi[0])
                                      @slot('skor')
                                          {{$data_kprodi[0]->kategori}}
                                      @endslot
                                      @slot('isian_angket')
                                        <div class="row">
                                          <div class="form-group col-md-3">
                                            <label for="7_1_1_na">Na</label>
                                            <input type="number" name="na7_1_1" class="form-control border-input" id="7_1_1_na" min="0" value="{{json_decode($data_kprodi[0]->data)[0]}}" disabled>
                                            <small>Jumlah penelitian dengan biaya luar negeri yang sesuai bidang ilmu</small>
                                          </div>
                                          <div class="form-group col-md-3">
                                            <label for="7_1_1_nb">Nb</label>
                                            <input type="number" name="nb7_1_1" class="form-control border-input" id="7_1_1_nb" min="0" value="{{json_decode($data_kprodi[0]->data)[1]}}" disabled>
                                            <small>Jumlah penelitian dengan biaya luar yang sesuai bidang ilmu</small>
                                          </div>                                          
                                        </div>
                                        <div class="row">
                                          <div class="form-group col-md-3">
                                            <label for="7_1_1_nc">Nc</label>
                                            <input type="number" name="nc7_1_1" class="form-control border-input" id="7_1_1_nc" min="0" value="{{json_decode($data_kprodi[0]->data)[2]}}" disabled>
                                            <small>Jumlah penelitian dengan biaya dari PT/sendiri yang sesuai bidang ilmu</small>
                                          </div>
                                          <div class="form-group col-md-3">
                                            <label for="7_1_1_f">F</label>
                                            <input type="number" name="f7_1_1" class="form-control border-input" id="7_1_1_f" min="1" value="{{json_decode($data_kprodi[0]->data)[3]}}" disabled>
                                            <small>Jumlah dosen tetap yang bidang keahliannya sesuai dengan PS</small>
                                          </div>                                          
                                        </div>
                                      @endslot
                                          @if ($standar_status_code == 7)
                                            @slot('aksi_field')
                                                <select name="setuju_7_1_1" id="setuju_7_1_1" class="form-control border-input">
                                                        <option value="1">Setuju</option>
                                                        <option value="0" @if(!$dataCheck) @if($data_kprodi[0]->data != $data[0]->data) selected @endif @endif>Validasi</option>
                                                </select>
                                            @endslot                                            
                                          @endif
                                      @endisset
                                    @endcomponent

                                    @component("auditor.validasi_auditor")
                                      @slot('id_input')
                                          7_1_1
                                      @endslot
                                      @slot('validasi_auditor')
                                          <div class="form-group col-md-3">
                                            <label for="7_1_1_na">Na</label>
                                            <input type="number" name="na7_1_1" class="form-control border-input" id="7_1_1_na" min="0" value="@if(!$dataCheck){{json_decode($data[0]->data)[0]}}@endif" required="">
                                            <small>Jumlah penelitian dengan biaya luar negeri yang sesuai bidang ilmu</small>
                                          </div>
                                          <div class="form-group col-md-3">
                                            <label for="7_1_1_nb">Nb</label>
                                            <input type="number" name="nb7_1_1" class="form-control border-input" id="7_1_1_nb" min="0" value="@if(!$dataCheck){{json_decode($data[0]->data)[1]}}@endif" required="">
                                            <small>Jumlah penelitian dengan biaya luar yang sesuai bidang ilmu</small>
                                          </div>
                                          <div class="form-group col-md-3">
                                            <label for="7_1_1_nc">Nc</label>
                                            <input type="number" name="nc7_1_1" class="form-control border-input" id="7_1_1_nc" min="0" value="@if(!$dataCheck){{json_decode($data[0]->data)[2]}}@endif" required="">
                                            <small>Jumlah penelitian dengan biaya dari PT/sendiri yang sesuai bidang ilmu</small>
                                          </div>
                                          <div class="form-group col-md-3">
                                            <label for="7_1_1_f">F</label>
                                            <input type="number" name="f7_1_1" class="form-control border-input" id="7_1_1_f" min="1" value="@if(!$dataCheck){{json_decode($data[0]->data)[3]}}@endif" required="">
                                            <small>Jumlah dosen tetap yang bidang keahliannya sesuai dengan PS</small>
                                          </div>
                                      @endslot
                                    @endcomponent
                    </li>
                    <li class="row">
                        <div class="col-md-12 komponen">
                            <span class="nomor pull-left">7.1.2</span>
                            <div class="deskriptor pull-left">
                                 <strong>Keterlibatan mahasiswa yang melakukan tugas akhir dalam penelitian dosen</strong>
                            </div>
                        </div>
                        @component("auditor.isiangket")
                                      @isset ($data_kprodi[1])
                                      @slot('skor')
                                          {{$data_kprodi[1]->kategori}}
                                      @endslot
                                      @slot('isian_angket')
                                          <div class="form-group col-md-12 form-inline">
                                            <label for="pd">PD</label>
                                            <input class="form-control border-input" type="number" name="pd7_1_2" min="0" value="{{json_decode($data_kprodi[1]->data)[0]}}" disabled>
                                            <span>%</span>
                                            <small>Persentasi mahasiswa yang melakukan tugas akhir dalam penelitian dosen</small>
                                          </div>
                                      @endslot
                                          @if ($standar_status_code == 7)
                                            @slot('aksi_field')
                                                <select name="setuju_7_1_2" id="setuju_7_1_2" class="form-control border-input">
                                                        <option value="1">Setuju</option>
                                                        <option value="0" @if(!$dataCheck) @if($data_kprodi[1]->data != $data[1]->data) selected @endif @endif>Validasi</option>
                                                </select>
                                            @endslot                                            
                                          @endif
                                      @endisset
                                    @endcomponent

                                    @component("auditor.validasi_auditor")
                                      @slot('id_input')
                                          7_1_2
                                      @endslot
                                      @slot('validasi_auditor')
                                          <div class="form-group col-md-12 form-inline">
                                            <label for="pd">PD</label>
                                            <input class="form-control border-input" type="number" name="pd7_1_2" min="0" value="@if(!$dataCheck){{json_decode($data[1]->data)[0]}}@endif" required="">
                                            <span>%</span>
                                            <small>Persentasi mahasiswa yang melakukan tugas akhir dalam penelitian dosen</small>
                                          </div>
                                      @endslot
                                    @endcomponent
                    </li>
                    <li class="row">
                        <div class="col-md-12 komponen">
                            <span class="nomor pull-left">7.1.3</span>
                            <div class="deskriptor pull-left">
                                 <strong>Jumlah artikel ilmiah yang dihasilkan oleh dosen tetap yang bidang keahliannya sama dengan PS, selama 3 tahun</strong>
                            </div>
                        </div>
                        @component("auditor.isiangket")
                                      @isset ($data_kprodi[2])
                                      @slot('skor')
                                          {{$data_kprodi[2]->kategori}}
                                      @endslot
                                      @slot('isian_angket')
                                        <div class="row">
                                           <div class="form-group col-md-3">
                                            <label for="7_1_3_na">Na</label>
                                            <input type="number" name="na7_1_3" class="form-control border-input" id="7_1_3_na" min="0" value="{{json_decode($data_kprodi[2]->data)[0]}}" disabled>
                                            <small>Jumlah penelitian dengan biaya luar negeri yang sesuai bidang ilmu</small>
                                          </div>
                                          <div class="form-group col-md-3">
                                            <label for="7_1_3_nb">Nb</label>
                                            <input type="number" name="nb7_1_3" class="form-control border-input" id="7_1_3_nb" min="0" value="{{json_decode($data_kprodi[2]->data)[1]}}" disabled>
                                            <small>Jumlah penelitian dengan biaya luar yang sesuai bidang ilmu</small>
                                          </div>
                                        </div>
                                        <div class="row">
                                          <div class="form-group col-md-3">
                                            <label for="7_1_3_nc">Nc</label>
                                            <input type="number" name="nc7_1_3" class="form-control border-input" id="7_1_3_nc" min="0" value="{{json_decode($data_kprodi[2]->data)[2]}}" disabled>
                                            <small>Jumlah penelitian dengan biaya dari PT/sendiri yang sesuai bidang ilmu</small>
                                          </div>
                                          <div class="form-group col-md-3">
                                            <label for="7_1_3_f">F</label>
                                            <input type="number" name="f7_1_3" class="form-control border-input" id="7_1_3_f" min="1" value="{{json_decode($data_kprodi[2]->data)[3]}}" disabled>
                                            <small>Jumlah dosen tetap yang bidang keahliannya sesuai dengan PS</small>
                                          </div>
                                        </div>
                                      @endslot
                                          @if ($standar_status_code == 7)
                                            @slot('aksi_field')
                                                <select name="setuju_7_1_3" id="setuju_7_1_3" class="form-control border-input">
                                                        <option value="1">Setuju</option>
                                                        <option value="0" @if(!$dataCheck) @if($data_kprodi[2]->data != $data[2]->data) selected @endif @endif>Validasi</option>
                                                </select>
                                            @endslot                                            
                                          @endif
                                      @endisset
                                    @endcomponent

                                    @component("auditor.validasi_auditor")
                                      @slot('id_input')
                                          7_1_3
                                      @endslot
                                      @slot('validasi_auditor')
                                          <div class="form-group col-md-3">
                                            <label for="7_1_3_na">Na</label>
                                            <input type="number" name="na7_1_3" class="form-control border-input" id="7_1_3_na" min="0" value="@if(!$dataCheck){{json_decode($data[2]->data)[0]}}@endif" required="">
                                            <small>Jumlah penelitian dengan biaya luar negeri yang sesuai bidang ilmu</small>
                                          </div>
                                          <div class="form-group col-md-3">
                                            <label for="7_1_3_nb">Nb</label>
                                            <input type="number" name="nb7_1_3" class="form-control border-input" id="7_1_3_nb" min="0" value="@if(!$dataCheck){{json_decode($data[2]->data)[1]}}@endif" required="">
                                            <small>Jumlah penelitian dengan biaya luar yang sesuai bidang ilmu</small>
                                          </div>
                                          <div class="form-group col-md-3">
                                            <label for="7_1_3_nc">Nc</label>
                                            <input type="number" name="nc7_1_3" class="form-control border-input" id="7_1_3_nc" min="0" value="@if(!$dataCheck){{json_decode($data[2]->data)[2]}}@endif" required="">
                                            <small>Jumlah penelitian dengan biaya dari PT/sendiri yang sesuai bidang ilmu</small>
                                          </div>
                                          <div class="form-group col-md-3">
                                            <label for="7_1_3_f">F</label>
                                            <input type="number" name="f7_1_3" class="form-control border-input" id="7_1_3_f" min="1" value="@if(!$dataCheck){{json_decode($data[2]->data)[3]}}@endif" required="">
                                            <small>Jumlah dosen tetap yang bidang keahliannya sesuai dengan PS</small>
                                          </div>
                                      @endslot
                                    @endcomponent
                    </li>
                    <li class="row">
                        <div class="col-md-12 komponen">
                            <span class="nomor pull-left">7.1.4</span>
                            <div class="deskriptor pull-left">
                                 <strong>Karya-karya PS/institusi yang telah memperoleh perlindungan Hak atas Kekayaan Intelektual (HaKI) dalam tiga tahun terakhir</strong>
                            </div>
                        </div>
                        @component("auditor.isiangket")
                                      @isset ($data_kprodi[3])
                                      @slot('skor')
                                          {{$data_kprodi[3]->kategori}}
                                      @endslot
                                      @slot('isian_angket')
                                          <div class="col-md-12">
                                            <select name="n7_1_4" id="" class="form-control border-input" disabled>
                                                <option value="2" {{(json_decode($data_kprodi[3]->data)[0] == 2)?"selected":""}}>
                                                  Tidak ada karya dosen tetap yang memperoleh HaKI
                                                </option>
                                                <option value="3" {{(json_decode($data_kprodi[3]->data)[0] == 3)?"selected":""}}>
                                                  Satu yang memperoleh HaKI
                                                </option>
                                                <option value="4" {{(json_decode($data_kprodi[3]->data)[0] == 4)?"selected":""}}>
                                                  Dua atau lebih karya yang memperoleh HaKI
                                                </option>
                                            </select>
                                          </div>
                                      @endslot
                                          @if ($standar_status_code == 7)
                                            @slot('aksi_field')
                                                <select name="setuju_7_1_4" id="setuju_7_1_4" class="form-control border-input">
                                                        <option value="1">Setuju</option>
                                                        <option value="0" @if(!$dataCheck) @if($data_kprodi[3]->data != $data[3]->data) selected @endif @endif>Validasi</option>
                                                </select>
                                            @endslot                                            
                                          @endif
                                      @endisset
                                    @endcomponent

                                    @component("auditor.validasi_auditor")
                                      @slot('id_input')
                                          7_1_4
                                      @endslot
                                      @slot('validasi_auditor')
                                          <div class="col-md-12">
                                            <select name="n7_1_4" id="" class="form-control border-input" required="">
                                                <option value="2" @if(!$dataCheck) (json_decode($data[3]->data)[0] == 2)?"selected":"" @endif>
                                                  Tidak ada karya dosen tetap yang memperoleh HaKI
                                                </option>
                                                <option value="3" @if(!$dataCheck) (json_decode($data[3]->data)[0] == 3)?"selected":"" @endif>
                                                  Satu yang memperoleh HaKI
                                                </option>
                                                <option value="4" @if(!$dataCheck) (json_decode($data[3]->data)[0] == 4)?"selected":"" @endif>
                                                  Dua atau lebih karya yang memperoleh HaKI
                                                </option>
                                            </select>
                                          </div>
                                      @endslot
                                    @endcomponent
                    </li>
                    <li class="row">
                        <div class="col-md-12 komponen">
                            <span class="nomor pull-left">7.2.1</span>
                            <div class="deskriptor pull-left">
                                 <strong>Jumlah kegiatan pelayanan/pengabdian kepada masyarakat (PkM) yang dilakukan oleh dosen tetap yang bidang keahliannya sama dengan PS selama tiga tahun.</strong>
                            </div>
                        </div>
                        @component("auditor.isiangket")
                                      @isset ($data_kprodi[4])
                                      @slot('skor')
                                          {{$data_kprodi[4]->kategori}}
                                      @endslot
                                      @slot('isian_angket')
                                      <div class="row">
                                        <div class="form-group col-md-3">
                                            <label for="7_2_1_na">Na</label>
                                            <input type="number" name="na7_2_1" class="form-control border-input" id="7_2_1_na" min="0" value="{{json_decode($data_kprodi[4]->data)[0]}}" disabled>
                                            <small>Jumlah kegiatan PkM dengan biaya luar negeri yang sesuai bidang ilmu</small>
                                          </div>
                                          <div class="form-group col-md-3">
                                            <label for="7_2_1_nb">Nb</label>
                                            <input type="number" name="nb7_2_1" class="form-control border-input" id="7_2_1_nb" min="0" value="{{json_decode($data_kprodi[4]->data)[1]}}" disabled>
                                            <small>Jumlah kegiatan PkM dengan biaya luar yang sesuai bidang ilmu</small>
                                          </div>
                                      </div>
                                      <div class="row">
                                        <div class="form-group col-md-3">
                                            <label for="7_2_1_nc">Nc</label>
                                            <input type="number" name="nc7_2_1" class="form-control border-input" id="7_2_1_nc" min="0" value="{{json_decode($data_kprodi[4]->data)[2]}}" disabled>
                                            <small>Jumlah kegiatan PkM dengan biaya dari PT/sendiri yang sesuai bidang ilmu</small>
                                          </div>
                                          <div class="form-group col-md-3">
                                            <label for="7_2_1_f">F</label>
                                            <input type="number" name="f7_2_1" class="form-control border-input" id="7_2_1_f" min="1" value="{{json_decode($data_kprodi[4]->data)[3]}}" disabled>
                                            <small>Jumlah dosen tetap yang bidang keahliannya sesuai dengan PS</small>
                                          </div>
                                      </div>   
                                      @endslot
                                          @if ($standar_status_code == 7)
                                            @slot('aksi_field')
                                                <select name="setuju_7_2_1" id="setuju_7_2_1" class="form-control border-input">
                                                        <option value="1">Setuju</option>
                                                        <option value="0" @if(!$dataCheck) @if($data_kprodi[4]->data != $data[4]->data) selected @endif @endif>Validasi</option>
                                                </select>
                                            @endslot                                            
                                          @endif
                                      @endisset
                                    @endcomponent

                                    @component("auditor.validasi_auditor")
                                      @slot('id_input')
                                          7_2_1
                                      @endslot
                                      @slot('validasi_auditor')
                                          <div class="form-group col-md-3">
                                            <label for="7_2_1_na">Na</label>
                                            <input type="number" name="na7_2_1" class="form-control border-input" id="7_2_1_na" min="0" value="@if(!$dataCheck){{json_decode($data[4]->data)[0]}}@endif" required="">
                                            <small>Jumlah kegiatan PkM dengan biaya luar negeri yang sesuai bidang ilmu</small>
                                          </div>
                                          <div class="form-group col-md-3">
                                            <label for="7_2_1_nb">Nb</label>
                                            <input type="number" name="nb7_2_1" class="form-control border-input" id="7_2_1_nb" min="0" value="@if(!$dataCheck){{json_decode($data[4]->data)[1]}}@endif" required="">
                                            <small>Jumlah kegiatan PkM dengan biaya luar yang sesuai bidang ilmu</small>
                                          </div>
                                          <div class="form-group col-md-3">
                                            <label for="7_2_1_nc">Nc</label>
                                            <input type="number" name="nc7_2_1" class="form-control border-input" id="7_2_1_nc" min="0" value="@if(!$dataCheck){{json_decode($data[4]->data)[2]}}@endif" required="">
                                            <small>Jumlah kegiatan PkM dengan biaya dari PT/sendiri yang sesuai bidang ilmu</small>
                                          </div>
                                          <div class="form-group col-md-3">
                                            <label for="7_2_1_f">F</label>
                                            <input type="number" name="f7_2_1" class="form-control border-input" id="7_2_1_f" min="1" value="@if(!$dataCheck){{json_decode($data[4]->data)[3]}}@endif" required="">
                                            <small>Jumlah dosen tetap yang bidang keahliannya sesuai dengan PS</small>
                                          </div>
                                      @endslot
                                    @endcomponent
                    </li>
                </ul>
                {{-- </fieldset> --}}

            <div class="footer text-center">
                <button type="submit" class="btn btn-info btn-fill btn-wd" @if ($standar_status_code != 7) disabled @endif>Simpan</button>
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

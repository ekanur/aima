@extends('layoutauditor')
@section('title', 'Standar 6')
@section('content')
<div class="col-md-12">
@include("auditor.riwayat")
    <div class="card">
        <div class="header">
            <h4 class="title">Pembiayaan, Sarana dan Prasarana,serta Sistem Informasi</h4>
            <p class="category">Standar 6</p>
        </div>

        <div class="content">
            <form action="/auditor/isi/{{$idprodi}}/standar6/save" method="post" class="kuesioner">
              {{-- <fieldset @if(sizeof($data) > 0) disabled @endif> --}}
                {{ csrf_field() }}
                <ul class="list-unstyled">
                    <li class="row">
                        <div class="col-md-12 komponen">
                            <span class="nomor pull-left">6.2.1</span>
                            <div class="deskriptor pull-left">
                                 <strong>Penggunaan dana untuk operasional (pendidikan, penelitian, pengabdian pada masyarakat, termasuk gaji dan upah).</strong>
                            </div>
                        </div>
                        @component("auditor.isiangket")
                                      @isset ($data_kprodi[0])
                                      @slot('skor')
                                          {{$data_kprodi[0]->kategori}}
                                      @endslot
                                      @slot('isian_angket')
                                          <div class="form-group col-md-4">
                                           <label for="nilai6_2_1_dana">Jumlah Dana Operasional Permahasiswa Pertahun</label>
                                           <input type="number" min=0 name="nilai6_2_1_dana" class="form-control border-input" id="nilai6_2_1" value="{{json_decode($data_kprodi[0]->data)[0]}}" disabled>
                                         </div>
                                      @endslot
                                          @if ($standar_status_code == 7)
                                            @slot('aksi_field')
                                                <select name="setuju_6_2_1" id="setuju_6_2_1" class="form-control border-input">
                                                        <option value="1">Setuju</option>
                                                        <option value="0" @if(!$dataCheck) @if($data_kprodi[0]->data != $data[0]->data) selected @endif @endif>Validasi</option>
                                                </select>
                                            @endslot                                            
                                          @endif
                                      @endisset
                                    @endcomponent

                                    @component("auditor.validasi_auditor")
                                      @slot('id_input')
                                          6_2_1
                                      @endslot
                                      @slot('validasi_auditor')
                                          <div class="form-group col-md-3">
                                           <label for="nilai6_2_1_dana">Jumlah Dana Operasional Permahasiswa Pertahun</label>
                                           <input type="number" min=0 name="nilai6_2_1_dana" class="form-control border-input" id="nilai6_2_1" value="@if(!$dataCheck){{json_decode($data[0]->data)[0]}}@endif" required="">
                                         </div>
                                      @endslot
                                    @endcomponent
                    </li>
                    <li class="row">
                        <div class="col-md-12 komponen">
                            <span class="nomor pull-left">6.2.2</span>
                            <div class="deskriptor pull-left">
                                 <strong>Dana yang diperoleh dalam rangka pelayanan/pengabdian kepada masyarakat dalam tiga tahun terakhir</strong>
                            </div>
                        </div>
                        @component("auditor.isiangket")
                                      @isset ($data_kprodi[1])
                                      @slot('skor')
                                          {{$data_kprodi[1]->kategori}}
                                      @endslot
                                      @slot('isian_angket')
                                          <div class="form-group col-md-4">
                                           <label for="nilai6_2_2dana">Rata-rata dana penelitian per dosen tetap per tahun</label>
                                           <input type="number" min=0 name="nilai6_2_2dana" class="form-control border-input" id="nilai6_2_2" value="{{json_decode($data_kprodi[1]->data)[0]}}" disabled>
                                         </div>
                                      @endslot
                                          @if ($standar_status_code == 7)
                                            @slot('aksi_field')
                                                <select name="setuju_6_2_2" id="setuju_6_2_2" class="form-control border-input">
                                                        <option value="1">Setuju</option>
                                                        <option value="0" @if(!$dataCheck) @if($data_kprodi[1]->data != $data[1]->data) selected @endif @endif>Validasi</option>
                                                </select>
                                            @endslot                                            
                                          @endif
                                      @endisset
                                    @endcomponent

                                    @component("auditor.validasi_auditor")
                                      @slot('id_input')
                                          6_2_2
                                      @endslot
                                      @slot('validasi_auditor')
                                          <div class="form-group col-md-3">
                                           <label for="nilai6_2_2dana">Rata-rata dana penelitian per dosen tetap per tahun</label>
                                           <input type="number" min=0 name="nilai6_2_2dana" class="form-control border-input" id="nilai6_2_2" value="@if(!$dataCheck){{json_decode($data[1]->data)[0]}}@endif" required="">
                                         </div>
                                      @endslot
                                    @endcomponent
                    </li>
                    <li class="row">
                        <div class="col-md-12 komponen">
                            <span class="nomor pull-left">6.2.3</span>
                            <div class="deskriptor pull-left">
                                 <strong>Dana yang diperoleh dalam rangka pelayanan/pengabdian kepada masyarakat dalam tiga tahun terakhir</strong>
                            </div>
                        </div>
                        @component("auditor.isiangket")
                                      @isset ($data_kprodi[2])
                                      @slot('skor')
                                          {{$data_kprodi[2]->kategori}}
                                      @endslot
                                      @slot('isian_angket')
                                          <div class="form-group col-md-4">
                                           <input type="number" min=0 name="nilai6_2_3satu" class="form-control border-input" id="nilai6_2_3" value="{{json_decode($data_kprodi[2]->data)[0]}}" disabled>
                                         </div>
                                      @endslot
                                          @if ($standar_status_code == 7)
                                            @slot('aksi_field')
                                                <select name="setuju_6_2_3" id="setuju_6_2_3" class="form-control border-input">
                                                        <option value="1">Setuju</option>
                                                        <option value="0" @if(!$dataCheck) @if($data_kprodi[2]->data != $data[2]->data) selected @endif @endif>Validasi</option>
                                                </select>
                                            @endslot                                            
                                          @endif
                                      @endisset
                                    @endcomponent

                                    @component("auditor.validasi_auditor")
                                      @slot('id_input')
                                          6_2_3
                                      @endslot
                                      @slot('validasi_auditor')
                                          <div class="form-group col-md-3">
                                           <input type="number" min=0 name="nilai6_2_3satu" class="form-control border-input" id="nilai6_2_3" value="@if(!$dataCheck){{json_decode($data[2]->data)[0]}}@endif" required="">
                                         </div>
                                      @endslot
                                    @endcomponent
                    </li>
                    <li class="row">
                        <div class="col-md-12 komponen">
                            <span class="nomor pull-left">6.3.1</span>
                            <div class="deskriptor pull-left">
                                 <strong>Luas Kerja Dosen</strong>
                            </div>
                        </div>
                        @component("auditor.isiangket")
                                      @isset ($data_kprodi[3])
                                      @slot('skor')
                                          {{$data_kprodi[3]->kategori}}
                                      @endslot
                                      @slot('isian_angket')
                                        <div class="row">
                                          <div class="form-group col-md-3">
                                            <label for="a">Luas total (m2) ruang bersama untuk dosen tetap</label>
                                            <input type="number" min=0 name="a" class="form-control border-input" id="nilai6_3_1" value="{{json_decode($data_kprodi[3]->data)[0]}}" disabled>
                                          </div>
                                          <div class="form-group col-md-3">
                                            <label for="b">Luas total (m2) ruang untuk 3-4 orang dosen tetap</label>
                                            <input type="number" min=0 name="b" class="form-control border-input" id="nilai6_3_1" value="{{json_decode($data_kprodi[3]->data)[1]}}" disabled>
                                          </div>
                                        </div>
                                        <div class="row">
                                          <div class="form-group col-md-3">
                                            <label for="c">Luas total (m2) ruang untuk 2 orang dosen tetap</label>
                                            <input type="number" min=0 name="c" class="form-control border-input" id="nilai6_3_1" value="{{json_decode($data_kprodi[3]->data)[2]}}" disabled>
                                          </div>
                                          <div class="form-group col-md-3">
                                            <label for="d">Luas total (m2) ruang untuk 1 orang dosen tetap</label>
                                            <input type="number" min=0 name="d" class="form-control border-input" id="nilai6_3_1" value="{{json_decode($data_kprodi[3]->data)[3]}}" disabled>
                                          </div>
                                        </div>
                                      @endslot
                                          @if ($standar_status_code == 7)
                                            @slot('aksi_field')
                                                <select name="setuju_6_3_1" id="setuju_6_3_1" class="form-control border-input">
                                                        <option value="1">Setuju</option>
                                                        <option value="0" @if(!$dataCheck) @if($data_kprodi[3]->data != $data[3]->data) selected @endif @endif>Validasi</option>
                                                </select>
                                            @endslot                                            
                                          @endif
                                      @endisset
                                    @endcomponent

                                    @component("auditor.validasi_auditor")
                                      @slot('id_input')
                                          6_3_1
                                      @endslot
                                      @slot('validasi_auditor')
                                        <div class="row">
                                           <div class="form-group col-md-3">
                                            <label for="a">Luas total (m2) ruang bersama untuk dosen tetap</label>
                                            <input type="number" min=0 name="a" class="form-control border-input" id="nilai6_3_1" value="@if(!$dataCheck){{json_decode($data[3]->data)[0]}}@endif" required="">
                                          </div>
                                          <div class="form-group col-md-3">
                                            <label for="b">Luas total (m2) ruang untuk 3-4 orang dosen tetap</label>
                                            <input type="number" min=0 name="b" class="form-control border-input" id="nilai6_3_1" value="@if(!$dataCheck){{json_decode($data[3]->data)[1]}}@endif" required="">
                                          </div>
                                        </div>
                                        <div class="row">
                                          <div class="form-group col-md-3">
                                            <label for="c">Luas total (m2) ruang untuk 2 orang dosen tetap</label>
                                            <input type="number" min=0 name="c" class="form-control border-input" id="nilai6_3_1" value="@if(!$dataCheck){{json_decode($data[3]->data)[2]}}@endif" required="">
                                          </div>
                                          <div class="form-group col-md-3">
                                            <label for="d">Luas total (m2) ruang untuk 1 orang dosen tetap</label>
                                            <input type="number" min=0 name="d" class="form-control border-input" id="nilai6_3_1" value="@if(!$dataCheck){{json_decode($data[3]->data)[3]}}@endif" required="">
                                          </div>
                                        </div>
                                      @endslot
                                    @endcomponent
                    </li>
                    <li class="row">
                        <div class="col-md-12 komponen">
                            <span class="nomor pull-left"><small>6.4.1.a</small></span>
                            <div class="deskriptor pull-left">
                                 <strong>Bahan pustaka berupa buku teks.</strong>
                            </div>
                        </div>
                        @component("auditor.isiangket")
                                      @isset ($data_kprodi[4])
                                      @slot('skor')
                                          {{$data_kprodi[4]->kategori}}
                                      @endslot
                                      @slot('isian_angket')
                                          <div class="form-group col-md-4">
                                           <label for="nilai6_4_1_a">Jumlah bahan pustaka teks</label>
                                           <input type="number" min=0 name="nilai6_4_1_a" class="form-control border-input" id="nilai6_4_1_a" value="{{json_decode($data_kprodi[4]->data)[0]}}" disabled>
                                         </div>
                                      @endslot
                                          @if ($standar_status_code == 7)
                                            @slot('aksi_field')
                                                <select name="setuju_6_4_1_a" id="setuju_6_4_1_a" class="form-control border-input">
                                                        <option value="1">Setuju</option>
                                                        <option value="0" @if(!$dataCheck) @if($data_kprodi[4]->data != $data[4]->data) selected @endif @endif>Validasi</option>
                                                </select>
                                            @endslot                                            
                                          @endif
                                      @endisset
                                    @endcomponent

                                    @component("auditor.validasi_auditor")
                                      @slot('id_input')
                                          6_4_1_a
                                      @endslot
                                      @slot('validasi_auditor')
                                          <div class="form-group col-md-3">
                                           <label for="nilai6_4_1_a">Jumlah bahan pustaka teks</label>
                                           <input type="number" min=0 name="nilai6_4_1_a" class="form-control border-input" id="nilai6_4_1_a" value="@if(!$dataCheck){{json_decode($data[4]->data)[0]}}@endif" required="">
                                         </div>
                                      @endslot
                                    @endcomponent
                    </li>
                    <li class="row">
                        <div class="col-md-12 komponen">
                            <span class="nomor pull-left"><small>6.4.1.b</small></span>
                            <div class="deskriptor pull-left">
                                 <strong>Bahan pustaka berupa disertasi/tesis/skripsi/tugas akhir</strong>
                            </div>
                        </div>
                        @component("auditor.isiangket")
                                      @isset ($data_kprodi[5])
                                      @slot('skor')
                                          {{$data_kprodi[5]->kategori}}
                                      @endslot
                                      @slot('isian_angket')
                                          <div class="form-group col-md-4">
                                           <label for="nilai6_4_1_b">Jumlah bahan pustaka berupa disertasi/tesis/skripsi/tugas akhir</label>
                                           <input type="number" min=0 name="nilai6_4_1_b" class="form-control border-input" id="nilai6_4_1_b" value="{{json_decode($data_kprodi[5]->data)[0]}}" disabled>
                                         </div>
                                      @endslot
                                          @if ($standar_status_code == 7)
                                            @slot('aksi_field')
                                                <select name="setuju_6_4_1_b" id="setuju_6_4_1_b" class="form-control border-input">
                                                        <option value="1">Setuju</option>
                                                        <option value="0" @if(!$dataCheck) @if($data_kprodi[5]->data != $data[5]->data) selected @endif @endif>Validasi</option>
                                                </select>
                                            @endslot                                            
                                          @endif
                                      @endisset
                                    @endcomponent

                                    @component("auditor.validasi_auditor")
                                      @slot('id_input')
                                          6_4_1_b
                                      @endslot
                                      @slot('validasi_auditor')
                                          <div class="form-group col-md-3">
                                           <label for="nilai6_4_1_b">Jumlah bahan pustaka berupa disertasi/tesis/skripsi/tugas akhir</label>
                                           <input type="number" min=0 name="nilai6_4_1_b" class="form-control border-input" id="nilai6_4_1_b" value="@if(!$dataCheck){{json_decode($data[5]->data)[0]}}@endif" required="">
                                         </div>
                                      @endslot
                                    @endcomponent
                    </li>
                    <li class="row">
                        <div class="col-md-12 komponen">
                            <span class="nomor pull-left"><small>6.4.1.c</small></span>
                            <div class="deskriptor pull-left">
                                 <strong>Bahan pustaka berupa jurnal ilmiah terakreditasi Dikti</strong>
                            </div>
                        </div>
                        @component("auditor.isiangket")
                                      @isset ($data_kprodi[6])
                                      @slot('skor')
                                          {{$data_kprodi[6]->kategori}}
                                      @endslot
                                      @slot('isian_angket')
                                          <div class="col-md-7">
                                            <select name="nilai6_4_1_c" id="" class="form-control border-input" disabled>
                                              <option disabled="" selected="">--Pilih--</option>
                                              <option value="4" {{(json_decode($data_kprodi[6]->data)[0] == 4)?"selected":""}}>≥3 Judul jurnal, nomornya lengkap</option>
                                              <option value="3" {{(json_decode($data_kprodi[6]->data)[0] == 3)?"selected":""}}>2 Judul jurnal, nomornya lengkap</option>
                                              <option value="2" {{(json_decode($data_kprodi[6]->data)[0] == 2)?"selected":""}}>1 Judul jurnal, nomornya lengkap</option>
                                              <option value="1" {{(json_decode($data_kprodi[6]->data)[0] == 1)?"selected":""}}>Tidak ada jurnal yang nomornya lengkap </option>
                                              <option value="0" {{(json_decode($data_kprodi[6]->data)[0] == 0)?"selected":""}}>Tidak memiliki jurnal terakreditasi</option>
                                            </select>
                                          </div>
                                      @endslot
                                          @if ($standar_status_code == 7)
                                            @slot('aksi_field')
                                                <select name="setuju_6_4_1_c" id="setuju_6_4_1_c" class="form-control border-input">
                                                        <option value="1">Setuju</option>
                                                        <option value="0" @if(!$dataCheck) @if($data_kprodi[6]->data != $data[6]->data) selected @endif @endif>Validasi</option>
                                                </select>
                                            @endslot                                            
                                          @endif
                                      @endisset
                                    @endcomponent

                                    @component("auditor.validasi_auditor")
                                      @slot('id_input')
                                          6_4_1_c
                                      @endslot
                                      @slot('validasi_auditor')
                                          <div class="col-md-5">
                                            <select name="nilai6_4_1_c" id="" class="form-control border-input" required="">
                                              <option disabled="" selected="">--Pilih--</option>
                                              <option value="4" @if(!$dataCheck) (json_decode($data[6]->data)[0] == 4)?"selected":"" @endif>≥3 Judul jurnal, nomornya lengkap</option>
                                              <option value="3" @if(!$dataCheck) (json_decode($data[6]->data)[0] == 3)?"selected":"" @endif>2 Judul jurnal, nomornya lengkap</option>
                                              <option value="2" @if(!$dataCheck) (json_decode($data[6]->data)[0] == 2)?"selected":"" @endif>1 Judul jurnal, nomornya lengkap</option>
                                              <option value="1" @if(!$dataCheck) (json_decode($data[6]->data)[0] == 1)?"selected":"" @endif>Tidak ada jurnal yang nomornya lengkap </option>
                                              <option value="0" @if(!$dataCheck) (json_decode($data[6]->data)[0] == 0)?"selected":"" @endif>Tidak memiliki jurnal terakreditasi</option>
                                            </select>
                                          </div>
                                      @endslot
                                    @endcomponent
                    </li>
                    <li class="row">
                        <div class="col-md-12 komponen">
                            <span class="nomor pull-left"><small>6.4.1.d</small></span>
                            <div class="deskriptor pull-left">
                                 <strong>Bahan pustaka berupa jurnal ilmiah internasional</strong>
                            </div>
                        </div>
                        @component("auditor.isiangket")
                                      @isset ($data_kprodi[7])
                                      @slot('skor')
                                          {{$data_kprodi[7]->kategori}}
                                      @endslot
                                      @slot('isian_angket')
                                          <div class="col-md-7">
                                            <select name="nilai6_4_1_d" id="" class="form-control border-input" disabled>
                                              <option disabled="" selected="">--Pilih--</option>
                                              <option value="4" {{(json_decode($data_kprodi[7]->data)[0] == 4)?"selected":""}}>≥2 Judul jurnal, nomornya lengkap</option>
                                              <option value="3" {{(json_decode($data_kprodi[7]->data)[0] == 3)?"selected":""}}>2 Judul jurnal, nomornya lengkap</option>
                                              <option value="2" {{(json_decode($data_kprodi[7]->data)[0] == 2)?"selected":""}}>Tidak ada jurnal yang nomornya lengkap</option>
                                            </select>
                                          </div>
                                      @endslot
                                          @if ($standar_status_code == 7)
                                            @slot('aksi_field')
                                                <select name="setuju_6_4_1_d" id="setuju_6_4_1_d" class="form-control border-input">
                                                        <option value="1">Setuju</option>
                                                        <option value="0" @if(!$dataCheck) @if($data_kprodi[7]->data != $data[7]->data) selected @endif @endif>Validasi</option>
                                                </select>
                                            @endslot                                            
                                          @endif
                                      @endisset
                                    @endcomponent

                                    @component("auditor.validasi_auditor")
                                      @slot('id_input')
                                          6_4_1_d
                                      @endslot
                                      @slot('validasi_auditor')
                                          <div class="col-md-5">
                                            <select name="nilai6_4_1_d" id="" class="form-control border-input" required="">
                                              <option disabled="" selected="">--Pilih--</option>
                                              <option value="4" @if(!$dataCheck) (json_decode($data[7]->data)[0] == 4)?"selected":"" @endif>≥2 Judul jurnal, nomornya lengkap</option>
                                              <option value="3" @if(!$dataCheck) (json_decode($data[7]->data)[0] == 3)?"selected":"" @endif>2 Judul jurnal, nomornya lengkap</option>
                                              <option value="2" @if(!$dataCheck) (json_decode($data[7]->data)[0] == 2)?"selected":"" @endif>Tidak ada jurnal yang nomornya lengkap</option>
                                            </select>
                                          </div>
                                      @endslot
                                    @endcomponent
                    </li>
                    <li class="row">
                        <div class="col-md-12 komponen">
                            <span class="nomor pull-left"><small>6.4.1.e</small></span>
                            <div class="deskriptor pull-left">
                                 <strong>Bahan pustaka berupa prosiding seminar dalam tiga tahun terakhir</strong>
                            </div>
                        </div>
                        @component("auditor.isiangket")
                                      @isset ($data_kprodi[8])
                                      @slot('skor')
                                          {{$data_kprodi[8]->kategori}}
                                      @endslot
                                      @slot('isian_angket')
                                          <div class="form-group col-md-4">
                                           <label for="nilai6_4_1_esatu">Jumlah Prosiding dalam Tiga Tahun terakhir</label>
                                           <input type="number" min=0 name="nilai6_4_1_esatu" class="form-control border-input" id="nilai6_4_1_e" value="{{json_decode($data_kprodi[8]->data)[0]}}" disabled>
                                         </div>
                                      @endslot
                                          @if ($standar_status_code == 7)
                                            @slot('aksi_field')
                                                <select name="setuju_6_4_1_e" id="setuju_6_4_1_e" class="form-control border-input">
                                                        <option value="1">Setuju</option>
                                                        <option value="0" @if(!$dataCheck) @if($data_kprodi[8]->data != $data[8]->data) selected @endif @endif>Validasi</option>
                                                </select>
                                            @endslot                                            
                                          @endif
                                      @endisset
                                    @endcomponent

                                    @component("auditor.validasi_auditor")
                                      @slot('id_input')
                                          6_4_1_e
                                      @endslot
                                      @slot('validasi_auditor')
                                          <div class="form-group col-md-3">
                                           <label for="nilai6_4_1_esatu">Jumlah Prosiding dalam Tiga Tahun terakhir</label>
                                           <input type="number" min=0 name="nilai6_4_1_esatu" class="form-control border-input" id="nilai6_4_1_e" value="@if(!$dataCheck){{json_decode($data[8]->data)[0]}}@endif" required="">
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



        <footer class="footer">
            <!--<div class="container-fluid">
                <nav class="pull-left">
                    <ul>

                        <li>
                            <a href="http://www.creative-tim.com">
                                Creative Tim
                            </a>
                        </li>
                        <li>
                            <a href="http://blog.creative-tim.com">
                               Blog
                            </a>
                        </li>
                        <li>
                            <a href="http://www.creative-tim.com/license">
                                Licenses
                            </a>
                        </li>
                    </ul>
                </nav>
                <div class="copyright pull-right">
                    &copy; <script>document.write(new Date().getFullYear())</script>, made with <i class="fa fa-heart heart"></i> by <a href="http://www.creative-tim.com">Creative Tim</a>
                </div>
            </div> -->
        </footer>

    </div>
</div>


</body>

    <!--   Core JS Files   -->
    <script src="assets/js/jquery-1.10.2.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

	<!--  Checkbox, Radio & Switch Plugins -->
	<script src="assets/js/bootstrap-checkbox-radio.js"></script>

	<!--  Charts Plugin -->
	<script src="assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="assets/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>

    <!-- Paper Dashboard Core javascript and methods for Demo purpose -->
	<script src="assets/js/paper-dashboard.js"></script>

	<!-- Paper Dashboard DEMO methods, don't include it in your project! -->
	<script src="assets/js/demo.js"></script>

	<script type="text/javascript">
    	$(document).ready(function(){

        	demo.initChartist();

        	$.notify({
            	icon: 'ti-gift',
            	message: "Welcome to <b>Paper Dashboard</b> - a beautiful Bootstrap freebie for your next project."

            },{
                type: 'success',
                timer: 4000
            });

    	});
	</script>

</html>
@endsection

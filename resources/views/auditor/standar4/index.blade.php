@extends('layoutauditor')
@section('content')
  <div class="col-md-12">
  @include("auditor.riwayat")
      <div class="card">
          <div class="header">
              <h4 class="title">Sumber Daya Manusia</h4>
              <p class="category">Standar 4</p>
          </div>
          <div class="content">
              <form action="/auditor/isi/{{$idprodi}}/standar4/save" method="post" class="kuesioner">
                {{-- <fieldset @if(sizeof($data) > 0) disabled @endif> --}}
                {{ csrf_field() }}
                  <ul class="list-unstyled">

                      <li class="row">
                        <div class="col-md-1 komponen nomor pull-left">
                          <div class="row">
                            <div class="col-md-12">
                              4.3.1.a
                            </div>
                          </div>
                        </div>
                        <div class="col-md-11 komponen">
                          <div class="deskriptor pull-left">
                            <div class="row">
                              <div class="col-md-12">
                                <strong>Dosen tetap berpendidikan (terakhir) S2 dan S3 yang bidang keahliannya sesuai dengan kompetensi PS</strong>
                              </div>
                            </div>
                            @component("auditor.isiangket")
                                          @isset ($data_kprodi[0])
                                          @slot('skor')
                                              {{$data_kprodi[0]->kategori}}
                                          @endslot
                                          @slot('isian_angket')
                                <div class="col-md-4">
                                  <label for="kd">Persentase dosen tetap berpendidikan (terakhir) S2 dan S3 yang bidang keahliannya sesuai dengan kompetensi PS</label>
                                  <input class="form-control border-input" type="number" name="kd4_3_1_a" min="0" value="{{json_decode($data_kprodi[0]->data)[0]}}" disabled>
                                </div>
                                @endslot
                                    @if ($standar_status_code == 7)
                                      @slot('aksi_field')
                                          <select name="setuju_4_3_1_a" id="setuju_4_3_1_a" class="form-control border-input">
                                                  <option value="1">Setuju</option>
                                                  <option value="0">Validasi</option>
                                          </select>
                                      @endslot
                                    @endif
                                @endisset
                              @endcomponent

                              @component("auditor.validasi_auditor")
                                @slot('id_input')
                                    4_3_1_a
                                @endslot

                                @slot('validasi_auditor')
                                <div class="col-md-4">
                                  <label for="kd">Persentase dosen tetap berpendidikan (terakhir) S2 dan S3 yang bidang keahliannya sesuai dengan kompetensi PS</label>
                                  <input class="form-control border-input" type="number" name="kd4_3_1_a" min="0" value="@if(!$dataCheck){{json_decode($data[0]->data)[0]}}@endif" required="">
                                </div>
                                @endslot
                              @endcomponent
                          </div>
                        </div>
                      </li>

                      <li class="row">
                        <div class="col-md-1 komponen nomor pull-left">
                          <div class="row">
                            <div class="col-md-12">
                              4.3.1.b
                            </div>
                          </div>
                        </div>
                        <div class="col-md-11 komponen">
                          <div class="deskriptor pull-left">
                            <div class="row">
                              <div class="col-md-12">
                                <strong>Dosen tetap berpendidikan (terakhir) S2 dan S3 yang bidang keahliannya sesuai dengan kompetensi PS</strong>
                              </div>
                            </div>
                            @component("auditor.isiangket")
                                          @isset ($data_kprodi[1])
                                          @slot('skor')
                                              {{$data_kprodi[1]->kategori}}
                                          @endslot
                                          @slot('isian_angket')
                                <div class="col-md-4">
                                  <label for="kd">Persentase dosen tetap yang berpendidikan S3 yang bidang keahliannya sesuai dengan kompetensi PS</label>
                                  <input class="form-control border-input" type="number" name="kd4_3_1_b" min="0" value="{{json_decode($data_kprodi[1]->data)[0]}}" disabled>
                                </div>
                                @endslot
                                    @if ($standar_status_code == 7)
                                      @slot('aksi_field')
                                          <select name="setuju_4_3_1_b" id="setuju_4_3_1_b" class="form-control border-input">
                                                  <option value="1">Setuju</option>
                                                  <option value="0">Validasi</option>
                                          </select>
                                      @endslot
                                    @endif
                                @endisset
                              @endcomponent

                              @component("auditor.validasi_auditor")
                                @slot('id_input')
                                    4_3_1_b
                                @endslot

                                @slot('validasi_auditor')
                                <div class="col-md-4">
                                  <label for="kd">Persentase dosen tetap yang berpendidikan S3 yang bidang keahliannya sesuai dengan kompetensi PS</label>
                                  <input class="form-control border-input" type="number" name="kd4_3_1_b" min="0" value="@if(!$dataCheck){{json_decode($data[1]->data)[0]}}@endif" required="">
                                </div>
                                @endslot
                              @endcomponent
                          </div>
                        </div>
                      </li>

                      <li class="row">
                        <div class="col-md-1 komponen nomor pull-left">
                          <div class="row">
                            <div class="col-md-12">
                              4.3.1.c
                            </div>
                          </div>
                        </div>
                        <div class="col-md-11 komponen">
                          <div class="deskriptor pull-left">
                              <div class="col-md-12">
                                <strong>Dosen tetap yang memiliki jabatan lektor kepala dan guru besar yang bidang keahliannya sesuai dengan kompetensi PS</strong>
                              </div>
                              @component("auditor.isiangket")
                                           @isset ($data_kprodi[2])
                                           @slot('skor')
                                               {{$data_kprodi[2]->kategori}}
                                           @endslot
                                           @slot('isian_angket')
                                <div class="col-md-4">
                                  <label for="kd">Persentase Dosen tetap yang memiliki jabatan lektor kepala dan guru besar yang bidang keahliannya sesuai dengan kompetensi PS</label>
                                  <input class="form-control border-input" type="number" name="kd4_3_1_c" min="0" value="{{json_decode($data_kprodi[2]->data)[0]}}" disabled="">
                                </div>
                                @endslot
                                    @if ($standar_status_code == 7)
                                      @slot('aksi_field')
                                          <select name="setuju_4_3_1_c" id="setuju_4_3_1_c" class="form-control border-input">
                                                  <option value="1">Setuju</option>
                                                  <option value="0" @if(!$dataCheck) @if($data_kprodi[2]->data != $data[2]->data) selected @endif @endif>Validasi</option>
                                          </select>
                                      @endslot
                                    @endif
                                @endisset
                              @endcomponent

                              @component("auditor.validasi_auditor")
                                @slot('id_input')
                                    4_3_1_c
                                @endslot
                                @slot('validasi_auditor')
                                <div class="col-md-4">
                                  <label for="kd">Persentase Dosen tetap yang memiliki jabatan lektor kepala dan guru besar yang bidang keahliannya sesuai dengan kompetensi PS</label>
                                  <input class="form-control border-input" type="number" name="kd4_3_1_c" min="0" value="@if(!$dataCheck){{json_decode($data[2]->data)[0]}}@endif" required="">
                                </div>
                                @endslot
                              @endcomponent
                          </div>
                        </div>
                      </li>

                      <li class="row">
                        <div class="col-md-1 komponen nomor pull-left">
                          <div class="row">
                            <div class="col-md-12">
                              4.3.1.d
                            </div>
                          </div>
                        </div>
                        <div class="col-md-11 komponen">
                          <div class="deskriptor pull-left">
                            <div class="row">
                              <div class="col-md-12">
                                <strong>Dosen yang memiliki Sertifikat Pendidik Profesional</strong>
                              </div>
                            </div>
                            @component("auditor.isiangket")
                                            @isset ($data_kprodi[3])
                                            @slot('skor')
                                                {{$data_kprodi[3]->kategori}}
                                            @endslot
                                            @slot('isian_angket')
                                <div class="col-md-4">
                                  <label for="kd">Persentase dosen yang memiliki Sertifikat Pendidik Profesional</label>
                                  <input class="form-control border-input" type="number" name="kd4_3_1_d" min="0" value="{{json_decode($data_kprodi[3]->data)[0]}}" disabled="">
                                </div>
                                @endslot
                                    @if ($standar_status_code == 7)
                                      @slot('aksi_field')
                                          <select name="setuju_4_3_1_d" id="setuju_4_3_1_d" class="form-control border-input">
                                                  <option value="1">Setuju</option>
                                                  <option value="0" @if(!$dataCheck) @if($data_kprodi[3]->data != $data[3]->data) selected @endif @endif>Validasi</option>
                                          </select>
                                      @endslot
                                    @endif
                                @endisset
                              @endcomponent

                              @component("auditor.validasi_auditor")
                                @slot('id_input')
                                4_3_1_d
                                @endslot
                                @slot('validasi_auditor')
                                <div class="col-md-4">
                                  <label for="kd">Persentase dosen yang memiliki Sertifikat Pendidik Profesional</label>
                                  <input class="form-control border-input" type="number" name="kd4_3_1_d" min="0" value="@if(!$dataCheck){{json_decode($data[3]->data)[0]}}@endif" required="">
                                </div>
                                @endslot
                              @endcomponent
                          </div>
                        </div>
                      </li>

                      <li class="row">
                        <div class="col-md-1 komponen nomor pull-left">
                          <div class="row">
                            <div class="col-md-12">
                              4.3.2
                            </div>
                          </div>
                        </div>
                        <div class="col-md-11 komponen">
                          <div class="deskriptor pull-left">
                              <div class="col-md-12">
                                <strong>Rasio mahasiswa terhadap dosen tetap yang bidang keahliannya sesuai dengan bidang</strong>
                              </div>
                              @component("auditor.isiangket")
                                          @isset ($data_kprodi[4])
                                          @slot('skor')
                                              {{$data_kprodi[4]->kategori}}
                                          @endslot
                                          @slot('isian_angket')
                                <div class="col-md-4">
                                  <label for="kd">Rasio mahasiswa terhadap dosen</label>
                                  <input class="form-control border-input" type="number" name="rmd4_3_2" min="0" value="{{json_decode($data_kprodi[4]->data)[0]}}" disabled="">
                                </div>
                                @endslot
                                    @if ($standar_status_code == 7)
                                      @slot('aksi_field')
                                          <select name="setuju_4_3_2" id="setuju_4_3_2" class="form-control border-input">
                                                  <option value="1">Setuju</option>
                                                  <option value="0" @if(!$dataCheck) @if($data_kprodi[4]->data != $data[4]->data) selected @endif @endif>Validasi</option>
                                          </select>
                                      @endslot
                                    @endif
                                @endisset
                              @endcomponent

                              @component("auditor.validasi_auditor")
                                @slot('id_input')
                                    4_3_2
                                @endslot

                                @slot('validasi_auditor')
                                <div class="col-md-4">
                                  <label for="kd">Rasio mahasiswa terhadap dosen</label>
                                  <input class="form-control border-input" type="number" name="rmd4_3_2" min="0" value="@if(!$dataCheck){{json_decode($data[4]->data)[0]}}@endif" required="">
                                </div>
                                @endslot
                              @endcomponent
                          </div>
                        </div>
                      </li>

                      <li class="row">
                        <div class="col-md-1 komponen nomor pull-left">
                          <div class="row">
                            <div class="col-md-12">
                              4.3.3
                            </div>
                          </div>
                        </div>
                        <div class="col-md-11 komponen">
                          <div class="deskriptor pull-left">
                            <div class="row">
                              <div class="col-md-12">
                                <strong>Rata-rata beban dosen per semester, atau rata-rata FTE (Fulltime Teaching Equivalent)</strong>
                              </div>
                            </div>
                            @component("auditor.isiangket")
                              @isset ($data_kprodi[5])
                                    @slot('skor')
                                        {{$data_kprodi[5]->kategori}}
                                    @endslot
                                    @slot('isian_angket')
                                <div class="col-md-4">
                                  <label for="kd">Rata-rata FTE</label>
                                  <input class="form-control border-input" type="number" name="rfte4_3_3" min="0" value="{{json_decode($data_kprodi[5]->data)[0]}}" disabled="">
                                </div>
                                @endslot
                                    @if ($standar_status_code == 7)
                                      @slot('aksi_field')
                                          <select name="setuju_4_3_3" id="setuju_4_3_3" class="form-control border-input">
                                                  <option value="1">Setuju</option>
                                                  <option value="0" @if(!$dataCheck) @if($data_kprodi[5]->data != $data[5]->data) selected @endif @endif>Validasi</option>
                                          </select>
                                      @endslot
                                    @endif
                                @endisset
                              @endcomponent

                              @component("auditor.validasi_auditor")
                                @slot('id_input')
                                    4_3_3
                                @endslot
                                @slot('validasi_auditor')
                                <div class="col-md-4">
                                  <label for="kd">Rata-rata FTE</label>
                                  <input class="form-control border-input" type="number" name="rfte4_3_3" min="0" value="@if(!$dataCheck){{json_decode($data[5]->data)[0]}}@endif" required="">
                                </div>
                                @endslot
                              @endcomponent
                          </div>
                        </div>
                      </li>

                      <li class="row">
                        <div class="col-md-1 komponen nomor pull-left">
                          <div class="row">
                            <div class="col-md-12">
                              4.3.4
                            </div>
                          </div>
                        </div>
                        <div class="col-md-11 komponen">
                          <div class="deskriptor pull-left">
                            <div class="row">
                              <div class="col-md-12">
                                <strong>Kesesuaian keahlian (pendidikan terakhir) dosen dengan mata kuliah yang diajarkannya</strong>
                              </div>
                            </div>

                            @component("auditor.isiangket")
                                    @isset ($data_kprodi[6])
                                          @slot('skor')
                                              {{$data_kprodi[6]->kategori}}
                                          @endslot
                                          @slot('isian_angket')
                                  <select class="form-control border-input" name="n4_3_4" disabled="">
                                  <option disabled="" selected="">--Pilih--</option>
                                    <option value="1" @if(json_decode($data_kprodi[6]->data)[0] == 1) {{"selected"}} @endif>Lebih dari 7 matakuliah diajar oleh dosen yang tidak sesuai keahliannya</option>
                                    <option value="2" @if(json_decode($data_kprodi[6]->data)[0] == 2) {{"selected"}} @endif>4 - 7 mata kuliah diajar oleh doesn yang tidak sesuai keahliannya</option>
                                    <option value="3" @if(json_decode($data_kprodi[6]->data)[0] == 3) {{"selected"}} @endif>1 - 3 mata kuliah diajar oleh dosen tidak sesuai dengan keahliannya</option>
                                    <option value="4" @if(json_decode($data_kprodi[6]->data)[0] == 4) {{"selected"}} @endif>Semua mata kuliah diajar oleh dosen yang sesuai keahliannya</option>
                                  </select>
                                @endslot
                                    @if ($standar_status_code == 7)
                                      @slot('aksi_field')
                                      <select name="setuju_4_3_4" id="setuju_4_3_4" class="form-control border-input">
                                        <option value="1">Setuju</option>
                                        <option value="0" @if(!$dataCheck) @if($data_kprodi[6]->data != $data[6]->data) selected @endif @endif>Validasi</option>
                                      </select>
                                      @endslot
                                    @endif
                                @endisset
                              @endcomponent

                              @component("auditor.validasi_auditor")
                                @slot('id_input')
                                    4_3_4
                                @endslot
                                @slot('validasi_auditor')
                                <select name="n_4_3_4" id="" class="form-control border-input" required="">
                                <option disabled="" selected="">--Pilih--</option>
                                <option value="1" @if(!$dataCheck) @if(json_decode($data[6]->data)[0] == 1) {{"selected"}} @endif @endif>Lebih dari 7 matakuliah diajar oleh dosen yang tidak sesuai keahliannya</option>
                                <option value="2" @if(!$dataCheck) @if(json_decode($data[6]->data)[0] == 2) {{"selected"}} @endif @endif>4 - 7 mata kuliah diajar oleh doesn yang tidak sesuai keahliannya</option>
                                <option value="3" @if(!$dataCheck) @if(json_decode($data[6]->data)[0] == 3) {{"selected"}} @endif @endif>1 - 3 mata kuliah diajar oleh dosen tidak sesuai dengan keahliannya</option>
                                <option value="4" @if(!$dataCheck) @if(json_decode($data[6]->data)[0] == 4) {{"selected"}} @endif @endif>Semua mata kuliah diajar oleh dosen yang sesuai keahliannya</option>
                                </select>
                                @endslot
                              @endcomponent
                          </div>
                        </div>
                      </li>

                      <li class="row">
                        <div class="col-md-1 komponen nomor pull-left">
                          <div class="row">
                            <div class="col-md-12">
                              4.3.6
                            </div>
                          </div>
                        </div>
                        <div class="col-md-11 komponen">
                          <div class="deskriptor pull-left">
                            <div class="row">
                              <div class="col-md-12">
                                <strong>Tingkat kehadiran dosen tetap dalam mengajar</strong>
                              </div>
                            </div>
                            @component("auditor.isiangket")
                                    @isset ($data_kprodi[7])
                                          @slot('skor')
                                              {{$data_kprodi[7]->kategori}}
                                          @endslot
                                          @slot('isian_angket')
                                <div class="col-md-4">
                                  <label for="kd">Persentasi kehadiran dosen tetap dalam perkuliahan (terhadap jumlah kehadiran yang direncanakan</label>
                                  <input class="form-control border-input" type="number" name="pkdt4_3_6" min="0" value="{{json_decode($data_kprodi[7]->data)[0]}}" disabled="">
                                </div>
                                @endslot
                                    @if ($standar_status_code == 7)
                                      @slot('aksi_field')
                                          <select name="setuju_4_3_6" id="setuju_4_3_6" class="form-control border-input">
                                                  <option value="1">Setuju</option>
                                                  <option value="0" @if(!$dataCheck) @if($data_kprodi[7]->data != $data[7]->data) selected @endif @endif>Validasi</option>
                                          </select>
                                      @endslot
                                    @endif
                                @endisset
                              @endcomponent

                              @component("auditor.validasi_auditor")
                                @slot('id_input')
                                    4_3_6
                                @endslot
                                @slot('validasi_auditor')
                                <div class="col-md-4">
                                  <label for="kd">Persentasi kehadiran dosen tetap dalam perkuliahan (terhadap jumlah kehadiran yang direncanakan</label>
                                  <input class="form-control border-input" type="number" name="pkdt4_3_6" min="0" value="@if(!$dataCheck){{json_decode($data[7]->data)[0]}}@endif" required="">
                                </div>
                                @endslot
                              @endcomponent
                          </div>
                        </div>
                      </li>

                      <li class="row">
                        <div class="col-md-1 komponen nomor pull-left">
                          <div class="row">
                            <div class="col-md-12">
                              4.4.1
                            </div>
                          </div>
                        </div>
                        <div class="col-md-11 komponen">
                          <div class="deskriptor pull-left">
                            <div class="row">
                              <div class="col-md-12">
                                <strong>Persentase jumlah dosen tidak tetap terhadap jumlah seluruh dosen</strong>
                              </div>
                            </div>
                            @component("auditor.isiangket")
                                @isset ($data_kprodi[8])
                                      @slot('skor')
                                          {{$data_kprodi[8]->kategori}}
                                      @endslot
                                      @slot('isian_angket')
                                <div class="col-md-4">
                                  <label for="kd">Persentasi jumlah dosen tidak tetap, terhadap jumlah seluruh dosen</label>
                                  <input class="form-control border-input" type="number" name="pdtt4_4_1" min="0" value="{{json_decode($data_kprodi[8]->data)[0]}}" disabled="">
                                </div>
                                <div class="col-md-8">
                                </div>
                                @endslot
                                    @if ($standar_status_code == 7)
                                      @slot('aksi_field')
                                          <select name="setuju_4_4_1" id="setuju_4_4_1" class="form-control border-input">
                                                  <option value="1">Setuju</option>
                                                  <option value="0" @if(!$dataCheck) @if($data_kprodi[8]->data != $data[8]->data) selected @endif @endif>Validasi</option>
                                          </select>
                                      @endslot
                                    @endif
                                @endisset
                              @endcomponent

                              @component("auditor.validasi_auditor")
                                @slot('id_input')
                                    4_4_1
                                @endslot
                                @slot('validasi_auditor')
                                <div class="col-md-4">
                                  <label for="kd">Persentasi jumlah dosen tidak tetap, terhadap jumlah seluruh dosen</label>
                                  <input class="form-control border-input" type="number" name="pdtt4_4_1" min="0" value="@if(!$dataCheck){{json_decode($data[8]->data)[0]}}@endif" required="">
                                </div>
                                @endslot
                              @endcomponent
                          </div>
                        </div>
                      </li>

                      <li class="row">
                        <div class="col-md-1 komponen nomor pull-left">
                          <div class="row">
                            <div class="col-md-12">
                              4.4.2.a
                            </div>
                          </div>
                        </div>
                        <div class="col-md-11 komponen">
                          <div class="deskriptor pull-left">
                            <div class="row">
                              <div class="col-md-12">
                                <strong>Kesesuaian keahlian dosen tidak tetap dengan mata kuliah yang diampu</strong>
                              </div>
                            </div>

                            @component("auditor.isiangket")
                                    @isset ($data_kprodi[9])
                                          @slot('skor')
                                              {{$data_kprodi[9]->kategori}}
                                          @endslot
                                          @slot('isian_angket')
                                <div class="col-md-12">
                                  <select class="form-control border-input" name="n4_4_2_a" disabled="">
                                  <option disabled="" selected="">--Pilih--</option>
                                  <option value="0" @if(json_decode($data_kprodi[9]->data)[0] == 0) {{"selected"}} @endif>Lebih dari 6 matakuliah diajar oleh dosen tidak tetap yang tidak sesuai keahliannya</option>
                                  <option value="1" @if(json_decode($data_kprodi[9]->data)[0] == 1) {{"selected"}} @endif>5 - 6 mata kuliah diajar oleh dosen tidak tetap yang tidak sesuai kahaliannya</option>
                                  <option value="2" @if(json_decode($data_kprodi[9]->data)[0] == 2) {{"selected"}} @endif>3 - 4 mata kuliah diajar oleh dosen tidak tetap yang tidak sesuai keahliannya</option>
                                  <option value="3" @if(json_decode($data_kprodi[9]->data)[0] == 3) {{"selected"}} @endif>1 - 2 mata kuliah diajar oleh dosen tidak tetap yang tidak sesuai keahliannya</option>
                                  <option value="4" @if(json_decode($data_kprodi[9]->data)[0] == 4) {{"selected"}} @endif>Semua dosen tidak tetap mengajar mata kuliah yang sesuai keahliannya</option>
                                  </select>
                                </div>
                                @endslot
                                    @if ($standar_status_code == 7)
                                      @slot('aksi_field')
                                          <select name="setuju_4_4_2_a" id="setuju_4_4_2_a" class="form-control border-input">
                                                  <option value="1">Setuju</option>
                                                  <option value="0" @if(!$dataCheck) @if($data_kprodi[9]->data != $data[9]->data) selected @endif @endif>Validasi</option>
                                          </select>
                                      @endslot
                                    @endif
                                @endisset
                                @endcomponent

                                @component("auditor.validasi_auditor")
                                @slot('id_input')
                                    4_4_2_a
                                @endslot
                                @slot('validasi_auditor')
                                <select name="n4_4_2_a" id="" class="form-control border-input">
                                  <option disabled="" selected="">--Pilih--</option>
                                  <option value="0" @if(!$dataCheck) @if(json_decode($data[9]->data)[0] == 0) {{"selected"}} @endif @endif>Lebih dari 6 matakuliah diajar oleh dosen tidak tetap yang tidak sesuai keahliannya</option>
                                  <option value="1" @if(!$dataCheck) @if(json_decode($data[9]->data)[0] == 1) {{"selected"}} @endif @endif>5 - 6 mata kuliah diajar oleh dosen tidak tetap yang tidak sesuai kahaliannya</option>
                                  <option value="2" @if(!$dataCheck) @if(json_decode($data[9]->data)[0] == 2) {{"selected"}} @endif @endif>3 - 4 mata kuliah diajar oleh dosen tidak tetap yang tidak sesuai keahliannya</option>
                                  <option value="3" @if(!$dataCheck) @if(json_decode($data[9]->data)[0] == 3) {{"selected"}} @endif @endif>1 - 2 mata kuliah diajar oleh dosen tidak tetap yang tidak sesuai keahliannya</option>
                                  <option value="4" @if(!$dataCheck) @if(json_decode($data[9]->data)[0] == 4) {{"selected"}} @endif @endif>Semua dosen tidak tetap mengajar mata kuliah yang sesuai keahliannya</option>
                                </select>
                                @endslot
                                @endcomponent
                          </div>
                        </div>
                      </li>

                      <li class="row">
                        <div class="col-md-1 komponen nomor pull-left">
                          <div class="row">
                            <div class="col-md-12">
                              4.4.2.b
                            </div>
                          </div>
                        </div>
                        <div class="col-md-11 komponen">
                          <div class="deskriptor pull-left">
                            <div class="row">
                              <div class="col-md-12">
                                <strong>Pelaksanaan tugas / tingkat kehadiran dosen tidak tetap dalam mengajar</strong>
                              </div>
                            </div>

                            @component("auditor.isiangket")
                                    @isset ($data_kprodi[10])
                                          @slot('skor')
                                              {{$data_kprodi[10]->kategori}}
                                          @endslot
                                          @slot('isian_angket')
                                <div class="col-md-4">
                                  <label for="kd">DTT</label>
                                  <input class="form-control border-input" type="number" name="pkdtt4_4_2_b" min="0"value="{{json_decode($data_kprodi[10]->data)[0]}}" disabled="">
                                </div>
                                <div class="col-md-8">
                                  <small>Persentasi kehadiran dosen tidak tetap dalam perkuliahan (terhadap jumlah kehadiran yang direncanakan)</small>
                                </div>
                                @endslot
                                    @if ($standar_status_code == 7)
                                      @slot('aksi_field')
                                          <select name="setuju_4_4_2_b" id="setuju_4_4_2_b" class="form-control border-input">
                                                  <option value="1">Setuju</option>
                                                  <option value="0" @if(!$dataCheck) @if($data_kprodi[10]->data != $data[10]->data) selected @endif @endif>Validasi</option>
                                          </select>
                                      @endslot
                                    @endif
                                @endisset
                                @endcomponent

                                @component("auditor.validasi_auditor")
                                @slot('id_input')
                                    4_4_2_b
                                @endslot
                                @slot('validasi_auditor')
                                <div class="col-md-4">
                                  <label for="kd">DTT</label>
                                  <input class="form-control border-input" type="number" name="pkdtt4_4_2_b" min="0" value="@if(!$dataCheck){{json_decode($data[10]->data)[0]}}@endif" required="">
                                </div>
                                @endslot
                                @endcomponent
                          </div>
                        </div>
                      </li>

                      <li class="row">
                        <div class="col-md-1 komponen nomor pull-left">
                          <div class="row">
                            <div class="col-md-12">
                              4.5.1
                            </div>
                          </div>
                        </div>
                        <div class="col-md-11 komponen">
                          <div class="deskriptor pull-left">
                            <div class="row">
                              <div class="col-md-12">
                                <strong>Kegiatan tenaga ahli/pakar (sebagai pembicara dalam seminar/pelatihan, pembicara tamu, dsb, dari luar PT sendiri (tidak termasuk dosen tidak tetap))</strong>
                              </div>
                            </div>
                            @component("auditor.isiangket")
                                   @isset ($data_kprodi[11])
                                         @slot('skor')
                                             {{$data_kprodi[11]->kategori}}
                                         @endslot
                                         @slot('isian_angket')
                                <div class="col-md-4">
                                  <label for="kd">Jumlah tenaga ahli/pakar</label>
                                  <input class="form-control border-input" type="number" name="jtap4_5_1" min="0" value="{{json_decode($data_kprodi[11]->data)[0]}}" disabled="">
                                </div>
                                <div class="col-md-8">
                                </div>
                              @endslot
                                  @if ($standar_status_code == 7)
                                    @slot('aksi_field')
                                        <select name="setuju_4_5_1" id="setuju_4_5_1" class="form-control border-input">
                                                <option value="1">Setuju</option>
                                                <option value="0" @if(!$dataCheck) @if($data_kprodi[11]->data != $data[11]->data) selected @endif @endif>Validasi</option>
                                        </select>
                                    @endslot
                                  @endif
                              @endisset
                            @endcomponent

                            @component("auditor.validasi_auditor")
                              @slot('id_input')
                                  4_5_1
                              @endslot
                              @slot('validasi_auditor')
                              <div class="col-md-4">
                                <label for="kd">Jumlah tenaga ahli/pakar</label>
                                <input class="form-control border-input" type="number" name="jtap4_5_1" min="0" value="@if(!$dataCheck){{json_decode($data[11]->data)[0]}}@endif" required="">
                              </div>
                              <div class="col-md-8">
                              </div>
                              @endslot
                            @endcomponent
                            <div class="row">
                              <small>Catatan : Tenaga ahli dari luar perguruan tinggi denngan tujuan untuk pengayaan pengetahuan dan bukan untuk mengisi kekurangan tenaga pengajar, tidak bekerja secara rutin.</small>
                            </div>
                          </div>
                        </div>
                      </li>

                      <li class="row">
                        <div class="col-md-1 komponen nomor pull-left">
                          <div class="row">
                            <div class="col-md-12">
                              4.5.2
                            </div>
                          </div>
                        </div>
                        <div class="col-md-11 komponen">
                          <div class="deskriptor pull-left">
                            <div class="row">
                              <div class="col-md-12">
                                <strong>Peningkatan kemampuan dosen tetap melalui program tugas belajar dalam bidang yang sesuai dengan bidang PS</strong>
                              </div>
                            </div>
                            @component("auditor.isiangket")
                                @isset ($data_kprodi[12])
                                      @slot('skor')
                                          {{$data_kprodi[12]->kategori}}
                                      @endslot
                                      @slot('isian_angket')
                              <div class="form-group col-md-6">
                                <label for="n2_4_5_2">Jumlah dosen yang mengikuti tugas belajar jenjang S2 pada bidang keahlian yang sesuai dengan PS dalam kurun waktu tiga tahun terakhir</label>
                                <input type="number" min=0 name="n2_4_5_2" class="form-control border-input" id="n2_4_5_2" min="0" value="{{json_decode($data_kprodi[12]->data)[0]}}" disabled="">
                              </div>
                              <div class="form-group col-md-6">
                                <label for="n3_4_5_2">Jumlah dosen yang mengikuti tugas belajar jenjang S3 pada bidang keahlian yang sesuai dengan PS dalam kurun waktu tiga tahun terakhir</label>
                                <input type="number" min=0 name="n3_4_5_2" class="form-control border-input" id="n3_4_5_2" min="0" value="{{json_decode($data_kprodi[12]->data)[1]}}" disabled="">
                              </div>
                              @endslot
                                  @if ($standar_status_code == 7)
                                    @slot('aksi_field')
                                        <select name="setuju_4_5_2" id="setuju_4_5_2" class="form-control border-input">
                                                <option value="1">Setuju</option>
                                                <option value="0" @if(!$dataCheck) @if($data_kprodi[12]->data != $data[12]->data) selected @endif @endif>Validasi</option>
                                        </select>
                                    @endslot
                                  @endif
                              @endisset
                            @endcomponent

                            @component("auditor.validasi_auditor")
                              @slot('id_input')
                                  4_5_2
                              @endslot
                              @slot('validasi_auditor')
                              <div class="form-group col-md-6">
                                <label for="n2_4_5_2">Jumlah dosen yang mengikuti tugas belajar jenjang S2 pada bidang keahlian yang sesuai dengan PS dalam kurun waktu tiga tahun terakhir</label>
                                <input type="number" min=0 name="n2_4_5_2" class="form-control border-input" id="n2_4_5_2" min="0" value="@if(!$dataCheck){{json_decode($data[12]->data)[0]}}@endif" required="">
                              </div>
                              <div class="form-group col-md-6">
                                <label for="n3_4_5_2">Jumlah dosen yang mengikuti tugas belajar jenjang S3 pada bidang keahlian yang sesuai dengan PS dalam kurun waktu tiga tahun terakhir</label>
                                <input type="number" min=0 name="n3_4_5_2" class="form-control border-input" id="n3_4_5_2" min="0" value="@if(!$dataCheck){{json_decode($data[12]->data)[1]}}@endif" required="">
                              </div>
                              @endslot
                            @endcomponent
                          </div>
                        </div>
                      </li>

                      <li class="row">
                        <div class="col-md-1 komponen nomor pull-left">
                          <div class="row">
                            <div class="col-md-12">
                              4.5.3
                            </div>
                          </div>
                        </div>
                        <div class="col-md-11 komponen">
                          <div class="deskriptor pull-left">
                            <div class="row">
                              <div class="col-md-12">
                                <strong>Kegiatan dosen tetap yang bidang keahliannya sesuai dengan PS dalam seminar ilmiah/ lokakarya/ penataran/ workshop/ pagelaran/ pameran/peragaan yang tidak hanya melibatkan dosen PT sendiri</strong>
                              </div>
                            </div>
                            @component("auditor.isiangket")
                                    @isset ($data_kprodi[13])
                                          @slot('skor')
                                              {{$data_kprodi[13]->kategori}}
                                          @endslot
                                          @slot('isian_angket')
                              <div class="form-group col-md-4">
                                <label for="a4_5_3">Jumlah makalah atau kegiatan (sebagai penyaji)</label>
                                <input type="number" min=0 name="a4_5_3" class="form-control border-input" id="a4_5_3" min="0" value="{{json_decode($data_kprodi[13]->data)[0]}}" disabled="">
                              </div>
                              <div class="form-group col-md-4">
                                <label for="b4_5_3">Jumlah kehadiran (sebagai peserta</label>
                                <input type="number" min=0 name="b4_5_3" class="form-control border-input" id="b4_5_3" min="0" value="{{json_decode($data_kprodi[13]->data)[1]}}" disabled="">
                              </div>
                              <div class="form-group col-md-4">
                                <label for="n4_5_3">Jumlah dosen tetap</label>
                                <input type="number" min=0 name="n4_5_3" class="form-control border-input" id="n4_5_3" min="0" value="{{json_decode($data_kprodi[13]->data)[2]}}" disabled="">
                              </div>
                              @endslot
                                  @if ($standar_status_code == 7)
                                    @slot('aksi_field')
                                        <select name="setuju_4_5_3" id="setuju_4_5_3" class="form-control border-input">
                                                <option value="1">Setuju</option>
                                                <option value="0" @if(!$dataCheck) @if($data_kprodi[13]->data != $data[13]->data) selected @endif @endif>Validasi</option>
                                        </select>
                                    @endslot
                                  @endif
                              @endisset
                            @endcomponent

                            @component("auditor.validasi_auditor")
                              @slot('id_input')
                                  4_5_3
                              @endslot
                              @slot('validasi_auditor')
                              <div class="form-group col-md-4">
                                <label for="a4_5_3">Jumlah makalah atau kegiatan (sebagai penyaji)</label>
                                <input type="number" min=0 name="a4_5_3" class="form-control border-input" id="a4_5_3" min="0" value="@if(!$dataCheck){{json_decode($data[13]->data)[0]}}@endif" required="">
                              </div>
                              <div class="form-group col-md-4">
                                <label for="b4_5_3">Jumlah kehadiran (sebagai peserta)</label>
                                <input type="number" min=0 name="b4_5_3" class="form-control border-input" id="b4_5_3" min="0" value="@if(!$dataCheck){{json_decode($data[13]->data)[1]}}@endif" required="">
                              </div>
                              <div class="form-group col-md-4">
                                <label for="n4_5_3">Jumlah dosen tetap</label>
                                <input type="number" min=0 name="n4_5_3" class="form-control border-input" id="n4_5_3" value="@if(!$dataCheck){{json_decode($data[13]->data)[2]}}@endif" required="">
                              </div>

                              @endslot
                            @endcomponent
                          </div>
                        </div>
                      </li>

                      <li class="row">
                        <div class="col-md-1 komponen nomor pull-left">
                          <div class="row">
                            <div class="col-md-12">
                              4.5.4
                            </div>
                          </div>
                        </div>
                        <div class="col-md-11 komponen">
                          <div class="deskriptor pull-left">
                            <div class="row">
                              <div class="col-md-12">
                                <strong>Prestasi dalam mendapatkan penghargaan hibah, pendanaan program dan kegiatan akademik dari tingkat nasional dan internasional; besaran dan proprosi dana penelitian dari sumber institusi sendiri dari luar institusi</strong>
                              </div>
                            </div>

                            @component("auditor.isiangket")
                                    @isset ($data_kprodi[14])
                                          @slot('skor')
                                              {{$data_kprodi[14]->kategori}}
                                          @endslot
                                          @slot('isian_angket')
                                          <select class="form-control border-input" name="n4_5_4" disabled="">
                                            <option disabled="" selected="">--Pilih--</option>
                                            <option value="0" @if(json_decode($data_kprodi[14]->data)[0] == 0) {{"selected"}} @endif>Tidak pernah mendapat penghargaan</option>
                                            <option value="1" @if(json_decode($data_kprodi[14]->data)[0] == 1) {{"selected"}} @endif>Mendapatkan penghargaan, hibah, pendanaan program dan kegiatan akademik yang berupa hibah dana dari PT snediri (disertai bukti)</option>
                                            <option value="2" @if(json_decode($data_kprodi[14]->data)[0] == 2) {{"selected"}} @endif>Mendapatkan penghargaan hibah, pendanaan program dan kegiatan akademik dari institusi regional/lokal (disertai bukti)</option>
                                            <option value="3" @if(json_decode($data_kprodi[14]->data)[0] == 3) {{"selected"}} @endif>Mendapatkan penghargaan hibah, pendanaan program dan kegiatan akademik dari institusi nasional (disertai bukti)</option>
                                            <option value="4" @if(json_decode($data_kprodi[14]->data)[0] == 4) {{"selected"}} @endif>Mendapatkan penghargaan hibah, pendanaan program dan kegiatan akademik dari institusi internasional (disertai bukti)</option>
                                          </select>
                                          <div class="row">
                                            <div class="col-md-12">
                                              <small>Catatan : Selama tiga tahun terakhir</small>
                                            </div>
                                          </div>
                                          @endslot
                                              @if ($standar_status_code == 7)
                                                @slot('aksi_field')
                                                    <select name="setuju_4_5_4" id="setuju_4_5_4" class="form-control border-input">
                                                            <option value="1">Setuju</option>
                                                            <option value="0"  @if(!$dataCheck) @if($data_kprodi[14]->data != $data[14]->data) selected @endif @endif>Validasi</option>
                                                    </select>
                                                @endslot
                                              @endif
                                          @endisset
                                        @endcomponent

                                      @component("auditor.validasi_auditor")
                                        @slot('id_input')
                                            4_5_4
                                        @endslot
                                        @slot('validasi_auditor')
                                        <select class="form-control border-input" name="n4_5_4" required="">
                                          <option disabled="" selected="">--Pilih--</option>
                                          <option value="0" @if(!$dataCheck) @if(json_decode($data[14]->data)[0] == 0) {{"selected"}} @endif @endif>Tidak pernah mendapat penghargaan</option>
                                          <option value="1" @if(!$dataCheck) @if(json_decode($data[14]->data)[0] == 1) {{"selected"}} @endif @endif>Mendapatkan penghargaan, hibah, pendanaan program dan kegiatan akademik yang berupa hibah dana dari PT snediri (disertai bukti)</option>
                                          <option value="2" @if(!$dataCheck) @if(json_decode($data[14]->data)[0] == 2) {{"selected"}} @endif @endif>Mendapatkan penghargaan hibah, pendanaan program dan kegiatan akademik dari institusi regional/lokal (disertai bukti)</option>
                                          <option value="3" @if(!$dataCheck) @if(json_decode($data[14]->data)[0] == 3) {{"selected"}} @endif @endif>Mendapatkan penghargaan hibah, pendanaan program dan kegiatan akademik dari institusi nasional (disertai bukti)</option>
                                          <option value="4" @if(!$dataCheck) @if(json_decode($data[14]->data)[0] == 4) {{"selected"}} @endif @endif>Mendapatkan penghargaan hibah, pendanaan program dan kegiatan akademik dari institusi internasional (disertai bukti)</option>
                                        </select>
                                        @endslot
                                      @endcomponent
                          </div>
                        </div>
                      </li>

                      <li class="row">
                        <div class="col-md-1 komponen nomor pull-left">
                          <div class="row">
                            <div class="col-md-12">
                              4.6.1.a
                            </div>
                          </div>
                        </div>
                        <div class="col-md-11 komponen">
                          <div class="deskriptor pull-left">
                            <div class="row">
                              <div class="col-md-12">
                                <strong>Pustakawan dan kualifikasinya</strong>
                              </div>
                            </div>
                            @component("auditor.isiangket")
                                   @isset ($data_kprodi[15])
                                         @slot('skor')
                                             {{$data_kprodi[15]->kategori}}
                                         @endslot
                                         @slot('isian_angket')
                              <div class="form-group col-md-4">
                                <label for="x1_4_6_1_a">X1</label>
                                <input type="number" min=0 name="x1_4_6_1_a" class="form-control border-input" id="x1_4_6_1_a" min="0" value="{{json_decode($data_kprodi[15]->data)[0]}}" disabled="">
                                <small>Jumlah pustakawan yang berpendidikan S2 atau S3</small>
                              </div>
                              <div class="form-group col-md-4">
                                <label for="x2_4_6_1_a">X2</label>
                                <input type="number" min=0 name="x2_4_6_1_a" class="form-control border-input" id="x2_4_6_1_a" min="0" value="{{json_decode($data_kprodi[15]->data)[1]}}" disabled="">
                                <small>Jumlah pustakawan yang berpendidikan D4 atau S1</small>
                              </div>
                              <div class="form-group col-md-4">
                                <label for="x3_4_6_1_a">X3</label>
                                <input type="number" min=0 name="x3_4_6_1_a" class="form-control border-input" id="x3_4_6_1_a" min="0" value="{{json_decode($data_kprodi[15]->data)[2]}}" disabled="">
                                <small>Jumlah pustakawan yang berpendidikan D1, D2, atau D3</small>
                              </div>
                              @endslot
                                  @if ($standar_status_code == 7)
                                    @slot('aksi_field')
                                        <select name="setuju_4_6_1_a" id="setuju_4_6_1_a" class="form-control border-input">
                                                <option value="1">Setuju</option>
                                                <option value="0" @if(!$dataCheck) @if($data_kprodi[11]->data != $data[11]->data) selected @endif @endif>Validasi</option>
                                        </select>
                                    @endslot
                                  @endif
                              @endisset
                            @endcomponent

                            @component("auditor.validasi_auditor")
                              @slot('id_input')
                                  4_6_1_a
                              @endslot
                              @slot('validasi_auditor')
                              <div class="form-group col-md-4">
                                <label for="x1_4_6_1_a">X1</label>
                                <input type="number" min=0 name="x1_4_6_1_a" class="form-control border-input" id="x1_4_6_1_a" min="0" value="@if(!$dataCheck){{json_decode($data[15]->data)[0]}}@endif" required="">
                                <small>Jumlah pustakawan yang berpendidikan S2 atau S3</small>
                              </div>
                              <div class="form-group col-md-4">
                                <label for="x2_4_6_1_a">X2</label>
                                <input type="number" min=0 name="x2_4_6_1_a" class="form-control border-input" id="x2_4_6_1_a" min="0" value="@if(!$dataCheck){{json_decode($data[15]->data)[1]}}@endif" required="">
                                <small>Jumlah pustakawan yang berpendidikan D4 atau S1</small>
                              </div>
                              <div class="form-group col-md-4">
                                <label for="x3_4_6_1_a">X3</label>
                                <input type="number" min=0 name="x3_4_6_1_a" class="form-control border-input" id="x3_4_6_1_a" min="0" value="@if(!$dataCheck){{json_decode($data[15]->data)[2]}}@endif" required="">
                                <small>Jumlah pustakawan yang berpendidikan D1, D2, atau D3</small>
                              </div>
                              @endslot
                              @endcomponent

                          </div>
                        </div>
                      </li>

                      <li class="row">
                        <div class="col-md-1 komponen nomor pull-left">
                          <div class="row">
                            <div class="col-md-12">
                              4.6.1.c
                            </div>
                          </div>
                        </div>
                        <div class="col-md-11 komponen">
                          <div class="deskriptor pull-left">
                            <div class="row">
                              <div class="col-md-12">
                                <strong>Tenaga administrasi</strong>
                              </div>
                            </div>
                            @component("auditor.isiangket")
                                   @isset ($data_kprodi[16])
                                         @slot('skor')
                                             {{$data_kprodi[16]->kategori}}
                                         @endslot
                                         @slot('isian_angket')
                              <div class="form-group col-md-3">
                                <label for="x1_4_6_1_c">X1</label>
                                <input type="number" min=0 name="x1_4_6_1_c" class="form-control border-input" id="x1_4_6_1_c" min="0" value="{{json_decode($data_kprodi[16]->data)[0]}}" disabled="">
                                <small>Jumlah tenaga administrasi yang berpendidikan D4 atau S1 ke atas</small>
                              </div>
                              <div class="form-group col-md-3">
                                <label for="x2_4_6_1_c">X2</label>
                                <input type="number" min=0 name="x2_4_6_1_c" class="form-control border-input" id="x2_4_6_1_c" min="0" value="{{json_decode($data_kprodi[16]->data)[1]}}" disabled="">
                                <small>Jumlah tenaga administrasi yang berpendidikan D3</small>
                              </div>
                              <div class="form-group col-md-3">
                                <label for="x3_4_6_1_c">X3</label>
                                <input type="number" min=0 name="x3_4_6_1_c" class="form-control border-input" id="x3_4_6_1_c" min="0" value="{{json_decode($data_kprodi[16]->data)[2]}}" disabled="">
                                <small>Jumlah tenaga administrasi yang berpendidikan D1 atau D2</small>
                              </div>
                              <div class="form-group col-md-3">
                                <label for="x4_4_6_1_c">X4</label>
                                <input type="number" min=0 name="x4_4_6_1_c" class="form-control border-input" id="x4_4_6_1_c" value="{{json_decode($data_kprodi[16]->data)[3]}}" disabled="">
                                <small>Jumlah tenaga adminstirasi yang berpendidikan SMU / SMK</small>
                              </div>
                              @endslot
                                  @if ($standar_status_code == 7)
                                    @slot('aksi_field')
                                        <select name="setuju_4_6_1_c" id="setuju_4_6_1_c" class="form-control border-input">
                                                <option value="1">Setuju</option>
                                                <option value="0" @if(!$dataCheck) @if($data_kprodi[11]->data != $data[11]->data) selected @endif @endif>Validasi</option>
                                        </select>
                                    @endslot
                                  @endif
                              @endisset
                            @endcomponent

                            @component("auditor.validasi_auditor")
                              @slot('id_input')
                                  4_6_1_c
                              @endslot
                              @slot('validasi_auditor')
                              <div class="form-group col-md-3">
                                <label for="x1_4_6_1_c">X1</label>
                                <input type="number" min=0 name="x1_4_6_1_c" class="form-control border-input" id="x1_4_6_1_c" min="0" value="@if(!$dataCheck){{json_decode($data[16]->data)[0]}}@endif" required="">
                                <small>Jumlah tenaga administrasi yang berpendidikan D4 atau S1 ke atas</small>
                              </div>
                              <div class="form-group col-md-3">
                                <label for="x2_4_6_1_c">X2</label>
                                <input type="number" min=0 name="x2_4_6_1_c" class="form-control border-input" id="x2_4_6_1_c" min="0" value="@if(!$dataCheck){{json_decode($data[16]->data)[1]}}@endif" required="">
                                <small>Jumlah tenaga administrasi yang berpendidikan D3</small>
                              </div>
                              <div class="form-group col-md-3">
                                <label for="x3_4_6_1_c">X3</label>
                                <input type="number" min=0 name="x3_4_6_1_c" class="form-control border-input" id="x3_4_6_1_c" min="0" value="@if(!$dataCheck){{json_decode($data[16]->data)[2]}}@endif" required="">
                                <small>Jumlah tenaga administrasi yang berpendidikan D1 atau D2</small>
                              </div>
                              <div class="form-group col-md-3">
                                <label for="x4_4_6_1_c">X4</label>
                                <input type="number" min=0 name="x4_4_6_1_c" class="form-control border-input" id="x4_4_6_1_c" value="@if(!$dataCheck){{json_decode($data[16]->data)[3]}}@endif" required="">
                                <small>Jumlah tenaga adminstirasi yang berpendidikan SMU / SMK</small>
                              </div>
                              @endslot
                            @endcomponent
                          </div>
                        </div>
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

@extends("layoutauditor")
@section("content")
<div class="col-md-12">
@include("auditor.riwayat")
    <div class="card">
        <div class="header">
            <h4 class="title">Mahasiswa dan Lulusan</h4>
            <p class="category">Standar 3</p>
        </div>
        <div class="content">
            <form action="/auditor/isi/{{$idprodi}}/standar3/save" method="post" class="kuesioner">
              {{-- <fieldset @if(sizeof($data) > 0) disabled @endif> --}}
              {{ csrf_field() }}
                <ul class="list-unstyled">
                    <li class="row">
                        <div class="col-md-11 komponen">
                            <span class="nomor pull-left">3.1.1.a</span>
                            <div class="deskriptor pull-left">
                                 <strong>Rasio calon mahasiswa yang ikut seleksi : daya tampung </strong>
                            </div>
                        </div>
                        @component("auditor.isiangket")
                                      @isset ($data_kprodi[0])
                                      @slot('skor')
                                          {{$data_kprodi[0]->kategori}}
                                      @endslot
                                      @slot('isian_angket')
                                          <div class="form-group col-md-4">
                                           <label for="n_3_1_1_mhs">Calon mahasiswa yang ikut seleksi</label>
                                           <input type="number" min=0 step=1 name="n_3_1_1_mhs" class="form-control border-input" id="3_1_1" value="{{json_decode($data_kprodi[0]->data)[0]}}" disabled>
                                         </div>
                                         <div class="form-group col-md-3">
                                           <label for="n_3_1_1_daya">Daya tampung</label>
                                           <input type="number" min=0 step=1 name="n_3_1_1_daya" class="form-control border-input" id="3_1_1" value="{{json_decode($data_kprodi[0]->data)[1]}}" disabled>
                                         </div>
                                      @endslot
                                          @if ($standar_status_code == 7)
                                            @slot('aksi_field')
                                                <select name="setuju_3_1_1_a" id="setuju_3_1_1_a" class="form-control border-input">
                                                        <option value="1">Setuju</option>
                                                        <option value="0" @if(!$dataCheck) @if($data_kprodi[0]->data != $data[0]->data) selected @endif @endif>Validasi</option>
                                                </select>
                                            @endslot                                            
                                          @endif
                                      @endisset
                                    @endcomponent

                                    @component("auditor.validasi_auditor")
                                      @slot("catatan") @if(sizeof($data)!=0) {{ $data[0]->catatan or '' }} @endif @endslot
                                      @slot('id_input')
                                          3_1_1_a
                                      @endslot
                                      @slot('validasi_auditor')
                                          <div class="form-group col-md-4">
                                           <label for="n_3_1_1_mhs">Calon mahasiswa yang ikut seleksi </label>
                                           <input type="number" min=0 step=1 name="n_3_1_1_mhs" class="form-control border-input" id="3_1_1" value="@if(!$dataCheck){{json_decode($data[0]->data)[0]}}@endif" required="">
                                         </div>
                                         <div class="form-group col-md-3">
                                           <label for="n_3_1_1_daya">Daya tampung</label>
                                           <input type="number" min=0 step=1 name="n_3_1_1_daya" class="form-control border-input" id="3_1_1" value="@if(!$dataCheck){{json_decode($data[0]->data)[1]}}@endif" required="">
                                         </div>
                                      @endslot
                                    @endcomponent

                    </li>
                    <li class="row">
                        <div class="col-md-11 komponen">
                            <span class="nomor pull-left">3.1.1.b</span>
                            <div class="deskriptor pull-left">
                                 <strong>Rasio mahasiswa baru reguler yang melakukan registrasi : calon mahasiswa baru reguler yang lulus seleksi</strong>
                            </div>
                        </div>
                        @component("auditor.isiangket")
                                      @isset ($data_kprodi[1])
                                      @slot('skor')
                                          {{$data_kprodi[1]->kategori}}
                                      @endslot
                                      @slot('isian_angket')
                                          <div class="form-group col-md-3">
                                             <label for="n_3_1_1_b1">Mahasiswa baru reguler yang melakukan registrasi</label>
                                             <input type="number" min=0 step=1 name="n_3_1_1_b1" class="form-control border-input" id="n_3_1_1_b" value="{{json_decode($data_kprodi[1]->data)[0]}}" disabled="">
                                           </div>
                                           <div class="form-group col-md-3">
                                           <label for="n_3_1_1_b2">Calon mahasiswa baru reguler yang lulus seleksi</label>
                                           <input type="number" min=0 step=1 name="n_3_1_1_b2" class="form-control border-input" id="n_3_1_1_b" value="{{json_decode($data_kprodi[1]->data)[1]}}" disabled="">
                                         </div>
                                      @endslot
                                          @if ($standar_status_code == 7)
                                            @slot('aksi_field')
                                                <select name="setuju_3_1_1_b" id="setuju_3_1_1_b" class="form-control border-input">
                                                        <option value="1">Setuju</option>
                                                        <option value="0" @if(!$dataCheck) @if($data_kprodi[1]->data != $data[1]->data) selected @endif @endif>Validasi</option>
                                                </select>
                                            @endslot                                            
                                          @endif
                                      @endisset
                                    @endcomponent

                                    @component("auditor.validasi_auditor")
                                      @slot("catatan") @if(sizeof($data)!=0) {{ $data[1]->catatan or '' }} @endif @endslot
                                      @slot('id_input')
                                          3_1_1_b
                                      @endslot
                                      @slot('validasi_auditor')
                                          <div class="form-group col-md-3">
                                             <label for="n_3_1_1_b1">Mahasiswa baru reguler yang melakukan registrasi</label>
                                             <input type="number" min=0 step=1 name="n_3_1_1_b1" class="form-control border-input" id="n_3_1_1_b" value="@if(!$dataCheck){{json_decode($data[1]->data)[0]}}@endif" required="">
                                           </div>
                                           <div class="form-group col-md-3">
                                           <label for="n_3_1_1_b2">Calon mahasiswa baru reguler yang lulus seleksi</label>
                                           <input type="number" min=0 step=1 name="n_3_1_1_b2" class="form-control border-input" id="n_3_1_1_b" value="@if(!$dataCheck){{json_decode($data[1]->data)[1]}}@endif" required="">
                                         </div>
                                      @endslot
                                    @endcomponent
                    </li>

                    <li class="row">
                        <div class="col-md-11 komponen">
                            <div class="pull-left nomor">3.1.1.c</div>
                            <div class="deskriptor pull-left">
                                <strong>
                                Rasio mahasiswa baru transfer terhadap mahasiswa baru bukan transfer.
                                </strong>
                                <div class="row">
                                  
                              </div>
                            </div>
                        </div>
                         @component("auditor.isiangket")
                                      @isset ($data_kprodi[2])
                                      @slot('skor')
                                          {{$data_kprodi[2]->kategori}}
                                      @endslot
                                      @slot('isian_angket')
                                          <div class="form-group col-md-3">
                                            <label for="n_3_1_1_c1">Total mahasiswa baru transfer untuk program S1 reguler dan S1 non-reguler</label>
                                            <input type="number" min=0 step=1 name="n_3_1_1_c1" class="form-control border-input" id="n_3_1_1_c" value="{{json_decode($data_kprodi[2]->data)[0]}}" disabled="">
                                          </div>
                                          <div class="form-group col-md-3">
                                          <label for="n_3_1_1_c2">Total mahasiswa baru bukan transfer untuk program S1 reguler dan S1 non-reguler</label>
                                          <input type="number" min=0 step=1 name="n_3_1_1_c2" class="form-control border-input" id="n_3_1_1_c" value="{{json_decode($data_kprodi[2]->data)[1]}}" disabled="">
                                        </div>
                                      @endslot
                                          @if ($standar_status_code == 7)
                                            @slot('aksi_field')
                                                <select name="setuju_3_1_1_c" id="setuju_3_1_1_c" class="form-control border-input">
                                                        <option value="1">Setuju</option>
                                                        <option value="0" @if(!$dataCheck) @if($data_kprodi[2]->data != $data[2]->data) selected @endif @endif>Validasi</option>
                                                </select>
                                            @endslot                                            
                                          @endif
                                      @endisset
                                    @endcomponent

                                    @component("auditor.validasi_auditor")
                                      @slot("catatan") @if(sizeof($data)!=0) {{ $data[2]->catatan or '' }} @endif @endslot
                                      @slot('id_input')
                                          3_1_1_c
                                      @endslot
                                      @slot('validasi_auditor')
                                          <div class="form-group col-md-3">
                                            <label for="n_3_1_1_c1">Total mahasiswa baru transfer untuk program S1 reguler dan S1 non-reguler</label>
                                            <input type="number" min=0 step=1 name="n_3_1_1_c1" class="form-control border-input" id="n_3_1_1_c" value="@if(!$dataCheck){{json_decode($data[2]->data)[0]}}@endif" required="">
                                          </div>
                                          <div class="form-group col-md-3">
                                          <label for="n_3_1_1_c2">Total mahasiswa baru bukan transfer untuk program S1 reguler dan S1 non-reguler</label>
                                          <input type="number" min=0 step=1 name="n_3_1_1_c2" class="form-control border-input" id="n_3_1_1_c2" value="@if(!$dataCheck){{json_decode($data[2]->data)[1]}}@endif" required="">
                                        </div>
                                      @endslot
                                    @endcomponent

                    </li>

                    <li class="row">
                        <div class="col-md-11 komponen">
                            <div class="pull-left nomor">3.1.1.d</div>
                            <div class="deskriptor pull-left">
                                <strong>
                                Rata-rata Indeks Prestasi Kumulatif (IPK) selama lima tahun terakhir.
                                </strong>
                                <div class="row">
                                  
                                </div>
                            </div>
                        </div>
                      @component("auditor.isiangket")
                                      @isset ($data_kprodi[3])
                                      @slot('skor')
                                          {{$data_kprodi[3]->kategori}}
                                      @endslot
                                      @slot('isian_angket')
                                         <div class="form-group col-md-3">
                                          <input type="number" min=0 step=1 name="n_3_1_1_d" class="form-control border-input" id="n_3_1_1_d" value="{{json_decode($data_kprodi[3]->data)[0]}}" disabled="">
                                        </div>
                                      @endslot
                                          @if ($standar_status_code == 7)
                                            @slot('aksi_field')
                                                <select name="setuju_3_1_1_d" id="setuju_3_1_1_d" class="form-control border-input">
                                                        <option value="1">Setuju</option>
                                                        <option value="0" @if(!$dataCheck) @if($data_kprodi[3]->data != $data[3]->data) selected @endif @endif>Validasi</option>
                                                </select>
                                            @endslot                                            
                                          @endif
                                      @endisset
                                    @endcomponent

                                    @component("auditor.validasi_auditor")
                                      @slot("catatan") @if(sizeof($data)!=0) {{ $data[3]->catatan or '' }} @endif @endslot
                                      @slot('id_input')
                                          3_1_1_d
                                      @endslot
                                      @slot('validasi_auditor')
                                          <div class="form-group col-md-3">
                                            <input type="number" min=0 step=1 name="n_3_1_1_d" class="form-control border-input" id="n_3_1_1_d" value="@if(!$dataCheck){{json_decode($data[3]->data)[0]}}@endif" required="">
                                          </div>
                                      @endslot
                                    @endcomponent
                    </li>

                    <li class="row">
                        <div class="col-md-11 komponen">
                            <div class="pull-left nomor">3.1.2</div>
                            <div class="deskriptor pull-left">
                                <strong>
                                Penerimaan mahasiswa non-reguler selayaknya tidak membuat beban dosen sangat berat, jauh melebihi beban ideal  (sekitar 12 sks).
                                </strong>
                                <div class="row">
                                  <div class="form-group col-md-3">
                                    
                                  </div>
                                </div>
                            </div>
                          </div>
                          @component("auditor.isiangket")
                                      @isset ($data_kprodi[4])
                                      @slot('skor')
                                          {{$data_kprodi[4]->kategori}}
                                      @endslot
                                      @slot('isian_angket')
                                         <select name="n_3_1_2" id="" class="form-control border-input" disabled="">
                                            <option disabled="" selected="">--Pilih--</option>
                                            <option value="0" @if(json_decode($data_kprodi[4]->data)[0] == 0) {{"selected"}} @endif>Jumlah mahasiswa yang diterima mengakibatkan beban dosen sangat berat, melebihi 19 sks.</option>
                                            <option value="1" @if(json_decode($data_kprodi[4]->data)[0] == 1) {{"selected"}} @endif>Jumlah mahasiswa yang diterima mengakibatkan beban dosen relatif berat, yaitu lebih dari 17 s.d. 19 sks.</option>
                                            <option value="2"@if(json_decode($data_kprodi[4]->data)[0] == 2) {{"selected"}} @endif>Jumlah mahasiswa yang diterima masih memungkinkan dosen mengajar seluruh mahasiswa dengan total beban lebih dari 15  s.d. 17 sks.</option>
                                            <option value="3"@if(json_decode($data_kprodi[4]->data)[0] == 3) {{"selected"}} @endif>Jumlah mahasiswa yang diterima masih memungkinkan dosen mengajar seluruh mahasiswa dengan total beban lebih dari 13  s.d. 15 sks</option>
                                            <option value="4"@if(json_decode($data_kprodi[4]->data)[0] == 4) {{"selected"}} @endif>Jumlah mahasiswa yang diterima masih memungkinkan dosen mengajar seluruh mahasiswa dengan total beban mendekati ideal, yaitu kurang atau sama dengan 13 sks.</option>
                                        </select>
                                      @endslot
                                          @if ($standar_status_code == 7)
                                            @slot('aksi_field')
                                                <select name="setuju_3_1_2" id="setuju_3_1_2" class="form-control border-input">
                                                        <option value="1">Setuju</option>
                                                        <option value="0" @if(!$dataCheck) @if($data_kprodi[4]->data != $data[4]->data) selected @endif @endif>Validasi</option>
                                                </select>
                                            @endslot                                            
                                          @endif
                                      @endisset
                                    @endcomponent

                                    @component("auditor.validasi_auditor")
                                      @slot("catatan") @if(sizeof($data)!=0) {{ $data[4]->catatan or '' }} @endif @endslot
                                      @slot('id_input')
                                          3_1_2
                                      @endslot
                                      @slot('validasi_auditor')
                                          <select name="n_3_1_2" id="" class="form-control border-input" required="">
                                        <option disabled="" selected="">--Pilih--</option>
                                        <option value="0" @if(!$dataCheck) @if(json_decode($data[4]->data)[0] == 0) {{"selected"}} @endif @endif>Jumlah mahasiswa yang diterima mengakibatkan beban dosen sangat berat, melebihi 19 sks.</option>
                                        <option value="1" @if(!$dataCheck) @if(json_decode($data[4]->data)[0] == 1) {{"selected"}} @endif @endif>Jumlah mahasiswa yang diterima mengakibatkan beban dosen relatif berat, yaitu lebih dari 17 s.d. 19 sks.</option>
                                        <option value="2" @if(!$dataCheck) @if(json_decode($data[4]->data)[0] == 2) {{"selected"}} @endif @endif>Jumlah mahasiswa yang diterima masih memungkinkan dosen mengajar seluruh mahasiswa dengan total beban lebih dari 15  s.d. 17 sks.</option>
                                        <option value="3" @if(!$dataCheck) @if(json_decode($data[4]->data)[0] == 3) {{"selected"}} @endif @endif>Jumlah mahasiswa yang diterima masih memungkinkan dosen mengajar seluruh mahasiswa dengan total beban lebih dari 13  s.d. 15 sks</option>
                                        <option value="4" @if(!$dataCheck) @if(json_decode($data[4]->data)[0] == 4) {{"selected"}} @endif @endif>Jumlah mahasiswa yang diterima masih memungkinkan dosen mengajar seluruh mahasiswa dengan total beban mendekati ideal, yaitu kurang atau sama dengan 13 sks.</option>
                                    </select>
                                      @endslot
                                    @endcomponent
                    </li>

                    <li class="row">
                        <div class="col-md-11 komponen">
                            <div class="pull-left nomor">3.1.3</div>
                            <div class="deskriptor pull-left">
                                <strong>
                                Penghargaan atas prestasi mahasiswa di bidang nalar, bakat dan minat
                                </strong>
                                <div class="row">
                                  <div class="form-group col-md-3">
                                    
                                  </div>
                                </div>
                            </div>
                        </div>
                              @component("auditor.isiangket")
                                @isset ($data_kprodi[5])
                                      @slot('skor')
                                          {{$data_kprodi[5]->kategori}}
                                      @endslot
                                      @slot('isian_angket')
                                         <select name="n_3_1_3" id="" class="form-control border-input" disabled="">
                                          <option disabled="" selected="">--Pilih--</option>
                                          <option value="1" @if(json_decode($data_kprodi[5]->data)[0] == 1) {{"selected"}} @endif>Tidak ada</option>
                                          <option value="2" @if(json_decode($data_kprodi[5]->data)[0] == 2) {{"selected"}} @endif>Tingkat Lokal</option>
                                          <option value="3" @if(json_decode($data_kprodi[5]->data)[0] == 3) {{"selected"}} @endif>Tingkat Wilayah</option>
                                          <option value="4" @if(json_decode($data_kprodi[5]->data)[0] == 4) {{"selected"}} @endif>Tingkat Internasional</option>
                                        </select>
                                      @endslot
                                          @if ($standar_status_code == 7)
                                            @slot('aksi_field')
                                                <select name="setuju_3_1_3" id="setuju_3_1_3" class="form-control border-input">
                                                        <option value="1">Setuju</option>
                                                        <option value="0" @if(!$dataCheck) @if($data_kprodi[5]->data != $data[5]->data) selected @endif @endif>Validasi</option>
                                                </select>
                                            @endslot                                            
                                          @endif
                                      @endisset
                                    @endcomponent

                                    @component("auditor.validasi_auditor")
                                      @slot("catatan") @if(sizeof($data)!=0) {{ $data[5]->catatan or '' }} @endif @endslot
                                      @slot('id_input')
                                          3_1_3
                                      @endslot
                                      @slot('validasi_auditor')
                                          <select name="n_3_1_3" id="" class="form-control border-input">
                                            <option disabled="" selected="">--Pilih--</option>
                                            <option value="1" @if(!$dataCheck) @if(json_decode($data[5]->data)[0] == 1) {{"selected"}} @endif @endif>Tidak ada</option>
                                            <option value="2" @if(!$dataCheck) @if(json_decode($data[5]->data)[0] == 2) {{"selected"}} @endif @endif>Tingkat Lokal</option>
                                            <option value="3" @if(!$dataCheck) @if(json_decode($data[5]->data)[0] == 3) {{"selected"}} @endif @endif>Tingkat Wilayah</option>
                                            <option value="4" @if(!$dataCheck) @if(json_decode($data[5]->data)[0] == 4) {{"selected"}} @endif @endif>Tingkat Internasional</option>
                                          </select>
                                      @endslot
                                    @endcomponent
                    </li>

                    <li class="row">
                        <div class="col-md-11 komponen">
                            <div class="pull-left nomor">3.1.4.a</div>
                            <div class="deskriptor pull-left">
                                <strong>
                                Persentase kelulusan tepat waktu
                                </strong>
                        </div>
                        </div>
                        @component("auditor.isiangket")
                                @isset ($data_kprodi[6])
                                      @slot('skor')
                                          {{$data_kprodi[6]->kategori}}
                                      @endslot
                                      @slot('isian_angket')
                                        <div class="form-group col-md-4">
                                            <label for="f">Mahasiswa lulus tepat waktu</label>
                                            <input type="number" min=0 step=1 name="f" class="form-control border-input" id="f" value="{{json_decode($data_kprodi[6]->data)[0]}}" disabled="">
                                          </div>
                                          <div class="form-group col-md-3">
                                            <label for="d">Mahasiswa lulus</label>
                                            <input type="number" min=0 step=1 name="d" class="form-control border-input" id="d" value="{{json_decode($data_kprodi[6]->data)[1]}}" disabled="">
                                          </div>
                                        </div>
                                      @endslot
                                          @if ($standar_status_code == 7)
                                            @slot('aksi_field')
                                                <select name="setuju_3_1_4_a" id="setuju_3_1_4_a" class="form-control border-input">
                                                        <option value="1">Setuju</option>
                                                        <option value="0" @if(!$dataCheck) @if($data_kprodi[6]->data != $data[6]->data) selected @endif @endif>Validasi</option>
                                                </select>
                                            @endslot                                            
                                          @endif
                                      @endisset
                                    @endcomponent

                                    @component("auditor.validasi_auditor")
                                      @slot("catatan") @if(sizeof($data)!=0) {{ $data[6]->catatan or '' }} @endif @endslot
                                      @slot('id_input')
                                          3_1_4_a
                                      @endslot
                                      @slot('validasi_auditor')
                                           <div class="form-group col-md-3">
                                                <label for="f">Mahasiswa lulus tepat waktu</label>
                                                <input type="number" min=0 step=1 name="f" class="form-control border-input" id="f" value="@if(!$dataCheck){{json_decode($data_kprodi[6]->data)[0]}}@endif" required=""`>
                                              </div>
                                              <div class="form-group col-md-3">
                                                <label for="d">Mahasiswa lulus</label>
                                                <input type="number" min=0 step=1 name="d" class="form-control border-input" id="d" value="@if(!$dataCheck){{json_decode($data_kprodi[6]->data)[1]}}@endif" required=""`>
                                              </div>
                                            </div>
                                      @endslot
                                    @endcomponent
                    </li>

                    <li class="row">
                        <div class="col-md-11 komponen">
                            <div class="pull-left nomor">3.1.4.b</div>
                            <div class="deskriptor pull-left">
                                <strong>
                                Persentase mahasiswa yang DO atau mengundurkan diri
                                </strong>
                                <div class="row">
                                  
                                </div>
                            </div>
                        </div>

                        @component("auditor.isiangket")
                                @isset ($data_kprodi[7])
                                      @slot('skor')
                                          {{$data_kprodi[7]->kategori}}
                                      @endslot
                                      @slot('isian_angket')
                                        <div class="form-group col-md-3">
                                          <label for="a">Jumlah mahasiswa</label>
                                          <input type="number" min=0 step=1 name="a3_1_4_b" class="form-control border-input" id="a" value="{{json_decode($data_kprodi[7]->data)[0]}}" disabled="">
                                        </div>
                                        <div class="form-group col-md-3">
                                          <label for="b">Banyaknya <em>Drop Out</em></label>
                                          <input type="number" min=0 step=1 name="b3_1_4_b" class="form-control border-input" id="b" value="{{json_decode($data_kprodi[7]->data)[1]}}" disabled="">
                                        </div>
                                        <div class="form-group col-md-4">
                                          <label for="c">Jumlah mahasiswa mengundurkan diri</label>
                                          <input type="number" min=0 step=1 name="c3_1_4_b" class="form-control border-input" id="c" value="{{json_decode($data_kprodi[7]->data)[2]}}" disabled="">
                                        </div>
                                      @endslot
                                          @if ($standar_status_code == 7)
                                            @slot('aksi_field')
                                                <select name="setuju_3_1_4_b" id="setuju_3_1_4_b" class="form-control border-input">
                                                        <option value="1">Setuju</option>
                                                        <option value="0" @if(!$dataCheck) @if($data_kprodi[7]->data != $data[7]->data) selected @endif @endif>Validasi</option>
                                                </select>
                                            @endslot                                            
                                          @endif
                                      @endisset
                                    @endcomponent

                                    @component("auditor.validasi_auditor")
                                      @slot("catatan") @if(sizeof($data)!=0) {{ $data[7]->catatan or '' }} @endif @endslot
                                      @slot('id_input')
                                          3_1_4_b
                                      @endslot
                                      @slot('validasi_auditor')
                                          <div class="form-group col-md-3">
                                            <label for="a">Jumlah mahasiswa</label>
                                            <input type="number" min=0 step=1 name="a3_1_4_b" class="form-control border-input" id="a" value="@if(!$dataCheck){{json_decode($data[7]->data)[0]}}@endif" required="">
                                          </div>
                                          <div class="form-group col-md-3">
                                            <label for="b">Banyaknya <em>Drop Out</em></label>
                                            <input type="number" min=0 step=1 name="b3_1_4_b" class="form-control border-input" id="b" value="@if(!$dataCheck){{json_decode($data[7]->data)[1]}}@endif" required="">
                                          </div>
                                          <div class="form-group col-md-3">
                                            <label for="c">Jumlah mahasiswa mengundurkan diri</label>
                                            <input type="number" min=0 step=1 name="c3_1_4_b" class="form-control border-input" id="c" value="@if(!$dataCheck){{json_decode($data[7]->data)[2]}}@endif" required="">
                                          </div>
                                      @endslot
                                    @endcomponent
                    </li>


                    <li class="row">
                        <div class="col-md-11 komponen">
                            <div class="pull-left nomor">3.2.1</div>
                            <div class="deskriptor pull-left">
                                <strong>
                                Mahasiswa memiliki akses untuk mendapatkan pelayanan
                                    <ol>
                                        <li>Bimbingan dan konseling</li>
                                        <li>Minat dan bakat (ekstra kurikuler)</li>
                                        <li>Pembinaan soft skill</li>
                                        <li>Layanan beasiswa</li>
                                        <li>Layanan kesehatan</li>
                                    </ol>
                                </strong>
                            </div>
                        </div>

                            @component("auditor.isiangket")
                                @isset ($data_kprodi[8])
                                      @slot('skor')
                                          {{$data_kprodi[8]->kategori}}
                                      @endslot
                                      @slot('isian_angket')
                                        <select name="n_3_2_1" id="" class="form-control border-input" disabled="">
                                          <option disabled="" selected="">--Pilih--</option>
                                          <option value="0" @if(json_decode($data_kprodi[8]->data)[0] == 0) {{"selected"}} @endif>Kurang dari 2 unit pelayanan</option>
                                          <option value="1" @if(json_decode($data_kprodi[8]->data)[0] == 1) {{"selected"}} @endif>2 jenis unit pelayanan</option>
                                          <option value="2" @if(json_decode($data_kprodi[8]->data)[0] == 2) {{"selected"}} @endif>Tersedia pelayanan nomor 1 dan 2</option>
                                          <option value="3" @if(json_decode($data_kprodi[8]->data)[0] == 3) {{"selected"}} @endif>Tersedia pelayanan nomor 1 s/d 3</option>
                                          <option value="4" @if(json_decode($data_kprodi[8]->data)[0] == 4) {{"selected"}} @endif>Semua tersedia</option>
                                        </select>
                                      @endslot
                                          @if ($standar_status_code == 7)
                                            @slot('aksi_field')
                                                <select name="setuju_3_2_1" id="setuju_3_2_1" class="form-control border-input">
                                                        <option value="1">Setuju</option>
                                                        <option value="0" @if(!$dataCheck) @if($data_kprodi[8]->data != $data[8]->data) selected @endif @endif>Validasi</option>
                                                </select>
                                            @endslot                                            
                                          @endif
                                      @endisset
                                    @endcomponent

                                    @component("auditor.validasi_auditor")
                                      @slot("catatan") @if(sizeof($data)!=0) {{ $data[8]->catatan or '' }} @endif @endslot
                                      @slot('id_input')
                                          3_2_1
                                      @endslot
                                      @slot('validasi_auditor')
                                           <select name="n_3_2_1" id="" class="form-control border-input" required="">
                                              <option disabled="" selected="">--Pilih--</option>
                                              <option value="0" @if(!$dataCheck) @if(json_decode($data[8]->data)[0] == 0) {{"selected"}} @endif @endif>Kurang dari 2 unit pelayanan</option>
                                              <option value="1" @if(!$dataCheck) @if(json_decode($data[8]->data)[0] == 1) {{"selected"}} @endif @endif>2 jenis unit pelayanan</option>
                                              <option value="2" @if(!$dataCheck) @if(json_decode($data[8]->data)[0] == 2) {{"selected"}} @endif @endif>Tersedia pelayanan nomor 1 dan 2</option>
                                              <option value="3" @if(!$dataCheck) @if(json_decode($data[8]->data)[0] == 3) {{"selected"}} @endif @endif>Tersedia pelayanan nomor 1 s/d 3</option>
                                              <option value="4" @if(!$dataCheck) @if(json_decode($data[8]->data)[0] == 4) {{"selected"}} @endif @endif>Semua tersedia</option>
                                            </select>
                                      @endslot
                                    @endcomponent
                    </li>

                    <li class="row">
                        <div class="col-md-11 komponen">
                            <div class="pull-left nomor">3.2.2</div>
                            <div class="deskriptor pull-left">
                                <strong>
                                Kualitas layanan kepada mahasiswa Untuk setiap jenis pelayanan, pemberian skor sebagai berikut: <br/>4 : sangat baik, <br/>3 : baik, <br/>2: cukup, <br/>1: kurang, <br/>0: sangat kurang
                                </strong>
                            </div>
                        </div>

                        @component("auditor.isiangket")
                                @isset ($data_kprodi[9])
                                      @slot('skor')
                                          {{$data_kprodi[9]->kategori}}
                                      @endslot
                                      @slot('isian_angket')
                                         <select name="n_3_2_2" id="" class="form-control border-input" disabled="">
                                          <option disabled="" selected="">--Pilih--</option>
                                          <option value="0" @if(json_decode($data_kprodi[9]->data)[0] == 0) {{"selected"}} @endif>0</option>
                                          <option value="1" @if(json_decode($data_kprodi[9]->data)[0] == 1) {{"selected"}} @endif>1</option>
                                          <option value="2" @if(json_decode($data_kprodi[9]->data)[0] == 2) {{"selected"}} @endif>2</option>
                                          <option value="3" @if(json_decode($data_kprodi[9]->data)[0] == 3) {{"selected"}} @endif>3</option>
                                          <option value="4" @if(json_decode($data_kprodi[9]->data)[0] == 4) {{"selected"}} @endif>4</option>
                                        </select>
                                      @endslot
                                          @if ($standar_status_code == 7)
                                            @slot('aksi_field')
                                                <select name="setuju_3_2_2" id="setuju_3_2_2" class="form-control border-input">
                                                        <option value="1">Setuju</option>
                                                        <option value="0" @if(!$dataCheck) @if($data_kprodi[9]->data != $data[9]->data) selected @endif @endif>Validasi</option>
                                                </select>
                                            @endslot                                            
                                          @endif
                                      @endisset
                                    @endcomponent

                                    @component("auditor.validasi_auditor")
                                      @slot("catatan") @if(sizeof($data)!=0) {{ $data[9]->catatan or '' }} @endif @endslot
                                      @slot('id_input')
                                          3_2_2
                                      @endslot
                                      @slot('validasi_auditor')
                                            <select name="n_3_2_2" id="" class="form-control border-input">
                                              <option disabled="" selected="">--Pilih--</option>
                                              <option value="0" @if(!$dataCheck) @if(json_decode($data[9]->data)[0] == 0) {{"selected"}} @endif @endif>0</option>
                                              <option value="1" @if(!$dataCheck) @if(json_decode($data[9]->data)[0] == 1) {{"selected"}} @endif @endif>1</option>
                                              <option value="2" @if(!$dataCheck) @if(json_decode($data[9]->data)[0] == 2) {{"selected"}} @endif @endif>2</option>
                                              <option value="3" @if(!$dataCheck) @if(json_decode($data[9]->data)[0] == 3) {{"selected"}} @endif @endif>3</option>
                                              <option value="4" @if(!$dataCheck) @if(json_decode($data[9]->data)[0] == 4) {{"selected"}} @endif @endif>4</option>
                                            </select>
                                      @endslot
                                    @endcomponent
                    </li>

                    <li class="row">
                        <div class="col-md-11 komponen">
                            <div class="pull-left nomor">3.3.1.b</div>
                            <div class="deskriptor pull-left">
                                <strong>
                               Penggunaan hasil pelacakan untuk perbaikan: (1) proses pembelajaran, (2) penggalangan dana, (3) informasi pekerjaan, (4) membangun jejaring.
                                </strong>
                            </div>
                        </div>

                        @component("auditor.isiangket")
                                @isset ($data_kprodi[10])
                                      @slot('skor')
                                          {{$data_kprodi[10]->kategori}}
                                      @endslot
                                      @slot('isian_angket')
                                         <select name="n_3_3_1_b" id="" class="form-control border-input" disabled>
                                            <option disabled="" selected="">--Pilih--</option>
                                            <option value="0" @if(json_decode($data_kprodi[10]->data)[0] == 0) {{"selected"}} @endif>Tidak ada tindak lanjut</option>
                                            <option value="1" @if(json_decode($data_kprodi[10]->data)[0] == 1) {{"selected"}} @endif>Perbaikan 1 item</option>
                                            <option value="2" @if(json_decode($data_kprodi[10]->data)[0] == 2) {{"selected"}} @endif>Perbaikan 2 item</option>
                                            <option value="3" @if(json_decode($data_kprodi[10]->data)[0] == 3) {{"selected"}} @endif>Perbaikan 3 item</option>
                                            <option value="4" @if(json_decode($data_kprodi[10]->data)[0] == 4) {{"selected"}} @endif>Perbaikan 4 item</option>
                                        </select>
                                      @endslot
                                          @if ($standar_status_code == 7)
                                            @slot('aksi_field')
                                                <select name="setuju_3_3_1_b" id="setuju_3_3_1_b" class="form-control border-input">
                                                        <option value="1">Setuju</option>
                                                        <option value="0" @if(!$dataCheck) @if($data_kprodi[10]->data != $data[10]->data) selected @endif @endif>Validasi</option>
                                                </select>
                                            @endslot                                            
                                          @endif
                                      @endisset
                                    @endcomponent

                                    @component("auditor.validasi_auditor")
                                      @slot("catatan") @if(sizeof($data)!=0) {{ $data[10]->catatan or '' }} @endif @endslot
                                      @slot('id_input')
                                          3_3_1_b
                                      @endslot
                                      @slot('validasi_auditor')
                                            <select name="n_3_3_1_b" id="" class="form-control border-input" required="">
                                                <option disabled="" selected="">--Pilih--</option>
                                                <option value="0" @if(!$dataCheck)  @if(json_decode($data[10]->data)[0] == 0) {{"selected"}} @endif @endif>Tidak ada tindak lanjut</option>
                                                <option value="1" @if(!$dataCheck)  @if(json_decode($data[10]->data)[0] == 1) {{"selected"}} @endif @endif>Perbaikan 1 item</option>
                                                <option value="2" @if(!$dataCheck)  @if(json_decode($data[10]->data)[0] == 2) {{"selected"}} @endif @endif>Perbaikan 2 item</option>
                                                <option value="3" @if(!$dataCheck)  @if(json_decode($data[10]->data)[0] == 3) {{"selected"}} @endif  @endif>Perbaikan 3 item</option>
                                                <option value="4" @if(!$dataCheck)  @if(json_decode($data[10]->data)[0] == 4) {{"selected"}} @endif  @endif>Perbaikan 4 item</option>
                                            </select>
                                      @endslot
                                    @endcomponent
                    </li>

                    <li class="row">
                        <div class="col-md-11 komponen">
                            <div class="pull-left nomor">3.3.1.c</div>
                            <div class="deskriptor pull-left">
                                <strong>
                               Pendapat pengguna (employer) lulusan terhadap kualitas alumni. Ada 7 jenis kompetensi.
                                </strong>
                            </div>
                        </div>
                         @component("auditor.isiangket")
                                @isset ($data_kprodi[11])
                                      @slot('skor')
                                          {{$data_kprodi[11]->kategori}}
                                      @endslot
                                      @slot('isian_angket')
                                         <div class="form-group col-md-3">
                                            <label for="a">Sangat Baik</label>
                                            <input type="number" min=0 step=1 name="a3_3_1_c" class="form-control border-input" id="a" value="{{json_decode($data_kprodi[11]->data)[0]}}" disabled="">
                                          </div>
                                          <div class="form-group col-md-3">
                                            <label for="b">Baik</label>
                                            <input type="number" min=0 step=1 name="b3_3_1_c" class="form-control border-input" id="b" value="{{json_decode($data_kprodi[11]->data)[1]}}" disabled="">
                                          </div>
                                          <div class="form-group col-md-3">
                                            <label for="c">Cukup</label>
                                            <input type="number" min=0 step=1 name="c3_3_1_c" class="form-control border-input" id="c" value="{{json_decode($data_kprodi[11]->data)[2]}}" disabled="">
                                          </div>
                                          <div class="form-group col-md-3">
                                            <label for="d">Kurang</label>
                                            <input type="number" min=0 step=1 name="d3_3_1_c" class="form-control border-input" id="d" value="{{json_decode($data_kprodi[11]->data)[3]}}" disabled="">
                                          </div>
                                      @endslot
                                          @if ($standar_status_code == 7)
                                            @slot('aksi_field')
                                                <select name="setuju_3_3_1_c" id="setuju_3_3_1_c" class="form-control border-input">
                                                        <option value="1">Setuju</option>
                                                        <option value="0" @if(!$dataCheck) @if($data_kprodi[11]->data != $data[11]->data) selected @endif @endif>Validasi</option>
                                                </select>
                                            @endslot                                            
                                          @endif
                                      @endisset
                                    @endcomponent

                                    @component("auditor.validasi_auditor")
                                      @slot("catatan") @if(sizeof($data)!=0) {{ $data[11]->catatan or '' }} @endif @endslot
                                      @slot('id_input')
                                          3_3_1_c
                                      @endslot
                                      @slot('validasi_auditor')
                                            <div class="form-group col-md-3">
                                              <label for="a">Sangat Baik</label>
                                              <input type="number" min=0 step=1 name="a3_3_1_c" class="form-control border-input" id="a" value="@if(!$dataCheck){{json_decode($data[11]->data)[0]}}@endif" required="">
                                            </div>
                                            <div class="form-group col-md-3">
                                              <label for="b">Baik</label>
                                              <input type="number" min=0 step=1 name="b3_3_1_c" class="form-control border-input" id="b" value="@if(!$dataCheck){{json_decode($data[11]->data)[1]}}@endif" required="">
                                            </div>
                                            <div class="form-group col-md-3">
                                              <label for="c">Cukup</label>
                                              <input type="number" min=0 step=1 name="c3_3_1_c" class="form-control border-input" id="c" value="@if(!$dataCheck){{json_decode($data[11]->data)[2]}}@endif" required="">
                                            </div>
                                            <div class="form-group col-md-3">
                                              <label for="d">Kurang</label>
                                              <input type="number" min=0 step=1 name="d3_3_1_c" class="form-control border-input" id="d" value="@if(!$dataCheck){{json_decode($data[11]->data)[3]}}@endif" required="">
                                            </div>
                                      @endslot
                                    @endcomponent
                    </li>
                    <li class="row">

                        <div class="col-md-11 komponen">
                            <div class="pull-left nomor">3.3.2</div>
                            <div class="deskriptor pull-left">
                                <strong>
                               Profil masa tunggu kerja pertama
                                </strong>
                                <div class="row">
                                  
                                </div>
                            </div>
                        </div>

                            @component("auditor.isiangket")
                                @isset ($data_kprodi[12])
                                      @slot('skor')
                                          {{$data_kprodi[12]->kategori}}
                                      @endslot
                                      @slot('isian_angket')
                                         <div class="form-group col-md-12">
                                            <label for="n_3_3_2">Rata-rata masa tunggu lulusan memperoleh pekerjaan yang pertama (dalam bulan)</label>
                                            <input type="number" min=0 step=1 name="n_3_3_2" class="form-control border-input" id="n_3_3_2" value="{{json_decode($data_kprodi[12]->data)[0]}}" disabled="">
                                          </div>
                                      @endslot
                                          @if ($standar_status_code == 7)
                                            @slot('aksi_field')
                                                <select name="setuju_3_3_2" id="setuju_3_3_2" class="form-control border-input">
                                                        <option value="1">Setuju</option>
                                                        <option value="0" @if(!$dataCheck) @if($data_kprodi[12]->data != $data[12]->data) selected @endif @endif>Validasi</option>
                                                </select>
                                            @endslot                                            
                                          @endif
                                      @endisset
                                    @endcomponent

                                    @component("auditor.validasi_auditor")
                                      @slot("catatan") @if(sizeof($data)!=0) {{ $data[12]->catatan or '' }} @endif @endslot
                                      @slot('id_input')
                                          3_3_2
                                      @endslot
                                      @slot('validasi_auditor')
                                            <div class="form-group col-md-12">
                                                <label for="n_3_3_2">Rata-rata masa tunggu lulusan memperoleh pekerjaan yang pertama (dalam bulan)</label>
                                                <input type="number" min=0 step=1 name="n_3_3_2" class="form-control border-input" id="n_3_3_2" value="@if(!$dataCheck){{json_decode($data[12]->data)[0]}}@endif" required="">
                                              </div>
                                      @endslot
                                    @endcomponent
                    </li>

                    <li class="row">
                        <div class="col-md-11 komponen">
                            <div class="pull-left nomor">3.3.3</div>
                            <div class="deskriptor pull-left">
                                <strong>
                               Profil kesesuaian bidang kerja dengan bidang studi
                                </strong>
                                <div class="row">
                                  
                                </div>
                            </div>
                        </div>
                        @component("auditor.isiangket")
                                @isset ($data_kprodi[13])
                                      @slot('skor')
                                          {{$data_kprodi[13]->kategori}}
                                      @endslot
                                      @slot('isian_angket')
                                        <div class="form-group col-md-12 form-inline">
                                          <label for="n_3_3_3"></label>
                                            <input type="number" min=0 step=0.1 name="n_3_3_3" class="form-control border-input" id="n_3_3_3" value="{{json_decode($data_kprodi[13]->data)[0]}}" disabled="">
                                            <span>%</span>
                                            <small>Persentase kesesuaian bidang kerja dengan bidang studi (keahlian) lulusan</small>
                                          </div>
                                      @endslot
                                          @if ($standar_status_code == 7)
                                            @slot('aksi_field')
                                                <select name="setuju_3_3_3" id="setuju_3_3_3" class="form-control border-input">
                                                        <option value="1">Setuju</option>
                                                        <option value="0" @if(!$dataCheck) @if($data_kprodi[13]->data != $data[13]->data) selected @endif @endif>Validasi</option>
                                                </select>
                                            @endslot                                            
                                          @endif
                                      @endisset
                                    @endcomponent

                                    @component("auditor.validasi_auditor")
                                      @slot("catatan") @if(sizeof($data)!=0) {{ $data[13]->catatan or '' }} @endif @endslot
                                      @slot('id_input')
                                          3_3_3
                                      @endslot
                                      @slot('validasi_auditor')
                                            <div class="form-group col-md-12 form-inline" >
                                              <label for="n_3_3_3"></label>
                                              <input type="number" min=0 step=0.1 name="n_3_3_3" class="form-control border-input" id="n_3_3_3" value="@if(!$dataCheck){{json_decode($data[13]->data)[0]}}@endif" required="">
                                              <span>%</span>
                                              <small>Persentase kesesuaian bidang kerja dengan bidang studi (keahlian) lulusan</small>
                                            </div>
                                      @endslot
                                    @endcomponent
                      </li>

                    <li class="row">
                        <div class="col-md-11 komponen">
                            <div class="pull-left nomor">3.4.1</div>
                            <div class="deskriptor pull-left">
                                <strong>
                               Partisipasi alumni dalam mendukung pengembangan akademik program studi dalam bentuk: (1) Sumbangan dana, (2) Sumbangan fasilitas, (3) Keterlibatan dalam kegiatan akademik, (4) Pengembangan jejaring, (5) Penyediaan fasilitas untuk kegiatan akademik
                                </strong>
                            </div>
                        </div>
                        @component("auditor.isiangket")
                                @isset ($data_kprodi[14])
                                      @slot('skor')
                                          {{$data_kprodi[14]->kategori}}
                                      @endslot
                                      @slot('isian_angket')
                                        <select name="n_3_4_1" id="" class="form-control border-input" disabled="">
                                            <option disabled="" selected="">--Pilih--</option>
                                            <option value="0" @if(json_decode($data_kprodi[14]->data)[0] == 0) {{"selected"}} @endif>Tidak ada partisipasi alumni.</option>
                                            <option value="1" @if(json_decode($data_kprodi[14]->data)[0] == 1) {{"selected"}} @endif>Hanya 1 bentuk partisipasi saja yang dilakukan oleh alumni</option>
                                            <option value="2" @if(json_decode($data_kprodi[14]->data)[0] == 2) {{"selected"}} @endif>Hanya 2 bentuk partisipasi yang dilakukan oleh alumni.</option>
                                            <option value="3" @if(json_decode($data_kprodi[14]->data)[0] == 3) {{"selected"}} @endif>3-4 bentuk partisipasi dilakukan oleh alumni.</option>
                                            <option value="4" @if(json_decode($data_kprodi[14]->data)[0] == 4) {{"selected"}} @endif>Semua bentuk partisipasi dilakukan oleh alumni.</option>
                                        </select>
                                      @endslot
                                          @if ($standar_status_code == 7)
                                            @slot('aksi_field')
                                                <select name="setuju_3_4_1" id="setuju_3_4_1" class="form-control border-input">
                                                        <option value="1">Setuju</option>
                                                        <option value="0"  @if(!$dataCheck) @if($data_kprodi[14]->data != $data[14]->data) selected @endif @endif>Validasi</option>
                                                </select>
                                            @endslot                                            
                                          @endif
                                      @endisset
                                    @endcomponent

                                    @component("auditor.validasi_auditor")
                                      @slot("catatan") @if(sizeof($data)!=0) {{ $data[14]->catatan or '' }} @endif @endslot
                                      @slot('id_input')
                                          3_4_1
                                      @endslot
                                      @slot('validasi_auditor')
                                      <select name="n_3_4_1" id="validasi_auditor_3_4_1" class="form-control border-input" required="">
                                        <option disabled="" selected="">--Pilih--</option>
                                        <option value="0" @if(!$dataCheck) @if(json_decode($data[14]->data)[0] == 0) {{"selected"}} @endif @endif>Tidak ada partisipasi alumni.</option>
                                        <option value="1" @if(!$dataCheck) @if(json_decode($data[14]->data)[0] == 1) {{"selected"}} @endif @endif>Hanya 1 bentuk partisipasi saja yang dilakukan oleh alumni</option>
                                        <option value="2" @if(!$dataCheck) @if(json_decode($data[14]->data)[0] == 2) {{"selected"}} @endif @endif>Hanya 2 bentuk partisipasi yang dilakukan oleh alumni.</option>
                                        <option value="3" @if(!$dataCheck) @if(json_decode($data[14]->data)[0] == 3) {{"selected"}} @endif @endif>3-4 bentuk partisipasi dilakukan oleh alumni.</option>
                                        <option value="4" @if(!$dataCheck) @if(json_decode($data[14]->data)[0] == 4) {{"selected"}} @endif @endif>Semua bentuk partisipasi dilakukan oleh alumni.</option>
                                    </select>
                                      @endslot
                                    @endcomponent
                    </li>

                    <li class="row">
                        <div class="col-md-11 komponen">
                            <div class="pull-left nomor">3.4.2</div>
                            <div class="deskriptor pull-left">
                                <strong>
                               Partisipasi lulusan dan alumni dalam mendukung pengembangan non-akademik program studi dalam bentuk: (1) Sumbangan dana,(2) Sumbangan fasilitas, (3) Keterlibatan dalam kegiatan non akademik, (4) Pengembangan jejaring, (5) Penyediaan fasilitas untuk kegiatan non akademik.
                                </strong>
                            </div>
                        </div>
                        @component("auditor.isiangket")
                                @isset ($data_kprodi[15])
                                      @slot('skor')
                                          {{$data_kprodi[15]->kategori}}
                                      @endslot
                                      @slot('isian_angket')
                                    <select name="n_3_4_2" id="" class="form-control border-input" disabled="">
                                      <option disabled="" selected="">--Pilih--</option>
                                      <option value="0" @if(json_decode($data_kprodi[15]->data)[0] == 0) {{"selected"}} @endif>Tidak ada partisipasi alumni.</option>
                                      <option value="1" @if(json_decode($data_kprodi[15]->data)[0] == 1) {{"selected"}} @endif>Hanya 1 bentuk partisipasi saja yang dilakukan oleh alumni</option>
                                      <option value="2" @if(json_decode($data_kprodi[15]->data)[0] == 2) {{"selected"}} @endif>Hanya 2 bentuk partisipasi yang dilakukan oleh alumni.</option>
                                      <option value="3" @if(json_decode($data_kprodi[15]->data)[0] == 3) {{"selected"}} @endif>3-4 bentuk partisipasi dilakukan oleh alumni.</option>
                                      <option value="4" @if(json_decode($data_kprodi[15]->data)[0] == 4) {{"selected"}} @endif>Semua bentuk partisipasi dilakukan oleh alumni.</option>
                                    </select>
                                      @endslot
                                          @if ($standar_status_code == 7)
                                            @slot('aksi_field')
                                                <select name="setuju_3_4_2" id="setuju_3_4_2" class="form-control border-input">
                                                        <option value="1">Setuju</option>
                                                        <option value="0" @if(!$dataCheck) @if($data_kprodi[15]->data != $data[15]->data) selected @endif @endif>Validasi</option>
                                                </select>
                                            @endslot                                            
                                          @endif
                                      @endisset
                                    @endcomponent

                                    @component("auditor.validasi_auditor")
                                      @slot("catatan") @if(sizeof($data)!=0) {{ $data[15]->catatan or '' }} @endif @endslot
                                      @slot('id_input')
                                          3_4_2
                                      @endslot
                                      @slot('validasi_auditor')
                                      <select name="n_3_4_2" id="validasi_auditor_3_4_2" class="form-control border-input" required="">
                                      <option disabled="" selected="">--Pilih--</option>
                                      <option value="0" @if(!$dataCheck) @if(json_decode($data[15]->data)[0] == 0) {{"selected"}} @endif @endif>Tidak ada partisipasi alumni.</option>
                                      <option value="1" @if(!$dataCheck) @if(json_decode($data[15]->data)[0] == 1) {{"selected"}} @endif @endif>Hanya 1 bentuk partisipasi saja yang dilakukan oleh alumni</option>
                                      <option value="2" @if(!$dataCheck) @if(json_decode($data[15]->data)[0] == 2) {{"selected"}} @endif @endif>Hanya 2 bentuk partisipasi yang dilakukan oleh alumni.</option>
                                      <option value="3" @if(!$dataCheck) @if(json_decode($data[15]->data)[0] == 3) {{"selected"}} @endif @endif>3-4 bentuk partisipasi dilakukan oleh alumni.</option>
                                      <option value="4" @if(!$dataCheck) @if(json_decode($data[15]->data)[0] == 4) {{"selected"}} @endif @endif>Semua bentuk partisipasi dilakukan oleh alumni.</option>
                                    </select>
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

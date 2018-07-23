@extends("layoutauditor")
@section("content")
<div class="col-md-12">
  <div class="card">
      <div class="header">
          <h4 class="title">Kurikum, Pembelajaran, dan Suasana AKademik</h4>
          <p class="category">Standar 5</p>
      </div>
      <div class="content">
        <form action="/auditor/isi/{{$idprodi}}/standar5/save" method="post" class="kuesioner">
            {{-- <fieldset @if(sizeof($data) > 0) disabled @endif> --}}
            {{csrf_field()}}
              <ul class="list-unstyled">

                  <li class="row">
                      <div class="col-md-12 komponen">
                          <div class="pull-left nomor">5.1.1.a</div>
                          <div class="deskriptor pull-left">

                            <div class="row">
                                <strong>Kelengkapan dan perumusan kompetensi</strong>
                            </div>
                            @component("auditor.isiangket")
                              @isset ($data_kprodi[0])
                                @slot('skor')
                                  {{$data_kprodi[0]->kategori}}
                                @endslot
                                @slot('isian_angket')
                                <select name="standar5_1_1_1_a" id="" class="form-control border-input" disabled="">
                                      <option disabled="" selected="">--Pilih--</option>
                                      <option value="0" @if(json_decode($data_kprodi[0]->data)[0] == 0) {{"selected"}} @endif>Kurikulum tidak memuat kompetensi lulusan secara lengkap</option>
                                      <option value="1" @if(json_decode($data_kprodi[0]->data)[0] == 1) {{"selected"}} @endif>Kurikulum memuat kompetensi lulusan secara lengkap (utama, pendukung, lainnya), namun rumusannya kurang jelas</option>
                                      <option value="2" @if(json_decode($data_kprodi[0]->data)[0] == 2) {{"selected"}} @endif>Kurikulum memuat kompetensi lulusan secara lengkap (utama, pendukung, lainnya) yang terumuskan secara cukup jelas</option>
                                      <option value="3" @if(json_decode($data_kprodi[0]->data)[0] == 3) {{"selected"}} @endif>Kurikulum memuat kompetensi lulusan secara lengkap (utama, pendukung, lainnya) yang terumuskan secara jelas</option>
                                      <option value="4" @if(json_decode($data_kprodi[0]->data)[0] == 4) {{"selected"}} @endif>kurikulum memuat kompetensi lulusan secara lengkap (utama, pendukung, lainnya) yang terumuskan secara sangat jelas</option>
                                </select>
                                @endslot
                                    @if($standar_status_code==7)
                                      @slot('aksi_field')
                                        <select name="setuju_5_1_1_a" id="setuju_5_1_1_a" class="form-control border-input">
                                              <option value="1">Setuju</option>
                                              <option value="0" @if(!$dataCheck) @if($data[0]->data != $data_kprodi[0]->data) selected @endif @endif>Validasi</option>
                                        </select>
                                      @endslot
                                    @endif
                                @endisset
                              @endcomponent

                              @component('auditor.validasi_auditor')
                                @slot("catatan") @if(sizeof($data)!=0) {{ $data[0]->catatan or '' }} @endif @endslot
                                @slot('id_input')
                                5_1_1_a
                                @endslot
                                @slot('validasi_auditor')
                                  <select name="n_5_1_1_a" id="" class="form-control border-input" required="">
                                        <option disabled="" selected="">--Pilih--</option>
                                         <option value="0" @if(!$dataCheck) @if(json_decode($data[0]->data)[0] == 0) {{"selected"}} @endif @endif>Kurikulum tidak memuat kompetensi lulusan secara lengkap</option>
                                         <option value="1" @if(!$dataCheck) @if(json_decode($data[0]->data)[0] == 1) {{"selected"}} @endif @endif>Kurikulum memuat kompetensi lulusan secara lengkap (utama, pendukung, lainnya), namun rumusannya kurang jelas</option>
                                         <option value="2" @if(!$dataCheck) @if(json_decode($data[0]->data)[0] == 2) {{"selected"}} @endif @endif>Kurikulum memuat kompetensi lulusan secara lengkap (utama, pendukung, lainnya) yang terumuskan secara cukup jelas</option>
                                         <option value="3" @if(!$dataCheck) @if(json_decode($data[0]->data)[0] == 3) {{"selected"}} @endif @endif>Kurikulum memuat kompetensi lulusan secara lengkap (utama, pendukung, lainnya) yang terumuskan secara jelas</option>
                                         <option value="0" @if(!$dataCheck) @if(json_decode($data[0]->data)[0] == 4) {{"selected"}} @endif @endif>kurikulum memuat kompetensi lulusan secara lengkap (utama, pendukung, lainnya) yang terumuskan secara sangat jelas</option>

                                  </select>
                                @endslot
                              @endcomponent
                          </div>
                      </div>
                  </li>

                  <li class="row">
                      <div class="col-md-12 komponen">
                          <div class="pull-left nomor">5.1.2.b</div>
                          <div class="deskriptor pull-left">
                            <div class="row">
                                <strong>
                                  Persentase matakuliah yang dalam penentuan nilai akhirnya memberikan bobot pada tugas - tugas
                                </strong>
                            </div>
                              @component('auditor.isiangket')
                                @isset($data_kprodi[1])
                                  @slot('skor')
                                    {{$data_kprodi[1]->kategori}}
                                    @endslot
                                  @slot('isian_angket')
                                <select name="standar5_1_2_b" id="" class="form-control border-input" disabled="">
                                  <option disabled="" selected="">--Pilih--</option>
                                  <option value="0" @if(json_decode($data_kprodi[1]->data)[0] == 0) {{"selected"}} @endif>Tidak sesuai dengan visi - misi serta tidak jelas orientasinya atau Tidak memuat standar kompetensi</option>
                                  <option value="1" @if(json_decode($data_kprodi[1]->data)[0] == 1) {{"selected"}} @endif>Tidak sesuai dengan visi - misi</option>
                                  <option value="2" @if(json_decode($data_kprodi[1]->data)[0] == 2) {{"selected"}} @endif>Sesuai dengan visi - misi, tetapi masih beroreintasi ke masa lalu</option>
                                  <option value="3" @if(json_decode($data_kprodi[1]->data)[0] == 3) {{"selected"}} @endif>Sesuai dengan visi - misi, berorientasi ke masa kini</option>
                                  <option value="4" @if(json_decode($data_kprodi[1]->data)[0] == 4) {{"selected"}} @endif>Sesuai dengan visi - misi, sudah berorientasi ke masa depan</option>
                                </select>
                                @endslot
                                    @if($standar_status_code==7)
                                      @slot('aksi_field')
                                      <select name="setuju_5_1_2_b" id="setuju_5_1_2_b" class="form-control border-input">
                                            <option value="1">Setuju</option>
                                            <option value="0" @if(!$dataCheck) @if($data[1]->data != $data_kprodi[1]->data) selected @endif @endif>Validasi</option>
                                      </select>
                                      @endslot
                                    @endif
                                @endisset
                            @endcomponent

                            @component("auditor.validasi_auditor")
                              @slot("catatan") @if(sizeof($data)!=0) {{ $data[1]->catatan or '' }} @endif @endslot
                              @slot('id_input')
                                5_1_2_b
                              @endslot
                              @slot('validasi_auditor')
                              <select name="standar5_1_2_b" id="" class="form-control border-input" required="">
                              <option disabled="" selected="">--Pilih--</option>
                                <option value="0" @if(!$dataCheck) @if(json_decode($data[1]->data)[0] == 0) {{"selected"}} @endif @endif>Tidak sesuai dengan visi - misi serta tidak jelas orientasinya atau Tidak memuat standar kompetensi</option>
                                <option value="1" @if(!$dataCheck) @if(json_decode($data[1]->data)[0] == 1) {{"selected"}} @endif @endif>Tidak sesuai dengan visi - misi</option>
                                <option value="2" @if(!$dataCheck) @if(json_decode($data[1]->data)[0] == 2) {{"selected"}} @endif @endif>Sesuai dengan visi - misi, tetapi masih beroreintasi ke masa lalu</option>
                                <option value="3" @if(!$dataCheck) @if(json_decode($data[1]->data)[0] == 3) {{"selected"}} @endif @endif>Sesuai dengan visi - misi, berorientasi ke masa kini</option>
                                <option value="4" @if(!$dataCheck) @if(json_decode($data[1]->data)[0] == 4) {{"selected"}} @endif @endif>Sesuai dengan visi - misi, sudah berorientasi ke masa depan</option>
                              </select>
                              @endslot
                            @endcomponent
                          </div>
                      </div>
                  </li>

                  <li class="row">
                      <div class="col-md-12 komponen">
                          <div class="pull-left nomor">5.1.2.c</div>
                          <div class="deskriptor pull-left">
                            <div class="row">
                                <strong>Matakuliah dilengkapi dengan deskripsi matakuliah, silabus dan SAP</strong>
                            </div>

                      @component("auditor.isiangket")
                            @isset ($data_kprodi[2])
                              @slot('skor')
                                {{$data_kprodi[2]->kategori}}
                              @endslot
                                @slot('isian_angket')
                                <!-- <label for="pdmk">PDMK</label> -->
                                <div class="form-group col-md-3">
                                  <small>mata kuliah yang memiliki deskripsi, silabus dan SAP</small>
                                  <input type="number" min=0 step=0.01 name="pdmk5_1_2_c" class="form-control border-input" id="pdmk5_1_2_c" value="{{json_decode($data_kprodi[2]->data)[0]}}" disabled="">
                                  <span>(0-100 %)</span>
                                </div>
                                @endslot
                                  @if($standar_status_code == 7)
                                    @slot('aksi_field')
                                        <select name="setuju_5_1_2_c" id="setuju_5_1_2_c" class="form-control border-input">
                                                <option value="1">Setuju</option>
                                                <option value="0" @if(!$dataCheck) @if($data[2]->data != $data_kprodi[2]->data) selected @endif @endif>Validasi</option>
                                        </select>
                                    @endslot
                                  @endif
                          @endisset
                       @endcomponent

                       @component('auditor.validasi_auditor')
                        @slot("catatan") @if(sizeof($data)!=0) {{ $data[2]->catatan or '' }} @endif @endslot
                          @slot('id_input')
                            5_1_2_c
                          @endslot
                            @slot('validasi_auditor')
                            <div class="form-group col-md-3">
                              <small>mata kuliah yang memiliki deskripsi, silabus dan SAP</small>
                                <input type="number" min=0 step=0.01 name="pdmk5_1_2_c" class="form-control border-input" id="pdmk5_1_2_c" value="@if(!$dataCheck){{json_decode($data[2]->data)[0]}}@endif" required="">
                              <span>(0-100 %)</span>
                            </div>
                            @endslot
                       @endcomponent
                      </div>
                    </div>
                  </li>

                  <li class="row">
                      <div class="col-md-12 komponen">
                          <div class="pull-left nomor">5.1.3.a</div>
                          <div class="deskriptor pull-left">
                                    <strong>
                                      Pelaksanaan pembelajaran memiliki mekanisme untuk memonitori, mengkaji, dan memperbaiki setiap semester tentang:
                                      <ol>
                                            <li>Kehadiran mahasiswa </li>
                                            <li>Kehadiran dosen </li>
                                            <li>Materikuliah </li>
                                      </ol>
                                    </strong>
                                    @component("auditor.isiangket")
                                      @isset($data_kprodi[3])
                                        @slot('skor')
                                          {{$data_kprodi[3]->kategori}}
                                        @endslot
                                          @slot('isian_angket')
                                                  <div class="col-md-8">
                                                      <select name="standar5_1_3_a" id="" class="form-control border-input" disabled="">
                                                          <option disabled="" selected="">--Pilih--</option>
                                                          <option value="1" @if(json_decode($data_kprodi[3]->data)[0] == 1) {{"selected"}} @endif>Tidak ada monitoring</option>
                                                          <option value="2" @if(json_decode($data_kprodi[3]->data)[0] == 2) {{"selected"}} @endif>Ada monitoring tetapi tidak ada evaluasi</option>
                                                          <option value="3" @if(json_decode($data_kprodi[3]->data)[0] == 3) {{"selected"}} @endif>Ada monitoring, evaluasi tidak kontinu</option>
                                                          <option value="4" @if(json_decode($data_kprodi[3]->data)[0] == 4) {{"selected"}} @endif>Ada monitoring dan evaluasi secara kontinu</option>
                                                      </select>
                                                  </div>
                                  @endslot
                                      @if($standar_status_code==7)
                                        @slot('aksi_field')
                                        <select name="setuju_5_1_3_a" id="setuju_5_1_3_a" class="form-control border-input">
                                                     <option value="1">Setuju</option>
                                                     <option value="0" @if(!$dataCheck) @if($data[3]->data != $data_kprodi[3]->data) selected @endif @endif>Validasi</option>
                                             </select>
                                        @endslot
                                      @endif
                              @endisset
                            @endcomponent

                            @component("auditor.validasi_auditor")
                              @slot("catatan") @if(sizeof($data)!=0) {{ $data[3]->catatan or '' }} @endif @endslot
                              @slot('id_input')
                                5_1_3_a
                              @endslot
                                @slot('validasi_auditor')
                                <div class="col-md-8">
                                    <select name="standar5_1_3_a" id="" class="form-control border-input" required="">
                                        <option disabled="" selected="">--Pilih--</option>
                                        <option value="1" @if(!$dataCheck) @if(json_decode($data[3]->data)[0] == 1) {{"selected"}} @endif @endif>Tidak ada monitoring</option>
                                        <option value="2" @if(!$dataCheck) @if(json_decode($data[3]->data)[0] == 2) {{"selected"}} @endif @endif>Ada monitoring tetapi tidak ada evaluasi</option>
                                        <option value="3" @if(!$dataCheck) @if(json_decode($data[3]->data)[0] == 3) {{"selected"}} @endif @endif>Ada monitoring, evaluasi tidak kontinu</option>
                                        <option value="4" @if(!$dataCheck) @if(json_decode($data[3]->data)[0] == 4) {{"selected"}} @endif @endif>Ada monitoring dan evaluasi secara kontinu</option>
                                    </select>
                                </div>
                                @endslot
                            @endcomponent
                        </div>
                      </div>
                  </li>

                  <li class="row">
                      <div class="col-md-12 komponen">
                          <div class="pull-left nomor">5.3.2</div>
                          <div class="deskriptor pull-left">

                               <strong>
                                 Mutu soal ujian untuk lima matakuliah dan kesesuaian dengan GBPP/SAP
                               </strong>

                               @component("auditor.isiangket")
                                  @isset($data_kprodi[4])
                                    @slot('skor')
                                      {{$data_kprodi[4]->kategori}}
                                    @endslot
                                        @slot('isian_angket')
                                          <div class="col-md-8">
                                              <select name="standar5_3_2" id="" class="form-control border-input" disabled="">
                                                 <option disabled="" selected="">--Pilih--</option>
                                                 <option value="0" @if(json_decode($data_kprodi[4]->data)[0] == 0) {{"selected"}} @endif>Semua soal ujian tidak bermutu atau tidak sesuai dengan GBPP/SAP</option>
                                                 <option value="1" @if(json_decode($data_kprodi[4]->data)[0] == 1) {{"selected"}} @endif>Hanya satu contoh soal ujian yang mutunya baik, dan sesuai denganGBPP/SAP</option>
                                                 <option value="2" @if(json_decode($data_kprodi[4]->data)[0] == 2) {{"selected"}} @endif>Dua s.d. tiga contoh soal ujian yang mutunya baik, dansesuai dengan GBPP/SAP</option>
                                                 <option value="3" @if(json_decode($data_kprodi[4]->data)[0] == 3) {{"selected"}} @endif>Empat dari lima contoh soal ujian yang mutunya baik, dan sesuai denganGBPP/SAP</option>
                                                 <option value="4" @if(json_decode($data_kprodi[4]->data)[0] == 4) {{"selected"}} @endif>Mutu soal ujian untuk lima matakuliah yang diberkan semuanyabermutu baik, dan sesuai dengan GBPP/</option>
                                              </select>
                                          </div>
                                        @endslot
                                          @if($standar_status_code ==7)
                                              @slot('aksi_field')
                                              <select name="setuju_5_3_2" id="setuju_5_3_2" class="form-control border-input">
                                                     <option value="1">Setuju</option>
                                                     <option value="0" @if(!$dataCheck) @if($data[4]->data != $data_kprodi[4]->data) selected @endif @endif>Validasi</option>
                                             </select>
                                              @endslot
                                          @endif
                                  @endisset
                               @endcomponent

                               @component("auditor.validasi_auditor")
                                @slot("catatan") @if(sizeof($data)!=0) {{ $data[4]->catatan or '' }} @endif @endslot
                                  @slot('id_input')
                                      5_3_2
                                  @endslot
                                    @slot('validasi_auditor')
                                    <div class="col-md-8">
                                        <select name="standar5_3_2" id="" class="form-control border-input" required="">
                                           <option disabled="" selected="">--Pilih--</option>
                                            <option value="0" @if(!$dataCheck) @if(json_decode($data[4]->data)[0] == 0) {{"selected"}} @endif @endif>Semua soal ujian tidak bermutu atau tidak sesuai dengan GBPP/SAP</option>
                                            <option value="1" @if(!$dataCheck) @if(json_decode($data[4]->data)[0] == 1) {{"selected"}} @endif @endif>Hanya satu contoh soal ujian yang mutunya baik, dan sesuai denganGBPP/SAP</option>
                                            <option value="2" @if(!$dataCheck) @if(json_decode($data[4]->data)[0] == 2) {{"selected"}} @endif @endif>Dua s.d. tiga contoh soal ujian yang mutunya baik, dansesuai dengan GBPP/SAP</option>
                                            <option value="3" @if(!$dataCheck) @if(json_decode($data[4]->data)[0] == 3) {{"selected"}} @endif @endif>Empat dari lima contoh soal ujian yang mutunya baik, dan sesuai denganGBPP/SAP</option>
                                            <option value="4" @if(!$dataCheck) @if(json_decode($data[4]->data)[0] == 4) {{"selected"}} @endif @endif>Mutu soal ujian untuk lima matakuliah yang diberkan semuanyabermutu baik, dan sesuai dengan GBPP/</option>
                                        </select>
                                    </div>
                                    @endslot
                               @endcomponent
                          </div>
                      </div>
                  </li>

                  <li class="row">
                      <div class="col-md-12 komponen">
                          <div class="pull-left nomor">5.4.1.a</div>
                          <div class="deskriptor pull-left">
                            <div class="row">
                              <strong>
                                Rata - rata banyaknya mahasiswa per dosen Pembimbing Akademik (PA) per semester
                              </strong>
                            </div>
                            @component("auditor.isiangket")
                                @isset($data_kprodi[5])
                                  @slot('skor')
                                      {{$data_kprodi[5]->kategori}}
                                  @endslot
                                    @slot('isian_angket')
                                    <div class="form-group col-md-12 form-inline">
                                      <input type="number" min=0 step=0.01 name="rmpa5_4_1_a" class="form-control border-input" id="rmpa5_4_1_a" value="{{json_decode($data_kprodi[5]->data)[0]}}" disabled="">
                                      <small>Pertemuan</small>
                                    </div>
                                    @endslot
                                      @if($standar_status_code == 7)
                                        @slot('aksi_field')
                                                    <select name="setuju_5_4_1_a" id="setuju_5_4_1_a" class="form-control border-input">
                                                             <option value="1">Setuju</option>
                                                             <option value="0" @if(!$dataCheck) @if($data[5]->data != $data_kprodi[5]->data) selected @endif @endif>Validasi</option>
                                                     </select>
                                        @endslot
                                      @endif
                                @endisset
                            @endcomponent

                            @component("auditor.validasi_auditor")
                              @slot("catatan") @if(sizeof($data)!=0) {{ $data[5]->catatan or '' }} @endif @endslot
                              @slot('id_input')
                                5_4_1_a
                              @endslot
                                @slot('validasi_auditor')
                                <div class="form-group col-md-12 form-inline">
                                  <input type="number" min=0 step=0.01 name="rmpa5_4_1_a" class="form-control border-input" id="rmpa5_4_1_a" value="@if(!$dataCheck){{json_decode($data[5]->data)[0]}}@endif" required="">
                                  <small>Pertemuan</small>
                                </div>
                                @endslot
                            @endcomponent





                      </div>
                    </div>
                  </li>

                  <li class="row">
                      <div class="col-md-12 komponen">
                          <div class="pull-left nomor">5.4.1.c</div>
                          <div class="deskriptor pull-left">

                              <strong>
                              Jumlah rata - rata pertemuan pembimbing per mahasiswa per semester
                              </strong>

                              @component("auditor.isiangket")
                                @isset($data_kprodi[6])
                                  @slot('skor')
                                      {{$data_kprodi[6]->kategori}}
                                  @endslot
                                    @slot('isian_angket')
                                    <div class="form-group col-md-12 form-inline">
                                      <input type="number" min=0 step=0.01 name="rmpa5_4_1_c" class="form-control border-input" id="rmpa5_4_1_c" value="{{json_decode($data_kprodi[6]->data)[0]}}" disabled="">
                                      <small>Pertemuan</small>
                                    </div>
                                    @endslot
                                        @if($standar_status_code == 7)
                                          @slot('aksi_field')
                                          <select name="setuju_5_4_1_c" id="setuju_5_4_1_c" class="form-control border-input">
                                                   <option value="1">Setuju</option>
                                                   <option value="0" @if(!$dataCheck) @if($data[6]->data != $data_kprodi[6]->data) selected @endif @endif>Validasi</option>
                                           </select>
                                          @endslot
                                        @endif
                                @endisset
                              @endcomponent

                              @component("auditor.validasi_auditor")
                                @slot("catatan") @if(sizeof($data)!=0) {{ $data[6]->catatan or '' }} @endif @endslot
                                @slot('id_input')
                                  5_4_1_c
                                @endslot
                                  @slot('validasi_auditor')
                                  <div class="form-group col-md-12 form-inline">
                                    <input type="number" min=0 step=0.01 name="rmpa5_4_1_c" class="form-control border-input" id="rmpa5_4_1_c" value="@if(!$dataCheck){{json_decode($data[6]->data)[0]}}@endif" required="">
                                    <small>Pertemuan</small>
                                  </div>
                                  @endslot
                              @endcomponent
                            </div>
                      </div>
                  </li>

                  <li class="row">
                      <div class="col-md-12 komponen">
                          <div class="pull-left nomor">5.4.2</div>
                          <div class="deskriptor pull-left">

                              <div class="row">
                                <strong>
                                Efektifitas kegiatan perwalian
                                </strong>
                              </div>

                              @component("auditor.isiangket")
                                  @isset($data_kprodi[7])
                                    @slot('skor')
                                        {{$data_kprodi[7]->kategori}}
                                    @endslot
                                      @slot('isian_angket')
                                              <div class="col-md-8">
                                                  <select name="standar5_4_2" id="" class="form-control border-input" disabled="">
                                                    <option disabled="" selected="">--Pilih--</option>
                                                    <option value="0" @if(json_decode($data_kprodi[7]->data)[0] == 0) {{"selected"}} @endif>Sistem bantuan dan bimbingan akademik tidak jalan, atau tidak ada bimbingan</option>
                                                    <option value="1" @if(json_decode($data_kprodi[7]->data)[0] == 1) {{"selected"}} @endif>Sistem bantuan dan bimbingan akademik tidak efektif</option>
                                                    <option value="2" @if(json_decode($data_kprodi[7]->data)[0] == 2) {{"selected"}} @endif>Sistem bantuan dan bimbingan akademik cukup efektif</option>
                                                    <option value="3" @if(json_decode($data_kprodi[7]->data)[0] == 3) {{"selected"}} @endif>Simtem bimbingan akademik efektif</option>
                                                    <option value="4" @if(json_decode($data_kprodi[7]->data)[0] == 4) {{"selected"}} @endif>Sistem bimbingan akademik sangat efektif</option>
                                                  </select>
                                            </div>
                                      @endslot
                                          @if($standar_status_code ==7)
                                              @slot('aksi_field')
                                              <select name="setuju_5_4_2" id="setuju_5_4_2" class="form-control border-input">
                                                   <option value="1">Setuju</option>
                                                   <option value="0" @if(!$dataCheck) @if($data[7]->data != $data_kprodi[7]->data) selected @endif @endif>Validasi</option>
                                           </select>
                                              @endslot
                                          @endif
                                  @endisset
                              @endcomponent

                              @component("auditor.validasi_auditor")
                                @slot("catatan") @if(sizeof($data)!=0) {{ $data[7]->catatan or '' }} @endif @endslot
                                @slot('id_input')
                                  5_4_2
                                @endslot
                                @slot('validasi_auditor')
                                    <select name="standar5_4_2" id="" class="form-control border-input" required="">
                                      <option disabled="" selected="">--Pilih--</option>
                                      <option value="0" @if(!$dataCheck) @if(json_decode($data[7]->data)[0] == 0) {{"selected"}} @endif @endif>Sistem bantuan dan bimbingan akademik tidak jalan, atau tidak ada bimbingan</option>
                                      <option value="1" @if(!$dataCheck) @if(json_decode($data[7]->data)[0] == 1) {{"selected"}} @endif @endif>Sistem bantuan dan bimbingan akademik tidak efektif</option>
                                      <option value="2" @if(!$dataCheck) @if(json_decode($data[7]->data)[0] == 2) {{"selected"}} @endif @endif>Sistem bantuan dan bimbingan akademik cukup efektif</option>
                                      <option value="3" @if(!$dataCheck) @if(json_decode($data[7]->data)[0] == 3) {{"selected"}} @endif @endif>Simtem bimbingan akademik efektif</option>
                                      <option value="4" @if(!$dataCheck) @if(json_decode($data[7]->data)[0] == 4) {{"selected"}} @endif @endif>Sistem bimbingan akademik sangat efektif</option>
                                    </select>
                                @endslot
                              @endcomponent
                        </div>
                      </div>
                  </li>
                  <li class="row">

                      <div class="col-md-12 komponen">
                          <div class="pull-left nomor">5.5.1.b</div>
                          <div class="deskriptor pull-left">
                            <div class="row">
                              <strong>
                                Rata - rata mahasiswa per dosen pembimbing tugas akhir
                              </strong>
                            </div>

                            @component("auditor.isiangket")
                                  @isset($data_kprodi[8])
                                    @slot('skor')
                                      {{$data_kprodi[8]->kategori}}
                                    @endslot
                                    @slot('isian_angket')
                                    <div class="form-group col-md-12 form-inline">
                                      <input type="number" min=0 step=0.01 name="rmta_5_5_1_b" class="form-control border-input" id="rmta_5_5_1_b" value="{{json_decode($data_kprodi[8]->data)[0]}}" disabled="">
                                      <small>Pertemuan </small>
                                    </div>
                                    @endslot

                                      @if($standar_status_code ==7)
                                        @slot('aksi_field')
                                        <select name="setuju_5_5_1_b" id="setuju_5_5_1_b" class="form-control border-input">
                                                   <option value="1">Setuju</option>
                                                   <option value="0" @if(!$dataCheck) @if($data[8]->data != $data_kprodi[8]->data) selected @endif @endif>Validasi</option>
                                           </select>
                                        @endslot
                                      @endif
                                  @endisset
                            @endcomponent

                            @component("auditor.validasi_auditor")
                              @slot("catatan") @if(sizeof($data)!=0) {{ $data[8]->catatan or '' }} @endif @endslot
                                @slot('id_input')
                                  5_5_1_b
                                @endslot
                                @slot('validasi_auditor')
                                <div class="form-group col-md-12 form-inline">
                                  <input type="number" min=0 step=0.01 name="rmta5_5_1_b" class="form-control border-input" id="rmta5_5_1_b" value="@if(!$dataCheck){{json_decode($data[8]->data)[0]}}@endif" required="">

                                  <small>Pertemuan </small>
                                </div>
                                @endslot
                            @endcomponent
                          </div>
                      </div>

                  </li>

                  <li class="row">
                      <div class="col-md-12 komponen">
                          <div class="pull-left nomor">5.5.1.c</div>
                          <div class="deskriptor pull-left">
                            <div class="row">
                              <strong>
                                Rata - rata waktu penyelesaian penulisan tugas akhir
                              </strong>
                            </div>
                            @component("auditor.isiangket")
                                   @isset ($data_kprodi[9])
                                        @slot('skor')
                                          {{$data_kprodi[9]->kategori}}
                                        @endslot
                                        @slot('isian_angket')
                                                    <div class="form-group col-md-12 form-inline">
                                                      <input type="number" min=0 step=0.01 name="5_5_1_c_rbta" class="form-control border-input" id="5_5_1_c_rbta" value="{{json_decode($data_kprodi[9]->data)[0]}}" disabled="">
                                                      <small>Pertemuan </small>
                                                    </div>
                                @endslot
                                       @if ($standar_status_code == 7)
                                             @slot('aksi_field')
                                                <select name="setuju_5_5_1_c" id="setuju_5_5_1_c" class="form-control border-input">
                                                    <option value="1">Setuju</option>
                                                    <option value="0" @if(!$dataCheck) @if($data[9]->data != $data_kprodi[9]->data) selected @endif @endif>Validasi</option>
                                                </select>
                                       @endslot
                                       @endif
                                 @endisset
                                @endcomponent


                                @component("auditor.validasi_auditor")
                                  @slot("catatan") @if(sizeof($data)!=0) {{ $data[9]->catatan or '' }} @endif @endslot
                                      @slot('id_input')
                                            5_5_1_c
                                      @endslot
                                      @slot('validasi_auditor')
                                                <div class="form-group col-md-12 form-inline">
                                                  <input type="number" min=0 step=0.01 name="rbta5_5_1_c" class="form-control border-input" id="rbta5_5_1_c" value="@if(!$dataCheck){{json_decode($data[9]->data)[0]}}@endif" required="">
                                                  <small>Pertemuan </small>
                                                </div>
                                      @endslot
                                @endcomponent





                          </div>
                      </div>
                    </li>

                  <li class="row">
                      <div class="col-md-12 komponen">
                          <div class="pull-left nomor">5.5.2</div>
                          <div class="deskriptor pull-left">
                            <div class="row">
                              <strong>Upaya perbaikan sistem pembelajaran yang telah dilakukan selama tiga tahun terakhir berkaitan dengan:
                                <ol>
                                <li>Materi </li>
                                <li>Metode pembelajaran </li>
                                <li>Penggunaan teknologi pembelajaran </li>
                                <li>Cara - cara evaluasi </li>
                              </ol>
                              </strong>
                             </div>
                             @component("auditor.isiangket")
                                @isset ($data_kprodi[10])
                                     @slot('skor')
                                       {{$data_kprodi[10]->kategori}}
                                     @endslot
                                     @slot('isian_angket')

                                          <select name="standar5_5_2" id="" class="form-control border-input" disabled="">
                                                    <option value="0" @if(json_decode($data_kprodi[10]->data)[0] == 0) {{"selected"}} @endif>Struktur kurikulum tugas akhir dijadwalkan selesai dalam satu semester</option>
                                                    <option value="1" @if(json_decode($data_kprodi[10]->data)[0] == 1) {{"selected"}} @endif>Struktur kurikulum tugas akhir dijadwalkan selesai dalam dua semester</option>
                                          </select>

                                      <div class="form-grpu col-md-5 form-inline">
                                        <input type="number" min=0 step=0.01 name="rpta5_5_2" class="form-control border-input" id="5_5_2_rpta" value="{{json_decode($data_kprodi[10]->data)[0]}}" disabled="">

                                        <small>Bulan penyelesaian</small>
                                      </div>
                                   @endslot
                                         @if ($standar_status_code == 7)
                                               @slot('aksi_field')
                                                         <select name="setuju_5_5_2" id="setuju_5_5_2" class="form-control border-input">
                                                                 <option value="1">Setuju</option>
                                                                 <option value="0" @if(!$dataCheck) @if($data[10]->data != $data_kprodi[10]->data) selected @endif @endif>Validasi</option>
                                                         </select>
                                         @endslot
                                         @endif
                                   @endisset
                                  @endcomponent


                                  @component("auditor.validasi_auditor")
                                    @slot("catatan") @if(sizeof($data)!=0) {{ $data[10]->catatan or '' }} @endif @endslot
                                          @slot('id_input')
                                                5_5_2
                                          @endslot
                                          @slot('validasi_auditor')
                                                        <select name="standar5_5_2" id="" class="form-control border-input" required="">
                                                                <option value="0" @if(!$dataCheck) @if(json_decode($data[10]->data)[0] == 0) {{"selected"}} @endif @endif>Struktur kurikulum tugas akhir dijadwalkan selesai dalam satu semester</option>
                                                                <option value="1" @if(!$dataCheck) @if(json_decode($data[10]->data)[0] == 1) {{"selected"}} @endif @endif>Struktur kurikulum tugas akhir dijadwalkan selesai dalam dua semester</option>
                                                        </select>

                                                    <div class="form-grpu col-md-5 form-inline">
                                                      <input type="number" min=0 step=1 name="rpta5_5_2" class="form-control border-input" min=1 id="5_5_2_rpta" value="@if(!$dataCheck){{json_decode($data[10]->data)[1]}}@endif" required="">
                                                      <small>Bulan penyelesaian</small>
                                                    </div>
                                          @endslot
                                    @endcomponent
                      </div>
                    </div>
                  </li>



                  <li class="row">
                      <div class="col-md-12 komponen">
                          <div class="pull-left nomor">5.7.2</div>
                          <div class="deskriptor pull-left">
                              <div class="row">
                                <strong>
                                  Ketersedian dan kelengkapan jenis prasarana, sarana serta dan yang memungkinkan terciptanya interaksi akademik atara sivitas akademika
                                </strong>
                              </div>
                              @component("auditor.isiangket")
                                 @isset ($data_kprodi[11])
                                      @slot('skor')
                                        {{$data_kprodi[11]->kategori}}
                                      @endslot
                                      @slot('isian_angket')
                                                        <div class="col-md-8">
                                                            <select name="standar5_7_2" id="" class="form-control border-input" disabled="">
                                                                <option value="1" @if(json_decode($data_kprodi[11]->data)[0] == 1) {{"selected"}} @endif>Prasarana utama masih kurang, demikian pula dengan dukungan dana.</option>
                                                                <option value="2" @if(json_decode($data_kprodi[11]->data)[0] == 2) {{"selected"}} @endif>Tersedia, cukup lengkap, milik sendiri atau sewa, dan dana yang cukup memadai.</option>
                                                                <option value="3" @if(json_decode($data_kprodi[11]->data)[0] == 3) {{"selected"}} @endif>Tersedia, milik sendiri, lengkap, dan dana yang memadai</option>
                                                                <option value="4" @if(json_decode($data_kprodi[11]->data)[0] == 4) {{"selected"}} @endif>Tersedia, milik sendiri, sangat lengkap dan dana yang sangat memadai</option>
                                                            </select>
                                                        </div>
                                      @endslot
                                      	@if ($standar_status_code == 7)
                                              @slot('aksi_field')
                                			                  <select name="setuju_5_7_2" id="setuju_5_7_2" class="form-control border-input">
                                                                <option value="1">Setuju</option>
                                                                <option value="0" @if(!$dataCheck) @if($data[11]->data != $data_kprodi[11]->data) selected @endif @endif>Validasi</option>
                                                        </select>
                                	      @endslot
                                        @endif
                                  @endisset
                                @endcomponent


                                @component("auditor.validasi_auditor")
                                  @slot("catatan") @if(sizeof($data)!=0) {{ $data[11]->catatan or '' }} @endif @endslot
                                        @slot('id_input')
                                              5_7_2
                                        @endslot
                                        @slot('validasi_auditor')
                                                  <div class="col-md-8">
                                                      <select name="standar5_7_2" id="" class="form-control border-input" required="">
                                                            <option value="1" @if(!$dataCheck) @if(json_decode($data[11]->data)[0] == 1) {{"selected"}} @endif @endif>Prasarana utama masih kurang, demikian pula dengan dukungan dana.</option>
                                                            <option value="2" @if(!$dataCheck) @if(json_decode($data[11]->data)[0] == 2) {{"selected"}} @endif @endif>Tersedia, cukup lengkap, milik sendiri atau sewa, dan dana yang cukup memadai.</option>
                                                            <option value="3" @if(!$dataCheck) @if(json_decode($data[11]->data)[0] == 3) {{"selected"}} @endif @endif>Tersedia, milik sendiri, lengkap, dan dana yang memadai</option>
                                                            <option value="4" @if(!$dataCheck) @if(json_decode($data[11]->data)[0] == 4) {{"selected"}} @endif @endif>Tersedia, milik sendiri, sangat lengkap dan dana yang sangat memadai</option>
                                                      </select>
                                                  </div>
                                        @endslot
                                  @endcomponent
                            </div>
                      </div>
                  </li>



                <li class="row">
                      <div class="col-md-12 komponen">
                          <div class="pull-left nomor">5.7.3</div>
                          <div class="deskriptor pull-left">

                            <div class="row">
                              <strong>
                                Interaksi akademik berupa program dan kegiatan akademik,
                                selain perkuliahan dan tugas - tugas khusus, untuk
                                menciptakan suasana akademik (seminar, simposium,
                                lokakarya, bedah buku dll) dilaksanakan berapa bulan sekali.
                             </strong>
                           </div>

                           @component("auditor.isiangket")
                                @isset ($data_kprodi[12])
                                   @slot('skor')
                                     {{$data_kprodi[12]->kategori}}
                                   @endslot
                                   @slot('isian_angket')
                                             <div class="col-md-8">
                                               <select name="standar5_7_3" id="" class="form-control border-input" disabled="">
                                                 <option disabled="" selected="">--Pilih--</option>
                                                 <option value="1" @if(json_decode($data_kprodi[12]->data)[0] == 1) {{"selected"}} @endif>Kegiatan ilmiah yang terjadwal dilaksanakan lebih dari enam bulan sekali</option>
                                                 <option value="2" @if(json_decode($data_kprodi[12]->data)[0] == 2) {{"selected"}} @endif>Kegiatan ilmiah yang terjadwal dilaksanakan empat s.d. enam bulan sekali</option>
                                                 <option value="3" @if(json_decode($data_kprodi[12]->data)[0] == 3) {{"selected"}} @endif>Kegiatan ilmiah yang terjadwal dilaksanakan dua s.d tiga bulan sekali</option>
                                                 <option value="4" @if(json_decode($data_kprodi[12]->data)[0] == 4) {{"selected"}} @endif>Kegiatan ilmiah yang terjadwal dilaksanakan setiap bulan</option>
                                               </select>
                                             </div>
                                   @endslot
                                     @if ($standar_status_code == 7)
                                           @slot('aksi_field')
                                                    <select name="setuju_5_7_3" id="setuju_5_7_3" class="form-control border-input">
                                                             <option value="1">Setuju</option>
                                                             <option value="0" @if(!$dataCheck) @if($data[12]->data != $data_kprodi[12]->data) selected @endif @endif>Validasi</option>
                                                     </select>
                                     @endslot
                                     @endif
                                @endisset
                                @endcomponent


                                @component("auditor.validasi_auditor")
                                  @slot("catatan") @if(sizeof($data)!=0) {{ $data[12]->catatan or '' }} @endif @endslot
                                    @slot('id_input')
                                          5_7_3
                                    @endslot
                                    @slot('validasi_auditor')
                                                  <div class="col-md-8">
                                                    <select name="standar5_7_3" id="" class="form-control border-input" required="">
                                                      <option disabled="" selected="">--Pilih--</option>
                                                      <option value="1" @if(!$dataCheck) @if(json_decode($data[12]->data)[0] == 1) {{"selected"}} @endif @endif>Kegiatan ilmiah yang terjadwal dilaksanakan lebih dari enam bulan sekali</option>
                                                      <option value="2" @if(!$dataCheck) @if(json_decode($data[12]->data)[0] == 2) {{"selected"}} @endif @endif>Kegiatan ilmiah yang terjadwal dilaksanakan empat s.d. enam bulan sekali</option>
                                                      <option value="3" @if(!$dataCheck) @if(json_decode($data[12]->data)[0] == 3) {{"selected"}} @endif @endif>Kegiatan ilmiah yang terjadwal dilaksanakan dua s.d tiga bulan sekali</option>
                                                      <option value="4" @if(!$dataCheck) @if(json_decode($data[12]->data)[0] == 4) {{"selected"}} @endif @endif>Kegiatan ilmiah yang terjadwal dilaksanakan setiap bulan</option>
                                                    </select>
                                                  </div>
                                    @endslot
                              @endcomponent
                          </div>
                      </div>
                </li>

                  <li class="row">
                      <div class="col-md-12 komponen">
                          <div class="pull-left nomor">5.7.5</div>
                          <div class="deskriptor pull-left">

                            <div class="row">
                              <strong>
                                Pengembangan perilaku kecendekiawan.
                                Bentuk kegiatan antara lain dapat berupa:
                                <ol>
                                    <li>Kegiatan penanggulanagan kemiskinan</li>
                                    <li>Pelestarian lingkungan</li>
                                    <li>Peningkatan kesejahteraan masyarakat</li>
                                    <li>Kegiatan penanggulangan masalah ekonomi, politik,
                                    sosial, budaya, dan lingkungan lainnya</li>
                                </ol>
                              </strong>
                            </div>

                            @component("auditor.isiangket")
                                  @isset ($data_kprodi[13])
                                      @slot('skor')
                                        {{$data_kprodi[13]->kategori}}
                                      @endslot
                                      @slot('isian_angket')
                                                <div class="col-md-8">
                                                  <select name="standar5_7_5" id="" class="form-control border-input" disabled=""loca>
                                                    <option disabled="" selected="">--Pilih--</option>
                                                     <option value="1" @if(json_decode($data_kprodi[13]->data)[0] == 1) {{"selected"}} @endif>Kegiatan yang dilakukan tidak menunjang pengembangan perilaku kecendekiawanan</option>
                                                     <option value="2" @if(json_decode($data_kprodi[13]->data)[0] == 2) {{"selected"}} @endif>Kegiatan yang dilakukan cukup menunjang pengembangan perilaku kecendekiawanan</option>
                                                     <option value="3" @if(json_decode($data_kprodi[13]->data)[0] == 3) {{"selected"}} @endif>Kegiatan yang dilakukan menunjang pengembangan perilaku kecendekiawan</option>
                                                     <option value="4" @if(json_decode($data_kprodi[13]->data)[0] == 4) {{"selected"}} @endif>Kegiatan yang dilakukan sangat menunjang pengembangan perilaku kecendekiawan</option>
                                                  </select>
                                                </div>
                                      @endslot
                                        @if ($standar_status_code == 7)
                                              @slot('aksi_field')
                                                        <select name="setuju_5_7_5" id="setuju_5_7_5" class="form-control border-input">
                                                                <option value="1">Setuju</option>
                                                                <option value="0" @if(!$dataCheck) @if($data[13]->data != $data_kprodi[13]->data) selected @endif @endif>Validasi</option>
                                                        </select>
                                        @endslot
                                        @endif
                                  @endisset
                                  @endcomponent

                                  @component("auditor.validasi_auditor")
                                    @slot("catatan") @if(sizeof($data)!=0) {{ $data[13]->catatan or '' }} @endif @endslot
                                      @slot('id_input')
                                            5_7_5
                                      @endslot
                                      @slot('validasi_auditor')
                                      <div class="col-md-8">
                                        <select name="standar5_7_5" id="" class="form-control border-input" required="">
                                          <option disabled="" selected="">--Pilih--</option>
                                          <option value="1" @if(!$dataCheck) @if(json_decode($data[13]->data)[0] == 1) {{"selected"}} @endif @endif>Kegiatan yang dilakukan tidak menunjang pengembangan perilaku kecendekiawanan</option>
                                          <option value="2" @if(!$dataCheck) @if(json_decode($data[13]->data)[0] == 2) {{"selected"}} @endif @endif>Kegiatan yang dilakukan cukup menunjang pengembangan perilaku kecendekiawanan</option>
                                          <option value="3" @if(!$dataCheck) @if(json_decode($data[13]->data)[0] == 3) {{"selected"}} @endif @endif>Kegiatan yang dilakukan menunjang pengembangan perilaku kecendekiawan</option>
                                          <option value="4" @if(!$dataCheck) @if(json_decode($data[13]->data)[0] == 4) {{"selected"}} @endif @endif>Kegiatan yang dilakukan sangat menunjang pengembangan perilaku kecendekiawan</option>
                                        </select>
                                      </div>
                                      @endslot
                                @endcomponent
                          </div>
                      </div>
                  </li>
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

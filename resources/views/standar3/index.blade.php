@extends("layout")
@section("content")
<div class="col-md-12">
    <div class="card">
        <div class="header">
            <h4 class="title">Mahasiswa dan Lulusan</h4>
            <p class="category">Standar 3</p>
        </div>
        <div class="content">
            <form action="/standar3/save" method="post" class="kuesioner">
              {{ csrf_field() }}

              <fieldset>

                  <ul class="list-unstyled">
                      <li class="row">
                          <div class="col-md-12 komponen">
                              <span class="nomor pull-left">3.1.1.a</span>
                              <div class="deskriptor pull-left">
                                   <strong>Rasio calon mahasiswa yang ikut seleksi : daya tampung  </strong>
                              </div>
                              <div class="dropdown pull-right">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                                  <b class="fa fa-ellipsis-v"></b>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-right"> 
                                      <li><a href="#" data-toggle="modal" data-target="#upload_file"  data-catatan="{{ $catatan_auditor["3.1.1.a"] or ' ' }}" data-kode="3.1.1.a">Catatan Auditor</a></li>
                                </ul>
                              </div>
                              
                          <div class="row">
                                     <div class="form-group col-md-3">
                                       <label for="n_3_1_1_mhs">Calon mahasiswa yang ikut seleksi</label>
                                       <input type="number" min=0 step=1  name="n_3_1_1_mhs" class="form-control border-input" id="3_1_1" value="@if(isset($data[0])){{json_decode($data[0]->data)[0]}}@endif" required="">
                                     </div>
                                     <div class="form-group col-md-3">
                                     <label for="n_3_1_1_daya">Daya tampung</label>
                                     <input type="number" min=0 step=1  name="n_3_1_1_daya" class="form-control border-input" id="3_1_1" value="@if(isset($data[0])){{json_decode($data[0]->data)[1]}}@endif" required="">
                                   </div>
                               </div>
                          </div>

                      </li>
                      <li class="row">
                          <div class="col-md-12 komponen">
                              <span class="nomor pull-left">3.1.1.b</span>
                              <div class="deskriptor pull-left">
                                   <strong>Rasio mahasiswa baru reguler yang melakukan registrasi : calon mahasiswa baru reguler yang lulus seleksi</strong>
                                </div>
                                <div class="dropdown pull-right">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                                  <b class="fa fa-ellipsis-v"></b>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-right"> 
                                      <li><a href="#" data-toggle="modal" data-target="#upload_file"  data-catatan="{{ $catatan_auditor["3.1.1.b"] or ' ' }}" data-kode="3.1.1.b">Catatan Auditor</a></li>
                                </ul>
                              </div>
                                <div class="row">
                                     <div class="form-group col-md-3">
                                       <label for="n_3_1_1_b1">Mahasiswa baru reguler yang melakukan registrasi</label>
                                       <input type="number" min=0 step=1 name="n_3_1_1_b1" class="form-control border-input" id="n_3_1_1_b" value="@if(isset($data[1])){{json_decode($data[1]->data)[0]}}@endif" required="">
                                     </div>
                                     <div class="form-group col-md-3">
                                     <label for="n_3_1_1_b2">Calon mahasiswa baru reguler yang lulus seleksi</label>
                                     <input type="number" min=0 step=1 name="n_3_1_1_b2" class="form-control border-input" id="n_3_1_1_b" value="@if(isset($data[1])){{json_decode($data[1]->data)[1]}}@endif" required="">
                                   </div>
                                 </div>
                              </div>
                          
                      </li>

                      <li class="row">
                          <div class="col-md-12 komponen">
                              <div class="pull-left nomor">3.1.1.c</div>
                              <div class="deskriptor pull-left">
                                  <strong>
                                  Rasio mahasiswa baru transfer terhadap mahasiswa baru bukan transfer.
                                  </strong>
                              </div>
                              <div class="dropdown pull-right">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                                  <b class="fa fa-ellipsis-v"></b>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-right"> 
                                      <li><a href="#" data-toggle="modal" data-target="#upload_file"  data-catatan="{{ $catatan_auditor["3.1.1.c"] or ' ' }}" data-kode="3.1.1.c">Catatan Auditor</a></li>
                                </ul>
                              </div>
                              <div class="row">
                                    <div class="form-group col-md-3">
                                      <label for="n_3_1_1_c1">Total mahasiswa baru transfer untuk program S1 reguler dan S1 non-reguler</label>
                                      <input type="number" min=0 step=1 name="n_3_1_1_c1" class="form-control border-input" id="n_3_1_1_c" value="@if(isset($data[2])){{json_decode($data[2]->data)[0]}}@endif" required="">
                                    </div>
                                    <div class="form-group col-md-3">
                                    <label for="n_3_1_1_c2">Total mahasiswa baru bukan transfer untuk program S1 reguler dan S1 non-reguler</label>
                                    <input type="number" min=0 step=1 name="n_3_1_1_c2" class="form-control border-input" id="n_3_1_1_c" value="@if(isset($data[2])){{json_decode($data[2]->data)[1]}}@endif" required="">
                                  </div>
                                </div>
                              </div>
                          
                      </li>

                      <li class="row">
                          <div class="col-md-12 komponen">
                              <div class="pull-left nomor">3.1.1.d</div>
                              <div class="deskriptor pull-left">
                                  <strong>
                                  Rata-rata Indeks Prestasi Kumulatif (IPK) selama lima tahun terakhir.
                                  </strong>
                              </div>
                              <div class="dropdown pull-right">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                                  <b class="fa fa-ellipsis-v"></b>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-right"> 
                                      <li><a href="#" data-toggle="modal" data-target="#upload_file"  data-catatan="{{ $catatan_auditor["3.1.1.d"] or ' ' }}" data-kode="3.1.1.d">Catatan Auditor</a></li>
                                </ul>
                              </div>
                              <div class="row">
                                    <div class="form-group col-md-3">
                                      <input type="number" min=0 step=0.01 name="n_3_1_1_d" class="form-control border-input" id="n_3_1_1_d" value="@if(isset($data[3])){{json_decode($data[3]->data)[0]}}@endif" required="">
                                    </div>
                                  </div>
                              </div>
                          
                      </li>

                      <li class="row">
                          <div class="col-md-12 komponen">
                              <div class="pull-left nomor">3.1.2</div>
                              <div class="deskriptor pull-left">
                                  <strong>
                                  Penerimaan mahasiswa non-reguler selayaknya tidak membuat beban dosen sangat berat, jauh melebihi beban ideal  (sekitar 12 sks).
                                  </strong>
                              </div>
                              <div class="dropdown pull-right">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                                  <b class="fa fa-ellipsis-v"></b>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-right"> 
                                      <li><a href="#" data-toggle="modal" data-target="#upload_file"  data-catatan="{{ $catatan_auditor["3.1.2"] or ' ' }}" data-kode="3.1.2">Catatan Auditor</a></li>
                                </ul>
                              </div>
                              <div class="row">
                                    <div class="form-group col-md-3">
                                      <select name="n_3_1_2" id="" class="form-control border-input" required="">
                                          <option disabled selected >--Pilih--</option>
                                          <option value="0" @if(isset($data[4])) @if(json_decode($data[4]->data)[0] == 0) {{ "selected" }}@endif @endif >Jumlah mahasiswa yang diterima mengakibatkan beban dosen sangat berat, melebihi 19 sks.</option>
                                          <option value="1" @if(isset($data[4])) @if(json_decode($data[4]->data)[0] == 1) {{ "selected" }}@endif @endif >Jumlah mahasiswa yang diterima mengakibatkan beban dosen relatif berat, yaitu lebih dari 17 s.d. 19 sks.</option>
                                          <option value="2" @if(isset($data[4])) @if(json_decode($data[4]->data)[0] == 2) {{ "selected" }}@endif @endif >Jumlah mahasiswa yang diterima masih memungkinkan dosen mengajar seluruh mahasiswa dengan total beban lebih dari 15  s.d. 17 sks.</option>
                                          <option value="3" @if(isset($data[4])) @if(json_decode($data[4]->data)[0] == 3) {{ "selected" }}@endif @endif >Jumlah mahasiswa yang diterima masih memungkinkan dosen mengajar seluruh mahasiswa dengan total beban lebih dari 13  s.d. 15 sks</option>
                                          <option value="4" @if(isset($data[4])) @if(json_decode($data[4]->data)[0] == 4) {{ "selected" }}@endif @endif >Jumlah mahasiswa yang diterima masih memungkinkan dosen mengajar seluruh mahasiswa dengan total beban mendekati ideal, yaitu kurang atau sama dengan 13 sks.</option>
                                      </select>
                                    </div>
                                  </div>
                              </div>
                            
                      </li>

                      <li class="row">
                          <div class="col-md-12 komponen">
                              <div class="pull-left nomor">3.1.3</div>
                              <div class="deskriptor pull-left">
                                  <strong>
                                  Penghargaan atas prestasi mahasiswa di bidang nalar, bakat dan minat
                                  </strong>
                              </div>
                              <div class="dropdown pull-right">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                                  <b class="fa fa-ellipsis-v"></b>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-right"> 
                                      <li><a href="#" data-toggle="modal" data-target="#upload_file"  data-catatan="{{ $catatan_auditor["3.1.3"] or ' ' }}" data-kode="3.1.3">Catatan Auditor</a></li>
                                </ul>
                              </div>
                              <div class="row">
                                    <div class="form-group col-md-3">
                                      <select name="n_3_1_3" id="" class="form-control border-input" required="">
                                        <option disabled selected >--Pilih--</option>
                                        <option value="1" @if(isset($data[5])) @if(json_decode($data[5]->data)[0] == 1) {{ "selected" }}@endif @endif >Tidak ada</option>
                                        <option value="2" @if(isset($data[5])) @if(json_decode($data[5]->data)[0] == 2) {{ "selected" }}@endif @endif >Tingkat Lokal</option>
                                        <option value="3" @if(isset($data[5])) @if(json_decode($data[5]->data)[0] == 3) {{ "selected" }}@endif @endif >Tingkat Wilayah</option>
                                        <option value="4" @if(isset($data[5])) @if(json_decode($data[5]->data)[0] == 4) {{ "selected" }}@endif @endif >Tingkat Internasional</option>
                                      </select>
                                    </div>
                                  </div>
                              </div>
                          
                      </li>

                      <li class="row">
                          <div class="col-md-12 komponen">
                              <div class="pull-left nomor">3.1.4.a</div>
                              <div class="deskriptor pull-left">
                                  <strong>
                                  Persentase kelulusan tepat waktu
                                  </strong>
                              </div>
                              <div class="dropdown pull-right">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                                  <b class="fa fa-ellipsis-v"></b>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-right"> 
                                      <li><a href="#" data-toggle="modal" data-target="#upload_file"  data-catatan="{{ $catatan_auditor["3.1.4.a"] or ' ' }}" data-kode="3.1.4.a">Catatan Auditor</a></li>
                                </ul>
                              </div>
                              <div class="row">
                                    <div class="form-group col-md-3">
                                      <label for="f">Mahasiswa lulus tepat waktu</label>
                                      <input type="number" min=0 step=1 name="f" class="form-control border-input" id="f" value="@if(isset($data[6])){{json_decode($data[6]->data)[0]}}@endif" required="">
                                    </div>
                                    <div class="form-group col-md-3">
                                      <label for="d">Mahasiswa lulus</label>
                                      <input type="number" min=0 step=1 name="d" class="form-control border-input" id="d" value="@if(isset($data[6])){{json_decode($data[6]->data)[1]}}@endif" required="">
                                    </div>
                                  </div>
                              </div>
                          
                      </li>

                      <li class="row">
                          <div class="col-md-12 komponen">
                              <div class="pull-left nomor">3.1.4.b</div>
                              <div class="deskriptor pull-left">
                                  <strong>
                                  Persentase mahasiswa yang DO atau mengundurkan diri
                                  </strong>
                              </div>
                              <div class="dropdown pull-right">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                                  <b class="fa fa-ellipsis-v"></b>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-right"> 
                                      <li><a href="#" data-toggle="modal" data-target="#upload_file"  data-catatan="{{ $catatan_auditor["3.1.4.b"] or ' ' }}" data-kode="3.1.4.b">Catatan Auditor</a></li>
                                </ul>
                              </div>
                              <div class="row">
                                    <div class="form-group col-md-3">
                                      <label for="a">Jumlah mahasiswa</label>
                                      <input type="number" min=0 step=1 name="a3_1_4_b" class="form-control border-input" id="a" value="@if(isset($data[7])){{json_decode($data[7]->data)[0]}}@endif" required="">
                                    </div>
                                    <div class="form-group col-md-3">
                                      <label for="b">Banyaknya <em>Drop Out</em></label>
                                      <input type="number" min=0 step=1 name="b3_1_4_b" class="form-control border-input" id="b" value="@if(isset($data[7])){{json_decode($data[7]->data)[1]}}@endif" required="">
                                    </div>
                                    <div class="form-group col-md-4">
                                      <label for="c">Jumlah mahasiswa mengundurkan diri</label>
                                      <input type="number" min=0 step=1 name="c3_1_4_b" class="form-control border-input" id="c" value="@if(isset($data[7])){{json_decode($data[7]->data)[2]}}@endif" required="">
                                    </div>
                                  </div>
                              </div>
                          
                      </li>


                      <li class="row">
                          <div class="col-md-12 komponen">
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
                              <div class="dropdown pull-right">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                                  <b class="fa fa-ellipsis-v"></b>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-right"> 
                                      <li><a href="#" data-toggle="modal" data-target="#upload_file"  data-catatan="{{ $catatan_auditor["3.2.1"] or ' ' }}" data-kode="3.2.1">Catatan Auditor</a></li>
                                </ul>
                              </div>
                              <div class="row">
                                    <div class="form-group col-md-3">
                                      <select name="n_3_2_1" id="" class="form-control border-input" required="">
                                        <option disabled selected >--Pilih--</option>
                                        <option value="0" @if(isset($data[8])) @if(json_decode($data[8]->data)[0] == 0) {{ "selected" }}@endif @endif >Kurang dari 2 unit pelayanan</option>
                                        <option value="1" @if(isset($data[8])) @if(json_decode($data[8]->data)[0] == 1) {{ "selected" }}@endif @endif >2 jenis unit pelayanan</option>
                                        <option value="2" @if(isset($data[8])) @if(json_decode($data[8]->data)[0] == 2) {{ "selected" }}@endif @endif >Tersedia pelayanan nomor 1 dan 2</option>
                                        <option value="3" @if(isset($data[8])) @if(json_decode($data[8]->data)[0] == 3) {{ "selected" }}@endif @endif >Tersedia pelayanan nomor 1 s/d 3</option>
                                        <option value="4" @if(isset($data[8])) @if(json_decode($data[8]->data)[0] == 4) {{ "selected" }}@endif @endif >Semua tersedia</option>
                                      </select>
                                    </div>
                                  </div>
                              </div>
                          
                      </li>

                      <li class="row">
                          <div class="col-md-12 komponen">
                              <div class="pull-left nomor">3.2.2</div>
                              <div class="deskriptor pull-left">
                                  <strong>
                                  Kualitas layanan kepada mahasiswa Untuk setiap jenis pelayanan, pemberian skor sebagai berikut: <br/>4 : sangat baik, <br/>3 : baik, <br/>2: cukup, <br/>1: kurang, <br/>0: sangat kurang
                                  </strong>
                              </div>
                              <div class="dropdown pull-right">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                                  <b class="fa fa-ellipsis-v"></b>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-right"> 
                                      <li><a href="#" data-toggle="modal" data-target="#upload_file"  data-catatan="{{ $catatan_auditor["3.2.2"] or ' ' }}" data-kode="3.2.2">Catatan Auditor</a></li>
                                </ul>
                              </div>
                              <div class="row">
                                    <div class="form-group col-md-3">
                                      <select name="n_3_2_2" id="" class="form-control border-input" required="">
                                        <option disabled selected >--Pilih--</option>
                                        <option value="0" @if(isset($data[9])) @if(json_decode($data[9]->data)[0] == 0) {{ "selected" }}@endif @endif >0</option>
                                        <option value="1" @if(isset($data[9])) @if(json_decode($data[9]->data)[0] == 1) {{ "selected" }}@endif @endif >1</option>
                                        <option value="2" @if(isset($data[9])) @if(json_decode($data[9]->data)[0] == 2) {{ "selected" }}@endif @endif >2</option>
                                        <option value="3" @if(isset($data[9])) @if(json_decode($data[9]->data)[0] == 3) {{ "selected" }}@endif @endif >3</option>
                                        <option value="4" @if(isset($data[9])) @if(json_decode($data[9]->data)[0] == 4) {{ "selected" }}@endif @endif >4</option>
                                      </select>
                                    </div>
                                </div>
                              </div>
                          
                      </li>

                      <li class="row">
                          <div class="col-md-12 komponen">
                              <div class="pull-left nomor">3.3.1.b</div>
                              <div class="deskriptor pull-left">
                                  <strong>
                                 Penggunaan hasil pelacakan untuk perbaikan: (1) proses pembelajaran, (2) penggalangan dana, (3) informasi pekerjaan, (4) membangun jejaring.
                                  </strong>
                              </div>
                              <div class="dropdown pull-right">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                                  <b class="fa fa-ellipsis-v"></b>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-right"> 
                                      <li><a href="#" data-toggle="modal" data-target="#upload_file"  data-catatan="{{ $catatan_auditor["3.3.1.b"] or ' ' }}" data-kode="3.3.1.b">Catatan Auditor</a></li>
                                </ul>
                              </div>
                              <div class="row">
                                  <div class="col-md-3">
                                      <select name="n_3_3_1_b" id="" class="form-control border-input" required="">
                                          <option disabled selected >--Pilih--</option>
                                          <option value="0" @if(isset($data[10])) @if(json_decode($data[10]->data)[0] == 0) {{ "selected" }}@endif @endif >Tidak ada tindak lanjut</option>
                                          <option value="1" @if(isset($data[10])) @if(json_decode($data[10]->data)[0] == 1) {{ "selected" }}@endif @endif >Perbaikan 1 item</option>
                                          <option value="2" @if(isset($data[10])) @if(json_decode($data[10]->data)[0] == 2) {{ "selected" }}@endif @endif >Perbaikan 2 item</option>
                                          <option value="3" @if(isset($data[10])) @if(json_decode($data[10]->data)[0] == 3) {{ "selected" }}@endif @endif >Perbaikan 3 item</option>
                                          <option value="4" @if(isset($data[10])) @if(json_decode($data[10]->data)[0] == 4) {{ "selected" }}@endif @endif >Perbaikan 4 item</option>
                                      </select>
                                  </div>
                                </div>
                              </div>
                          
                      </li>

                      <li class="row">
                          <div class="col-md-12 komponen">
                              <div class="pull-left nomor">3.3.1.c</div>
                              <div class="deskriptor pull-left">
                                  <strong>
                                 Pendapat pengguna (employer) lulusan terhadap kualitas alumni. Ada 7 jenis kompetensi.
                                  </strong>
                              </div>
                              <div class="dropdown pull-right">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                                  <b class="fa fa-ellipsis-v"></b>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-right"> 
                                      <li><a href="#" data-toggle="modal" data-target="#upload_file"  data-catatan="{{ $catatan_auditor["3.3.1.c"] or ' ' }}" data-kode="3.3.1.c">Catatan Auditor</a></li>
                                </ul>
                              </div>
                              <div class="row">
                                    <div class="form-group col-md-3">
                                      <label for="a">Sangat Baik</label>
                                      <input type="number" min=0 step=1 name="a3_3_1_c" class="form-control border-input" id="a" value="@if(isset($data[11])){{json_decode($data[11]->data)[0]}}@endif" required="" min="0" max="700">
                                    </div>
                                    <div class="form-group col-md-3">
                                      <label for="b">Baik</label>
                                      <input type="number" min=0 step=1 name="b3_3_1_c" class="form-control border-input" id="b" value="@if(isset($data[11])){{json_decode($data[11]->data)[1]}}@endif" required="" min="0" max="700">
                                    </div>
                                    <div class="form-group col-md-3">
                                      <label for="c">Cukup</label>
                                      <input type="number" min=0 step=1 name="c3_3_1_c" class="form-control border-input" id="c" value="@if(isset($data[11])){{json_decode($data[11]->data)[2]}}@endif" required="" min="0" max="700">
                                    </div>
                                    <div class="form-group col-md-3">
                                      <label for="d">Kurang</label>
                                      <input type="number" min=0 step=1 name="d3_3_1_c" class="form-control border-input" id="d" value="@if(isset($data[11])){{json_decode($data[11]->data)[3]}}@endif" required="" min="0" max="700">
                                    </div>

                                  </div>
                                  <p id="msg_3_3_1_c" style="display: none">Total nilai (sangat baik+baik+cukup+kurang) <= 700</p>
                              </div>
                          
                      </li>
                      <li class="row">

                          <div class="col-md-12 komponen">
                              <div class="pull-left nomor">3.3.2</div>
                              <div class="deskriptor pull-left">
                                  <strong>
                                 Profil masa tunggu kerja pertama
                                  </strong>
                              </div>
                              <div class="dropdown pull-right">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                                  <b class="fa fa-ellipsis-v"></b>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-right"> 
                                      <li><a href="#" data-toggle="modal" data-target="#upload_file"  data-catatan="{{ $catatan_auditor["3.3.2"] or ' ' }}" data-kode="3.3.2">Catatan Auditor</a></li>
                                </ul>
                              </div>
                              <div class="row">
                                    <div class="form-group col-md-12 form-inline">
                                      <label for="n_3_3_2"></label>
                                      <input type="number" min=0 step=1 name="n_3_3_2" class="form-control border-input" id="n_3_3_2" value="@if(isset($data[12])){{json_decode($data[12]->data)[0]}}@endif" required="">
                                      <small>Rata-rata masa tunggu lulusan memperoleh pekerjaan yang pertama (dalam bulan)</small>
                                    </div>
                                  </div>
                              </div>
                          
                      </li>

                      <li class="row">
                          <div class="col-md-12 komponen">
                              <div class="pull-left nomor">3.3.3</div>
                              <div class="deskriptor pull-left">
                                  <strong>
                                 Profil kesesuaian bidang kerja dengan bidang studi
                                  </strong>
                              </div>
                              <div class="dropdown pull-right">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                                  <b class="fa fa-ellipsis-v"></b>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-right"> 
                                      <li><a href="#" data-toggle="modal" data-target="#upload_file"  data-catatan="{{ $catatan_auditor["3.3.3"] or ' ' }}" data-kode="3.3.3">Catatan Auditor</a></li>
                                </ul>
                              </div>
                              <div class="row">
                                    <div class="form-group col-md-12 form-inline">
                                      <label for="n_3_3_3"></label>
                                      <input type="number" min=0 step=1 name="n_3_3_3" class="form-control border-input" id="n_3_3_3" value="@if(isset($data[13])){{json_decode($data[13]->data)[0]}}@endif" required="">
                                      <span>%</span>
                                      <small>Persentase kesesuaian bidang kerja dengan bidang studi (keahlian) lulusan</small>
                                    </div>
                                  </div>
                              </div>

                        </li>

                      <li class="row">
                          <div class="col-md-12 komponen">
                              <div class="pull-left nomor">3.4.1</div>
                              <div class="deskriptor pull-left">
                                  <strong>
                                 Partisipasi alumni dalam mendukung pengembangan akademik program studi dalam bentuk: (1) Sumbangan dana, (2) Sumbangan fasilitas, (3) Keterlibatan dalam kegiatan akademik, (4) Pengembangan jejaring, (5) Penyediaan fasilitas untuk kegiatan akademik
                                  </strong>
                              </div>
                              <div class="dropdown pull-right">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                                  <b class="fa fa-ellipsis-v"></b>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-right"> 
                                      <li><a href="#" data-toggle="modal" data-target="#upload_file"  data-catatan="{{ $catatan_auditor["3.4.1"] or ' ' }}" data-kode="3.4.1">Catatan Auditor</a></li>
                                </ul>
                              </div>
                              <div class="row">
                                  <div class="col-md-5">
                                      <select required name="n_3_4_1" id="" class="form-control border-input">
                                          <option disabled selected >--Pilih--</option>
                                          <option value="0" @if(isset($data[14])) @if(json_decode($data[14]->data)[0] == 0) {{ "selected" }}@endif @endif >Tidak ada partisipasi alumni.</option>
                                          <option value="1" @if(isset($data[14])) @if(json_decode($data[14]->data)[0] == 1) {{ "selected" }}@endif @endif >Hanya 1 bentuk partisipasi saja yang dilakukan oleh alumni</option>
                                          <option value="2" @if(isset($data[14])) @if(json_decode($data[14]->data)[0] == 2) {{ "selected" }}@endif @endif >Hanya 2 bentuk partisipasi yang dilakukan oleh alumni.</option>
                                          <option value="3" @if(isset($data[14])) @if(json_decode($data[14]->data)[0] == 3) {{ "selected" }}@endif @endif >3-4 bentuk partisipasi dilakukan oleh alumni.</option>
                                          <option value="4" @if(isset($data[14])) @if(json_decode($data[14]->data)[0] == 4) {{ "selected" }}@endif @endif >Semua bentuk partisipasi dilakukan oleh alumni.</option>
                                      </select>
                                    </div>
                                  </div>
                              </div>
                          
                      </li>

                      <li class="row">
                          <div class="col-md-12 komponen">
                              <div class="pull-left nomor">3.4.2</div>
                              <div class="deskriptor pull-left">
                                  <strong>
                                 Partisipasi lulusan dan alumni dalam mendukung pengembangan non-akademik program studi dalam bentuk: (1) Sumbangan dana,(2) Sumbangan fasilitas, (3) Keterlibatan dalam kegiatan non akademik, (4) Pengembangan jejaring, (5) Penyediaan fasilitas untuk kegiatan non akademik.
                                  </strong>
                              </div>
                              <div class="dropdown pull-right">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                                  <b class="fa fa-ellipsis-v"></b>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-right"> 
                                      <li><a href="#" data-toggle="modal" data-target="#upload_file"  data-catatan="{{ $catatan_auditor["3.4.2"] or ' ' }}" data-kode="3.4.2">Catatan Auditor</a></li>
                                </ul>
                              </div>
                              <div class="row">
                                  <div class="col-md-5">
                                      <select name="n_3_4_2" id="" class="form-control border-input" required="">
                                        <option disabled selected >--Pilih--</option>
                                        <option value="0" @if(isset($data[15])) @if(json_decode($data[15]->data)[0] == 0) {{ "selected" }}@endif @endif >Tidak ada partisipasi alumni.</option>
                                        <option value="1" @if(isset($data[15])) @if(json_decode($data[15]->data)[0] == 1) {{ "selected" }}@endif @endif >Hanya 1 bentuk partisipasi saja yang dilakukan oleh alumni</option>
                                        <option value="2" @if(isset($data[15])) @if(json_decode($data[15]->data)[0] == 2) {{ "selected" }}@endif @endif >Hanya 2 bentuk partisipasi yang dilakukan oleh alumni.</option>
                                        <option value="3" @if(isset($data[15])) @if(json_decode($data[15]->data)[0] == 3) {{ "selected" }}@endif @endif >3-4 bentuk partisipasi dilakukan oleh alumni.</option>
                                        <option value="4" @if(isset($data[15])) @if(json_decode($data[15]->data)[0] == 4) {{ "selected" }}@endif @endif >Semua bentuk partisipasi dilakukan oleh alumni.</option>
                                      </select>
                                    </div>
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
      let kualitas_alumni = 0;


      $("input[name='a3_3_1_c'], input[name='b3_3_1_c'], input[name='c3_3_1_c'], input[name='d3_3_1_c']").change(function(){
        let input = $(event.relatedTarget);
        let sangat_baik = $("input[name='a3_3_1_c']").val();
        let baik = $("input[name='b3_3_1_c']").val();
        let cukup = $("input[name='c3_3_1_c']").val();
        let kurang = $("input[name='d3_3_1_c']").val();
        
        kualitas_alumni = parseInt(sangat_baik) + parseInt(baik) + parseInt(cukup) + parseInt(kurang);

        if(kualitas_alumni > 700){
          alert("poin 3.3.1.c maksimal 700");
          $(".footer button").attr("disabled", true);
          $("input[name='a3_3_1_c'], input[name='b3_3_1_c'], input[name='c3_3_1_c'], input[name='d3_3_1_c']").attr("max", 0);
          $("p#msg_3_3_1_c").show();
        }else{
          $(".footer button").attr("disabled", false);
          $("p#msg_3_3_1_c").hide();
          $("input[name='a3_3_1_c'], input[name='b3_3_1_c'], input[name='c3_3_1_c'], input[name='d3_3_1_c']").attr("max", 700);
        }

      });

    });
</script>

@endsection

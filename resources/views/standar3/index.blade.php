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

              <fieldset @if(sizeof($data)>0) disabled @endif>

                  <ul class="list-unstyled">
                      <li class="row">
                          <div class="col-md-11 komponen">
                              <span class="nomor pull-left">3.1.1.a</span>
                              <div class="deskriptor pull-left">
                                   <strong>Rasio calon mahasiswa yang ikut seleksi : daya tampung </strong>
                                   <div class="row">
                                     <div class="form-group col-md-3">
                                       <label for="n_3_1_1_mhs">Calon mahasiswa yang ikut seleksi</label>
                                       <input type="number" step=1  name="n_3_1_1_mhs" class="form-control border-input" id="3_1_1" value="<?php if(!$dataCheck) echo json_decode($data[0]->data)[0] ?>" required="">
                                     </div>
                                     <div class="form-group col-md-3">
                                     <label for="n_3_1_1_daya">Daya tampung</label>
                                     <input type="number" step=1  name="n_3_1_1_daya" class="form-control border-input" id="3_1_1" value="<?php if(!$dataCheck) echo json_decode($data[0]->data)[1] ?>" required="">
                                   </div>
                               </div>
                              </div>
                          </div>

                      </li>
                      <li class="row">
                          <div class="col-md-11 komponen">
                              <span class="nomor pull-left">3.1.1.b</span>
                              <div class="deskriptor pull-left">
                                   <strong>Rasio mahasiswa baru reguler yang melakukan registrasi : calon mahasiswa baru reguler yang lulus seleksi</strong>
                                   <div class="row">
                                     <div class="form-group col-md-3">
                                       <label for="n_3_1_1_b1">Mahasiswa baru reguler yang melakukan registrasi</label>
                                       <input type="number" step=1 name="n_3_1_1_b1" class="form-control border-input" id="n_3_1_1_b" value="<?php if(!$dataCheck) echo json_decode($data[1]->data)[0] ?>" required="">
                                     </div>
                                     <div class="form-group col-md-3">
                                     <label for="n_3_1_1_b2">Calon mahasiswa baru reguler yang lulus seleksi</label>
                                     <input type="number" step=1 name="n_3_1_1_b2" class="form-control border-input" id="n_3_1_1_b" value="<?php if(!$dataCheck) echo json_decode($data[1]->data)[1] ?>" required="">
                                   </div>
                                 </div>
                              </div>
                          </div>
                      </li>

                      <li class="row">
                          <div class="col-md-11 komponen">
                              <div class="pull-left nomor">3.1.1.c</div>
                              <div class="deskriptor pull-left">
                                  <strong>
                                  Rasio mahasiswa baru transfer terhadap mahasiswa baru bukan transfer.
                                  </strong>
                                  <div class="row">
                                    <div class="form-group col-md-3">
                                      <label for="n_3_1_1_c1">Total mahasiswa baru transfer untuk program S1 reguler dan S1 non-reguler</label>
                                      <input type="number" step=1 name="n_3_1_1_c1" class="form-control border-input" id="n_3_1_1_c" value="<?php if(!$dataCheck) echo json_decode($data[2]->data)[0] ?>" required="">
                                    </div>
                                    <div class="form-group col-md-3">
                                    <label for="n_3_1_1_c2">Total mahasiswa baru bukan transfer untuk program S1 reguler dan S1 non-reguler</label>
                                    <input type="number" step=1 name="n_3_1_1_c2" class="form-control border-input" id="n_3_1_1_c" value="<?php if(!$dataCheck) echo json_decode($data[2]->data)[1] ?>" required="">
                                  </div>
                                </div>
                              </div>
                          </div>
                      </li>

                      <li class="row">
                          <div class="col-md-11 komponen">
                              <div class="pull-left nomor">3.1.1.d</div>
                              <div class="deskriptor pull-left">
                                  <strong>
                                  Rata-rata Indeks Prestasi Kumulatif (IPK) selama lima tahun terakhir.
                                  </strong>
                                  <div class="row">
                                    <div class="form-group col-md-3">
                                      <input type="number" step=0.01 name="n_3_1_1_d" class="form-control border-input" id="n_3_1_1_d" value="<?php if(!$dataCheck) echo json_decode($data[3]->data)[0] ?>" required="">
                                    </div>
                                  </div>
                              </div>
                          </div>
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
                                      <select name="n_3_1_2" id="" class="form-control border-input">
                                          <option disabled selected >--Pilih--</option>
                                          <option value="0" <?php if(!$dataCheck){if(json_decode($data[4]->data)[0] == 0){echo "selected";}} ?>>Jumlah mahasiswa yang diterima mengakibatkan beban dosen sangat berat, melebihi 19 sks.</option>
                                          <option value="1" <?php if(!$dataCheck){if(json_decode($data[4]->data)[0] == 1){echo "selected";}} ?>>Jumlah mahasiswa yang diterima mengakibatkan beban dosen relatif berat, yaitu lebih dari 17 s.d. 19 sks.</option>
                                          <option value="2" <?php if(!$dataCheck){if(json_decode($data[4]->data)[0] == 2){echo "selected";}} ?>>Jumlah mahasiswa yang diterima masih memungkinkan dosen mengajar seluruh mahasiswa dengan total beban lebih dari 15  s.d. 17 sks.</option>
                                          <option value="3" <?php if(!$dataCheck){if(json_decode($data[4]->data)[0] == 3){echo "selected";}} ?>>Jumlah mahasiswa yang diterima masih memungkinkan dosen mengajar seluruh mahasiswa dengan total beban lebih dari 13  s.d. 15 sks</option>
                                          <option value="4" <?php if(!$dataCheck){if(json_decode($data[4]->data)[0] == 4){echo "selected";}} ?>>Jumlah mahasiswa yang diterima masih memungkinkan dosen mengajar seluruh mahasiswa dengan total beban mendekati ideal, yaitu kurang atau sama dengan 13 sks.</option>
                                      </select>
                                    </div>
                                  </div>
                              </div>
                            </div>
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
                                      <select name="n_3_1_3" id="" class="form-control border-input">
                                        <option disabled selected >--Pilih--</option>
                                        <option value="1" <?php if(!$dataCheck){if(json_decode($data[5]->data)[0] == 1){echo "selected";}} ?>>Tidak ada</option>
                                        <option value="2" <?php if(!$dataCheck){if(json_decode($data[5]->data)[0] == 2){echo "selected";}} ?>>Tingkat Lokal</option>
                                        <option value="3" <?php if(!$dataCheck){if(json_decode($data[5]->data)[0] == 3){echo "selected";}} ?>>Tingkat Wilayah</option>
                                        <option value="4" <?php if(!$dataCheck){if(json_decode($data[5]->data)[0] == 4){echo "selected";}} ?>>Tingkat Internasional</option>
                                      </select>
                                    </div>
                                  </div>
                              </div>
                          </div>
                      </li>

                      <li class="row">
                          <div class="col-md-11 komponen">
                              <div class="pull-left nomor">3.1.4.a</div>
                              <div class="deskriptor pull-left">
                                  <strong>
                                  Persentase kelulusan tepat waktu
                                  </strong>
                                  <div class="row">
                                    <div class="form-group col-md-3">
                                      <label for="f">Mahasiswa lulus tepat waktu</label>
                                      <input type="number" step=1 name="f" class="form-control border-input" id="f" value="<?php if(!$dataCheck) echo json_decode($data[6]->data)[0] ?>" required="">
                                    </div>
                                    <div class="form-group col-md-3">
                                      <label for="d">Mahasiswa lulus</label>
                                      <input type="number" step=1 name="d" class="form-control border-input" id="d" value="<?php if(!$dataCheck) echo json_decode($data[6]->data)[1] ?>" required="">
                                    </div>
                                  </div>
                              </div>
                          </div>
                      </li>

                      <li class="row">
                          <div class="col-md-11 komponen">
                              <div class="pull-left nomor">3.1.4.b</div>
                              <div class="deskriptor pull-left">
                                  <strong>
                                  Persentase mahasiswa yang DO atau mengundurkan diri
                                  </strong>
                                  <div class="row">
                                    <div class="form-group col-md-3">
                                      <label for="a">Jumlah mahasiswa</label>
                                      <input type="number" step=1 name="a3_1_4_b" class="form-control border-input" id="a" value="<?php if(!$dataCheck) echo json_decode($data[7]->data)[0] ?>" required="">
                                    </div>
                                    <div class="form-group col-md-3">
                                      <label for="b">Banyaknya <em>Drop Out</em></label>
                                      <input type="number" step=1 name="b3_1_4_b" class="form-control border-input" id="b" value="<?php if(!$dataCheck) echo json_decode($data[7]->data)[1] ?>" required="">
                                    </div>
                                    <div class="form-group col-md-3">
                                      <label for="c">Jumlah mahasiswa mengundurkan diri</label>
                                      <input type="number" step=1 name="c3_1_4_b" class="form-control border-input" id="c" value="<?php if(!$dataCheck) echo json_decode($data[7]->data)[2] ?>" required="">
                                    </div>
                                  </div>
                              </div>
                          </div>
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
                                  <div class="row">
                                    <div class="form-group col-md-3">
                                      <select name="n_3_2_1" id="" class="form-control border-input">
                                        <option disabled selected >--Pilih--</option>
                                        <option value="0" <?php if(!$dataCheck){if(json_decode($data[8]->data)[0] == 0){echo "selected";}} ?>>Kurang dari 2 unit pelayanan</option>
                                        <option value="1" <?php if(!$dataCheck){if(json_decode($data[8]->data)[0] == 1){echo "selected";}} ?>>2 jenis unit pelayanan</option>
                                        <option value="2" <?php if(!$dataCheck){if(json_decode($data[8]->data)[0] == 2){echo "selected";}} ?>>Tersedia pelayanan nomor 1 dan 2</option>
                                        <option value="3" <?php if(!$dataCheck){if(json_decode($data[8]->data)[0] == 3){echo "selected";}} ?>>Tersedia pelayanan nomor 1 s/d 3</option>
                                        <option value="4" <?php if(!$dataCheck){if(json_decode($data[8]->data)[0] == 4){echo "selected";}} ?>>Semua tersedia</option>
                                      </select>
                                    </div>
                                  </div>
                              </div>
                          </div>
                      </li>

                      <li class="row">
                          <div class="col-md-11 komponen">
                              <div class="pull-left nomor">3.2.2</div>
                              <div class="deskriptor pull-left">
                                  <strong>
                                  Kualitas layanan kepada mahasiswa Untuk setiap jenis pelayanan, pemberian skor sebagai berikut: <br/>4 : sangat baik, <br/>3 : baik, <br/>2: cukup, <br/>1: kurang, <br/>0: sangat kurang
                                  </strong>
                                  <div class="row">
                                    <div class="form-group col-md-3">
                                      <select name="n_3_2_2" id="" class="form-control border-input" >
                                        <option disabled selected >--Pilih--</option>
                                        <option value="0" <?php if(!$dataCheck){if(json_decode($data[9]->data)[0] == 0){echo "selected";}} ?>>0</option>
                                        <option value="1" <?php if(!$dataCheck){if(json_decode($data[9]->data)[0] == 1){echo "selected";}} ?>>1</option>
                                        <option value="2" <?php if(!$dataCheck){if(json_decode($data[9]->data)[0] == 2){echo "selected";}} ?>>2</option>
                                        <option value="3" <?php if(!$dataCheck){if(json_decode($data[9]->data)[0] == 3){echo "selected";}} ?>>3</option>
                                        <option value="4" <?php if(!$dataCheck){if(json_decode($data[9]->data)[0] == 4){echo "selected";}} ?>>4</option>
                                      </select>
                                    </div>
                                </div>
                              </div>
                          </div>
                      </li>

                      <li class="row">
                          <div class="col-md-11 komponen">
                              <div class="pull-left nomor">3.3.1.b</div>
                              <div class="deskriptor pull-left">
                                  <strong>
                                 Penggunaan hasil pelacakan untuk perbaikan: (1) proses pembelajaran, (2) penggalangan dana, (3) informasi pekerjaan, (4) membangun jejaring.
                                  </strong>
                                  <div class="row">
                                  <div class="col-md-3">
                                      <select name="n_3_3_1_b" id="" class="form-control border-input" required="">
                                          <option disabled selected >--Pilih--</option>
                                          <option value="0" <?php if(!$dataCheck){if(json_decode($data[10]->data)[0] == 0){echo "selected";}} ?>>Tidak ada tindak lanjut</option>
                                          <option value="1" <?php if(!$dataCheck){if(json_decode($data[10]->data)[0] == 1){echo "selected";}} ?>>Perbaikan 1 item</option>
                                          <option value="2" <?php if(!$dataCheck){if(json_decode($data[10]->data)[0] == 2){echo "selected";}} ?>>Perbaikan 2 item</option>
                                          <option value="3" <?php if(!$dataCheck){if(json_decode($data[10]->data)[0] == 3){echo "selected";}} ?>>Perbaikan 3 item</option>
                                          <option value="4" <?php if(!$dataCheck){if(json_decode($data[10]->data)[0] == 4){echo "selected";}} ?>>Perbaikan 4 item</option>
                                      </select>
                                  </div>
                                </div>
                              </div>
                          </div>
                      </li>

                      <li class="row">
                          <div class="col-md-11 komponen">
                              <div class="pull-left nomor">3.3.1.c</div>
                              <div class="deskriptor pull-left">
                                  <strong>
                                 Pendapat pengguna (employer) lulusan terhadap kualitas alumni. Ada 7 jenis kompetensi.
                                  </strong>
                                  <div class="row">
                                    <div class="form-group col-md-3">
                                      <label for="a">Sangat Baik</label>
                                      <input type="number" step=1 name="a3_3_1_c" class="form-control border-input" id="a" value="<?php if(!$dataCheck) echo json_decode($data[11]->data)[0] ?>" required="">
                                    </div>
                                    <div class="form-group col-md-3">
                                      <label for="b">Baik</label>
                                      <input type="number" step=1 name="b3_3_1_c" class="form-control border-input" id="b" value="<?php if(!$dataCheck) echo json_decode($data[11]->data)[1] ?>" required="">
                                    </div>
                                    <div class="form-group col-md-3">
                                      <label for="c">Cukup</label>
                                      <input type="number" step=1 name="c3_3_1_c" class="form-control border-input" id="c" value="<?php if(!$dataCheck) echo json_decode($data[11]->data)[2] ?>" required="">
                                    </div>
                                    <div class="form-group col-md-3">
                                      <label for="d">Kurang</label>
                                      <input type="number" step=1 name="d3_3_1_c" class="form-control border-input" id="d" value="<?php if(!$dataCheck) echo json_decode($data[11]->data)[3] ?>" required="">
                                    </div>

                                  </div>
                              </div>
                          </div>
                      </li>
                      <li class="row">

                          <div class="col-md-11 komponen">
                              <div class="pull-left nomor">3.3.2</div>
                              <div class="deskriptor pull-left">
                                  <strong>
                                 Profil masa tunggu kerja pertama
                                  </strong>
                                  <div class="row">
                                    <div class="form-group col-md-3">
                                      <label for="n_3_3_2">Rata-rata masa tunggu lulusan memperoleh pekerjaan yang pertama (dalam bulan)</label>
                                      <input type="number" step=1 name="n_3_3_2" class="form-control border-input" id="n_3_3_2" value="<?php if(!$dataCheck) echo json_decode($data[12]->data)[0] ?>" required="">
                                    </div>
                                  </div>
                              </div>
                          </div>
                      </li>

                      <li class="row">
                          <div class="col-md-11 komponen">
                              <div class="pull-left nomor">3.3.3</div>
                              <div class="deskriptor pull-left">
                                  <strong>
                                 Profil kesesuaian bidang kerja dengan bidang studi
                                  </strong>
                                  <div class="row">
                                    <div class="form-group col-md-12 form-inline">
                                      <label for="n_3_3_3"></label>
                                      <input type="number" step=1 name="n_3_3_3" class="form-control border-input" id="n_3_3_3" value="<?php if(!$dataCheck) echo json_decode($data[13]->data)[0] ?>" required="">
                                      <span>%</span>
                                      <small>Persentase kesesuaian bidang kerja dengan bidang studi (keahlian) lulusan</small>
                                    </div>
                                  </div>
                              </div>
                          </div>

                        </li>

                      <li class="row">
                          <div class="col-md-11 komponen">
                              <div class="pull-left nomor">3.4.1</div>
                              <div class="deskriptor pull-left">
                                  <strong>
                                 Partisipasi alumni dalam mendukung pengembangan akademik program studi dalam bentuk: (1) Sumbangan dana, (2) Sumbangan fasilitas, (3) Keterlibatan dalam kegiatan akademik, (4) Pengembangan jejaring, (5) Penyediaan fasilitas untuk kegiatan akademik
                                  </strong>
                                  <div class="row">
                                  <div class="col-md-5">
                                      <select name="n_3_4_1" id="" class="form-control border-input">
                                          <option disabled selected >--Pilih--</option>
                                          <option value="0" <?php if(!$dataCheck){if(json_decode($data[14]->data)[0] == 0){echo "selected";}} ?>>Tidak ada partisipasi alumni.</option>
                                          <option value="1" <?php if(!$dataCheck){if(json_decode($data[14]->data)[0] == 1){echo "selected";}} ?>>Hanya 1 bentuk partisipasi saja yang dilakukan oleh alumni</option>
                                          <option value="2" <?php if(!$dataCheck){if(json_decode($data[14]->data)[0] == 2){echo "selected";}} ?>>Hanya 2 bentuk partisipasi yang dilakukan oleh alumni.</option>
                                          <option value="3" <?php if(!$dataCheck){if(json_decode($data[14]->data)[0] == 3){echo "selected";}} ?>>3-4 bentuk partisipasi dilakukan oleh alumni.</option>
                                          <option value="4" <?php if(!$dataCheck){if(json_decode($data[14]->data)[0] == 4){echo "selected";}} ?>>Semua bentuk partisipasi dilakukan oleh alumni.</option>
                                      </select>
                                    </div>
                                  </div>
                              </div>
                          </div>
                      </li>

                      <li class="row">
                          <div class="col-md-11 komponen">
                              <div class="pull-left nomor">3.4.2</div>
                              <div class="deskriptor pull-left">
                                  <strong>
                                 Partisipasi lulusan dan alumni dalam mendukung pengembangan non-akademik program studi dalam bentuk: (1) Sumbangan dana,(2) Sumbangan fasilitas, (3) Keterlibatan dalam kegiatan non akademik, (4) Pengembangan jejaring, (5) Penyediaan fasilitas untuk kegiatan non akademik.
                                  </strong>
                                  <div class="row">
                                  <div class="col-md-5">
                                      <select name="n_3_4_2" id="" class="form-control border-input">
                                        <option disabled selected >--Pilih--</option>
                                        <option value="0" <?php if(!$dataCheck){if(json_decode($data[15]->data)[0] == 0){echo "selected";}} ?>>Tidak ada partisipasi alumni.</option>
                                        <option value="1" <?php if(!$dataCheck){if(json_decode($data[15]->data)[0] == 1){echo "selected";}} ?>>Hanya 1 bentuk partisipasi saja yang dilakukan oleh alumni</option>
                                        <option value="2" <?php if(!$dataCheck){if(json_decode($data[15]->data)[0] == 2){echo "selected";}} ?>>Hanya 2 bentuk partisipasi yang dilakukan oleh alumni.</option>
                                        <option value="3" <?php if(!$dataCheck){if(json_decode($data[15]->data)[0] == 3){echo "selected";}} ?>>3-4 bentuk partisipasi dilakukan oleh alumni.</option>
                                        <option value="4" <?php if(!$dataCheck){if(json_decode($data[15]->data)[0] == 4){echo "selected";}} ?>>Semua bentuk partisipasi dilakukan oleh alumni.</option>
                                      </select>
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

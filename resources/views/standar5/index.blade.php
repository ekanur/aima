@extends("layout")
@section("content")
<div class="col-md-12">
  <div class="card">
      <div class="header">
          <h4 class="title">Kurikum, Pembelajaran, dan Suasana AKademik</h4>
          <p class="category">Standar 5</p>
      </div>
      <div class="content">
          <form action="standar5/save" method="post" class="kuesioner">
            {{csrf_field()}}

            <fieldset @if(sizeof($data)>0) disabled @endif>
              <ul class="list-unstyled">

                  <li class="row">
                      <div class="col-md-12 komponen">
                          <div class="pull-left nomor">5.1.1.a</div>
                          <div class="deskriptor pull-left">

                            <div class="row">
                                <strong>Kelengkapan dan perumusan kompetensi</strong>
                            </div>

                            <div class="row">
                              <div class="col-md-8">
                                <select name="standar5_1_1_1_a" id="" class="form-control border-input" required="">
                                  <option disabled selected >--Pilih--</option>
                                  <option value="0" <?php if(!$dataCheck){ if (json_decode($data[0]->data)[0] == 0){ echo "selected"; }}?>>Kurikulum tidak memuat kompetensi lulusan secara lengkap</option>
                                  <option value="1" <?php if(!$dataCheck){ if (json_decode($data[0]->data)[0] == 1){ echo "selected"; }}?>>Kurikulum memuat kompetensi lulusan secara lengkap (utama, pendukung, lainnya), namun rumusannya kurang jelas</option>
                                  <option value="2" <?php if(!$dataCheck){ if (json_decode($data[0]->data)[0] == 2){ echo "selected"; }}?>>Kurikulum memuat kompetensi lulusan secara lengkap (utama, pendukung, lainnya) yang terumuskan secara cukup jelas</option>
                                  <option value="3" <?php if(!$dataCheck){ if (json_decode($data[0]->data)[0] == 3){ echo "selected"; }}?>>Kurikulum memuat kompetensi lulusan secara lengkap (utama, pendukung, lainnya) yang terumuskan secara jelas</option>
                                  <option value="4" <?php if(!$dataCheck){ if (json_decode($data[0]->data)[0] == 4){ echo "selected"; }}?>>kurikulum memuat kompetensi lulusan secara lengkap (utama, pendukung, lainnya) yang terumuskan secara sangat jelas</option>
                                </select>
                              </div>
                            </div>

                          </div>
                      <div class="dropdown pull-right">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                                  <b class="fa fa-ellipsis-v"></b>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-right"> 
                                      <li><a href="#" data-toggle="modal" data-target="#upload_file" data-file-lama="" data-item-id="3">Catatan Auditor</a></li>
                                </ul>
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

                            <div class="row">
                              <div class="col-md-8">
                                <select name="standar5_1_2_b" id="" class="form-control border-input" required="">
                                <option disabled selected >--Pilih--</option>
                                  <option value="0" <?php if(!$dataCheck){ if (json_decode($data[1]->data)[0] == 0){ echo "selected"; }}?>>Tidak sesuai dengan visi - misi serta tidak jelas orientasinya atau Tidak memuat standar kompetensi</option>
                                  <option value="1" <?php if(!$dataCheck){ if (json_decode($data[1]->data)[0] == 1){ echo "selected"; }}?>>Tidak sesuai dengan visi - misi</option>
                                  <option value="2" <?php if(!$dataCheck){ if (json_decode($data[1]->data)[0] == 2){ echo "selected"; }}?>>Sesuai dengan visi - misi, tetapi masih beroreintasi ke masa lalu</option>
                                  <option value="3" <?php if(!$dataCheck){ if (json_decode($data[1]->data)[0] == 3){ echo "selected"; }}?>>Sesuai dengan visi - misi, berorientasi ke masa kini</option>
                                  <option value="4" <?php if(!$dataCheck){ if (json_decode($data[1]->data)[0] == 4){ echo "selected"; }}?>>Sesuai dengan visi - misi, sudah berorientasi ke masa depan</option>
                                </select>
                              </div>
                            </div>

                          </div>
                      <div class="dropdown pull-right">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                                  <b class="fa fa-ellipsis-v"></b>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-right"> 
                                      <li><a href="#" data-toggle="modal" data-target="#upload_file" data-file-lama="" data-item-id="3">Catatan Auditor</a></li>
                                </ul>
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

                            <div class="row">
                              <div class="form-group col-md-12 form-inline">
                                <!-- <label for="pdmk">PDMK</label> -->
                                <input class="form-control border-input" type="number" min=0 name="pdmk5_1_2_c" value="<?php if(!$dataCheck) echo json_decode($data[2]->data)[0] ?>" required="">
                                <span>%</span>
                                <small>mata kuliah yang memiliki deskripsi, silabus dan SAP</small>
                              </div>
                            </div>


                      </div>
                    <div class="dropdown pull-right">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                                  <b class="fa fa-ellipsis-v"></b>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-right"> 
                                      <li><a href="#" data-toggle="modal" data-target="#upload_file" data-file-lama="" data-item-id="3">Catatan Auditor</a></li>
                                </ul>
                              </div>
                    </div>
                  </li>
                  <li class="row">

                      <div class="col-md-12 komponen">
                          <div class="pull-left nomor">5.1.3.a</div>
                          <div class="deskriptor pull-left">
                            <div class="row">
                              <strong>
                                Pelaksanaan pembelajaran memiliki mekanisme untuk memonitori, mengkaji, dan memperbaiki setiap semester tentang:
                                <ol>
                                      <li>Kehadiran mahasiswa </li>
                                      <li>Kehadiran dosen </li>
                                      <li>Materikuliah </li>
                                </ol>
                              </strong>
                            </div>

                            <div class="row">
                              <div class="col-md-8">
                                  <select name="standar5_1_3_a" id="" class="form-control border-input" required="">
                                      <option disabled selected >--Pilih--</option>
                                      <option value="1" <?php if(!$dataCheck){ if (json_decode($data[3]->data)[0] == 1){ echo "selected"; }}?>>Tidak ada monitoring</option>
                                      <option value="2" <?php if(!$dataCheck){ if (json_decode($data[3]->data)[0] == 2){ echo "selected"; }}?>>Ada monitoring tetapi tidak ada evaluasi</option>
                                      <option value="3" <?php if(!$dataCheck){ if (json_decode($data[3]->data)[0] == 3){ echo "selected"; }}?>>Ada monitoring, evaluasi tidak kontinu</option>
                                      <option value="4" <?php if(!$dataCheck){ if (json_decode($data[3]->data)[0] == 4){ echo "selected"; }}?>>Ada monitoring dan evaluasi secara kontinu</option>
                                  </select>
                              </div>



                            </div>

                            <!-- <div class="row">
                              <div class="form-group col-md-3">
                                <input type="text" name="bmkp5_1_3_a" class="form-control border-input" id="5_1_3_a_bmkp">
                                <small>Bobot mata kuliah pilihan dalam sks</small>
                              </div>

                              <div class="form-group col-md-3">
                                <input type="text" name="rmkp5_1_3_a" class="form-control border-input" id="5_1_3_a_rmkp">
                                <small>Rasio sks mata kuliah pilihan yang disediakan/dilaksanakan terhadap sks mata kuliah pilihan yang harus diambil </small>
                              </div>
                          </div> -->

                        </div>
                      <div class="dropdown pull-right">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                                  <b class="fa fa-ellipsis-v"></b>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-right"> 
                                      <li><a href="#" data-toggle="modal" data-target="#upload_file" data-file-lama="" data-item-id="3">Catatan Auditor</a></li>
                                </ul>
                              </div>
                      </div>
                  </li>

                  <li class="row">
                      <div class="col-md-12 komponen">
                          <div class="pull-left nomor">5.3.2</div>
                          <div class="deskriptor pull-left">
                             <div class="row">
                               <strong>
                                 Mutu soal ujian untuk lima matakuliah dan kesesuaian dengan GBPP/SAP
                               </strong>
                             </div>

                             <div class="row">
                               <div class="col-md-8">
                                   <select name="standar5_3_2" id="" class="form-control border-input" required="">
                                      <option disabled selected >--Pilih--</option>
                                       <option value="0" <?php if(!$dataCheck){ if (json_decode($data[4]->data)[0] == 0){ echo "selected"; }}?>>Semua soal ujian tidak bermutu atau tidak sesuai dengan GBPP/SAP</option>
                                       <option value="1" <?php if(!$dataCheck){ if (json_decode($data[4]->data)[0] == 1){ echo "selected"; }}?>>Hanya satu contoh soal ujian yang mutunya baik, dan sesuai denganGBPP/SAP</option>
                                       <option value="2" <?php if(!$dataCheck){ if (json_decode($data[4]->data)[0] == 2){ echo "selected"; }}?>>Dua s.d. tiga contoh soal ujian yang mutunya baik, dansesuai dengan GBPP/SAP</option>
                                       <option value="3" <?php if(!$dataCheck){ if (json_decode($data[4]->data)[0] == 3){ echo "selected"; }}?>>Empat dari lima contoh soal ujian yang mutunya baik, dan sesuai denganGBPP/SAP</option>
                                       <option value="4" <?php if(!$dataCheck){ if (json_decode($data[4]->data)[0] == 4){ echo "selected"; }}?>>Mutu soal ujian untuk lima matakuliah yang diberkan semuanyabermutu baik, dan sesuai dengan GBPP/</option>
                                   </select>
                               </div>
                             </div>

                          </div>
                      <div class="dropdown pull-right">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                                  <b class="fa fa-ellipsis-v"></b>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-right"> 
                                      <li><a href="#" data-toggle="modal" data-target="#upload_file" data-file-lama="" data-item-id="3">Catatan Auditor</a></li>
                                </ul>
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

                            <div class="row">
                              <div class="form-group col-md-12 form-inline">
                                <!-- <label for="rmpa">RMPA</label> -->
                                <input class="form-control border-input" type="number" name="rmpa5_4_1_a" value="<?php if(!$dataCheck) echo json_decode($data[5]->data)[0] ?>" required="">
                                <small>Pertemuan</small>
                              </div>
                            </div>


                      </div>
                    <div class="dropdown pull-right">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                                  <b class="fa fa-ellipsis-v"></b>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-right"> 
                                      <li><a href="#" data-toggle="modal" data-target="#upload_file" data-file-lama="" data-item-id="3">Catatan Auditor</a></li>
                                </ul>
                              </div>
                    </div>
                  </li>

                  <li class="row">
                      <div class="col-md-12 komponen">
                          <div class="pull-left nomor">5.4.1.c</div>
                          <div class="deskriptor pull-left">
                            <div class="row">
                              <strong>
                              Jumlah rata - rata pertemuan pembimbing per mahasiswa per semester
                              </strong>
                            </div>
                            <div class="row">
                              <div class="form-group col-md-12 form-inline">
                                <input type="number" name="pp5_4_1_c"class="form-control border-input" id="5_4_1_c_pp" value="<?php if(!$dataCheck) echo json_decode($data[6]->data)[0] ?>" required="">
                                <small>Pertemuan</small>
                              </div>
                            </div>

                            </div>
                      <div class="dropdown pull-right">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                                  <b class="fa fa-ellipsis-v"></b>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-right"> 
                                      <li><a href="#" data-toggle="modal" data-target="#upload_file" data-file-lama="" data-item-id="3">Catatan Auditor</a></li>
                                </ul>
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

                              <div class="row">
                                <div class="col-md-8">
                                    <select name="standar5_4_2" id="" class="form-control border-input" required="">
                                      <option disabled selected >--Pilih--</option>
                                      <option value="0" <?php if(!$dataCheck){ if (json_decode($data[7]->data)[0] == 0){ echo "selected"; }}?>>Sistem bantuan dan bimbingan akademik tidak jalan, atau tidak ada bimbingan</option>
                                      <option value="1" <?php if(!$dataCheck){ if (json_decode($data[7]->data)[0] == 1){ echo "selected"; }}?>>Sistem bantuan dan bimbingan akademik tidak efektif</option>
                                      <option value="2" <?php if(!$dataCheck){ if (json_decode($data[7]->data)[0] == 2){ echo "selected"; }}?>>Sistem bantuan dan bimbingan akademik cukup efektif</option>
                                      <option value="3" <?php if(!$dataCheck){ if (json_decode($data[7]->data)[0] == 3){ echo "selected"; }}?>>Simtem bimbingan akademik efektif</option>
                                      <option value="4" <?php if(!$dataCheck){ if (json_decode($data[7]->data)[0] == 4){ echo "selected"; }}?>>Sistem bimbingan akademik sangat efektif</option>
                                    </select>
                              </div>
                              </div>

                        </div>
                      <div class="dropdown pull-right">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                                  <b class="fa fa-ellipsis-v"></b>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-right"> 
                                      <li><a href="#" data-toggle="modal" data-target="#upload_file" data-file-lama="" data-item-id="3">Catatan Auditor</a></li>
                                </ul>
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

                            <div class="row">
                              <div class="form-group col-md-12 form-inline">
                                <input type="number" name="rmta5_5_1_b"class="form-control border-input" id="5_5_1_b_rmta" value="<?php if(!$dataCheck) echo json_decode($data[8]->data)[0] ?>" required="">
                                <small>Pertemuan </small>
                              </div>
                            </div>
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

                              <div class="row">
                                <div class="form-group col-md-12 form-inline">
                                  <input type="number" name="rbta5_5_1_c"class="form-control border-input" id="5_5_1_c_rbta" value="<?php if(!$dataCheck) echo json_decode($data[9]->data)[0] ?>" required="">
                                  <small>Pertemuan </small>
                                </div>
                              </div>
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
                              <div class="row">
                                      <div class="col-md-8 ">
                                          <select name="standar5_5_2" id="" class="form-control border-input" required="">
                                                  <option value="0" <?php if(!$dataCheck){ if (json_decode($data[10]->data)[0] == 0){ echo "selected"; }}?>>Struktur kurikulum tugas akhir dijadwalkan selesai dalam satu semester</option>
                                                  <option value="1" <?php if(!$dataCheck){ if (json_decode($data[10]->data)[0] == 1){ echo "selected"; }}?>>Struktur kurikulum tugas akhir dijadwalkan selesai dalam dua semester</option>
                                          </select>
                                      </div>
                                      <div class="form-grpu col-md-4 form-inline">
                                        <input class="form-control border-input" type="number" name="rpta5_5_2" id="5_5_2_rpta" value="<?php if(!$dataCheck) echo json_decode($data[10]->data)[1] ?>" required="">
                                        <small>Bulan penyelesaian</small>
                                      </div>
                            </div>


                      </div>
                    <div class="dropdown pull-right">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                                  <b class="fa fa-ellipsis-v"></b>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-right"> 
                                      <li><a href="#" data-toggle="modal" data-target="#upload_file" data-file-lama="" data-item-id="3">Catatan Auditor</a></li>
                                </ul>
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

                              <div class="row">
                                <div class="col-md-8">
                                    <select name="standar5_7_2" id="" class="form-control border-input" required="">
                                        <option disabled selected >--Pilih--</option>
                                        <option value="1" <?php if(!$dataCheck){ if (json_decode($data[11]->data)[0] == 1){ echo "selected"; }}?>>Prasarana utama masih kurang, demikian pula dengan dukungan dana.</option>
                                        <option value="2" <?php if(!$dataCheck){ if (json_decode($data[11]->data)[0] == 2){ echo "selected"; }}?>>Tersedia, cukup lengkap, milik sendiri atau sewa, dan dana yang cukup memadai.</option>
                                        <option value="3" <?php if(!$dataCheck){ if (json_decode($data[11]->data)[0] == 3){ echo "selected"; }}?>>Tersedia, milik sendiri, lengkap, dan dana yang memadai</option>
                                        <option value="4" <?php if(!$dataCheck){ if (json_decode($data[11]->data)[0] == 4){ echo "selected"; }}?>>Tersedia, milik sendiri, sangat lengkap dan dana yang sangat memadai</option>
                                    </select>
                                </div>
                              </div>

                            </div>
                      <div class="dropdown pull-right">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                                  <b class="fa fa-ellipsis-v"></b>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-right"> 
                                      <li><a href="#" data-toggle="modal" data-target="#upload_file" data-file-lama="" data-item-id="3">Catatan Auditor</a></li>
                                </ul>
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

                            <div class="row">
                                <div class="col-md-8">
                                  <select name="standar5_7_3" id="" class="form-control border-input" required="">
                                    <option disabled selected >--Pilih--</option>
                                    <option value="1" <?php if(!$dataCheck){ if (json_decode($data[12]->data)[0] == 1){ echo "selected"; }}?>>Kegiatan ilmiah yang terjadwal dilaksanakan lebih dari enam bulan sekali</option>
                                    <option value="2" <?php if(!$dataCheck){ if (json_decode($data[12]->data)[0] == 2){ echo "selected"; }}?>>Kegiatan ilmiah yang terjadwal dilaksanakan empat s.d. enam bulan sekali</option>
                                    <option value="3" <?php if(!$dataCheck){ if (json_decode($data[12]->data)[0] == 3){ echo "selected"; }}?>>Kegiatan ilmiah yang terjadwal dilaksanakan dua s.d tiga bulan sekali</option>
                                    <option value="4" <?php if(!$dataCheck){ if (json_decode($data[12]->data)[0] == 4){ echo "selected"; }}?>>Kegiatan ilmiah yang terjadwal dilaksanakan setiap bulan</option>
                                  </select>
                                </div>
                            </div>

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

                            <div class="row">
                            <div class="col-md-8">
                              <select name="standar5_7_5" id="" class="form-control border-input" required="">
                                <option disabled selected >--Pilih--</option>
                                <option value="1" <?php if(!$dataCheck){ if (json_decode($data[13]->data)[0] == 1){ echo "selected"; }}?>>Kegiatan yang dilakukan tidak menunjang pengembangan perilaku kecendekiawanan</option>
                                <option value="2" <?php if(!$dataCheck){ if (json_decode($data[13]->data)[0] == 2){ echo "selected"; }}?>>Kegiatan yang dilakukan cukup menunjang pengembangan perilaku kecendekiawanan</option>
                                <option value="3" <?php if(!$dataCheck){ if (json_decode($data[13]->data)[0] == 3){ echo "selected"; }}?>>Kegiatan yang dilakukan menunjang pengembangan perilaku kecendekiawan</option>
                                <option value="4" <?php if(!$dataCheck){ if (json_decode($data[13]->data)[0] == 4){ echo "selected"; }}?>>Kegiatan yang dilakukan sangat menunjang pengembangan perilaku kecendekiawan</option>
                              </select>
                            </div>
                          </div>

                          </div>
                      <div class="dropdown pull-right">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                                  <b class="fa fa-ellipsis-v"></b>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-right"> 
                                      <li><a href="#" data-toggle="modal" data-target="#upload_file" data-file-lama="" data-item-id="3">Catatan Auditor</a></li>
                                </ul>
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

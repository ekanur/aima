@extends('layout')
@section('content')
  <div class="col-md-12">
      <div class="card">
          <div class="header">
              <h4 class="title">Sumber Daya Manusia</h4>
              <p class="category">Standar 4</p>
          </div>
          <div class="content">
              <form action="/standar4/save" method="post" class="kuesioner">
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
                            <div class="row">
                              <div class="form-group col-md-12 form-inline">
                                <div class="col-md-4">
                                  <label for="kd">KD</label>
                                  <input class="form-control border-input" type="number" name="kd4_3_1_a" min="0" required>
                                  <span>%</span>
                                </div>
                                <div class="col-md-8">
                                  <small>Persentase dosen tetap berpendidikan (terakhir) S2 dan S3 yang bidang keahliannya sesuai dengan kompetensi PS</small>
                                </div>
                              </div>
                            </div>
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
                                <strong>Dosen tetap yang berpendidikan S3 yang bidang keahliannya sesuai dengan kompetensi PS</strong>
                              </div>
                            </div>
                            <div class="row">
                              <div class="form-group col-md-12 form-inline">
                                <div class="col-md-4">
                                  <label for="kd">KD</label>
                                  <input class="form-control border-input" type="number" name="kd4_3_1_b" min="0" required>
                                  <span>%</span>
                                </div>
                                <div class="col-md-8">
                                  <small>Persentase dosen tetap yang berpendidikan S3 yang bidang keahliannya sesuai dengan kompetensi PS</small>
                                </div>
                              </div>
                            </div>
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
                            <div class="row">
                              <div class="col-md-12">
                                <strong>Dosen tetap yang memiliki jabatan lektor kepala dan guru besar yang bidang keahliannya sesuai dengan kompetensi PS</strong>
                              </div>
                            </div>
                            <div class="row">
                              <div class="form-group col-md-12 form-inline">
                                <div class="col-md-4">
                                  <label for="kd">KD</label>
                                  <input class="form-control border-input" type="number" name="kd4_3_1_c" min="0" required>
                                  <span>%</span>
                                </div>
                                <div class="col-md-8">
                                  <small>Persentase Dosen tetap yang memiliki jabatan lektor kepala dan guru besar yang bidang keahliannya sesuai dengan kompetensi PS</small>
                                </div>
                              </div>
                            </div>
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
                            <div class="row">
                              <div class="form-group col-md-12 form-inline">
                                <div class="col-md-4">
                                  <label for="kd">KD</label>
                                  <input class="form-control border-input" type="number" name="kd4_3_1_d" min="0" required>
                                  <span>%</span>
                                </div>
                                <div class="col-md-8">
                                  <small>Persentase dosen yang memiliki Sertifikat Pendidik Profesional</small>
                                </div>
                              </div>
                            </div>
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
                            <div class="row">
                              <div class="col-md-12">
                                <strong>Rasio mahasiswa terhadap dosen tetap yang bidang keahliannya sesuai dengan bidang</strong>
                              </div>
                            </div>
                            <div class="row">
                              <div class="form-group col-md-12 form-inline">
                                <div class="col-md-4">
                                  <label for="kd">R<small>MD</small></label>
                                  <input class="form-control border-input" type="number" name="rmd4_3_2" min="0" required>
                                </div>
                                <div class="col-md-8">
                                  <small>Rasio mahasiswa terhadap dosen</small>
                                </div>
                              </div>
                            </div>
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
                            <div class="row">
                              <div class="form-group col-md-12 form-inline">
                                <div class="col-md-4">
                                  <label for="kd">R<small>FTE</small></label>
                                  <input class="form-control border-input" type="number" name="rfte4_3_3" min="0" required>
                                </div>
                                <div class="col-md-8">
                                  <small>Rata-rata FTE</small>
                                </div>
                              </div>
                            </div>
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
                            <div class="row">
                              <div class="form-group col-md-12 form-inline">
                                <div class="col-md-12">
                                  <select class="form-control border-input" name="n4_3_4">
                                    <option value="4">Semua mata kuliah diajar oleh dosen yang sesuai keahliannya</option>
                                    <option value="3">1 - 3 mata kuliah diajar oleh dosen tidak sesuai dengan keahliannya</option>
                                    <option value="2">4 - 7 mata kuliah diajar oleh doesn yang tidak sesuai keahliannya</option>
                                    <option value="1">Lebih dari 7 matakuliah diajar oleh dosen yang tidak sesuai keahliannya</option>
                                  </select>
                                </div>
                              </div>
                            </div>
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
                            <div class="row">
                              <div class="form-group col-md-12 form-inline">
                                <div class="col-md-4">
                                  <label for="kd">PK<small>DT</small></label>
                                  <input class="form-control border-input" type="number" name="pkdt4_3_6" min="0" required>
                                  <span>%</span>
                                </div>
                                <div class="col-md-8">
                                  <small>Persentasi kehadiran dosen tetap dalam perkuliahan (terhadap jumlah kehadiran yang direncanakan)</small>
                                </div>
                              </div>
                            </div>
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
                            <div class="row">
                              <div class="form-group col-md-12 form-inline">
                                <div class="col-md-4">
                                  <label for="kd">P<small>DTT</small></label>
                                  <input class="form-control border-input" type="number" name="pdtt4_4_1" min="0" required>
                                  <span>%</span>
                                </div>
                                <div class="col-md-8">
                                  <small>Persentasi jumlah dosen tidak tetap, terhadap jumlah seluruh dosen</small>
                                </div>
                              </div>
                            </div>
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
                            <div class="row">
                              <div class="form-group col-md-12 form-inline">
                                <div class="col-md-12">
                                  <select class="form-control border-input" name="n4_4_2_a">
                                    <option value="4">Semua dosen tidak tetap mengajar mata kuliah yang sesuai keahliannya</option>
                                    <option value="3">1 - 2 mata kuliah diajar oleh dosen tidak tetap yang tidak sesuai keahliannya</option>
                                    <option value="2">3 - 4 mata kuliah diajar oelh dosen tidak tetap yang tidak sesuai keahliannya</option>
                                    <option value="1">5 - 6 mata kuliah diajar oelh dosen tidak tetap yang tidak sesuai kahaliannya</option>
                                    <option value="0">Lebih dari 6 matakuliah diajar oleh dosen tidak tetap yang tidak sesuai keahliannya</option>
                                  </select>
                                </div>
                              </div>
                            </div>
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
                            <div class="row">
                              <div class="form-group col-md-12 form-inline">
                                <div class="col-md-4">
                                  <label for="kd">PK<small>DTT</small></label>
                                  <input class="form-control border-input" type="number" name="pkdtt4_4_2_b" min="0" required>
                                  <span>%</span>
                                </div>
                                <div class="col-md-8">
                                  <small>Persentasi kehadiran dosen tidak tetap dalam perkuliahan (terhadap jumlah kehadiran yang direncanakan)</small>
                                </div>
                              </div>
                            </div>
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
                            <div class="row">
                              <div class="form-group col-md-12 form-inline">
                                <div class="col-md-4">
                                  <label for="kd">J<small>TAP</small></label>
                                  <input class="form-control border-input" type="number" name="jtap4_5_1" min="0" required>
                                </div>
                                <div class="col-md-8">
                                  <small>Jumlah tenaga ahli/pakar</small>
                                </div>
                              </div>
                            </div>
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
                            <div class="row">
                              <div class="form-group col-md-6">
                                <label for="n2_4_5_2">N2</label>
                                <input type="number" name="n2_4_5_2" class="form-control border-input" id="n2_4_5_2" min="0" required>
                                <small>Jumlah dosen yang mengikuti tugas belajar jenjang S2 pada bidang keahlian yang sesuai dengan PS dalam kurun waktu tiga tahun terakhir</small>
                              </div>
                              <div class="form-group col-md-6">
                                <label for="n3_4_5_2">N3</label>
                                <input type="number" name="n3_4_5_2" class="form-control border-input" id="n3_4_5_2" min="0" required>
                                <small>Jumlah dosen yang mengikuti tugas belajar jenjang S3 pada bidang keahlian yang sesuai dengan PS dalam kurun waktu tiga tahun terakhir</small>
                              </div>
                            </div>
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
                            <div class="row">
                              <div class="form-group col-md-4">
                                <label for="a4_5_3">a</label>
                                <input type="number" name="a4_5_3" class="form-control border-input" id="a4_5_3" min="0" required>
                                <small>Jumlah makalah atau kegiatan (sebagai penyaji)</small>
                              </div>
                              <div class="form-group col-md-4">
                                <label for="b4_5_3">b</label>
                                <input type="number" name="b4_5_3" class="form-control border-input" id="b4_5_3" min="0" required>
                                <small>Jumlah kehadiran (sebagai peserta)</small>
                              </div>
                              <div class="form-group col-md-4">
                                <label for="n4_5_3">b</label>
                                <input type="number" name="n4_5_3" class="form-control border-input" id="n4_5_3" min="0" required>
                                <small>Jumlah dosen tetap</small>
                              </div>
                            </div>
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
                            <div class="row">
                              <div class="col-md-12">
                                <select class="form-control border-input" name="n4_5_4">
                                  <option value="4">Mendapatkan penghargaan hibah, pendanaan program dan kegiatan akademik dari institusi internasional (disertai bukti)</option>
                                  <option value="3">Mendapatkan penghargaan hibah, pendanaan program dan kegiatan akademik dari institusi nasional (disertai bukti)</option>
                                  <option value="2">Mendapatkan penghargaan hibah, pendanaan program dan kegiatan akademik dari institusi regional/lokal (disertai bukti)</option>
                                  <option value="1">Mendapatkan penghargaan, hibah, pendanaan program dan kegiatan akademik yang berupa hibah dana dari PT snediri (disertai bukti)</option>
                                  <option value="0">Tidak pernah mendapat penghargaan</option>
                                </select>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-12">
                                <small>Catatan : Selama tiga tahun terakhir</small>
                              </div>
                            </div>
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
                            <div class="row">
                              <div class="form-group col-md-4">
                                <label for="x1_4_6_1_a">X1</label>
                                <input type="number" name="x1_4_6_1_a" class="form-control border-input" id="x1_4_6_1_a" min="0" required>
                                <small>Jumlah pustakawan yang berpendidikan S2 atau S3</small>
                              </div>
                              <div class="form-group col-md-4">
                                <label for="x2_4_6_1_a">X2</label>
                                <input type="number" name="x2_4_6_1_a" class="form-control border-input" id="x2_4_6_1_a" min="0" required>
                                <small>Jumlah pustakawan yang berpendidikan D4 atau S1</small>
                              </div>
                              <div class="form-group col-md-4">
                                <label for="x3_4_6_1_a">X3</label>
                                <input type="number" name="x3_4_6_1_a" class="form-control border-input" id="x3_4_6_1_a" min="0" required>
                                <small>Jumlah pustakawan yang berpendidikan D1, D2, atau D3</small>
                              </div>
                            </div>
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
                            <div class="row">
                              <div class="form-group col-md-3">
                                <label for="x1_4_6_1_c">X1</label>
                                <input type="number" name="x1_4_6_1_c" class="form-control border-input" id="x1_4_6_1_c" min="0" required>
                                <small>Jumlah tenaga administrasi yang berpendidikan D4 atau S1 ke atas</small>
                              </div>
                              <div class="form-group col-md-3">
                                <label for="x2_4_6_1_c">X2</label>
                                <input type="number" name="x2_4_6_1_c" class="form-control border-input" id="x2_4_6_1_c" min="0" required>
                                <small>Jumlah tenaga administrasi yang berpendidikan D3</small>
                              </div>
                              <div class="form-group col-md-3">
                                <label for="x3_4_6_1_c">X3</label>
                                <input type="number" name="x3_4_6_1_c" class="form-control border-input" id="x3_4_6_1_c" min="0" required>
                                <small>Jumlah tenaga administrasi yang berpendidikan D1 atau D2</small>
                              </div>
                              <div class="form-group col-md-3">
                                <label for="x4_4_6_1_c">X4</label>
                                <input type="number" name="x4_4_6_1_c" class="form-control border-input" id="x4_4_6_1_c" min="0" required>
                                <small>Jumlah tenaga adminstirasi yang berpendidikan SMU / SMK</small>
                              </div>
                            </div>
                          </div>
                        </div>
                      </li>

                  </ul>

              <div class="footer text-center">
                  <button type="submit" class="btn btn-info btn-fill btn-wd">Simpan</button>
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

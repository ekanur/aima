@extends("layout")
@section("content")
<div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Mahasiswa dan Lulusan</h4>
                                <p class="category">Standar 3</p>
                            </div>
                            <div class="content">
                                <form action="" method="post" class="kuesioner">
                                    <ul class="list-unstyled">
                                        <li class="row">
                                            <div class="col-md-11 komponen">
                                                <span class="nomor pull-left">3.1.1.a</span>
                                                <div class="deskriptor pull-left">
                                                     <strong>Rasio calon mahasiswa yang ikut seleksi : daya tampung </strong>
                                                </div>
                                               
                                            </div>
                                            <div class="col-md-1">
                                                <!-- <select name="standar1_1" id="" class="form-control border-input">
                                                    <option value="0">0</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                </select> -->
                                                <a href="#" class="btn btn-success">Proses</a>
                                            </div>
                                        </li>
                                        <li class="row">
                                            <div class="col-md-11 komponen">
                                                <span class="nomor pull-left">3.1.1.b</span>
                                                <div class="deskriptor pull-left">
                                                     <strong>Rasio mahasiswa baru reguler yang melakukan registrasi : calon mahasiswa baru reguler yang lulus seleksi</strong>
                                                </div>
                                            
                                            </div>
                                            <div class="col-md-1">
                                                <a href="#" class="btn btn-success">Proses</a>
                                            </div>
                                        </li>
                                        <li class="row">

                                            <div class="col-md-11 komponen">
                                                <div class="pull-left nomor">3.1.1.c</div>
                                                <div class="deskriptor pull-left">
                                                    <strong>
                                                    Rasio mahasiswa baru transfer terhadap mahasiswa baru bukan transfer. 
                                                    </strong>
                                                </div>
                                                

                                            </div>
                                            <div class="col-md-1">
                                                <a href="#" class="btn btn-success">Proses</a>
                                            </div>
                                        </li>
                                        <li class="row">

                                            <div class="col-md-11 komponen">
                                                <div class="pull-left nomor">3.1.1.d</div>
                                                <div class="deskriptor pull-left">
                                                    <strong>
                                                    Rata-rata Indeks Prestasi Kumulatif (IPK) selama lima tahun terakhir. 
                                                    </strong>
                                                </div>
                                                

                                            </div>
                                            <div class="col-md-1">
                                                <!-- <select name="standar1_1" id="" class="form-control border-input">
                                                    <option value="4">&#8805; 3</option>
                                                    <option value="3">2,76 - 2.99</option>
                                                    <option value="1">2 - 2,75 </option>
                                                </select> -->
                                                <input type="text" name="3.1.1.d" class="form-control border-input">
                                            </div>
                                        </li>
                                        <li class="row">

                                            <div class="col-md-11 komponen">
                                                <div class="pull-left nomor">3.1.2</div>
                                                <div class="deskriptor pull-left">
                                                    <strong>
                                                    Penerimaan mahasiswa non-reguler selayaknya tidak membuat beban dosen sangat berat, jauh melebihi beban ideal  (sekitar 12 sks).
                                                    </strong>
                                                </div>
                                                

                                            </div>
                                            <div class="col-md-1">
                                                <select name="standar1_1" id="" class="form-control border-input">
                                                    <option value="0">0</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                </select>
                                            </div>
                                        </li>
                                        <li class="row">

                                            <div class="col-md-11 komponen">
                                                <div class="pull-left nomor">3.1.3</div>
                                                <div class="deskriptor pull-left">
                                                    <strong>
                                                    Penghargaan atas prestasi mahasiswa di bidang nalar, bakat dan minat
                                                    </strong>
                                                </div>
                                                

                                            </div>
                                            <div class="col-md-1">
                                                <select name="standar1_1" id="" class="form-control border-input">
                                                    <option value="1">Tidak ada</option>
                                                    <option value="2">Tingkat Lokal</option>
                                                    <option value="3">Tingkat Wilayah</option>
                                                    <option value="4">Tingkat Internasional</option>
                                                </select>
                                            </div>
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
                                            <div class="col-md-1">
                                                
                                                    <a href="" class="btn btn-success">Proses</a>
                                            </div>
                                        </li>
                                        <li class="row">

                                            <div class="col-md-11 komponen">
                                                <div class="pull-left nomor">3.1.4.b</div>
                                                <div class="deskriptor pull-left">
                                                    <strong>
                                                    Persentase mahasiswa yang DO atau mengundurkan diri 
                                                    </strong>
                                                </div>
                                                

                                            </div>
                                            <div class="col-md-1">
                                                 <a href="" class="btn btn-success">Proses</a>
                                            </div>
                                        </li>
                                        <li class="row">

                                            <div class="col-md-11 komponen">
                                                <div class="pull-left nomor">3.1.4.c</div>
                                                <div class="deskriptor pull-left">
                                                    <strong>
                                                    Rasio mahasiswa baru transfer terhadap mahasiswa baru bukan transfer. 
                                                    </strong>
                                                </div>
                                                

                                            </div>
                                            <div class="col-md-1">
                                                 <a href="" class="btn btn-success">Proses</a>
                                            </div>
                                        </li>
                                        <li class="row">

                                            <div class="col-md-11 komponen">
                                                <div class="pull-left nomor">3.1.4.d</div>
                                                <div class="deskriptor pull-left">
                                                    <strong>
                                                    Rata-rata Indeks Prestasi Kumulatif (IPK) selama lima tahun terakhir.
                                                    </strong>
                                                </div>
                                                

                                            </div>
                                            <div class="col-md-1">
                                                 <a href="" class="btn btn-success">Proses</a>
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
                                                </div>
                                                

                                            </div>
                                            <div class="col-md-1">
                                                <select name="standar1_1" id="" class="form-control border-input">
                                                    <option value="0">Kurang dari 2 unit pelayanan</option>
                                                    <option value="1">2 jenis unit pelayanan</option>
                                                    <option value="2">Tersedia pelayanan nomor 1 dan 2</option>
                                                    <option value="3">Tersedia pelayanan nomor 1 s/d 3</option>
                                                    <option value="4">Semua tersedia</option>
                                                </select>
                                            </div>
                                        </li><li class="row">

                                            <div class="col-md-11 komponen">
                                                <div class="pull-left nomor">3.2.2</div>
                                                <div class="deskriptor pull-left">
                                                    <strong>
                                                    Kualitas layanan kepada mahasiswa
Untuk setiap jenis pelayanan, pemberian skor sebagai berikut: <br/>4 : sangat baik, <br/>3 : baik, <br/>2: cukup, <br/>1: kurang, <br/>0: sangat kurang
                                                    </strong>
                                                </div>
                                                

                                            </div>
                                            <div class="col-md-1">
                                                <select name="standar1_1" id="" class="form-control border-input">
                                                    <option value="0">0</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                </select>
                                            </div>
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
                                            <div class="col-md-1">
                                                <select name="standar1_1" id="" class="form-control border-input">
                                                    <option value="0">Tidak ada tindak lanjut</option>
                                                    <option value="1">Perbaikan 1 item</option>
                                                    <option value="2">Perbaikan 2 item</option>
                                                    <option value="3">Perbaikan 3 item</option>
                                                    <option value="4">Perbaikan 4 item</option>
                                                </select>
                                            </div>
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
                                            <div class="col-md-1">
                                               <a href="" class="btn btn-success">Proses</a>
                                            </div>
                                        </li>
                                        <li class="row">

                                            <div class="col-md-11 komponen">
                                                <div class="pull-left nomor">3.3.2</div>
                                                <div class="deskriptor pull-left">
                                                    <strong>
                                                   Profil masa tunggu kerja pertama
                                                    </strong>
                                                </div>
                                                

                                            </div>
                                            <div class="col-md-1">
                                                <select name="standar1_1" id="" class="form-control border-input">
                                                    <option value="1">&#8804; 3 bulan</option>
                                                    <option value="2">4 s/d 17 bulan</option>
                                                    <option value="3">&#8805; 18 bulan</option>
                                                </select>
                                            </div>
                                        </li>
                                        <li class="row">

                                            <div class="col-md-11 komponen">
                                                <div class="pull-left nomor">3.3</div>
                                                <div class="deskriptor pull-left">
                                                    <strong>
                                                   Profil kesesuaian bidang kerja dengan bidang studi
                                                    </strong>
                                                </div>
                                                

                                            </div>
                                            <div class="col-md-1">
                                                <select name="standar1_1" id="" class="form-control border-input">
                                                    <option value="0">0</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                </select>
                                            </div>
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
                                            <div class="col-md-1">
                                                <select name="standar1_1" id="" class="form-control border-input">
                                                    <option value="0">0</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                </select>
                                            </div>
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
                                            <div class="col-md-1">
                                                <select name="standar1_1" id="" class="form-control border-input">
                                                    <option value="0">0</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                </select>
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
@extends('layout')
@section('content')
  <div class="col-md-12">
    <div class="card">
        <div class="header">
            <h4 class="title">Penelitian, Pengabdian Kepada Masyarakat, dan Kerjasama</h4>
            <p class="category">Standar 7</p>
        </div>
        <div class="content">
            <form action="/standar7/save" method="post" class="kuesioner">
                {{ csrf_field() }}
                <ul class="list-unstyled">
                    <li class="row">
                        <div class="col-md-11 komponen">
                            <span class="nomor pull-left">7.1.1</span>
                            <div class="deskriptor pull-left">
                                 <strong>Jumlah penelitian yang sesuai dengan bidang keilmuan PS, yang dilakukan oleh dosen tetap yang bidang keahliannya sama dengan PS, selama 3 tahun.</strong>
                            </div>

                        </div>
                        <div class="col-md-1">
                            <select name="skor7_1_1" id="" class="form-control border-input">
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
                            <span class="nomor pull-left">7.1.2</span>
                            <div class="deskriptor pull-left">
                                 <strong>Keterlibatan mahasiswa yang melakukan tugas akhir dalam penelitian dosen</strong>
                            </div>

                        </div>
                        <div class="col-md-1">
                            <select name="skor7_1_2" id="" class="form-control border-input">
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
                            <div class="pull-left nomor">7.1.3</div>
                            <div class="deskriptor pull-left">
                                <strong>
                                Jumlah artikel ilmiah yang dihasilkan oleh dosen tetap yang bidang keahliannya sama dengan PS, selama 3 tahun
                                </strong>
                            </div>
                        </div>
                        <div class="col-md-1">
                            <select name="skor7_1_3" id="" class="form-control border-input">
                                <option value="0">0</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                            </select>
                        </div>
                    </li>
                    <li class="row">
                        <div class="col-md-11 komponen">
                            <div class="pull-left nomor">7.1.4</div>
                            <div class="deskriptor pull-left">
                                <strong>
                                Karya-karya PS/institusi yang telah memperoleh perlindungan Hak atas Kekayaan Intelektual (HaKI) dalam tiga tahun terakhir
                                </strong>
                            </div>
                        </div>
                        <div class="col-md-1">
                            <select name="skor7_1_4" id="" class="form-control border-input">
                                <option value="0">0</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                            </select>
                        </div>
                    </li>
                    <li class="row">
                        <div class="col-md-11 komponen">
                            <div class="pull-left nomor">7.2.1</div>
                            <div class="deskriptor pull-left">
                                <strong>
                                Jumlah kegiatan pelayanan/pengabdian kepada masyarakat (PkM) yang dilakukan oleh dosen tetap yang bidang keahliannya sama dengan PS selama tiga tahun.
                                </strong>
                            </div>
                        </div>
                        <div class="col-md-1">
                            <select name="skor7_2_1" id="" class="form-control border-input">
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

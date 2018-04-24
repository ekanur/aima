@extends("layout")
@section("content")
<div class="col-md-12">
    <div class="card">
        <div class="header">
            <h4 class="title">Visi, Misi, Tujuan, dan Sasaran, serta Strategi Pencapaian</h4>
            <p class="category">Standar 1</p>
        </div>
        <div class="content">
            <form @if(0==sizeof($data)) action="/standar1/save" @else action="/standar1/update" @endif method="post" class="kuesioner">
                {{csrf_field()}}
                <fieldset @if(sizeof($data)>0) disabled @endif>
                <input type="hidden" name="skor1_1_a_old" value="@if(isset($data["1.1.a"])) {{ $data["1.1.a"] }} @endif">
                <input type="hidden" name="skor1_1_b_old" value="@if(isset($data["1.1.b"])) {{ $data["1.1.b"] }} @endif">
                <input type="hidden" name="skor1_2_old" value="@if(isset($data["1.2"])) {{ $data["1.2"] }} @endif">

                    <ul class="list-unstyled">
                        <li class="row">
                            <div class="col-md-12 komponen">
                                <span class="nomor pull-left">1.1.a</span>
                                <div class="deskriptor pull-left">
                                    <strong>Kejelasan dan kerealistikan visi, misi, tujuan, dan sasaran, serta strategi pencapaian sasaran Fakultas/Sekolah Tinggi.</strong>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <select name="skor1_1_a" id="" class="form-control border-input">
                                <option disabled selected >--Pilih--</option>
                                <option value="4" @if (isset($data["1.1.a"])) @if ($data["1.1.a"] == 4) selected @endif @endif>Memiliki visi, misi, tujuan, dan sasaran yang sangat jelas dan sangat realistik</option>
                                <option value="3" @if (isset($data["1.1.a"])) @if ($data["1.1.a"] == 3) selected @endif @endif>Memiliki visi, misi, tujuan, dan sasaran jelas dan  realistik.</option>
                                <option value="2" @if (isset($data["1.1.a"])) @if ($data["1.1.a"] == 2) selected @endif @endif>Memiliki visi, misi, tujuan, dan sasaran yang cukup jelas namun kurang realistik.</option>
                                <option value="1" @if (isset($data["1.1.a"])) @if ($data["1.1.a"] == 1) selected @endif @endif>Memiliki visi, misi, tujuan, dan sasaran yang kurang jelas dan tidak realistik</option>

                                </select>
                            </div>
                        </li>
                        <li class="row">
                            <div class="col-md-12 komponen">
                                <span class="nomor pull-left">1.1.b</span>
                                <div class="deskriptor pull-left">
                                    <strong>Strategi pencapaian sasaran dengan rentang waktu yang jelas dan didukung oleh dokumen.</strong>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <select name="skor1_1_b" id="" class="form-control border-input">
                                    <option disabled selected >--Pilih--</option>
                                  <option value="4" @if (isset($data["1.1.b"])) @if ($data["1.1.b"] == 4) selected @endif @endif>dengan tahapan waktu yang jelas dan sangat realistik | didukung dokumen yg sangat lengkap</option>
                                  <option value="3" @if (isset($data["1.1.b"])) @if ($data["1.1.b"] == 3) selected @endif @endif>dengan tahapan waktu yang jelas, dan realistik  | didukung dokumen yang  lengkap.</option>
                                  <option value="2" @if (isset($data["1.1.b"])) @if ($data["1.1.b"] == 2) selected @endif @endif>dengan tahapan waktu yang jelas, dan cukup realistik | didukung dokumen yang cukup lengkap.</option>
                                  <option value="1" @if (isset($data["1.1.b"])) @if ($data["1.1.b"] == 1) selected @endif @endif>tanpa adanya tahapan waktu yang jelas | didukung dokumen yang kurang lengkap</option>
                                </select>
                            </div>
                        </li>
                        <li class="row">
                            <div class="col-md-12 komponen">
                                <span class="nomor pull-left">1.2</span>
                                <div class="deskriptor pull-left">
                                    <strong>Pemahaman  visi, misi, tujuan, dan sasaran Fakultas/ Sekolah Tinggi oleh seluruh pemangku kepentingan internal (internal stakeholders): sivitas akademika (dosen dan mahasiswa) dan tenaga kependidikan.</strong>
                                </div>

                            </div>
                            <div class="col-md-12">
                                <select name="skor1_2" id="" class="form-control border-input">
                                    <option disabled selected >--Pilih--</option>
                                    <option value="4" @if (isset($data["1.2"])) @if ($data["1.2"] == 4) selected @endif @endif>Dipahami dengan baik oleh seluruh sivitas akademika  dan tenaga kependidikan. </option>
                                    <option value="3" @if (isset($data["1.2"])) @if ($data["1.2"] == 3) selected @endif @endif>Dipahami dengan baik oleh sebagian  sivitas akademika dan tenaga kependidikan.</option>
                                    <option value="2" @if (isset($data["1.2"])) @if ($data["1.2"] == 2) selected @endif @endif>Kurang dipahami oleh  sivitas akademika  dan tenaga kependidikan.</option>
                                    <option value="1" @if (isset($data["1.2"])) @if ($data["1.2"] == 1) selected @endif @endif>Tidak dipahami oleh seluruh sivitas akademika dan tenaga kependidikan.</option>
                                </select>
                            </div>
                        </li>
                    </ul>
                  </fieldset>

                <div class="footer text-center">
                    <button type="submit" class="btn btn-info btn-fill btn-wd" @if (sizeof($data)>0) disabled @endif>Simpan</button>
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

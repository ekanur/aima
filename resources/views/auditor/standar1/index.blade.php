@extends("layoutauditor")
@section("content")
<div class="col-md-12">
@include("auditor.riwayat")
    <div class="card">
        <div class="header">

            <h4 class="title">Visi, Misi, Tujuan, dan Sasaran, serta Strategi Pencapaian</h4>
            <p class="category">Standar 1</p>
        </div>
        <div class="content">
            <form @if(0==sizeof($data)) action="/auditor/isi/{{$idprodi}}/standar1/save" @else action="/auditor/isi/{{$idprodi}}/standar1/update" @endif method="post" class="kuesioner">
            {{csrf_field()}}
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
                        @component ('auditor.isiangket')
                                @if(isset($data_kprodi['1.1.a']))
                                    @slot('skor')
                                        {{ $data_kprodi['1.1.a']  }}
                                    @endslot
                                    @slot('isian_angket')
                                    <select name="skor1_1_a_kprodi" id="" class="form-control border-input" disabled >
                                        <option disabled="" selected="">--Pilih--</option>
                                        <option value="4" @if ($data_kprodi["1.1.a"] == 4) selected @endif>Memiliki visi, misi, tujuan, dan sasaran yang sangat jelas dan sangat realistik</option>
                                        <option value="3" @if ($data_kprodi["1.1.a"] == 3) selected @endif>Memiliki visi, misi, tujuan, dan sasaran jelas dan  realistik.</option>
                                        <option value="2" @if ($data_kprodi["1.1.a"] == 2) selected @endif>Memiliki visi, misi, tujuan, dan sasaran yang cukup jelas namun kurang realistik.</option>
                                        <option value="1" @if ($data_kprodi["1.1.a"] == 1) selected @endif>Memiliki visi, misi, tujuan, dan sasaran yang kurang jelas dan tidak realistik</option>

                                    </select>
                                    @endslot

                                    @if($standar_status_code == 7)
                                        @slot('aksi_field')
                                            <select name="setuju_1_1_a" id="setuju_1_1_a" class="form-control border-input">
                                                <option value="1">Setuju</option>
                                                <option value="0" @if(isset($data["1.1.a"])) @if($data_kprodi["1.1.a"] != $data["1.1.a"]) selected @endif @endif>Validasi</option>
                                            </select>
                                        @endslot
                                    @endif

                                   
                                @endif

                                

                        @endcomponent
                        
                        @component("auditor.validasi_auditor")
                            
                            @slot("id_input")
                                1_1_a
                            @endslot
                            @slot('validasi_auditor')

                                            <select name="skor1_1_a" id="validasi_auditor_1_1_a" class="form-control border-input" required="">
                                                <option disabled="" selected="">--Pilih--</option>
                                                <option value="4" @if (isset($data["1.1.a"])) @if ($data["1.1.a"] == 4 ) selected @endif @endif>Memiliki visi, misi, tujuan, dan sasaran yang sangat jelas dan sangat realistik</option>
                                                <option value="3" @if (isset($data["1.1.a"])) @if ($data["1.1.a"] == 3) selected @endif @endif>Memiliki visi, misi, tujuan, dan sasaran jelas dan  realistik.</option>
                                                <option value="2" @if (isset($data["1.1.a"])) @if ($data["1.1.a"] == 2) selected @endif @endif>Memiliki visi, misi, tujuan, dan sasaran yang cukup jelas namun kurang realistik.</option>
                                                <option value="1" @if (isset($data["1.1.a"])) @if ($data["1.1.a"] == 1) selected @endif @endif>Memiliki visi, misi, tujuan, dan sasaran yang kurang jelas dan tidak realistik</option>

                                            </select>
                            @endslot
                        @endcomponent
                        
                    </li>
                    <li class="row">
                        <div class="col-md-12 komponen">
                            <span class="nomor pull-left">1.1.b</span>
                            <div class="deskriptor pull-left">
                                <strong>Strategi pencapaian sasaran dengan rentang waktu yang jelas dan didukung oleh dokumen.</strong>
                            </div>
                        </div>
                        @component ('auditor.isiangket')
                                @if(isset($data_kprodi['1.1.b']))
                                    @slot('skor')
                                        {{ $data_kprodi['1.1.b']  }}
                                    @endslot
                                    @slot('isian_angket')

                                    <select name="skor1_1_b_kprodi" id="" class="form-control border-input" disabled >
                                        <option disabled="" selected="">--Pilih--</option>
                                      <option value="4" @if ($data_kprodi["1.1.b"] == 4) selected  @endif>dengan tahapan waktu yang jelas dan sangat realistik | didukung dokumen yg sangat lengkap</option>
                                      <option value="3"@if ($data_kprodi["1.1.b"] == 3) selected  @endif>dengan tahapan waktu yang jelas, dan realistik  | didukung dokumen yang  lengkap.</option>
                                      <option value="2" @if ($data_kprodi["1.1.b"] == 2) selected  @endif>dengan tahapan waktu yang jelas, dan cukup realistik | didukung dokumen yang cukup lengkap.</option>
                                      <option value="1"@if ($data_kprodi["1.1.b"] == 1) selected  @endif>tanpa adanya tahapan waktu yang jelas | didukung dokumen yang kurang lengkap</option>
                                    </select>
                                    @endslot

                                    @if($standar_status_code == 7)
                                        @slot('aksi_field')
                                            <select name="setuju_1_1_b" id="setuju_1_1_b" class="form-control border-input">
                                                <option value="1">Setuju</option>
                                                <option value="0" @if(isset($data["1.1.b"])) @if($data_kprodi["1.1.b"] != $data["1.1.b"]) selected @endif @endif>Validasi</option>
                                            </select>
                                        @endslot
                                    @endif

                                   
                                @endif

                                

                        @endcomponent

                        @component("auditor.validasi_auditor")
                            
                            @slot("id_input")
                                1_1_b
                            @endslot
                            @slot('validasi_auditor')
                                <select name="skor1_1_b" id="validasi_auditor_1_1_b" class="form-control border-input" required="">
                                    <option disabled="" selected="">--Pilih--</option>
                                  <option value="4" @if (isset($data["1.1.b"])) @if ($data["1.1.b"] == 4) selected @endif @endif>dengan tahapan waktu yang jelas dan sangat realistik | didukung dokumen yg sangat lengkap</option>
                                  <option value="3" @if (isset($data["1.1.b"])) @if ($data["1.1.b"] == 3) selected @endif @endif>dengan tahapan waktu yang jelas, dan realistik  | didukung dokumen yang  lengkap.</option>
                                  <option value="2" @if (isset($data["1.1.b"])) @if ($data["1.1.b"] == 2) selected @endif @endif>dengan tahapan waktu yang jelas, dan cukup realistik | didukung dokumen yang cukup lengkap.</option>
                                  <option value="1" @if (isset($data["1.1.b"])) @if ($data["1.1.b"] == 1) selected @endif @endif>tanpa adanya tahapan waktu yang jelas | didukung dokumen yang kurang lengkap</option>
                                </select>
                            @endslot
                        @endcomponent
                        
                        
                    </li>


                    <li class="row">
                        <div class="col-md-12 komponen">
                            <span class="nomor pull-left">1.2</span>
                            <div class="deskriptor pull-left">
                                <strong>Pemahaman  visi, misi, tujuan, dan sasaran Fakultas/ Sekolah Tinggi oleh seluruh pemangku kepentingan internal (internal stakeholders): sivitas akademika (dosen dan mahasiswa) dan tenaga kependidikan.</strong>
                            </div>

                        </div>
                        @component('auditor.isiangket')
                            @if(isset($data_kprodi['1.2']))
                                @slot("skor")
                                    {{$data_kprodi['1.2']}}
                                @endslot

                                @slot("isian_angket")
                                    <select name="skor1_2_kprodi" id="" class="form-control border-input" disabled>
                                        <option disabled="" selected="">--Pilih--</option>
                                        <option value="4" @if ($data_kprodi["1.2"] == 4) selected @endif>Dipahami dengan baik oleh seluruh sivitas akademika  dan tenaga kependidikan. </option>
                                        <option value="3" @if ($data_kprodi["1.2"] == 3) selected @endif>Dipahami dengan baik oleh sebagian  sivitas akademika dan tenaga kependidikan.</option>
                                        <option value="2" @if ($data_kprodi["1.2"] == 2) selected @endif>Kurang dipahami oleh  sivitas akademika  dan tenaga kependidikan.</option>
                                        <option value="1" @if ($data_kprodi["1.2"] == 1) selected @endif>Tidak dipahami oleh seluruh sivitas akademika dan tenaga kependidikan.</option>
                                    </select>
                                @endslot

                                @if($standar_status_code == 7)
                                    @slot('aksi_field')
                                        <select name="setuju_1_2" id="setuju_1_2" class="form-control border-input">
                                                <option value="1">Setuju</option>
                                                <option value="0" @if(isset($data["1.2"])) @if($data_kprodi["1.2"] != $data["1.2"]) selected @endif @endif>Validasi</option>
                                        </select>
                                    @endslot
                                @endif
                            @endif
                        @endcomponent

                        @component("auditor.validasi_auditor")
                           
                            @slot("id_input")
                                1_2
                            @endslot

                            @slot("validasi_auditor")
                                <select name="skor1_2" id="validasi_auditor_1_2" class="form-control border-input" required="">
                                    <option disabled="" selected="">--Pilih--</option>
                                    <option value="4" @if (isset($data["1.2"])) @if ($data["1.2"] == 4) selected @endif @endif>Dipahami dengan baik oleh seluruh sivitas akademika  dan tenaga kependidikan. </option>
                                    <option value="3"@if (isset($data["1.2"])) @if ($data["1.2"] == 3) selected @endif @endif>Dipahami dengan baik oleh sebagian  sivitas akademika dan tenaga kependidikan.</option>
                                    <option value="2" @if (isset($data["1.2"])) @if ($data["1.2"] == 2) selected @endif @endif>Kurang dipahami oleh  sivitas akademika  dan tenaga kependidikan.</option>
                                    <option value="1" @if (isset($data["1.2"])) @if ($data["1.2"] == 1) selected @endif @endif>Tidak dipahami oleh seluruh sivitas akademika dan tenaga kependidikan.</option>
                                </select>
                            @endslot
                        @endcomponent
                    </li>
                </ul>

            <div class="footer text-center">
                <button type="submit" class="btn btn-info btn-fill btn-wd" @if ($standar_status_code != 7) disabled @endif>Simpan</button>
            <div class="clearfix"></div>
            </div>
            </form>
        </div>
    </div>
</div>
@endsection



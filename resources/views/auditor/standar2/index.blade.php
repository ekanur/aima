@extends("layoutauditor")
@section("content")
<div class="col-md-12">
@include("auditor.riwayat")
    <div class="card">
        <div class="header">
            <h4 class="title">Tata Pamong, Kepemimpinan, Sistem Pengelolaan, dan Penjaminan Mutu</h4>
            <p class="category">Standar 2</p>
        </div>
        <div class="content">
            <form @if(0==sizeof($data)) action="/auditor/isi/{{$idprodi}}/standar2/save" @else action="/auditor/isi/{{$idprodi}}/standar2/update" @endif method="post" class="kuesioner">
            {{csrf_field()}}
            <input type="hidden" name="skor2_1_old" value="@if(isset($data["2.1"])) {{ $data["2.1"] }} @endif">
            <input type="hidden" name="skor2_2_old" value="@if(isset($data["2.2"])) {{ $data["2.2"] }} @endif">
            <input type="hidden" name="skor2_6_old" value="@if(isset($data["2.6"])) {{ $data["2.6"] }} @endif">

                <ul class="list-unstyled">
                    <li class="row">
                        <div class="col-md-12 komponen">
                            <span class="nomor pull-left">2.1</span>
                            <div class="deskriptor pull-left">
                                <strong>Tata Pamong adalah sistem yang bisa menjamin terlaksananya lima pilar tata pamong yaitu: <br/>(1) kredibel, (2) transparan, (3) akuntabel, (4) bertanggung jawab, (5) adil.</strong>
                            </div>
                        </div>
                        @component("auditor.isiangket")
                            @isset ($data_kprodi["2.1"])
                                @slot('skor')
                                    {{$data_kprodi["2.1"]}}
                                @endslot

                                @slot('isian_angket')
                                    <select name="skor2_1_kprodi" id="" class="form-control border-input" disabled>
                                        <option disabled="" selected="">--Pilih--</option>
                                        <option value="4" @if ($data_kprodi["2.1"] == 4) selected @endif>Tata pamong memenuhi 5 aspek tersebut</option>
                                        <option value="3" @if ($data_kprodi["2.1"] == 3) selected @endif>Tata pamong memenuhi 4 dari 5 aspek tersebut</option>
                                        <option value="2" @if ($data_kprodi["2.1"] == 2) selected @endif>Tata pamong memenuhi 3 dari 5 aspek tersebut</option>
                                        <option value="1" @if ($data_kprodi["2.1"] == 1) selected @endif>Tata pamong memenuhi 1 s.d 2 dari 5 aspek tersebut</option>
                                    </select>
                                @endslot

                                @if ($standar_status_code == 7)
                                    @slot('aksi_field')
                                        <select name="setuju_2_1" id="setuju_2_1" class="form-control border-input">
                                                <option value="1">Setuju</option>
                                                <option value="0" @if(isset($data["2.1"])) @if($data_kprodi["2.1"] != $data["2.1"]) selected @endif @endif>Validasi</option>
                                        </select>
                                    @endslot
                                @endif
                            @endisset
                        @endcomponent

                        @component("auditor.validasi_auditor")
                            @slot('id_input')
                                2_1
                            @endslot
                            @slot('validasi_auditor')
                                <select name="skor2_1" id="" class="form-control border-input" required="">
                                    <option disabled="" selected="">--Pilih--</option>
                                    <option value="4" @if (isset($data["2.1"])) @if ($data["2.1"] == 4) selected @endif @endif>Tata pamong memenuhi 5 aspek tersebut</option>
                                    <option value="3" @if (isset($data["2.1"])) @if ($data["2.1"] == 3) selected @endif @endif>Tata pamong memenuhi 4 dari 5 aspek tersebut</option>
                                    <option value="2" @if (isset($data["2.1"])) @if ($data["2.1"] == 2) selected @endif @endif>Tata pamong memenuhi 3 dari 5 aspek tersebut</option>
                                    <option value="1" @if (isset($data["2.1"])) @if ($data["2.1"] == 1) selected @endif @endif>Tata pamong memenuhi 1 s.d 2 dari 5 aspek tersebut</option>

                                </select>
                            @endslot
                        @endcomponent
                        <div class="col-md-12">
                            
                        </div>
                    </li>
                    <li class="row">
                        <div class="col-md-12 komponen">
                            <span class="nomor pull-left">2.2</span>
                            <div class="deskriptor pull-left">
                                <strong>Kepemimpinan Program Studi memiliki karakteristik:<br/> (1) kepemimpinan operasional, (2) kepemimpinan organisasi, (3) kepemimpinan publik.</strong>
                            </div>
                        </div>
                        @component("auditor.isiangket")
                            @isset ($data_kprodi["2.2"])
                                @slot('skor')
                                    {{$data_kprodi["2.2"]}}
                                @endslot

                                @slot('isian_angket')
                                    <select name="skor2_2_kprodi" id="" class="form-control border-input" disabled >
                                        <option disabled="" selected="">--Pilih--</option>
                                        <option value="4" @if ($data_kprodi["2.2"] == 4) selected @endif>Kepemimpinan program studi memiliki karakteristik yang kuat pada 3 aspek tersebut</option>
                                        <option value="3" @if ($data_kprodi["2.2"] == 3) selected @endif>Memiliki karakter kepemimpinan yang kuat dalam dua dari karakteristik tersebut</option>
                                        <option value="2" @if ($data_kprodi["2.2"] == 2) selected @endif>Memiliki karakter kepemimpinan yang kuat dalam salah satu dari karakteristik tersebut</option>
                                        <option value="1" @if ($data_kprodi["2.2"] == 1) selected @endif>Kepemimpinan program studi lemah dalam karakteristik tersebut</option>
                                    </select>
                                @endslot
                                @if ($standar_status_code == 7)
                                    @slot('aksi_field')
                                        <select name="setuju_2_2" id="setuju_2_2" class="form-control border-input">
                                                <option value="1">Setuju</option>
                                                <option value="0" @if(isset($data["2.2"])) @if($data_kprodi["2.2"] != $data["2.2"]) selected @endif @endif>Validasi</option>
                                        </select>
                                    @endslot
                                @endif
                            @endisset
                        @endcomponent
                            
                        @component("auditor.validasi_auditor")
                            @slot('id_input')
                                2_2                                
                            @endslot
                            @slot('validasi_auditor')
                                <select name="skor2_2" id="" class="form-control border-input" required="">
                                    <option disabled="" selected="">--Pilih--</option>
                                    <option value="4" @if (isset($data["2.2"])) @if ($data["2.2"] == 4) selected @endif @endif>Kepemimpinan program studi memiliki karakteristik yang kuat pada 3 aspek tersebut</option>
                                    <option value="3" @if (isset($data["2.2"])) @if ($data["2.2"] == 3) selected @endif @endif>Memiliki karakter kepemimpinan yang kuat dalam dua dari karakteristik tersebut</option>
                                    <option value="2" @if (isset($data["2.2"])) @if ($data["2.2"] == 2) selected @endif @endif>Memiliki karakter kepemimpinan yang kuat dalam salah satu dari karakteristik tersebut</option>
                                    <option value="1" @if (isset($data["2.2"])) @if ($data["2.2"] == 1) selected @endif @endif>Kepemimpinan program studi lemah dalam karakteristik tersebut</option>
                                </select>
                            @endslot
                        @endcomponent
                    </li>
                    <li class="row">
                        <div class="col-md-12 komponen">
                            <span class="nomor pull-left">2.6</span>
                            <div class="deskriptor pull-left">
                                <strong>Upaya-upaya yang telah dilakukan penyelenggara program studi untuk menjamin keberlanjutan (sustainability) program studi ini antara lain mencakup: <br/>a. Upaya untuk peningkatan animo calon mahasiswa, <br/>b. Upaya peningkatan mutu manajemen, <br/>c. Upaya untuk peningkatan mutu lulusan,<br/> d. Upaya untuk pelaksanaan dan hasil kerjasama kemitraan, <br/>e. Upaya dan prestasi dalam memperoleh dana hibah kompetitif.</strong>
                            </div>

                        </div>
                        @component("auditor.isiangket")
                            @isset ($data_kprodi["2.6"])
                                @slot('skor')
                                    {{$data_kprodi["2.6"]}}
                                @endslot

                                @slot('isian_angket')
                                    <select name="skor2_6" id="" class="form-control border-input" disabled>
                                        <option disabled="" selected="">--Pilih--</option>
                                        <option value="4" @if (isset($data_kprodi["2.6"])) @if ($data_kprodi["2.6"] == 4) selected @endif @endif>Ada bukti semua usaha dilakukan berikut hasilnya.</option>
                                        <option value="3" @if (isset($data_kprodi["2.6"])) @if ($data_kprodi["2.6"] == 3) selected @endif @endif>Ada bukti sebagian usaha ( > 3) dilakukan.</option>
                                        <option value="2" @if (isset($data_kprodi["2.6"])) @if ($data_kprodi["2.6"] == 2) selected @endif @endif>Ada bukti hanya sebagian kecil usaha (2-3) yang dilakukan.</option>
                                        <option value="1" @if (isset($data_kprodi["2.6"])) @if ($data_kprodi["2.6"] == 1) selected @endif @endif>Ada bukti hanya 1 usaha yang dilakukan.</option>
                                        <option value="0" @if (isset($data_kprodi["2.6"])) @if ($data_kprodi["2.6"] == 0) selected @endif @endif>Tidak ada usaha.</option>
                                    </select>
                                @endslot
                                @if ($standar_status_code == 7)
                                    @slot('aksi_field')
                                        <select name="setuju_2_6" id="setuju_2_6" class="form-control border-input">
                                                <option value="1">Setuju</option>
                                                <option value="0" @if(isset($data["2.1"])) @if($data_kprodi["2.6"] != $data["2.6"]) selected @endif @endif>Validasi</option>
                                        </select>
                                    @endslot
                                @endif
                            @endisset
                        @endcomponent
                            
                        @component("auditor.validasi_auditor")
                            @slot('id_input')
                                2_6                                
                            @endslot
                            @slot('validasi_auditor')
                                <select name="skor2_6" id="" class="form-control border-input" required="">
                                    <option disabled="" selected="">--Pilih--</option>
                                    <option value="4" @if (isset($data["2.6"])) @if ($data["2.6"] == 4) selected @endif @endif>Ada bukti semua usaha dilakukan berikut hasilnya.</option>
                                    <option value="3" @if (isset($data["2.6"])) @if ($data["2.6"] == 3) selected @endif @endif>Ada bukti sebagian usaha ( > 3) dilakukan.</option>
                                    <option value="2" @if (isset($data["2.6"])) @if ($data["2.6"] == 2) selected @endif @endif>Ada bukti hanya sebagian kecil usaha (2-3) yang dilakukan.</option>
                                    <option value="1" @if (isset($data["2.6"])) @if ($data["2.6"] == 1) selected @endif @endif>Ada bukti hanya 1 usaha yang dilakukan.</option>
                                    <option value="0" @if (isset($data["2.6"])) @if ($data["2.6"] == 0) selected @endif @endif>Tidak ada usaha.</option>
                                </select>
                            @endslot
                        @endcomponent
                        
                    </li>
                </ul>

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

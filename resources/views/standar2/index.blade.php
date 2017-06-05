@extends("layout")
@section("content")
<div class="col-md-12">
    <div class="card">
        <div class="header">
            <h4 class="title">Visi, Misi, Tujuan, dan Sasaran, serta Strategi Pencapaian</h4>
            <p class="category">Standar 1</p>
        </div>
        <div class="content">
            <form @if(0==sizeof($data)) action="/standar2/save" @else action="/standar2/update" @endif method="post" class="kuesioner">
            {{csrf_field()}}
            <input type="hidden" name="skor2_1_old" value="@if(isset($data["2.1"])) {{ $data["2.1"] }} @endif">
            <input type="hidden" name="skor2_2_old" value="@if(isset($data["2.2"])) {{ $data["2.2"] }} @endif">
            <input type="hidden" name="skor2_6_old" value="@if(isset($data["2.6"])) {{ $data["2.6"] }} @endif">

                <ul class="list-unstyled">
                    <li class="row">
                        <div class="col-md-11 komponen">
                            <span class="nomor pull-left">2.1</span>
                            <div class="deskriptor pull-left">
                                <strong>Kejelasan dan kerealistikan visi, misi, tujuan, dan sasaran, serta strategi pencapaian sasaran Fakultas/Sekolah Tinggi.</strong>
                            </div>
                        </div>
                        <div class="col-md-1">
                            <select name="skor2_1" id="" class="form-control border-input">
                            @for($i=1;$i<=4; $i++)
                                <option value="{{ $i }}" @if(isset($data["2.1"]) && $data["2.1"] == $i)) selected="true"  @endif>{{ $i }}</option>
                            @endfor

                            </select>
                        </div>
                    </li>
                    <li class="row">
                        <div class="col-md-11 komponen">
                            <span class="nomor pull-left">2.2</span>
                            <div class="deskriptor pull-left">
                                <strong>Strategi pencapaian sasaran dengan rentang waktu yang jelas dan didukung oleh dokumen.</strong>
                            </div>
                        </div>
                        <div class="col-md-1">
                            <select name="skor2_2" id="" class="form-control border-input">
                               @for($i=1;$i<=4; $i++)
                                <option value="{{ $i }}" @if(isset($data["2.2"]) && $data["2.2"] == $i)) selected="true"  @endif>{{ $i }}</option>
                            @endfor
                            </select>
                        </div>
                    </li>
                    <li class="row">
                        <div class="col-md-11 komponen">
                            <span class="nomor pull-left">2.6</span>
                            <div class="deskriptor pull-left">
                                <strong>Pemahaman  visi, misi, tujuan, dan sasaran Fakultas/ Sekolah Tinggi oleh seluruh pemangku kepentingan internal (internal stakeholders): sivitas akademika (dosen dan mahasiswa) dan tenaga kependidikan.</strong>
                            </div>

                        </div>
                        <div class="col-md-1">
                            <select name="skor2_6" id="" class="form-control border-input">
                                @for($i=0;$i<=4; $i++)
                                <option value="{{ $i }}" @if(isset($data["2.6"]) && $data["2.6"] == $i)) selected="true"  @endif>{{ $i }}</option>
                            @endfor
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

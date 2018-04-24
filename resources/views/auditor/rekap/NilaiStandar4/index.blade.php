@extends("layoutauditor")
@section("content")
<div class="col-md-12">
@include("auditor.riwayat")
    <div class="card">
        <div class="header">
            <h4 class="title">REKAPITULASI (Lihat Nilai)</h4>
            {{-- <p class="category">Prodi Pendidikan Teknik Informatika</p> --}}
        </div>

        <div class="content">
            <form>

            <div class="btn-group btn-group-justified">
              <a href="/auditor/rekap/{{$idprodi}}/nilaistandar1" class="btn btn-primary">Standar 1</a>
              <a href="/auditor/rekap/{{$idprodi}}/nilaistandar2" class="btn btn-primary">Standar 2</a>
              <a href="/auditor/rekap/{{$idprodi}}/nilaistandar3" class="btn btn-primary">Standar 3</a>
              <a href="/auditor/rekap/{{$idprodi}}/nilaistandar4" class="btn btn-primary active">Standar 4</a>
              <a href="/auditor/rekap/{{$idprodi}}/nilaistandar5" class="btn btn-primary">Standar 5</a>
              <a href="/auditor/rekap/{{$idprodi}}/nilaistandar6" class="btn btn-primary">Standar 6</a>
              <a href="/auditor/rekap/{{$idprodi}}/nilaistandar7" class="btn btn-primary">Standar 7</a>
              </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="main-panel" style="width:100%">
                        <h4 class="title">Koord. Prodi</h4>
                          <table border="1" class="table">
                            <thead>
                              <tr class="warning">
                                <!-- tampilkan kode  -->
                                @foreach ($nilai_kprodi as $tampilkan)
                                <td>{{$tampilkan->kode}} </td>
                                 @endforeach
                                  @if(sizeof($nilai_kprodi)>0)<td>Total</td>@endif
                                 

                              </tr>

                          <!-- menampilkan data nilai -->
                              <tr>
                              @foreach ($nilai_kprodi as $tampilkan)
                              <td>{{$tampilkan->kategori}} </td>
                               @endforeach
                               <!-- menampilkan nilai total -->

                              @if(sizeof($nilai_kprodi)>0)<td>  {{$total}}</td>
                              @else<h3 class="text-muted text-center">Data Kosong</h3>
                              @endif
                                </tr>
                          </thead>
                        </table>
                        </div>
                    </div>
                </div>
                <div class="row">
                  

                    <div class="col-md-12">
                        <div class="main-panel" style="width:100%">
                        <h4 class="title">Auditor</h4>
                          <table border="1" class="table">
                            <thead>
                              <tr class="warning">
                                <!-- tampilkan kode  -->
                                @foreach ($nilai_auditor as $tampilkan)
                                <td>{{$tampilkan->kode}} </td>
                                 @endforeach
                                  @if(sizeof($nilai_auditor)>0)<td>Total</td>@endif
                                 

                              </tr>

                          <!-- menampilkan data nilai -->
                              <tr>
                              @foreach ($nilai_auditor as $tampilkan)
                              <td>{{$tampilkan->kategori}} </td>
                               @endforeach
                               <!-- menampilkan nilai total -->

                              @if(sizeof($nilai_auditor)>0)<td>  {{$total}}</td>
                              @else<h3 class="text-muted text-center">Data Kosong</h3>
                              @endif
                                </tr>
                          </thead>
                        </table>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection

@extends("layout")
@section("content")

<div class="col-md-12">
    <div class="card">
        <div class="header">
          <h4 class="title">REKAPITULASI (Lihat Nilai) <span class="pull-right"><a href="{{ url("/rekap/cetak") }}" target="_blank"><i class="fa fa-print"></i></a></span></h4>
          <p class="category">{{session('nama_prodi')}}</p>
        </div>
        <div class="content">
            <div class="btn-group btn-group-justified">
              <a href="/rekap/nilaistandar1" class="btn btn-primary active">Standar 1</a>
              <a href="/rekap/nilaistandar2" class="btn btn-primary">Standar 2</a>
              <a href="/rekap/nilaistandar3" class="btn btn-primary">Standar 3</a>
              <a href="/rekap/nilaistandar4" class="btn btn-primary">Standar 4</a>
              <a href="/rekap/nilaistandar5" class="btn btn-primary">Standar 5</a>
              <a href="/rekap/nilaistandar6" class="btn btn-primary">Standar 6</a>
              <a href="/rekap/nilaistandar7" class="btn btn-primary">Standar 7</a>
              </div>

              <div class="row">
                  <div class="col-md-12">

                    <div class="col-md-12">
                        <div class="main-panel" style="width:100%">
                          <table border="1" class="table">
                          <thead>
                          <tr class="warning">
                            <!-- tampilkan kode  -->
                            @php $i=1 @endphp
                            @foreach ($nilaistandar1 as $tampilkan)
                            @php $i++ @endphp
                            <td>{{$tampilkan->kode}} </td>
                             @endforeach

                           {{--   @if($total>0)<td> Total </td>
                             @endif --}}

                          </tr>
                        </thead>
                          <!-- menampilkan data nilai -->
                          <tr>
                          @foreach ($nilaistandar1 as $tampilkan)
                          <td>{{$tampilkan->kategori}} </td>
                           @endforeach
                           <!-- menampilkan nilai total -->

                            {{--  @if($total>0)<td>{{$total}}</td> --}}
                             @if(!$total)<td colspan={{ $i }}><h3 class="text-muted text-center">Data Kosong</h3></td>
                             @endif


                            </tr>

                        </tr>
                        </thead>
                        </table>
                        </div>
                    </div>
                  </div>
            </div>
        </div>
    </div>
</div>

@endsection

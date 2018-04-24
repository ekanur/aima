
@extends("layout")
@section("content")

<div class="col-md-12">
    <div class="card">
        <div class="header">
            <h4 class="title">REKAPITULASI (Lihat Nilai)</h4>
            <p class="category">{{session('nama_prodi')}}</p>
        </div>

        <div class="content">
            <form

            <div class="btn-group btn-group-justified">
              <a href="/rekap/nilaistandar1" class="btn btn-primary">Standar 1</a>
              <a href="/rekap/nilaistandar2" class="btn btn-primary">Standar 2</a>
              <a href="/rekap/nilaistandar3" class="btn btn-primary">Standar 3</a>
              <a href="/rekap/nilaistandar4" class="btn btn-primary">Standar 4</a>
              <a href="/rekap/nilaistandar5" class="btn btn-primary">Standar 5</a>
              <a href="/rekap/nilaistandar6" class="btn btn-primary">Standar 6</a>
              <a href="/rekap/nilaistandar7" class="btn btn-primary  active">Standar 7</a>
              </div>


              <div class="row">
                  <div class="col-md-12">
                      <div class="main-panel" style="width:100%">
                        <div class="card-content table-responsive">
                          <table border="1"  class="table">
                            <thead>
                              <tr class="warning">
                                <!-- tampilkan kode -->
                                @foreach ($nilaistandar7 as $tampilkan)
                                <td>{{$tampilkan->kode}} </td>
                                 @endforeach
                                @if($total)<td> Total Nilai</td>@endif
                              </tr>

                              <!-- tampilkan nilai -->
                              @foreach ($nilaistandar7 as $tampilkan)
                              <td>{{$tampilkan->kategori}} </td>
                               @endforeach

                              @if($total)<td><!-- {{$total}} --></td>
                               @else<h3 class="text-muted text-center">Data Kosong</h3>
                               @endif
                            </thead>
                          </table>

                                    <!-- <h3 class="text-muted text-center">Belum mengisi data</h3> -->
                          </div>
                        </div>
                  </div>
                </div>
              </div>
            </form>
        </div>
    </div>
</div>

@endsection

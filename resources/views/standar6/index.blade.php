@extends('layout')
@section('title', 'Standar 6')
@section('content')
<div class="col-md-12">
    <div class="card">
        <div class="header">
            <h4 class="title">Pembiayaan, Sarana dan Prasarana,serta Sistem Informasi</h4>
            <p class="category">Standar 6</p>
        </div>

        <div class="content">
            <form action="/standar6/save" method="post" class="kuesioner">
                {{ csrf_field() }}
                <ul class="list-unstyled">
                    <li class="row">
                        <div class="col-md-12 komponen">
                            <span class="nomor pull-left">6.2.1</span>
                            <div class="deskriptor pull-left">
                              <div class="row">
                                 <strong>Penggunaan dana untuk operasional (pendidikan, penelitian, pengabdian pada masyarakat, termasuk gaji dan upah).</strong>
                              </div>
                            <div class="row">
                              <div class="form-group col-md-3">
                                <label for="nilai6_2_1_dana">Jumlah Dana Operasional Permahasiswa Pertahun</label>
                                <input type="number" name="nilai6_2_1_dana" class="form-control border-input" id="nilai6_2_1" required="">
                              </div>
                          </div>
                        </div>
                    </li>

                    <li class="row">
                      <div class="col-md-12 komponen">
                          <div class="pull-left nomor">6.2.2</div>
                          <div class="deskriptor pull-left">
                            <div class="row">
                              <strong> Dana yang diperoleh dalam rangka pelayanan/pengabdian kepada masyarakat dalam tiga  tahun terakhir </strong>
                            </div>
                        <div class="row">
                            <div class="form-group col-md-4">
                              <label for="nilai6_2_2dana">Rata-rata dana penelitian per dosen tetap per tahun</label>
                              <input type="number" name="nilai6_2_2dana" class="form-control border-input" id="nilai6_2_2" required="">
                            </div>
                          </div>
                    </li>

                    <li class="row">
                        <div class="col-md-12 komponen">
                            <div class="pull-left nomor">6.2.3</div>
                            <div class="deskriptor pull-left">
                              <div class="row">
                                <strong> Dana yang diperoleh dalam rangka pelayanan/pengabdian kepada masyarakat dalam tiga  tahun terakhir </strong>
                              </div>
                            <div class="row">
                              <div class="form-group col-md-3">
                                <input type="number" name="nilai6_2_3satu" class="form-control border-input" id="nilai6_2_3" required="">
                              </div>
                            </div>
                          </div>
                      </li>

                    <li class="row">
                      <div class="col-md-12 komponen">
                          <div class="pull-left nomor">6.3.1</div>
                          <div class="deskriptor pull-left">
                            <div class="row">
                              <strong>Luas Kerja Dosen </strong>
                            </div>
                          <div class="row">
                            <div class="form-group col-md-3">
                              <label for="a">Luas total (m2) ruang bersama untuk dosen tetap</label>
                              <input type="number" name="a" class="form-control border-input" id="nilai6_3_1" required="">
                            </div>

                            <div class="form-group col-md-3">
                              <label for="b">Luas total (m2) ruang untuk 3-4 orang dosen tetap</label>
                              <input type="number" name="b" class="form-control border-input" id="nilai6_3_1" required="">
                            </div>
                            <div class="form-group col-md-3">
                              <label for="c">Luas total (m2) ruang untuk 2 orang dosen tetap</label>
                              <input type="number" name="c" class="form-control border-input" id="nilai6_3_1" required="">
                            </div>
                            <div class="form-group col-md-3">
                              <label for="d">Luas total (m2) ruang untuk 1 orang dosen tetap</label>
                              <input type="number" name="d" class="form-control border-input" id="nilai6_3_1" required="">
                            </div>
                          </div>
                        </div>
                    </li>

                    <li class="row">
                        <div class="col-md-12 komponen">
                            <div class="pull-left nomor"><small>6.4.1.a</small></div>
                            <div class="deskriptor pull-left">
                                <div class="row">
                                <strong>Bahan pustaka berupa buku teks.</strong>
                              </div>
                              <div class="row">
                                <div class="form-group col-md-3">
                                  <label for="nilai6_4_1_a">Jumlah bahan pustaka teks</label>
                                  <input type="number" name="nilai6_4_1_a" class="form-control border-input" id="nilai6_4_1_a" required="">
                                </div>
                              </div>
                            </div>
                        </div>
                    </li>

                    <li class="row">
                      <div class="col-md-12 komponen">
                          <div class="pull-left nomor"><small>6.4.1.b</small></div>
                          <div class="deskriptor pull-left">
                              <div class="row">
                              <strong>Bahan pustaka berupa disertasi/tesis/skripsi/tugas akhir</strong>
                            </div>
                            <div class="row">
                              <div class="form-group col-md-3">
                                <label for="nilai6_4_1_b">Jumlah bahan pustaka berupa disertasi/tesis/skripsi/tugas akhir</label>
                                <input type="number" name="nilai6_4_1_b" class="form-control border-input" id="nilai6_4_1_b" required="">
                              </div>
                            </div>
                          </div>
                      </div>
                    </li>

                    <li class="row">
                        <div class="col-md-12 komponen">
                            <div class="pull-left nomor"><small>6.4.1.c</small></div>
                            <div class="deskriptor pull-left">
                              <div class="row">
                                <strong>
                                Bahan pustaka berupa jurnal ilmiah terakreditasi Dikti
                                </strong>
                              </div>
                            <div class="row">
                              <div class="col-md-5">
                                <select name="nilai6_4_1_c" id="" class="form-control border-input" required="">
                                  <option value="4">≥3 Judul jurnal, nomornya lengkap</option>
                                  <option value="3">2 Judul jurnal, nomornya lengkap</option>
                                  <option value="2">1 Judul jurnal, nomornya lengkap</option>
                                  <option value="1">Tidak ada jurnal yang nomornya lengkap </option>
                                  <option value="0">Tidak memiliki jurnal terakreditasi</option>
                                </select>
                              </div>
                            </div>
                          </div>
                        </div>
                    </li>

                    <li class="row">
                      <div class="col-md-12 komponen">
                          <div class="pull-left nomor"><small>6.4.1.d</small></div>
                          <div class="deskriptor pull-left">
                            <div class="row">
                              <strong>
                              Bahan pustaka  berupa jurnal ilmiah internasional
                              </strong>
                            </div>
                          <div class="row">
                            <div class="col-md-5">
                              <select name="nilai6_4_1_d" id="" class="form-control border-input" required="">
                                <option value="4">≥2 Judul jurnal, nomornya lengkap</option>
                                <option value="3">2 Judul jurnal, nomornya lengkap</option>
                                <option value="2">Tidak ada jurnal yang nomornya lengkap</option>
                              </select>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>

                    <li class="row">
                        <div class="col-md-12 komponen">
                              <div class="pull-left nomor"><small>6.4.1.e</small></div>
                              <div class="deskriptor pull-left">
                                  <div class="row">
                                  <strong>Bahan pustaka berupa prosiding seminar dalam tiga tahun terakhir</strong>
                                </div>
                                <div class="row">
                                  <div class="form-group col-md-3">
                                    <label for="nilai6_4_1_esatu">Jumlah Prosiding dalam Tiga Tahun terakhir</label>
                                    <input type="number" name="nilai6_4_1_esatu" class="form-control border-input" id="nilai6_4_1_e" required="">
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



        <footer class="footer">
            <!--<div class="container-fluid">
                <nav class="pull-left">
                    <ul>

                        <li>
                            <a href="http://www.creative-tim.com">
                                Creative Tim
                            </a>
                        </li>
                        <li>
                            <a href="http://blog.creative-tim.com">
                               Blog
                            </a>
                        </li>
                        <li>
                            <a href="http://www.creative-tim.com/license">
                                Licenses
                            </a>
                        </li>
                    </ul>
                </nav>
                <div class="copyright pull-right">
                    &copy; <script>document.write(new Date().getFullYear())</script>, made with <i class="fa fa-heart heart"></i> by <a href="http://www.creative-tim.com">Creative Tim</a>
                </div>
            </div> -->
        </footer>

    </div>
</div>


</body>

    <!--   Core JS Files   -->
    <script src="assets/js/jquery-1.10.2.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

	<!--  Checkbox, Radio & Switch Plugins -->
	<script src="assets/js/bootstrap-checkbox-radio.js"></script>

	<!--  Charts Plugin -->
	<script src="assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="assets/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>

    <!-- Paper Dashboard Core javascript and methods for Demo purpose -->
	<script src="assets/js/paper-dashboard.js"></script>

	<!-- Paper Dashboard DEMO methods, don't include it in your project! -->
	<script src="assets/js/demo.js"></script>

	<script type="text/javascript">
    	$(document).ready(function(){

        	demo.initChartist();

        	$.notify({
            	icon: 'ti-gift',
            	message: "Welcome to <b>Paper Dashboard</b> - a beautiful Bootstrap freebie for your next project."

            },{
                type: 'success',
                timer: 4000
            });

    	});
	</script>

</html>
@endsection

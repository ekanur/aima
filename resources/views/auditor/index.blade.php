<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
  	<link rel="apple-touch-icon" sizes="76x76" href="{{ URL::asset('img/apple-icon.png') }}">
  	<link rel="icon" type="image/png" sizes="96x96" href="{{ URL::asset('img/favicon.png') }}">
  	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>Auditor</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
      <meta name="viewport" content="width=device-width" />


      <!-- Bootstrap core CSS     -->
      <link href="{{ URL::asset('css/bootstrap.min.css') }}" rel="stylesheet" />

      <!-- Animation library for notifications   -->
      <link href="{{ URL::asset('css/animate.min.css') }}" rel="stylesheet"/>

      <!--  Paper Dashboard core CSS    -->
      <link href="{{ URL::asset('css/demo.css') }}" rel="stylesheet" />
      <link href="{{ URL::asset('css/paper-dashboard.css') }}" rel="stylesheet"/>


      <!--  CSS for Demo Purpose, don't include it in your project     -->


      <!--  Fonts and icons     -->
      <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
      <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
      <link href="{{ URL::asset('css/themify-icons.css') }}" rel="stylesheet">

      @yield("css")
      <style>
      .dropdown-submenu {
          position: relative;
      }

      .dropdown-submenu .dropdown-menu {
          top: 0;
          left: 100%;
          margin-top: -1px;
      }
      </style>


  </head>
  <body>
    <div class="wrapper">


        <div class="main-panel" style="width:100%">
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar bar1"></span>
                            <span class="icon-bar bar2"></span>
                            <span class="icon-bar bar3"></span>
                        </button>
                        <a class="navbar-brand" href="#">AUDITOR ({{session('nip')}})</a>
                    </div>
                    <div class="collapse navbar-collapse">
                        <ul class="nav navbar-nav navbar-right">
                            {{-- <li>
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="ti-panel"></i>
    								<p>Hasil</p>
                                </a>
                            </li> --}}
                            <li>
                                  <a href="{{ url('/Panduan AIMA 1.0.pdf') }}" target="_blank">
                                        <i class="ti-face-smile"></i>
                                        <p>Bantuan</p>
                                  </a>
                                  
                            </li>
                            <li>
                                  <a href="{{ url('/servicelogout') }}" >
                                        <i class="ti-power-off"></i>
                                        <p>Logout</p>
                                  </a>
                                  
                            </li>
    						<!-- <li>
                                <a href="#">
    								<i class="ti-settings"></i>
    								<p>Settings</p>
                                </a>
                            </li> -->
                        </ul>

                    </div>
                </div>
            </nav>

            <div class="content">
                <div class="container-fluid">
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th>Fakultas</th>
                            <th><div class="col-xs-4">Nama Prodi</div></th>
                            <th style="text-align:center">Aksi</th>

                          </tr>
                        </thead>
                          <tbody>
                          @foreach($fakultas as $data_fakultas)
                            <tr>
                              <form id="form{{ $data_fakultas->fak_skt }}" action="" method="post">
                                {{ csrf_field() }}
                                <td>{{$data_fakultas->fak_nm}}</td>
                                <td>
                                  <div class="col-xs-5">
                                    <select class="form-control border-input" name="idprodi" id="select{{ $data_fakultas->fak_skt }}">
                                      <option>--Pilih Prodi--</option>
                                      @foreach($data_fakultas->prodi as $prodi)
                                        <option value="{{ $prodi->pro_kd }}">{{ $prodi->jjg_kd }} {{$prodi->pro_nm }}</option>
                                      @endforeach
                                    </select>
                                  </div>
                                </td>
                                
                                
                                <td class=" text-center">
                                  <button type="button" onclick="document.getElementById('form{{ $data_fakultas->fak_skt }}').submit();" class="btn btn-primary btn-md"  id="btn_{{ $data_fakultas->fak_skt }}">Validasi</button>
                                </td>
                              </form>
                            </tr>
                          @endforeach
                            

                            

                          </tbody>
                        </table>
                      </div>


                    </div>
                  </div>
                  </div>
                </div>
            </div>
                    {{-- <div class="row">
                        @yield("content")
                    </div> --}}


            <footer class="footer">

            </footer>

        </div>
    </div>
  </body>
  <!--   Core JS Files   -->
  <script src="{{ URL::asset('js/jquery-1.10.2.js') }}" type="text/javascript"></script>
<script src="{{ URL::asset('js/bootstrap.min.js') }}" type="text/javascript"></script>

<!--  Checkbox, Radio & Switch Plugins -->
<script src="{{ URL::asset('js/bootstrap-checkbox-radio.js') }}"></script>

<!--  Charts Plugin -->
<script src="{{ URL::asset('js/chartist.min.js') }}"></script>

  <!--  Notifications Plugin    -->
  <script src="{{ URL::asset('js/bootstrap-notify.js') }}"></script>

  <!--  Google Maps Plugin    -->
  <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>

  <!-- Paper Dashboard Core javascript and methods for Demo purpose -->
<script src="{{ URL::asset('js/paper-dashboard.js') }}"></script>

<!-- Paper Dashboard DEMO methods, don't include it in your project! -->
<script src="{{ URL::asset('js/demo.js') }}"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


<script>
$(document).ready(function(){
  $('.dropdown-submenu a.test').on("click", function(e){
    $(this).next('ul').toggle();
    e.stopPropagation();
    e.preventDefault();
  });
});
</script>

  @yield("js")


</html>

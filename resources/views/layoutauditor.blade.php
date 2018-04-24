<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="{{ URL::asset('img/apple-icon.png') }}">
	<link rel="icon" type="image/png" sizes="96x96" href="{{ URL::asset('img/favicon.png') }}">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>AIMA</title>

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

</head>
<body>

<div class="wrapper">
<div class="sidebar" data-background-color="white" data-active-color="danger">

    <!--
        Tip 1: you can change the color of the sidebar's background using: data-background-color="white | black"
        Tip 2: you can change the color of the active button using the data-active-color="primary | info | success | warning | danger"
    -->

    <div class="sidebar-wrapper">
        <div class="logo">
        
            <a href="{{url("/auditor")}}" class="simple-text">
                AIMA - Auditor
            </a>
           
        </div>

        <ul class="nav">
        @if (Request::is('auditor/isi/'.$idprodi.'/standar1')||Request::is('auditor/isi/'.$idprodi.'/standar1/*'))
            <li class="active">
        @else
            <li>
        @endif
                <a href="{{ url('auditor/isi/'.$idprodi.'/standar1') }}">
                    <i class="ti-panel"></i>
                    <p>Standar 1</p>
                </a>
            </li>
        @if (Request::is('auditor/isi/'.$idprodi.'/standar2')||Request::is('auditor/isi/'.$idprodi.'/standar2/*'))
            <li class="active">
        @else
            <li>
        @endif
                <a href="{{ url('auditor/isi/'.$idprodi.'/standar2') }}">
                    <i class="ti-user"></i>
                    <p>Standar 2</p>
                </a>
            </li>
        @if (Request::is('auditor/isi/'.$idprodi.'/standar3')||Request::is('auditor/isi/'.$idprodi.'/standar3/*'))
            <li class="active">
        @else
            <li>
        @endif
                <a href="{{ url('auditor/isi/'.$idprodi.'/standar3') }}">
                    <i class="ti-view-list-alt"></i>
                    <p>Standar 3</p>
                </a>
            </li>
        @if (Request::is('auditor/isi/'.$idprodi.'/standar4')||Request::is('auditor/isi/'.$idprodi.'/standar4/*'))
            <li class="active">
        @else
            <li>
        @endif
                <a href="{{ url('auditor/isi/'.$idprodi.'/standar4') }}">
                    <i class="ti-text"></i>
                    <p>Standar 4</p>
                </a>
            </li>
        @if (Request::is('auditor/isi/'.$idprodi.'/standar5')||Request::is('auditor/isi/'.$idprodi.'/standar5/*'))
            <li class="active">
        @else
            <li>
        @endif
                <a href="{{ url('auditor/isi/'.$idprodi.'/standar5') }}">
                    <i class="ti-pencil-alt2"></i>
                    <p>Standar 5</p>
                </a>
            </li>
        @if (Request::is('auditor/isi/'.$idprodi.'/standar6')||Request::is('auditor/isi/'.$idprodi.'/standar6/*'))
            <li class="active">
        @else
            <li>
        @endif
                <a href="{{ url('auditor/isi/'.$idprodi.'/standar6') }}">
                    <i class="ti-map"></i>
                    <p>Standar 6</p>
                </a>
            </li>
        @if (Request::is('auditor/isi/'.$idprodi.'/standar7')||Request::is('auditor/isi/'.$idprodi.'/standar7/*'))
            <li class="active">
        @else
            <li>
        @endif
                <a href="{{ url('auditor/isi/'.$idprodi.'/standar7') }}">
                    <i class="ti-bell"></i>
                    <p>Standar 7</p>
                </a>
            </li>
        @if (Request::is('auditor/rekap')||Request::is('auditor/rekap/*'))
            <li class="active active-pro">
        @else
            <li class="active-pro">
        @endif
                <a href="{{ url('auditor/rekap/'.$idprodi) }}">
                    <i class="ti-export"></i>
                    <p>Rekapitulasi</p>
                </a>
            </li>
        </ul>
    </div>
    </div>

    <div class="main-panel">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar bar1"></span>
                        <span class="icon-bar bar2"></span>
                        <span class="icon-bar bar3"></span>
                    </button>
                    <a class="navbar-brand" href="{{url("/auditor")}}">AIMA / {{$nama_prodi}} / {{$standar}}</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="{{ url('/Panduan AIMA 1.0.pdf') }}" target="_blank">
                                <i class="ti-face-smile"></i>
								<p>Bantuan</p>
                            </a>
                        </li>
                        <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="ti-user"></i>
									<p>{{session('nip')}}</p>
									<b class="caret"></b>
                              </a>
                              <ul class="dropdown-menu">
                                <li><a href="{{ url('/servicelogout') }}">Logout</a></li>
                                <!-- <li><a href="#">Notification 2</a></li>
                                <li><a href="#">Notification 3</a></li>
                                <li><a href="#">Notification 4</a></li>
                                <li><a href="#">Another notification</a></li> -->
                              </ul>
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
                {{--  --}}
                <div class="row">
                    @yield("content")
                </div>
            </div>
        </div>


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

	<script type="text/javascript">
    	$(document).ready(function(){

        	demo.initChartist();

        	// $.notify({
         //    	icon: 'ti-gift',
         //    	message: "Welcome to <b>Paper Dashboard</b> - a beautiful Bootstrap freebie for your next project."

         //    },{
         //        type: 'success',
         //        timer: 4000
         //    });

    	});
	</script>

    @yield("js")
    @stack("script")

</html>

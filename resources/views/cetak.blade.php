<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="{{ asset("img/apple-icon.png") }}">
	<link rel="icon" type="image/png" sizes="96x96" href="{{ asset("img/favicon.png") }}">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>AIMA {{ date("Y") }} - {{session('nama_prodi')}} ({{ session('nip') }})</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
  <meta name="viewport" content="width=device-width" />


  <!-- Bootstrap core CSS     -->
  <link href="{{ asset("css/bootstrap.min.css") }}" rel="stylesheet" />

  <!-- Animation library for notifications   -->
  {{-- <link href="{{ asset("") }}css/animate.min.css" rel="stylesheet"/> --}}

  <!--  Paper Dashboard core CSS    -->
  {{-- <link href="{{ asset("") }}css/demo.css" rel="stylesheet" /> --}}
  {{-- <link href="{{ asset("") }}css/paper-dashboard.css" rel="stylesheet"/> --}}


  <!--  CSS for Demo Purpose, don't include it in your project     -->


  <!--  Fonts and icons     -->
  {{-- <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet"> --}}
  <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
  <link href="{{ asset("css/themify-icons.css") }}" rel="stylesheet">
  <style type="text/css" media="print">

  body {
    background-position: center center;
    background-position: 45% 55%; 
  }

  table { page-break-inside:auto }
  tr    { page-break-inside:avoid; page-break-after:auto }
  thead { display:table-header-group }
  tfoot { display:table-footer-group }
  div.page
  {
    page-break-after: always;
    page-break-inside: avoid;
  }
</style>
</head>
<body>

  <div class="wrapper">

    <div class="main-panel" style="width: 100%">



      <div class="content">
        <div class="container-fluid">

          <div class="row">

            <div class="col-md-12">
              <h2>AIMA {{ date("Y") }} - {{ session('nama_prodi') }} ({{ session('nip') }})</h2>
              <div class="page">
                <div class="card">
                  <div class="header">
                    <h4 class="title"> Standar 1 </h4>
                    <p class="category">Visi, Misi, Tujuan, dan Sasaran, serta Strategi Pencapaian</p>
                  </div>
                  <div class="content">


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
                          {{-- @if(!$total)<td colspan={{ $i }}><h3 class="text-muted text-center">Data Kosong</h3></td>
                          @endif --}}


                        </tr>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>


          <div class="card">
            <div class="header">
              <h4 class="title"> Standar 2 </h4>
              <p class="category">Tata Pamong, Kepemimpinan, Sistem Pengelolaan, dan Penjaminan Mutu</p>
            </div>
            <div class="content">


              <div class="row">
                <div class="col-md-12">

                  <div class="col-md-12">
                    <div class="main-panel" style="width:100%">
                      <table border="1" class="table">
                        <thead>
                          <tr class="warning">
                            <!-- tampilkan kode  -->
                            @php $i=1 @endphp
                            @foreach ($nilaistandar2 as $tampilkan)
                            @php $i++ @endphp
                            <td>{{$tampilkan->kode}} </td>
                            @endforeach

                           {{--   @if($total>0)<td> Total </td>
                             @endif --}}

                           </tr>
                         </thead>
                         <!-- menampilkan data nilai -->
                         <tr>
                          @foreach ($nilaistandar2 as $tampilkan)
                          <td>{{$tampilkan->kategori}} </td>
                          @endforeach
                          <!-- menampilkan nilai total -->

                          {{--  @if($total>0)<td>{{$total}}</td> --}}
                             {{-- @if(!$total)<td colspan={{ $i }}><h3 class="text-muted text-center">Data Kosong</h3></td>
                             @endif --}}


                           </tr>
                         </table>
                       </div>
                     </div>
                   </div>
                 </div>
               </div>
             </div>


             <div class="card">
              <div class="header">
                <h4 class="title"> Standar 3 </h4>
                <p class="category">Mahasiswa dan Lulusan</p>
              </div>
              <div class="content">


                <div class="row">
                  <div class="col-md-12">

                    <div class="col-md-12">
                      <div class="main-panel" style="width:100%">
                        <table border="1" class="table">
                          <thead>
                            <tr class="warning">
                              <!-- tampilkan kode  -->
                              @php $i=1 @endphp
                              @foreach ($nilaistandar3 as $tampilkan)
                              @php $i++ @endphp
                              <td>{{$tampilkan->kode}} </td>
                              @endforeach

                           {{--   @if($total>0)<td> Total </td>
                             @endif --}}

                           </tr>
                         </thead>
                         <!-- menampilkan data nilai -->
                         <tr>
                          @foreach ($nilaistandar3 as $tampilkan)
                          <td>{{$tampilkan->kategori}} </td>
                          @endforeach
                          <!-- menampilkan nilai total -->

                          {{--  @if($total>0)<td>{{$total}}</td> --}}
                             {{-- @if(!$total)<td colspan={{ $i }}><h3 class="text-muted text-center">Data Kosong</h3></td>
                             @endif --}}


                           </tr>
                         </table>
                       </div>
                     </div>
                   </div>
                 </div>
               </div>
             </div>


             <div class="card">
              <div class="header">
                <h4 class="title"> Standar 4 </h4>
                <p class="category">Sumber Daya Manusia</p>
              </div>
              <div class="content">


                <div class="row">
                  <div class="col-md-12">

                    <div class="col-md-12">
                      <div class="main-panel" style="width:100%">
                        <table border="1" class="table">
                          <thead>
                            <tr class="warning">
                              <!-- tampilkan kode  -->
                              @php $i=1 @endphp
                              @foreach ($nilaistandar4 as $tampilkan)
                              @php $i++ @endphp
                              <td>{{$tampilkan->kode}} </td>
                              @endforeach

                           {{--   @if($total>0)<td> Total </td>
                             @endif --}}

                           </tr>
                         </thead>
                         <!-- menampilkan data nilai -->
                         <tr>
                          @foreach ($nilaistandar4 as $tampilkan)
                          <td>{{$tampilkan->kategori}} </td>
                          @endforeach
                          <!-- menampilkan nilai total -->

                          {{--  @if($total>0)<td>{{$total}}</td> --}}
                             {{-- @if(!$total)<td colspan={{ $i }}><h3 class="text-muted text-center">Data Kosong</h3></td>
                             @endif --}}


                           </tr>
                         </table>
                       </div>
                     </div>
                   </div>
                 </div>
               </div>
             </div>

           </div>

           <div class="page">

             <div class="card">
              <div class="header">
                <h4 class="title"> Standar 5 </h4>
                <p class="category">Kurikulum, Pembelajaran, dan Suasana AKademik</p>
              </div>
              <div class="content">


                <div class="row">
                  <div class="col-md-12">

                    <div class="col-md-12">
                      <div class="main-panel" style="width:100%">
                        <table border="1" class="table">
                          <thead>
                            <tr class="warning">
                              <!-- tampilkan kode  -->
                              @php $i=1 @endphp
                              @foreach ($nilaistandar5 as $tampilkan)
                              @php $i++ @endphp
                              <td>{{$tampilkan->kode}} </td>
                              @endforeach

                           {{--   @if($total>0)<td> Total </td>
                             @endif --}}

                           </tr>
                         </thead>
                         <!-- menampilkan data nilai -->
                         <tr>
                          @foreach ($nilaistandar5 as $tampilkan)
                          <td>{{$tampilkan->kategori}} </td>
                          @endforeach
                          <!-- menampilkan nilai total -->

                          {{--  @if($total>0)<td>{{$total}}</td> --}}
                             {{-- @if(!$total)<td colspan={{ $i }}><h3 class="text-muted text-center">Data Kosong</h3></td>
                             @endif --}}


                           </tr>
                         </table>
                       </div>
                     </div>
                   </div>
                 </div>
               </div>
             </div>


             <div class="card">
              <div class="header">
                <h4 class="title"> Standar 6 </h4>
                <p class="category">Pembiayaan, Sarana dan Prasarana,serta Sistem Informasi</p>
              </div>
              <div class="content">


                <div class="row">
                  <div class="col-md-12">

                    <div class="col-md-12">
                      <div class="main-panel" style="width:100%">
                        <table border="1" class="table">
                          <thead>
                            <tr class="warning">
                              <!-- tampilkan kode  -->
                              @php $i=1 @endphp
                              @foreach ($nilaistandar6 as $tampilkan)
                              @php $i++ @endphp
                              <td>{{$tampilkan->kode}} </td>
                              @endforeach

                           {{--   @if($total>0)<td> Total </td>
                             @endif --}}

                           </tr>
                         </thead>
                         <!-- menampilkan data nilai -->
                         <tr>
                          @foreach ($nilaistandar6 as $tampilkan)
                          <td>{{$tampilkan->kategori}} </td>
                          @endforeach
                          <!-- menampilkan nilai total -->

                          {{--  @if($total>0)<td>{{$total}}</td> --}}
                             {{-- @if(!$total)<td colspan={{ $i }}><h3 class="text-muted text-center">Data Kosong</h3></td>
                             @endif --}}


                           </tr>
                         </table>
                       </div>
                     </div>
                   </div>
                 </div>
               </div>
             </div>


             <div class="card">
              <div class="header">
                <h4 class="title"> Standar 7 </h4>
                <p class="category">Penelitian, Pengabdian Kepada Masyarakat, dan Kerjasama</p>
              </div>
              <div class="content">


                <div class="row">
                  <div class="col-md-12">

                    <div class="col-md-12">
                      <div class="main-panel" style="width:100%">
                        <table border="1" class="table">
                          <thead>
                            <tr class="warning">
                              <!-- tampilkan kode  -->
                              @php $i=1 @endphp
                              @foreach ($nilaistandar7 as $tampilkan)
                              @php $i++ @endphp
                              <td>{{$tampilkan->kode}} </td>
                              @endforeach

                           {{--   @if($total>0)<td> Total </td>
                             @endif --}}

                           </tr>
                         </thead>
                         <!-- menampilkan data nilai -->
                         <tr>
                          @foreach ($nilaistandar7 as $tampilkan)
                          <td>{{$tampilkan->kategori}} </td>
                          @endforeach
                          <!-- menampilkan nilai total -->

                          {{--  @if($total>0)<td>{{$total}}</td> --}}
                             {{-- @if(!$total)<td colspan={{ $i }}><h3 class="text-muted text-center">Data Kosong</h3></td>
                             @endif --}}


                           </tr>
                         </table>
                       </div>
                     </div>
                   </div>
                 </div>
               </div>
             </div>

           </div>





         </div>

       </div>
     </div>
   </div>




 </div>
</div>


</body>

<!--   Core JS Files   -->
<script src="{{ asset("js/jquery-1.10.2.js") }}" type="text/javascript"></script>
<script src="{{ asset("js/bootstrap.min.js") }}" type="text/javascript"></script>

<!--  Checkbox, Radio & Switch Plugins -->
<script src="{{ asset("js/bootstrap-checkbox-radio.js") }}"></script>

<!--  Charts Plugin -->
<script src="{{ asset("js/chartist.min.js") }}"></script>

<!--  Notifications Plugin    -->
<script src="{{ asset("js/bootstrap-notify.js") }}"></script>

<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>

<!-- Paper Dashboard Core javascript and methods for Demo purpose -->
<script src="{{ asset("js/paper-dashboard.js") }}"></script>

<!-- Paper Dashboard DEMO methods, don't include it in your project! -->
<script src="{{ asset("js/demo.js") }}"></script>

<script type="text/javascript">
 $(document).ready(function(){

   window.print()

        	// $.notify({
         //    	icon: 'ti-gift',
         //    	message: "Welcome to <b>Paper Dashboard</b> - a beautiful Bootstrap freebie for your next project."

         //    },{
         //        type: 'success',
         //        timer: 4000
         //    });

       });
     </script>


     </html>

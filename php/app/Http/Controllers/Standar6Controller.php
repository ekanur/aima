<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Standar6;

class Standar6Controller extends Controller
{
    public function index()
    {
        $standar="Standar 6";
        return view('standar6.index', compact('standar'));
    }
     public function save(Request $request)
     {
       //PERHITUNGAN 6.2.1
       $nDOM = $request->nilai6_2_1_dana;
       if ($nDOM >= 18000000)
       {
         $skor6_2_1=4;
       }
       elseif ($nDOM < 18000000) {
         $skor6_2_1=$nDOM / 4.5 /1000000;
       }
        $skor6_2_1 = intval(round($skor6_2_1));


       //PERHITUNGAN 6.2.2
       $nRPD = $request->nilai6_2_2_1dana;
       if ($nRPD >= 3000000) {
         $skor6_2_2=4;
       }
       elseif ($nRPD<3000000) {
         $skor6_2_2=(4*$nRPD)/3/1000000;
       }
       $skor6_2_2 = intval(round($skor6_2_2));

       //PERHITUNGAN 6.2.3
       $nRPKM = $request->nilai6_2_3satu+$request->nilai6_2_3dua+$request->nilai6_2_3tiga;
       if ($nRPKM >= 1500000) {
         $skor6_2_3=4;
       }
       elseif ($nRPKM < 1500000) {
         $skor6_2_3=(8*$nRPKM)/3/1000000;
       }
       $skor6_2_3 = intval(round($skor6_2_3));

       //PERHITUNGAN 6.3.1
       $nilaiA=$request->a+2*$request->b+3*$request->c+4*$request->d;
       $nilaiB=$request->a+$request->b+$request->c+$request->d;
       if ($nilaiA!=0 || $nilaiB!=0) {
         $slrdt=$nilaiA/$nilaiB;
         $skor6_3_1=$slrdt;
         $skor6_3_1 = intval(round($skor6_3_1));
       }

       else {
         $skor6_3_1=0;
       }

      //PERHITUNGAN 6.4.1a
      $skor6_4_1_a=$request->nilai6_4_1_a/100;
      $skor6_4_1_a = intval(round($skor6_4_1_a));

      //PERHITUNGAN 6.4.1b
      $skor6_4_1_b=$request->nilai6_4_1_b/50;
      $skor6_4_1_b = intval(round($skor6_4_1_b));

      //PERHITUNGAN 6.4.1c
      $skor6_4_1_c = $request->nilai6_4_1_c;
      $skor6_4_1_c = intval(round($skor6_4_1_c));

      //PERHITUNGAN 6.4.1d
      $skor6_4_1_d = $request->nilai6_4_1_d;
      $skor6_4_1_d = intval(round($skor6_4_1_d));

      //PERHITUNGAN 6.4.1e
      $prosiding=$request->nilai6_4_1_esatu;
      if ($prosiding >= 9) {
        $skor6_4_1_e=4;
      }
      elseif ($prosiding < 9) {
        $skor6_4_1_e=(4*$prosiding)/9;
      }
      $skor6_4_1_e = intval(round($skor6_4_1_e));

      $oldStandar6 = Standar6::where('id_jurusan', '=', '1')->first();
      if($oldStandar6){
        //jika sudah maka ...

        $standar6 = Standar6::where([
          ['id_jurusan', '=', '1'],
          ['kode', '=', '6.2.1']
        ])->first();
        $standar6->nilai = $skor6_2_1;
        $standar6->save();

        $standar6 = Standar6::where([
          ['id_jurusan', '=', '1'],
          ['kode', '=', '6.2.2']
        ])->first();
        $standar6->nilai = $skor6_2_2;
        $standar6->save();

        $standar6 = Standar6::where([
          ['id_jurusan', '=', '1'],
          ['kode', '=', '6.2.3']
        ])->first();
        $standar6->nilai = $skor6_2_3;
        $standar6->save();

        $standar6 = Standar6::where([
          ['id_jurusan', '=', '1'],
          ['kode', '=', '6.3.1']
        ])->first();
        $standar6->nilai = $skor6_3_1;
        $standar6->save();

        $standar6 = Standar6::where([
          ['id_jurusan', '=', '1'],
          ['kode', '=', '6.4.1.a']
        ])->first();
        $standar6->nilai = $skor6_4_1_a;
        $standar6->save();

        $standar6 = Standar6::where([
          ['id_jurusan', '=', '1'],
          ['kode', '=', '6.4.1.b']
        ])->first();
        $standar6->nilai = $skor6_4_1_b;
        $standar6->save();

        $standar6 = Standar6::where([
          ['id_jurusan', '=', '1'],
          ['kode', '=', '6.4.1.c']
        ])->first();
        $standar6->nilai = $skor6_4_1_c;
        $standar6->save();

        $standar6 = Standar6::where([
          ['id_jurusan', '=', '1'],
          ['kode', '=', '6.4.1.d']
        ])->first();
        $standar6->nilai = $skor6_4_1_d;
        $standar6->save();

        $standar6 = Standar6::where([
          ['id_jurusan', '=', '1'],
          ['kode', '=', '6.4.1.e']
        ])->first();
        $standar6->nilai = $skor6_4_1_e;
        $standar6->save();
        // return "updated";
      }else{
        //jika belum maka ...

        $standar6 = new Standar6;
        $standar6->kode = '6.2.1';
        $standar6->id_jurusan = '1';
        $standar6->nilai = $skor6_2_1;
        $standar6->save();

        $standar6 = new Standar6;
        $standar6->kode = '6.2.2';
        $standar6->id_jurusan = '1';
        $standar6->nilai = $skor6_2_2;
        $standar6->save();

        $standar6 = new Standar6;
        $standar6->kode = '6.2.3';
        $standar6->id_jurusan = '1';
        $standar6->nilai = $skor6_2_3;
        $standar6->save();

        $standar6 = new Standar6;
        $standar6->kode = '6.3.1';
        $standar6->id_jurusan = '1';
        $standar6->nilai = $skor6_3_1;
        $standar6->save();

        $standar6 = new Standar6;
        $standar6->kode = '6.4.1.a';
        $standar6->id_jurusan = '1';
        $standar6->nilai = $skor6_4_1_a;
        $standar6->save();

        $standar6 = new Standar6;
        $standar6->kode = '6.4.1.b';
        $standar6->id_jurusan = '1';
        $standar6->nilai = $skor6_4_1_b;
        $standar6->save();

        $standar6 = new Standar6;
        $standar6->kode = '6.4.1.c';
        $standar6->id_jurusan = '1';
        $standar6->nilai = $skor6_4_1_c;
        $standar6->save();

        $standar6 = new Standar6;
        $standar6->kode = '6.4.1.d';
        $standar6->id_jurusan = '1';
        $standar6->nilai = $skor6_4_1_d;
        $standar6->save();

        $standar6 = new Standar6;
        $standar6->kode = '6.4.1.e';
        $standar6->id_jurusan = '1';
        $standar6->nilai = $skor6_4_1_e;
        $standar6->save();
        // return "saved";
      }
       return redirect()->back();

     }
}

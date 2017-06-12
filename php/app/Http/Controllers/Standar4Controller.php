<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Standar4;

class Standar4Controller extends Controller
{
    public function index(){
      return view('standar4.index');
    }

    public function save(Request $request){
      //dd($request->all());

      //perhitungan skor 4.3.1.a
      if($request->kd4_3_1_a >= 90){
        $skor4_3_1_a = 4;
      }elseif($request->kd4_3_1_a > 30){
        $skor4_3_1_a = (20 * ($request->kd4_3_1_a/100) / 3) - 2;
      }elseif($request->kd4_3_1_a <= 30){
        $skor4_3_1_a = 0;
      }
      $skor4_3_1_a = intval(round($skor4_3_1_a));

      //perhitungan skor 4.3.1.b
      if($request->kd4_3_1_b >= 40){
        $skor4_3_1_b = 4;
      }elseif($request->kd4_3_1_b < 40){
        $skor4_3_1_b = 2 + 5 * ($request->kd4_3_1_b/100);
      }
      $skor4_3_1_b = intval(round($skor4_3_1_b));

      //perhitungan skor 4.3.1.c
      if($request->kd4_3_1_c >= (40)){
        $skor4_3_1_c = 4;
      }elseif($request->kd4_3_1_c < (40)){
        $skor4_3_1_c = 1 + 7.5 * ($request->kd4_3_1_c/100);
      }
      $skor4_3_1_c = intval(round($skor4_3_1_c));

      //perhitungan skor 4.3.1.d
      if($request->kd4_3_1_d >= 40){
        $skor4_3_1_d = 4;
      }elseif($request->kd4_3_1_d < 40){
        $skor4_3_1_d = 1 + 7.5 * ($request->kd4_3_1_d/100);
      }
      $skor4_3_1_d = intval(round($skor4_3_1_d));

      //perhitungan skor 4.3.2
      if($request->rmd4_3_2 >= 17 && $request->rmd4_3_2 <= 23){
        $skor4_3_2 = 4;
      }elseif($request->rmd4_3_2 > 23 && $request->rmd4_3_2 < 60){
        $skor4_3_2 = 4 * (60 - $request->rmd4_3_2) / 37;
      }elseif($request->rmd4_3_2 < 17){
        $skor4_3_2 = 4 * $request->rmd4_3_2 / 17;
      }elseif($request->rmd4_3_2 >= 60){
        $skor4_3_2 = 0;
      }
      $skor4_3_2 = intval(round($skor4_3_2));

      //perhitungan skor 4.3.3
      if ($request->rfte4_3_3 >= 11 && $request->rfte4_3_3 <= 13) {
        $skor4_3_3 = 4;
      }elseif ($request->rfte4_3_3 > 5 && $request->rfte4_3_3 < 11) {
        $skor4_3_3 = ($request->rfte4_3_3 - 3) / 2;
      }elseif ($request->rfte4_3_3 > 13 && $request->rfte4_3_3 < 21) {
        $skor4_3_3 = (71 - 3 * $request->rfte4_3_3) / 8;
      }elseif ($request->rfte4_3_3 <= 5 || $request->rfte4_3_3 >= 21) {
        $skor4_3_3 = 1;
      }
      $skor4_3_3 = intval(round($skor4_3_3));

      //perhitungan skor 4.3.4
      $skor4_3_4 = $request->n4_3_4;
      $skor4_3_4 = intval(round($skor4_3_4));

      //perhitungan skor 4.3.6
      if ($request->pkdt4_3_6 >= 95) {
        $skor4_3_6 = 4;
      } elseif ($request->pkdt4_3_6 > 60 && $request->pkdt4_3_6 < 95) {
        $skor4_3_6 = ((80 * ($request->pkdt4_3_6/100)) - 48) / 7;
      } elseif ($request->pkdt4_3_6 <= 60) {
        $skor4_3_6 = 0;
      }
      $skor4_3_6 = intval(round($skor4_3_6));

      //perhitungan skor 4.4.1
      if ($request->pdtt4_4_1 <= 10) {
        $skor4_4_1 = 4;
      } elseif ($request->pdtt4_4_1 > 10 && $request->pdtt4_4_1 < 50) {
        $skor4_4_1 = 10 * ((50/100) - ($request->pdtt4_4_1/100));
      } elseif ($request->pdtt4_4_1 >= 50) {
        $skor4_4_1 = 0;
      }
      $skor4_4_1 = intval(round($skor4_4_1));

      //perhitungan skor 4.4.2.a
      $skor4_4_2_a = $request->n4_4_2_a;
      $skor4_4_2_a = intval(round($skor4_4_2_a));

      //perhitungan skor 4.4.2.b
      if ($request->pkdtt4_4_2_b >= 95) {
        $skor4_4_2_b = 4;
      } elseif ($request->pkdtt4_4_2_b > 60 && $request->pkdtt4_4_2_b < 95) {
        $skor4_4_2_b = (80 * ($request->pkdtt4_4_2_b/100) - 48) / 7;
      } elseif ($request->pkdtt4_4_2_b <= 60){
        $skor4_4_2_b = 0;
      }
      $skor4_4_2_b = intval(round($skor4_4_2_b));

      //perhitungan skor 4.5.1
      if ($request->jtap4_5_1 >= 12) {
        $skor4_5_1 = 4;
      } elseif ($request->jtap4_5_1 < 12) {
        $skor4_5_1 = 1 + ($request->jtap4_5_1 / 4);
      }
      $skor4_5_1 = intval(round($skor4_5_1));

      //perhitungan skor 4.5_2
      $sd4_5_2 = (0.75 * $request->n2_4_5_2) + (1.25 * $request->n3_4_5_2);
      if ($sd4_5_2 >= 4) {
        $skor4_5_2 = 4;
      } elseif ($sd4_5_2 >= 0 && $sd4_5_2 < 4) {
        $skor4_5_2 = $sd4_5_2;
      }
      $skor4_5_2 = intval(round($skor4_5_2));

      //perhitungan skor 4.5_3
      $sp4_5_3 = ($request->a4_5_3 + ($request->b4_5_3 / 4)) / $request->n4_5_3;
      if ($sp4_5_3 >= 3) {
        $skor4_5_3 = 4;
      } elseif ($sp4_5_3 > 0 && $sp4_5_3 < 3) {
        $skor4_5_3 = 1 + $sp4_5_3;
      } elseif ($sp4_5_3 <= 0) {
        $skor4_5_3 = 0;
      }
      $skor4_5_3 = intval(round($skor4_5_3));

      //perhitungan skor 4.5_4
      $skor4_5_4 = $request->n4_5_4;
      $skor4_5_4 = intval(round($skor4_5_4));

      //perhitungan skor 4.6_1_a
      $a4_6_1_a = ((4 * $request->x1_4_6_1_a) + (3 * $request->x2_4_6_1_a) + (2 * $request->x3_4_6_1_a)) / 4;
      if ($a4_6_1_a >= 4) {
        $skor4_6_1_a = 4;
      } elseif ($a4_6_1_a < 4) {
        $skor4_6_1_a = $a4_6_1_a;
      }
      $skor4_6_1_a = intval(round($skor4_6_1_a));

      //perhitungan skor 4.6_1_c
      $d4_6_1_c = ((4*$request->x1_4_6_1_c) + (3*$request->x2_4_6_1_c) + (2*$request->x3_4_6_1_c) + $request->x4_4_6_1_c) / 4;
      if($d4_6_1_c >= 4){
        $skor4_6_1_c = 4;
      } elseif ($d4_6_1_c < 4) {
        $skor4_6_1_c = $d4_6_1_c;
      }
      $skor4_6_1_c = intval(round($skor4_6_1_c));

      //return ($skor4_3_1_a . ", " . $skor4_3_1_b . ", " . $skor4_3_1_c . ", " . $skor4_3_1_d . ", " . $skor4_3_2);

      //cek apakah jurusan tersebut sudah pernah input atau belum
      $oldStandar4 = Standar4::where('id_jurusan', '=', '1')->first();
      if($oldStandar4){
        //jika sudah maka ...

        $standar4 = Standar4::where([
          ['id_jurusan', '=', '1'],
          ['kode', '=', '4.3.1.a']
        ])->first();
        $standar4->nilai = $skor4_3_1_a;
        $standar4->save();

        $standar4 = Standar4::where([
          ['id_jurusan', '=', '1'],
          ['kode', '=', '4.3.1.b']
        ])->first();
        $standar4->nilai = $skor4_3_1_b;
        $standar4->save();

        $standar4 = Standar4::where([
          ['id_jurusan', '=', '1'],
          ['kode', '=', '4.3.1.c']
        ])->first();
        $standar4->nilai = $skor4_3_1_c;
        $standar4->save();

        $standar4 = Standar4::where([
          ['id_jurusan', '=', '1'],
          ['kode', '=', '4.3.1.d']
        ])->first();
        $standar4->nilai = $skor4_3_1_d;
        $standar4->save();

        $standar4 = Standar4::where([
          ['id_jurusan', '=', '1'],
          ['kode', '=', '4.3.2']
        ])->first();
        $standar4->nilai = $skor4_3_2;
        $standar4->save();

        $standar4 = Standar4::where([
          ['id_jurusan', '=', '1'],
          ['kode', '=', '4.3.3']
        ])->first();
        $standar4->nilai = $skor4_3_3;
        $standar4->save();

        $standar4 = Standar4::where([
          ['id_jurusan', '=', '1'],
          ['kode', '=', '4.3.4']
        ])->first();
        $standar4->nilai = $skor4_3_4;
        $standar4->save();

        $standar4 = Standar4::where([
          ['id_jurusan', '=', '1'],
          ['kode', '=', '4.3.6']
        ])->first();
        $standar4->nilai = $skor4_3_6;
        $standar4->save();

        $standar4 = Standar4::where([
          ['id_jurusan', '=', '1'],
          ['kode', '=', '4.4.1']
        ])->first();
        $standar4->nilai = $skor4_4_1;
        $standar4->save();

        $standar4 = Standar4::where([
          ['id_jurusan', '=', '1'],
          ['kode', '=', '4.4.2.b']
        ])->first();
        $standar4->nilai = $skor4_4_2_b;
        $standar4->save();

        $standar4 = Standar4::where([
          ['id_jurusan', '=', '1'],
          ['kode', '=', '4.5.1']
        ])->first();
        $standar4->nilai = $skor4_5_1;
        $standar4->save();

        $standar4 = Standar4::where([
          ['id_jurusan', '=', '1'],
          ['kode', '=', '4.5.2']
        ])->first();
        $standar4->nilai = $skor4_5_2;
        $standar4->save();

        $standar4 = Standar4::where([
          ['id_jurusan', '=', '1'],
          ['kode', '=', '4.5.3']
        ])->first();
        $standar4->nilai = $skor4_5_3;
        $standar4->save();

        $standar4 = Standar4::where([
          ['id_jurusan', '=', '1'],
          ['kode', '=', '4.5.4']
        ])->first();
        $standar4->nilai = $skor4_5_4;
        $standar4->save();

        $standar4 = Standar4::where([
          ['id_jurusan', '=', '1'],
          ['kode', '=', '4.6.1.a']
        ])->first();
        $standar4->nilai = $skor4_6_1_a;
        $standar4->save();

        $standar4 = Standar4::where([
          ['id_jurusan', '=', '1'],
          ['kode', '=', '4.6.1.c']
        ])->first();
        $standar4->nilai = $skor4_6_1_c;
        $standar4->save();

        // return "updated";
      }else{
        //jika belum maka ...

        $standar4 = new Standar4;
        $standar4->kode = '4.3.1.a';
        $standar4->id_jurusan = '1';
        $standar4->nilai = $skor4_3_1_a;
        $standar4->save();

        $standar4 = new Standar4;
        $standar4->kode = '4.3.1.b';
        $standar4->id_jurusan = '1';
        $standar4->nilai = $skor4_3_1_b;
        $standar4->save();

        $standar4 = new Standar4;
        $standar4->kode = '4.3.1.c';
        $standar4->id_jurusan = '1';
        $standar4->nilai = $skor4_3_1_c;
        $standar4->save();

        $standar4 = new Standar4;
        $standar4->kode = '4.3.1.d';
        $standar4->id_jurusan = '1';
        $standar4->nilai = $skor4_3_1_d;
        $standar4->save();

        $standar4 = new Standar4;
        $standar4->kode = '4.3.2';
        $standar4->id_jurusan = '1';
        $standar4->nilai = $skor4_3_2;
        $standar4->save();

        $standar4 = new Standar4;
        $standar4->kode = '4.3.3';
        $standar4->id_jurusan = '1';
        $standar4->nilai = $skor4_3_3;
        $standar4->save();

        $standar4 = new Standar4;
        $standar4->kode = '4.3.4';
        $standar4->id_jurusan = '1';
        $standar4->nilai = $skor4_3_4;
        $standar4->save();

        $standar4 = new Standar4;
        $standar4->kode = '4.3.6';
        $standar4->id_jurusan = '1';
        $standar4->nilai = $skor4_3_6;
        $standar4->save();

        $standar4 = new Standar4;
        $standar4->kode = '4.4.1';
        $standar4->id_jurusan = '1';
        $standar4->nilai = $skor4_4_1;
        $standar4->save();

        $standar4 = new Standar4;
        $standar4->kode = '4.4.2.b';
        $standar4->id_jurusan = '1';
        $standar4->nilai = $skor4_4_2_b;
        $standar4->save();

        $standar4 = new Standar4;
        $standar4->kode = '4.5.1';
        $standar4->id_jurusan = '1';
        $standar4->nilai = $skor4_5_1;
        $standar4->save();

        $standar4 = new Standar4;
        $standar4->kode = '4.5.2';
        $standar4->id_jurusan = '1';
        $standar4->nilai = $skor4_5_2;
        $standar4->save();

        $standar4 = new Standar4;
        $standar4->kode = '4.5.3';
        $standar4->id_jurusan = '1';
        $standar4->nilai = $skor4_5_3;
        $standar4->save();

        $standar4 = new Standar4;
        $standar4->kode = '4.5.4';
        $standar4->id_jurusan = '1';
        $standar4->nilai = $skor4_5_4;
        $standar4->save();

        $standar4 = new Standar4;
        $standar4->kode = '4.6.1.a';
        $standar4->id_jurusan = '1';
        $standar4->nilai = $skor4_6_1_a;
        $standar4->save();

        $standar4 = new Standar4;
        $standar4->kode = '4.6.1.c';
        $standar4->id_jurusan = '1';
        $standar4->nilai = $skor4_6_1_c;
        $standar4->save();

        // return "saved";
      }

      return redirect()->back();

    }
}

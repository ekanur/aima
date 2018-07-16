<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Standar4;

class Standar4Controller extends Controller
{
    public function index(){
      $standar="Standar 4";
      $data = Standar4::select('kode', 'data', 'skor', 'kategori')->where('id_prodi', '=', session('id_prodi'))->whereYear("created_at", '=', date("Y"))->orderBy('kode', 'asc')->get();
      if(!$data->count()){
        $dataCheck = true;
      }else{
        $dataCheck = false;
      }
      $prodi = $this->getProdi();
      return view('standar4.index', compact('standar', 'data', 'dataCheck', 'prodi'));
    }

    public function save(Request $request){
      //dd($request->all());

      //perhitungan skor 4.3.1.a
      if($request->kd4_3_1_a >= 90){
        $kategori4_3_1_a = 4;
      }elseif($request->kd4_3_1_a > 30){
        $kategori4_3_1_a = (20 * ($request->kd4_3_1_a/100) / 3) - 2;
      }elseif($request->kd4_3_1_a <= 30){
        $kategori4_3_1_a = 0;
      }
      $kategori4_3_1_a = intval(round($kategori4_3_1_a));
      $data4_3_1_a = '['.$request->kd4_3_1_a.']';
      $skor4_3_1_a = $request->kd4_3_1_a;

      //perhitungan skor 4.3.1.b
      if($request->kd4_3_1_b >= 40){
        $kategori4_3_1_b = 4;
      }elseif($request->kd4_3_1_b < 40){
        $kategori4_3_1_b = 2 + 5 * ($request->kd4_3_1_b/100);
      }
      $kategori4_3_1_b = intval(round($kategori4_3_1_b));
      $data4_3_1_b = '['.$request->kd4_3_1_b.']';
      $skor4_3_1_b = $request->kd4_3_1_b;

      //perhitungan skor 4.3.1.c
      if($request->kd4_3_1_c >= (40)){
        $kategori4_3_1_c = 4;
      }elseif($request->kd4_3_1_c < (40)){
        $kategori4_3_1_c = 1 + 7.5 * ($request->kd4_3_1_c/100);
      }
      $kategori4_3_1_c = intval(round($kategori4_3_1_c));
      $data4_3_1_c = '['.$request->kd4_3_1_c.']';
      $skor4_3_1_c = $request->kd4_3_1_c;

      //perhitungan skor 4.3.1.d
      if($request->kd4_3_1_d >= 40){
        $kategori4_3_1_d = 4;
      }elseif($request->kd4_3_1_d < 40){
        $kategori4_3_1_d = 1 + 7.5 * ($request->kd4_3_1_d/100);
      }
      $kategori4_3_1_d = intval(round($kategori4_3_1_d));
      $data4_3_1_d = '['.$request->kd4_3_1_d.']';
      $skor4_3_1_d = $request->kd4_3_1_d;

      //perhitungan skor 4.3.2
      if($request->rmd4_3_2 >= 17 && $request->rmd4_3_2 <= 23){
        $kategori4_3_2 = 4;
      }elseif($request->rmd4_3_2 > 23 && $request->rmd4_3_2 < 60){
        $kategori4_3_2 = 4 * (60 - $request->rmd4_3_2) / 37;
      }elseif($request->rmd4_3_2 < 17){
        $kategori4_3_2 = 4 * $request->rmd4_3_2 / 17;
      }elseif($request->rmd4_3_2 >= 60){
        $kategori4_3_2 = 0;
      }
      $kategori4_3_2 = intval(round($kategori4_3_2));
      $data4_3_2 = '['.$request->rmd4_3_2.']';
      $skor4_3_2 = $request->rmd4_3_2;

      //perhitungan skor 4.3.3
      if ($request->rfte4_3_3 >= 11 && $request->rfte4_3_3 <= 13) {
        $kategori4_3_3 = 4;
      }elseif ($request->rfte4_3_3 > 5 && $request->rfte4_3_3 < 11) {
        $kategori4_3_3 = ($request->rfte4_3_3 - 3) / 2;
      }elseif ($request->rfte4_3_3 > 13 && $request->rfte4_3_3 < 21) {
        $kategori4_3_3 = (71 - 3 * $request->rfte4_3_3) / 8;
      }elseif ($request->rfte4_3_3 <= 5 || $request->rfte4_3_3 >= 21) {
        $kategori4_3_3 = 1;
      }
      $kategori4_3_3 = intval(round($kategori4_3_3));
      $data4_3_3 = '['.$request->rfte4_3_3.']';
      $skor4_3_3 = $request->rfte4_3_3;

      //perhitungan skor 4.3.4
      $kategori4_3_4 = $request->n4_3_4;
      $kategori4_3_4 = intval(round($kategori4_3_4));
      $data4_3_4 = '['.$request->n4_3_4.']';
      $skor4_3_4 = $request->n4_3_4;

      //perhitungan skor 4.3.6
      if ($request->pkdt4_3_6 >= 95) {
        $kategori4_3_6 = 4;
      } elseif ($request->pkdt4_3_6 > 60 && $request->pkdt4_3_6 < 95) {
        $kategori4_3_6 = ((80 * ($request->pkdt4_3_6/100)) - 48) / 7;
      } elseif ($request->pkdt4_3_6 <= 60) {
        $kategori4_3_6 = 0;
      }
      $kategori4_3_6 = intval(round($kategori4_3_6));
      $data4_3_6 = '['.$request->pkdt4_3_6.']';
      $skor4_3_6 = $request->pkdt4_3_6;

      //perhitungan skor 4.4.1
      if ($request->pdtt4_4_1 <= 10) {
        $kategori4_4_1 = 4;
      } elseif ($request->pdtt4_4_1 > 10 && $request->pdtt4_4_1 < 50) {
        $kategori4_4_1 = 10 * ((50/100) - ($request->pdtt4_4_1/100));
      } elseif ($request->pdtt4_4_1 >= 50) {
        $kategori4_4_1 = 0;
      }
      $kategori4_4_1 = intval(round($kategori4_4_1));
      $data4_4_1 = '['.$request->pdtt4_4_1.']';
      $skor4_4_1 = $request->pdtt4_4_1;

      //perhitungan skor 4.4.2.a
      $kategori4_4_2_a = $request->n4_4_2_a;
      $kategori4_4_2_a = intval(round($kategori4_4_2_a));
      $data4_4_2_a = '['.$request->n4_4_2_a.']';
      $skor4_4_2_a = $request->n4_4_2_a;

      //perhitungan skor 4.4.2.b
      if ($request->pkdtt4_4_2_b >= 95) {
        $kategori4_4_2_b = 4;
      } elseif ($request->pkdtt4_4_2_b > 60 && $request->pkdtt4_4_2_b < 95) {
        $kategori4_4_2_b = (80 * ($request->pkdtt4_4_2_b/100) - 48) / 7;
      } elseif ($request->pkdtt4_4_2_b <= 60){
        $kategori4_4_2_b = 0;
      }
      $kategori4_4_2_b = intval(round($kategori4_4_2_b));
      $data4_4_2_b = '['.$request->pkdtt4_4_2_b.']';
      $skor4_4_2_b = $request->pkdtt4_4_2_b;

      //perhitungan skor 4.5.1
      if ($request->jtap4_5_1 >= 12) {
        $kategori4_5_1 = 4;
      } elseif ($request->jtap4_5_1 < 12) {
        $kategori4_5_1 = 1 + ($request->jtap4_5_1 / 4);
      }
      $kategori4_5_1 = intval(round($kategori4_5_1));
      $data4_5_1 = '['.$request->jtap4_5_1.']';
      $skor4_5_1 = $request->jtap4_5_1;

      //perhitungan skor 4.5_2
      $sd4_5_2 = (0.75 * $request->n2_4_5_2) + (1.25 * $request->n3_4_5_2);
      if ($sd4_5_2 >= 4) {
        $kategori4_5_2 = 4;
      } elseif ($sd4_5_2 >= 0 && $sd4_5_2 < 4) {
        $kategori4_5_2 = $sd4_5_2;
      }
      $kategori4_5_2 = intval(round($kategori4_5_2));
      $data4_5_2 = '['.$request->n2_4_5_2.', '.$request->n3_4_5_2.']';
      $skor4_5_2 = $sd4_5_2;

      //perhitungan skor 4.5_3
      $sp4_5_3 = ($request->n4_5_3 == 0) ? 0 : ($request->a4_5_3 + ($request->b4_5_3 / 4)) / $request->n4_5_3;
      if ($sp4_5_3 >= 3) {
        $kategori4_5_3 = 4;
      } elseif ($sp4_5_3 > 0 && $sp4_5_3 < 3) {
        $kategori4_5_3 = 1 + $sp4_5_3;
      } elseif ($sp4_5_3 <= 0) {
        $kategori4_5_3 = 0;
      }
      $kategori4_5_3 = intval(round($kategori4_5_3));
      $data4_5_3 = '['.$request->a4_5_3.', '.$request->b4_5_3.', '.$request->n4_5_3.']';
      $skor4_5_3 = $sp4_5_3;

      //perhitungan skor 4.5_4
      $kategori4_5_4 = $request->n4_5_4;
      $kategori4_5_4 = intval(round($kategori4_5_4));
      $data4_5_4 = '['.$request->n4_5_4.']';
      $skor4_5_4 = $request->n4_5_4;

      //perhitungan skor 4.6_1_a
      $a4_6_1_a = ((4 * $request->x1_4_6_1_a) + (3 * $request->x2_4_6_1_a) + (2 * $request->x3_4_6_1_a)) / 4;
      if ($a4_6_1_a >= 4) {
        $kategori4_6_1_a = 4;
      } elseif ($a4_6_1_a < 4) {
        $kategori4_6_1_a = $a4_6_1_a;
      }
      $kategori4_6_1_a = intval(round($kategori4_6_1_a));
      $data4_6_1_a = '['.$request->x1_4_6_1_a.', '.$request->x2_4_6_1_a.', '.$request->x3_4_6_1_a.']';
      $skor4_6_1_a = $a4_6_1_a;

      //perhitungan skor 4.6_1_c
      $d4_6_1_c = ((4*$request->x1_4_6_1_c) + (3*$request->x2_4_6_1_c) + (2*$request->x3_4_6_1_c) + $request->x4_4_6_1_c) / 4;
      if($d4_6_1_c >= 4){
        $kategori4_6_1_c = 4;
      } elseif ($d4_6_1_c < 4) {
        $kategori4_6_1_c = $d4_6_1_c;
      }
      $kategori4_6_1_c = intval(round($kategori4_6_1_c));
      $data4_6_1_c = '['.$request->x1_4_6_1_c.', '.$request->x2_4_6_1_c.', '.$request->x3_4_6_1_c.', '.$request->x4_4_6_1_c.']';
      $skor4_6_1_c = $d4_6_1_c;

      //return ($skor4_3_1_a . ", " . $skor4_3_1_b . ", " . $skor4_3_1_c . ", " . $skor4_3_1_d . ", " . $skor4_3_2);

      //cek apakah jurusan tersebut sudah pernah input atau belum
      $oldStandar4 = Standar4::where('id_prodi', '=', session('id_prodi'))->whereYear("created_at", '=', date("Y"))->first();
      if($oldStandar4){
        //jika sudah maka ...

        $standar4 = Standar4::where([
          ['id_prodi', '=', session('id_prodi')],
          ['kode', '=', '4.3.1.a']
        ])->whereYear("created_at", '=', date("Y"))->first();
        $standar4->kategori = $kategori4_3_1_a;
        $standar4->data = $data4_3_1_a;
        $standar4->skor = $skor4_3_1_a;
        $standar4->save();

        $standar4 = Standar4::where([
          ['id_prodi', '=', session('id_prodi')],
          ['kode', '=', '4.3.1.b']
        ])->whereYear("created_at", '=', date("Y"))->first();
        $standar4->kategori = $kategori4_3_1_b;
        $standar4->data = $data4_3_1_b;
        $standar4->skor = $skor4_3_1_b;
        $standar4->save();

        $standar4 = Standar4::where([
          ['id_prodi', '=', session('id_prodi')],
          ['kode', '=', '4.3.1.c']
        ])->whereYear("created_at", '=', date("Y"))->first();
        $standar4->kategori = $kategori4_3_1_c;
        $standar4->data = $data4_3_1_c;
        $standar4->skor = $skor4_3_1_c;
        $standar4->save();

        $standar4 = Standar4::where([
          ['id_prodi', '=', session('id_prodi')],
          ['kode', '=', '4.3.1.d']
        ])->whereYear("created_at", '=', date("Y"))->first();
        $standar4->kategori = $kategori4_3_1_d;
        $standar4->data = $data4_3_1_d;
        $standar4->skor = $skor4_3_1_d;
        $standar4->save();

        $standar4 = Standar4::where([
          ['id_prodi', '=', session('id_prodi')],
          ['kode', '=', '4.3.2']
        ])->whereYear("created_at", '=', date("Y"))->first();
        $standar4->kategori = $kategori4_3_2;
        $standar4->data = $data4_3_2;
        $standar4->skor = $skor4_3_2;
        $standar4->save();

        $standar4 = Standar4::where([
          ['id_prodi', '=', session('id_prodi')],
          ['kode', '=', '4.3.3']
        ])->whereYear("created_at", '=', date("Y"))->first();
        $standar4->kategori = $kategori4_3_3;
        $standar4->data = $data4_3_3;
        $standar4->skor = $skor4_3_3;
        $standar4->save();

        $standar4 = Standar4::where([
          ['id_prodi', '=', session('id_prodi')],
          ['kode', '=', '4.3.4']
        ])->whereYear("created_at", '=', date("Y"))->first();
        $standar4->kategori = $kategori4_3_4;
        $standar4->data = $data4_3_4;
        $standar4->skor = $skor4_3_4;
        $standar4->save();

        $standar4 = Standar4::where([
          ['id_prodi', '=', session('id_prodi')],
          ['kode', '=', '4.3.6']
        ])->whereYear("created_at", '=', date("Y"))->first();
        $standar4->kategori = $kategori4_3_6;
        $standar4->data = $data4_3_6;
        $standar4->skor = $skor4_3_6;
        $standar4->save();

        $standar4 = Standar4::where([
          ['id_prodi', '=', session('id_prodi')],
          ['kode', '=', '4.4.1']
        ])->whereYear("created_at", '=', date("Y"))->first();
        $standar4->kategori = $kategori4_4_1;
        $standar4->data = $data4_4_1;
        $standar4->skor = $skor4_4_1;
        $standar4->save();

        $standar4 = Standar4::where([
          ['id_prodi', '=', session('id_prodi')],
          ['kode', '=', '4.4.2.a']
        ])->whereYear("created_at", '=', date("Y"))->first();
        $standar4->kategori = $kategori4_4_2_a;
        $standar4->data = $data4_4_2_a;
        $standar4->skor = $skor4_4_2_a;
        $standar4->save();

        $standar4 = Standar4::where([
          ['id_prodi', '=', session('id_prodi')],
          ['kode', '=', '4.4.2.b']
        ])->whereYear("created_at", '=', date("Y"))->first();
        $standar4->kategori = $kategori4_4_2_b;
        $standar4->data = $data4_4_2_b;
        $standar4->skor = $skor4_4_2_b;
        $standar4->save();

        $standar4 = Standar4::where([
          ['id_prodi', '=', session('id_prodi')],
          ['kode', '=', '4.5.1']
        ])->whereYear("created_at", '=', date("Y"))->first();
        $standar4->kategori = $kategori4_5_1;
        $standar4->data = $data4_5_1;
        $standar4->skor = $skor4_5_1;
        $standar4->save();

        $standar4 = Standar4::where([
          ['id_prodi', '=', session('id_prodi')],
          ['kode', '=', '4.5.2']
        ])->whereYear("created_at", '=', date("Y"))->first();
        $standar4->kategori = $kategori4_5_2;
        $standar4->data = $data4_5_2;
        $standar4->skor = $skor4_5_2;
        $standar4->save();

        $standar4 = Standar4::where([
          ['id_prodi', '=', session('id_prodi')],
          ['kode', '=', '4.5.3']
        ])->whereYear("created_at", '=', date("Y"))->first();
        $standar4->kategori = $kategori4_5_3;
        $standar4->data = $data4_5_3;
        $standar4->skor = $skor4_5_3;
        $standar4->save();

        $standar4 = Standar4::where([
          ['id_prodi', '=', session('id_prodi')],
          ['kode', '=', '4.5.4']
        ])->whereYear("created_at", '=', date("Y"))->first();
        $standar4->kategori = $kategori4_5_4;
        $standar4->data = $data4_5_4;
        $standar4->skor = $skor4_5_4;
        $standar4->save();

        $standar4 = Standar4::where([
          ['id_prodi', '=', session('id_prodi')],
          ['kode', '=', '4.6.1.a']
        ])->whereYear("created_at", '=', date("Y"))->first();
        $standar4->kategori = $kategori4_6_1_a;
        $standar4->data = $data4_6_1_a;
        $standar4->skor = $skor4_6_1_a;
        $standar4->save();

        $standar4 = Standar4::where([
          ['id_prodi', '=', session('id_prodi')],
          ['kode', '=', '4.6.1.c']
        ])->whereYear("created_at", '=', date("Y"))->first();
        $standar4->kategori = $kategori4_6_1_c;
        $standar4->data = $data4_6_1_c;
        $standar4->skor = $skor4_6_1_c;
        $standar4->save();

        // return "updated";
      }else{
        //jika belum maka ...

        $standar4 = new Standar4;
        $standar4->kode = '4.3.1.a';
        $standar4->id_prodi = session('id_prodi');
        $standar4->kategori = $kategori4_3_1_a;
        $standar4->data = $data4_3_1_a;
        $standar4->skor = $skor4_3_1_a;
        $standar4->save();

        $standar4 = new Standar4;
        $standar4->kode = '4.3.1.b';
        $standar4->id_prodi = session('id_prodi');
        $standar4->kategori = $kategori4_3_1_b;
        $standar4->data = $data4_3_1_b;
        $standar4->skor = $skor4_3_1_b;
        $standar4->save();

        $standar4 = new Standar4;
        $standar4->kode = '4.3.1.c';
        $standar4->id_prodi = session('id_prodi');
        $standar4->kategori = $kategori4_3_1_c;
        $standar4->data = $data4_3_1_c;
        $standar4->skor = $skor4_3_1_c;
        $standar4->save();

        $standar4 = new Standar4;
        $standar4->kode = '4.3.1.d';
        $standar4->id_prodi = session('id_prodi');
        $standar4->kategori = $kategori4_3_1_d;
        $standar4->data = $data4_3_1_d;
        $standar4->skor = $skor4_3_1_d;
        $standar4->save();

        $standar4 = new Standar4;
        $standar4->kode = '4.3.2';
        $standar4->id_prodi = session('id_prodi');
        $standar4->kategori = $kategori4_3_2;
        $standar4->data = $data4_3_2;
        $standar4->skor = $skor4_3_2;
        $standar4->save();

        $standar4 = new Standar4;
        $standar4->kode = '4.3.3';
        $standar4->id_prodi = session('id_prodi');
        $standar4->kategori = $kategori4_3_3;
        $standar4->data = $data4_3_3;
        $standar4->skor = $skor4_3_3;
        $standar4->save();

        $standar4 = new Standar4;
        $standar4->kode = '4.3.4';
        $standar4->id_prodi = session('id_prodi');
        $standar4->kategori = $kategori4_3_4;
        $standar4->data = $data4_3_4;
        $standar4->skor = $skor4_3_4;
        $standar4->save();

        $standar4 = new Standar4;
        $standar4->kode = '4.3.6';
        $standar4->id_prodi = session('id_prodi');
        $standar4->kategori = $kategori4_3_6;
        $standar4->data = $data4_3_6;
        $standar4->skor = $skor4_3_6;
        $standar4->save();

        $standar4 = new Standar4;
        $standar4->kode = '4.4.1';
        $standar4->id_prodi = session('id_prodi');
        $standar4->kategori = $kategori4_4_1;
        $standar4->data = $data4_4_1;
        $standar4->skor = $skor4_4_1;
        $standar4->save();

        $standar4 = new Standar4;
        $standar4->kode = '4.4.2.a';
        $standar4->id_prodi = session('id_prodi');
        $standar4->kategori = $kategori4_4_2_a;
        $standar4->data = $data4_4_2_a;
        $standar4->skor = $skor4_4_2_a;
        $standar4->save();

        $standar4 = new Standar4;
        $standar4->kode = '4.4.2.b';
        $standar4->id_prodi = session('id_prodi');
        $standar4->kategori = $kategori4_4_2_b;
        $standar4->data = $data4_4_2_b;
        $standar4->skor = $skor4_4_2_b;
        $standar4->save();

        $standar4 = new Standar4;
        $standar4->kode = '4.5.1';
        $standar4->id_prodi = session('id_prodi');
        $standar4->kategori = $kategori4_5_1;
        $standar4->data = $data4_5_1;
        $standar4->skor = $skor4_5_1;
        $standar4->save();

        $standar4 = new Standar4;
        $standar4->kode = '4.5.2';
        $standar4->id_prodi = session('id_prodi');
        $standar4->kategori = $kategori4_5_2;
        $standar4->data = $data4_5_2;
        $standar4->skor = $skor4_5_2;
        $standar4->save();

        $standar4 = new Standar4;
        $standar4->kode = '4.5.3';
        $standar4->id_prodi = session('id_prodi');
        $standar4->kategori = $kategori4_5_3;
        $standar4->data = $data4_5_3;
        $standar4->skor = $skor4_5_3;
        $standar4->save();

        $standar4 = new Standar4;
        $standar4->kode = '4.5.4';
        $standar4->id_prodi = session('id_prodi');
        $standar4->kategori = $kategori4_5_4;
        $standar4->data = $data4_5_4;
        $standar4->skor = $skor4_5_4;
        $standar4->save();

        $standar4 = new Standar4;
        $standar4->kode = '4.6.1.a';
        $standar4->id_prodi = session('id_prodi');
        $standar4->kategori = $kategori4_6_1_a;
        $standar4->data = $data4_6_1_a;
        $standar4->skor = $skor4_6_1_a;
        $standar4->save();

        $standar4 = new Standar4;
        $standar4->kode = '4.6.1.c';
        $standar4->id_prodi = session('id_prodi');
        $standar4->kategori = $kategori4_6_1_c;
        $standar4->data = $data4_6_1_c;
        $standar4->skor = $skor4_6_1_c;
        $standar4->save();

        // return "saved";
      }

      return redirect()->back();

    }
}

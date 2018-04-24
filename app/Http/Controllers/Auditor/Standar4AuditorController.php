<?php

namespace App\Http\Controllers\Auditor;

use Illuminate\Http\Request;
use App\Standar4Auditor;
use App\Standar4;
use App\Prodi;
use App\Repositories\StandarStatus;
use App\Http\Controllers\Controller;

class Standar4AuditorController extends Controller
{
    public function index($idprodi){
      if(!is_numeric($idprodi)){
        abort(404);
      }

      $standar_status = new StandarStatus($idprodi);
      // dd($standar_status->getStatusMessage());
      $standar_status_code=$standar_status->getStatus();
      $standar_message=$standar_status->getStatusMessage();

      $prodi = Prodi::findOrFail($idprodi);
      $nama_prodi = $prodi->jjg_kd." ".$prodi->pro_nm;

      // $standar2 = Standar2Auditor::where("id_prodi", $idprodi)->get();
      $data = Standar4Auditor::select('kode', 'data', 'skor', 'kategori')->where([['id_prodi', '=', $idprodi],['auditor_id', '=', session("auditor_id")]])->orderBy('kode', 'asc')->get();
        if(!$data->count()){
          $dataCheck = true;
        }else{
          $dataCheck = false;
        }

      $data_kprodi = Standar4::select('kode', 'data', 'skor', 'kategori')->where('id_prodi', '=', $idprodi)->orderBy('kode', 'asc')->get();
      // $data_kprodi=array();
      // foreach ($standar2_kprodi as $data_prodi) {
      //   $data_kprodi[$data_prodi->kode] = $data_prodi->kategori;
      // }
      // dd(json_decode($data_kprodi[2]->data)[1]);

      $standar="Standar 4";
      return view("auditor/standar4.index", compact('idprodi', 'data', 'standar', 'standar_message', 'standar_status_code', 'nama_prodi', 'data_kprodi', 'dataCheck'));
    }

    public function save(Request $request, $idprodi){
      //dd($request->all());

      //perhitungan skor 4.3.1.a
      if ($request->setuju_4_3_1_a == '1') {
        $standar4_kprodi = Standar4::where([
          ["id_prodi", $idprodi],
          ["kode", "4.3.1.a"]
        ])->first();
        $kategori4_3_1_a = $standar4_kprodi->kategory;
        $data4_3_1_a = $kategory4_kprodi->data;
        $skor4_3_1_a = $kategory4_skor;
      } else {
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
      }

      //perhitungan skor 4.3.1.b
      if ($request->$setuju_4_3_2_b == '1') {
        $kprodi = Standar4::where([
          ["id_prodi", $idprodi],
          ["kode", "4.2.1.b"]
        ])->first();
        $kategori4_3_1_b = $kprodi->kategori;
        $data4_3_1_b = $kprodi->data;
        $skor4_3_1_b = $kprodi->skor;
      } else {
        if($request->kd4_3_1_b >= 40){
          $kategori4_3_1_b = 4;
        }elseif($request->kd4_3_1_b < 40){
          $kategori4_3_1_b = 2 + 5 * ($request->kd4_3_1_b/100);
        }
        $kategori4_3_1_b = intval(round($kategori4_3_1_b));
        $data4_3_1_b = '['.$request->kd4_3_1_b.']';
        $skor4_3_1_b = $request->kd4_3_1_b;
      }

      //perhitungan skor 4.3.1.c
      if ($request->$setuju_4_3_1_c == "1") {
        $kprodi = Standar4::where([
          ['id_prodi', $id_prodi],
          ['kode', "4.3.1.c"]
        ])->first();
        $kategori4_3_1_c = $kprodi->kateogri;
        $data4_3_1_c = $kprodi->data;
        $skor4_3_1_c = $kprodi->skor;
      } else {
        if($request->kd4_3_1_c >= (40)){
          $kategori4_3_1_c = 4;
        }elseif($request->kd4_3_1_c < (40)){
          $kategori4_3_1_c = 1 + 7.5 * ($request->kd4_3_1_c/100);
        }
        $kategori4_3_1_c = intval(round($kategori4_3_1_c));
        $data4_3_1_c = '['.$request->kd4_3_1_c.']';
        $skor4_3_1_c = $request->kd4_3_1_c;
      }

      //perhitungan skor 4.3.1.d
      if ($request->setuju_4_3_1_d == "1") {
        $kprodi = Standar4::where([
          ['id_prodi', $id_prodi],
          ['kode', "4.3.1.d"]
        ])->first();
        $kategori4_3_1_d = $kprodi->kateogri;
        $data4_3_1_d = $kprodi->data;
        $skor4_3_1_d = $kprodi->skor;
      } else {
        if($request->kd4_3_1_d >= 40){
          $kategori4_3_1_d = 4;
        }elseif($request->kd4_3_1_d < 40){
          $kategori4_3_1_d = 1 + 7.5 * ($request->kd4_3_1_d/100);
        }
        $kategori4_3_1_d = intval(round($kategori4_3_1_d));
        $data4_3_1_d = '['.$request->kd4_3_1_d.']';
        $skor4_3_1_d = $request->kd4_3_1_d;
      }

      //perhitungan skor 4.3.2
      if ($request->setuju_4_3_2 == "1") {
        $kprodi = Standar4::where([
          ['id_prodi', $id_prodi],
          ['kode', "4.3.2"]
        ])->first();
        $kategori4_3_2 = $kprodi->kateogri;
        $data4_3_2 = $kprodi->data;
        $skor4_3_2 = $kprodi->skor;
      } else {
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
      }


      //perhitungan skor 4.3.3
      if ($request->setuju_4_3_3 == "1") {
        $kprodi = Standar4::where([
          ['id_prodi', $id_prodi],
          ['kode', "4.3.3"]
        ])->first();
        $kategori4_3_3 = $kprodi->kateogri;
        $data4_3_3 = $kprodi->data;
        $skor4_3_3 = $kprodi->skor;
      } else {
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
      }

      //perhitungan skor 4.3.4
      if ($request->setuju_4_3_4 == "1") {
        $kprodi = Standar4::where([
          ['id_prodi', $id_prodi],
          ['kode', "4.3.4"]
        ])->first();
        $kategori4_3_4 = $kprodi->kateogri;
        $data4_3_4 = $kprodi->data;
        $skor4_3_4 = $kprodi->skor;
      } else {
        $kategori4_3_4 = $request->n4_3_4;
        $kategori4_3_4 = intval(round($kategori4_3_4));
        $data4_3_4 = '['.$request->n4_3_4.']';
        $skor4_3_4 = $request->n4_3_4;
      }

      //perhitungan skor 4.3.6
      if ($request->setuju_4_3_6 == "1") {
        $kprodi = Standar4::where([
          ['id_prodi', $id_prodi],
          ['kode', "4.3.6"]
        ])->first();
        $kategori4_3_6 = $kprodi->kateogri;
        $data4_3_6 = $kprodi->data;
        $skor4_3_6 = $kprodi->skor;
      } else {
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
      }

      //perhitungan skor 4.4.1
      if ($request->setuju_4_4_1 == "1") {
        $kprodi = Standar4::where([
          ['id_prodi', $id_prodi],
          ['kode', "4.4.1"]
        ])->first();
        $kategori4_4_1 = $kprodi->kateogri;
        $data4_4_1 = $kprodi->data;
        $skor4_4_1 = $kprodi->skor;
      } else {
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
      }

      //perhitungan skor 4.4.2.a
      if ($request->setuju_4_4_2_a == "1") {
        $kprodi = Standar4::where([
          ['id_prodi', $id_prodi],
          ['kode', "4.4.2.a"]
        ])->first();
        $kategori4_4_2_a = $kprodi->kateogri;
        $data4_4_2_a = $kprodi->data;
        $skor4_4_2_a = $kprodi->skor;
      } else {
        $kategori4_4_2_a = $request->n4_4_2_a;
        $kategori4_4_2_a = intval(round($kategori4_4_2_a));
        $data4_4_2_a = '['.$request->n4_4_2_a.']';
        $skor4_4_2_a = $request->n4_4_2_a;
      }

      //perhitungan skor 4.4.2.b
      if ($request->setuju_4_4_2_b == "1") {
        $kprodi = Standar4::where([
          ['id_prodi', $id_prodi],
          ['kode', "4.4.2.b"]
        ])->first();
        $kategori4_4_2_b = $kprodi->kateogri;
        $data4_4_2_b = $kprodi->data;
        $skor4_4_2_b = $kprodi->skor;
      } else {
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
      }

      //perhitungan skor 4.5.1
      if ($request->setuju_4_5_1 == "1") {
        $kprodi = Standar4::where([
          ['id_prodi', $id_prodi],
          ['kode', "4.5.1"]
        ])->first();
        $kategori4_5_1 = $kprodi->kateogri;
        $data4_5_1 = $kprodi->data;
        $skor4_5_1 = $kprodi->skor;
      } else {
        if ($request->jtap4_5_1 >= 12) {
          $kategori4_5_1 = 4;
        } elseif ($request->jtap4_5_1 < 12) {
          $kategori4_5_1 = 1 + ($request->jtap4_5_1 / 4);
        }
        $kategori4_5_1 = intval(round($kategori4_5_1));
        $data4_5_1 = '['.$request->jtap4_5_1.']';
        $skor4_5_1 = $request->jtap4_5_1;
      }

      //perhitungan skor 4.5_2
      if ($request->setuju_4_5_2 == "1") {
        $kprodi = Standar4::where([
          ['id_prodi', $id_prodi],
          ['kode', "4.5.2"]
        ])->first();
        $kategori4_5_2 = $kprodi->kateogri;
        $data4_5_2 = $kprodi->data;
        $skor4_5_2 = $kprodi->skor;
      } else {
        $sd4_5_2 = (0.75 * $request->n2_4_5_2) + (1.25 * $request->n3_4_5_2);
        if ($sd4_5_2 >= 4) {
          $kategori4_5_2 = 4;
        } elseif ($sd4_5_2 >= 0 && $sd4_5_2 < 4) {
          $kategori4_5_2 = $sd4_5_2;
        }
        $kategori4_5_2 = intval(round($kategori4_5_2));
        $data4_5_2 = '['.$request->n2_4_5_2.', '.$request->n3_4_5_2.']';
        $skor4_5_2 = $sd4_5_2;
      }

      //perhitungan skor 4.5_3
      if ($request->setuju_4_5_3 == "1") {
        $kprodi = Standar4::where([
          ['id_prodi', $id_prodi],
          ['kode', "4.5.3"]
        ])->first();
        $kategori4_5_3 = $kprodi->kateogri;
        $data4_5_3 = $kprodi->data;
        $skor4_5_3 = $kprodi->skor;
      } else {
        $sp4_5_3 = ($request->a4_5_3 + ($request->b4_5_3 / 4)) / $request->n4_5_3;
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
      }

      //perhitungan skor 4.5_4
      if ($request->$setuju_4_5_4 == "1") {
        $kprodi = Standar4::where([
          ['id_prodi', $id_prodi],
          ['kode', "4.5.4"]
        ])->first();
        $kategori4_5_4 = $kprodi->kateogri;
        $data4_5_4 = $kprodi->data;
        $skor4_5_4 = $kprodi->skor;
      } else {
        $kategori4_5_4 = $request->n4_5_4;
        $kategori4_5_4 = intval(round($kategori4_5_4));
        $data4_5_4 = '['.$request->n4_5_4.']';
        $skor4_5_4 = $request->n4_5_4;
      }

      //perhitungan skor 4.6_1_a
      if ($request->setuju_4_6_1_a == "1") {
        $kprodi = Standar4::where([
          ['id_prodi', $id_prodi],
          ['kode', "4.6.1.a"]
        ])->first();
        $kategori4_6_1_a = $kprodi->kateogri;
        $data4_6_1_a = $kprodi->data;
        $skor4_6_1_a = $kprodi->skor;
      } else {
        $a4_6_1_a = ((4 * $request->x1_4_6_1_a) + (3 * $request->x2_4_6_1_a) + (2 * $request->x3_4_6_1_a)) / 4;
        if ($a4_6_1_a >= 4) {
          $kategori4_6_1_a = 4;
        } elseif ($a4_6_1_a < 4) {
          $kategori4_6_1_a = $a4_6_1_a;
        }
        $kategori4_6_1_a = intval(round($kategori4_6_1_a));
        $data4_6_1_a = '['.$request->x1_4_6_1_a.', '.$request->x2_4_6_1_a.', '.$request->x3_4_6_1_a.']';
        $skor4_6_1_a = $a4_6_1_a;
      }

      //perhitungan skor 4.6_1_c
      if ($request->setuju_4_6_1_c == "1") {
        $kprodi = Standar4::where([
          ['id_prodi', $id_prodi],
          ['kode', "4.6.1.c"]
        ])->first();
        $kategori4_6_1_c = $kprodi->kateogri;
        $data4_6_1_c = $kprodi->data;
        $skor4_6_1_c = $kprodi->skor;
      } else {
        $d4_6_1_c = ((4*$request->x1_4_6_1_c) + (3*$request->x2_4_6_1_c) + (2*$request->x3_4_6_1_c) + $request->x4_4_6_1_c) / 4;
        if($d4_6_1_c >= 4){
          $kategori4_6_1_c = 4;
        } elseif ($d4_6_1_c < 4) {
          $kategori4_6_1_c = $d4_6_1_c;
        }
        $kategori4_6_1_c = intval(round($kategori4_6_1_c));
        $data4_6_1_c = '['.$request->x1_4_6_1_c.', '.$request->x2_4_6_1_c.', '.$request->x3_4_6_1_c.', '.$request->x4_4_6_1_c.']';
        $skor4_6_1_c = $d4_6_1_c;
      }

      //return ($skor4_3_1_a . ", " . $skor4_3_1_b . ", " . $skor4_3_1_c . ", " . $skor4_3_1_d . ", " . $skor4_3_2);

      //cek apakah jurusan tersebut sudah pernah input atau belum
      $oldStandar4 = Standar4Auditor::where([
        ['id_prodi', '=', $idprodi],
        ['auditor_id', '=', session('auditor_id')]
        ])->first();
      if($oldStandar4){
        //jika sudah maka ...

        $standar4 = Standar4Auditor::where([
          ['id_prodi', '=', $idprodi],
          ['auditor_id', '=', session("auditor_id")],
          ['kode', '=', '4.3.1.a']
        ])->first();
        $standar4->kategori = $kategori4_3_1_a;
        $standar4->data = $data4_3_1_a;
        $standar4->skor = $skor4_3_1_a;
        $standar4->save();

        $standar4 = Standar4Auditor::where([
          ['id_prodi', '=', $idprodi],
          ['auditor_id', '=', session("auditor_id")],
          ['kode', '=', '4.3.1.b']
        ])->first();
        $standar4->kategori = $kategori4_3_1_b;
        $standar4->data = $data4_3_1_b;
        $standar4->skor = $skor4_3_1_b;
        $standar4->save();

        $standar4 = Standar4Auditor::where([
          ['id_prodi', '=', $idprodi],
          ['auditor_id', '=', session("auditor_id")],
          ['kode', '=', '4.3.1.c']
        ])->first();
        $standar4->kategori = $kategori4_3_1_c;
        $standar4->data = $data4_3_1_c;
        $standar4->skor = $skor4_3_1_c;
        $standar4->save();

        $standar4 = Standar4Auditor::where([
          ['id_prodi', '=', $idprodi],
          ['auditor_id', '=', session("auditor_id")],
          ['kode', '=', '4.3.1.d']
        ])->first();
        $standar4->kategori = $kategori4_3_1_d;
        $standar4->data = $data4_3_1_d;
        $standar4->skor = $skor4_3_1_d;
        $standar4->save();

        $standar4 = Standar4Auditor::where([
          ['id_prodi', '=', $idprodi],
          ['auditor_id', '=', session("auditor_id")],
          ['kode', '=', '4.3.2']
        ])->first();
        $standar4->kategori = $kategori4_3_2;
        $standar4->data = $data4_3_2;
        $standar4->skor = $skor4_3_2;
        $standar4->save();

        $standar4 = Standar4Auditor::where([
          ['id_prodi', '=', $idprodi],
          ['auditor_id', '=', session("auditor_id")],
          ['kode', '=', '4.3.3']
        ])->first();
        $standar4->kategori = $kategori4_3_3;
        $standar4->data = $data4_3_3;
        $standar4->skor = $skor4_3_3;
        $standar4->save();

        $standar4 = Standar4Auditor::where([
          ['id_prodi', '=', $idprodi],
          ['auditor_id', '=', session("auditor_id")],
          ['kode', '=', '4.3.4']
        ])->first();
        $standar4->kategori = $kategori4_3_4;
        $standar4->data = $data4_3_4;
        $standar4->skor = $skor4_3_4;
        $standar4->save();

        $standar4 = Standar4Auditor::where([
          ['id_prodi', '=', $idprodi],
          ['auditor_id', '=', session("auditor_id")],
          ['kode', '=', '4.3.6']
        ])->first();
        $standar4->kategori = $kategori4_3_6;
        $standar4->data = $data4_3_6;
        $standar4->skor = $skor4_3_6;
        $standar4->save();

        $standar4 = Standar4Auditor::where([
          ['id_prodi', '=', $idprodi],
          ['auditor_id', '=', session("auditor_id")],
          ['kode', '=', '4.4.1']
        ])->first();
        $standar4->kategori = $kategori4_4_1;
        $standar4->data = $data4_4_1;
        $standar4->skor = $skor4_4_1;
        $standar4->save();

        $standar4 = Standar4Auditor::where([
          ['id_prodi', '=', $idprodi],
          ['auditor_id', '=', session("auditor_id")],
          ['kode', '=', '4.4.2.a']
        ])->first();
        $standar4->kategori = $kategori4_4_2_a;
        $standar4->data = $data4_4_2_a;
        $standar4->skor = $skor4_4_2_a;
        $standar4->save();

        $standar4 = Standar4Auditor::where([
          ['id_prodi', '=', $idprodi],
          ['auditor_id', '=', session("auditor_id")],
          ['kode', '=', '4.4.2.b']
        ])->first();
        $standar4->kategori = $kategori4_4_2_b;
        $standar4->data = $data4_4_2_b;
        $standar4->skor = $skor4_4_2_b;
        $standar4->save();

        $standar4 = Standar4Auditor::where([
          ['id_prodi', '=', $idprodi],
          ['auditor_id', '=', session("auditor_id")],
          ['kode', '=', '4.5.1']
        ])->first();
        $standar4->kategori = $kategori4_5_1;
        $standar4->data = $data4_5_1;
        $standar4->skor = $skor4_5_1;
        $standar4->save();

        $standar4 = Standar4Auditor::where([
          ['id_prodi', '=', $idprodi],
          ['auditor_id', '=', session("auditor_id")],
          ['kode', '=', '4.5.2']
        ])->first();
        $standar4->kategori = $kategori4_5_2;
        $standar4->data = $data4_5_2;
        $standar4->skor = $skor4_5_2;
        $standar4->save();

        $standar4 = Standar4Auditor::where([
          ['id_prodi', '=', $idprodi],
          ['auditor_id', '=', session("auditor_id")],
          ['kode', '=', '4.5.3']
        ])->first();
        $standar4->kategori = $kategori4_5_3;
        $standar4->data = $data4_5_3;
        $standar4->skor = $skor4_5_3;
        $standar4->save();

        $standar4 = Standar4Auditor::where([
          ['id_prodi', '=', $idprodi],
          ['auditor_id', '=', session("auditor_id")],
          ['kode', '=', '4.5.4']
        ])->first();
        $standar4->kategori = $kategori4_5_4;
        $standar4->data = $data4_5_4;
        $standar4->skor = $skor4_5_4;
        $standar4->save();

        $standar4 = Standar4Auditor::where([
          ['id_prodi', '=', $idprodi],
          ['auditor_id', '=', session("auditor_id")],
          ['kode', '=', '4.6.1.a']
        ])->first();
        $standar4->kategori = $kategori4_6_1_a;
        $standar4->data = $data4_6_1_a;
        $standar4->skor = $skor4_6_1_a;
        $standar4->save();

        $standar4 = Standar4Auditor::where([
          ['id_prodi', '=', $idprodi],
          ['auditor_id', '=', session("auditor_id")],
          ['kode', '=', '4.6.1.c']
        ])->first();
        $standar4->kategori = $kategori4_6_1_c;
        $standar4->data = $data4_6_1_c;
        $standar4->skor = $skor4_6_1_c;
        $standar4->save();

        // return "updated";
      }else{
        //jika belum maka ...

        $standar4 = new Standar4Auditor;
        $standar4->kode = '4.3.1.a';
        $standar4->id_prodi = $idprodi;
        $standar4->auditor_id = session('auditor_id');
        $standar4->kategori = $kategori4_3_1_a;
        $standar4->data = $data4_3_1_a;
        $standar4->skor = $skor4_3_1_a;
        $standar4->save();

        $standar4 = new Standar4Auditor;
        $standar4->kode = '4.3.1.b';
        $standar4->id_prodi = $idprodi;
        $standar4->auditor_id = session('auditor_id');
        $standar4->kategori = $kategori4_3_1_b;
        $standar4->data = $data4_3_1_b;
        $standar4->skor = $skor4_3_1_b;
        $standar4->save();

        $standar4 = new Standar4Auditor;
        $standar4->kode = '4.3.1.c';
        $standar4->id_prodi = $idprodi;
        $standar4->auditor_id = session('auditor_id');
        $standar4->kategori = $kategori4_3_1_c;
        $standar4->data = $data4_3_1_c;
        $standar4->skor = $skor4_3_1_c;
        $standar4->save();

        $standar4 = new Standar4Auditor;
        $standar4->kode = '4.3.1.d';
        $standar4->id_prodi = $idprodi;
        $standar4->auditor_id = session('auditor_id');
        $standar4->kategori = $kategori4_3_1_d;
        $standar4->data = $data4_3_1_d;
        $standar4->skor = $skor4_3_1_d;
        $standar4->save();

        $standar4 = new Standar4Auditor;
        $standar4->kode = '4.3.2';
        $standar4->id_prodi = $idprodi;
        $standar4->auditor_id = session('auditor_id');
        $standar4->kategori = $kategori4_3_2;
        $standar4->data = $data4_3_2;
        $standar4->skor = $skor4_3_2;
        $standar4->save();

        $standar4 = new Standar4Auditor;
        $standar4->kode = '4.3.3';
        $standar4->id_prodi = $idprodi;
        $standar4->auditor_id = session('auditor_id');
        $standar4->kategori = $kategori4_3_3;
        $standar4->data = $data4_3_3;
        $standar4->skor = $skor4_3_3;
        $standar4->save();

        $standar4 = new Standar4Auditor;
        $standar4->kode = '4.3.4';
        $standar4->id_prodi = $idprodi;
        $standar4->auditor_id = session('auditor_id');
        $standar4->kategori = $kategori4_3_4;
        $standar4->data = $data4_3_4;
        $standar4->skor = $skor4_3_4;
        $standar4->save();

        $standar4 = new Standar4Auditor;
        $standar4->kode = '4.3.6';
        $standar4->id_prodi = $idprodi;
        $standar4->auditor_id = session('auditor_id');
        $standar4->kategori = $kategori4_3_6;
        $standar4->data = $data4_3_6;
        $standar4->skor = $skor4_3_6;
        $standar4->save();

        $standar4 = new Standar4Auditor;
        $standar4->kode = '4.4.1';
        $standar4->id_prodi = $idprodi;
        $standar4->auditor_id = session('auditor_id');
        $standar4->kategori = $kategori4_4_1;
        $standar4->data = $data4_4_1;
        $standar4->skor = $skor4_4_1;
        $standar4->save();

        $standar4 = new Standar4Auditor;
        $standar4->kode = '4.4.2.a';
        $standar4->id_prodi = $idprodi;
        $standar4->auditor_id = session('auditor_id');
        $standar4->kategori = $kategori4_4_2_a;
        $standar4->data = $data4_4_2_a;
        $standar4->skor = $skor4_4_2_a;
        $standar4->save();

        $standar4 = new Standar4Auditor;
        $standar4->kode = '4.4.2.b';
        $standar4->id_prodi = $idprodi;
        $standar4->auditor_id = session('auditor_id');
        $standar4->kategori = $kategori4_4_2_b;
        $standar4->data = $data4_4_2_b;
        $standar4->skor = $skor4_4_2_b;
        $standar4->save();

        $standar4 = new Standar4Auditor;
        $standar4->kode = '4.5.1';
        $standar4->id_prodi = $idprodi;
        $standar4->auditor_id = session('auditor_id');
        $standar4->kategori = $kategori4_5_1;
        $standar4->data = $data4_5_1;
        $standar4->skor = $skor4_5_1;
        $standar4->save();

        $standar4 = new Standar4Auditor;
        $standar4->kode = '4.5.2';
        $standar4->id_prodi = $idprodi;
        $standar4->auditor_id = session('auditor_id');
        $standar4->kategori = $kategori4_5_2;
        $standar4->data = $data4_5_2;
        $standar4->skor = $skor4_5_2;
        $standar4->save();

        $standar4 = new Standar4Auditor;
        $standar4->kode = '4.5.3';
        $standar4->id_prodi = $idprodi;
        $standar4->auditor_id = session('auditor_id');
        $standar4->kategori = $kategori4_5_3;
        $standar4->data = $data4_5_3;
        $standar4->skor = $skor4_5_3;
        $standar4->save();

        $standar4 = new Standar4Auditor;
        $standar4->kode = '4.5.4';
        $standar4->id_prodi = $idprodi;
        $standar4->auditor_id = session('auditor_id');
        $standar4->kategori = $kategori4_5_4;
        $standar4->data = $data4_5_4;
        $standar4->skor = $skor4_5_4;
        $standar4->save();

        $standar4 = new Standar4Auditor;
        $standar4->kode = '4.6.1.a';
        $standar4->id_prodi = $idprodi;
        $standar4->auditor_id = session('auditor_id');
        $standar4->kategori = $kategori4_6_1_a;
        $standar4->data = $data4_6_1_a;
        $standar4->skor = $skor4_6_1_a;
        $standar4->save();

        $standar4 = new Standar4Auditor;
        $standar4->kode = '4.6.1.c';
        $standar4->id_prodi = $idprodi;
        $standar4->auditor_id = session('auditor_id');
        $standar4->kategori = $kategori4_6_1_c;
        $standar4->data = $data4_6_1_c;
        $standar4->skor = $skor4_6_1_c;
        $standar4->save();

        // return "saved";
      }

      return redirect()->back();

    }
}

<?php

namespace App\Http\Controllers\Auditor;
use App\Standar5Auditor;
use App\Standar5;
use App\Prodi;
use App\Repositories\StandarStatus;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class Standar5AuditorController extends Controller
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
  $data = Standar5Auditor::select('kode', 'data', 'skor', 'kategori', 'catatan')->whereYear("created_at", '=', date("Y"))->where([['id_prodi', '=', $idprodi],['auditor_id', '=', session("auditor_id")]])->orderBy('kode', 'asc')->get();

  // dd(!$data->count());
  if(!$data->count()){
    $dataCheck = true;
  }else{
    $dataCheck = false;
  }

  $data_kprodi = Standar5::select('kode', 'data', 'skor', 'kategori')->whereYear("created_at", '=', date("Y"))->where('id_prodi', '=', $idprodi)->orderBy('kode', 'asc')->get();
      // $data_kprodi=array();
      // foreach ($standar2_kprodi as $data_prodi) {
      //   $data_kprodi[$data_prodi->kode] = $data_prodi->kategori;
      // }
      // dd($data_kprodi);

  $standar="Standar 5";
  return view("auditor/standar5.index", compact('idprodi', 'data', 'standar', 'standar_message', 'standar_status_code', 'nama_prodi', 'data_kprodi', 'dataCheck'));
}

public function save(Request $masuk, $idprodi){

      // $validator = $this->validator($masuk->all());
      // if($alidator->fails()){
      //   $this->throwValidationException{
      //     $masuk->$validator
      //   };
      //   $this->save($masuk->all());
      //   return response()->json($masuk->all(),200);
      // }

      //hitung skor_5_1_1_a
  if ($masuk->setuju_5_1_1_a == "1") {
    $masuk->catatan5_1_1_a = "Auditor setuju";
    $kprodi = Standar5::where([
      ["id_prodi", $idprodi],
      ["kode", "5.1.1.a"]
    ])->whereYear("created_at", '=', date("Y"))->first();
    $kategori5_1_1_a = $kprodi->kategori;
    $data5_1_1_a = $kprodi->data;
    $skor5_1_1_a = $kprodi->skor;
  } else {
    $kategori5_1_1_a = $masuk->n_5_1_1_a;
    $kategori5_1_1_a = intval(round($kategori5_1_1_a));
    $data5_1_1_a = '['.$masuk->n_5_1_1_a.']';
    $skor5_1_1_a = $masuk->n_5_1_1_a;
  }

      //hitung skor_5_1_2_b
  if ($masuk->setuju_5_1_2_b == "1") {
    $masuk->catatan5_1_2_b = "Auditor setuju";
    $kprodi = Standar5::where([
      ["id_prodi", $idprodi],
      ["kode", "5.1.2.b"]
    ])->whereYear("created_at", '=', date("Y"))->first();
    $kategori5_1_2_b = $kprodi->kategori;
    $data5_1_2_b = $kprodi->data;
    $skor5_1_2_b = $kprodi->skor;
  } else {
    $kategori5_1_2_b = $masuk->standar5_1_2_b;
    $kategori5_1_2_b= intval(round($kategori5_1_2_b));
    $data5_1_2_b = '['.$masuk->standar5_1_2_b.']';
    $skor5_1_2_b = $masuk->standar5_1_2_b;
  }

      //perhitungan skor 5_1_2_c
  if ($masuk->setuju_5_1_2_c == "1") {
    $masuk->catatan5_1_2_c = "Auditor setuju";
    $kprodi = Standar5::where([
      ["id_prodi", $idprodi],
      ["kode", "5.1.2.c"]
    ])->whereYear("created_at", '=', date("Y"))->first();
    $kategori5_1_2_c = $kprodi->kategori;
    $data5_1_2_c = $kprodi->data;
    $skor5_1_2_c = $kprodi->skor;
  } else {
    if($masuk->pdmk5_1_2_c >= 95){
      $kategori5_1_2_c= 4;
    }
    elseif($masuk->pdmk5_1_2_c >= 55 && $masuk->pdmk5_1_2_c <= 94){
      $kategori5_1_2_c= 10 *($masuk->pdmk5_1_2_c - 55)/100;
    }
    elseif ($masuk->pdmk5_1_2_c < 55){
      $kategori5_1_2_c= 0;
    }
    elseif($masuk->pdmk5_1_2_c == null){
      $kategori5_1_2_c=0;
    }
        $kategori5_1_2_c= intval(round($kategori5_1_2_c)); //pembulatan $kategori5_1_2_c
        $data5_1_2_c = '['.$masuk->pdmk5_1_2_c.']';
        $skor5_1_2_c = $masuk->pdmk5_1_2_c;
      }

      //perhitungan skor 5.1.3.a
      // if($masuk->bmkp5_1_3_a  >= 9 && $masuk->rmkp5_1_3_a >= 2){
      //     $kategori5_1_3_a=4;
      // }
      //
      // elseif($masuk->bmkp5_1_3_a >= 9 && $masuk->rmkp5_1_3_a == 1 ){
      //     $kategori5_1_3_a= 3 * $masuk->rmkp5_1_3_a;
      // }
      // elseif($masuk->bmkp5_1_3_a < 9 || $masuk->rmkp5_1_3_a < 1){
      //   $kategori5_1_3_a = 2;
      // }
      //
      // elseif($masuk->bmkp5_3_1_a == null || $masuk->rmkp5_3_1_a == null){
      //   $kategori5_1_3_a = 0;
      // }
      if ($masuk->setuju_5_1_3_a == "1") {
        $masuk->catatan5_1_3_a = "Auditor setuju";
        $kprodi = Standar5::where([
          ["id_prodi", $idprodi],
          ["kode", "5.1.3.a"]
        ])->whereYear("created_at", '=', date("Y"))->first();
        $kategori5_1_3_a = $kprodi->kategori;
        $data5_1_3_a = $kprodi->data;
        $skor5_1_3_a = $kprodi->skor;
      } else {
        $kategori5_1_3_a = $masuk->standar5_1_3_a / 3;
        $kategori5_1_3_a= intval(round($kategori5_1_3_a)); // pembulatan $kategori5_1_3_a
        $data5_1_3_a = '['.$masuk->standar5_1_3_a.']';
        $skor5_1_3_a = $kategori5_1_3_a;
      }

      //hitung standar5_3_2
      if ($masuk->setuju_5_3_2 == "1") {
        $masuk->catatan5_3_2 = "Auditor setuju";
        $kprodi = Standar5::where([
          ["id_prodi", $idprodi],
          ["kode", "5.3.2"]
        ])->whereYear("created_at", '=', date("Y"))->first();
        $kategori5_3_2 = $kprodi->kategori;
        $data5_3_2 = $kprodi->data;
        $skor5_3_2 = $kprodi->skor;
      } else {
        $kategori5_3_2 = $masuk->standar5_3_2;
        $kategori5_3_2 = intval(round($kategori5_3_2));
        $data5_3_2 = '['.$masuk->standar5_3_2.']';
        $skor5_3_2 = $kategori5_3_2;
      }


      //perhitungan 5_4_1_a
      if ($masuk->setuju_5_4_1_a == "1") {
        $masuk->catatan5_4_1_a = "Auditor setuju";
        $kprodi = Standar5::where([
          ["id_prodi", $idprodi],
          ["kode", "5.4.1.a"]
        ])->whereYear("created_at", '=', date("Y"))->first();
        $kategori5_4_1_a = $kprodi->kategori;
        $data5_4_1_a = $kprodi->data;
        $skor5_4_1_a = $kprodi->skor;
      } else {
        if ($masuk->rmpa5_4_1_a >= 1 && $masuk->rmpa5_4_1_a <= 20){
          $kategori5_4_1_a = 4;
        }elseif($masuk->rmpa5_4_1_a > 20 && $masuk->rmpa5_4_1_a < 60){
          $kategori5_4_1_a = (60 - $masuk->rmpa5_4_1_a) / 10;
        }elseif($masuk->rmpa5_4_1_a >=60 || $masuk->rmpa5_4_1_a == 0){
          $kategori5_4_1_a = 0;
        }elseif($masuk->rmpa5_4_1_a == null){
          $kategori5_4_1_a = 0;
        }
        $kategori5_4_1_a= intval(round($kategori5_4_1_a));
        $data5_4_1_a = '['.$masuk->rmpa5_4_1_a.']';
        $skor5_4_1_a = $kategori5_4_1_a;
      }

      //hitung rmpa5_4_1_c
      if ($masuk->setuju_5_4_1_c == "1") {
        $masuk->catatan5_4_1_c = "Auditor setuju";
        $kprodi = Standar5::where([
          ["id_prodi", $idprodi],
          ["kode", "5.4.1.c"]
        ])->whereYear("created_at", '=', date("Y"))->first();
        $kategori5_4_1_c = $kprodi->kategori;
        $data5_4_1_c = $kprodi->data;
        $skor5_4_1_c = $kprodi->skor;
      } else {
        if ($masuk->rmpa5_4_1_c >= 3){
          $kategori5_4_1_c = 4;
        }elseif ($masuk->rmpa5_4_1_c < 3 && $masuk->rmpa5_4_1_c > 0){
          $kategori5_4_1_c = $masuk->rmpa5_4_1_c + 1;
        }elseif($masuk->rmpa5_4_1_c == null){
          $kategori5_4_1_c = 0;
        }
        $kategori5_4_1_c= intval(round($kategori5_4_1_c));
        $data5_4_1_c = '['.$masuk->rmpa5_4_1_c.']';
        $skor5_4_1_c = $kategori5_4_1_c;
      }


      //hitung standar 5.4.2

      if ($masuk->setuju_5_4_2 == "1") {
        $masuk->catatan5_4_2 = "Auditor setuju";
        $kprodi = Standar5::where([
          ["id_prodi", $idprodi],
          ["kode", "5.4.2"]
        ])->whereYear("created_at", '=', date("Y"))->first();
        $kategori5_4_2 = $kprodi->kategori;
        $data5_4_2 = $kprodi->data;
        $skor5_4_2 = $kprodi->skor;
      } else {
        if ($masuk->standar5_4_2){
          $kategori5_4_2 = $masuk->standar5_4_2;
        }else{
          $kategori5_4_2 =0;
        }
        $kategori5_4_2 = intval(round($kategori5_4_2));
        $data5_4_2 = '['.$masuk->standar5_4_2.']';
        $skor5_4_2 = $kategori5_4_2;
      }


      //hitung rmta5_5_1_b
      if ($masuk->setuju_5_5_1_b == "1") {
        $masuk->catatan5_5_1_b = "Auditor setuju";
        $kprodi = Standar5::where([
          ["id_prodi", $idprodi],
          ["kode", "5.5.1.b"]
        ])->whereYear("created_at", '=', date("Y"))->first();
        $kategori5_5_1_b = $kprodi->kategori;
        $data5_5_1_b = $kprodi->data;
        $skor5_5_1_b = $kprodi->skor;
      } else {
        if($masuk->rmta5_5_1_b > 0 && $masuk->rmta5_5_1_b <= 4 ){
          $kategori5_5_1_b = 4;
        }
        elseif($masuk->rmta5_5_1_b > 4 && $masuk->rmta5_5_1_b < 20  ){
          $kategori5_5_1_b = 5 - ($masuk->rmta5_5_1_b / 4);
        }
        elseif($masuk->rmta5_5_1_b == 0 || $masuk->rmta5_5_1_b >= 20 ){
          $kategori5_5_1_b = 0;
        }
        elseif($masuk->rmta5_5_1_b == null){
          $kategori5_5_1_b = 0;
        }
        $kategori5_5_1_b= intval(round($kategori5_5_1_b));
        $data5_5_1_b = '['.$masuk->rmta5_5_1_b.']';
        $skor5_5_1_b = $kategori5_5_1_b;
      }

      //hitung rbta5_5_1_c
      if ($masuk->setuju_5_5_1_c == "1") {
        $masuk->catatan5_5_1_c = "Auditor setuju";
        $kprodi = Standar5::where([
          ["id_prodi", $idprodi],
          ["kode", "5.5.1.c"]
        ])->whereYear("created_at", '=', date("Y"))->first();
        $kategori5_5_1_c = $kprodi->kategori;
        $data5_5_1_c = $kprodi->data;
        $skor5_5_1_c = $kprodi->skor;
      } else {
        if($masuk->rbta5_5_1_c >= 8 ){
          $kategori5_5_1_c = 4;
        }
        elseif($masuk->rbta5_5_1_c < 8 ){
          $kategori5_5_1_c = $masuk->rbta5_5_1_c / 2;
        }
        elseif($masuk->rbta5_5_1_c == null){
          $kategori5_5_1_c = 0;
        }
        $kategori5_5_1_c = intval(round($kategori5_5_1_c));
        $data5_5_1_c = '['.$masuk->rbta5_5_1_c.']';
        $skor5_5_1_c = $kategori5_5_1_c;
      }

      //hitung standar5_5_2 == 0
      if ($masuk->setuju_5_5_2 == "1") {
        $masuk->catatan5_5_2 = "Auditor setuju";
        $kprodi = Standar5::where([
          ["id_prodi", $idprodi],
          ["kode", "5.5.2"]
        ])->whereYear("created_at", '=', date("Y"))->first();
        $kategori5_5_2 = $kprodi->kategori;
        $data5_5_2 = $kprodi->data;
        $skor5_5_2 = $kprodi->skor;
      } else {
        if($masuk->standar5_5_2 == 0 && $masuk->rpta5_5_2 == 6){
          $kategori5_5_2= 4;
        }
        elseif($masuk->standar5_5_2 == 0 && $masuk->rpta5_5_2 > 6 && $masuk->rpta5_5_2 < 14 ){
          $kategori5_5_2 = (14 - $masuk->rpta5_5_2) / 2;
        }
        elseif($masuk->standar5_5_2 == 0 && $masuk->rpta5_5_2 >= 14){
          $kategori5_5_2 = 0;
        }
        elseif($masuk->standar5_5_2 == 0 && $masuk->rpta5_5_2 == 0){
          $kategori5_5_2 = 0;
        }
        //hitung standar5_5_2 == 1
        if($masuk->standar5_5_2 == 1 && $masuk->rpta5_5_2 <= 12){
          $kategori5_5_2= 4;
        }
        elseif($masuk->standar5_5_2 == 1 && $masuk->rpta5_5_2 > 12 && $masuk->rpta5_5_2 < 28 ){
          $kategori5_5_2 = (28 - $masuk->rpta5_5_2)/4;
        }
        elseif($masuk->standar5_5_2 == 1 && $masuk->rpta5_5_2 >=28){
          $kategori5_5_2=0;
        }
        else {
          $kategori5_5_2=0;
        }
        $data5_5_2 = '['.$masuk->standar5_5_2.', '.$masuk->rpta5_5_2.']';
        $skor5_5_2 = $kategori5_5_2;
      }

      //hitung nilai 5.7.2
      if ($masuk->setuju_5_7_2 == "1") {
        $masuk->catatan5_7_2 = "Auditor setuju";
        $kprodi = Standar5::where([
          ["id_prodi", $idprodi],
          ["kode", "5.7.2"]
        ])->whereYear("created_at", '=', date("Y"))->first();
        $kategori5_7_2 = $kprodi->kategori;
        $data5_7_2 = $kprodi->data;
        $skor5_7_2 = $kprodi->skor;
      } else {
        $kategori5_7_2 = $masuk->standar5_7_2;
        $kategori5_7_2 = intval(round($kategori5_7_2));
        $data5_7_2 = '['.$masuk->standar5_7_2.']';
        $skor5_7_2 = $kategori5_7_2;
      }

      //hitung nilai 5.7.3
      if ($masuk->setuju_5_7_3 == "1") {
        $masuk->catatan5_7_3 = "Auditor setuju";
        $kprodi = Standar5::where([
          ["id_prodi", $idprodi],
          ["kode", "5.7.3"]
        ])->whereYear("created_at", '=', date("Y"))->first();
        $kategori5_7_3 = $kprodi->kategori;
        $data5_7_3 = $kprodi->data;
        $skor5_7_3 = $kprodi->skor;
      } else {
        $kategori5_7_3 = $masuk->standar5_7_3;
        $kategori5_7_3 = intval(round($kategori5_7_3));
        $data5_7_3 = '['.$masuk->standar5_7_3.']';
        $skor5_7_3 = $kategori5_7_3;
      }

      //hitung standar 5_7_5
      if ($masuk->setuju_5_7_5 == "1") {
        $masuk->catatan5_7_5 = "Auditor setuju";
        $kprodi = Standar5::where([
          ["id_prodi", $idprodi],
          ["kode", "5.7.5"]
        ])->whereYear("created_at", '=', date("Y"))->first();
        $kategori5_7_5 = $kprodi->kategori;
        $data5_7_5 = $kprodi->data;
        $skor5_7_5 = $kprodi->skor;
      } else {
        $kategori5_7_5=$masuk->standar5_7_5;
        $kategori5_7_5=intval(round($kategori5_7_5));
        $data5_7_5 = '['.$masuk->standar5_7_5.']';
        $skor5_7_5 = $kategori5_7_5;
      }


      $dataStandar5 = Standar5Auditor::where([
        ['id_prodi', '=', $idprodi],
        ['auditor_id', '=', session('auditor_id')]
      ])->whereYear("created_at", '=', date("Y"))->first();
      if($dataStandar5) {
      // 5.1.1.a
        $standar5=Standar5Auditor::where([
          ['id_prodi', '=', $idprodi],
          ['kode','=','5.1.1.a'], ['auditor_id','=',session('auditor_id')]])->whereYear("created_at", '=', date("Y"))->first();
        $standar5->kategori=$kategori5_1_1_a;
        $standar5->data=$data5_1_1_a;
        $standar5->skor=$skor5_1_1_a;
        $standar5->catatan = $masuk->catatan5_1_1_a;
        $standar5->save();

      // 5.1.2.b
        $standar5=Standar5Auditor::where([['id_prodi', '=', $idprodi],
          ['kode','=','5.1.2.b'], ['auditor_id','=',session('auditor_id')]])->whereYear("created_at", '=', date("Y"))->first();
        $standar5->kategori=$kategori5_1_2_b;
        $standar5->data=$data5_1_2_b;
        $standar5->skor=$skor5_1_2_b;
        $standar5->catatan = $masuk->catatan5_1_2_b;
        $standar5->save();

      // 5.1.2.c
        $standar5=Standar5Auditor::where([['id_prodi', '=', $idprodi],
          ['kode','=','5.1.2.c'], ['auditor_id','=',session('auditor_id')]])->whereYear("created_at", '=', date("Y"))->first();
        $standar5->kategori=$kategori5_1_2_c;
        $standar5->data=$data5_1_2_c;
        $standar5->skor=$skor5_1_2_c;
        $standar5->catatan = $masuk->catatan5_1_2_c;
        $standar5->save();

      // 5.1.3.a
        $standar5=Standar5Auditor::where([['id_prodi', '=', $idprodi],
          ['kode','=','5.1.3.a'], ['auditor_id','=',session('auditor_id')]])->whereYear("created_at", '=', date("Y"))->first();
        $standar5->kategori=$kategori5_1_3_a;
        $standar5->data=$data5_1_3_a;
        $standar5->skor=$skor5_1_3_a;
        $standar5->catatan = $masuk->catatan5_1_3_a;
        $standar5->save();

      // 5.3.2
        $standar5=Standar5Auditor::where([['id_prodi', '=', $idprodi],
          ['kode','=','5.3.2'], ['auditor_id','=',session('auditor_id')]])->whereYear("created_at", '=', date("Y"))->first();
        $standar5->kategori=$kategori5_3_2;
        $standar5->data=$data5_3_2;
        $standar5->skor=$skor5_3_2;
        $standar5->catatan = $masuk->catatan5_3_2;
        $standar5->save();

      //5.4.1.a
        $standar5=Standar5Auditor::where([['id_prodi', '=', $idprodi],
          ['kode','=','5.4.1.a'], ['auditor_id','=',session('auditor_id')]])->whereYear("created_at", '=', date("Y"))->first();
        $standar5->kategori=$kategori5_4_1_a;
        $standar5->data=$data5_4_1_a;
        $standar5->skor=$skor5_4_1_a;
        $standar5->catatan = $masuk->catatan5_4_1_a;
        $standar5->save();

      //5.4.1.c
        $standar5=Standar5Auditor::where([['id_prodi', '=', $idprodi],
          ['kode','=','5.4.1.c'], ['auditor_id','=',session('auditor_id')]])->whereYear("created_at", '=', date("Y"))->first();
        $standar5->kategori=$kategori5_4_1_c;
        $standar5->data=$data5_4_1_c;
        $standar5->skor=$skor5_4_1_c;
        $standar5->catatan = $masuk->catatan5_4_1_c;
        $standar5->save();

      //5.4.2
        $standar5=Standar5Auditor::where([['id_prodi', '=', $idprodi],
          ['kode','=','5.4.2'], ['auditor_id','=',session('auditor_id')]])->whereYear("created_at", '=', date("Y"))->first();
        $standar5->kategori=$kategori5_4_2;
        $standar5->data=$data5_4_2;
        $standar5->skor=$skor5_4_2;
        $standar5->catatan = $masuk->catatan5_4_2;
        $standar5->save();

      //5.5.1.b
        $standar5=Standar5Auditor::where([['id_prodi', '=', $idprodi],
          ['kode','=','5.5.1.b'], ['auditor_id','=',session('auditor_id')]])->whereYear("created_at", '=', date("Y"))->first();
        $standar5->kategori=$kategori5_5_1_b ;
        $standar5->data=$data5_5_1_b;
        $standar5->skor=$skor5_5_1_b;
        $standar5->catatan = $masuk->catatan5_5_1_b;
        $standar5->save();

      //5.5.1.c
        $standar5=Standar5Auditor::where([['id_prodi', '=', $idprodi],
          ['kode','=','5.5.1.c'], ['auditor_id','=',session('auditor_id')]])->whereYear("created_at", '=', date("Y"))->first();
        $standar5->kategori=$kategori5_5_1_c;
        $standar5->data=$data5_5_1_c;
        $standar5->skor=$skor5_5_1_c;
        $standar5->catatan = $masuk->catatan5_5_1_c;
        $standar5->save();

      //5.5.2
        $standar5=Standar5Auditor::where([['id_prodi', '=', $idprodi],
          ['kode','=','5.5.2'], ['auditor_id','=',session('auditor_id')]])->whereYear("created_at", '=', date("Y"))->first();
        $standar5->kategori=$kategori5_5_2;
        $standar5->data=$data5_5_2;
        $standar5->skor=$skor5_5_2;
        $standar5->catatan = $masuk->catatan5_5_2;
        $standar5->save();

      //5.7.2
        $standar5=Standar5Auditor::where([['id_prodi', '=', $idprodi],
          ['kode','=','5.7.2'], ['auditor_id','=',session('auditor_id')]])->whereYear("created_at", '=', date("Y"))->first();
        $standar5->kategori=$kategori5_7_2;
        $standar5->data=$data5_7_2;
        $standar5->skor=$skor5_7_2;
        $standar5->catatan = $masuk->catatan5_7_2;
        $standar5->save();

      //5.7.3
        $standar5=Standar5Auditor::where([['id_prodi', '=', $idprodi],
          ['kode','=','5.7.3'], ['auditor_id','=',session('auditor_id')]])->whereYear("created_at", '=', date("Y"))->first();
        $standar5->kategori=$kategori5_7_3;
        $standar5->data=$data5_7_3;
        $standar5->skor=$skor5_7_3;
        $standar5->catatan = $masuk->catatan5_7_3;
        $standar5->save();

      //5.7.5
        $standar5=Standar5Auditor::where([['id_prodi', '=', $idprodi],
          ['kode','=','5.7.5'], ['auditor_id','=',session('auditor_id')]])->whereYear("created_at", '=', date("Y"))->first();
        $standar5->kategori=$kategori5_7_5;
        $standar5->data=$data5_7_5;
        $standar5->skor=$skor5_7_5;
        $standar5->catatan = $masuk->catatan5_7_5;
        $standar5->save();

      }
      else {

      // 5.1.1.a
        $standar5=new Standar5Auditor;
        $standar5->kode ='5.1.1.a';
        $standar5->id_prodi = $idprodi;
        $standar5->auditor_id=session("auditor_id");
        $standar5->kategori = $kategori5_1_1_a;
        $standar5->data=$data5_1_1_a;
        $standar5->skor=$skor5_1_1_a;
        $standar5->catatan = $masuk->catatan5_1_1_a;
        $standar5->save();

      // 5.1.2.b
        $standar5= new Standar5Auditor;
        $standar5->kode='5.1.2.b';
        $standar5->id_prodi=$idprodi;
        $standar5->auditor_id=session("auditor_id");
        $standar5->kategori = $kategori5_1_2_b;
        $standar5->data=$data5_1_2_b;
        $standar5->skor=$skor5_1_2_b;
        $standar5->catatan = $masuk->catatan5_1_2_b;
        $standar5->save();

      // 5.1.2.c
        $standar5 = new Standar5Auditor;
        $standar5->kode = '5.1.2.c';
        $standar5->id_prodi = $idprodi;
        $standar5->auditor_id=session("auditor_id");
        $standar5->kategori = $kategori5_1_2_c;
        $standar5->data=$data5_1_2_c;
        $standar5->skor=$skor5_1_2_c;
        $standar5->catatan = $masuk->catatan5_1_2_c;
        $standar5->save();

      // 5.1.3.a
        $standar5=new Standar5Auditor;
        $standar5->kode='5.1.3.a';
        $standar5->id_prodi=$idprodi;
        $standar5->auditor_id=session("auditor_id");
        $standar5->kategori = $kategori5_1_3_a;
        $standar5->data=$data5_1_3_a;
        $standar5->skor=$skor5_1_3_a;
        $standar5->catatan = $masuk->catatan5_1_3_a;
        $standar5->save();

      // 5.3.2
        $standar5=new Standar5Auditor;
        $standar5->kode='5.3.2';
        $standar5->id_prodi=$idprodi;
        $standar5->auditor_id=session("auditor_id");
        $standar5->kategori=$kategori5_3_2;
        $standar5->data=$data5_3_2;
        $standar5->skor=$skor5_3_2;
        $standar5->catatan = $masuk->catatan5_3_2;
        $standar5->save();

      //5.4.1.a
        $standar5=new Standar5Auditor;
        $standar5->kode='5.4.1.a';
        $standar5->id_prodi=$idprodi;
        $standar5->auditor_id=session("auditor_id");
        $standar5->kategori=$kategori5_4_1_a;
        $standar5->data=$data5_4_1_a;
        $standar5->skor=$skor5_4_1_a;
        $standar5->catatan = $masuk->catatan5_4_1_a;
        $standar5->save();

      // 5.4.1.c
        $standar5=new Standar5Auditor;
        $standar5->kode="5.4.1.c";
        $standar5->id_prodi=$idprodi;
        $standar5->auditor_id=session("auditor_id");
        $standar5->kategori=$kategori5_4_1_c;
        $standar5->data=$data5_4_1_c;
        $standar5->skor=$skor5_4_1_c;
        $standar5->catatan = $masuk->catatan5_4_1_c;
        $standar5->save();

      //5.4.2
        $standar5=new Standar5Auditor;
        $standar5->kode='5.4.2';
        $standar5->id_prodi=$idprodi;
        $standar5->auditor_id=session("auditor_id");
        $standar5->kategori=$kategori5_4_2;
        $standar5->data=$data5_4_2;
        $standar5->skor=$skor5_4_2;
        $standar5->catatan = $masuk->catatan5_4_2;
        $standar5->save();

      //5.5.1.b
        $standar5=new Standar5Auditor;
        $standar5->kode='5.5.1.b';
        $standar5->id_prodi=$idprodi;
        $standar5->auditor_id=session("auditor_id");
        $standar5->kategori=$kategori5_5_1_b;
        $standar5->data=$data5_5_1_b;
        $standar5->skor=$skor5_5_1_b;
        $standar5->catatan = $masuk->catatan5_5_1_b;
        $standar5->save();

      //5.5.1.c
        $standar5=new Standar5Auditor;
        $standar5->kode='5.5.1.c';
        $standar5->id_prodi=$idprodi;
        $standar5->auditor_id=session("auditor_id");
        $standar5->kategori=$kategori5_5_1_c;
        $standar5->data=$data5_5_1_c;
        $standar5->skor=$skor5_5_1_c;
        $standar5->catatan = $masuk->catatan5_5_1_c;
        $standar5->save();

      //5.5.2
        $standar5=new Standar5Auditor;
        $standar5->kode='5.5.2';
        $standar5->id_prodi=$idprodi;
        $standar5->auditor_id=session("auditor_id");
        $standar5->kategori=$kategori5_5_2;
        $standar5->data=$data5_5_2;
        $standar5->skor=$skor5_5_2;
        $standar5->catatan = $masuk->catatan5_5_2;
        $standar5->save();

      //5.7.2
        $standar5=new Standar5Auditor;
        $standar5->kode='5.7.2';
        $standar5->id_prodi=$idprodi;
        $standar5->auditor_id=session("auditor_id");
        $standar5->kategori=$kategori5_7_2;
        $standar5->data=$data5_7_2;
        $standar5->skor=$skor5_7_2;
        $standar5->catatan = $masuk->catatan5_7_2;
        $standar5->save();

      //5.7.3
        $standar5=new Standar5Auditor;
        $standar5->kode='5.7.3';
        $standar5->id_prodi=$idprodi;
        $standar5->auditor_id=session("auditor_id");
        $standar5->kategori=$kategori5_7_3;
        $standar5->data=$data5_7_3;
        $standar5->skor=$skor5_7_3;
        $standar5->catatan = $masuk->catatan5_7_3;
        $standar5->save();

      //5.7.5
        $standar5=new Standar5Auditor;
        $standar5->kode='5.7.5';
        $standar5->id_prodi=$idprodi;
        $standar5->auditor_id=session("auditor_id");
        $standar5->kategori=$kategori5_7_5;
        $standar5->data=$data5_7_5;
        $standar5->skor=$skor5_7_5;
        $standar5->catatan = $masuk->catatan5_7_5;
        $standar5->save();

      }
      return redirect()->back();
      // return $kategori5_1_3_a;
    }

  }

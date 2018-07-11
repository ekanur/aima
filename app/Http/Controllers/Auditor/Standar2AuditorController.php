<?php

namespace App\Http\Controllers\Auditor;

use Illuminate\Http\Request;
use App\Standar2Auditor;
use App\Standar2;
use App\Prodi;
use App\Repositories\StandarStatus;
use App\Http\Controllers\Controller;

class Standar2AuditorController extends Controller
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

      $standar2 = Standar2Auditor::where([["id_prodi","=", $idprodi], ["auditor_id", "=", session("auditor_id")]])->get();
      $data=array();
      foreach ($standar2 as $data_standar2) {
        $data[$data_standar2->kode] = $data_standar2->kategori;
      }

      $standar2_kprodi = Standar2::where('id_prodi', $idprodi)->get();
      $data_kprodi=array();
      foreach ($standar2_kprodi as $data_prodi) {
        $data_kprodi[$data_prodi->kode] = $data_prodi->kategori;
      }
      // dd($data_kprodi);

      $standar="Standar 2";
      return view("auditor/standar2.index", compact('idprodi', 'data', 'standar', 'standar_message', 'standar_status_code', 'nama_prodi', 'data_kprodi'));
  }

  public function save(Request $request, $idprodi){
    $timestamp = date("Y-m-d H:i:s");
    if($request->setuju_2_1 == 1){
      $standar2_kprodi = Standar2::where([["id_prodi",'=',$idprodi],["kode", "=", "2.1"]])->first();
      $request->skor2_1 = $standar2_kprodi->skor;
    }
    if($request->setuju_2_2 == 1){
      $standar2_kprodi = Standar2::where([["id_prodi",'=',$idprodi],["kode", "=", "2.2"]])->first();
      $request->skor2_2 = $standar2_kprodi->skor;
    }
    if($request->setuju_2_6 == 1){
      $standar2_kprodi = Standar2::where([["id_prodi",'=',$idprodi],["kode", "=", "2.6"]])->first();
      $request->skor2_6 = $standar2_kprodi->skor;
    }
    $data=array(
      array("kode"=>"2.1", "kategori"=>$request->skor2_1, "data"=>"[".$request->skor2_1."]", "skor"=>$request->skor2_1, "id_prodi"=>$idprodi, "auditor_id"=>session("auditor_id"), "created_at"=>$timestamp, "updated_at"=>$timestamp),
      array("kode"=>"2.2", "kategori"=>$request->skor2_2, "data"=>"[".$request->skor2_2."]", "skor"=>$request->skor2_2, "id_prodi"=>$idprodi, "auditor_id"=>session("auditor_id"), "created_at"=>$timestamp, "updated_at"=>$timestamp),
      array("kode"=>"2.6", "kategori"=>$request->skor2_6, "data"=>"[".$request->skor2_6."]", "skor"=>$request->skor2_6, "id_prodi"=>$idprodi, "auditor_id"=>session("auditor_id"), "created_at"=>$timestamp, "updated_at"=>$timestamp),
      );

    $standar2 = Standar2Auditor::insert($data);

    // $standar2->insert();

    return redirect()->back();
  }

  public function update(Request $request, $idprodi){
    if($request->skor2_1_old != $request->skor2_1){
      if($request->setuju_2_1 == 1){
        $standar2_kprodi = Standar2::where([["id_prodi",'=',$idprodi],["kode", "=", "2.1"]])->first();
        $request->skor2_1 = $standar2_kprodi->skor;
      }
      Standar2Auditor::where([["kode", "2.1"], ["id_prodi", $idprodi],["auditor_id", session("auditor_id")]])->update(["kategori"=>$request->skor2_1, "data"=>"[".$request->skor2_1."]", "skor"=>$request->skor2_1]);
    }

    if($request->skor2_2_old != $request->skor2_2){
      if($request->setuju_2_2 == 1){
        $standar2_kprodi = Standar2::where([["id_prodi",'=',$idprodi],["kode", "=", "2.2"]])->first();
        $request->skor2_2 = $standar2_kprodi->skor;
      }
      Standar2Auditor::where([["kode", "2.2"], ["id_prodi", $idprodi],["auditor_id", session("auditor_id")]])->update(["kategori"=>$request->skor2_2, "data"=>"[".$request->skor2_2."]", "skor"=>$request->skor2_2]);
    }

    if($request->skor2_6_old != $request->skor2_6){
      if($request->setuju_2_6 == 1){
        $standar2_kprodi = Standar2::where([["id_prodi",'=',$idprodi],["kode", "=", "2.6"]])->first();
        $request->skor2_6 = $standar2_kprodi->skor;
      }
      Standar2Auditor::where([["kode", "2.6"], ["id_prodi", $idprodi],["auditor_id", session("auditor_id")]])->update(["kategori"=>$request->skor2_6, "data"=>"[".$request->skor2_6."]", "skor"=>$request->skor2_6]);
    }

    return redirect()->back();
  }

}
<?php

namespace App\Http\Controllers\Auditor;

use Illuminate\Http\Request;
use App\Standar1Auditor;
use App\Standar1;
use App\Prodi;
use App\Repositories\StandarStatus;
use App\Http\Controllers\Controller;

class Standar1AuditorController extends Controller
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

      $standar1 = Standar1Auditor::where([["id_prodi","=", $idprodi], ["auditor_id", "=", session("auditor_id")]])->whereYear("created_at", '=', date("Y"))->get();
    	$data=array();
      foreach ($standar1 as $data_standar1) {
        $data[$data_standar1->kode] = $data_standar1->kategori;
      }

      // $data_catatan = array();

      // foreach ($standar1 as $data_standar1) {
      //   $data_catatan[$data_standar1->kode] = $data_standar1->catatan;
      // }

      // dd($data_catatan);

      $standar1_kprodi = Standar1::where('id_prodi', $idprodi)->whereYear("created_at", '=', date("Y"))->get();
      $data_kprodi=array();
      foreach ($standar1_kprodi as $data_prodi) {
        $data_kprodi[$data_prodi->kode] = $data_prodi->kategori;
      }
      // dd($data_kprodi);

    	$standar="Standar 1";
      
    	return view("auditor/standar1.index", compact('idprodi', 'data', 'standar', 'standar_message', 'standar_status_code', 'nama_prodi', 'data_kprodi'));
    }

    public function save(Request $request, $idprodi){
      $timestamp = date("Y-m-d H:i:s");
      // dd($request->skor1_1_a_kprodi);
      // if($request->setuju_1_1_a == 1){
      //   $request->skor1_1_a = 
      // }
      if($request->setuju_1_1_a == 1){
        $standar1_kprodi = Standar1::where([["id_prodi",'=',$idprodi],["kode", "=", "1.1.a"]])->whereYear("created_at", '=', date("Y"))->first();
        $request->skor1_1_a = $standar1_kprodi->skor;
      }
      if($request->setuju_1_1_b == 1){
        $standar1_kprodi = Standar1::where([["id_prodi",'=',$idprodi],["kode", "=", "1.1.b"]])->whereYear("created_at", '=', date("Y"))->first();
        $request->skor1_1_b = $standar1_kprodi->skor;
      }
      if($request->setuju_1_2 == 1){
        $standar1_kprodi = Standar1::where([["id_prodi",'=',$idprodi],["kode", "=", "1.2"]])->whereYear("created_at", '=', date("Y"))->first();
        $request->skor1_2 = $standar1_kprodi->skor;
      }

      $data=array(
        array("kode"=>"1.1.a", "kategori"=>$request->skor1_1_a, "data"=>"[".$request->skor1_1_a."]", "skor"=>$request->skor1_1_a, "id_prodi"=>$idprodi, "auditor_id"=>session('auditor_id'), "created_at"=>$timestamp, "updated_at"=>$timestamp, "catatan"=> $request->catatan1_1_a),
        array("kode"=>"1.1.b", "kategori"=>$request->skor1_1_b, "data"=>"[".$request->skor1_1_b."]", "skor"=>$request->skor1_1_b, "id_prodi"=>$idprodi, "auditor_id"=>session('auditor_id'), "created_at"=>$timestamp, "updated_at"=>$timestamp, "catatan"=> $request->catatan1_1_b),
        array("kode"=>"1.2", "kategori"=>$request->skor1_2, "data"=>"[".$request->skor1_2."]", "skor"=>$request->skor1_2, "id_prodi"=>$idprodi, "auditor_id"=>session('auditor_id'), "created_at"=>$timestamp, "updated_at"=>$timestamp, "catatan"=> $request->catatan1_2),
        );

      // dd($data);

      $standar1 = Standar1Auditor::insert($data);

      // $standar2->insert();

      return redirect()->back();
    }

    public function update(Request $request, $idprodi){

      if($request->skor1_1_a_old != $request->skor1_1_a){

        if($request->setuju_1_1_a == 1){
          $standar1_kprodi = Standar1::where([["id_prodi",'=',$idprodi],["kode", "=", "1.1.a"]])->whereYear("created_at", '=', date("Y"))->first();
          $request->skor1_1_a = $standar1_kprodi->skor;
        }

        Standar1Auditor::where([["kode", "1.1.a"], ["id_prodi", $idprodi], ["auditor_id", session("auditor_id")]])->whereYear("created_at", '=', date("Y"))->update(["catatan" => $request->catatan1_1_a, "kategori"=>$request->skor1_1_a, "data"=>"[".$request->skor1_1_a."]", "skor"=>$request->skor1_1_a]);
      }

      if($request->skor1_1_b_old != $request->skor1_1_b){
        if($request->setuju_1_1_b == 1){
          $standar1_kprodi = Standar1::where([["id_prodi",'=',$idprodi],["kode", "=", "1.1.b"]])->whereYear("created_at", '=', date("Y"))->first();
          $request->skor1_1_b = $standar1_kprodi->skor;
        }
        Standar1Auditor::where([["kode", "1.1.b"], ["id_prodi", $idprodi], ["auditor_id", session("auditor_id")]])->whereYear("created_at", '=', date("Y"))->update(["catatan" => $request->catatan1_1_b, "kategori"=>$request->skor1_1_b, "data"=>"[".$request->skor1_1_b."]", "skor"=>$request->skor1_1_b]);
      }

      if($request->skor1_2_old != $request->skor1_2){
        if($request->setuju_1_2 == 1){
          $standar1_kprodi = Standar1::where([["id_prodi",'=',$idprodi],["kode", "=", "1.2"]])->whereYear("created_at", '=', date("Y"))->first();
          $request->skor1_2 = $standar1_kprodi->skor;
        }
        Standar1Auditor::where([["kode", "1.2"], ["id_prodi", $idprodi], ["auditor_id", session("auditor_id")]])->whereYear("created_at", '=', date("Y"))->update(["catatan" => $request->catatan1_2, "kategori"=>$request->skor1_2, "data"=>"[".$request->skor1_2."]", "skor"=>$request->skor1_2]);
      }

      return redirect()->back();
    }
}

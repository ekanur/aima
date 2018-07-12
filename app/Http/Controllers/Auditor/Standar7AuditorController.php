<?php

namespace App\Http\Controllers\Auditor;

use Illuminate\Http\Request;
use App\Standar7Auditor;
use App\Standar7;
use App\Prodi;
use App\Repositories\StandarStatus;
use App\Http\Controllers\Controller;


class Standar7AuditorController extends Controller
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
      $data = Standar7Auditor::select('kode', 'data', 'skor', 'kategori', 'catatan')->whereYear("created_at", '=', date("Y"))->where([['id_prodi', '=', $idprodi],['auditor_id', '=', session("auditor_id")]])->orderBy('kode', 'asc')->get();
        if(!$data->count()){
          $dataCheck = true;
        }else{
          $dataCheck = false;
        }

      $data_kprodi = Standar7::select('kode', 'data', 'skor', 'kategori')->whereYear("created_at", '=', date("Y"))->where('id_prodi', '=', $idprodi)->orderBy('kode', 'asc')->get();
      // $data_kprodi=array();
      // foreach ($standar2_kprodi as $data_prodi) {
      //   $data_kprodi[$data_prodi->kode] = $data_prodi->kategori;
      // }
      // dd(json_decode($data_kprodi[2]->data)[1]);

      $standar="Standar 7";
      return view("auditor/standar7.index", compact('idprodi', 'data', 'standar', 'standar_message', 'standar_status_code', 'nama_prodi', 'data_kprodi', 'dataCheck'));
    }

    public function save(Request $request, $idprodi){
      //dd($request->all());

      //perhitungan kategori 7.1.1
      if($request->setuju_7_1_1 == '1'){
            $standar7_kprodi = Standar7::where([["id_prodi","=", $idprodi ],["kode", "=", "7.1.1"]])->whereYear("created_at", '=', date("Y"))->first();

            $kategori7_1_1 = $standar7_kprodi->kategori;
            $data7_1_1 = $standar7_kprodi->data;
            $skor7_1_1 = $standar7_kprodi->skor;
      }else{
          $nk7_1_1 = (4 * $request->na7_1_1 + 2 * $request->nb7_1_1 + $request->nc7_1_1)/$request->f7_1_1;
          if($nk7_1_1 >= 2){
            $kategori7_1_1 = 4;
          }elseif($nk7_1_1 > 0){
            $kategori7_1_1 = (1.5 * $nk7_1_1) + 1;
          }elseif($nk7_1_1 <= 0){
            $kategori7_1_1 = 0;
          }
          $kategori7_1_1 = intval(round($kategori7_1_1));
          //$data7_1_1 = $request->na7_1_1 . ";". $request->nb7_1_1 . ";". $request->nc7_1_1 . ";". $request->f7_1_1;
          $data7_1_1 = '['.$request->na7_1_1.','.$request->nb7_1_1.','.$request->nc7_1_1.','.$request->f7_1_1.']';
          $skor7_1_1 = $nk7_1_1;
      }


      //perhitungan kategori 7.1.2
      if($request->setuju_7_1_2 == '1'){
            $standar7_kprodi = Standar7::where([["id_prodi","=", $idprodi ],["kode", "=", "7.1.2"]])->whereYear("created_at", '=', date("Y"))->first();

            $kategori7_1_2 = $standar7_kprodi->kategori;
            $data7_1_2 = $standar7_kprodi->data;
            $skor7_1_2 = $standar7_kprodi->skor;
      }else{
            if($request->pd7_1_2 >= 25){
              $kategori7_1_2 = 4;
            }elseif($request->pd7_1_2 > 0){
              $kategori7_1_2 = 1 + ((12 * $request->pd7_1_2) / 100);
            }elseif($request->pd7_1_2 <= 0){
              $kategori7_1_2 = 0;
            }
            $kategori7_1_2 = intval(round($kategori7_1_2));
            //$data7_1_2 = $request->pd7_1_2;
            $data7_1_2 = '['.$request->pd7_1_2.']';
            $skor7_1_2 = $request->pd7_1_2;
      }



      //perhitungan kategori 7.1.3
      if($request->setuju_7_1_3 == '1'){
            $standar7_kprodi = Standar7::where([["id_prodi","=", $idprodi ],["kode", "=", "7.1.3"]])->whereYear("created_at", '=', date("Y"))->first();

            $kategori7_1_3 = $standar7_kprodi->kategori;
            $data7_1_3 = $standar7_kprodi->data;
            $skor7_1_3 = $standar7_kprodi->skor;
      }else{
            $nk7_1_3 = (4 * $request->na7_1_3 + 2 * $request->nb7_1_3 + $request->nc7_1_3)/$request->f7_1_3;
            if($nk7_1_3 >= 6){
              $kategori7_1_3 = 4;
            }elseif($nk7_1_3 > 0){
              $kategori7_1_3 = 1 + ($nk7_1_3 / 2);
            }elseif($nk7_1_3 <= 0){
              $kategori7_1_3 = 0;
            }
            $kategori7_1_3 = intval(round($kategori7_1_3));
            //$data7_1_3 = $request->na7_1_3 . ";" . $request->nb7_1_3 . ";" . $request->nc7_1_3 . ";" . $request->f7_1_3;
            $data7_1_3 = '['.$request->na7_1_3.','.$request->nb7_1_3.','.$request->nc7_1_3.','.$request->f7_1_3.']';
            $skor7_1_3 = $nk7_1_3;
      }

      //perhitungan kategori 7.1.4
      if($request->setuju_7_1_4 == '1'){
            $standar7_kprodi = Standar7::where([["id_prodi","=", $idprodi ],["kode", "=", "7.1.4"]])->whereYear("created_at", '=', date("Y"))->first();

            $kategori7_1_4 = $standar7_kprodi->kategori;
            $data7_1_4 = $standar7_kprodi->data;
            $skor7_1_4 = $standar7_kprodi->skor;
      }else{
            $kategori7_1_4 = $request->n7_1_4;
            $kategori7_1_4 = intval(round($kategori7_1_4));
            // $data7_1_4 = $request->n7_1_4;
            $data7_1_4 = '['.$request->n7_1_4.']';
            $skor7_1_4 = $request->n7_1_4;
      }

      //perhitungan kategori 7.2.1
      if($request->setuju_7_2_1 == '1'){
            $standar7_kprodi = Standar7::where([["id_prodi","=", $idprodi ],["kode", "=", "7.2.1"]])->whereYear("created_at", '=', date("Y"))->first();

            $kategori7_2_1 = $standar7_kprodi->kategori;
            $data7_2_1 = $standar7_kprodi->data;
            $skor7_2_1 = $standar7_kprodi->skor;
      }else{
            $nk7_2_1 = (4 * $request->na7_2_1 + 2 * $request->nb7_2_1 + $request->nc7_2_1)/$request->f7_2_1;
            if($nk7_2_1 >= 1){
              $kategori7_2_1 = 4;
            }elseif($nk7_2_1 > 0){
              $kategori7_2_1 = (3 * $nk7_2_1) + 1;
            }elseif($nk7_2_1 <= 0){
              $kategori7_2_1 = 0;
            }
            $kategori7_2_1 = intval(round($kategori7_2_1));
            // $data7_2_1 = $request->na7_2_1 . ";" . $request->nb7_2_1 . ";" . $request->nc7_2_1 . ";" .  $request->f7_2_1;
            $data7_2_1 = '['.$request->na7_2_1.','.$request->nb7_2_1.','.$request->nc7_2_1.','.$request->f7_2_1.']';
            $skor7_2_1 = $nk7_2_1;
      }
      //return ($kategori7_1_1 . ", " . $kategori7_1_2 . ", " . $kategori7_1_3 . ", " . $kategori7_1_4 . ", " . $kategori7_2_1);

      //cek apakah jurusan tersebut sudah pernah input atau belum
      $oldStandar7 = Standar7Auditor::where([['id_prodi', '=', $idprodi], ['auditor_id', '=', session("auditor_id")]])->whereYear("created_at", '=', date("Y"))->first();
      if($oldStandar7){
        //jika sudah maka ...

        $standar7 = Standar7Auditor::where([
          ['id_prodi', '=', $idprodi],
          ['auditor_id', '=', session("auditor_id")],
          ['kode', '=', '7.1.1']
        ])->whereYear("created_at", '=', date("Y"))->first();
        $standar7->kategori = $kategori7_1_1;
        $standar7->data = $data7_1_1;
        $standar7->skor = $skor7_1_1;
        $standar7->catatan = $request->catatan7_1_1;
        $standar7->save();

        $standar7 = Standar7Auditor::where([
          ['id_prodi', '=', $idprodi],
          ['auditor_id', '=', session("auditor_id")],
          ['kode', '=', '7.1.2']
        ])->whereYear("created_at", '=', date("Y"))->first();
        $standar7->kategori = $kategori7_1_2;
        $standar7->data = $data7_1_2;
        $standar7->skor = $skor7_1_2;
        $standar7->catatan = $request->catatan7_1_2;
        $standar7->save();

        $standar7 = Standar7Auditor::where([
          ['id_prodi', '=', $idprodi],
          ['auditor_id', '=', session("auditor_id")],
          ['kode', '=', '7.1.3']
        ])->whereYear("created_at", '=', date("Y"))->first();
        $standar7->kategori = $kategori7_1_3;
        $standar7->data = $data7_1_3;
        $standar7->skor = $skor7_1_3;
        $standar7->catatan = $request->catatan7_1_3;
        $standar7->save();

        $standar7 = Standar7Auditor::where([
          ['id_prodi', '=', $idprodi],
          ['auditor_id', '=', session("auditor_id")],
          ['kode', '=', '7.1.4']
        ])->whereYear("created_at", '=', date("Y"))->first();
        $standar7->kategori = $kategori7_1_4;
        $standar7->data = $data7_1_4;
        $standar7->skor = $skor7_1_4;
        $standar7->catatan = $request->catatan7_1_4;
        $standar7->save();

        $standar7 = Standar7Auditor::where([
          ['id_prodi', '=', $idprodi],
          ['auditor_id', '=', session("auditor_id")],
          ['kode', '=', '7.2.1']
        ])->whereYear("created_at", '=', date("Y"))->first();
        $standar7->kategori = $kategori7_2_1;
        $standar7->data = $data7_2_1;
        $standar7->skor = $skor7_2_1;
        $standar7->catatan = $request->catatan7_2_1;
        $standar7->save();

        // return "updated";
      }else{
        //jika belum maka ...

        $standar7 = new Standar7Auditor;
        $standar7->kode = '7.1.1';
        $standar7->id_prodi = $idprodi;
        $standar7->auditor_id=session("auditor_id");
        $standar7->kategori = $kategori7_1_1;
        $standar7->data = $data7_1_1;
        $standar7->skor = $skor7_1_1;
        $standar7->catatan = $request->catatan7_1_1;
        $standar7->save();

        $standar7 = new Standar7Auditor;
        $standar7->kode = '7.1.2';
        $standar7->id_prodi = $idprodi;
        $standar7->auditor_id=session("auditor_id");
        $standar7->kategori = $kategori7_1_2;
        $standar7->data = $data7_1_2;
        $standar7->skor = $skor7_1_2;
        $standar7->catatan = $request->catatan7_1_2;
        $standar7->save();

        $standar7 = new Standar7Auditor;
        $standar7->kode = '7.1.3';
        $standar7->id_prodi = $idprodi;
        $standar7->auditor_id=session("auditor_id");
        $standar7->kategori = $kategori7_1_3;
        $standar7->data = $data7_1_3;
        $standar7->skor = $skor7_1_3;
        $standar7->catatan = $request->catatan7_1_3;
        $standar7->save();

        $standar7 = new Standar7Auditor;
        $standar7->kode = '7.1.4';
        $standar7->id_prodi = $idprodi;
        $standar7->auditor_id=session("auditor_id");
        $standar7->kategori = $kategori7_1_4;
        $standar7->data = $data7_1_4;
        $standar7->skor = $skor7_1_4;
        $standar7->catatan = $request->catatan7_1_4;
        $standar7->save();

        $standar7 = new Standar7Auditor;
        $standar7->kode = '7.2.1';
        $standar7->id_prodi = $idprodi;
        $standar7->auditor_id=session("auditor_id");
        $standar7->kategori = $kategori7_2_1;
        $standar7->data = $data7_2_1;
        $standar7->skor = $skor7_2_1;
        $standar7->catatan = $request->catatan7_2_1;
        $standar7->save();

        // return "saved";
      }

      return redirect()->back();

    }
}

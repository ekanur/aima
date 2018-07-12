<?php

namespace App\Http\Controllers\Auditor;

use Illuminate\Http\Request;
use App\Standar6Auditor;
use App\Standar6;
use App\Prodi;
use App\Repositories\StandarStatus;
use App\Http\Controllers\Controller;

class Standar6AuditorController extends Controller
{
    public function index($idprodi)
    {
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
      $data = Standar6Auditor::select('kode', 'data', 'skor', 'kategori', 'catatan')->whereYear("created_at", '=', date("Y"))->where([['id_prodi', '=', $idprodi],['auditor_id', '=', session("auditor_id")]])->orderBy('kode', 'asc')->get();
        if(!$data->count()){
          $dataCheck = true;
        }else{
          $dataCheck = false;
        }

      $data_kprodi = Standar6::select('kode', 'data', 'skor', 'kategori')->whereYear("created_at", '=', date("Y"))->where('id_prodi', '=', $idprodi)->orderBy('kode', 'asc')->get();
      // $data_kprodi=array();
      // foreach ($standar2_kprodi as $data_prodi) {
      //   $data_kprodi[$data_prodi->kode] = $data_prodi->kategori;
      // }
      // dd(json_decode($data_kprodi[2]->data)[1]);

      $standar="Standar 6";
      return view("auditor/standar6.index", compact('idprodi', 'data', 'standar', 'standar_message', 'standar_status_code', 'nama_prodi', 'data_kprodi', 'dataCheck'));
    }
     public function save(Request $request, $idprodi)
     {
       //PERHITUNGAN 6.2.1
       if ($request->setuju_6_2_1 == "1") {
         $kprodi = Standar6::where([
           ["id_prodi", $idprodi],
           ["kode", "6.2.1"]
         ])->whereYear("created_at", '=', date("Y"))->first();
         $kategori6_2_1 = $kprodi->kategori;
         $data6_2_1 = $kprodi->data;
         $skor6_2_1 = $kprodi->skor;
       } else {
         $nDOM = $request->nilai6_2_1_dana;
         if ($nDOM >= 18000000)
         {
           $kategori6_2_1=4;
         }
         elseif ($nDOM < 18000000) {
           $kategori6_2_1=$nDOM / 4.5 /1000000;
         }
          $kategori6_2_1 = intval(round($kategori6_2_1));
          $data6_2_1 = '['.$nDOM.']';
          $skor6_2_1 = $nDOM;
       }


       //PERHITUNGAN 6.2.2
       if ($request->setuju_6_2_2 == "1") {
         $kprodi = Standar6::where([
           ["id_prodi", $idprodi],
           ["kode", "6.2.2"]
         ])->whereYear("created_at", '=', date("Y"))->first();
         $kategori6_2_2 = $kprodi->kategori;
         $data6_2_2 = $kprodi->data;
         $skor6_2_2 = $kprodi->skor;
       } else {
         $nRPD = $request->nilai6_2_2dana;
         if ($nRPD >= 3000000) {
           $kategori6_2_2=4;
         }
         elseif ($nRPD<3000000) {
           $kategori6_2_2=(4*$nRPD)/3/1000000;
         }
         $kategori6_2_2 = intval(round($kategori6_2_2));
         $data6_2_2 = '['.$nRPD.']';
         $skor6_2_2 = $nRPD;
       }

       //PERHITUNGAN 6.2.3
       if ($request->setuju_6_2_3 == "1") {
         $kprodi = Standar6::where([
           ["id_prodi", $idprodi],
           ["kode", "6.2.3"]
         ])->whereYear("created_at", '=', date("Y"))->first();
         $kategori6_2_3 = $kprodi->kategori;
         $data6_2_3 = $kprodi->data;
         $skor6_2_3 = $kprodi->skor;
       } else {
         $nRPKM = $request->nilai6_2_3satu+$request->nilai6_2_3dua+$request->nilai6_2_3tiga;
         if ($nRPKM >= 1500000) {
           $kategori6_2_3=4;
         }
         elseif ($nRPKM < 1500000) {
           $kategori6_2_3=(8*$nRPKM)/3/1000000;
         }
         $kategori6_2_3 = intval(round($kategori6_2_3));
         $data6_2_3 = '['.$request->nilai6_2_3satu.']';
         $skor6_2_3 = $nRPKM;
       }

       //PERHITUNGAN 6.3.1
       if ($request->setuju_6_3_1 == "1") {
         $kprodi = Standar6::where([
           ["id_prodi", $idprodi],
           ["kode", "6.3.1"]
         ])->whereYear("created_at", '=', date("Y"))->first();
         $kategori6_3_1 = $kprodi->kategori;
         $data6_3_1 = $kprodi->data;
         $skor6_3_1 = $kprodi->skor;
       } else {
         $nilaiA=$request->a+2*$request->b+3*$request->c+4*$request->d;
         $nilaiB=$request->a+$request->b+$request->c+$request->d;
         if ($nilaiA!=0 || $nilaiB!=0) {
           $slrdt=$nilaiA/$nilaiB;
           $kategori6_3_1=$slrdt;
           $kategori6_3_1 = intval(round($kategori6_3_1));
         }else {
           $kategori6_3_1=0;
         }
         $data6_3_1 = '['.$request->a.', '.$request->b.', '.$request->c.', '.$request->d.', '.$nilaiA.', '.$nilaiB.']';
         $skor6_3_1 = $slrdt;
       }

      //PERHITUNGAN 6.4.1a
      if ($request->setuju_6_4_1_a == "1") {
        $kprodi = Standar6::where([
          ["id_prodi", $idprodi],
          ["kode", "6.4.1.a"]
        ])->whereYear("created_at", '=', date("Y"))->first();
        $kategori6_4_1_a = $kprodi->kategori;
        $data6_4_1_a = $kprodi->data;
        $skor6_4_1_a = $kprodi->skor;
      } else {
        $kategori6_4_1_a=$request->nilai6_4_1_a/100;
        $kategori6_4_1_a = intval(round($kategori6_4_1_a));
        $data6_4_1_a = '['.$request->nilai6_4_1_a.']';
        $skor6_4_1_a = $kategori6_4_1_a;
      }

      //PERHITUNGAN 6.4.1b
      if ($request->setuju_6_4_1_b == "1") {
        $kprodi = Standar6::where([
          ["id_prodi", $idprodi],
          ["kode", "6.4.1.b"]
        ])->whereYear("created_at", '=', date("Y"))->first();
        $kategori6_4_1_b = $kprodi->kategori;
        $data6_4_1_b = $kprodi->data;
        $skor6_4_1_b = $kprodi->skor;
      } else {
        $kategori6_4_1_b=$request->nilai6_4_1_b/50;
        $kategori6_4_1_b = intval(round($kategori6_4_1_b));
        $data6_4_1_b = '['.$request->nilai6_4_1_b.']';
        $skor6_4_1_b = $kategori6_4_1_b;
      }

      //PERHITUNGAN 6.4.1c
      if ($request->setuju_6_4_1_c == "1") {
        $kprodi = Standar6::where([
          ["id_prodi", $idprodi],
          ["kode", "6.4.1.c"]
        ])->whereYear("created_at", '=', date("Y"))->first();
        
        $kategori6_4_1_c = $kprodi->kategori;
        $data6_4_1_c = $kprodi->data;
        $skor6_4_1_c = $kprodi->skor;
      } else {
        $kategori6_4_1_c = $request->nilai6_4_1_c;
        $kategori6_4_1_c = intval(round($kategori6_4_1_c));
        $data6_4_1_c = '['.$request->nilai6_4_1_c.']';
        $skor6_4_1_c = $kategori6_4_1_c;
      }

      //PERHITUNGAN 6.4.1d
      if ($request->setuju_6_4_1_d == "1") {
        $kprodi = Standar6::where([
          ["id_prodi", $idprodi],
          ["kode", "6.4.1.d"]
        ])->whereYear("created_at", '=', date("Y"))->first();
        $kategori6_4_1_d = $kprodi->kategori;
        $data6_4_1_d = $kprodi->data;
        $skor6_4_1_d = $kprodi->skor;
      } else {
        $kategori6_4_1_d = $request->nilai6_4_1_d;
        $kategori6_4_1_d = intval(round($kategori6_4_1_d));
        $data6_4_1_d = '['.$request->nilai6_4_1_d.']';
        $skor6_4_1_d = $kategori6_4_1_d;
      }

      //PERHITUNGAN 6.4.1e
      if ($request->setuju_6_4_1_e == "1") {
        $kprodi = Standar6::where([
          ["id_prodi", $idprodi],
          ["kode", "6.4.1.e"]
        ])->whereYear("created_at", '=', date("Y"))->first();
        $kategori6_4_1_e = $kprodi->kategori;
        $data6_4_1_e = $kprodi->data;
        $skor6_4_1_e = $kprodi->skor;
      } else {
        $prosiding=$request->nilai6_4_1_esatu;
        if ($prosiding >= 9) {
          $kategori6_4_1_e=4;
        }
        elseif ($prosiding < 9) {
          $kategori6_4_1_e=(4*$prosiding)/9;
        }
        $kategori6_4_1_e = intval(round($kategori6_4_1_e));
        $data6_4_1_e = '['.$request->nilai6_4_1_esatu.']';
        $skor6_4_1_e = $prosiding;
      }

      //cek apakah jurusan tersebut sudah pernah input atau belum
      $oldStandar6 = Standar6Auditor::where([
        ['id_prodi', '=', $idprodi],
        ['auditor_id', session('auditor_id')]
        ])->whereYear("created_at", '=', date("Y"))->first();
      if($oldStandar6){
        //jika sudah maka ...

        $standar6 = Standar6Auditor::where([
          ['id_prodi', '=', $idprodi],
          ['auditor_id', '=', session("auditor_id")],
          ['kode', '=', '6.2.1']
        ])->whereYear("created_at", '=', date("Y"))->first();
        $standar6->kategori = $kategori6_2_1;
        $standar6->data = $data6_2_1;
        $standar6->skor = $skor6_2_1;
        $standar6->catatan = $request->catatan6_2_1;
        $standar6->save();

        $standar6 = Standar6Auditor::where([
          ['id_prodi', '=', $idprodi],
          ['auditor_id', '=', session("auditor_id")],
          ['kode', '=', '6.2.2']
        ])->whereYear("created_at", '=', date("Y"))->first();
        $standar6->kategori = $kategori6_2_2;
        $standar6->data = $data6_2_2;
        $standar6->skor = $skor6_2_2;
        $standar6->catatan = $request->catatan6_2_2;
        $standar6->save();

        $standar6 = Standar6Auditor::where([
          ['id_prodi', '=', $idprodi],
          ['auditor_id', '=', session("auditor_id")],
          ['kode', '=', '6.2.3']
        ])->whereYear("created_at", '=', date("Y"))->first();
        $standar6->kategori = $kategori6_2_3;
        $standar6->data = $data6_2_3;
        $standar6->skor = $skor6_2_3;
        $standar6->catatan = $request->catatan6_2_3;
        $standar6->save();

        $standar6 = Standar6Auditor::where([
          ['id_prodi', '=', $idprodi],
          ['auditor_id', '=', session("auditor_id")],
          ['kode', '=', '6.3.1']
        ])->whereYear("created_at", '=', date("Y"))->first();
        $standar6->kategori = $kategori6_3_1;
        $standar6->data = $data6_3_1;
        $standar6->skor = $skor6_3_1;
        $standar6->catatan = $request->catatan6_3_1;
        $standar6->save();

        $standar6 = Standar6Auditor::where([
          ['id_prodi', '=', $idprodi],
          ['auditor_id', '=', session("auditor_id")],
          ['kode', '=', '6.4.1.a']
        ])->whereYear("created_at", '=', date("Y"))->first();
        $standar6->kategori = $kategori6_4_1_a;
        $standar6->data = $data6_4_1_a;
        $standar6->skor = $skor6_4_1_a;
        $standar6->catatan = $request->catatan6_4_1_a;
        $standar6->save();

        $standar6 = Standar6Auditor::where([
          ['id_prodi', '=', $idprodi],
          ['auditor_id', '=', session("auditor_id")],
          ['kode', '=', '6.4.1.b']
        ])->whereYear("created_at", '=', date("Y"))->first();
        $standar6->kategori = $kategori6_4_1_b;
        $standar6->data = $data6_4_1_b;
        $standar6->skor = $skor6_4_1_b;
        $standar6->catatan = $request->catatan6_4_1_b;
        $standar6->save();

        $standar6 = Standar6Auditor::where([
          ['id_prodi', '=', $idprodi],
          ['auditor_id', '=', session("auditor_id")],
          ['kode', '=', '6.4.1.c']
        ])->whereYear("created_at", '=', date("Y"))->first();
        $standar6->kategori = $kategori6_4_1_c;
        $standar6->data = $data6_4_1_c;
        $standar6->skor = $skor6_4_1_c;
        $standar6->catatan = $request->catatan6_4_1_c;
        $standar6->save();

        $standar6 = Standar6Auditor::where([
          ['id_prodi', '=', $idprodi],
          ['auditor_id', '=', session("auditor_id")],
          ['kode', '=', '6.4.1.d']
        ])->whereYear("created_at", '=', date("Y"))->first();
        $standar6->kategori = $kategori6_4_1_d;
        $standar6->data = $data6_4_1_d;
        $standar6->skor = $skor6_4_1_d;
        $standar6->catatan = $request->catatan6_4_1_d;
        $standar6->save();

        $standar6 = Standar6Auditor::where([
          ['id_prodi', '=', $idprodi],
          ['auditor_id', '=', session("auditor_id")],
          ['kode', '=', '6.4.1.e']
        ])->whereYear("created_at", '=', date("Y"))->first();
        $standar6->kategori = $kategori6_4_1_e;
        $standar6->data = $data6_4_1_e;
        $standar6->skor = $skor6_4_1_e;
        $standar6->catatan = $request->catatan6_4_1_e;
        $standar6->save();
        // return "updated";
      }else{
        //jika belum maka ...

        $standar6 = new Standar6Auditor;
        $standar6->kode = '6.2.1';
        $standar6->id_prodi = $idprodi;
        $standar6->auditor_id=session("auditor_id");
        $standar6->kategori = $kategori6_2_1;
        $standar6->data = $data6_2_1;
        $standar6->skor = $skor6_2_1;
        $standar6->catatan = $request->catatan6_2_1;
        $standar6->save();

        $standar6 = new Standar6Auditor;
        $standar6->kode = '6.2.2';
        $standar6->id_prodi = $idprodi;
        $standar6->auditor_id=session("auditor_id");
        $standar6->kategori = $kategori6_2_2;
        $standar6->data = $data6_2_2;
        $standar6->skor = $skor6_2_2;
        $standar6->catatan = $request->catatan6_2_2;
        $standar6->save();

        $standar6 = new Standar6Auditor;
        $standar6->kode = '6.2.3';
        $standar6->id_prodi = $idprodi;
        $standar6->auditor_id=session("auditor_id");
        $standar6->kategori = $kategori6_2_3;
        $standar6->data = $data6_2_3;
        $standar6->skor = $skor6_2_3;
        $standar6->catatan = $request->catatan6_2_3;
        $standar6->save();

        $standar6 = new Standar6Auditor;
        $standar6->kode = '6.3.1';
        $standar6->id_prodi = $idprodi;
        $standar6->auditor_id=session("auditor_id");
        $standar6->kategori = $kategori6_3_1;
        $standar6->data = $data6_3_1;
        $standar6->skor = $skor6_3_1;
        $standar6->catatan = $request->catatan6_3_1;
        $standar6->save();

        $standar6 = new Standar6Auditor;
        $standar6->kode = '6.4.1.a';
        $standar6->id_prodi = $idprodi;
        $standar6->auditor_id=session("auditor_id");
        $standar6->kategori = $kategori6_4_1_a;
        $standar6->data = $data6_4_1_a;
        $standar6->skor = $skor6_4_1_a;
        $standar6->catatan = $request->catatan6_4_1_a;
        $standar6->save();

        $standar6 = new Standar6Auditor;
        $standar6->kode = '6.4.1.b';
        $standar6->id_prodi = $idprodi;
        $standar6->auditor_id=session("auditor_id");
        $standar6->kategori = $kategori6_4_1_b;
        $standar6->data = $data6_4_1_b;
        $standar6->skor = $skor6_4_1_b;
        $standar6->catatan = $request->catatan6_4_1_b;
        $standar6->save();

        $standar6 = new Standar6Auditor;
        $standar6->kode = '6.4.1.c';
        $standar6->id_prodi = $idprodi;
        $standar6->auditor_id=session("auditor_id");
        $standar6->kategori = $kategori6_4_1_c;
        $standar6->data = $data6_4_1_c;
        $standar6->skor = $skor6_4_1_c;
        $standar6->catatan = $request->catatan6_4_1_c;
        $standar6->save();

        $standar6 = new Standar6Auditor;
        $standar6->kode = '6.4.1.d';
        $standar6->id_prodi = $idprodi;
        $standar6->auditor_id=session("auditor_id");
        $standar6->kategori = $kategori6_4_1_d;
        $standar6->data = $data6_4_1_d;
        $standar6->skor = $skor6_4_1_d;
        $standar6->catatan = $request->catatan6_4_1_d;
        $standar6->save();

        $standar6 = new Standar6Auditor;
        $standar6->kode = '6.4.1.e';
        $standar6->id_prodi = $idprodi;
        $standar6->auditor_id=session("auditor_id");
        $standar6->kategori = $kategori6_4_1_e;
        $standar6->data = $data6_4_1_e;
        $standar6->skor = $skor6_4_1_e;
        $standar6->catatan = $request->catatan6_4_1_e;
        $standar6->save();
        // return "saved";
      }
       return redirect()->back();

     }
}

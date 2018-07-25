<?php

namespace App\Http\Controllers\Auditor;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Standar3 ;
use App\Standar3Auditor ;
use App\Prodi ;
use App\Repositories\StandarStatus ;

class NilaiStandar3Controller extends Controller
{
  public function index($idprodi)
  {
    $standar_status = new StandarStatus($idprodi);
      // dd($standar_status->getStatusMessage());
    $standar_status_code=$standar_status->getStatus();
    $standar_message=$standar_status->getStatusMessage();
    $standar="Rekap Nilai Standar 3";
    $nilai_kprodi=Standar3::select('kode','kategori')->where('id_prodi',$idprodi)->whereYear("created_at", date("Y"))->get();
    $nilai_auditor=Standar3Auditor::select('kode','kategori')->where([['id_prodi', '=',$idprodi], ['auditor_id', '=',session("auditor_id")]])->whereYear("created_at", date("Y"))->get();
    $prodi = Prodi::findOrFail($idprodi);
    $nama_prodi = $prodi->jjg_kd." ".$prodi->pro_nm;
    // $total =NilaiStandar1::standar1s("kategori")->sum('nilai');
    $total = 0;

    return view("auditor.rekap.NilaiStandar3.index",compact('nilai_kprodi', 'nilai_auditor','standar','total', 'nama_prodi', 'idprodi' , 'standar_message'));
  }

}

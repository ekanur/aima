<?php

namespace App\Http\Controllers\Auditor;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Standar2 ;
use App\Standar2Auditor ;
use App\Prodi ;
use App\Repositories\StandarStatus ;

class NilaiStandar2Controller extends Controller
{
  public function index($idprodi)
  {
          $standar_status = new StandarStatus($idprodi);
      // dd($standar_status->getStatusMessage());
      $standar_status_code=$standar_status->getStatus();
      $standar_message=$standar_status->getStatusMessage();
     $standar="Rekap Nilai Standar 2";
    $nilai_kprodi=Standar2::select('kode','kategori')->where('id_prodi',$idprodi)->get();
    $nilai_auditor=Standar2Auditor::select('kode','kategori')->where([['id_prodi', '=',$idprodi], ['auditor_id', '=',session("auditor_id")]])->get();
        $prodi = Prodi::findOrFail($idprodi);
    $nama_prodi = $prodi->jjg_kd." ".$prodi->pro_nm;
    // $total =NilaiStandar1::standar1s("kategori")->sum('nilai');
    $total = 0;

    return view("auditor.rekap.NilaiStandar2.index",compact('nilai_kprodi', 'nilai_auditor','standar','total', 'nama_prodi', 'idprodi', 'standar_message' ));
  }

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Standar1;
// use App\Standar1Auditor;

class Standar1Controller extends Controller
{
  public function __construct(){
    if(session('role') == 'auditor'){
      return redirect("/auditor");
    }

  }
  public function index(){
    // dd(session('id_prodi'));
    $standar1 = Standar1::where("id_prodi", session('id_prodi'))->whereYear("created_at", '=', date("Y"))->get();
    $data=array();
    foreach ($standar1 as $data_standar1) {
      $data[$data_standar1->kode] = $data_standar1->kategori;
    }
    $standar="Standar 1";

    $prodi = $this->getProdi();

    $catatan_auditor = $this->getCatatan('App\Standar1Auditor');


    // dd($catatan_auditor);
    return view("standar1.index", compact('data', 'standar', 'prodi', 'catatan_auditor'));
  }

  public function save(Request $request){
    $timestamp = date("Y-m-d H:i:s");
    $data=array(
      array("kode"=>"1.1.a", "kategori"=>$request->skor1_1_a, "data"=>"[".$request->skor1_1_a."]", "skor"=>$request->skor1_1_a, "id_prodi"=>session('id_prodi'), "created_at"=>$timestamp, "updated_at"=>$timestamp),
      array("kode"=>"1.1.b", "kategori"=>$request->skor1_1_b, "data"=>"[".$request->skor1_1_b."]", "skor"=>$request->skor1_1_b, "id_prodi"=>session('id_prodi'), "created_at"=>$timestamp, "updated_at"=>$timestamp),
      array("kode"=>"1.2", "kategori"=>$request->skor1_2, "data"=>"[".$request->skor1_2."]", "skor"=>$request->skor1_2, "id_prodi"=>session('id_prodi'), "created_at"=>$timestamp, "updated_at"=>$timestamp),
    );

    $standar1 = Standar1::insert($data);

      // $standar2->insert();

    return redirect()->back();
  }

  public function update(Request $request){
    if($request->skor1_1_a_old != $request->skor1_1_a){
      Standar1::where("kode", "1.1.a")->whereYear("created_at", '=', date("Y"))->update(["kategori"=>$request->skor1_1_a, "data"=>"[".$request->skor1_1_a."]", "skor"=>$request->skor1_1_a]);
    }

    if($request->skor1_1_b_old != $request->skor1_1_b){
      Standar1::where("kode", "1.1.b")->whereYear("created_at", '=', date("Y"))->update(["kategori"=>$request->skor1_1_b, "data"=>"[".$request->skor1_1_b."]", "skor"=>$request->skor1_1_b]);
    }

    if($request->skor1_2_old != $request->skor1_2){
      Standar1::where("kode", "1.2")->whereYear("created_at", '=', date("Y"))->update(["kategori"=>$request->skor1_2, "data"=>"[".$request->skor1_2."]", "skor"=>$request->skor1_2]);
    }

    return redirect()->back();
  }
}

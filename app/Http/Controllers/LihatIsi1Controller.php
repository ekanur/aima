<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Standar1;

class LihatIsi1Controller extends Controller
{
    public function index(){
      $standar1 = Standar1::where("id_prodi", 1)->get();
    	$data=array();
      foreach ($standar1 as $data_standar1) {
        $data[$data_standar1->kode] = $data_standar1->kategori;
      }
    	$standar="Standar 1";
    	return view("standar1.index", compact('data', 'standar'));
    }

    public function save(Request $request){
      $timestamp = date("Y-m-d H:i:s");
      $data=array(
        array("kode"=>"1.1.a", "kategori"=>$request->skor1_1_a, "data"=>"[".$request->skor1_1_a."]", "skor"=>$request->skor1_1_a, "id_prodi"=>1, "created_at"=>$timestamp, "updated_at"=>$timestamp),
        array("kode"=>"1.1.b", "kategori"=>$request->skor1_1_b, "data"=>"[".$request->skor1_1_b."]", "skor"=>$request->skor1_1_b, "id_prodi"=>1, "created_at"=>$timestamp, "updated_at"=>$timestamp),
        array("kode"=>"1.2", "kategori"=>$request->skor1_2, "data"=>"[".$request->skor1_2."]", "skor"=>$request->skor1_2, "id_prodi"=>1, "created_at"=>$timestamp, "updated_at"=>$timestamp),
        );

      $standar1 = Standar1::insert($data);

      // $standar2->insert();

      return redirect()->back();
    }

    public function update(Request $request){
      if($request->skor1_1_a_old != $request->skor1_1_a){
        Standar1::where("kode", "1.1.a")->update(["kategori"=>$request->skor1_1_a, "data"=>"[".$request->skor1_1_a."]", "skor"=>$request->skor1_1_a]);
      }

      if($request->skor1_1_b_old != $request->skor1_1_b){
        Standar1::where("kode", "1.1.b")->update(["kategori"=>$request->skor1_1_b, "data"=>"[".$request->skor1_1_b."]", "skor"=>$request->skor1_1_b]);
      }

      if($request->skor1_2_old != $request->skor1_2){
        Standar1::where("kode", "1.2")->update(["kategori"=>$request->skor1_2, "data"=>"[".$request->skor1_2."]", "skor"=>$request->skor1_2]);
      }

      return redirect()->back();
    }
}

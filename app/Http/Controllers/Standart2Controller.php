<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Standart2;

class Standart2Controller extends Controller
{
	public function index(){
		$standart2 = Standart2::where("id_jurusan", 1)->get();
		$data=array();
		foreach ($standart2 as $data_standart2) {
			$data[$data_standart2->kode]=$data_standart2->nilai;
		}
		// dd($data);
		return view("standart2.index", compact('data'));
	}

	public function save(Request $request){
		$timestamp = date("Y-m-d H:i:s");
		$data=array(
			array("kode"=>"2.1", "nilai"=>$request->skor2_1, "id_jurusan"=>1, "created_at"=>$timestamp, "updated_at"=>$timestamp),
			array("kode"=>"2.2", "nilai"=>$request->skor2_2, "id_jurusan"=>1, "created_at"=>$timestamp, "updated_at"=>$timestamp),
			array("kode"=>"2.6", "nilai"=>$request->skor2_6, "id_jurusan"=>1, "created_at"=>$timestamp, "updated_at"=>$timestamp),
			);

		$standart2 = Standart2::updateOrCreate($data);

		// $standart2->insert();

		return redirect()->back();
		
	}    
}

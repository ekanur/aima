<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Standar7;

class Standar7Controller extends Controller
{
    public function index(){
      return view('standar7.index');
    }

    public function save(Request $request){
      //dd($request->all());

      $timestamp = date("Y-m-d H:i:s");
      $data=array(
        array("kode"=>"7.1.1", "nilai"=>$request->skor7_1_1, "id_jurusan"=>1, "created_at"=>$timestamp, "updated_at"=>$timestamp),
        array("kode"=>"7.1.2", "nilai"=>$request->skor7_1_2, "id_jurusan"=>1, "created_at"=>$timestamp, "updated_at"=>$timestamp),
        array("kode"=>"7.1.3", "nilai"=>$request->skor7_1_3, "id_jurusan"=>1, "created_at"=>$timestamp, "updated_at"=>$timestamp),
        array("kode"=>"7.1.4", "nilai"=>$request->skor7_1_4, "id_jurusan"=>1, "created_at"=>$timestamp, "updated_at"=>$timestamp),
        array("kode"=>"7.2.1", "nilai"=>$request->skor7_2_1, "id_jurusan"=>1, "created_at"=>$timestamp, "updated_at"=>$timestamp),
        );

      $standar7 = Standar7::updateOrCreate($data);

      // $standar2->insert();

      return redirect()->back();

    }
}

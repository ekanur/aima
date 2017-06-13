<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Standar7;

class Standar7Controller extends Controller
{
    public function index(){
      $standar="Standar 7";
      return view('standar7.index', compact('standar'));
    }

    public function save(Request $request){
      //dd($request->all());

      //perhitungan skor 7.1.1
      $nk7_1_1 = (4 * $request->na7_1_1 + 2 * $request->nb7_1_1 + $request->nc7_1_1)/$request->f7_1_1;
      if($nk7_1_1 >= 2){
        $skor7_1_1 = 4;
      }elseif($nk7_1_1 > 0){
        $skor7_1_1 = (1.5 * $nk7_1_1) + 1;
      }elseif($nk7_1_1 <= 0){
        $skor7_1_1 = 0;
      }
      $skor7_1_1 = intval(round($skor7_1_1));

      //perhitungan skor 7.1.2
      if($request->pd7_1_2 >= 25){
        $skor7_1_2 = 4;
      }elseif($request->pd7_1_2 > 0){
        $skor7_1_2 = 1 + ((12 * $request->pd7_1_2) / 100);
      }elseif($request->pd7_1_2 <= 0){
        $skor7_1_2 = 0;
      }
      $skor7_1_2 = intval(round($skor7_1_2));

      //perhitungan skor 7.1.3
      $nk7_1_3 = (4 * $request->na7_1_3 + 2 * $request->nb7_1_3 + $request->nc7_1_3)/$request->f7_1_3;
      if($nk7_1_3 >= 6){
        $skor7_1_3 = 4;
      }elseif($nk7_1_3 > 0){
        $skor7_1_3 = 1 + ($nk7_1_3 / 2);
      }elseif($nk7_1_3 <= 0){
        $skor7_1_3 = 0;
      }
      $skor7_1_3 = intval(round($skor7_1_3));

      //perhitungan skor 7.1.4
      $skor7_1_4 = $request->n7_1_4;
      $skor7_1_4 = intval(round($skor7_1_4));

      //perhitungan skor 7.2.1
      $nk7_2_1 = (4 * $request->na7_2_1 + 2 * $request->nb7_2_1 + $request->nc7_2_1)/$request->f7_2_1;
      if($nk7_2_1 >= 1){
        $skor7_2_1 = 4;
      }elseif($nk7_2_1 > 0){
        $skor7_2_1 = (3 * $nk7_2_1) + 1;
      }elseif($nk7_2_1 <= 0){
        $skor7_2_1 = 0;
      }
      $skor7_2_1 = intval(round($skor7_2_1));

      //return ($skor7_1_1 . ", " . $skor7_1_2 . ", " . $skor7_1_3 . ", " . $skor7_1_4 . ", " . $skor7_2_1);

      //cek apakah jurusan tersebut sudah pernah input atau belum
      $oldStandar7 = Standar7::where('id_jurusan', '=', '1')->first();
      if($oldStandar7){
        //jika sudah maka ...

        $standar7 = Standar7::where([
          ['id_jurusan', '=', '1'],
          ['kode', '=', '7.1.1']
        ])->first();
        $standar7->nilai = $skor7_1_1;
        $standar7->save();

        $standar7 = Standar7::where([
          ['id_jurusan', '=', '1'],
          ['kode', '=', '7.1.2']
        ])->first();
        $standar7->nilai = $skor7_1_2;
        $standar7->save();

        $standar7 = Standar7::where([
          ['id_jurusan', '=', '1'],
          ['kode', '=', '7.1.3']
        ])->first();
        $standar7->nilai = $skor7_1_3;
        $standar7->save();

        $standar7 = Standar7::where([
          ['id_jurusan', '=', '1'],
          ['kode', '=', '7.1.4']
        ])->first();
        $standar7->nilai = $skor7_1_4;
        $standar7->save();

        $standar7 = Standar7::where([
          ['id_jurusan', '=', '1'],
          ['kode', '=', '7.2.1']
        ])->first();
        $standar7->nilai = $skor7_2_1;
        $standar7->save();

        // return "updated";
      }else{
        //jika belum maka ...

        $standar7 = new Standar7;
        $standar7->kode = '7.1.1';
        $standar7->id_jurusan = '1';
        $standar7->nilai = $skor7_1_1;
        $standar7->save();

        $standar7 = new Standar7;
        $standar7->kode = '7.1.2';
        $standar7->id_jurusan = '1';
        $standar7->nilai = $skor7_1_2;
        $standar7->save();

        $standar7 = new Standar7;
        $standar7->kode = '7.1.3';
        $standar7->id_jurusan = '1';
        $standar7->nilai = $skor7_1_3;
        $standar7->save();

        $standar7 = new Standar7;
        $standar7->kode = '7.1.4';
        $standar7->id_jurusan = '1';
        $standar7->nilai = $skor7_1_4;
        $standar7->save();

        $standar7 = new Standar7;
        $standar7->kode = '7.2.1';
        $standar7->id_jurusan = '1';
        $standar7->nilai = $skor7_2_1;
        $standar7->save();

        // return "saved";
      }

      return redirect()->back();

    }
}

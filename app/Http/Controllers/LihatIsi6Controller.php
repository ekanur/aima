<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Standar6;

class LihatIsi6Controller extends Controller
{
    public function index()
    {
      $standar5 = Standar5::where("id_prodi", 1)->get();
      if($standar5->count() <= 0){
        return redirect('/standar5');
      }

        $standar="Standar 6";
        $data = Standar6::select('kode', 'data', 'skor', 'kategori')->where('id_prodi', '=', '1')->orderBy('kode', 'asc')->get();
        if(!$data->count()){
          $dataCheck = true;
        }else{
          $dataCheck = false;
        }
        return view('standar6.index', compact('standar', 'data', 'dataCheck'));
    }
     public function save(Request $request)
     {
       //PERHITUNGAN 6.2.1
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


       //PERHITUNGAN 6.2.2
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

       //PERHITUNGAN 6.2.3
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

       //PERHITUNGAN 6.3.1
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

      //PERHITUNGAN 6.4.1a
      $kategori6_4_1_a=$request->nilai6_4_1_a/100;
      $kategori6_4_1_a = intval(round($kategori6_4_1_a));
      $data6_4_1_a = '['.$request->nilai6_4_1_a.']';
      $skor6_4_1_a = $kategori6_4_1_a;

      //PERHITUNGAN 6.4.1b
      $kategori6_4_1_b=$request->nilai6_4_1_b/50;
      $kategori6_4_1_b = intval(round($kategori6_4_1_b));
      $data6_4_1_b = '['.$request->nilai6_4_1_b.']';
      $skor6_4_1_b = $kategori6_4_1_b;

      //PERHITUNGAN 6.4.1c
      $kategori6_4_1_c = $request->nilai6_4_1_c;
      $kategori6_4_1_c = intval(round($kategori6_4_1_c));
      $data6_4_1_c = '['.$request->nilai6_4_1_c.']';
      $skor6_4_1_c = $kategori6_4_1_c;

      //PERHITUNGAN 6.4.1d
      $kategori6_4_1_d = $request->nilai6_4_1_d;
      $kategori6_4_1_d = intval(round($kategori6_4_1_d));
      $data6_4_1_d = '['.$request->nilai6_4_1_d.']';
      $skor6_4_1_d = $kategori6_4_1_d;

      //PERHITUNGAN 6.4.1e
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

      //cek apakah jurusan tersebut sudah pernah input atau belum
      $oldStandar6 = Standar6::where('id_prodi', '=', '1')->first();
      if($oldStandar6){
        //jika sudah maka ...

        $standar6 = Standar6::where([
          ['id_prodi', '=', '1'],
          ['kode', '=', '6.2.1']
        ])->first();
        $standar6->kategori = $kategori6_2_1;
        $standar6->data = $data6_2_1;
        $standar6->skor = $skor6_2_1;
        $standar6->save();

        $standar6 = Standar6::where([
          ['id_prodi', '=', '1'],
          ['kode', '=', '6.2.2']
        ])->first();
        $standar6->kategori = $kategori6_2_2;
        $standar6->data = $data6_2_2;
        $standar6->skor = $skor6_2_2;
        $standar6->save();

        $standar6 = Standar6::where([
          ['id_prodi', '=', '1'],
          ['kode', '=', '6.2.3']
        ])->first();
        $standar6->kategori = $kategori6_2_3;
        $standar6->data = $data6_2_3;
        $standar6->skor = $skor6_2_3;
        $standar6->save();

        $standar6 = Standar6::where([
          ['id_prodi', '=', '1'],
          ['kode', '=', '6.3.1']
        ])->first();
        $standar6->kategori = $kategori6_3_1;
        $standar6->data = $data6_3_1;
        $standar6->skor = $skor6_3_1;
        $standar6->save();

        $standar6 = Standar6::where([
          ['id_prodi', '=', '1'],
          ['kode', '=', '6.4.1.a']
        ])->first();
        $standar6->kategori = $kategori6_4_1_a;
        $standar6->data = $data6_4_1_a;
        $standar6->skor = $skor6_4_1_a;
        $standar6->save();

        $standar6 = Standar6::where([
          ['id_prodi', '=', '1'],
          ['kode', '=', '6.4.1.b']
        ])->first();
        $standar6->kategori = $kategori6_4_1_b;
        $standar6->data = $data6_4_1_b;
        $standar6->skor = $skor6_4_1_b;
        $standar6->save();

        $standar6 = Standar6::where([
          ['id_prodi', '=', '1'],
          ['kode', '=', '6.4.1.c']
        ])->first();
        $standar6->kategori = $kategori6_4_1_c;
        $standar6->data = $data6_4_1_c;
        $standar6->skor = $skor6_4_1_c;
        $standar6->save();

        $standar6 = Standar6::where([
          ['id_prodi', '=', '1'],
          ['kode', '=', '6.4.1.d']
        ])->first();
        $standar6->kategori = $kategori6_4_1_d;
        $standar6->data = $data6_4_1_d;
        $standar6->skor = $skor6_4_1_d;
        $standar6->save();

        $standar6 = Standar6::where([
          ['id_prodi', '=', '1'],
          ['kode', '=', '6.4.1.e']
        ])->first();
        $standar6->kategori = $kategori6_4_1_e;
        $standar6->data = $data6_4_1_e;
        $standar6->skor = $skor6_4_1_e;
        $standar6->save();
        // return "updated";
      }else{
        //jika belum maka ...

        $standar6 = new Standar6;
        $standar6->kode = '6.2.1';
        $standar6->id_prodi = '1';
        $standar6->kategori = $kategori6_2_1;
        $standar6->data = $data6_2_1;
        $standar6->skor = $skor6_2_1;
        $standar6->save();

        $standar6 = new Standar6;
        $standar6->kode = '6.2.2';
        $standar6->id_prodi = '1';
        $standar6->kategori = $kategori6_2_2;
        $standar6->data = $data6_2_2;
        $standar6->skor = $skor6_2_2;
        $standar6->save();

        $standar6 = new Standar6;
        $standar6->kode = '6.2.3';
        $standar6->id_prodi = '1';
        $standar6->kategori = $kategori6_2_3;
        $standar6->data = $data6_2_3;
        $standar6->skor = $skor6_2_3;
        $standar6->save();

        $standar6 = new Standar6;
        $standar6->kode = '6.3.1';
        $standar6->id_prodi = '1';
        $standar6->kategori = $kategori6_3_1;
        $standar6->data = $data6_3_1;
        $standar6->skor = $skor6_3_1;
        $standar6->save();

        $standar6 = new Standar6;
        $standar6->kode = '6.4.1.a';
        $standar6->id_prodi = '1';
        $standar6->kategori = $kategori6_4_1_a;
        $standar6->data = $data6_4_1_a;
        $standar6->skor = $skor6_4_1_a;
        $standar6->save();

        $standar6 = new Standar6;
        $standar6->kode = '6.4.1.b';
        $standar6->id_prodi = '1';
        $standar6->kategori = $kategori6_4_1_b;
        $standar6->data = $data6_4_1_b;
        $standar6->skor = $skor6_4_1_b;
        $standar6->save();

        $standar6 = new Standar6;
        $standar6->kode = '6.4.1.c';
        $standar6->id_prodi = '1';
        $standar6->kategori = $kategori6_4_1_c;
        $standar6->data = $data6_4_1_c;
        $standar6->skor = $skor6_4_1_c;
        $standar6->save();

        $standar6 = new Standar6;
        $standar6->kode = '6.4.1.d';
        $standar6->id_prodi = '1';
        $standar6->kategori = $kategori6_4_1_d;
        $standar6->data = $data6_4_1_d;
        $standar6->skor = $skor6_4_1_d;
        $standar6->save();

        $standar6 = new Standar6;
        $standar6->kode = '6.4.1.e';
        $standar6->id_prodi = '1';
        $standar6->kategori = $kategori6_4_1_e;
        $standar6->data = $data6_4_1_e;
        $standar6->skor = $skor6_4_1_e;
        $standar6->save();
        // return "saved";
      }
       return redirect()->back();

     }
}

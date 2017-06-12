<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Standar5;

class Standar5Controller extends Controller
{
    public function index(){
      return view('standar5.index');
    }

    public function save(Request $masuk){

      // $validator = $this->validator($masuk->all());
      // if($alidator->fails()){
      //   $this->throwValidationException{
      //     $masuk->$validator
      //   };
      //   $this->save($masuk->all());
      //   return response()->json($masuk->all(),200);
      // }

      //hitung skor_5_1_1_a
      $skor5_1_1_a = $masuk->standar5_1_1_1_a;
      $skor5_1_1_a = intval(round($skor5_1_1_a));

      //hitung skor_5_1_2_b
      $skor_5_1_2_b = $masuk->standar5_1_2_b;
      $skor_5_1_2_b= intval(round($skor_5_1_2_b));

      //perhitungan skor 5_1_2_c
      if($masuk->pdmk5_1_2_c >= 95){
        $skor5_1_2_c= 4;
      }
      elseif($masuk->pdmk5_1_2_c >= 55 && $masuk->pdmk5_1_2_c <= 94){
        $skor5_1_2_c= 10 *($masuk->pdmk5_1_2_c - 55)/100;

      }

      elseif ($masuk->pdmk5_1_2_c < 55){
        $skor5_1_2_c= 0;
      }

      elseif($masuk->pdmk5_1_2_c == null){
        $skor5_1_2_c=0;
      }

      $skor5_1_2_c= intval(round($skor5_1_2_c)); //pembulatan $skor5_1_2_c

      //perhitungan skor 5.1.3.a
      // if($masuk->bmkp5_1_3_a  >= 9 && $masuk->rmkp5_1_3_a >= 2){
      //     $skor5_1_3_a=4;
      // }
      //
      // elseif($masuk->bmkp5_1_3_a >= 9 && $masuk->rmkp5_1_3_a == 1 ){
      //     $skor5_1_3_a= 3 * $masuk->rmkp5_1_3_a;
      // }
      // elseif($masuk->bmkp5_1_3_a < 9 || $masuk->rmkp5_1_3_a < 1){
      //   $skor5_1_3_a = 2;
      // }
      //
      // elseif($masuk->bmkp5_3_1_a == null || $masuk->rmkp5_3_1_a == null){
      //   $skor5_1_3_a = 0;
      // }
      $skor5_1_3_a = $masuk->standar5_1_3_a / 3;
      $skor5_1_3_a= intval(round($skor5_1_3_a)); // pembulatan $skor5_1_3_a

      //hitung standar5_3_2
      $skor_5_3_2 = $masuk->standar5_3_2;
      $skor_5_3_2 = intval(round($skor_5_3_2));


      //perhitungan 5_4_1_a
      if ($masuk->rmpa5_4_1_a >= 1 && $masuk->rmpa5_4_1_a <= 20){
        $skor5_4_1_a = 4;
      }

      elseif($masuk->rmpa5_4_1_a > 20 && $masuk->rmpa5_4_1_a < 60){
        $skor5_4_1_a = (60 - $masuk->rmpa5_4_1_a) / 10;
      }

      elseif($masuk->rmpa5_4_1_a >=60 || $masuk->rmpa5_4_1_a == 0){
        $skor5_4_1_a = 0;
      }

      elseif($masuk->rmpa5_4_1_a == null){
        $skor5_4_1_a = 0;
      }

      $skor5_4_1_a= intval(round($skor5_4_1_a));

      //hitung pp5_4_1_c
      if ($masuk->pp5_4_1_c >= 3){
        $skor5_4_1_c = 4;
      }

      elseif ($masuk->pp5_4_1_c < 3 && $masuk->pp5_4_1_c > 0){
        $skor5_4_1_c = $masuk->pp5_4_1_c + 1;
      }

      elseif($masuk->pp5_4_1_c == null){
        $skor5_4_1_c = 0;
      }


      $skor5_4_1_c= intval(round($skor5_4_1_c));


      //hitung standar 5.4.2

      if ($masuk->standar5_4_2){
        $skor5_4_2 = $masuk->standar5_4_2;
      }
      else{
        $skor5_4_2 =0;
      }

      $skor5_4_2 = intval(round($skor5_4_2));


      //hitung rmta5_5_1_b
      if($masuk->rmta5_5_1_b > 0 && $masuk->rmta5_5_1_b <= 4 ){
        $skor5_5_1_b = 4;
      }
      elseif($masuk->rmta5_5_1_b > 4 && $masuk->rmta5_5_1_b < 20  ){
        $skor5_5_1_b = 5 - ($masuk->rmta5_5_1_b / 4);
      }
      elseif($masuk->rmta5_5_1_b == 0 || $masuk->rmta5_5_1_b >= 20 ){
        $skor5_5_1_b = 0;
      }

      elseif($masuk->rmta5_5_1_b == null){
        $skor5_5_1_b = 0;
      }

      $skor5_5_1_b= intval(round($skor5_5_1_b));

      //hitung rbta5_5_1_c
      if($masuk->rbta5_5_1_c >= 8 ){
        $skor5_5_1_c = 4;
      }
      elseif($masuk->rbta5_5_1_c < 8 ){
        $skor5_5_1_c = $masuk->rbta5_5_1_c / 2;

      }
      elseif($masuk->rbta5_5_1_c == null){
        $skor5_5_1_c = 0;
      }

      $skor5_5_1_c = intval(round($skor5_5_1_c));

      //hitung standar5_5_2 == 0
      if($masuk->standar5_5_2 == 0 && $masuk->rpta5_5_2 == 6){
        $skor_rpta5_5_2= 4;
      }

      elseif($masuk->standar5_5_2 == 0 && $masuk->rpta5_5_2 > 6 && $masuk->rpta5_5_2 < 14 ){
        $skor_rpta5_5_2 = (14 - $masuk->rpta5_5_2) / 2;
      }

      elseif($masuk->standar5_5_2 == 0 && $masuk->rpta5_5_2 >= 14){
        $skor_rpta5_5_2 = 0;
      }

      elseif($masuk->standar5_5_2 == 0 && $masuk->rpta5_5_2 == 0){
        $skor_rpta5_5_2 = 0;
      }

      //hitung standar5_5_2 == 1
      if($masuk->standar5_5_2 == 1 && $masuk->rpta5_5_2 <= 12){
        $skor_rpta5_5_2= 4;
      }

      elseif($masuk->standar5_5_2 == 1 && $masuk->rpta5_5_2 > 12 && $masuk->rpta5_5_2 < 28 ){
        $skor_rpta5_5_2 = (28 - $masuk->rpta5_5_2)/4;
      }
      elseif($masuk->standar5_5_2 == 1 && $masuk->rpta5_5_2 >=28){
        $skor_rpta5_5_2=0;
      }
      else {
        $skor_rpta5_5_2=0;
      }

      $skor_rpta5_5_2 = intval(round($skor_rpta5_5_2));

      //hitung nilai 5.7.2
      $skor5_7_2 = $masuk->standar5_7_2;
      $skor5_7_2 = intval(round($skor5_7_2));

      //hitung nilai 5.7.3
      $skor5_7_3 = $masuk->standar5_7_3;
      $skor5_7_3 = intval(round($skor5_7_3));

      //hitung standar 5_7_5
      $skor5_7_5=$masuk->standar5_7_5;
      $skor5_7_5=intval(round($skor5_7_5));


    $dataStandar5 = Standar5::where('id_jurusan', '=', '1')->first();
    if($dataStandar5) {
      // 5.1.1.a
      $standar5=Standar5::where(['id_jurusan','=','1'],
      ['kode','=','5.1.1.a'])->first();
      $standar5->nilai=$skor5_1_1_a;
      $standar5->save();

      // 5.1.2.b
      $standar5=Standar5::where(['id_jurusan','=','1'],
      ['kode','=','5.1.2.b'])->first();
      $standar5->nilai=$skor_5_1_2_b;
      $standar5->save();

      // 5.3.1.a
      $standar5=Standar5::where(['id_jurusan','=','1'],
      ['kode','=','5.2.3.a'])->first();
      $standar5->nilai=$skor5_1_3_a;
      $standar5->save();

      // 5.3.2
      $standar5=Standar5::where(['id_jurusan','=','1'],
      ['kode','=','5.3.2'])->first();
      $standar5->nilai=$skor_5_3_2;
      $standar5->save();

      //5.4.1.a
      $standar5=Standar5::where(['id_jurusan','=','1'],
      ['kode','=','5.4.1.a'])->first();
      $standar5->nilai=$skor5_4_1_a;
      $standar5->save();

      //5.4.1.c
      $standar5=Standar5::where(['id_jurusan','=','1'],
      ['kode','=','5.4.1.c'])-first();
      $standar5->nilai=$skor5_4_1_c;
      $standar5->save();

      //5.4.2
      $standar5=Standar5::where(['id_jurusan','=','1'],
      ['kode','=','5.4.2'])->first();
      $standar5->nilai=$skor5_4_2;
      $standar5->save();

      //5.5.1.b
      $standar5=Standar5::where(['id_jurusan','=','1'],
      ['kode','=','5.5.1.b'])->first();
      $standar5->nilai=$skor5_5_1_b ;
      $standar5->save();

      //5.5.1.c
      $standar5=Standar5::where(['id_jurusan','=','1'],
      ['kode','=','5.5.1.c'])-first();
      $standar5->nilai=$skor5_5_1_c;
      $standar5->save();

      //5.5.2
      $standar5=Standar5::where(['id_jurusan','=','1'],
      ['kode','=','5.5.2'])->first();
      $standar5->nilai=$skor_rpta5_5_2;
      $standar5->save();

      //5.7.2
      $standar5=Standar5::where(['id_jurusan','=','1'],
      ['kode','=','5.7.2'])->first();
      $standar5->nilai=$skor5_7_2;
      $standar5->save();

      //5.7.3
      $standar5=Standar5::where(['id_jurusan','=','1'],
      ['kode','=','5.7.3'])->first();
      $standar5->nilai=$skor5_7_3;
      $standar5->save();

      //5.7.5
      $standar5=Standar5::where(['id_jurusan','=','1'],
      ['kode','=','5.7.5'])->first();
      $standar5->nilai=$skor5_7_5;
      $standar5->save();

    }
    else {

      // 5.1.1.a
      $standar5=new Standar5;
      $standar5->kode ='5.1.1.a';
      $standar5->id_jurusan = '1';
      $standar5->nilai = $skor5_1_1_a;
      $standar5-> save();

      // 5.1.2.b
      $standar5= new Standar5;
      $standar5->kode='5.1.2.b';
      $standar5->id_jurusan='1';
      $standar5->nilai = $skor_5_1_2_b;
      $standar5->save();

      // 5.3.1.a
      $standar5=new Standar5;
      $standar5->kode='5.1.3.a';
      $standar5->id_jurusan='1';
      $standar5->nilai = $skor5_1_3_a;
      $standar5->save();

      // 5.3.2
      $standar5=new Standar5;
      $standar5->kode='5.3.2';
      $standar5->id_jurusan='1';
      $standar5->nilai=$skor_5_3_2;
      $standar5->save();

      //5.4.1.a
      $standar5=new Standar5;
      $standar5->kode='5.4.1.a';
      $standar5->id_jurusan="1";
      $standar5->nilai=$skor5_4_1_a;
      $standar5->save();

      // 5.4.1.c
      $standar5=new Standar5;
      $standar5->kode="5.4.1.c";
      $standar5->id_jurusan='1';
      $standar5->nilai=$skor5_4_1_c;
      $standar5->save();

      //5.4.2
      $standar5=new Standar5;
      $standar5->kode='5.4.2';
      $standar5->id_jurusan='1';
      $standar5->nilai=$skor5_4_2;
      $standar5->save();

      //5.5.1.b
      $standar5=new Standar5;
      $standar5->kode='5.5.1.b';
      $standar5->id_jurusan='1';
      $standar5->nilai=$skor5_5_1_b;
      $standar5->save();

      //5.5.1.c
      $standar5=new Standar5;
      $standar5->kode='5.5.1.c';
      $standar5->id_jurusan='1';
      $standar5->nilai=$skor5_5_1_c;
      $standar5->save();

      //5.5.2
      $standar5=new Standar5;
      $standar5->kode='5.5.2';
      $standar5->id_jurusan='1';
      $standar5->nilai=$skor_rpta5_5_2;
      $standar5->save();

      //5.7.2
      $standar5=new Standar5;
      $standar5->kode='5.7.2';
      $standar5->id_jurusan='1';
      $standar5->nilai=$skor5_7_3;
      $standar5->save();

      //5.7.5
      $standar5=new Standar5;
      $standar5->kode='5.7.5';
      $standar5->id_jurusan='1';
      $standar5->nilai=$skor5_7_5;
      $standar5->save();

    }
      return redirect()->back();
      // return $skor5_1_3_a;
    }

}

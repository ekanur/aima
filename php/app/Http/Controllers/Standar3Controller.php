<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Standar3;

class Standar3Controller extends Controller
{
    public function index()
    {
        $standar="Standar 3";
        return view('standar3.index', compact('standar'));
    }
    public function save(Request $request)
    {
        //PERHITUNGAN 3.1.1.a
        $rasio=$request->n_3_1_1_mhs/$request->n_3_1_1_daya;
        if ($rasio >=5) {
          $skor3_1_1_a=4;
        }
        elseif ($rasio<5 && $rasio > 1) {
          $skor3_1_1_a=3+$rasio/2;
        }
        elseif ($rasio<= 1) {
          $skor3_1_1_a=2*$rasio;
        }
        $skor3_1_1_a = intval(round($skor3_1_1_a));

        //PERHITUNGAN 3.1.1.b
        $rasiomaba=$request->n_3_1_1_b1/$request->n_3_1_1_b1;
        if ($rasiomaba>=95) {
          $skor3_1_1_b=4;
        }
        elseif ($rasiomaba>25 && $rasiomaba<95) {
          $skor3_1_1_b=(40*$rasiomaba)/7;
        }
        elseif ($rasiomaba<=25) {
          $skor3_1_1_b=0;
        }
        $skor3_1_1_b = intval(round($skor3_1_1_b));

        //PERHITUNGAN 3.1.1.c
        $nRM = $request->n_3_1_1_c1/$request->n_3_1_1_c2;
        if ($nRM <=  0.25) {
          $skor3_1_1_c=4;
        }
        elseif ($nRM>0.25 && $nRM<1.25) {
          $skor3_1_1_c=($nRM*(-4))+5;
        }
        elseif ($nRM >= 1.25) {
          $skor3_1_1_c=0;
        }
        $skor3_1_1_c = intval(round($skor3_1_1_c));

        //PERHITUNGAN 3.1.1.d
        $ipk=$request->n_3_1_1_d;
        if ($ipk>=3) {
          $skor3_1_1_d=4;
        }
        elseif ($ipk>2.75 && $ipk<3) {
          $skor3_1_1_d=(4*$ipk)-8;
        }
        elseif ($ipk >= 2 && $ipk<=2.75) {
          $skor3_1_1_d=(4*$ipk-2)/3;
        }
        $skor3_1_1_d = intval(round($skor3_1_1_d));

        //PERHITUNGAN 3.1.2
        $skor3_1_2=$request->n_3_1_2;
        $skor3_1_2 = intval(round($skor3_1_2));

        //PERHITUNGAN 3.1.3
        $skor3_1_3=$request->n_3_1_3;
        $skor3_1_3 = intval(round($skor3_1_3));

        //PERHITUNGAN 3.1.4.a
        $ktw=($request->f/$request->d)*100/100;
        if ($ktw>=50) {
          $skor3_1_4_a=4;
        }
        elseif ($ktw>0 && $ktw<50) {
          $skor3_1_4_a=(6*$ktw)+1;
        }
        elseif ($ktw=0) {
          $skor3_1_4_a=0;
        }
        $skor3_1_4_a = intval(round($skor3_1_4_a));


        //PERHITUNGAN 3.1.4.b
        $mdo=($request->a-$request->b-$request->c)/$request->a*100/100;
        if ($mdo<=6) {
          $skor3_1_4_b=4;
        }
        elseif ($mdo>=6 && $mdo<=45) {
          $skor3_1_4_b=(180-(400*$mdo))/39;
        }
        $skor3_1_4_b = intval(round($skor3_1_4_b));

        //PERHITUNGAN 3.2.1
        $skor3_2_1=$request->n_3_2_1;
        $skor3_2_1 = intval(round($skor3_2_1));

        //PERHITUNGAN 3.2.2
        $skor3_2_2=$request->n_3_2_2;
        $skor3_2_2 = intval(round($skor3_2_2));

        //PERHITUNGAN 3.3.1.b
        $skor3_3_1_b=$request->n_3_3_1_b;
        $skor3_3_1_b = intval(round($skor3_3_1_b));

        //PERHITUNGAN 3.3.1.c
        $na=((4*$request->a)+(3*$request->b)+(2*$request->c)+$request->d)/7;
        $skor3_3_1_c=$na;
        $skor3_3_1_c = intval(round($skor3_3_1_c));


        //PERHITUNGAN 3.3.2
        $nrmt=$request->n_3_3_2;
        if ($nrmt<=3) {
          $skor3_3_2=4;
        }
        elseif ($nrmt>3 && $nrmt<18) {
          $skor3_3_2=(72-4*$nrmt)/15;
        }
        elseif ($nrmt>=18) {
          $skor3_3_2=0;
        }
        $skor3_3_2 = intval(round($skor3_3_2));

        //PERHITUNGAN 3.3.3
        $npbs=$request->n_3_3_3;
        if ($npbs>=80) {
          $skor3_3_3=4*100/100;
        }
        elseif ($npbs<80) {
          $skor3_3_3=5*$npbs*100/100;
        }
        $skor3_3_3 = intval(round($skor3_3_3));

        //PERHITUNGAN 3.4.1
        $skor3_4_1=$request->n_3_4_1;
        $skor3_4_1 = intval(round($skor3_4_1));

        //PERHITUNGAN 3.4.2
        $skor3_4_2=$request->n_3_4_2;
        $skor3_4_2 = intval(round($skor3_4_2));


        $oldStandar3 = Standar3::where('id_jurusan', '=', '1')->first();
        if($oldStandar3){
          //jika sudah maka ...

          $standar3 = Standar3::where([
            ['id_jurusan', '=', '1'],
            ['kode', '=', '3.1.1.a']
          ])->first();
          $standar3->nilai = $skor3_1_1_a;
          $standar3->save();

          $standar3 = Standar3::where([
            ['id_jurusan', '=', '1'],
            ['kode', '=', '3.1.1.b']
          ])->first();
          $standar3->nilai = $skor3_1_1_b;
          $standar3->save();

          $standar3 = Standar3::where([
            ['id_jurusan', '=', '1'],
            ['kode', '=', '3.1.1.c']
          ])->first();
          $standar3->nilai = $skor3_1_1_c;
          $standar3->save();

          $standar3 = Standar3::where([
            ['id_jurusan', '=', '1'],
            ['kode', '=', '3.1.1.d']
          ])->first();
          $standar3->nilai = $skor3_1_1_d;
          $standar3->save();

          $standar3 = Standar3::where([
            ['id_jurusan', '=', '1'],
            ['kode', '=', '3.1.2']
          ])->first();
          $standar3->nilai = $skor3_1_2;
          $standar3->save();

          $standar3 = Standar3::where([
            ['id_jurusan', '=', '1'],
            ['kode', '=', '3.1.3']
          ])->first();
          $standar3->nilai = $skor3_1_3;
          $standar3->save();

          $standar3 = Standar3::where([
            ['id_jurusan', '=', '1'],
            ['kode', '=', '3.1.4.a']
          ])->first();
          $standar3->nilai = $skor3_1_4_a;
          $standar3->save();

          $standar3 = Standar3::where([
            ['id_jurusan', '=', '1'],
            ['kode', '=', '3.1.4.b']
          ])->first();
          $standar3->nilai = $skor3_1_4_b;
          $standar3->save();

          $standar3 = Standar3::where([
            ['id_jurusan', '=', '1'],
            ['kode', '=', '3.2.1']
          ])->first();
          $standar3->nilai = $skor3_2_1;
          $standar3->save();

          $standar3 = Standar3::where([
            ['id_jurusan', '=', '1'],
            ['kode', '=', '3.2.2']
          ])->first();
          $standar3->nilai = $skor3_2_2;
          $standar3->save();

          $standar3 = Standar3::where([
            ['id_jurusan', '=', '1'],
            ['kode', '=', '3.3.1.b']
          ])->first();
          $standar3->nilai = $skor3_3_1_b;
          $standar3->save();

          $standar3 = Standar3::where([
            ['id_jurusan', '=', '1'],
            ['kode', '=', '3.3.1.c']
          ])->first();
          $standar3->nilai = $skor3_3_1_c;
          $standar3->save();

          $standar3 = Standar3::where([
            ['id_jurusan', '=', '1'],
            ['kode', '=', '3.3.2']
          ])->first();
          $standar3->nilai = $skor3_3_2;
          $standar3->save();

          $standar3 = Standar3::where([
            ['id_jurusan', '=', '1'],
            ['kode', '=', '3.3.3']
          ])->first();
          $standar3->nilai = $skor3_3_3;
          $standar3->save();

          $standar3 = Standar3::where([
            ['id_jurusan', '=', '1'],
            ['kode', '=', '3.4.1']
          ])->first();
          $standar3->nilai = $skor3_4_1;
          $standar3->save();

          $standar3 = Standar3::where([
            ['id_jurusan', '=', '1'],
            ['kode', '=', '3.4.2']
          ])->first();
          $standar3->nilai = $skor3_4_2;
          $standar3->save();
          // return "updated";
        }
        else
        {
          //jika belum maka ...

          $standar3 = new Standar3;
          $standar3->kode = '3.1.1.a';
          $standar3->id_jurusan = '1';
          $standar3->nilai = $skor3_1_1_a;
          $standar3->save();

          $standar3 = new Standar3;
          $standar3->kode = '3.1.1.b';
          $standar3->id_jurusan = '1';
          $standar3->nilai = $skor3_1_1_b;
          $standar3->save();

          $standar3 = new Standar3;
          $standar3->kode = '3.1.1.c';
          $standar3->id_jurusan = '1';
          $standar3->nilai = $skor3_1_1_c;
          $standar3->save();

          $standar3 = new Standar3;
          $standar3->kode = '3.1.1.d';
          $standar3->id_jurusan = '1';
          $standar3->nilai = $skor3_1_1_d;
          $standar3->save();

          $standar3 = new Standar3;
          $standar3->kode = '3.1.2';
          $standar3->id_jurusan = '1';
          $standar3->nilai = $skor3_1_2;
          $standar3->save();

          $standar3 = new Standar3;
          $standar3->kode = '3.1.3';
          $standar3->id_jurusan = '1';
          $standar3->nilai = $skor3_1_3;
          $standar3->save();

          $standar3 = new Standar3;
          $standar3->kode = '3.1.4.a';
          $standar3->id_jurusan = '1';
          $standar3->nilai = $skor3_1_4_a;
          $standar3->save();

          $standar3 = new Standar3;
          $standar3->kode = '3.1.4.b';
          $standar3->id_jurusan = '1';
          $standar3->nilai = $skor3_1_4_b;
          $standar3->save();

          $standar3 = new Standar3;
          $standar3->kode = '3.2.1';
          $standar3->id_jurusan = '1';
          $standar3->nilai = $skor3_2_1;
          $standar3->save();

          $standar3 = new Standar3;
          $standar3->kode = '3.2.2';
          $standar3->id_jurusan = '1';
          $standar3->nilai = $skor3_2_2;
          $standar3->save();

          $standar3 = new Standar3;
          $standar3->kode = '3.3.1.b';
          $standar3->id_jurusan = '1';
          $standar3->nilai = $skor3_3_1_b;
          $standar3->save();

          $standar3 = new Standar3;
          $standar3->kode = '3.3.1.c';
          $standar3->id_jurusan = '1';
          $standar3->nilai = $skor3_3_1_c;
          $standar3->save();

          $standar3 = new Standar3;
          $standar3->kode = '3.3.2';
          $standar3->id_jurusan = '1';
          $standar3->nilai = $skor3_3_2;
          $standar3->save();

          $standar3 = new Standar3;
          $standar3->kode = '3.3.3';
          $standar3->id_jurusan = '1';
          $standar3->nilai = $skor3_3_3;
          $standar3->save();

          $standar3 = new Standar3;
          $standar3->kode = '3.4.1';
          $standar3->id_jurusan = '1';
          $standar3->nilai = $skor3_4_1;
          $standar3->save();

          $standar3 = new Standar3;
          $standar3->kode = '3.4.2';
          $standar3->id_jurusan = '1';
          $standar3->nilai = $skor3_4_2;
          $standar3->save();

          // return "saved";
    }
     return redirect()->back();

  }
}

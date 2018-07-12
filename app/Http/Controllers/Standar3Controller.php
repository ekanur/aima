<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Standar3;

class Standar3Controller extends Controller
{
    public function index()
    {
        $standar="Standar 3";
        $data = Standar3::select('kode', 'data', 'skor', 'kategori')->where('id_prodi', '=', session('id_prodi'))->whereYear("created_at", '=', date("Y"))->orderBy('kode', 'asc')->get();
        if(!$data->count()){
          $dataCheck = true;
        }else{
          $dataCheck = false;
        }
        return view('standar3.index', compact('standar', 'data', 'dataCheck'));
    }


    public function save(Request $in)
    {
        //PERHITUNGAN 3.1.1.a
        // dd($in->all());
    if($in->n_3_1_1_mhs == 0 || $in->n_3_1_1_daya == 0){
       $rasio = 1;
     }else{
       $rasio=$in->n_3_1_1_mhs/$in->n_3_1_1_daya;
     }
       if ($rasio >=5) {
         $kategori3_1_1_a=4;
       }
       elseif ($rasio<5 && $rasio > 1) {
         $kategori3_1_1_a=3+$rasio/2;
       }
       elseif ($rasio<= 1) {
         $kategori3_1_1_a=2*$rasio;
       }
       $kategori3_1_1_a = intval(round($kategori3_1_1_a));
       $data3_1_1_a = '['.$in->n_3_1_1_mhs.', '.$in->n_3_1_1_daya.']';
       $skor3_1_1_a = $rasio;

        //PERHITUNGAN 3.1.1.b
      if($in->n_3_1_1_b1 == 0 || $in->n_3_1_1_b2 == 0){
        $rasiomaba = 0;
      }else{
        $rasiomaba =  $in->n_3_1_1_b1/$in->n_3_1_1_b2;
      }
        
        if ($rasiomaba>=95) {
          $kategori3_1_1_b=4;
        }
        elseif ($rasiomaba>25 && $rasiomaba<95) {
          $kategori3_1_1_b=(40*$rasiomaba)/7;
        }
        elseif ($rasiomaba<=25) {
          $kategori3_1_1_b=0;
        }
        $kategori3_1_1_b = intval(round($kategori3_1_1_b));
        $data3_1_1_b = '['.$in->n_3_1_1_b1.', '.$in->n_3_1_1_b2.']';
        $skor3_1_1_b = $rasiomaba;

        //PERHITUNGAN 3.1.1.c
      if($in->n_3_1_1_c1 == 0 || $in->n_3_1_1_c2 == 0){
        $nRM = 0;
      }else{
        $nRM = $in->n_3_1_1_c1/$in->n_3_1_1_c2;
      }        
        
        if ($nRM <=  0.25) {
          $kategori3_1_1_c=4;
        }
        elseif ($nRM>0.25 && $nRM<1.25) {
          $kategori3_1_1_c=($nRM*(-4))+5;
        }
        elseif ($nRM >= 1.25) {
          $kategori3_1_1_c=0;
        }
        $kategori3_1_1_c = intval(round($kategori3_1_1_c));
        $data3_1_1_c = '['.$in->n_3_1_1_c1.', '.$in->n_3_1_1_c2.']';
        $skor3_1_1_c = $nRM;

        //PERHITUNGAN 3.1.1.d
        if(!isset($in->n_3_1_1_d)){
            $ipk=0;
          }else{
            $ipk=$in->n_3_1_1_d;
          }
            
            if ($ipk>=3) {
              $kategori3_1_1_d=4;
            }
            elseif ($ipk>2.75 && $ipk<3) {
              $kategori3_1_1_d=(4*$ipk)-8;
            }
            elseif ($ipk >= 2 && $ipk<=2.75) {
              $kategori3_1_1_d=(4*$ipk-2)/3;
            }else{
              // $kategori3_1_1_d=$in->n_3_1_1_d;
              $kategori3_1_1_d=0;
            }
        $kategori3_1_1_d = intval(round($kategori3_1_1_d));
        $data3_1_1_d = '['.$in->n_3_1_1_d.']';
        $skor3_1_1_d = $ipk;

        //PERHITUNGAN 3.1.2
        $kategori3_1_2=$in->n_3_1_2;
        $kategori3_1_2 = intval(round($kategori3_1_2));
        $data3_1_2 = '['.$in->n_3_1_2.']';
        $skor3_1_2 = $kategori3_1_2;

        //PERHITUNGAN 3.1.3
        $kategori3_1_3=$in->n_3_1_3;
        $kategori3_1_3 = intval(round($kategori3_1_3));
        $data3_1_3 = '['.$in->n_3_1_3.']';
        $skor3_1_3 = $kategori3_1_3;

        //PERHITUNGAN 3.1.4.a
        if ($in->f == 0 || $in->d == 0) {
         $ktw = 0;
        } else {
          $ktw=($in->f/$in->d)*100/100;
        }
        
        if ($ktw>=0.5) {
          $kategori3_1_4_a=4;
        }
        elseif ($ktw>0 && $ktw<0.5) {
          $kategori3_1_4_a=(6*$ktw)+1;
        }
        elseif ($ktw<=0) {
          $kategori3_1_4_a=0;
        }
        $kategori3_1_4_a = intval(round($kategori3_1_4_a));
        $data3_1_4_a = '['.$in->f.', '.$in->d.']';
        $skor3_1_4_a = $ktw;

        //PERHITUNGAN 3.1.4.b
        // if($in->a3_1_4_b == 0 || $in->b3_1_4_b ){

        // }else{

        // }

        $mdo = ($in->a3_1_4_b == 0)? 0: ((($in->a3_1_4_b - $in->b3_1_4_b - $in->c3_1_4_b)/$in->a3_1_4_b)*100)/100;
        if ($mdo<=6) {
          $kategori3_1_4_b=4;
        }
        elseif ($mdo>=6 && $mdo<=45) {
          $kategori3_1_4_b=(180-(400*$mdo))/39;
        }
        $kategori3_1_4_b = intval(round($kategori3_1_4_b));
        $data3_1_4_b = '['.$in->a3_1_4_b.', '.$in->b3_1_4_b.', '.$in->c3_1_4_b.']';
        $skor3_1_4_b = $mdo;

        //PERHITUNGAN 3.2.1
        $kategori3_2_1=$in->n_3_2_1;
        $kategori3_2_1 = intval(round($kategori3_2_1));
        $data3_2_1 = '['.$in->n_3_2_1.']';
        $skor3_2_1 = $kategori3_2_1;

        //PERHITUNGAN 3.2.2
        $kategori3_2_2=$in->n_3_2_2;
        $kategori3_2_2 = intval(round($kategori3_2_2));
        $data3_2_2 = '['.$in->n_3_2_2.']';
        $skor3_2_2 = $kategori3_2_2;

        //PERHITUNGAN 3.3.1.b
        $kategori3_3_1_b=$in->n_3_3_1_b;
        $kategori3_3_1_b = intval(round($kategori3_3_1_b));
        $data3_3_1_b = '['.$in->n_3_3_1_b.']';
        $skor3_3_1_b = $kategori3_3_1_b;

        //PERHITUNGAN 3.3.1.c
        $na=((4*$in->a3_3_1_c)+(3*$in->b3_3_1_c)+(2*$in->c3_3_1_c)+$in->d3_3_1_c)/7;
        $kategori3_3_1_c=$na;
        $kategori3_3_1_c = intval(round($kategori3_3_1_c));
        $data3_3_1_c = '['.$in->a3_3_1_c.', '.$in->b3_3_1_c.', '.$in->c3_3_1_c.', '.$in->d3_3_1_c.']';
        $skor3_3_1_c = $na;

        //PERHITUNGAN 3.3.2
        $nrmt=$in->n_3_3_2;
        if ($nrmt<=3) {
          $kategori3_3_2=4;
        }
        elseif ($nrmt>3 && $nrmt<18) {
          $kategori3_3_2=(72-4*$nrmt)/15;
        }
        elseif ($nrmt>=18) {
          $kategori3_3_2=0;
        }
        $kategori3_3_2 = intval(round($kategori3_3_2));
        $data3_3_2 = '['.$in->n_3_3_2.']';
        $skor3_3_2 = $nrmt;

        //PERHITUNGAN 3.3.3
        $npbs=$in->n_3_3_3;
        if ($npbs>=80) {
          $kategori3_3_3=4;
        }
        elseif ($npbs<80) {
          $kategori3_3_3=5*($npbs/100);
        }
        $kategori3_3_3 = intval(round($kategori3_3_3));
        $data3_3_3 = '['.$in->n_3_3_3.']';
        $skor3_3_3 = $npbs;

        //PERHITUNGAN 3.4.1
        $kategori3_4_1=$in->n_3_4_1;
        $kategori3_4_1 = intval(round($kategori3_4_1));
        $data3_4_1 = '['.$in->n_3_4_1.']';
        $skor3_4_1 = $kategori3_4_1;

        //PERHITUNGAN 3.4.2
        $kategori3_4_2=$in->n_3_4_2;
        $kategori3_4_2 = intval(round($kategori3_4_2));
        $data3_4_2 = '['.$in->n_3_4_2.']';
        $skor3_4_2 = $kategori3_4_2;


        $oldStandar3 = Standar3::where('id_prodi', '=', session('id_prodi'))->whereYear("created_at", '=', date("Y"))->first();
        if($oldStandar3){
          //jika sudah maka ...

          $standar3 = Standar3::where([
            ['id_prodi', '=', session('id_prodi')],
            ['kode', '=', '3.1.1.a']
          ])->whereYear("created_at", '=', date("Y"))->first();
          $standar3->kategori = $kategori3_1_1_a;
          $standar3->data = $data3_1_1_a;
          $standar3->skor = $skor3_1_1_a;
          $standar3->save();

          $standar3 = Standar3::where([
            ['id_prodi', '=', session('id_prodi')],
            ['kode', '=', '3.1.1.b']
          ])->whereYear("created_at", '=', date("Y"))->first();
          $standar3->kategori = $kategori3_1_1_b;
          $standar3->data = $data3_1_1_b;
          $standar3->skor = $skor3_1_1_b;
          $standar3->save();

          $standar3 = Standar3::where([
            ['id_prodi', '=', session('id_prodi')],
            ['kode', '=', '3.1.1.c']
          ])->whereYear("created_at", '=', date("Y"))->first();
          $standar3->kategori = $kategori3_1_1_c;
          $standar3->data = $data3_1_1_c;
          $standar3->skor = $skor3_1_1_c;
          $standar3->save();

          $standar3 = Standar3::where([
            ['id_prodi', '=', session('id_prodi')],
            ['kode', '=', '3.1.1.d']
          ])->whereYear("created_at", '=', date("Y"))->first();
          $standar3->kategori = $kategori3_1_1_d;
          $standar3->data = $data3_1_1_d;
          $standar3->skor = $skor3_1_1_d;
          $standar3->save();

          $standar3 = Standar3::where([
            ['id_prodi', '=', session('id_prodi')],
            ['kode', '=', '3.1.2']
          ])->whereYear("created_at", '=', date("Y"))->first();
          $standar3->kategori = $kategori3_1_2;
          $standar3->data = $data3_1_2;
          $standar3->skor = $skor3_1_2;
          $standar3->save();

          $standar3 = Standar3::where([
            ['id_prodi', '=', session('id_prodi')],
            ['kode', '=', '3.1.3']
          ])->whereYear("created_at", '=', date("Y"))->first();
          $standar3->kategori = $kategori3_1_3;
          $standar3->data = $data3_1_3;
          $standar3->skor = $skor3_1_3;
          $standar3->save();

          $standar3 = Standar3::where([
            ['id_prodi', '=', session('id_prodi')],
            ['kode', '=', '3.1.4.a']
          ])->whereYear("created_at", '=', date("Y"))->first();
          $standar3->kategori = $kategori3_1_4_a;
          $standar3->data = $data3_1_4_a;
          $standar3->skor = $skor3_1_4_a;
          $standar3->save();

          $standar3 = Standar3::where([
            ['id_prodi', '=', session('id_prodi')],
            ['kode', '=', '3.1.4.b']
          ])->whereYear("created_at", '=', date("Y"))->first();
          $standar3->kategori = $kategori3_1_4_b;
          $standar3->data = $data3_1_4_b;
          $standar3->skor = $skor3_1_4_b;
          $standar3->save();

          $standar3 = Standar3::where([
            ['id_prodi', '=', session('id_prodi')],
            ['kode', '=', '3.2.1']
          ])->whereYear("created_at", '=', date("Y"))->first();
          $standar3->kategori = $kategori3_2_1;
          $standar3->data = $data3_2_1;
          $standar3->skor = $skor3_2_1;
          $standar3->save();

          $standar3 = Standar3::where([
            ['id_prodi', '=', session('id_prodi')],
            ['kode', '=', '3.2.2']
          ])->whereYear("created_at", '=', date("Y"))->first();
          $standar3->kategori = $kategori3_2_2;
          $standar3->data = $data3_2_2;
          $standar3->skor = $skor3_2_2;
          $standar3->save();

          $standar3 = Standar3::where([
            ['id_prodi', '=', session('id_prodi')],
            ['kode', '=', '3.3.1.b']
          ])->whereYear("created_at", '=', date("Y"))->first();
          $standar3->kategori = $kategori3_3_1_b;
          $standar3->data = $data3_3_1_b;
          $standar3->skor = $skor3_3_1_b;
          $standar3->save();

          $standar3 = Standar3::where([
            ['id_prodi', '=', session('id_prodi')],
            ['kode', '=', '3.3.1.c']
          ])->whereYear("created_at", '=', date("Y"))->first();
          $standar3->kategori = $kategori3_3_1_c;
          $standar3->data = $data3_3_1_c;
          $standar3->skor = $skor3_3_1_c;
          $standar3->save();

          $standar3 = Standar3::where([
            ['id_prodi', '=', session('id_prodi')],
            ['kode', '=', '3.3.2']
          ])->whereYear("created_at", '=', date("Y"))->first();
          $standar3->kategori = $kategori3_3_2;
          $standar3->data = $data3_3_2;
          $standar3->skor = $skor3_3_2;
          $standar3->save();

          $standar3 = Standar3::where([
            ['id_prodi', '=', session('id_prodi')],
            ['kode', '=', '3.3.3']
          ])->whereYear("created_at", '=', date("Y"))->first();
          $standar3->kategori = $kategori3_3_3;
          $standar3->data = $data3_3_3;
          $standar3->skor = $skor3_3_3;
          $standar3->save();

          $standar3 = Standar3::where([
            ['id_prodi', '=', session('id_prodi')],
            ['kode', '=', '3.4.1']
          ])->whereYear("created_at", '=', date("Y"))->first();
          $standar3->kategori = $kategori3_4_1;
          $standar3->data = $data3_4_1;
          $standar3->skor = $skor3_4_1;
          $standar3->save();

          $standar3 = Standar3::where([
            ['id_prodi', '=', session('id_prodi')],
            ['kode', '=', '3.4.2']
          ])->whereYear("created_at", '=', date("Y"))->first();
          $standar3->kategori = $kategori3_4_2;
          $standar3->data = $data3_4_2;
          $standar3->skor = $skor3_4_2;
          $standar3->save();
          // return "updated";
        }
        else
        {
          //jika belum maka ...

          $standar3 = new Standar3;
          $standar3->kode = '3.1.1.a';
          $standar3->id_prodi = session('id_prodi');
          $standar3->kategori = $kategori3_1_1_a;
          $standar3->data = $data3_1_1_a;
          $standar3->skor = $skor3_1_1_a;
          $standar3->save();

          $standar3 = new Standar3;
          $standar3->kode = '3.1.1.b';
          $standar3->id_prodi = session('id_prodi');
          $standar3->kategori = $kategori3_1_1_b;
          $standar3->data = $data3_1_1_b;
          $standar3->skor = $skor3_1_1_b;
          $standar3->save();

          $standar3 = new Standar3;
          $standar3->kode = '3.1.1.c';
          $standar3->id_prodi = session('id_prodi');
          $standar3->kategori = $kategori3_1_1_c;
          $standar3->data = $data3_1_1_c;
          $standar3->skor = $skor3_1_1_c;
          $standar3->save();

          $standar3 = new Standar3;
          $standar3->kode = '3.1.1.d';
          $standar3->id_prodi = session('id_prodi');
          $standar3->kategori = $kategori3_1_1_d;
          $standar3->data = $data3_1_1_d;
          $standar3->skor = $skor3_1_1_d;
          $standar3->save();

          $standar3 = new Standar3;
          $standar3->kode = '3.1.2';
          $standar3->id_prodi = session('id_prodi');
          $standar3->kategori = $kategori3_1_2;
          $standar3->data = $data3_1_2;
          $standar3->skor = $skor3_1_2;
          $standar3->save();

          $standar3 = new Standar3;
          $standar3->kode = '3.1.3';
          $standar3->id_prodi = session('id_prodi');
          $standar3->kategori = $kategori3_1_3;
          $standar3->data = $data3_1_3;
          $standar3->skor = $skor3_1_3;
          $standar3->save();

          $standar3 = new Standar3;
          $standar3->kode = '3.1.4.a';
          $standar3->id_prodi = session('id_prodi');
          $standar3->kategori = $kategori3_1_4_a;
          $standar3->data = $data3_1_4_a;
          $standar3->skor = $skor3_1_4_a;
          $standar3->save();

          $standar3 = new Standar3;
          $standar3->kode = '3.1.4.b';
          $standar3->id_prodi = session('id_prodi');
          $standar3->kategori = $kategori3_1_4_b;
          $standar3->data = $data3_1_4_b;
          $standar3->skor = $skor3_1_4_b;
          $standar3->save();

          $standar3 = new Standar3;
          $standar3->kode = '3.2.1';
          $standar3->id_prodi = session('id_prodi');
          $standar3->kategori = $kategori3_2_1;
          $standar3->data = $data3_2_1;
          $standar3->skor = $skor3_2_1;
          $standar3->save();

          $standar3 = new Standar3;
          $standar3->kode = '3.2.2';
          $standar3->id_prodi = session('id_prodi');
          $standar3->kategori = $kategori3_2_2;
          $standar3->data = $data3_2_2;
          $standar3->skor = $skor3_2_2;
          $standar3->save();

          $standar3 = new Standar3;
          $standar3->kode = '3.3.1.b';
          $standar3->id_prodi = session('id_prodi');
          $standar3->kategori = $kategori3_3_1_b;
          $standar3->data = $data3_3_1_b;
          $standar3->skor = $skor3_3_1_b;
          $standar3->save();

          $standar3 = new Standar3;
          $standar3->kode = '3.3.1.c';
          $standar3->id_prodi = session('id_prodi');
          $standar3->kategori = $kategori3_3_1_c;
          $standar3->data = $data3_3_1_c;
          $standar3->skor = $skor3_3_1_c;
          $standar3->save();

          $standar3 = new Standar3;
          $standar3->kode = '3.3.2';
          $standar3->id_prodi = session('id_prodi');
          $standar3->kategori = $kategori3_3_2;
          $standar3->data = $data3_3_2;
          $standar3->skor = $skor3_3_2;
          $standar3->save();

          $standar3 = new Standar3;
          $standar3->kode = '3.3.3';
          $standar3->id_prodi = session('id_prodi');
          $standar3->kategori = $kategori3_3_3;
          $standar3->data = $data3_3_3;
          $standar3->skor = $skor3_3_3;
          $standar3->save();

          $standar3 = new Standar3;
          $standar3->kode = '3.4.1';
          $standar3->id_prodi = session('id_prodi');
          $standar3->kategori = $kategori3_4_1;
          $standar3->data = $data3_4_1;
          $standar3->skor = $skor3_4_1;
          $standar3->save();

          $standar3 = new Standar3;
          $standar3->kode = '3.4.2';
          $standar3->id_prodi = session('id_prodi');
          $standar3->kategori = $kategori3_4_2;
          $standar3->data = $data3_4_2;
          $standar3->skor = $skor3_4_2;
          $standar3->save();

          // return "saved";
    }
     return redirect()->back();

  }

  public function simpan($kode, $data){
    $standar3 = Standar3::where([
      ['id_prodi', '=', session('id_prodi')],
      ['kode', '=', $kode]
    ])->whereYear("created_at", '=', date("Y"))->first();
    $standar3->kategori = $data['kategori'];
    $standar3->data = $data['data'];
    $standar3->skor = $data['skor'];
    $standar3->save();
  }

  public function update($kode, $data){
    $standar3 = new Standar3;
    $standar3->kode = $kode;
    $standar3->id_prodi = session('id_prodi');
    $standar3->kategori = $data['kategori'];
    $standar3->data = $data['data'];
    $standar3->skor = $data['skor'];
    $standar3->save();
  }

  public function _311a($calon_mahasiswa=null, $daya_tampung=null){
    if(is_null($calon_mahasiswa) || is_null($daya_tampung)){
      return array("kategori"=>null,"data"=>null, "skor"=>null);
    }
    
    if($calon_mahasiswa == 0 || $daya_tampung == 0){
      $skor = 1;
    }else{
      $skor=$calon_mahasiswa/$daya_tampung;
    }
      if ($skor >=5) {
        $kategori=4;
      }
      elseif ($skor<5 && $skor > 1) {
        $kategori=3+$skor/2;
      }
      elseif ($skor<= 1) {
        $kategori=2*$skor;
      }

      $kategori = intval(round($kategori));
      $data = '['.$calon_mahasiswa.', '.$daya_tampung.']';

    return array("kategori"=>$kategori,"data"=>$data, "skor"=>$skor);
  }

  public function _311b($mahasiswa_registrasi, $lulus_seleksi){

  }

  public function _311c($total_transfer, $bukan_transfer){

  }

  public function _311d($avg_ipk){

  }

  public function _312($beban_dosen){

  }

  public function _313($prestasi){

  }

  public function _314a($lulus_tepat_waktu, $lulus){

  }

  public function _314b($jumlah_mahasiswa, $drop_out, $undur_diri){

  }

  public function _321($akses_layanan){

  }

  public function _322($kualitas_layanan){

  }

  public function _331b($hasil_pelacakan){

  }

  public function _331c($sangat_baik, $baik, $cukup, $kurang){

  }

  public function _332($masa_tunggu){

  }

  public function _333($kesesuaian){

  }

  public function _341($partisipasi_alumni){

  }

  public function _342($partisipasi_alumni){

  }


}

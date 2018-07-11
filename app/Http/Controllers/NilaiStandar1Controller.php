<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\NilaiStandar1;
use App\NilaiStandar2;
use App\NilaiStandar3;
use App\NilaiStandar4;
use App\NilaiStandar5;
use App\NilaiStandar6;
use App\NilaiStandar7;

class NilaiStandar1Controller extends Controller
{
  public function index()
  {
    $standar="Rekap Nilai Standar 1";
    $nilaistandar1=NilaiStandar1::select('kode','kategori')->where('id_prodi',session('id_prodi'))->whereYear("created_at", '=', date("Y"))->get();
    // $total =NilaiStandar1::standar1s("kategori")->sum('nilai');
    $total = 0;
    foreach ($nilaistandar1 as $value) {
      $total += $value->kategori;
    }
    return view("NilaiStandar1.index",compact('nilaistandar1','standar','total'));
  }


  function cetak(){
    $nilaistandar1=NilaiStandar1::select('kode','kategori')->where('id_prodi',session('id_prodi'))->whereYear("created_at", '=', date("Y"))->get();
    $nilaistandar2=NilaiStandar2::select('kode','kategori')->where('id_prodi',session('id_prodi'))->whereYear("created_at", '=', date("Y"))->get();
    $nilaistandar3=NilaiStandar3::select('kode','kategori')->where('id_prodi',session('id_prodi'))->whereYear("created_at", '=', date("Y"))->get();
    $nilaistandar4=NilaiStandar4::select('kode','kategori')->where('id_prodi',session('id_prodi'))->whereYear("created_at", '=', date("Y"))->get();
    $nilaistandar5=NilaiStandar5::select('kode','kategori')->where('id_prodi',session('id_prodi'))->whereYear("created_at", '=', date("Y"))->get();
    $nilaistandar6=NilaiStandar6::select('kode','kategori')->where('id_prodi',session('id_prodi'))->whereYear("created_at", '=', date("Y"))->get();
    $nilaistandar7=NilaiStandar7::select('kode','kategori')->where('id_prodi',session('id_prodi'))->whereYear("created_at", '=', date("Y"))->get();


    return view("cetak", compact('nilaistandar1', 'nilaistandar2', 'nilaistandar3', 'nilaistandar4', 'nilaistandar5', 'nilaistandar6', 'nilaistandar7'));
  }
}

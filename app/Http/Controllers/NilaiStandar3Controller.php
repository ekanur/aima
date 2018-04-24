<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\NilaiStandar3 ;

class NilaiStandar3Controller extends Controller
{
  public function index()
  {
    $standar="Rekap Nilai Standar 3";
    $nilaistandar3=NilaiStandar3::select('kode','kategori')->where('id_prodi',session('id_prodi'))->get();
    $total=0;
    foreach ($nilaistandar3 as $value) {
      $total+=$value->kategori;
    }
    return view("NilaiStandar3.index", compact('nilaistandar3', 'standar','total'));
  }
}

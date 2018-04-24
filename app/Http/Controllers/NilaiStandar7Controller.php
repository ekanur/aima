<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\NilaiStandar7 ;

class NilaiStandar7Controller extends Controller
{
  public function index()
  {
    $standar="Rekap Nilai Standar 7";
      $nilaistandar7=NilaiStandar7::select('kode','kategori')->where('id_prodi',session('id_prodi'))->get();
      $total=0;
      foreach ($nilaistandar7 as  $value) {
        $total+=$value->kategori;
      }
    return view("NilaiStandar7.index", compact('nilaistandar7', 'standar','total'));
  }
}

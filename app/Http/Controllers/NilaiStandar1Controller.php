<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\NilaiStandar1;

class NilaiStandar1Controller extends Controller
{
  public function index()
  {
    $standar="Rekap Nilai Standar 1";
    $nilaistandar1=NilaiStandar1::select('kode','kategori')->where('id_prodi',session('id_prodi'))->get();
    // $total =NilaiStandar1::standar1s("kategori")->sum('nilai');
    $total = 0;
    foreach ($nilaistandar1 as $value) {
      $total += $value->kategori;
    }
    return view("NilaiStandar1.index",compact('nilaistandar1','standar','total'));
  }
}

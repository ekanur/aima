<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\NilaiStandar2 ;

class NilaiStandar2Controller extends Controller
{
  public function index()
  {
    $standar="Rekap Nilai Standar 2";

    $nilaistandar2=NilaiStandar2::select('kode','kategori')->where('id_prodi',session('id_prodi'))->whereYear("created_at", '=', date("Y"))->get();
    $total = 0;
    foreach ($nilaistandar2 as $value) {
      $total += $value->kategori;
    }
    $prodi = $this->getProdi();
    return view("NilaiStandar2.index",compact('nilaistandar2','standar','total', 'prodi'));
  }
}

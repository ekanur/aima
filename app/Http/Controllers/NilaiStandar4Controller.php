<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\NilaiStandar4 ;

class NilaiStandar4Controller extends Controller
{
  public function index()
  {
    $standar="Rekap Nilai Standar 4";
      $nilaistandar4=NilaiStandar4::select('kode','kategori')->where('id_prodi',session('id_prodi'))->whereYear("created_at", '=', date("Y"))->get();
      $total=0;
      foreach ($nilaistandar4 as $value) {
        $total +=$value->kategori;
      }
    return view("NilaiStandar4.index", compact('nilaistandar4', 'standar','total'));
  }
}

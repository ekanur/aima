<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\NilaiStandar5 ;

class NilaiStandar5Controller extends Controller
{
  public function index()
  {
    $standar="Rekap Nilai Standar 5";
    $nilaistandar5=NilaiStandar5::select('kode','kategori')->where('id_prodi',session('id_prodi'))->whereYear("created_at", '=', date("Y"))->get();
    $total=0;

    foreach ($nilaistandar5 as  $value) {
      $total += $value->kategori;
    }
    $prodi = $this->getProdi();
    return view("NilaiStandar5.index", compact('nilaistandar5', 'standar','total', 'prodi'));
  }
}

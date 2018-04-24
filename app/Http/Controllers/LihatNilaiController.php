<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\LihatNilai;

class LihatNilaiController extends Controller
{
  public function index()
  {
    $standar="Rekapitulasi";
    return view("LihatNilai.index", compact("standar"));
  }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
	public function __construct(){
    	$this->middleware('auth_josso');
    }
    public function index(){
    	// dd(session('id_prodi'));
      return view('welcome');
    }
}

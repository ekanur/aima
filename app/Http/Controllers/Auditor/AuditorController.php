<?php
namespace App\Http\Controllers\Auditor;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Fakultas;

class AuditorController extends Controller
{
    public function index()
    {
          // $standar = "Standar 2";
          $fakultas = Fakultas::with(["prodi" => function($query){
            $query->where('jjg_kd', '!=', '')->orderBy("jjg_kd");
          }])->where([["fak_kd", "!=", '00'], ["fak_kd", "!=", '31']])->get();
          
          // dd($fakultas);

          return view('auditor.index', compact('fakultas'));
    }

    public function isi(Request $request)
    {
      if($request->idprodi == null){
        return redirect()->back();
      }else{
        return redirect('/auditor/isi/'.$request->idprodi.'/standar1/');
      }
    }

    public function lihat(Request $request)
    {

    }

    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

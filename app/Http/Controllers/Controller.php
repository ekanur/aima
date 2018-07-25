<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Session;
use App\Prodi;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public $detail_prodi = array();

    function getProdi()
    {
    	$session_prodi = json_decode(session('prodi'));
    	// dd($session_prodi);
    	$detail_prodi = Prodi::select("pro_kd", "pro_nm", "jjg_kd")->whereIn("pro_kd", $session_prodi)->orderBy('pro_kd')->get();
    	foreach ($detail_prodi as $prodi) {
    		# code...
	    	$this->detail_prodi[] = array("pro_kd"=>$prodi->pro_kd, "pro_nm"=>$prodi->jjg_kd." ".$prodi->pro_nm);
    	}

    	return $this->detail_prodi;
    }

    function getCatatan($model){
        $catatan = null;
        if (!is_subclass_of($model, 'Illuminate\Database\Eloquent\Model')) {
            return null;
        }

        $data = $model::select("kode", "catatan")->where("id_prodi", session('id_prodi'))->whereYear("created_at", '=', date("Y"))->get();

        foreach ($data as $data_catatan) {
            $catatan[$data_catatan->kode] = $data_catatan->catatan;
        }

        // dd($catatan);

        return $catatan;
    }


    function ubahProdi($id_prodi){
    	Session::put('id_prodi', $id_prodi);

    	return redirect()->back();
    }
}

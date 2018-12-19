<?php

namespace App\Listeners;

use \Aacotroneo\Saml2\Events\Saml2LoginEvent;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Session;
use App\KProdi;
use App\Auditor;
use Illuminate\Support\Facades\DB;

class SamlLoginListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  Saml2LoginEvent  $event
     * @return void
     */
    public function handle(Saml2LoginEvent $event)
    {
        $user = $event->getSaml2User();
        $userData = $user->getAttributes();

        
        $koordinator = KProdi::where("nip","=", $userData["username"][0])->get();

            $dosen = DB::connection("pgsql_3")->table("m_dosen")->join("m_prodi", "m_dosen.pro_kd", "=", "m_prodi.pro_kd")->select("m_prodi.pro_kd", "m_prodi.pro_nm", "m_prodi.jjg_kd")->where("m_dosen.dsn_nip", "=", $userData["username"][0])->get();
            $auditor = Auditor::where("nip", "=", $userData["username"][0])->get();

                if(sizeof($auditor)>0){
                    // $request->merge(array("role"=>"auditor","nip" =>$userData["username"][0]));
                    session(["role"=>"auditor"]);
                    // session("nip", $userData["username"][0]);
                    session(["auditor_id" => $auditor[0]->id]);
                            // session("id_jurusan", );
                }elseif(sizeof($koordinator)>0){
                    // $request->merge(array("role"=>"koordinator","nip" =>$userData["username"][0], "prodi" => json_encode($prodi)));
                    $prodi = array();

                    foreach ($koordinator as $kprodi) {
                        $prodi[]=$kprodi->pro_kd;
                    }
                    session(["role" => "koordinator"]);
                    // session('nip', $userData["username"][0]);
                    if (null==session('id_prodi')) {
                        session(['id_prodi' => $prodi[0]]);
                    }
                            // session('nama_prodi', $dosen[0]->jjg_kd." ".$dosen[0]->pro_nm);
                    session(["prodi" => json_encode($prodi)]);
                }

                session(["nip" => $userData["username"][0]]);
                session(["tipe" => $userData["tipe"][0]]);
            
    }
}

<?php 
namespace App\Http\Middleware;

use Closure;
use Illuminate\Contracts\Auth\Guard;
use Session;
use App\Pegawai;
use App\Auditor;
use Illuminate\Support\Facades\DB;
include(app_path() . '/josso-php-inc/josso-cfg.inc');
include(app_path() . '/josso-php-inc/class.jossoagent.php');
//\Composer\Autoload\includeFile(App\josso-php-inc\josso-cfg.inc);

class Authenticate_josso {

	/**
	 * The Guard implementation.
	 *
	 * @var Guard
	 */
	protected $auth_josso;
        
	/**
	 * Create a new filter instance.
	 *
	 * @param  Guard  $auth
	 * @return void
	 */
	public function __construct(Guard $auth_josso)
	{
		$this->auth_josso = $auth_josso;
	}

	/**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Closure  $next
	 * @return mixed
	 */
	public function handle($request, Closure $next)
	{
		/* @var $josso_agent type */
                session_start();
                $josso_agent = \jossoagent::getNewInstance();
                $ssoSessionId = $josso_agent->accessSession();
                $user= $josso_agent->getUserInSession();
                if(isset($user)){

                    // $pegawai = Pegawai::where("nip","=", $user->name)->where("id_jabatan_struktural", '=',"72")->orWhere("id_jabatan_struktural", "=", '31')->get();
                    $pegawai = Pegawai::where("nip","=", $user->name)->whereIn("id_jabatan_struktural",['72','31', '23'])->get();
                    $dosen = DB::connection("pgsql_3")->table("m_dosen")->join("m_prodi", "m_dosen.pro_kd", "=", "m_prodi.pro_kd")->select("m_prodi.pro_kd", "m_prodi.pro_nm", "m_prodi.jjg_kd")->where("m_dosen.dsn_nip", "=", $user->name)->get();
                    $auditor = Auditor::where("nip", "=", $user->name)->first();
                    // dd($pegawai);
                    // dd($dosen);


                    if(sizeof($auditor)>0){
                        $request->merge(array("role"=>"auditor","nip" =>$user->name));
                        Session::put("role", "auditor");
                        Session::put("nip", $user->name);
                        Session::put("auditor_id", $auditor->id);
                        // Session::put("id_jurusan", );
                    }elseif(sizeof($pegawai)>0){
                        $request->merge(array("role"=>"koordinator","nip" =>$user->name, "id_prodi"=>$dosen[0]->pro_kd, "nama_prodi"=>$dosen[0]->jjg_kd." ".$dosen[0]->pro_nm));
                        Session::put("role", "koordinator");
                        Session::put('nip', $user->name);
                        Session::put('id_prodi', $dosen[0]->pro_kd);
                        Session::put('nama_prodi', $dosen[0]->jjg_kd." ".$dosen[0]->pro_nm);
                    }

                    // if(null == sizeof($dosen) || null == sizeof($pegawai)){
                    //     return redirect("https://profil.um.ac.id");
                    // }
                    // dd(session('role'));
                    return $next($request);
                }else{
                    $this->jossoRequestLoginForUrl(url());
                }
                /*if ($this->auth->guest())
		{
			if ($request->ajax())
			{
				return response('Unauthorized.', 401);
			}
			else
			{
				return redirect()->guest('auth/login');
			}
		}

		return $next($request);*/
	}
        function jossoRequestLoginForUrl($currentUrl) {

                $_SESSION['JOSSO_ORIGINAL_URL'] = $currentUrl;

                // Get JOSSO Agent instance
                $josso_agent = \jossoagent::getNewInstance();
                $securityCheckUrl = $this->createBaseUrl().$josso_agent->getBaseCode().'/servicecheck';
                //print $securityCheckUrl;exit;

                $loginUrl = 'https://akun.um.ac.id/josso/signon/login.do?josso_back_to=' . $securityCheckUrl;

                $loginUrl = $loginUrl . $this->createFrontChannelParams();
                //print $loginUrl;exit;

                $this->forceRedirect($loginUrl);

        }
        
        function createBaseUrl() {
                // ReBuild securityCheck URL
                $protocol = 'http';
                $host = $_SERVER['HTTP_HOST'];

                if (isset($_SERVER['HTTPS'])) {

                    // This is a secure connection, the default PORT is 443
                    $protocol = 'https';
                    if ($_SERVER['SERVER_PORT'] != 443) {
                        $port = $_SERVER['SERVER_PORT'];
                    }

                } else {
                    // This is a NON secure connection, the default PORT is 80
                    $protocol = 'http';
                    if ($_SERVER['SERVER_PORT'] != 80) {
//                        $port = $_SERVER['SERVER_PORT'];
                    }
                }

                return $protocol.'://'.$host.(isset($port) ? ':'.$port : '');

        }
        public static function forceRedirect($url,$die=true) {
                if (!headers_sent()) {
                    ob_end_clean();
                    header("Location: " . $url);
                }
                printf('<HTML>');
                printf('<META http-equiv="Refresh" content="0;url=%s">', $url);
                printf('<BODY onload="try {self.location.href="%s" } catch(e) {}"><a href="%s">Redirect </a></BODY>', $url, $url);
                printf('</HTML>');
                if ($die)
                    die();
        }
        function createFrontChannelParams() {
                // Add some request parameters like host name
                $host = $_SERVER['HTTP_HOST'];
                $params = '&josso_partnerapp_host=' . $host;

                return $params;

                // TODO : Support josso_partnerapp_ctx param too ?

        }


}

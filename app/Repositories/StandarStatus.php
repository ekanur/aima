<?php 
namespace App\Repositories;

use App\Standar1;
use App\Standar2;
use App\Standar3;
use App\Standar4;
use App\Standar5;
use App\Standar6;
use App\Standar7;

class StandarStatus 
{
	protected $standar1;
	protected $standar2;
	protected $standar3;
	protected $standar4;
	protected $standar5;
	protected $standar6;
	protected $standar7;
	protected $status_code;
	
	function __construct($id_prodi)
	{
		$this->standar1 = Standar1::where('id_prodi', '=', $id_prodi)->count();
		$this->standar2 = Standar2::where('id_prodi', '=', $id_prodi)->count();
		$this->standar3 = Standar3::where('id_prodi', '=', $id_prodi)->count();
		$this->standar4 = Standar4::where('id_prodi', '=', $id_prodi)->count();
		$this->standar5 = Standar5::where('id_prodi', '=', $id_prodi)->count();
		$this->standar6 = Standar6::where('id_prodi', '=', $id_prodi)->count();
		$this->standar7 = Standar7::where('id_prodi', '=', $id_prodi)->count();

		// dd($this->standar1." ".$this->standar2." ".$this->standar3." ".$this->standar4." ".$this->standar5." ".$this->standar6);

		$this->status_code = $this->standar1 + $this->standar2 + $this->standar3 + $this->standar4 + $this->standar5 + $this->standar6 + $this->standar7 ;
	}

	public function getStatus(){
		return $this->status_code;
	}

	public function getStatusMessage(){
		$status_message = "Koordinator Prodi belum mengisi angket";


		if($this->status_code > 0 && $this->status_code<7){
			$status_message = "Koordinator Prodi sedang menginputkan data pada angket";
		}elseif($this->status_code == 7){
			$status_message = "Koordinator Prodi telah selesai menginput angket pada semua standar";
		}

		return $status_message;

	}
}
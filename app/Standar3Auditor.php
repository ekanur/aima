<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Standar3Auditor extends Model
{
	protected $table = "standar3s_auditor";
	 use SoftDeletes;
}

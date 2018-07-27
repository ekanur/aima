<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Standar5Auditor extends Model
{
 	protected $table = "standar5s_auditor";
	use SoftDeletes;
}

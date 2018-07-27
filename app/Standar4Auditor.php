<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Standar4Auditor extends Model
{
	protected $table = "standar4s_auditor";
	use SoftDeletes;
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Standar2Auditor extends Model
{
	protected $table = "standar2s_auditor";
	 use SoftDeletes;
}

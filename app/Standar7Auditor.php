<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Standar7Auditor extends Model
{
  protected $table = "standar7s_auditor";
  use SoftDeletes;

}

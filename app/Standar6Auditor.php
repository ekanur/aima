<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Standar6Auditor extends Model
{
  protected $table = "standar6s_auditor";
   use SoftDeletes;
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Standar1Auditor extends Model
{
    protected $table = "standar1s_auditor";
     use SoftDeletes;
}

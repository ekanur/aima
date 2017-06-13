<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    //

    protected $connection='pgsql_2';
    protected $table="pegawai.pegawai";
    protected $primaryKey='kd_pegawai';

    public $incrementing=false;
    public $timestamps=false;
}

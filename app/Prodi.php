<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prodi extends Model
{
    //
    protected $connection='pgsql_3';
    protected $table="dtum.m_prodi";
    protected $primaryKey='pro_kd';

    public $incrementing=false;
    public $timestamps=false;
}

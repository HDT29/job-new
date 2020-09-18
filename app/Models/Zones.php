<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Zones extends Model
{
    protected $table = 'zones';
    public function jobs_zone(){
        return $this->hasMany('App\Models\Job','id_zone','id');
    }
    public function companys_zone(){
        return $this->hasMany('App\Models\CompanyUser','id_zone','id');
    }
}

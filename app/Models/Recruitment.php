<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Recruitment extends Model
{
    protected $table='recruitment';
    protected $fillable=[
        'user_id','job_id' ,'date',
    ];
    public function applyjob(){
        return $this->belongsTo('App\Models\Job','job_id','id');
    }
    public function companyuser(){
        return $this->belongsTo('App\Models\CompanyUser','company_id','id');
    }
}

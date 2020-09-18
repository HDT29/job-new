<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SaveTheJob extends Model
{
    protected $table='save_the_job';
    protected $fillable=[
        'job_id','user_id', 'company_id','date',
    ];
    // public function user(){
    //     return $this->belongsToMany('App\User','user_id','id');
    // }
    public function savejob(){
        return $this->belongsTo('App\Models\Job','job_id','id');
    }
    public function companyuser(){
        return $this->belongsTo('App\Models\CompanyUser','company_id','id');
    }
}

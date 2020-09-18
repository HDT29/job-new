<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    protected $table='jobs';
    protected $fillable=[
        'job_name','slug_name','company_user_id','job_category_id','company_name','address','deadline_job',
        'amount_people','gender','experience','degree','job_desc','saraly','interest','status','request','images',
    ];
    public  function job_categories(){
        return $this->belongsTo('App\Models\JobCategorie','job_category_id','id');
    }
    public  function zones(){
        return $this->belongsTo('App\Models\Zones','id_zone','id');
    }
    public  function language(){
        return $this->belongsTo('App\Models\Language','id_language','id');
    }
    public function companyuser(){
        return $this->belongsTo('App\Models\CompanyUser','company_user_id','id');
    }

    public static function insert($aryInsert){
        $job = new Job();
        foreach($aryInsert as $key => $value){
            $job->{$key} = $value;
        }
        return $job->save();
    }

}

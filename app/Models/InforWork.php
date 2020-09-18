<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class InforWork extends Model
{
    protected $table='infor_work';
    protected $fillable=[
        'desired_jobs','career_job','level','salary_present','salary_desires','position','user_id','zone','career','study_time','school_name',
    ];
}

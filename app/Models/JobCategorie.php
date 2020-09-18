<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JobCategorie extends Model
{
    protected $table='job_categories';
    protected $fillable=[
        'job_category_name',
    ];
    public function jobs(){

        return $this->hasMany('App\Models\Job','job_category_id','id');
    }

}
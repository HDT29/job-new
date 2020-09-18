<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    protected $table='language';
    protected $fillable=[
        'name_language',
    ];
    public function language(){

        return $this->hasMany('App\Models\Job','id_language','id');
    }
}

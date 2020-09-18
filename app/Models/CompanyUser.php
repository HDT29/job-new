<?php

namespace App\Models;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticableTrait;

use Illuminate\Database\Eloquent\Model;

class CompanyUser extends Model implements Authenticatable
{
    use AuthenticableTrait;
    protected $table = 'company_users';
    protected $fillable =[

        'name','phone','email','password',
    ];
    public  function zones(){
        return $this->belongsTo('App\Models\Zones','id_zone','id');
    }
}

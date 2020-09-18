<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InforCv extends Model
{
    protected $table='info_cv';
    protected $fillable=[
        'info_name','avatar','info_position','date_of_birth','phone_number','email','address','facebook','gender',
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WebSetting extends Model
{
    protected $table='web_setting';
    protected $fillable=[
        'email','phone','address','time_working',
    ];
}

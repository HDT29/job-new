<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Prizes extends Model
{
    protected $table= 'prizes';
    protected $fillable=[
        'prize_name','prize_time','cv_id',
    ];
}

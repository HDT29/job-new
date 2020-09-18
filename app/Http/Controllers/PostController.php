<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;


use App\Models\Job;

class PostController extends Controller
{
    public function getList(){
        $tintuc = TinTuc::orderBy('id','DESC')->get();
        return view('pages.home.home',['tintuc'=>$tintuc]);
    }

}

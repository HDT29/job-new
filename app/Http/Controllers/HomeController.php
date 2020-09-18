<?php

namespace App\Http\Controllers;

use DB;
use Session;
use Illuminate\Support\Carbon;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Models\Job;
use App\Models\CompanyUser;
use App\User;
use App\Models\SaveTheJob;
use App\Models\Rating;
use App\Models\Recruitment;
use App\Models\Zones;
use Auth;
session_start();
class HomeController extends Controller
{
    // public function index(){
    //   return view('pages.home.home');
    // }
    public function getList(Request $request){

        $zones =Zones::all();
        $job = Job::all();
        $company = CompanyUser::all();
        if($user = Auth::user()){
        $jobzone = Job::where('id_zone',$user->id_zone)->take(4)->get();
        }else{
        $jobzone = null;
        }
        return view('pages.home.home',['job'=>$job,'zones'=> $zones,'jobzone'=>$jobzone,'company'=>$company]);
    }
    public function getPost($id){

        $job = Job::find($id);
        $date = now();

        $company = CompanyUser::find($job->company_user_id);

        if($user = Auth::user()){

            $savetjob = DB::table('save_the_job')->join('users', 'save_the_job.user_id', '=', 'users.id')
            ->join('jobs', 'save_the_job.job_id', '=', 'jobs.id')
            ->select('save_the_job.*', 'users.id', 'jobs.id')
            ->where([
                ['job_id', '=', $job->id],
                ['user_id', '=', $user->id],


            ])
            ->first();

        }else{
            $savetjob = null;
        }

        if($user = Auth::user()){

            $recruitment = DB::table('recruitment')->join('users', 'recruitment.user_id', '=', 'users.id')
            ->join('jobs', 'recruitment.job_id', '=', 'jobs.id')
            ->select('recruitment.*', 'users.id', 'jobs.id')
            ->where([
                ['job_id', '=', $job->id],
                ['user_id', '=', $user->id],


            ])
            ->first();

        }else{
            $recruitment = null;
        }




        return view('pages.home.detail',compact('job','date','user','savetjob','recruitment','company'));
    }









    public function getlistCompany(){
        $company = CompanyUser::all();
        $zones = Zones::all();
        return view('pages.home.companys',['company'=>$company,'zones'=>$zones]);
    }
    public function getCompany($id){
        $company = CompanyUser::find($id);

        return view('pages.home.companydetail',compact('company'));
    }

    public function getRate($id){
        $company = CompanyUser::find($id);
        $user = Auth::user();
        $date = now();


        return view('pages.home.rating',compact('company','user','date'));
    }

     public function postRate(Request $request,$id){
        $company = CompanyUser::find($id);
        $user = Auth::user();
        $date = now();

        $rate = new Rating();
        $rate->user_id = $user->id;
        $rate->company_id = $company->id;
        $rate->title = $request->title;
        $rate->pros = $request->pros;
        $rate->cons = $request->cons;
        $rate->date = $date;

        $rate->save();

        return redirect()->back()->with('success',"Gửi thành công !");
    }

    public function search(Request $request){
        $kw=$request->search;
        $zone=$request->zone;
        $job = Job::with('companyuser')->where('job_name','like',"%$kw%")->orWhere('id_zone','like', '$zone')->orderBy('id','DESC')->paginate(5);
        // $job->withPath("search/?keyword=$kw");

        return view('pages.home.search',['job'=>$job]);
    }
    public function getAllJob(){
        $jobs = Job::inRandomOrder()->limit(16)->get();
        $zones =Zones::all();
        $company = CompanyUser::all();
        return view('pages.home.all-job',['jobs'=>$jobs,'company'=>$company,'zones'=>$zones]);
    }




}